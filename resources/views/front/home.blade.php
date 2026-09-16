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
            filter: none !important;
            opacity: 1 !important;
        }

        .client-logo:hover {
            filter: none !important;
            opacity: 1 !important;
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


    {{-- =========================================================
         FITALENTA HOME REDESIGN - VISUAL OVERRIDES ONLY
         Blade logic/database loops remain intact.
         ========================================================= --}}
    <style>
        :root {
            --ft-navy: #00294B;
            --ft-blue: #005792;
            --ft-orange: #E8491D;
            --ft-soft: #F5F8FB;
            --ft-border: #E4ECF2;
            --ft-text: #607080;
        }

        html { scroll-behavior: smooth; }
        body { background: #fff; color: var(--ft-navy); }

        .hero-swiper {
            min-height: 680px;
            height: 92vh !important;
            background:
                radial-gradient(circle at 82% 22%, rgba(11,132,198,.42), transparent 28%),
                radial-gradient(circle at 76% 76%, rgba(232,73,29,.14), transparent 24%),
                linear-gradient(135deg, #00294B 0%, #004E7F 55%, #0878B8 100%);
        }

        .hero-swiper .swiper-slide { min-height: 680px; }

        .hero-swiper .swiper-slide > img { opacity: .72; }

        .hero-swiper .swiper-slide > div.absolute.inset-0 {
            background:
                linear-gradient(90deg, rgba(0,41,75,.97) 0%, rgba(0,41,75,.91) 42%, rgba(0,87,146,.62) 72%, rgba(0,41,75,.30) 100%) !important;
        }

        .hero-swiper .text-left {
            padding-top: 6rem;
            max-width: 980px;
        }

        .hero-swiper h1 {
            letter-spacing: -.035em;
            max-width: 900px;
            text-shadow: 0 8px 28px rgba(0,0,0,.18);
        }

        .hero-swiper p {
            max-width: 720px;
            color: rgba(255,255,255,.86) !important;
        }

        .hero-swiper a {
            border-radius: 14px !important;
            min-height: 52px;
            box-shadow: 0 14px 34px rgba(0,0,0,.16);
        }

        .hero-swiper .swiper-button-next,
        .hero-swiper .swiper-button-prev {
            width: 46px;
            height: 46px;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,.22);
            background: rgba(255,255,255,.10);
            backdrop-filter: blur(10px);
        }

        .hero-swiper .swiper-button-next::after,
        .hero-swiper .swiper-button-prev::after {
            font-size: 17px;
            font-weight: 800;
        }

        .hero-swiper .swiper-pagination-bullet {
            width: 9px;
            height: 9px;
            opacity: 1;
            background: rgba(255,255,255,.48);
        }

        .hero-swiper .swiper-pagination-bullet-active {
            width: 30px;
            border-radius: 999px;
            background: #fff;
        }

        section { position: relative; }
        section .container { max-width: 1180px; }

        section > .container > .text-center > span,
        section .text-center.max-w-2xl > span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .55rem;
            color: var(--ft-blue) !important;
            font-size: .78rem !important;
            font-weight: 800 !important;
            letter-spacing: .14em !important;
        }

        section > .container > .text-center > span::before,
        section .text-center.max-w-2xl > span::before {
            content: "";
            width: 25px;
            height: 3px;
            border-radius: 999px;
            background: var(--ft-orange);
        }

        section h2 { letter-spacing: -.025em; }
        section p { color: var(--ft-text); }

        .service-card {
            border-radius: 22px !important;
            border: 1px solid var(--ft-border) !important;
            box-shadow: 0 12px 34px rgba(0,41,75,.06) !important;
            min-height: 300px;
            display: flex;
            align-items: stretch;
        }

        .service-card:hover {
            transform: translateY(-6px) !important;
            box-shadow: 0 20px 44px rgba(0,41,75,.13) !important;
            border-color: rgba(0,87,146,.22) !important;
        }

        .service-card > a { width: 100%; }

        .service-icon {
            width: 64px !important;
            height: 64px !important;
            border-radius: 18px !important;
            margin-bottom: 1.4rem !important;
            background: linear-gradient(135deg, var(--ft-navy), var(--ft-blue)) !important;
            box-shadow: 0 12px 26px rgba(0,41,75,.16) !important;
        }

        .service-icon i { font-size: 1.45rem !important; }
        .service-card h3 { font-size: 1.15rem !important; }

        .service-card p {
            font-size: .94rem;
            line-height: 1.75;
        }

        article.bg-white.rounded-3xl {
            border-radius: 22px !important;
            border: 1px solid var(--ft-border) !important;
            box-shadow: 0 12px 34px rgba(0,41,75,.06) !important;
        }

        article.bg-white.rounded-3xl:hover {
            transform: translateY(-6px) !important;
            box-shadow: 0 20px 44px rgba(0,41,75,.13) !important;
        }

        article.bg-white.rounded-3xl > .overflow-hidden {
            min-height: 224px;
            background:
                radial-gradient(circle at 80% 20%, rgba(11,132,198,.34), transparent 34%),
                linear-gradient(135deg, #00294B, #0878B8);
        }

        article.bg-white.rounded-3xl a.mt-auto {
            border-radius: 12px !important;
        }

        section.bg-gray-50.md\:px-40 {
            background: #fff !important;
        }

        section.bg-gray-50.md\:px-40 img {
            border-radius: 28px !important;
            box-shadow: 0 24px 55px rgba(0,41,75,.14) !important;
        }

        section.bg-gray-50.md\:px-40 a {
            border-radius: 12px !important;
        }

        section.bg-white.md\:px-40 {
            background:
                radial-gradient(circle at 85% 15%, rgba(0,87,146,.35), transparent 28%),
                linear-gradient(135deg, #00294B, #004F82) !important;
        }

        section.bg-white.md\:px-40 .text-center span,
        section.bg-white.md\:px-40 .text-center h2 {
            color: #fff !important;
        }

        section.bg-white.md\:px-40 .grid > div {
            border-radius: 20px !important;
            border: 1px solid rgba(255,255,255,.12) !important;
            background: rgba(255,255,255,.08) !important;
            backdrop-filter: blur(8px);
            box-shadow: none !important;
        }

        section.bg-white.md\:px-40 .grid > div:hover {
            transform: translateY(-4px) !important;
            background: rgba(255,255,255,.12) !important;
        }

        section.bg-white.md\:px-40 .grid > div > div:first-of-type,
        section.bg-white.md\:px-40 .grid > div > div:last-of-type {
            color: #fff !important;
        }

        section.bg-white.md\:px-40 .grid > div > .w-10 {
            background: var(--ft-orange) !important;
        }

        .team-swiper .swiper-slide > div {
            border-radius: 22px !important;
            border: 1px solid var(--ft-border);
            box-shadow: 0 12px 34px rgba(0,41,75,.06) !important;
            background:
                radial-gradient(circle at 80% 20%, rgba(11,132,198,.30), transparent 34%),
                linear-gradient(135deg, #00294B, #0878B8) !important;
        }

        .team-swiper .absolute.inset-x-0.bottom-0 {
            background: linear-gradient(to top, rgba(0,41,75,.98), rgba(0,41,75,.64), transparent) !important;
        }

        .testimonial-swiper .swiper-slide > div {
            border-radius: 22px !important;
            border: 1px solid var(--ft-border) !important;
            background: #fff !important;
            box-shadow: 0 12px 34px rgba(0,41,75,.06) !important;
        }

        .testimonial-swiper .swiper-slide > div:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 18px 40px rgba(0,41,75,.12) !important;
        }

        .clients-swiper .swiper-slide > div {
            border-radius: 18px !important;
            border: 1px solid var(--ft-border) !important;
            box-shadow: 0 8px 26px rgba(0,41,75,.05);
        }

        .client-logo {
            opacity: 1 !important;
            filter: none !important;
        }

        .client-logo:hover {
            opacity: 1 !important;
            filter: none !important;
        }

        .services-swiper .swiper-pagination-bullet,
        .team-swiper .swiper-pagination-bullet,
        .testimonial-swiper .swiper-pagination-bullet,
        .clients-swiper .swiper-pagination-bullet {
            background: #A9BAC7;
            opacity: 1;
        }

        .services-swiper .swiper-pagination-bullet-active,
        .team-swiper .swiper-pagination-bullet-active,
        .testimonial-swiper .swiper-pagination-bullet-active,
        .clients-swiper .swiper-pagination-bullet-active {
            width: 24px;
            border-radius: 999px;
            background: var(--ft-blue);
        }

        section.bg-\[\#00294B\] {
            margin: 0 auto 4rem;
            max-width: 1180px;
            width: calc(100% - 2rem);
            border-radius: 30px;
            background:
                radial-gradient(circle at 85% 20%, rgba(0,132,198,.35), transparent 28%),
                radial-gradient(circle at 20% 90%, rgba(232,73,29,.12), transparent 25%),
                #00294B !important;
        }

        section.bg-\[\#00294B\] a {
            border-radius: 12px !important;
        }
@media (max-width: 1024px) {
            .hero-swiper {
                min-height: 650px;
                height: 86vh !important;
            }

            section {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .hero-swiper {
                min-height: 620px;
                height: 82vh !important;
            }

            .hero-swiper .text-left { padding-top: 5rem; }

            .hero-swiper .swiper-button-next,
            .hero-swiper .swiper-button-prev {
                display: none;
            }

            section {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }

            section.bg-\[\#00294B\] {
                width: calc(100% - 1.5rem);
                margin-bottom: 2rem;
                border-radius: 24px;
            }
}
    </style>


    {{-- =========================================================
         CARD HEIGHT FIX - VISUAL ONLY
         Prevents Services / Testimonials text from overflowing.
         ========================================================= --}}
    <style>
        .services-swiper,
        .testimonial-swiper,
        .team-swiper,
        .clients-swiper {
            overflow: hidden;
            padding-bottom: 8px;
        }

        .services-swiper .swiper-wrapper,
        .testimonial-swiper .swiper-wrapper,
        .team-swiper .swiper-wrapper,
        .clients-swiper .swiper-wrapper {
            height: auto !important;
            align-items: stretch !important;
        }

        .services-swiper .swiper-slide,
        .testimonial-swiper .swiper-slide,
        .team-swiper .swiper-slide,
        .clients-swiper .swiper-slide {
            height: auto !important;
            display: flex;
        }

        .services-swiper .swiper-slide > .service-card,
        .testimonial-swiper .swiper-slide > div,
        .clients-swiper .swiper-slide > div {
            width: 100%;
            height: auto !important;
            min-height: 100%;
        }

        .service-card {
            min-height: 390px !important;
        }

        .service-card > a {
            display: flex !important;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .service-card p,
        .testimonial-swiper p {
            overflow: visible !important;
            max-height: none !important;
            white-space: normal !important;
            word-break: normal;
        }

        .testimonial-swiper .swiper-slide > div {
            display: flex;
            flex-direction: column;
            min-height: 360px;
        }

        .testimonial-swiper .swiper-slide > div > .flex.text-sm {
            margin-top: auto;
            padding-top: 12px;
        }

        @media (max-width: 767px) {
            .service-card {
                min-height: 0 !important;
            }

            .testimonial-swiper .swiper-slide > div {
                min-height: 0;
            }
        }
    </style>


    {{-- =========================================================
         TEAM PHOTO + SWIPER UX ENHANCEMENT
         UI/visual only: no database/controller/API logic changed.
         ========================================================= --}}
    <style>
        /* Semua slider memiliki area nyaman untuk drag/swipe */
        .hero-swiper,
        .services-swiper,
        .team-swiper,
        .testimonial-swiper,
        .clients-swiper {
            cursor: grab;
            touch-action: pan-y;
        }

        .hero-swiper:active,
        .services-swiper:active,
        .team-swiper:active,
        .testimonial-swiper:active,
        .clients-swiper:active {
            cursor: grabbing;
        }

        /* TEAM: setiap kartu memenuhi lebar slide */
        .team-swiper .swiper-slide {
            height: auto !important;
            display: flex !important;
            align-items: stretch !important;
        }

        .team-swiper .swiper-slide > div {
            width: 100% !important;
            height: 100% !important;
            min-height: 440px;
            overflow: hidden;
            border-radius: 24px !important;
        }

        /* Foto mentor dibuat seragam, portrait, besar dan tidak gepeng */
        .team-swiper .swiper-slide img {
            display: block;
            width: 100% !important;
            height: 440px !important;
            min-height: 440px !important;
            max-height: 440px !important;
            object-fit: cover !important;
            object-position: center top !important;
        }

        .team-swiper .swiper-slide > div > .absolute {
            width: 100%;
        }

        /* Pagination diberi ruang agar tidak menimpa isi card */
        .services-swiper,
        .team-swiper,
        .testimonial-swiper,
        .clients-swiper {
            padding-bottom: 48px !important;
        }

        .services-swiper .swiper-pagination,
        .team-swiper .swiper-pagination,
        .testimonial-swiper .swiper-pagination,
        .clients-swiper .swiper-pagination {
            bottom: 6px !important;
        }

        /* Dot lebih mudah terlihat dan diklik */
        .services-swiper .swiper-pagination-bullet,
        .team-swiper .swiper-pagination-bullet,
        .testimonial-swiper .swiper-pagination-bullet,
        .clients-swiper .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            transition: width .25s ease, background-color .25s ease;
        }

        .services-swiper .swiper-pagination-bullet-active,
        .team-swiper .swiper-pagination-bullet-active,
        .testimonial-swiper .swiper-pagination-bullet-active,
        .clients-swiper .swiper-pagination-bullet-active {
            width: 26px !important;
        }

        @media (max-width: 1199px) {
            .team-swiper .swiper-slide > div {
                min-height: 420px;
            }

            .team-swiper .swiper-slide img {
                height: 420px !important;
                min-height: 420px !important;
                max-height: 420px !important;
            }
        }

        @media (max-width: 767px) {
            .team-swiper .swiper-slide > div {
                min-height: 460px;
            }

            .team-swiper .swiper-slide img {
                height: 460px !important;
                min-height: 460px !important;
                max-height: 460px !important;
            }
        }
    </style>


    {{-- HERO ARROW REMOVAL - UI ONLY --}}
    <style>
        .hero-swiper .swiper-button-next,
        .hero-swiper .swiper-button-prev {
            display: none !important;
        }
    </style>


    {{-- =========================================================
         CLIENT LOGO COLOR + SERVICE ICON FIX
         UI VIEW ONLY — database/controller/API tidak diubah.
         ========================================================= --}}
    <style>
        .clients-swiper .client-logo,
        .clients-swiper .client-logo:hover {
            filter: none !important;
            -webkit-filter: none !important;
            opacity: 1 !important;
            mix-blend-mode: normal !important;
        }

        .service-icon {
            color: #ffffff !important;
        }

        .service-icon i {
            display: inline-block !important;
            color: #ffffff !important;
            opacity: 1 !important;
            visibility: visible !important;
            font-style: normal;
        }
    </style>

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
                <div class="swiper-wrapper">
                    @foreach ($services as $service)
                        <div class="swiper-slide pb-10"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">

                            <div class="service-card group bg-white p-8 rounded-3xl text-center border border-gray-100 hover:border-[#005792]/20 shadow-sm hover:shadow-2xl transition-all duration-300 h-full">
                                <a href="{{ route('services.show', $service, false) }}" class="block">

                                    @php
                                        /*
                                         * Tampilan icon saja.
                                         * Database lama berisi beberapa nama icon Font Awesome 6,
                                         * sedangkan halaman ini memakai Font Awesome 5.15.3.
                                         * Mapping berikut membuat semua icon tetap tampil tanpa
                                         * mengubah isi database.
                                         */
                                        $iconMap = [
                                            'chart-line' => 'chart-line',
                                            'people-group' => 'users',
                                            'person-arrow-up-from-line' => 'user-graduate',
                                            'business-time' => 'briefcase',
                                            'store' => 'store',
                                            'calendar-days' => 'calendar-alt',
                                        ];

                                        $serviceIcon = $iconMap[$service->icon] ?? null;

                                        if (!$serviceIcon) {
                                            $serviceName = strtolower($service->name ?? '');

                                            if (str_contains($serviceName, 'financial')) {
                                                $serviceIcon = 'chart-line';
                                            } elseif (str_contains($serviceName, 'human capital')) {
                                                $serviceIcon = 'users';
                                            } elseif (str_contains($serviceName, 'edu')) {
                                                $serviceIcon = 'graduation-cap';
                                            } elseif (str_contains($serviceName, 'affiliate')) {
                                                $serviceIcon = 'briefcase';
                                            } elseif (str_contains($serviceName, 'branding') || str_contains($serviceName, 'marketing')) {
                                                $serviceIcon = 'bullhorn';
                                            } elseif (str_contains($serviceName, 'event')) {
                                                $serviceIcon = 'calendar-alt';
                                            } elseif (str_contains($serviceName, 'improvement')) {
                                                $serviceIcon = 'chart-bar';
                                            } elseif (str_contains($serviceName, 'management')) {
                                                $serviceIcon = 'tasks';
                                            } else {
                                                $serviceIcon = 'briefcase';
                                            }
                                        }
                                    @endphp

                                    <div class="service-icon w-20 h-20 mx-auto mb-6 bg-[#00294B] rounded-2xl flex items-center justify-center shadow-lg group-hover:bg-[#005792] transition-all duration-300">
                                        <i class="fas fa-{{ $serviceIcon }} text-3xl text-white" aria-hidden="true"></i>
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
                                ? route('events.show', $item, false)
                                : route('articles.show', $item, false) }}"
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

                    <a href="{{ route('services', [], false) }}"
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
                    $stats = setting('stats') ?? [];

                    if (is_string($stats)) {
                        $stats = json_decode($stats, true) ?? [];
                    }

                    if (empty($stats)) {
                        $stats = [
                            ['value' => 750, 'label' => 'Peserta Kegiatan', 'duration' => 1],
                            ['value' => 122, 'label' => 'Philanthropy Affiliate', 'duration' => 30],
                            ['value' => 30, 'label' => 'Successful Event and Training', 'duration' => 100],
                            ['value' => 120, 'label' => 'Asal Universitas, Sekolah, dan Lembaga', 'duration' => 50],
                        ];
                    }
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
                <div class="swiper-wrapper">
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

                <!-- Navigasi Team -->
                <button type="button"
                        class="team-button-prev absolute left-3 top-1/2 -translate-y-1/2 z-20
                               w-11 h-11 rounded-full bg-white text-[#00294B]
                               shadow-lg border border-gray-100
                               flex items-center justify-center
                               hover:bg-[#00294B] hover:text-white
                               transition duration-300"
                        aria-label="Tim sebelumnya">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button type="button"
                        class="team-button-next absolute right-3 top-1/2 -translate-y-1/2 z-20
                               w-11 h-11 rounded-full bg-white text-[#00294B]
                               shadow-lg border border-gray-100
                               flex items-center justify-center
                               hover:bg-[#00294B] hover:text-white
                               transition duration-300"
                        aria-label="Tim berikutnya">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </button>
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
                <div class="swiper-wrapper">

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
                <div class="swiper-wrapper">

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

            <a href="{{ route('contact', [], false) }}"
               class="inline-flex items-center bg-white text-[#00294B] px-8 py-3.5 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 hover:-translate-y-1 transition duration-300">
                Contact Us Today
                <span class="ml-2">→</span>
            </a>

        </div>
    </section>
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

                // Bisa di-drag dengan mouse/touchpad dan di-swipe pada layar sentuh
                simulateTouch: true,
                allowTouchMove: true,
                grabCursor: true,
                resistanceRatio: 0.85,
                watchOverflow: true,

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },

                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },

                // Mendukung gesture scroll horizontal pada touchpad/mouse.
                mousewheel: {
                    forceToAxis: true,
                    sensitivity: 1,
                    releaseOnEdges: true
                }
            };

            new Swiper('.hero-swiper', {
                ...commonConfig
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
                spaceBetween: 24,
                navigation: {
                    nextEl: '.team-button-next',
                    prevEl: '.team-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    900: {
                        slidesPerView: 3
                    },
                    1280: {
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
