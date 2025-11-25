<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UniversityPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UniversityPartnerController extends Controller
{
    public function index()
    {
        $partners = UniversityPartner::orderBy('order')->get();
        return view('admin.university-partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.university-partners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'student_count' => 'required|integer|min:0',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('university-logos', 'public');
            $validated['logo'] = $path;
        }

        UniversityPartner::create($validated);

        return redirect()->route('admin.university-partners.index')
            ->with('success', 'University partner added successfully.');
    }

    public function edit(UniversityPartner $universityPartner)
    {
        return view('admin.university-partners.edit', compact('universityPartner'));
    }

    public function update(Request $request, UniversityPartner $universityPartner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'student_count' => 'required|integer|min:0',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            // Delete old logo
            if ($universityPartner->logo) {
                Storage::disk('public')->delete($universityPartner->logo);
            }
            $path = $request->file('logo')->store('university-logos', 'public');
            $validated['logo'] = $path;
        }

        $universityPartner->update($validated);

        return redirect()->route('admin.university-partners.index')
            ->with('success', 'University partner updated successfully.');
    }

    public function destroy(UniversityPartner $universityPartner)
    {
        if ($universityPartner->logo) {
            Storage::disk('public')->delete($universityPartner->logo);
        }
        
        $universityPartner->delete();

        return redirect()->route('admin.university-partners.index')
            ->with('success', 'University partner deleted successfully.');
    }
}
