<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property; // ✅ Import the Property model

class PropertiesController extends Controller {

    public function location($city) {

        $properties = Property::where('city', $city)->get();

        return view('pages.properties', compact('properties', 'city'));

        //$properties = Property::where('city', 'Gurgaon')->get();

        //return view('pages.properties', ['city' => $city]);

        //$city = $request->query('city'); // e.g., "Gurgaon"

        // You can now use this $city value to fetch data or pass to a view
        //return view('pages.properties', compact('city'));

        //return view('pages.properties');
    }
}
