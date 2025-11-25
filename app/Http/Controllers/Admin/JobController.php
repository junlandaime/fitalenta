<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')
            ->orderBy('order')
            ->orderBy('posted_at', 'desc')
            ->get();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $companies = Company::where('is_active', true)->get();
        return view('admin.jobs.create', compact('companies'));
    }

    private function convertTextToArray($text)
    {
        // Split by newlines and filter out empty lines
        $lines = array_filter(explode("\n", $text), function ($line) {
            return trim($line) !== '';
        });

        // Trim each line and return as array
        return array_map('trim', $lines);
    }

    public function store(Request $request)
    {
        // Convert newline-separated text to arrays before validation
        $data = $request->all();
        $data['responsibilities'] = $this->convertTextToArray($request->responsibilities);
        $data['requirements'] = $this->convertTextToArray($request->requirements);
        $data['benefits'] = $this->convertTextToArray($request->benefits);

        $validated = validator($data, [
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gt:salary_min',
            'description' => 'required|string',
            'responsibilities' => 'required|array|min:1',
            'responsibilities.*' => 'required|string',
            'requirements' => 'required|array|min:1',
            'requirements.*' => 'required|string',
            'benefits' => 'required|array|min:1',
            'benefits.*' => 'required|string',
            'how_to_apply' => 'required|string',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ])->validate();

        $validated['posted_at'] = now();

        Job::create($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job listing created successfully.');
    }

    public function edit(Job $job)
    {
        // Convert arrays back to newline-separated text for editing
        $job->responsibilities = implode("\n", $job->responsibilities ?? []);
        $job->requirements = implode("\n", $job->requirements ?? []);
        $job->benefits = implode("\n", $job->benefits ?? []);

        $companies = Company::where('is_active', true)->get();
        return view('admin.jobs.edit', compact('job', 'companies'));
    }

    public function update(Request $request, Job $job)
    {
        // Convert newline-separated text to arrays before validation
        $data = $request->all();
        $data['responsibilities'] = $this->convertTextToArray($request->responsibilities);
        $data['requirements'] = $this->convertTextToArray($request->requirements);
        $data['benefits'] = $this->convertTextToArray($request->benefits);

        $validated = validator($data, [
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gt:salary_min',
            'description' => 'required|string',
            'responsibilities' => 'required|array|min:1',
            'responsibilities.*' => 'required|string',
            'requirements' => 'required|array|min:1',
            'requirements.*' => 'required|string',
            'benefits' => 'required|array|min:1',
            'benefits.*' => 'required|string',
            'how_to_apply' => 'required|string',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ])->validate();

        $job->update($validated);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job listing updated successfully.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job listing deleted successfully.');
    }
}
