@extends('layouts.app2')

@section('title', 'Gallery')

@section('content')
    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">Our Gallery</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Empowering businesses and individuals with tailored solutions</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Gallery</li>
            </ol>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8 lg:px-40">
        {{-- <h1 class="text-4xl font-bold mb-8 text-center">Our Gallery</h1> --}}

        <!-- Category Filter -->
        <div class="mb-8 flex justify-center">
            <button
                class="px-4 py-2 mx-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active"
                data-category="all">All</button>
            {{-- @foreach ($categories as $category)
                <button
                    class="px-4 py-2 mx-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50"
                    data-category="{{ $category }}">{{ $category }}</button>
            @endforeach --}}
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($gallery as $image)
                <div class="gallery-item" data-category="{{ $image->category }}">
                    <a href="{{ route('gallery.show', $image->id) }}" class="block">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->title }}"
                            class="w-full h-64 object-cover rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="mt-2 text-lg font-semibold">{{ $image->title }}</h3>
                        <h3 class="mt-2 text-base font-base">{{ $image->event_date->diffForHumans() }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

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
