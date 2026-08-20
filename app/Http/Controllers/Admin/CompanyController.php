<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('name')->get();
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'website' => 'nullable|url|max:255',
            'industry' => 'required|string|max:255',
            'employee_count' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('company-logos', 'public');
            $validated['logo'] = $path;
        }

        Company::create($validated);

        return redirect()->route('admin.companies.index')
            ->with('success', 'Company added successfully.');
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'website' => 'nullable|url|max:255',
            'industry' => 'required|string|max:255',
            'employee_count' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            // Delete old logo
            if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                Storage::disk('public')->delete($company->logo);
            }
            $path = $request->file('logo')->store('company-logos', 'public');
            $validated['logo'] = $path;
        } else {
            unset($validated['logo']);
        }

        $company->update($validated);

        return redirect()->route('admin.companies.index')
            ->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        if ($company->jobs()->count() > 0) {
            return redirect()->route('admin.companies.index')
                ->with('error', 'Cannot delete company with active job listings.');
        }

        if ($company->logo) {
            Storage::disk('public')->delete($company->logo);
        }
        
        $company->delete();

        return redirect()->route('admin.companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}
