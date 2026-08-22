@extends('layouts.app2')

@section('title', 'Our Services')

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#00446F] to-[#005792] text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_40%)]"></div>
        <div class="absolute -bottom-24 -left-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-28 md:py-32">
            <div class="text-center pt-8">
                <span class="inline-block px-4 py-2 mb-5 rounded-full bg-white/10 border border-white/20 text-sm font-medium backdrop-blur-sm">
                    FITALENTA Services
                </span>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    Our Services
                </h1>

                <p class="text-lg md:text-2xl text-blue-100 max-w-2xl mx-auto">
                    Empowering businesses and individuals with tailored solutions
                </p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-4">
            <ol class="flex items-center text-sm">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#00294B] font-medium hover:text-[#005792] transition duration-300">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500">
                    Services
                </li>
            </ol>
        </div>
    </div>

    <!-- Services -->
    <section class="py-16 md:py-20 bg-[#F7F9FB]">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">

            @if ($services->isEmpty())

                <div class="bg-white rounded-3xl border border-gray-100 shadow-sm
                            py-16 px-6 text-center max-w-2xl mx-auto">

                    <div class="w-16 h-16 bg-[#EEF5F9] rounded-2xl
                                flex items-center justify-center mx-auto mb-5
                                text-[#005792]">
                        <i class="fas fa-briefcase text-2xl"></i>
                    </div>

                    <p class="text-gray-600">
                        No services found. Please check back later for updates.
                    </p>
                </div>

            @else

                <!-- Section Heading -->
                <div class="text-center mb-12">
                    <span class="text-[#F15A24] font-semibold text-sm uppercase tracking-wider">
                        What We Offer
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2">
                        Our Services
                    </h2>

                    <div class="w-14 h-1 bg-[#F15A24] mx-auto mt-5 rounded-full"></div>
                </div>

                <!-- Service Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 items-stretch">
                    @foreach ($services as $service)
                        <x-service-card :service="$service" />
                    @endforeach
                </div>

                <div class="mt-12">
                    {{-- {{ $services->links() }} --}}
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
                Not Sure Which Service You Need?
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                Our team of experts is here to help you find the perfect solution for your business.
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
