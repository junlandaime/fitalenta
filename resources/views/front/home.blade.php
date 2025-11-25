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

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card:hover .service-icon {
            transform: rotateY(360deg);
        }

        .team-member:hover img {
            transform: scale(1.1);
        }

        .client-logo {
            filter: grayscale(100%);
        }

        .client-logo:hover {
            filter: grayscale(0%);
        }

        .service-card,
        .service-icon,
        .team-member img,
        .client-logo {
            transition: all 0.3s ease;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: white;
        }

        .swiper-pagination-bullet-active {
            background: white;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <div class="swiper hero-swiper h-screen" data-aos="fade-up">
        <div class="swiper-wrapper">
            @foreach ($heroSlides as $slide)
                <div class="swiper-slide relative">
                    <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}"
                        class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $slide->title }}</h1>
                            <p class="text-xl md:text-2xl mb-8">{{ $slide->subtitle }}</p>
                            <a href="{{ $slide->cta_link }}" target="_blank"
                                class="bg-secondary text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-opacity-90 transition">
                                {{ $slide->cta_text }}
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
    <section class="py-16 bg-white lg:px-32" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Services</h2>
            <div class="swiper services-swiper">
                <div class="swiper-wrapper">
                    @foreach ($services as $service)
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="service-card bg-white p-6 rounded-lg text-center shadow-lg h-full">
                                <a href="{{ route('services.show', $service) }}" class="block">
                                    <div
                                        class="service-icon w-20 h-20 mx-auto mb-4 bg-secondary rounded-full flex items-center justify-center">
                                        <i class="fas fa-{{ $service->icon }} text-3xl text-white"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                                    <p class="text-gray-600">{{ Str::limit($service->short, 100) }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white md:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2 mb-8 md:mb-0" data-aos="fade-right">
                    <img src="{{ asset('landing.png') }}" alt="About FITALENTA" class="rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2 md:pl-12" data-aos="fade-left">
                    <h2 class="text-4xl font-bold mb-4">We Are Here to Be Lifetime Business Partner</h2>
                    <p class="text-xl mb-6">We focus on providing quality services in Talent Management and Business
                        Consulting since 2023</p>
                    <a href="{{ route('services') }}"
                        class="bg-secondary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition">
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Events Section -->
    <section class="py-20 bg-gray-100 lg:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Latest News & Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($combinedItems as $item)
                    <article class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition"
                        data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-secondary font-semibold">{{ $item->category->name }}</span>
                                <time class="text-sm text-gray-600">{{ $item->event_date->diffForHumans() }}</time>
                            </div>
                            <h3 class="font-bold text-xl mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-700 mb-4">{{ $item->excerpt }}</p>
                            <a href="{{ $item->category->name == 'Event' ? route('events.show', $item) : route('articles.show', $item) }}"
                                class="text-secondary hover:underline">
                                {{ $item->category->name == 'Event' ? 'See Event' : 'Read Article' }}
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-100 md:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Impact</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @php
                    $stats = [
                        ['value' => 750, 'label' => 'Peserta Kegiatan', 'duration' => 1],
                        ['value' => 122, 'label' => 'Philanthropy Affiliate', 'duration' => 30],
                        ['value' => 30, 'label' => 'Successful Event and Training', 'duration' => 100],
                        ['value' => 120, 'label' => 'Asal Universitas, Sekolah, dan Lembaga', 'duration' => 50],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < {{ $stat['value'] }}) count++ }, {{ $stat['duration'] }})" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                        <div class="text-gray-600">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white lg:px-32" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Experts</h2>
            <div class="swiper team-swiper">
                <div class="swiper-wrapper">
                    @foreach ($teamMembers as $member)
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="team-member relative group">
                                <img src="{{ Storage::url($member->image) }}" alt="{{ $member->name }}"
                                    class="w-full h-96 object-cover rounded-lg shadow-lg">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition rounded-lg">
                                    <div class="absolute bottom-0 left-0 p-4 text-white">
                                        <h3 class="text-xl font-semibold">{{ $member->name }}</h3>
                                        <p>{{ $member->position }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-100 lg:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">What Our Clients Say</h2>
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                <div class="mb-4">
                                    <p class="font-semibold">{{ $testimonial->client_name }}</p>
                                    <p class="text-sm text-gray-500">{{ $testimonial->company }}</p>
                                </div>
                                <p class="text-gray-600 mb-4">"{{ $testimonial->content }}"</p>
                                <div class="flex text-yellow-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i
                                            class="fas fa-star {{ $i < $testimonial->rating ? 'text-yellow-500' : 'text-gray-400' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-16 bg-white lg:px-11" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Mitra and Clients</h2>
            <div class="swiper clients-swiper">
                <div class="swiper-wrapper">
                    @foreach ($clients as $client)
                        <div class="swiper-slide flex items-center justify-center" data-aos="fade-up"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                                class="client-logo max-h-32 max-w-full">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination hidden md:block"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white" data-aos="fade-up">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Take Your Business to the Next Level?</h2>
            <p class="text-xl mb-8">Let's work together for your business and career success.</p>
            <a href="{{ route('contact') }}"
                class="bg-white text-primary px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition">
                Contact Us Today
            </a>
        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=6281110119273&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition z-50">
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
