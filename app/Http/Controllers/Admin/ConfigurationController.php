<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configurations = Configuration::all();
        return view('admin.configuration.index', compact('configurations'));
    }

    public function create()
    {
        return view('admin.configuration.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'configuration_name' => 'required|string|max:10',
            'configuration_price' => 'required|numeric'
        ]);

        Configuration::create($request->only(['configuration_name', 'configuration_price']));

        return redirect()->route('admin.configuration.index')->with('success', 'Configuration added!');
    }

    public function edit($id)
    {
        $configuration = Configuration::findOrFail($id);
        return view('admin.configuration.edit', compact('configuration'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'configuration_name' => 'required|string|max:10',
            'configuration_price' => 'required|numeric'
        ]);

        $configuration = Configuration::findOrFail($id);
        $configuration->update($request->only(['configuration_name', 'configuration_price']));

        return redirect()->route('admin.configuration.index')->with('success', 'Configuration updated!');
    }

    public function destroy($id)
    {
        Configuration::findOrFail($id)->delete();
        return redirect()->route('admin.configuration.index')->with('success', 'Configuration deleted!');
    }
}