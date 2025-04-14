<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function create()
    {
        return view('admin.gallery_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gallery_name' => 'required|string|max:50',
            'gallery_url' => 'required|url|max:200',
        ]);

        Gallery::create($request->only(['gallery_name', 'gallery_url']));

        return back()->with('success', 'Gallery added!');
    }
}
