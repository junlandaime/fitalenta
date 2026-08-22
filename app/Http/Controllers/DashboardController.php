<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Client;
use App\Models\Article;
use App\Models\Service;
use App\Models\Category;
use App\Models\HeroSlide;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Company;
use App\Models\Job;
use App\Models\UniversityPartner;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $data = [
            // Core Counts
            'totalArticles' => Article::count(),
            'totalEvents' => Event::count(),
            'totalServices' => Service::count(),
            'totalCategories' => Category::count(),
            'totalHeroSlides' => HeroSlide::count(),
            'totalGalleries' => Gallery::count(),
            'totalTeamMembers' => TeamMember::count(),
            'totalClients' => Client::count(),
            'totalTestimonials' => Testimonial::count(),
            'totalCompanies' => Company::count(),
            'totalJobs' => Job::count(),
            'totalUniversityPartners' => UniversityPartner::count(),
            'totalUsers' => User::count(),

            // Recent Feeds
            'recentArticles' => Article::with('author')->latest()->take(5)->get(),
            'upcomingEvents' => Event::where('event_date', '>=', now())->orderBy('event_date')->take(5)->get(),
            'recentTestimonials' => Testimonial::latest()->take(5)->get(),
            'recentJobs' => Job::with('company')->latest()->take(5)->get(),
        ];

        return view('admin.dashboard', $data);
    }
}
