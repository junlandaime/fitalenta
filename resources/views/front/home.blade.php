@extends('layouts.app2')

@section('title', 'Welcome to FITALENTA')

@section('link', '{{ url()->current() }}')
@section('metatitle', 'FITALENTA - Empowering Businesses and Careers')
@section('metaimage', 'https://info.fitalenta.co.id/wp-content/uploads/2024/01/Slice-9-1024x1024.png')
@section('metadescription',
    'Expert business consulting and talent management solutions for sustainable growth and
    success. Unlock your potential with FITALENTA.')


    @push('styles')
        <style>
            [x-cloak] {
                display: none !important;
            }

            .service-card:hover .service-icon {
                transform: rotateY(360deg);
                transition: transform 0.6s;
            }

            .service-card:hover {
                transform: translateY(-10px);
                transition: transform 0.3s;
            }

            .team-member:hover img {
                transform: scale(1.1);
                transition: transform 0.3s;
            }

            .client-logo {
                filter: grayscale(100%);
                transition: filter 0.3s;
            }

            .client-logo:hover {
                filter: grayscale(0%);
            }

            @keyframes float {
                0% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }

                100% {
                    transform: translateY(0px);
                }
            }

            .float {
                animation: float 6s ease-in-out infinite;
            }

            <style>[x-cloak] {
                display: none !important;
            }
        </style>
    @endpush

    {{-- @dd($combinedItems) --}}

