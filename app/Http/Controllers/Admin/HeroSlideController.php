<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;

class HeroSlideController extends Controller
{
    public function index()
    {
        $heroSlides = HeroSlide::orderBy('order')->get();
        return view('admin.hero-slides.index', compact('heroSlides'));
    }

    public function create()
    {
        return view('admin.hero-slides.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cta_text' => 'nullable|max:50',
            'cta_link' => 'nullable|url',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero-slides', 'public');
            $validatedData['image'] = $imagePath;
        }

        HeroSlide::create($validatedData);

        return redirect()->route('admin.hero-slides.index')->with('success', 'Hero slide created successfully.');
    }

    public function show(HeroSlide $heroSlide)
    {
        return view('admin.hero-slides.show', compact('heroSlide'));
    }

    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero-slides.edit', compact('heroSlide'));
    }

    public function update(Request $request, HeroSlide $heroSlide)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cta_text' => 'nullable|max:50',
            'cta_link' => 'nullable|url',
            // 'is_active' => 'required',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero-slides', 'public');
            $validatedData['image'] = $imagePath;
        }

        $heroSlide->update($validatedData);

        return redirect()->route('admin.hero-slides.index')->with('success', 'Hero slide updated successfully.');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        $heroSlide->delete();
        return redirect()->route('admin.hero-slides.index')->with('success', 'Hero slide deleted successfully.');
    }

    public function toggle(HeroSlide $slide)
    {
        // dd($slide);
        if ($slide->is_active) {
            $slide->update([
                'is_active' => 0
            ]);
            return redirect()->route('admin.hero-slides.index')->with(['success' => 'Hero slide  dideactivate!']);
        }

        if (!$slide->is_active) {
            $slide->update([
                'is_active' => 1
            ]);
            return redirect()->route('admin.hero-slides.index')->with(['success' => 'Hero slide Activate!']);
        }
    }
}
