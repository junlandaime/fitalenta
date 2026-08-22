@extends('layouts.app2')

@section('title', $service->name)

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#003E68] to-[#005792] text-white py-24 md:py-32">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-white rounded-full blur-3xl"></div>
            <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-[#F15A24] rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <span class="inline-flex items-center px-4 py-2 rounded-full
                             bg-white/10 border border-white/20 backdrop-blur-sm
                             text-sm font-medium mb-6">
                    Our Services
                </span>

                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-5">
                    {{ $service->name }}
                </h1>

                <p class="text-lg md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    {{ $service->tagline }}
                </p>

            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm flex-wrap">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#005792] hover:text-[#00294B] transition duration-300 font-medium">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li>
                    <a href="{{ route('services') }}"
                       class="text-[#005792] hover:text-[#00294B] transition duration-300 font-medium">
                        Services
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 font-medium truncate max-w-xs">
                    {{ $service->name }}
                </li>
            </ol>
        </div>
    </div>


    <!-- Service Detail -->
    <section class="py-20 bg-[#F7F9FC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

                <!-- Main Content -->
                <div class="lg:col-span-2">

                    <div class="bg-white rounded-3xl p-7 md:p-10 shadow-sm border border-gray-100">

                        <div class="prose max-w-none">
                            {!! $service->description !!}
                        </div>

                        @if ($service->benefits)
                            <div class="mt-12 pt-10 border-t border-gray-100">

                                <div class="flex items-center gap-3 mb-6">
                                    <div class="w-10 h-10 rounded-xl bg-[#00294B] flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>

                                    <h2 class="text-2xl font-bold text-[#00294B]">
                                        Benefits
                                    </h2>
                                </div>

                                <ul class="space-y-4">
                                    @foreach ($service->benefits as $benefit)
                                        <li class="flex items-start gap-3 text-gray-600">
                                            <span class="mt-1 w-5 h-5 rounded-full bg-[#005792]/10
                                                         flex items-center justify-center flex-shrink-0">
                                                <svg class="w-3 h-3 text-[#005792]" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="3"
                                                          d="M5 13l4 4L19 7" />
                                                </svg>
                                            </span>

                                            <span>{{ $benefit }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif

                        @if ($service->process)
                            <div class="mt-12 pt-10 border-t border-gray-100">

                                <div class="flex items-center gap-3 mb-7">
                                    <div class="w-10 h-10 rounded-xl bg-[#00294B] flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>

                                    <h2 class="text-2xl font-bold text-[#00294B]">
                                        Our Process
                                    </h2>
                                </div>

                                <ol class="relative border-l border-gray-200 ml-4 space-y-8">
                                    @foreach ($service->process as $step)
                                        <li class="relative pl-8">

                                            <span class="absolute -left-4 top-0 w-8 h-8 rounded-full
                                                         bg-[#005792] text-white flex items-center
                                                         justify-center text-sm font-bold
                                                         ring-4 ring-white">
                                                {{ $loop->iteration }}
                                            </span>

                                            <h3 class="font-semibold text-[#00294B] mb-1">
                                                {{ $step['title'] }}
                                            </h3>

                                            <p class="text-gray-600 leading-relaxed">
                                                {{ $step['description'] }}
                                            </p>

                                        </li>
                                    @endforeach
                                </ol>

                            </div>
                        @endif

                    </div>

                </div>


                <!-- Sidebar -->
                <div class="lg:sticky lg:top-28">

                    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

                        <!-- Sidebar Header -->
                        <div class="bg-gradient-to-br from-[#00294B] to-[#005792] p-7 text-white">
                            <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/20
                                        flex items-center justify-center mb-5">
                                <i class="fas fa-{{ $service->icon }} text-xl"></i>
                            </div>

                            <h3 class="text-xl font-bold">
                                {{ $service->name }}
                            </h3>
                        </div>

                        <div class="p-7">

                            @if ($service->price)
                                <div class="mb-7 pb-7 border-b border-gray-100">
                                    <p class="text-sm text-gray-500 mb-2">
                                        Pricing
                                    </p>

                                    <p class="text-3xl font-bold text-[#00294B]">
                                        {{ $service->formatted_price }}
                                    </p>

                                    @if ($service->price_details)
                                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                            {{ $service->price_details }}
                                        </p>
                                    @endif
                                </div>
                            @endif

                            <a href="{{ route('contact', ['service' => $service->slug]) }}"
                               class="block w-full bg-[#F15A24] text-white text-center
                                      py-3.5 px-5 rounded-xl font-semibold
                                      hover:bg-[#d94d1b] transition duration-300
                                      shadow-sm hover:shadow-md">
                                Request This Service
                            </a>

                            @if ($service->features)
                                <div class="mt-8 pt-7 border-t border-gray-100">

                                    <h3 class="text-lg font-bold text-[#00294B] mb-5">
                                        Features
                                    </h3>

                                    <ul class="space-y-4">
                                        @foreach ($service->features as $feature)
                                            <li class="flex items-start gap-3 text-gray-600 text-sm">

                                                <span class="w-5 h-5 rounded-full bg-green-50
                                                             flex items-center justify-center flex-shrink-0 mt-0.5">
                                                    <svg class="h-3 w-3 text-green-500"
                                                         fill="none"
                                                         viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </span>

                                                <span>{{ $feature }}</span>

                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endif

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#00294B] to-[#005792] text-white">

        <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">

            <span class="text-white/70 uppercase tracking-wider text-sm">
                Ready When You Are
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-4">
                Ready to Get Started?
            </h2>

            <p class="text-xl mb-8 text-white/85">
                Let's work together to elevate your business with our {{ $service->name }} service.
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
