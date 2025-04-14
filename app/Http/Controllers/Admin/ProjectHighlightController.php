<?php

// app/Http/Controllers/ProjectHighlightController.php
namespace App\Http\Controllers\Admin;

use App\Models\ProjectHighlight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProjectHighlightController extends Controller
{
    public function index()
    {
        $highlights = ProjectHighlight::all();
        return view('admin.project_highlights.index', compact('highlights'));
    }

    public function create()
    {
        return view('admin.project_highlights.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
        ]);

        ProjectHighlight::create($request->only('name'));

        return redirect()->route('admin.project_highlights.index')->with('success', 'Highlight created!');
    }

    public function edit($id)
    {
        $highlight = ProjectHighlight::findOrFail($id);
        return view('admin.project_highlights.edit', compact('highlight'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:150',
        ]);

        $highlight = ProjectHighlight::findOrFail($id);
        $highlight->update($request->only('name'));

        return redirect()->route('admin.project_highlights.index')->with('success', 'Highlight updated!');
    }

    public function destroy($id)
    {
        $highlight = ProjectHighlight::findOrFail($id);
        $highlight->delete();

        return redirect()->route('admin.project_highlights.index')->with('success', 'Highlight deleted!');
    }
}
