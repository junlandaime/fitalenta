@extends('layouts.app2')

@section('title', 'Upcoming Events')

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
@endpush

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#003E68] to-[#005792] text-white py-24 md:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_40%)]"></div>
        <div class="absolute -bottom-24 -left-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <span class="inline-flex items-center px-4 py-2 rounded-full
                             bg-white/10 border border-white/20 backdrop-blur-sm
                             text-sm font-medium mb-6">
                    FITALENTA Events
                </span>

                <h1 class="text-4xl md:text-6xl font-bold mb-5">
                    Upcoming Events
                </h1>

                <p class="text-lg md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    Join us for exciting events and expand your network
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
                       class="text-[#00294B] font-medium hover:text-[#F15A24] transition">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500">
                    Events
                </li>
            </ol>
        </div>
    </div>

    <!-- Events -->
    <section class="py-20 bg-[#F7F9FB]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Search -->
            <div class="max-w-3xl mx-auto mb-14">
                <form action="{{ route('events.index') }}"
                      method="GET"
                      class="flex flex-col sm:flex-row gap-3">

                    <div class="relative flex-1">
                        <input type="text"
                               name="search"
                               placeholder="Search events..."
                               value="{{ request('search') }}"
                               class="w-full px-5 py-3.5 bg-white rounded-xl border border-gray-200
                                      shadow-sm focus:outline-none focus:ring-2
                                      focus:ring-[#005792]/20 focus:border-[#005792]
                                      transition">
                    </div>

                    <button type="submit"
                            class="px-7 py-3.5 bg-[#00294B] text-white rounded-xl
                                   font-semibold shadow-sm hover:bg-[#005792]
                                   hover:shadow-md transition duration-300">
                        Search
                    </button>

                </form>
            </div>

            @if ($events->isEmpty())

                <!-- Empty State -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm
                            p-12 text-center">

                    <div class="text-5xl mb-4">📅</div>

                    <h2 class="text-2xl font-bold text-[#00294B] mb-2">
                        No Events Found
                    </h2>

                    <p class="text-gray-500">
                        Please try another keyword or check back later for upcoming events.
                    </p>

                </div>

            @else

                <!-- Section Title -->
                <div class="text-center mb-12">

                    <span class="text-sm font-semibold uppercase tracking-wider text-[#F15A24]">
                        Explore With Us
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2">
                        Discover Our Events
                    </h2>

                    <div class="w-16 h-1 bg-[#F15A24] mx-auto mt-4 rounded-full"></div>

                </div>

                <!-- Event Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">

                    @foreach ($events as $event)

                        <div class="h-full">
                            <x-event-card :event="$event" />
                        </div>

                    @endforeach

                </div>

                <!-- Pagination -->
                <div class="mt-14 flex justify-center">
                    {{ $events->links() }}
                </div>

            @endif

        </div>
    </section>

    <!-- CTA -->
    <section class="relative overflow-hidden py-20 bg-white">

        <div class="absolute -top-24 -right-24 w-72 h-72 bg-[#005792]/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-[#F15A24]/5 rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-[#005792]">
                Let's Connect
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2 mb-4">
                Can't Find What You're Looking For?
            </h2>
            <p class="text-gray-600 text-lg mb-8">
                Contact us to suggest an event or inquire about custom training sessions.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      bg-[#00294B] text-white
                      px-8 py-3.5 rounded-xl
                      text-lg font-semibold
                      hover:bg-[#005792]
                      transition-all duration-300 shadow-sm">
                Get in Touch →
            </a>
        </div>
    </section>
@endsection
