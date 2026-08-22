@extends('layouts.app2')

@section('title', $image->title)

@section('content')

    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-[#00294B] via-[#004875] to-[#005792] text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-white rounded-full"></div>
            <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-white rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-24">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-2 mb-5 rounded-full bg-white/10 border border-white/20
                             text-sm font-medium backdrop-blur-sm">
                    FITALENTA Gallery
                </span>

                <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                    {{ $image->title }}
                </h1>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm flex-wrap">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition duration-300">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li>
                    <a href="{{ route('gallery') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition duration-300">
                        Gallery
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 truncate max-w-xs">
                    {{ $image->title }}
                </li>
            </ol>
        </div>
    </div>

    <!-- Main Content -->
    <section class="bg-[#f8fafc] py-14 md:py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Main Card -->
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">

                <!-- Image -->
                <div class="w-full bg-gray-100 overflow-hidden">
                    <img src="{{ asset('storage/' . $image->image) }}"
                         alt="{{ $image->title }}"
                         class="w-full h-[350px] md:h-[500px] object-cover">
                </div>

                <!-- Content -->
                <div class="p-7 md:p-10">

                    <!-- Category & Date -->
                    <div class="flex flex-wrap items-center gap-3 mb-6">

                        @if ($image->category)
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full
                                         bg-blue-50 text-[#005792] text-sm font-semibold">
                                {{ $image->category->name }}
                            </span>
                        @endif

                        @if ($image->event_date)
                            <span class="flex items-center gap-2 text-sm text-gray-500">
                                <svg class="w-4 h-4 text-[#005792]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $image->event_date->format('F j, Y') }}
                            </span>
                        @endif

                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-[#00294B] leading-tight mb-5">
                        {{ $image->title }}
                    </h1>

                    <!-- Accent -->
                    <div class="w-12 h-1 bg-[#005792] rounded-full mb-6"></div>

                    <!-- Description -->
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed whitespace-pre-line">
                        {{ $image->description }}
                    </p>

                </div>
            </div>

            <!-- Related Images -->
            @if ($relatedImages && $relatedImages->count() > 0)
                <div class="mt-16">

                    <div class="mb-8">
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#005792]">
                            Explore More
                        </span>

                        <h2 class="text-2xl md:text-3xl font-bold text-[#00294B] mt-2">
                            Related Images
                        </h2>

                        <div class="w-12 h-1 bg-[#005792] rounded-full mt-4"></div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-7">

                        @foreach ($relatedImages as $relatedImage)

                            <a href="{{ route('gallery.show', $relatedImage->id) }}"
                               class="group block bg-white rounded-2xl overflow-hidden border border-gray-100
                                  shadow-sm hover:shadow-xl hover:-translate-y-1
                                  transition-all duration-300">

                                <div class="relative h-52 overflow-hidden bg-gray-100">

                                    <img src="{{ asset('storage/' . $relatedImage->image) }}"
                                         alt="{{ $relatedImage->title }}"
                                         class="w-full h-full object-cover
                                            group-hover:scale-105 transition-transform duration-500">

                                </div>

                                <div class="p-5">

                                    <h3 class="text-lg font-bold text-[#00294B] leading-snug
                                           group-hover:text-[#005792]
                                           transition-colors duration-300">
                                        {{ $relatedImage->title }}
                                    </h3>

                                    @if ($relatedImage->event_date)
                                        <p class="flex items-center gap-2 text-sm text-gray-500 mt-3">
                                            <svg class="w-4 h-4 text-[#005792]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            {{ $relatedImage->event_date->format('F j, Y') }}
                                        </p>
                                    @endif

                                    <div class="mt-4 flex items-center justify-between
                                            text-[#005792] text-sm font-semibold">

                                        <span>View Gallery</span>

                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>

                                    </div>

                                </div>

                            </a>

                        @endforeach

                    </div>
                </div>
            @endif

            <!-- Back Button -->
            <div class="mt-12">
                <a href="{{ route('gallery') }}"
                   class="inline-flex items-center gap-3 px-6 py-3
                      bg-[#00294B] text-white font-semibold rounded-full
                      hover:bg-[#005792] hover:-translate-x-1
                      transition-all duration-300 shadow-sm">

                    <span>←</span>
                    <span>Back to Gallery</span>

                </a>
            </div>

        </div>
    </section>

@endsection
