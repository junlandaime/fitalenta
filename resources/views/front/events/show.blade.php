@extends('layouts.app2')

@section('title', $event->title)

@section('meta_description')
    {{ Str::limit($event->location, 160) }}
@endsection

@section('og_title', $event->title . ' - FITALENTA Events')

@section('og_description')
    {{ Str::limit($event->location, 200) . $event->event_date->toDateString() }}
@endsection

@section('og_image', 'https://fitalenta.co.id/storage/' . $event->image)

@section('additional_meta_tags')
    {{-- <meta name="author" content="{{ $event->author->name }}"> --}}
    {{-- <meta name="published_date" content="{{le->publis $artiched_at->toDateString() }}"> --}}
@endsection

@section('content')

    <section class="relative bg-primary text-white py-32">
        <div class="absolute inset-0 z-0 ">
            {{-- <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('images/default-event.jpg') }}"
                alt="{{ $event->title }}" alt="Event Background" class="w-full h-full object-cover opacity-30"> --}}
        </div>
        <div class="container mx-auto px-4 relative z-10 pt-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center">{{ $event->title }}</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">{{ $event->event_date->format('F j, Y') }} |
                {{ $event->location }}</p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 lg:px-40 ">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('events.index') }}" class="text-primary">Events</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">{{ $event->title }}</li>
            </ol>
        </div>
    </div>

    <!-- Event Details -->
    <section class="py-20 bg-white lg:px-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Main Content -->
                <div class="w-full lg:w-2/3 px-4 mb-12 lg:mb-0">
                    <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('images/default-event.jpg') }}"
                        alt="{{ $event->title }}" class="w-full rounded-lg shadow-lg mb-8">
                    <h2 class="text-3xl font-bold mb-4">About the Event</h2>
                    <p class="mb-6">{!! $event->description !!}</p>
                    {{-- <h3 class="text-2xl font-bold mb-4">What to Expect</h3>
                    <ul class="list-disc list-inside mb-6">
                        <li>Inspiring keynote speeches from industry thought leaders</li>
                        <li>Panel discussions on emerging trends and challenges</li>
                        <li>Interactive workshops and breakout sessions</li>
                        <li>Networking opportunities with peers and industry experts</li>
                        <li>Exhibition showcasing innovative business solutions</li>
                    </ul> --}}
                    {{-- <h3 class="text-2xl font-bold mb-4">Speakers</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mb-8">
                        <div class="text-center">
                            <img src="https://picsum.photos/id/1025/150/150" alt="Speaker 1"
                                class="w-32 h-32 rounded-full mx-auto mb-2">
                            <h4 class="font-bold">John Doe</h4>
                            <p class="text-sm text-gray-600">CEO, Tech Innovations Inc.</p>
                        </div>
                        <div class="text-center">
                            <img src="https://picsum.photos/id/1026/150/150" alt="Speaker 2"
                                class="w-32 h-32 rounded-full mx-auto mb-2">
                            <h4 class="font-bold">Jane Smith</h4>
                            <p class="text-sm text-gray-600">Founder, Global Strategies</p>
                        </div>
                        <div class="text-center">
                            <img src="https://picsum.photos/id/1027/150/150" alt="Speaker 3"
                                class="w-32 h-32 rounded-full mx-auto mb-2">
                            <h4 class="font-bold">Mike Johnson</h4>
                            <p class="text-sm text-gray-600">CTO, Future Finance</p>
                        </div>
                    </div> --}}
                    {{-- <h3 class="text-2xl font-bold mb-4">Agenda</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold">9:00 AM - Opening Ceremony</h4>
                            <p>Welcome address and introduction to the summit themes</p>
                        </div>
                        <div>
                            <h4 class="font-bold">10:00 AM - Keynote Speech</h4>
                            <p>"The Future of Business in a Digital World" by John Doe</p>
                        </div>
                        <div>
                            <h4 class="font-bold">11:30 AM - Panel Discussion</h4>
                            <p>"Navigating Global Economic Challenges"</p>
                        </div>
                        <div>
                            <h4 class="font-bold">2:00 PM - Breakout Sessions</h4>
                            <p>Choose from various topics including AI in Business, Sustainable Practices, and more</p>
                        </div>
                        <div>
                            <h4 class="font-bold">4:30 PM - Networking Reception</h4>
                            <p>Connect with fellow attendees and speakers</p>
                        </div>
                    </div> --}}
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 px-4">
                    <div class="bg-gray-100 rounded-lg p-6 sticky top-40">
                        <h3 class="text-2xl font-bold mb-4">Event Details</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-secondary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>{{ $event->event_date->format('F j, Y') }}</span>
                                @if ($event->event_date->isPast())
                                    <span class="px-2 py-1 bg-gray-200 text-gray-800 rounded-full text-xs">Past</span>
                                @else
                                    <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full text-xs">Upcoming</span>
                                @endif
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-secondary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ $event->event_date->format('H:i') }} WIB</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-secondary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>{{ $event->location }}</span>
                            </li>
                            @if ($event->max_participants)
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 text-secondary mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span>{{ $event->max_participants }} Participants Max</span>
                                </li>
                            @endif
                        </ul>
                        @if ($event->event_date->isPast())
                            <div class="mt-8">
                                <a href="{{ route('gallery') }}"
                                    class="block w-full bg-secondary text-white text-center py-3 rounded-full hover:bg-opacity-90 transition duration-300">See
                                    Gallery</a>
                            </div>
                        @else
                            <div class="mt-8">
                                <a href="{{ $event->link }}"
                                    class="block w-full bg-secondary text-white text-center py-3 rounded-full hover:bg-opacity-90 transition duration-300">Register
                                    Now</a>
                            </div>
                            <div class="mt-4">
                                <a href="{{ $googleCalendarUrl = $eventController->generateGoogleCalendarUrl($event->id) }}"
                                    class="block w-full bg-primary text-white text-center py-3 rounded-full hover:bg-opacity-90 transition duration-300">Add
                                    to Calendar</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


    @if ($relatedEvents->isNotEmpty())
        <div class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-8">Related Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($relatedEvents as $relatedEvent)
                        <x-event-card :event="$relatedEvent" />
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Have Questions About This Event?</h2>
            <p class="text-xl mb-8">Our team is here to help. Don't hesitate to reach out for more information.</p>
            <a href="{{ route('contact') }}"
                class="bg-[#00294B] text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-[#001f3b] transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Add any event-specific scripts here (e.g., countdown timer, interactive maps)
    </script>
@endpush
