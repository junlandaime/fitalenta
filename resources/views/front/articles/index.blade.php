@extends('layouts.app2')

@section('title', 'Blog Articles')

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .article-card:hover .article-image img {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')

    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">FITALENTA Blog</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Insights, tips, and news from the world of business and talent
                management</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Blog</li>
            </ol>
        </div>
    </div>
    <!-- Article Filter and Search -->
    <section class="py-8 bg-white px-4 lg:px-40" x-data="{ category: 'all', searchQuery: '' }">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex flex-wrap gap-4 mb-4 md:mb-0">
                    <button @click="category = 'all'"
                        :class="{ 'bg-primary text-white': category === 'all', 'bg-gray-200 text-gray-800': category !== 'all' }"
                        class="px-4 py-2 rounded-full transition duration-300">All</button>
                    <button @click="category = 'business'"
                        :class="{ 'bg-primary text-white': category === 'business', 'bg-gray-200 text-gray-800': category !== 'business' }"
                        class="px-4 py-2 rounded-full transition duration-300">Business</button>
                    <button @click="category = 'talent'"
                        :class="{ 'bg-primary text-white': category === 'talent', 'bg-gray-200 text-gray-800': category !== 'talent' }"
                        class="px-4 py-2 rounded-full transition duration-300">Talent Management</button>
                    <button @click="category = 'industry'"
                        :class="{ 'bg-primary text-white': category === 'industry', 'bg-gray-200 text-gray-800': category !== 'industry' }"
                        class="px-4 py-2 rounded-full transition duration-300">Industry Trends</button>
                </div>
                <div class="w-full md:w-auto">
                    <input type="text" x-model="searchQuery" placeholder="Search articles..."
                        class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    @if ($articles)
        <section class="py-12 bg-white px-4 lg:px-40">
            <div class="container mx-auto px-4">
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <img src="{{ $articles->first()->image ? asset('storage/' . $articles->first()->image) : asset('images/default-article.jpg') }}"
                                alt="{{ $articles->first()->title }}" class="w-full h-64 md:h-full object-cover">
                        </div>
                        <div class="md:w-1/2 p-8">
                            <span class="text-secondary font-semibold">Newest</span>
                            <h2 class="text-3xl font-bold mb-4 mt-2">{{ $articles->first()->title }}
                            </h2>
                            <p class="text-gray-700 mb-4">{{ $articles->first()->excerpt }}</p>
                            <a href="{{ route('articles.show', $articles->first()) }}"
                                class="inline-block bg-primary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition duration-300">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- <div class="mb-12">
                <form action="{{ route('articles.index') }}" method="GET"
                    class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <input type="text" name="search" placeholder="Search articles..."
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                        value="{{ request('search') }}">
                    <select name="category"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit"
                        class="bg-[#00294B] text-white px-6 py-2 rounded-md hover:bg-[#001f3b] transition duration-300">Search</button>
                </form>
            </div> --}}

            @if ($articles->isEmpty())
                <p class="text-center text-gray-600">No articles found. Please try a different search or check back later
                    for new content.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($articles->skip(1) as $article)
                        <x-article-card :article="$article" />
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated with FITALENTA</h2>
            <p class="text-xl mb-8">Subscribe to our newsletter for the latest insights and industry trends.</p>
            {{-- <form action="{{ route('newsletter.subscribe') }}" method="POST" class="max-w-md mx-auto">
                @csrf
                <div class="flex">
                    <input type="email" name="email" placeholder="Enter your email" required
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#00294B]">
                    <button type="submit"
                        class="bg-[#00294B] text-white px-6 py-2 rounded-r-md hover:bg-[#001f3b] transition duration-300">Subscribe</button>
                </div>
            </form> --}}
        </div>
    </div>
@endsection
