<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LocationAdvantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationAdvantageController extends Controller
{
    public function index()
    {
        $advantages = LocationAdvantage::all();
        return view('admin.location_advantages.index', compact('advantages'));
    }

    public function create()
    {
        return view('admin.location_advantages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_advantages_name' => 'required|string|max:150',
        ]);

        LocationAdvantage::create($request->all());

        return redirect()->route('admin.location_advantages.index')->with('success', 'Location advantage added successfully!');
    }

    public function edit($id)
    {
        $advantage = LocationAdvantage::findOrFail($id);
        return view('admin.location_advantages.edit', compact('advantage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'location_advantages_name' => 'required|string|max:150',
        ]);

        $advantage = LocationAdvantage::findOrFail($id);
        $advantage->update($request->all());

        return redirect()->route('admin.location_advantages.index')->with('success', 'Location advantage updated!');
    }

    public function destroy($id)
    {
        $advantage = LocationAdvantage::findOrFail($id);
        $advantage->delete();

        return redirect()->route('admin.location_advantages.index')->with('success', 'Deleted successfully!');
    }
}
