<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $featuredEvents = Event::orderBy('event_date', 'desc')->take(3)->get();
        $latestArticles = Article::latest()->take(3)->get();

        $data = [

            'services' => Service::all(),
            'testimonials' => Testimonial::where('is_featured', true)->get(),
            'teamMembers' => TeamMember::where('is_active', true)->orderBy('order')->get(),
            'heroSlides' => HeroSlide::where('is_active', true)->get(),
            'clients' => Client::where('is_featured', true)->get(),
            'combinedItems' => $latestArticles->concat($featuredEvents)
                ->sortByDesc('event_date')
                ->take(3)
        ];

        return view('front.home', $data);
    }

    public function about()
    {
        $companyInfo = [
            'name' => 'FITALENTA (PT Fast Indo Talenta)',
            'established' => '2023',
            'mission' => 'Become a company partner to provide a reliable workforce, improve the capabilities of employees, and achieve financial growth through target-based business assistance',
        ];

        return view('front.about', compact('companyInfo'));
    }

    public function event_index()
    {
        $categories = Category::get();

        $events = Event::
            // $events = Event::where('event_date', '>=', now())
            orderBy('event_date', 'desc')
            ->paginate(9);

        return view('front.events.index', compact('events', 'categories'));
    }

    public function event_show(Event $event)
    {
        $relatedEvents = Event::where('is_featured', true)
            ->orderBy('event_date', 'asc')
            ->take(3)
            ->get();
        return view('front.events.show', compact('event', 'relatedEvents'));
    }

    public function article_index()
    {
        $categories = Category::get();
        $articles = Article::published()->latest()->paginate(7);
        return view('front.articles.index', compact('articles', 'categories'));
    }

    public function article_show(Article $article)
    {
        // if (!$article->is_published) {
        //     abort(404);
        // }

        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        return view('front.articles.show', compact('article', 'relatedArticles'));
    }

    public function service_index()
    {
        $categories = Category::get();

        $services = Service::all();
        return view('front.services.index', compact('services', 'categories'));
    }

    public function service_show(Service $service)
    {
        return view('front.services.show', compact('service'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function submit(ContactRequest $request)
    {
        $validatedData = $request->validated();

        // Send email
        Mail::to('info@fitalenta.com')->send(new ContactFormSubmission($validatedData));

        // Store in database if needed
        // Contact::create($validatedData);

        return redirect()->route('front.contact')->with('success', 'Thank you for your message. We will get back to you soon.');
    }

    public function gallery_index()
    {
        $gallery = Gallery::where('is_featured', false)
            ->orderBy('event_date', 'desc')

            ->get();
        return view('front.gallery.index', compact('gallery'));
    }

    public function gallery_show(Gallery $gallery)
    {
        $image = $gallery;
        $relatedImages = Gallery::where('is_featured', true)
            // ->orderBy('event_date', 'asc')
            ->take(3)
            ->get();
        return view('front.gallery.show', compact('image', 'relatedImages'));
    }
}
