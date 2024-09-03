@extends('layouts.app2')

@section('title', 'Upcoming Events')

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .event-card:hover .event-image img {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')
    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">Upcoming Events</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Join us for exciting events and expand your network</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Events</li>
            </ol>
        </div>
    </div>

    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <form action="{{ route('events.index') }}" method="GET" class="flex space-x-4">
                    <input type="text" name="search" placeholder="Search events..."
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                        value="{{ request('search') }}">
                    <button type="submit"
                        class="bg-[#00294B] text-white px-6 py-2 rounded-md hover:bg-[#001f3b] transition duration-300">Search</button>
                </form>
            </div>

            @if ($events->isEmpty())
                <p class="text-center text-gray-600">No events found. Please check back later for upcoming events.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($events as $event)
                        <x-event-card :event="$event" />
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Can't Find What You're Looking For?</h2>
            <p class="text-xl mb-8">Contact us to suggest an event or inquire about custom training sessions.</p>
            <a href="{{ route('contact') }}"
                class="bg-[#00294B] text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-[#001f3b] transition duration-300">
                Get in Touch
            </a>
        </div>
    </div>
@endsection
