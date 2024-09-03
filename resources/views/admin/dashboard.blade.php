@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-6">Dashboard</h1>

        <!-- Statistik Ringkas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Users</h2>
                <p class="text-3xl font-bold text-blue-600">{{ $totalUsers }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Articles</h2>
                <p class="text-3xl font-bold text-green-600">{{ $totalArticles }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Services</h2>
                <p class="text-3xl font-bold text-yellow-600">{{ $totalServices }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Total Events</h2>
                <p class="text-3xl font-bold text-purple-600">{{ $totalEvents }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Hero Slides</h2>
                <p class="text-3xl font-bold text-indigo-600">{{ $totalHeroSlides }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Team Members</h2>
                <p class="text-3xl font-bold text-pink-600">{{ $totalTeamMembers }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Clients</h2>
                <p class="text-3xl font-bold text-teal-600">{{ $totalClients }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Categories</h2>
                <p class="text-3xl font-bold text-orange-600">{{ $totalCategories }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Comments</h2>
                {{-- <p class="text-3xl font-bold text-red-600">{{ $totalComments }}</p> --}}
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">Testimonials</h2>
                <p class="text-3xl font-bold text-gray-600">{{ $totalTestimonials }}</p>
            </div>
        </div>

        <!-- Konten Terbaru -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Artikel Terbaru -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">Recent Articles</h2>
                <ul class="divide-y divide-gray-200">
                    @foreach ($recentArticles as $article)
                        <li class="py-3">
                            <a href="{{ route('admin.articles.edit', $article) }}"
                                class="flex justify-between items-center hover:bg-gray-50">
                                <span class="text-gray-800">{{ Str::limit($article->title, 40) }}</span>
                                <span class="text-sm text-gray-500">{{ $article->created_at->diffForHumans() }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('admin.articles.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">View
                    all articles</a>
            </div>

            <!-- Event Mendatang -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">Upcoming Events</h2>
                <ul class="divide-y divide-gray-200">
                    @foreach ($upcomingEvents as $event)
                        <li class="py-3">
                            <a href="{{ route('admin.events.edit', $event) }}"
                                class="flex justify-between items-center hover:bg-gray-50">
                                <span class="text-gray-800">{{ Str::limit($event->title, 40) }}</span>
                                <span class="text-sm text-gray-500">{{ $event->event_date->format('M d, Y') }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('admin.events.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">View
                    all events</a>
            </div>
        </div>

        <!-- Komentar Terbaru dan Testimonial Terbaru -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">Recent Comments</h2>
                <ul class="divide-y divide-gray-200">
                    {{-- @foreach ($recentComments as $comment)
                        <li class="py-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-800">{{ Str::limit($comment->content, 40) }}</span>
                                <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-sm text-gray-600">On: {{ $comment->commentable->title }}</p>
                        </li>
                    @endforeach --}}
                </ul>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">Recent Testimonials</h2>
                <ul class="divide-y divide-gray-200">
                    @foreach ($recentTestimonials as $testimonial)
                        <li class="py-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-800">{{ $testimonial->client_name }}</span>
                                <span class="text-sm text-gray-500">{{ $testimonial->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-sm text-gray-600">{{ Str::limit($testimonial->content, 60) }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Aksi Cepat -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Quick Actions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="{{ route('admin.articles.create') }}"
                    class="bg-blue-600 text-white rounded-lg p-4 text-center hover:bg-blue-700 transition duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    Create Article
                </a>
                <a href="{{ route('admin.events.create') }}"
                    class="bg-green-600 text-white rounded-lg p-4 text-center hover:bg-green-700 transition duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Add Event
                </a>
                <a href="{{ route('admin.services.create') }}"
                    class="bg-yellow-600 text-white rounded-lg p-4 text-center hover:bg-yellow-700 transition duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Add Service
                </a>
                <a href="{{ route('admin.hero-slides.create') }}"
                    class="bg-indigo-600 text-white rounded-lg p-4 text-center hover:bg-indigo-700 transition duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Add Hero Slide
                </a>
            </div>
        </div>
    </div>
@endsection
