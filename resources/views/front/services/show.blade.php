@extends('layouts.app2')

@section('title', $service->name)

@section('content')

    <section class="relative bg-primary text-white py-32">
        <div class="absolute inset-0 z-0 ">
        </div>
        <div class="container mx-auto px-4 relative z-10 pt-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center">{{ $service->name }}</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">{{ $service->tagline }}</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 lg:px-40 ">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('services') }}" class="text-primary">Servuces</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">{{ $service->name }}</li>
            </ol>
        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="md:col-span-2">
                    <div class="prose max-w-none">
                        {!! $service->description !!}
                    </div>

                    @if ($service->benefits)
                        <div class="mt-12">
                            <h2 class="text-2xl font-bold mb-4">Benefits</h2>
                            <ul class="list-disc list-inside space-y-2">
                                @foreach ($service->benefits as $benefit)
                                    <li>{{ $benefit }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($service->process)
                        <div class="mt-12">
                            <h2 class="text-2xl font-bold mb-4">Our Process</h2>
                            <ol class="list-decimal list-inside space-y-4">
                                @foreach ($service->process as $step)
                                    <li>
                                        <span class="font-semibold">{{ $step['title'] }}:</span>
                                        {{ $step['description'] }}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="bg-gray-100 p-6 rounded-lg sticky top-8">
                        @if ($service->price)
                            <div class="mb-6">
                                <h3 class="text-xl font-semibold mb-2">Pricing</h3>
                                <p class="text-3xl font-bold text-[#00294B]">{{ $service->formatted_price }}</p>
                                @if ($service->price_details)
                                    <p class="text-sm text-gray-600 mt-1">{{ $service->price_details }}</p>
                                @endif
                            </div>
                        @endif

                        <a href="{{ route('contact', ['service' => $service->slug]) }}"
                            class="block w-full bg-[#00294B] text-white text-center py-3 rounded-md hover:bg-[#001f3b] transition duration-300">
                            Request This Service
                        </a>

                        @if ($service->features)
                            <div class="mt-6">
                                <h3 class="text-xl font-semibold mb-2">Features</h3>
                                <ul class="space-y-2">
                                    @foreach ($service->features as $feature)
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- @if ($testimonials->isNotEmpty())
                <div class="mt-16">
                    <h2 class="text-2xl font-bold mb-8">What Our Clients Say</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($testimonials as $testimonial)
                            <div class="bg-gray-100 p-6 rounded-lg">
                                <p class="text-gray-600 mb-4">"{{ $testimonial->content }}"</p>
                                <div class="flex items-center">
                                    <img src="{{ $testimonial->avatar }}" alt="{{ $testimonial->name }}"
                                        class="w-12 h-12 rounded-full mr-4">
                                    <div>
                                        <p class="font-semibold">{{ $testimonial->name }}</p>
                                        <p class="text-sm text-gray-500">{{ $testimonial->position }},
                                            {{ $testimonial->company }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif --}}
        </div>
    </div>

    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-8">Let's work together to elevate your business with our {{ $service->name }} service.</p>
            <a href="{{ route('contact', ['service' => $service->slug]) }}"
                class="bg-[#00294B] text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-[#001f3b] transition duration-300">
                Contact Us Now
            </a>
        </div>
    </div>

    {{-- @if ($relatedServices->isNotEmpty())
        <div class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Related Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($relatedServices as $relatedService)
                        <x-service-card :service="$relatedService" />
                    @endforeach
                </div>
            </div>
        </div>
    @endif --}}
@endsection
