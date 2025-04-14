<?php

// app/Http/Controllers/AmenityController.php
namespace App\Http\Controllers\Admin;

use App\Models\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::all();
        return view('admin.amenities.index', compact('amenities'));
    }

    public function create()
    {
        return view('admin.amenities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amenities_name' => 'required|string|max:100',
        ]);

        Amenity::create($request->all());

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity created successfully.');
    }

    public function edit($id)
    {
        $amenity = Amenity::findOrFail($id);
        return view('admin.amenities.edit', compact('amenity'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'amenities_name' => 'required|string|max:50',
        ]);

        $amenity = Amenity::findOrFail($id);
        $amenity->update($request->all());

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity updated successfully.');
    }

    public function destroy($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenity->delete();

        return redirect()->route('admin.amenities.index')->with('success', 'Amenity deleted successfully.');
    }
}
