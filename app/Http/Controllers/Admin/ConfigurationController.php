<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function create()
    {
        return view('admin.configuration_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'configuration_name' => 'required|string|max:10',
            'configuration_price' => 'required|numeric'
        ]);

        Configuration::create($request->only(['configuration_name', 'configuration_price']));

        return back()->with('success', 'Configuration added!');
    }
}