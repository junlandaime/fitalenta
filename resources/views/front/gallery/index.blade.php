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

            <!-- Category Filter -->
            <div class="mb-10 flex justify-center">
                {{-- <button
                    class="px-4 py-2 mx-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active"
                    data-category="all">
                    All
                </button> --}}

                {{-- @foreach ($categories as $category)
                    <button
                        class="px-4 py-2 mx-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50"
                        data-category="{{ $category }}">
                        {{ $category }}
                    </button>
                @endforeach --}}
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">

                @foreach ($gallery as $image)

                    <div class="gallery-item group" data-category="{{ $image->category }}">

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

                                        <i class="fas fa-arrow-right"></i>

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
                                    <i class="far fa-calendar-alt text-[#005792]"></i>
                                    <span>{{ $image->event_date->diffForHumans() }}</span>
                                </div>

                                <div class="mt-5 pt-4 border-t border-gray-100
                                            flex items-center justify-between
                                            text-[#005792] font-semibold text-sm">

                                    <span>View Gallery</span>

                                    <i class="fas fa-arrow-right
                                              group-hover:translate-x-1
                                              transition-transform duration-300">
                                    </i>

                                </div>

                            </div>

                        </a>

                    </div>

                @endforeach

            </div>

        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterButtons = document.querySelectorAll('[data-category]');
                const galleryItems = document.querySelectorAll('.gallery-item');

                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const category = button.getAttribute('data-category');
                        filterGallery(category);
                        setActiveButton(button);
                    });
                });

                function filterGallery(category) {
                    galleryItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = '';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                }

                function setActiveButton(activeButton) {
                    filterButtons.forEach(button => {
                        button.classList.remove('bg-blue-500', 'text-white');
                        button.classList.add('bg-gray-200', 'text-gray-700');
                    });

                    activeButton.classList.remove('bg-gray-200', 'text-gray-700');
                    activeButton.classList.add('bg-blue-500', 'text-white');
                }
            });
        </script>
    @endpush

@endsection
