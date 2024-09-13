<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Gallery $gallery)
    {
        // $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();

        return view('admin.gallery.edit', compact('gallery'));
    }

    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|max:255'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $validatedData['image'] = $imagePath;
        }

        Gallery::create($validatedData);

        return redirect()->route('admin.gallery.index')->with('success', 'Image uploaded successfully.');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|max:255'
        ]);

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $validatedData['image'] = $request->file('image')->store('gallery', 'public');
        }


        $gallery->update($validatedData);
        return redirect()->route('admin.gallery.index')->with('success', 'gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        // dd($gallery);
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }
}
