<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Configuration;
use App\Models\Amenity;
use App\Models\Gallery;
use App\Models\ProjectHighlight;
use App\Models\LocationAdvantage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createMasterData()
    {
        return view('admin.master-entry');
    }
    
    public function storeMasterData(Request $request)
    {
        // Validate all inputs
        $request->validate([
            'config_name' => 'required|string|max:255',
            'amenity_name' => 'required|string|max:255',
            'gallery_name' => 'required|string|max:255',
            'highlight' => 'required|string|max:255',
            'location_advantage' => 'required|string|max:255',
        ]);
    
        // Create entries
        Configuration::create(['config_name' => $request->config_name]);
        Amenity::create(['amenity_name' => $request->amenity_name]);
        Gallery::create(['gallery_name' => $request->gallery_name]);
        ProjectHighlight::create(['highlight' => $request->highlight]);
        LocationAdvantage::create(['location_advantages_name' => $request->location_advantage]);
    
        return redirect()->back()->with('success', 'All master data added successfully!');
    } 
}
