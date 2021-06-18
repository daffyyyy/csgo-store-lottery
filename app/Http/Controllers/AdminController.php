<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAwardsRequest;
use App\Http\Requests\UpdateAwardsRequest;
use App\Models\Awards;
use App\Services\AwardsService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function awards()
    {
        $awards = Awards::all()->sortByDesc('id');

        return view('admin.awards.index')->with('awards', $awards);
    }

    public function destroy(Awards $awards)
    {
        $awards->delete();

        return redirect()->back()->with('success', 'Pomyślnie usunięto nagrodę.');
    }

    public function edit(Awards $awards)
    {
        $types = (new AwardsService())->getAwardTypes();

        return view('admin.awards.edit')->with(['awards' => $awards, 'types' => $types]);
    }

    public function add()
    {
        $types = (new AwardsService())->getAwardTypes();

        return view('admin.awards.add')->with('types', $types);
    }

    public function create(CreateAwardsRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('awards', 'public');
            $data['image'] = '/storage/' . $file;
        }

        $new = (new AwardsService())->create($data);
        
        return redirect()->back()->with($new);
    }

    public function update(UpdateAwardsRequest $request, Awards $awards)
    {
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('awards', 'public');
            $data = [$request->validated(), 'image' => '/storage/' . $file];
        }

        $awards->update($data);

        return redirect()->back()->with('success', 'Pomyślnie edytowano nagrodę.');
    }
}
