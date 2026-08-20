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
        $images = Gallery::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        $categories = \App\Models\Category::orderBy('name', 'ASC')->get();
        return view('admin.gallery.create', compact('categories'));
    }

    public function edit(Gallery $gallery)
    {
        $categories = \App\Models\Category::orderBy('name', 'ASC')->get();
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    public function show(Gallery $gallery)
    {
        $galleryItem = $gallery;
        return view('admin.gallery.show', compact('gallery', 'galleryItem'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'description' => 'nullable|string|max:1000',
            'event_date' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer|min:0',
        ]);

        $validatedData['is_featured'] = $request->has('is_featured');
        $validatedData['order'] = $validatedData['order'] ?? 0;

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
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'description' => 'nullable|string|max:1000',
            'event_date' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer|min:0',
        ]);

        $validatedData['is_featured'] = $request->has('is_featured');
        $validatedData['order'] = $validatedData['order'] ?? ($gallery->order ?? 0);

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }
            $validatedData['image'] = $request->file('image')->store('gallery', 'public');
        } else {
            unset($validatedData['image']);
        }

        $gallery->update($validatedData);
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully.');
    }
}
