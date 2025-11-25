@extends('layouts.app2')

@section('title', 'Persebaran Peserta Program')

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .logo-slider .swiper-slide {
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .logo-slider .swiper-slide:hover {
            opacity: 1;
        }
    </style>
@endpush

@section('content')
    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">Persebaran Peserta Program</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Jaringan Alumni dari Berbagai Institusi Pendidikan Terkemuka</p>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Persebaran Peserta</li>
            </ol>
        </div>
    </div>

    <!-- Logo Slider Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Institusi Asal Peserta</h2>
            <div class="swiper logo-slider">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                                class="mx-auto h-24 object-contain">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg text-center shadow-lg">
                    <div class="text-4xl font-bold text-secondary mb-2">{{ number_format($totalStudents) }}+</div>
                    <div class="text-gray-600">Alumni Aktif</div>
                </div>
                <div class="bg-white p-8 rounded-lg text-center shadow-lg">
                    <div class="text-4xl font-bold text-secondary mb-2">{{ $totalUniversities }}+</div>
                    <div class="text-gray-600">Universitas Partner</div>
                </div>
                <div class="bg-white p-8 rounded-lg text-center shadow-lg">
                    <div class="text-4xl font-bold text-secondary mb-2">{{ $totalProvinces }}+</div>
                    <div class="text-gray-600">Provinsi</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper for logo slider
        new Swiper('.logo-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
@endpush
