<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Awards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Awards::where('stock', '=', 100)->get();

        return view('awards.index')->with('awards', $awards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function show(Awards $awards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function edit(Awards $awards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Awards $awards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Awards $awards)
    {
        //
    }

    public function redeem(Awards $awards)
    {
        if (!$awards->stock || $awards->cost > auth()->user()->coins) return redirect()->back()->with('error', 'Nie kombinuj!');
        // $awards->stock--;
        $awards->save();

        $user = User::find(auth()->user()->id);

        $user->coins -= $awards->cost;
        $user->save();

        $msg = 'Odebrałeś <strong class="uppercase">' . $awards->name . '</strong>!';
        $status = TRUE;

        switch ($awards->type) {
            case 1:
                $code = DB::select('SELECT `code` FROM `awards_codes` WHERE `award_id` = ? LIMIT 1', [$awards->id]);

                $msg .= ' Twój kod to: <strong class="drop-shadow uppercase">' . $code[0]->code . '</strong>';
                break;
            case 2:
                break;
        }

        DB::insert('INSERT into `awards_redeem` (`user_id`, `award_id`, `status`, `created_at`, `updated_at`) values (?, ?, ? ,?, ?)', [auth()->user()->id, $awards->id, $status ,now(), now()]);

        return redirect()->back()->with('success', $msg);
    }
}
