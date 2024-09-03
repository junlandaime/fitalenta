@extends('layouts.app2')

@section('title', 'Our Services')

@section('content')

    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">Our Services</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Empowering businesses and individuals with tailored solutions</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Services</li>
            </ol>
        </div>
    </div>


    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($categories->isNotEmpty())
                <div class="mb-12">
                    <h2 class="text-2xl font-bold mb-4">Filter by Category</h2>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('services') }}"
                            class="px-4 py-2 rounded-full {{ !request('category') ? 'bg-[#00294B] text-white' : 'bg-white text-[#00294B] border border-[#00294B]' }}">
                            All Services
                        </a>
                        @foreach ($categories as $category)
                            <a href="{{ route('services', ['category' => $category->slug]) }}"
                                class="px-4 py-2 rounded-full {{ request('category') == $category->slug ? 'bg-[#00294B] text-white' : 'bg-white text-[#00294B] border border-[#00294B]' }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($services->isEmpty())
                <p class="text-center text-gray-600">No services found. Please check back later for updates.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($services as $service)
                        <x-service-card :service="$service" />
                    @endforeach
                </div>

                <div class="mt-12">
                    {{-- {{ $services->links() }} --}}
                </div>
            @endif
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Not Sure Which Service You Need?</h2>
            <p class="text-xl mb-8">Our team of experts is here to help you find the perfect solution for your business.</p>
            <a href="{{ route('contact') }}"
                class="bg-[#00294B] text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-[#001f3b] transition duration-300">
                Get a Free Consultation
            </a>
        </div>
    </div>
@endsection
