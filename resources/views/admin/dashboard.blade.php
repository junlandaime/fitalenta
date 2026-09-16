@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard')

@section('content')

<div class="space-y-7">

    {{-- HERO / WELCOME --}}
    <section class="relative overflow-hidden rounded-[28px] bg-[#00294B] text-white shadow-xl shadow-slate-900/10">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -right-16 -top-20 w-72 h-72 rounded-full bg-blue-500/20 blur-3xl"></div>
            <div class="absolute right-40 bottom-[-80px] w-56 h-56 rounded-full bg-[#F15A24]/20 blur-3xl"></div>
        </div>

        <div class="relative z-10 p-6 sm:p-8 lg:p-9">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-7">

                <div class="max-w-2xl">

                    <div class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/10 px-3 py-1.5 mb-5">
                        <span class="w-2 h-2 rounded-full bg-[#F15A24]"></span>

                        <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-orange-200">
                            Fitalenta Admin Panel
                        </span>
                    </div>

                    <h1 class="text-2xl sm:text-3xl lg:text-[34px] font-extrabold leading-tight tracking-tight">
                        Selamat Datang,
                        <span class="text-orange-300">
                            {{ Auth::user()->name }}
                        </span>
                    </h1>

                    <p class="mt-3 text-sm sm:text-base leading-7 text-slate-300 max-w-xl">
                        Kelola konten website, agenda, layanan, mitra, lowongan kerja,
                        dan informasi FITALENTA dari satu dashboard.
                    </p>

                </div>

                <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-3">

                    <a href="{{ route('admin.articles.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-5 py-3 text-xs font-bold text-white shadow-lg shadow-orange-950/20 hover:bg-[#da4c1c] transition-all">

                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>

                        Tulis Artikel
                    </a>

                    <a href="{{ route('admin.events.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/10 px-5 py-3 text-xs font-bold text-white hover:bg-white/20 transition-all">

                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        Buat Event
                    </a>

                </div>

            </div>

        </div>
    </section>


    {{-- SECTION TITLE --}}
    <div class="flex items-center justify-between">

        <div>
            <p class="text-[11px] uppercase tracking-[0.18em] font-bold text-[#F15A24]">
                Ringkasan
            </p>

            <h2 class="mt-1 text-xl font-extrabold text-[#00294B]">
                Statistik Website
            </h2>
        </div>

        <p class="hidden sm:block text-xs text-slate-400">
            Data konten FITALENTA
        </p>

    </div>


    {{-- STATISTIC CARDS --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">

        {{-- ARTICLES --}}
        <a href="{{ route('admin.articles.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-blue-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Total Artikel
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalArticles) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13V7m0 13h2a2 2 0 002-2V9a2 2 0 00-2-2h-2" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-blue-600">
                Kelola Artikel
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- EVENTS --}}
        <a href="{{ route('admin.events.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-emerald-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Agenda & Event
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalEvents) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-emerald-600">
                Kelola Event
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- SERVICES --}}
        <a href="{{ route('admin.services.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-orange-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Layanan
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalServices) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-orange-50 text-[#F15A24] flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-[#F15A24]">
                Kelola Layanan
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- TESTIMONIALS --}}
        <a href="{{ route('admin.testimonials.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-rose-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Testimoni
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalTestimonials) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-rose-50 text-rose-500 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-rose-500">
                Kelola Testimoni
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- JOBS --}}
        <a href="{{ route('admin.jobs.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-indigo-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Lowongan Kerja
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalJobs) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4H8v2M5 20h14a2 2 0 002-2V8H3v10a2 2 0 002 2z" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-indigo-600">
                Kelola Lowongan
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- COMPANIES --}}
        <a href="{{ route('admin.companies.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-purple-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Perusahaan Mitra
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalCompanies) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2M5 21H3m6-14h1m4 0h1M9 11h1m4 0h1" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-purple-600">
                Kelola Perusahaan
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- CAMPUS --}}
        <a href="{{ route('admin.university-partners.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-cyan-200 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Mitra Kampus
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalUniversityPartners) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5S19.832 5.477 21 6.253v13" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-cyan-600">
                Kelola Mitra Kampus
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>


        {{-- USERS --}}
        <a href="{{ route('admin.users.index') }}"
            class="group rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-lg hover:border-slate-300 hover:-translate-y-0.5 transition-all">

            <div class="flex items-start justify-between">

                <div>
                    <p class="text-xs font-semibold text-slate-500">
                        Pengguna Sistem
                    </p>

                    <p class="mt-2 text-3xl font-extrabold text-[#00294B]">
                        {{ number_format($totalUsers) }}
                    </p>
                </div>

                <div class="w-11 h-11 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-4-4M9 20H3v-2a6 6 0 0112 0v2H9zm3-10a4 4 0 100-8 4 4 0 000 8z" />
                    </svg>
                </div>

            </div>

            <div class="mt-5 flex items-center text-[11px] font-semibold text-slate-600">
                Kelola Pengguna
                <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
            </div>

        </a>

    </div>


    {{-- QUICK ACTION --}}
    <section class="rounded-[24px] bg-white border border-slate-200 shadow-sm overflow-hidden">

        <div class="px-6 py-5 border-b border-slate-100">

            <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#F15A24]">
                Shortcut
            </p>

            <h2 class="mt-1 text-lg font-extrabold text-[#00294B]">
                Aksi Cepat
            </h2>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-100">

            <a href="{{ route('admin.articles.create') }}"
                class="group bg-white p-5 hover:bg-slate-50 transition">

                <div class="flex gap-4 items-center">

                    <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#00294B]">
                            Artikel Baru
                        </p>

                        <p class="text-[11px] text-slate-400 mt-1">
                            Tambah publikasi
                        </p>
                    </div>

                </div>

            </a>


            <a href="{{ route('admin.events.create') }}"
                class="group bg-white p-5 hover:bg-slate-50 transition">

                <div class="flex gap-4 items-center">

                    <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#00294B]">
                            Buat Event
                        </p>

                        <p class="text-[11px] text-slate-400 mt-1">
                            Jadwal kegiatan
                        </p>
                    </div>

                </div>

            </a>


            <a href="{{ route('admin.jobs.create') }}"
                class="group bg-white p-5 hover:bg-slate-50 transition">

                <div class="flex gap-4 items-center">

                    <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4H8v2M5 20h14a2 2 0 002-2V8H3v10a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#00294B]">
                            Post Lowongan
                        </p>

                        <p class="text-[11px] text-slate-400 mt-1">
                            Tambah pekerjaan
                        </p>
                    </div>

                </div>

            </a>


            <a href="{{ route('admin.settings.index') }}"
                class="group bg-white p-5 hover:bg-slate-50 transition">

                <div class="flex gap-4 items-center">

                    <div class="w-11 h-11 rounded-xl bg-orange-50 text-[#F15A24] flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15.5A3.5 3.5 0 1012 8a3.5 3.5 0 000 7.5zM19 12a7 7 0 01-.2 1.7l2 1.5-2 3.4-2.4-1a7 7 0 01-2.8 1.6L13.3 22h-4l-.3-2.8a7 7 0 01-2.8-1.6l-2.4 1-2-3.4 2-1.5A7 7 0 013.6 12a7 7 0 01.2-1.7l-2-1.5 2-3.4 2.4 1A7 7 0 019 4.8L9.3 2h4l.3 2.8a7 7 0 012.8 1.6l2.4-1 2 3.4-2 1.5A7 7 0 0119 12z" />
                        </svg>
                    </div>

                    <div>
                        <p class="text-sm font-bold text-[#00294B]">
                            Pengaturan
                        </p>

                        <p class="text-[11px] text-slate-400 mt-1">
                            Konfigurasi situs
                        </p>
                    </div>

                </div>

            </a>

        </div>

    </section>


    {{-- VISITOR STATISTICS --}}
    <section class="rounded-[24px] bg-white border border-slate-200 shadow-sm p-6">

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-5 border-b border-slate-100">

            <div>

                <div class="flex items-center gap-2">

                    <span class="relative flex w-2.5 h-2.5">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-60 animate-ping"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>

                    <h2 class="text-base font-extrabold text-[#00294B]">
                        Statistik Kunjungan Website
                    </h2>

                </div>

                <p class="mt-1 text-xs text-slate-400">
                    Data aktivitas pengunjung website FITALENTA
                </p>

            </div>

            <button
                onclick="displayStats()"
                type="button"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-xs font-semibold text-[#00294B] hover:bg-slate-50 transition">

                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4v5h5M20 20v-5h-5M5.6 15A7 7 0 0018 17M18.4 9A7 7 0 006 7" />
                </svg>

                Refresh Data
            </button>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-5">

            <div class="rounded-2xl bg-[#f8fafc] border border-slate-100 p-5">
                <p class="text-xs font-semibold text-slate-500">
                    Total Pengunjung Unik
                </p>

                <p id="total-visitors" class="mt-2 text-3xl font-extrabold text-[#00294B]">
                    <span class="inline-block w-8 h-7 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>


            <div class="rounded-2xl bg-[#f8fafc] border border-slate-100 p-5">
                <p class="text-xs font-semibold text-slate-500">
                    Total Kunjungan
                </p>

                <p id="total-visits" class="mt-2 text-3xl font-extrabold text-[#00294B]">
                    <span class="inline-block w-8 h-7 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>


            <div class="rounded-2xl bg-[#f8fafc] border border-slate-100 p-5">
                <p class="text-xs font-semibold text-slate-500">
                    Kunjungan Hari Ini
                </p>

                <p id="today-visits" class="mt-2 text-3xl font-extrabold text-emerald-600">
                    <span class="inline-block w-8 h-7 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>

        </div>

    </section>


    {{-- RECENT CONTENT --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

        {{-- ARTICLES --}}
        <section class="rounded-[24px] bg-white border border-slate-200 shadow-sm overflow-hidden">

            <div class="flex items-center justify-between p-5 border-b border-slate-100">

                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-blue-600">
                        Content
                    </p>

                    <h2 class="mt-1 text-base font-extrabold text-[#00294B]">
                        Artikel Terbaru
                    </h2>
                </div>

                <a href="{{ route('admin.articles.index') }}"
                    class="text-xs font-semibold text-[#00294B] hover:text-[#F15A24] transition">
                    Lihat Semua →
                </a>

            </div>

            <div class="divide-y divide-slate-100">

                @forelse ($recentArticles as $article)

                    <div class="p-4 hover:bg-slate-50 transition">

                        <div class="flex items-center justify-between gap-4">

                            <div class="min-w-0">

                                <a href="{{ route('admin.articles.edit', $article) }}"
                                    class="text-sm font-bold text-slate-800 hover:text-[#F15A24] transition line-clamp-1">

                                    {{ $article->title }}

                                </a>

                                <div class="mt-1 flex items-center gap-2 text-[11px] text-slate-400">
                                    <span>{{ $article->author->name ?? 'Admin' }}</span>
                                    <span>•</span>
                                    <span>{{ $article->created_at->diffForHumans() }}</span>
                                </div>

                            </div>

                            <a href="{{ route('admin.articles.edit', $article) }}"
                                class="flex-shrink-0 rounded-lg bg-slate-100 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-[#00294B] hover:text-white transition">

                                Edit

                            </a>

                        </div>

                    </div>

                @empty

                    <div class="p-10 text-center text-sm text-slate-400">
                        Belum ada artikel.
                    </div>

                @endforelse

            </div>

            <div class="p-4 bg-slate-50 border-t border-slate-100">

                <a href="{{ route('admin.articles.create') }}"
                    class="text-xs font-bold text-[#F15A24] hover:underline">
                    + Buat Artikel Baru
                </a>

            </div>

        </section>


        {{-- EVENTS --}}
        <section class="rounded-[24px] bg-white border border-slate-200 shadow-sm overflow-hidden">

            <div class="flex items-center justify-between p-5 border-b border-slate-100">

                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-emerald-600">
                        Agenda
                    </p>

                    <h2 class="mt-1 text-base font-extrabold text-[#00294B]">
                        Event Mendatang
                    </h2>
                </div>

                <a href="{{ route('admin.events.index') }}"
                    class="text-xs font-semibold text-[#00294B] hover:text-[#F15A24] transition">
                    Lihat Semua →
                </a>

            </div>

            <div class="divide-y divide-slate-100">

                @forelse ($upcomingEvents as $event)

                    <div class="p-4 hover:bg-slate-50 transition">

                        <div class="flex items-center justify-between gap-4">

                            <div class="min-w-0">

                                <a href="{{ route('admin.events.edit', $event) }}"
                                    class="text-sm font-bold text-slate-800 hover:text-[#F15A24] transition line-clamp-1">

                                    {{ $event->title }}

                                </a>

                                <div class="mt-1 flex items-center gap-2 text-[11px] text-slate-400">

                                    <span class="font-semibold text-emerald-600">
                                        {{ $event->event_date ? $event->event_date->format('d M Y') : '-' }}
                                    </span>

                                    <span>•</span>

                                    <span>
                                        {{ $event->location ?? 'Online / Lokasi' }}
                                    </span>

                                </div>

                            </div>

                            <a href="{{ route('admin.events.edit', $event) }}"
                                class="flex-shrink-0 rounded-lg bg-slate-100 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-[#00294B] hover:text-white transition">

                                Detail

                            </a>

                        </div>

                    </div>

                @empty

                    <div class="p-10 text-center">

                        <div class="mx-auto mb-3 w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">

                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>

                        </div>

                        <p class="text-xs text-slate-400">
                            Belum ada event mendatang.
                        </p>

                    </div>

                @endforelse

            </div>

            <div class="p-4 bg-slate-50 border-t border-slate-100">

                <a href="{{ route('admin.events.create') }}"
                    class="text-xs font-bold text-[#F15A24] hover:underline">
                    + Jadwalkan Event Baru
                </a>

            </div>

        </section>

    </div>

</div>

@endsection


@push('scripts')

<script>
    function displayStats() {
        const totalVisitorsEl = document.getElementById('total-visitors');
        const totalVisitsEl = document.getElementById('total-visits');
        const todayVisitsEl = document.getElementById('today-visits');

        fetch('/api/visitor-stats')
            .then(response => response.json())
            .then(data => {
                if (totalVisitorsEl) {
                    totalVisitorsEl.textContent =
                        Number(data.total_visitors || 0).toLocaleString();
                }

                if (totalVisitsEl) {
                    totalVisitsEl.textContent =
                        Number(data.total_visits || 0).toLocaleString();
                }

                if (todayVisitsEl) {
                    todayVisitsEl.textContent =
                        Number(data.today_visits || 0).toLocaleString();
                }
            })
            .catch(error => {
                console.error('Error fetching visitor stats:', error);

                if (totalVisitorsEl) totalVisitorsEl.textContent = '-';
                if (totalVisitsEl) totalVisitsEl.textContent = '-';
                if (todayVisitsEl) todayVisitsEl.textContent = '-';
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        displayStats();
    });
</script>

@endpush
