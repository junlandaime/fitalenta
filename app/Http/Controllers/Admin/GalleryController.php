<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::orderBy('created_at', 'desc')->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'nullable|max:255'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $validatedData['image'] = $imagePath;
        }

        Gallery::create($validatedData);

        return redirect()->route('admin.gallery.index')->with('success', 'Image uploaded successfully.');
    }

    public function destroy(Gallery $image)
    {
        $image->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }
}
