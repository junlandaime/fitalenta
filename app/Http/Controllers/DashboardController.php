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
            'totalEvents' => Event::count(),
            'totalArticles' => Article::count(),
            'totalServices' => Service::count(),
            'totalUsers' => User::count(),
            'recentUsers' => User::latest()->take(5)->get(),
            'recentEvents' => Event::latest()->take(5)->get(),
            'recentArticles' => Article::latest()->take(5)->get(),
            'upcomingEvents' => Event::where('event_date', '>', now())->orderBy('event_date')->take(5)->get(),

            'totalUsers' => User::count(),
            'totalArticles' => Article::count(),
            'totalServices' => Service::count(),
            'totalEvents' => Event::count(),
            'totalHeroSlides' => HeroSlide::count(),
            'totalTeamMembers' => TeamMember::count(),
            'totalClients' => Client::count(),
            'totalCategories' => Category::count(),
            // 'totalComments' => Comment::count(),
            'totalTestimonials' => Testimonial::count(),
            'recentArticles' => Article::latest()->take(5)->get(),
            'upcomingEvents' => Event::where('event_date', '>', now())->orderBy('event_date')->take(5)->get(),
            // 'recentComments' => Comment::with('commentable')->latest()->take(5)->get(),
            'recentTestimonials' => Testimonial::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', $data);
    }
}
