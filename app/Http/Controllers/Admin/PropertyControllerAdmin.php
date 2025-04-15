<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'project_name' => 'required|string',
            'price' => 'nullable|numeric',
            'area' => 'required|string',
            'address' => 'required|string',
            'city' => 'nullable|string',
            'description' => 'nullable|string',
            'possession' => 'required|string',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle gallery images
        $galleryPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $name = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('gallery', $name, 'public');
                $galleryPaths[] = 'storage/' . $path;
            }
        }

        $property = new Property();
        $property->project_name = $request->project_name;
        $property->price = $request->price;
        $property->area = $request->area;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->description = $request->description;
        $property->possession = $request->possession;
        $property->property_type_old = implode(',', $request->input('property_type_old', []));
        $property->configuration = json_encode($request->input('configurations', []));
        $property->amenities = implode(',', $request->input('amenities_list', []));
        $property->gallery = implode(',', $galleryPaths);

        $highlights = array_filter($request->input('project_highlights', []));
        $property->project_highlights = json_encode(
            array_map(fn($highlight) => ['name' => trim($highlight)], $highlights)
        );
       
        $advantages = array_filter($request->input('location_advantages_name', [])); // fixed input name
        $property->location_advantages = json_encode(
            array_map(fn($adv) => ['name' => trim($adv)], $advantages)
        );

        $property->faqs = implode(',', $request->input('faqs_name', []));
        $property->save();

        return redirect()->back()->with('success', 'Property added successfully!');
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $property->update([
            'project_name' => $request->project_name,
            'price' => $request->price,
            'area' => $request->area,
            'address' => $request->address,
            'city' => $request->city,
            'description' => $request->description,
            'possession' => $request->possession,
            'property_type_old' => implode(',', $request->input('property_type_old', [])),
            'configuration' => json_encode($request->input('configurations', [])),
            'amenities' => implode(',', $request->input('amenities_list', [])),
            
          

            'project_highlights' => json_encode(array_map(function($v) {
                return ['name' => str_replace(',', ' ', $v)];
            }, array_filter($request->input('project_highlights', [])))),

           

            'location_advantages' => implode(',', $request->input('location_advantages_name', [])),
            'faqs' => implode(',', $request->input('faqs_name', []))
        ]);

        // Optional: update gallery
        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $image) {
                $name = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('gallery', $name, 'public');
                $galleryPaths[] = 'storage/' . $path;
            }
            $property->gallery = implode(',', $galleryPaths);
            $property->save();
        }

        return redirect()->back()->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->back()->with('success', 'Property deleted.');
    }

    public function index()
    {
        // Fetch properties with pagination (10 per page)
        $properties = Property::orderBy('id', 'desc')->paginate(10);

        return view('admin.Allproperties', compact('properties'));
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.show', compact('property'));
    }
    
}

