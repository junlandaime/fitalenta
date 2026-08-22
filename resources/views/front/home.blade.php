@extends('layouts.app2')

@section('title', 'Welcome to FITALENTA')
{{--
@section('link', '{{ url()->current() }}')
@section('metatitle', 'FITALENTA - Empowering Businesses and Careers')
@section('metaimage', 'https://info.fitalenta.co.id/wp-content/uploads/2024/01/Slice-9-1024x1024.png')
@section('metadescription',
    'Expert business consulting and talent management solutions for sustainable growth and
    success. Unlock your potential with FITALENTA.') --}}

{{-- @push('scriptwal')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            countVisit();
            displayStats();
        });
    </script>
@endpush --}}

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7NFS01CSK7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'G-7NFS01CSK7');
</script>

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        [x-cloak] {
            display: none !important;
        }

        .service-card,
        .service-icon,
        .team-member img,
        .client-logo {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
        }

        .service-card:hover .service-icon {
            transform: translateY(-3px);
        }

        .team-member:hover img {
            transform: scale(1.05);
        }

        .client-logo {
            filter: grayscale(100%);
        }

        .client-logo:hover {
            filter: grayscale(0%);
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: white;
        }

        .swiper-pagination-bullet-active {
            background: #005792;
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section -->
    <div class="swiper hero-swiper h-screen" data-aos="fade-up">
        <div class="swiper-wrapper">
            @foreach ($heroSlides as $slide)
                <div class="swiper-slide relative">
                    <img src="{{ asset('storage/' . $slide->image) }}"
                         alt="{{ $slide->title }}"
                         class="absolute inset-0 w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#00294B]/90 via-[#00294B]/60 to-transparent flex items-center">
                        <div class="text-left text-white px-6 md:px-16 lg:px-24 max-w-4xl">
                            <span class="inline-block mb-5 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-sm font-semibold backdrop-blur-sm">
                                FITALENTA
                            </span>

                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-5 leading-tight drop-shadow-lg">
                                {{ $slide->title }}
                            </h1>

                            <p class="text-lg md:text-2xl mb-8 text-gray-100 max-w-2xl leading-relaxed">
                                {{ $slide->subtitle }}
                            </p>

                            <a href="{{ $slide->cta_link }}" target="_blank"
                               class="inline-flex items-center bg-white text-[#00294B] px-8 py-3.5 rounded-full text-lg font-bold shadow-lg hover:bg-gray-100 hover:-translate-y-1 transition duration-300">
                                {{ $slide->cta_text }}
                                <span class="ml-2">→</span>
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

    <!-- Services Section -->
    <section class="py-24 bg-gray-50 lg:px-32" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    What We Do
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-4">
                    Our Services
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Empowering businesses and individuals with tailored solutions for sustainable growth and success.
                </p>
            </div>

            <div class="swiper services-swiper">
                <div class="swiper-wrapper !h-[20%] md:!h-[45%]">
                    @foreach ($services as $service)
                        <div class="swiper-slide pb-10"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="service-card group bg-white p-8 rounded-3xl text-center border border-gray-100 hover:border-[#005792]/20 shadow-sm hover:shadow-2xl transition-all duration-300 h-full">
                                <a href="{{ route('services.show', $service) }}" class="block">

                                    <div class="service-icon w-20 h-20 mx-auto mb-6 bg-[#00294B] rounded-2xl flex items-center justify-center shadow-lg group-hover:bg-[#005792] transition-all duration-300">
                                        <i class="fas fa-{{ $service->icon }} text-3xl text-white"></i>
                                    </div>

                                    <h3 class="text-xl font-bold text-[#00294B] mb-3">
                                        {{ $service->name }}
                                    </h3>

                                    <p class="text-gray-500 leading-relaxed">
                                        {!! Str::limit($service->short, 200) !!}
                                    </p>

                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- News & Events Section -->
    <section class="py-24 bg-white lg:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    Stay Updated
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-4">
                    Latest News & Events
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Discover our latest activities, insights, and events.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($combinedItems as $item)
                    <article
                        class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col"
                        data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">

                        <!-- Image -->
                        <div class="overflow-hidden">
                            <img src="{{ Storage::url($item->image) }}"
                                 alt="{{ $item->title }}"
                                 class="w-full h-56 object-cover hover:scale-105 transition duration-500">
                        </div>

                        <!-- Content -->
                        <div class="p-7 flex flex-col flex-1">

                            <!-- Date & Status -->
                            <div class="flex justify-between items-center mb-4">
                                <time class="text-sm text-gray-500">
                                    {{ $item->event_date->diffForHumans() }}
                                </time>

                                <span class="bg-[#00294B]/10 text-[#00294B] text-xs font-semibold px-3 py-1 rounded-full">
                                    Past
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="font-bold text-xl mb-3 text-[#00294B] leading-snug">
                                {{ $item->title }}
                            </h3>

                            <!-- Description -->
                            <p class="text-sm text-gray-500 leading-relaxed mb-6">
                                {{ $item->excerpt }}
                            </p>

                            <!-- Button -->
                            <a href="{{ $item->category->name == 'Event'
                                ? route('events.show', $item)
                                : route('articles.show', $item) }}"
                               class="mt-auto inline-flex items-center w-fit bg-[#00294B] text-white px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-[#005792] transition duration-300">
                                {{ $item->category->name == 'Event' ? 'View Recap' : 'Read Article' }}
                                <span class="ml-2">→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gray-50 md:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center gap-y-14">

                <!-- Image -->
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <div class="relative pr-0 md:pr-8">
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[#005792]/10 rounded-3xl"></div>

                        <img src="{{ asset('landing.png') }}"
                             alt="About FITALENTA"
                             class="relative w-full rounded-3xl shadow-xl">
                    </div>
                </div>

                <!-- Content -->
                <div class="w-full md:w-1/2 md:pl-12" data-aos="fade-left">

                    <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                        About FITALENTA
                    </span>

                    <h2 class="text-3xl md:text-5xl font-bold text-[#00294B] mt-3 mb-6 leading-tight">
                        We Are Here to Be Lifetime Business Partner
                    </h2>

                    <p class="text-lg text-gray-500 leading-relaxed mb-8">
                        We focus on providing quality services in Talent Management and
                        Business Consulting since 2023.
                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-flex items-center bg-[#00294B] text-white px-7 py-3.5 rounded-full font-semibold hover:bg-[#005792] hover:-translate-y-1 transition duration-300 shadow-md">
                        Learn More About Us
                        <span class="ml-2">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-white md:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    Our Impact
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3">
                    Making a Meaningful Impact
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

                @php
                    $stats = [
                        ['value' => 750, 'label' => 'Peserta Kegiatan', 'duration' => 1],
                        ['value' => 122, 'label' => 'Philanthropy Affiliate', 'duration' => 30],
                        ['value' => 30, 'label' => 'Successful Event and Training', 'duration' => 100],
                        ['value' => 120, 'label' => 'Asal Universitas, Sekolah, dan Lembaga', 'duration' => 50],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div
                        x-data="{ count: 0 }"
                        x-init="setInterval(() => {
                            if (count < {{ $stat['value'] }}) count++
                        }, {{ $stat['duration'] }})"
                        data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}"
                        class="bg-gray-50 rounded-3xl p-7 md:p-8 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300">

                        <div class="text-4xl md:text-5xl font-bold text-[#00294B] mb-3">
                            <span x-text="count + '+'"></span>
                        </div>

                        <div class="w-10 h-1 bg-[#005792] rounded-full mb-4"></div>

                        <div class="text-gray-500 text-sm md:text-base leading-relaxed">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-24 bg-gray-50 lg:px-32" data-aos="fade-up">
        <div class="container mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    Meet Our Team
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-4">
                    Our Experts
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Meet the people behind our expertise and commitment to delivering quality solutions.
                </p>
            </div>

            <div class="swiper team-swiper">
                <div class="swiper-wrapper !h-[30%] md:!h-[50%]">
                    @foreach ($teamMembers as $member)
                        <div class="swiper-slide"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="relative group overflow-hidden rounded-3xl shadow-sm hover:shadow-2xl transition duration-300 bg-white">

                                <img src="{{ Storage::url($member->image) }}"
                                     alt="{{ $member->name }}"
                                     class="w-full h-96 object-cover group-hover:scale-105 transition duration-500">

                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#00294B] via-[#00294B]/60 to-transparent pt-24 p-6 text-white">
                                    <h3 class="text-xl font-bold mb-1">
                                        {{ $member->name }}
                                    </h3>

                                    <p class="text-sm text-gray-200">
                                        {{ $member->position }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination mt-6"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white lg:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    Testimonials
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-4">
                    What Our Clients Say
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Hear directly from the people and organizations we have worked with.
                </p>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper !h-[20%] md:!h-[40%]">

                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="bg-gray-50 rounded-3xl border border-gray-100 shadow-sm p-8 h-full hover:shadow-xl hover:-translate-y-1 transition duration-300">

                                <div class="flex items-center justify-between mb-5">
                                    <div>
                                        <p class="font-bold text-lg text-[#00294B]">
                                            {{ $testimonial->client_name }}
                                        </p>

                                        <p class="text-sm text-gray-500">
                                            {{ $testimonial->company }}
                                        </p>
                                    </div>

                                    <div class="text-[#005792] text-4xl">
                                        “
                                    </div>
                                </div>

                                <p class="text-gray-600 leading-relaxed mb-6">
                                    {{ $testimonial->content }}
                                </p>

                                <div class="flex text-sm">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star mr-1
                                        {{ $i < $testimonial->rating
                                            ? 'text-yellow-500'
                                            : 'text-gray-300' }}">
                                        </i>
                                    @endfor
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="swiper-pagination mt-6"></div>
            </div>

        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-24 bg-gray-50 lg:px-11" data-aos="fade-up">
        <div class="container mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-[#005792] font-semibold uppercase tracking-wider text-sm">
                    Our Network
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-4">
                    Our Mitra and Clients
                </h2>

                <p class="text-gray-500 leading-relaxed">
                    Working together with trusted partners and organizations.
                </p>
            </div>

            <div class="swiper clients-swiper">
                <div class="swiper-wrapper !h-[10%] md:!h-[30%]">

                    @foreach ($clients as $client)
                        <div class="swiper-slide flex items-center justify-center px-3"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="w-full h-32 bg-white rounded-3xl border border-gray-100 flex items-center justify-center p-6 hover:shadow-lg transition duration-300">

                                <img src="{{ asset('storage/' . $client->logo) }}"
                                     alt="{{ $client->name }}"
                                     class="client-logo max-h-20 max-w-[80%] object-contain transition duration-300 hover:scale-105">

                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="swiper-pagination hidden md:block"></div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#00294B] text-white relative overflow-hidden" data-aos="fade-up">
        <div class="absolute top-0 right-0 w-72 h-72 bg-[#005792]/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-[#005792]/20 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 text-center relative z-10">

            <span class="inline-block mb-5 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-sm font-semibold">
                Let's Work Together
            </span>

            <h2 class="text-3xl md:text-5xl font-bold mb-5 leading-tight">
                Ready to Take Your Business to the Next Level?
            </h2>

            <p class="text-lg md:text-xl text-gray-300 mb-9 max-w-2xl mx-auto">
                Let's work together for your business and career success.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center bg-white text-[#00294B] px-8 py-3.5 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 hover:-translate-y-1 transition duration-300">
                Contact Us Today
                <span class="ml-2">→</span>
            </a>

        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=6281110119273&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk"
       target="_blank"
       class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 hover:scale-110 transition duration-300 z-50">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

@endsection

@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 50
            });

            // Initialize Swiper
            const commonConfig = {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                }
            };

            new Swiper('.hero-swiper', {
                ...commonConfig,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }
            });

            new Swiper('.services-swiper', {
                ...commonConfig,
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    1024: {
                        slidesPerView: 4
                    }
                }
            });

            new Swiper('.team-swiper', {
                ...commonConfig,
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    1024: {
                        slidesPerView: 4
                    }
                }
            });

            new Swiper('.testimonial-swiper', {
                ...commonConfig,
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });

            new Swiper('.clients-swiper', {
                ...commonConfig,
                slidesPerView: 2,
                spaceBetween: 30,
                breakpoints: {
                    640: {
                        slidesPerView: 3
                    },
                    768: {
                        slidesPerView: 4
                    },
                    1024: {
                        slidesPerView: 6
                    }
                }
            });
        });
    </script>
@endpush
