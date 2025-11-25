<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::with('company')
            ->active()
            ->when($request->search, function($query, $search) {
                $query->search($search);
            })
            ->filter($request->only(['location', 'type']))
            ->orderBy('order')
            ->orderBy('posted_at', 'desc')
            ->paginate(9)
            ->withQueryString();

        $locations = Job::active()->distinct()->pluck('location');
        $types = Job::active()->distinct()->pluck('type');

        return view('front.jobs.index', compact('jobs', 'locations', 'types'));
    }

    public function show(Job $job)
    {
        if (!$job->is_active) {
            abort(404);
        }

        $similarJobs = Job::active()
            ->where('id', '!=', $job->id)
            ->where(function($query) use ($job) {
                $query->where('type', $job->type)
                    ->orWhere('location', $job->location);
            })
            ->with('company')
            ->limit(3)
            ->get();

        return view('front.jobs.show', compact('job', 'similarJobs'));
    }
}
