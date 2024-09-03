<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_name' => 'required|max:255',
            // 'position' => 'required|max:255',
            'company' => 'required|max:255',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validatedData['image'] = $imagePath;
        }

        Testimonial::create($validatedData);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        // dd($request);
        $validatedData = $request->validate([
            'client_name' => 'required|max:255',
            // 'position' => 'required|max:255',
            'company' => 'required|max:255',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $validatedData['image'] = $imagePath;
        }

        $testimonial->update($validatedData);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }

    public function toggle(Testimonial $testimonial)
    {
        // dd($testimonial);
        if ($testimonial->is_featured) {
            $testimonial->update([
                'is_featured' => 0
            ]);
            return redirect()->route('admin.testimonials.index')->with(['success' => 'testimonial  dideactivate!']);
        }

        if (!$testimonial->is_featured) {
            $testimonial->update([
                'is_featured' => 1
            ]);
            return redirect()->route('admin.testimonials.index')->with(['success' => 'testimonial Activate!']);
        }
    }
}
