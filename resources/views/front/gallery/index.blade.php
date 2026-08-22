@extends('layouts.app2')

@section('title', 'Gallery')

@section('content')

    <!-- Hero -->
    <section class="relative bg-gradient-to-br from-[#00294B] via-[#004875] to-[#005792] text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-white rounded-full"></div>
            <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-white rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28 md:py-36">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block px-4 py-2 mb-5 rounded-full bg-white/10 border border-white/20 text-sm font-medium backdrop-blur-sm">
                    FITALENTA Gallery
                </span>

                <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-5">
                    Our Gallery
                </h1>

                <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
                    Empowering businesses and individuals with tailored solutions
                </p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition duration-300">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 font-medium">
                    Gallery
                </li>
            </ol>
        </div>
    </div>

    <!-- Gallery -->
    <section class="bg-[#f8fafc] py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Heading -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#005792]">
                    Our Moments
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3">
                    Explore Our Gallery
                </h2>

                <div class="w-14 h-1 bg-[#005792] rounded-full mx-auto mt-5"></div>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">

                @foreach ($gallery as $image)

                    <div class="gallery-item group" data-category="{{ $image->category->name ?? '' }}">

                        <a href="{{ route('gallery.show', $image->id) }}"
                           class="block bg-white rounded-2xl overflow-hidden border border-gray-100
                                  shadow-sm hover:shadow-xl transition-all duration-300
                                  hover:-translate-y-1">

                            <!-- Image -->
                            <div class="relative overflow-hidden">

                                <img src="{{ asset('storage/' . $image->image) }}"
                                     alt="{{ $image->title }}"
                                     class="w-full h-60 object-cover
                                            group-hover:scale-105 transition-transform duration-500">

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent
                                            opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <!-- View Icon -->
                                <div class="absolute inset-0 flex items-center justify-center
                                            opacity-0 group-hover:opacity-100 transition-all duration-300">

                                    <div class="w-12 h-12 rounded-full bg-white/90 backdrop-blur-sm
                                                flex items-center justify-center text-[#00294B]
                                                shadow-lg">

                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>

                                    </div>

                                </div>

                            </div>

                            <!-- Content -->
                            <div class="p-5">

                                <h3 class="text-lg font-bold text-[#00294B] leading-snug
                                           line-clamp-2 min-h-[56px]
                                           group-hover:text-[#005792] transition-colors duration-300">
                                    {{ $image->title }}
                                </h3>

                                <div class="flex items-center gap-2 mt-4 text-sm text-gray-500">
                                    <svg class="w-4 h-4 text-[#005792]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ $image->event_date ? $image->event_date->diffForHumans() : $image->created_at->diffForHumans() }}</span>
                                </div>

                                <div class="mt-5 pt-4 border-t border-gray-100
                                            flex items-center justify-between
                                            text-[#005792] font-semibold text-sm">

                                    <span>View Gallery</span>

                                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>

                                </div>

                            </div>

                        </a>

                    </div>

                @endforeach

            </div>

        </div>
    </section>

@endsection
