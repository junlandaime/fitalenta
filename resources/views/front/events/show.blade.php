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
@endsection

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#00446F] to-[#005792] text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_40%)]"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-28 md:py-32">
            <div class="max-w-4xl mx-auto text-center pt-8">

                <span class="inline-flex items-center px-5 py-2 rounded-full
                    bg-white/10 border border-white/20 backdrop-blur-sm
                    text-sm font-medium mb-7">
                    FITALENTA Event
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-7">
                    {{ $event->title }}
                </h1>

                <div class="flex flex-wrap justify-center gap-3 text-sm md:text-base">
                    <span class="inline-flex items-center bg-white/10 border border-white/10
                        backdrop-blur-sm px-5 py-2.5 rounded-full">
                        {{ $event->event_date->format('F j, Y') }}
                    </span>

                    <span class="inline-flex items-center bg-white/10 border border-white/10
                        backdrop-blur-sm px-5 py-2.5 rounded-full">
                        {{ $event->location }}
                    </span>
                </div>

            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-4">
            <ol class="flex flex-wrap items-center text-sm">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#00294B] font-medium hover:text-[#005792] transition-colors">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li>
                    <a href="{{ route('events.index') }}"
                       class="text-[#00294B] font-medium hover:text-[#005792] transition-colors">
                        Events
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 truncate max-w-xs">
                    {{ $event->title }}
                </li>
            </ol>
        </div>
    </div>

    <!-- Event Details -->
    <section class="py-16 md:py-20 bg-[#F7F9FB]">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10 items-start">

                <!-- Main Content -->
                <div class="lg:col-span-2">

                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100">

                        <div class="p-3 sm:p-4">
                            <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('images/default-event.jpg') }}"
                                 alt="{{ $event->title }}"
                                 class="w-full h-72 md:h-[430px] object-cover rounded-2xl">
                        </div>

                        <div class="px-6 sm:px-8 pb-8 md:pb-10">

                            <div class="flex flex-wrap items-center gap-3 mb-6">
                                @if ($event->event_date->isPast())
                                    <span class="px-4 py-1.5 bg-gray-100 text-gray-600
                                        rounded-full text-xs font-semibold">
                                        Past
                                    </span>
                                @else
                                    <span class="px-4 py-1.5 bg-green-50 text-green-600
                                        rounded-full text-xs font-semibold">
                                        Upcoming
                                    </span>
                                @endif

                                <span class="text-sm text-gray-400">
                                    {{ $event->event_date->format('F j, Y') }}
                                </span>
                            </div>

                            <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mb-5">
                                About the Event
                            </h2>

                            <div class="text-gray-600 leading-8 text-base">
                                {!! $event->description !!}
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-3xl p-6 md:p-7
                        shadow-sm border border-gray-100 lg:sticky lg:top-28">

                        <div class="mb-7">
                            <span class="text-[#F15A24] text-sm font-semibold uppercase tracking-wider">
                                Event Information
                            </span>

                            <h3 class="text-2xl font-bold text-[#00294B] mt-2">
                                Event Details
                            </h3>
                        </div>

                        <div class="space-y-5">

                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 shrink-0 rounded-xl bg-[#EEF5F9]
                                    flex items-center justify-center text-[#005792]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Date</p>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="text-sm font-semibold text-gray-700">
                                            {{ $event->event_date->format('F j, Y') }}
                                        </span>

                                        @if ($event->event_date->isPast())
                                            <span class="px-2 py-1 bg-gray-100 text-gray-600
                                                rounded-full text-xs">
                                                Past
                                            </span>
                                        @else
                                            <span class="px-2 py-1 bg-green-50 text-green-600
                                                rounded-full text-xs">
                                                Upcoming
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 shrink-0 rounded-xl bg-[#EEF5F9]
                                    flex items-center justify-center text-[#005792]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Time</p>
                                    <span class="text-sm font-semibold text-gray-700">
                                        {{ $event->event_date->format('H:i') }} WIB
                                    </span>
                                </div>
                            </div>

                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 shrink-0 rounded-xl bg-[#EEF5F9]
                                    flex items-center justify-center text-[#005792]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                        </path>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Location</p>
                                    <span class="text-sm font-semibold text-gray-700 leading-6">
                                        {{ $event->location }}
                                    </span>
                                </div>
                            </div>

                            @if ($event->max_participants)
                                <div class="flex gap-4 items-start">
                                    <div class="w-11 h-11 shrink-0 rounded-xl bg-[#EEF5F9]
                                        flex items-center justify-center text-[#005792]">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-xs text-gray-400 mb-1">Participants</p>
                                        <span class="text-sm font-semibold text-gray-700">
                                            {{ $event->max_participants }} Participants Max
                                        </span>
                                    </div>
                                </div>
                            @endif

                        </div>

                        @if ($event->event_date->isPast())
                            <div class="mt-8 pt-6 border-t border-gray-100">
                                <a href="{{ route('gallery') }}"
                                   class="flex items-center justify-center w-full
                                   bg-[#F15A24] text-white py-3.5 rounded-xl
                                   font-semibold hover:bg-[#d94e1e] transition-all duration-300">
                                    See Gallery
                                </a>
                            </div>
                        @else
                            <div class="mt-8 pt-6 border-t border-gray-100">
                                <a href="{{ $event->link }}" target="_blank"
                                   class="flex items-center justify-center w-full
                                   bg-[#F15A24] text-white py-3.5 rounded-xl
                                   font-semibold hover:bg-[#d94e1e] transition-all duration-300">
                                    Register Now
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Related Events -->
    @if ($relatedEvents->isNotEmpty())
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">

                <div class="text-center mb-12">
                    <span class="text-[#F15A24] font-semibold text-sm uppercase tracking-wider">
                        Discover More
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2">
                        Related Events
                    </h2>

                    <p class="text-gray-500 mt-3">
                        Explore more events and activities from FITALENTA.
                    </p>

                    <div class="w-14 h-1 bg-[#F15A24] mx-auto mt-5 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                    @foreach ($relatedEvents as $relatedEvent)
                        <x-event-card :event="$relatedEvent" />
                    @endforeach
                </div>

            </div>
        </section>
    @endif

    <!-- CTA -->
    <section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#00294B] to-[#005792] text-white">

        <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">

            <span class="text-white/70 uppercase tracking-wider text-sm">
                Need More Information?
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-4">
                Have Questions About This Event?
            </h2>

            <p class="text-xl mb-8 text-white/85">
                Our team is here to help. Don't hesitate to reach out for more information.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-3 bg-white text-[#00294B]
               px-8 py-3.5 rounded-xl text-lg font-semibold
               hover:bg-gray-100 transition-all duration-300 shadow-lg">
                Contact Us
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
    </script>
@endpush
