<?php

namespace App\Services;

use App\Models\User;
use App\Models\Awards;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AwardsService
{
    private bool $status = TRUE;
    private array $data = [];
    public array $types = [1 => 'Kod', 2 => 'VIP', 3 => 'Manual'];

    public function redeem(Awards $award)
    {
        if (!$award->stock || $award->cost > auth()->user()->coins) return $this->data = ['error' => 'Nie kombinuj!'];

        $this->data['success'] = 'Odebrałeś <strong class="uppercase">' . $award->name . '</strong>!';

        switch ($award->type) {
            case 1:
                $code = DB::select('SELECT `code` FROM `awards_codes` WHERE `award_id` = ? ORDER BY RAND() LIMIT 1', [$award->id]);
                if (count($code) === 0) {
                    $this->data['error'] = 'Aktualnie brak kodów, spróbuj ponownie za jakiś czas.';
                    break;
                }
                $this->data['success'] .= ' Twój kod to: <strong class="drop-shadow uppercase">' . $code[0]->code . '</strong>';
                DB::delete('DELETE FROM `awards_codes` WHERE `code` = ?', [$code[0]->code]);
                break;
            case 2:
                $this->data['success'] .= ' Gratulacje! Możesz cieszyć się vipem na wszystkich naszych serwerach.';
                $exists = DB::select('SELECT `expire` FROM `awards_vips` WHERE `steamid` = ? LIMIT 1', [auth()->user()->steam_id]);
                if (count($exists) > 0) {
                    DB::update('UPDATE `awards_vips` set `expire` = ? WHERE `steamid` = ?', [Carbon::parse($exists[0]->expire)->addDays($award->days), auth()->user()->steam_id]);
                    break;
                }
                DB::insert('INSERT into `awards_vips` (`steamid`, `user_id`, `server_address`, `flags`, `expire`) values (?, ?, ?, ? ,?)', [auth()->user()->steam_id, auth()->user()->id, 'all', 'VIP', Carbon::now()->addDays($award->days)]);
                break;
            case 3:
                $this->status = FALSE;
                $this->data['success'] .= ' Twoja nagroda musi zostać wysłana manualnie, zazwyczaj trwa to do 24 godzin.';
                break;
        }

        if (isset($this->data['error'])) {
            unset($this->data['success']);
            return $this->data;
        } 
        
        $award->stock--;
        $award->save();

        $user = User::find(auth()->user()->id);

        $user->coins -= $award->cost;
        $user->save();

        DB::insert('INSERT into `awards_redeem` (`user_id`, `award_id`, `status`, `created_at`, `updated_at`) values (?, ?, ? ,?, ?)', [auth()->user()->id, $award->id, $this->status, now(), now()]);

        return $this->data;
    }

    public function create(array $data)
    {
        if (!$data['days']) $data['days'] = NULL;
        if (Awards::create($data)) {
            $this->data['success'] = "Pomyślnie utworzyłeś nową nagrodę.";
        } else {
            $this->data['error'] = "Nie udało się utworzyć nowej nagrody.";
        }

        return $this->data;
    }

    public function getUserAwards(int $id, int $paginate)
    {
        return DB::table('awards')
            ->join('awards_redeem', 'awards.id', '=', 'awards_redeem.award_id')
            ->where('awards_redeem.user_id', '=', $id)
            ->orderByDesc('awards_redeem.created_at')
            ->paginate($paginate);
    }

    public function getAwardTypes()
    {
        return $this->types;
    }

    public function getAwardType(Awards $award)
    {
        return $this->types[$award->type];
    }

}