@section('content')
    <!-- Hero Section with Image Slider -->

    <div class="swiper hero-swiper h-screen x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })"">
        <div class="swiper-wrapper">
            @foreach ($heroSlides as $slide)
                <div class="swiper-slide relative" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="ttext-4xl md:text-6xl font-bold mb-4">{{ $slide['title'] }}</h1>
                            <p class="text-xl md:text-2xl mb-8">{{ $slide['subtitle'] }}</p>
                            <a href="{{ $slide['cta_link'] }}" target="_blank"
                                class="bg-secondary text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-opacity-90 transition duration-300">
                                {{ $slide['cta_text'] }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Services Section with Horizontal Slider -->
    <div class="py-16 bg-white lg:px-32">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Our Services</h2>
            <div class="swiper services-swiper">
                <div class="swiper-wrapper" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    @foreach ($services as $service)
                        <div class="swiper-slide">
                            <div class="service-card bg-white p-6 rounded-lg text-center shadow-lg">
                                <a href="{{ route('services.show', $service) }}">
                                    <div
                                        class="service-icon w-20 h-20 mx-auto mb-4 bg-secondary rounded-full flex items-center justify-center">
                                        <i class="fas fa-{{ $service->icon }} text-3xl text-white"></i>
                                    </div>
                                </a>

                                <a href="{{ route('services.show', $service) }}">
                                    <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                                </a>
                                <p class="text-gray-600">{!! Str::limit($service->short, 100) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- News & Events Section -->
    <section class="py-20 bg-gray-100 lg:px-40">
        <div class="container mx-auto px-4" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
            <h2 class="text-3xl font-bold text-center mb-12">Latest News & Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">

                @foreach ($combinedItems as $item)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ Storage::url($item->image) }}" alt="News 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-600 mb-2">{{ $item->event_date->diffForHumans() }}</div>
                            {{-- <div class="text-sm text-gray-600 mb-2">{{ $item->created_at->format('F j, Y') }}</div> --}}
                            <span class="text-sm text-secondary font-semibold">{{ $item->category->name }}</span>

                            <h3 class="font-bold text-xl mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-700">{{ $item->excerpt }}</p>
                            @if ($item->category->name == 'Event')
                                <a href="{{ route('events.show', $item) }}"
                                    class="inline-block mt-4 text-secondary hover:underline">See Event</a>
                            @else
                                <a href="{{ route('articles.show', $item) }}"
                                    class="inline-block mt-4 text-secondary hover:underline">Read Article</a>
                            @endif

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white md:px-40">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">About FITALENTA</h2>
            <div class="flex flex-wrap items-center" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                <div class="w-full md:w-1/2 mb-8 md:mb-0">
                    <img src="{{ asset('landing.png') }}" alt="About FITALENTA" class="rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2 md:pl-12">
                    <h3 class="text-5xl font-bold mb-4">We Are Here to Be Lifetime Business Partner for Companies and
                        Individuals</h3>

                    <h3 class="text-2xl font-bold mb-4">
                        We’re in this business since 2023 and provide the best services</h3>
                    <p class="mb-6">We focus on providing quality services in Talent Management and Business Consultant
                    </p>
                    <a href="{{ route('services') }}"
                        class="bg-secondary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition duration-300">Learn
                        More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <section class="py-20 bg-gray-100 md:px-40">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Our Impact</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 750) count++ }, 1)">
                    <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-600">Peserta Kegiatan</div>
                </div>
                <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 122) count++ }, 30)">
                    <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-600">Philanthropy Affiliate</div>
                </div>
                <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 30) count++ }, 100)">
                    <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-600">Successfull Event and Training</div>
                </div>
                <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 120) count++ }, 50)">
                    <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-600">Asal Universitas, Sekolah, dan Lembaga</div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Team Section with Slider -->
    <div class="py-16 bg-white lg:px-32">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Our Experts</h2>
            <div class="swiper team-swiper">
                <div class="swiper-wrapper mb-10" x-data="{ activeProfile: null }" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">

                    @foreach ($teamMembers as $index => $member)
                        <div class="swiper-slide w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4">
                            <div class="relative group" @mouseenter="activeProfile={{ $index }}"
                                @mouseleave="activeProfile=null">
                                <img src="{{ Storage::url($member->image) }}" alt="{{ $member['name'] }}"
                                    class="w-full h-[24rem] object-cover rounded-lg shadow-lg">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 p-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <h3 class="text-xl font-semibold">{{ $member['name'] }}</h3>
                                    <p>{{ $member['position'] }}</p>
                                </div>
                            </div>
                            {{-- <div x-show="activeProfile === {{ $index }}"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-90"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                class="mt-4 p-4 bg-white rounded-lg shadow-lg">
                                <p class="text-sm">{{ strtolower($member['bio']) }} </p>
                            </div> --}}
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    {{-- <x-team-section :members="$teamMembers" /> --}}

    <!-- About Section -->


    <!-- Testimonial Section with Slider -->
    <div class="py-16 bg-gray-100 lg:px-40">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">What Our Clients Say</h2>
            <div class="swiper testimonial-swiper" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                <div class="swiper-wrapper mb-10">
                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                <div class="flex items-center mb-4">
                                    {{-- <img src="{{ asset('images/testimonials/' . $testimonial['image']) }}"
                                        alt="{{ $testimonial['client_name'] }}"
                                        class="w-16 h-16 rounded-full mr-4 object-cover"> --}}
                                    <div>
                                        <p class="font-semibold">{{ $testimonial['client_name'] }}</p>
                                        <p class="text-sm text-gray-500">
                                            {{ $testimonial['company'] }}</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">"{{ $testimonial['content'] }}"</p>
                                <div class="flex text-yellow-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 fill-current {{ $i < $testimonial['rating'] ? 'text-yellow-500' : 'text-gray-400' }}"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- Our Clients Section with Slider -->
    <div class="py-16 bg-white lg:px-11">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Our Mitra and Clients</h2>
            <div class="swiper clients-swiper" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                <div class="swiper-wrapper mb-14">
                    @foreach ($clients as $client)
                        <div class="swiper-slide flex items-center justify-center">
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client['name'] }}"
                                class="max-h-32 max-w-full transition-all duration-300 filter hover:filter-none hover:scale-125">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination hidden md:block"></div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="py-16 bg-[#00294B] text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Take Your Business to the Next Level?</h2>
            <p class="text-xl mb-8">Let's work together for your business and career success.</p>
            <a href="{{ route('contact') }}"
                class="bg-white text-[#00294B] px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">
                Contact Us Today
            </a>
        </div>
    </div>
    <!-- WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=6285281791931&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom styles for Swiper */
        .swiper-button-next,
        .swiper-button-prev {
            color: white;
        }

        .swiper-pagination-bullet-active {
            background: white;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.hero-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            new Swiper('.services-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                },
            });

            new Swiper('.team-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

            new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

            new Swiper('.clients-swiper', {
                slidesPerView: 2,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                    },
                },
            });
        });
    </script>
@endpush
