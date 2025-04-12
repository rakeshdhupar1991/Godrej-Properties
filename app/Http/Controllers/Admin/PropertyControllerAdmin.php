<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Configuration;
use App\Models\Amenity;
use App\Models\Gallery;
use App\Models\ProjectHighlight;
use App\Models\LocationAdvantage;
use App\Models\Faq;

class PropertyControllerAdmin extends Controller
{
    public function create()
    {
        return view('admin.create', [
            'configuration' => Configuration::all(),
            'amenities' => Amenity::all(),
            'galleries' => Gallery::all(),
            'projectHighlights' => ProjectHighlight::all(),
            'locationAdvantages' => LocationAdvantage::all(),
            'faqs' => Faq::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:100',
            'configuration' => 'required|exists:configuration,config_id',
            'property_type_old' => 'nullable|string|max:255',
            'amenities' => 'required|exists:amenities,amenity_id',
            'gallery' => 'required|exists:gallery,gallery_id',
            'project_highlights' => 'required|exists:project_highlights,id',
            'location_advantages' => 'required|exists:location_advantages,location_advantages_id',
            'faqs' => 'required|exists:faqs,faqs_id',
            'price' => 'nullable|numeric',
            'area' => 'required|integer',
            'address' => 'required|string|max:250',
            'city' => 'nullable|string|max:50',
            'description' => 'nullable|string|max:1000',
            'possession' => 'required|in:New Launch,Under Construction,Ready to Move',
        ]);

        $property = Property::create($validated);

        return response()->json([
            'message' => 'Property created successfully!',
            'property' => $property
        ], 201);
    }

    /*public function create()
    {
        return view('admin.create');
    }*/
}

