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
    return view('admin.create');
}

    public function store(Request $request)
{
    $request->validate([
        'project_name' => 'required|string|max:100',
        'price' => 'nullable|numeric',
        'area' => 'required|numeric',
        'address' => 'required|string',
        'city' => 'nullable|string|max:50',
        'description' => 'nullable|string|max:1000',
        'possession' => 'required|in:New Launch,Under Construction,Ready to Move',
        'property_type_old' => 'array',

        'configurations.*.name' => 'nullable|string|max:10',
        'configurations.*.price' => 'nullable|numeric',

        'amenities_list' => 'array',
        'amenities_list.*' => 'nullable|string|max:50',

        'project_highlights' => 'array',
        'project_highlights.*' => 'nullable|string|max:150',

        'location_advantages_name' => 'array',
        'location_advantages_name.*' => 'nullable|string|max:150',

        'faqs_name' => 'array',
        'faqs_name.*' => 'nullable|string|max:255',

        'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    DB::beginTransaction();

    try {
        // Configurations
        $configIds = [];
        foreach ($request->configurations as $config) {
            if (!empty($config['name']) && !empty($config['price'])) {
                $newConfig = Configuration::create([
                    'configuration_name' => $config['name'],
                    'configuration_price' => $config['price'],
                ]);
                $configIds[] = $newConfig->config_id;
            }
        }

        // Amenities
        $amenityIds = [];
        foreach ($request->amenities_list as $name) {
            if (!empty($name)) {
                $amenity = Amenity::firstOrCreate(['amenities_name' => $name]);
                $amenityIds[] = $amenity->amenity_id;
            }
        }

        // Gallery Uploads
        $galleryIds = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('uploads/gallery', $filename, 'public');

                $gallery = Gallery::create([
                    'gallery_name' => $filename,
                    'gallery_url' => '/storage/' . $path,
                ]);
                $galleryIds[] = $gallery->gallery_id;
            }
        }

        // Highlights
        $highlightIds = [];
        foreach ($request->project_highlights as $highlight) {
            if (!empty($highlight)) {
                $h = ProjectHighlight::create(['name' => $highlight]);
                $highlightIds[] = $h->id;
            }
        }

        // Location Advantages
        $locationAdvantageIds = [];
        foreach ($request->location_advantages_name as $name) {
            if (!empty($name)) {
                $la = LocationAdvantage::create(['location_advantages_name' => $name]);
                $locationAdvantageIds[] = $la->location_advantages_id;
            }
        }

        // FAQs
        $faqIds = [];
        foreach ($request->faqs_name as $faq) {
            if (!empty($faq)) {
                $f = Faq::create(['faqs_name' => $faq]);
                $faqIds[] = $f->faqs_id;
            }
        }

        // Property
        $property = Property::create([
            'project_name' => $request->project_name,
            'configuration' => $configIds[0] ?? null,
            'property_type_old' => implode(',', $request->property_type_old ?? []),
            'amenities' => $amenityIds[0] ?? null,
            'gallery' => $galleryIds[0] ?? null,
            'project_highlights' => $highlightIds[0] ?? null,
            'location_advantages' => $locationAdvantageIds[0] ?? null,
            'faqs' => $faqIds[0] ?? null,
            'price' => $request->price,
            'area' => $request->area,
            'address' => $request->address,
            'city' => $request->city,
            'description' => $request->description,
            'possession' => $request->possession,
        ]);

        DB::commit();
        return redirect()->back()->with('success', 'Property created successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Error saving property: ' . $e->getMessage());
    }
}

    
}

