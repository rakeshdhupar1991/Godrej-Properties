<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property; // ✅ Import the Property model

class PropertyDetailController extends Controller {

    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('pages.property', compact('property'));
    }
    public function getImage($id)
{
    $property = \App\Models\Property::findOrFail($id);

    // Check if there's image data
    if (!$property->image_url) {
        abort(404);
    }

    return response($property->image_url)
        ->header('Content-Type', 'image/jpeg'); // Or 'image/png' depending on format
}
}
