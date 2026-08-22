@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header_title', 'Dashboard Ringkasan')

@section('content')
<div class="space-y-8">
    <!-- Welcome Banner -->
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-primary to-[#004177] p-6 sm:p-8 text-white shadow-lg">
        <div class="absolute -right-10 -bottom-10 w-48 h-48 rounded-full bg-white/5 blur-2xl pointer-events-none"></div>
        <div class="absolute right-20 -top-10 w-40 h-40 rounded-full bg-secondary/20 blur-xl pointer-events-none"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 text-orange-300 text-xs font-semibold uppercase tracking-wider mb-3">
                    <span class="w-2 h-2 rounded-full bg-orange-400 animate-pulse"></span>
                    <span>Admin Panel Fitalenta</span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                    Selamat Datang Kembali, {{ Auth::user()->name }}! 👋
                </h1>
                <p class="mt-1 text-slate-200 text-sm max-w-xl">
                    Kelola seluruh konten, publikasi artikel, jadwal event, mitra perusahaan, serta lowongan kerja Fitalenta dalam satu dasbor terpadu.
                </p>
            </div>
            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('admin.articles.create') }}"
                    class="inline-flex items-center px-4 py-2.5 rounded-xl bg-secondary text-white text-xs font-bold shadow-md shadow-secondary/30 hover:bg-orange-600 transition-all space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Tulis Artikel Baru</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Action Shortcut Cards -->
    <div>
        <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-3 flex items-center space-x-2">
            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            <span>Aksi Cepat</span>
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-3.5">
            <a href="{{ route('admin.articles.create') }}"
                class="flex items-center p-3.5 bg-white rounded-xl border border-slate-200 shadow-xs hover:shadow-md hover:border-primary/40 hover:-translate-y-0.5 transition-all group">
                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center mr-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-slate-800 block group-hover:text-primary transition-colors">Tambah Artikel</span>
                    <span class="text-[11px] text-slate-400">Publikasi berita baru</span>
                </div>
            </a>

            <a href="{{ route('admin.events.create') }}"
                class="flex items-center p-3.5 bg-white rounded-xl border border-slate-200 shadow-xs hover:shadow-md hover:border-primary/40 hover:-translate-y-0.5 transition-all group">
                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center mr-3 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-slate-800 block group-hover:text-primary transition-colors">Buat Agenda Event</span>
                    <span class="text-[11px] text-slate-400">Jadwalkan kegiatan</span>
                </div>
            </a>

            <a href="{{ route('admin.jobs.create') }}"
                class="flex items-center p-3.5 bg-white rounded-xl border border-slate-200 shadow-xs hover:shadow-md hover:border-primary/40 hover:-translate-y-0.5 transition-all group">
                <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center mr-3 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-slate-800 block group-hover:text-primary transition-colors">Post Lowongan</span>
                    <span class="text-[11px] text-slate-400">Tambah lowongan kerja</span>
                </div>
            </a>

            <a href="{{ route('admin.settings.index') }}"
                class="flex items-center p-3.5 bg-white rounded-xl border border-slate-200 shadow-xs hover:shadow-md hover:border-primary/40 hover:-translate-y-0.5 transition-all group">
                <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mr-3 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-slate-800 block group-hover:text-primary transition-colors">Pengaturan</span>
                    <span class="text-[11px] text-slate-400">Kontak, sosial, stats</span>
                </div>
            </a>
        </div>
    </div>

    <!-- Main Statistics Grid -->
    <div>
        <div class="flex items-center justify-between mb-3">
            <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 flex items-center space-x-2">
                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span>Statistik & Metrik Konten</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Total Articles -->
            <a href="{{ route('admin.articles.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-blue-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Total Artikel</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalArticles) }}</p>
                    <span class="text-[11px] text-blue-600 font-medium group-hover:underline">Kelola artikel &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
            </a>

            <!-- Total Events -->
            <a href="{{ route('admin.events.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-emerald-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Agenda & Event</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalEvents) }}</p>
                    <span class="text-[11px] text-emerald-600 font-medium group-hover:underline">Lihat agenda &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </a>

            <!-- Total Jobs -->
            <a href="{{ route('admin.jobs.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-indigo-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Lowongan Kerja</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalJobs) }}</p>
                    <span class="text-[11px] text-indigo-600 font-medium group-hover:underline">Kelola lowongan &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </a>

            <!-- Total Companies -->
            <a href="{{ route('admin.companies.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-purple-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Perusahaan Mitra</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalCompanies) }}</p>
                    <span class="text-[11px] text-purple-600 font-medium group-hover:underline">Kelola perusahaan &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
            </a>

            <!-- Total University Partners -->
            <a href="{{ route('admin.university-partners.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-cyan-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Mitra Kampus</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalUniversityPartners) }}</p>
                    <span class="text-[11px] text-cyan-600 font-medium group-hover:underline">Daftar kampus &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </a>

            <!-- Total Services -->
            <a href="{{ route('admin.services.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-amber-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Layanan Bisnis</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalServices) }}</p>
                    <span class="text-[11px] text-amber-600 font-medium group-hover:underline">Kelola layanan &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
            </a>

            <!-- Total Testimonials -->
            <a href="{{ route('admin.testimonials.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-rose-300 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Testimoni</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalTestimonials) }}</p>
                    <span class="text-[11px] text-rose-600 font-medium group-hover:underline">Lihat testimoni &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
            </a>

            <!-- Total Users -->
            <a href="{{ route('admin.users.index') }}"
                class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs hover:shadow-md hover:border-slate-400 transition-all flex items-center justify-between group">
                <div>
                    <p class="text-xs font-semibold text-slate-500">Pengguna Sistem</p>
                    <p class="text-2xl font-extrabold text-slate-800 mt-1">{{ number_format($totalUsers) }}</p>
                    <span class="text-[11px] text-slate-600 font-medium group-hover:underline">Kelola user &rarr;</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <!-- Live Website Visitor Statistics -->
    <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 mb-4 border-b border-slate-100 gap-2">
            <div>
                <h3 class="text-base font-bold text-slate-800 flex items-center space-x-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping"></span>
                    <span>Statistik Kunjungan Website</span>
                </h3>
                <p class="text-xs text-slate-500">Data analitik real-time pengunjung publik Fitalenta</p>
            </div>
            <button onclick="displayStats()" type="button" class="text-xs text-primary font-semibold hover:underline self-start sm:self-auto flex items-center space-x-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                <span>Refresh Data</span>
            </button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                <p class="text-xs text-slate-500 font-medium">Total Pengunjung Unik</p>
                <p id="total-visitors" class="text-2xl font-extrabold text-slate-800 mt-1">
                    <span class="inline-block w-8 h-6 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                <p class="text-xs text-slate-500 font-medium">Total Kunjungan (Hits)</p>
                <p id="total-visits" class="text-2xl font-extrabold text-slate-800 mt-1">
                    <span class="inline-block w-8 h-6 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>
            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                <p class="text-xs text-slate-500 font-medium">Kunjungan Hari Ini</p>
                <p id="today-visits" class="text-2xl font-extrabold text-emerald-600 mt-1">
                    <span class="inline-block w-8 h-6 bg-slate-200 rounded animate-pulse"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Recent Feeds Split Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Articles -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <div class="flex items-center space-x-2.5">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800">Artikel Terbaru</h3>
                        <p class="text-xs text-slate-500">Publikasi postingan terbaru</p>
                    </div>
                </div>
                <a href="{{ route('admin.articles.index') }}" class="text-xs font-semibold text-primary hover:underline">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="p-4 divide-y divide-slate-100">
                @forelse ($recentArticles as $article)
                    <div class="py-3 flex items-center justify-between hover:bg-slate-50 px-2 rounded-lg transition-colors group">
                        <div class="min-w-0 pr-4">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="text-xs font-bold text-slate-800 hover:text-primary transition-colors truncate block">
                                {{ $article->title }}
                            </a>
                            <div class="flex items-center space-x-2 text-[11px] text-slate-400 mt-0.5">
                                <span>Oleh {{ $article->author->name ?? 'Admin' }}</span>
                                <span>&bull;</span>
                                <span>{{ $article->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <a href="{{ route('admin.articles.edit', $article) }}"
                            class="text-xs px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 hover:bg-primary hover:text-white font-medium transition-all flex-shrink-0">
                            Edit
                        </a>
                    </div>
                @empty
                    <div class="py-8 text-center text-slate-400 text-xs">
                        Belum ada artikel yang dipublikasikan.
                    </div>
                @endforelse
            </div>

            <div class="p-3 bg-slate-50 border-t border-slate-100 text-center">
                <a href="{{ route('admin.articles.create') }}" class="text-xs font-semibold text-primary hover:underline">
                    + Buat Artikel Baru
                </a>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <div class="flex items-center space-x-2.5">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800">Agenda & Event Mendatang</h3>
                        <p class="text-xs text-slate-500">Jadwal kegiatan terdekat</p>
                    </div>
                </div>
                <a href="{{ route('admin.events.index') }}" class="text-xs font-semibold text-primary hover:underline">
                    Lihat Semua &rarr;
                </a>
            </div>

            <div class="p-4 divide-y divide-slate-100">
                @forelse ($upcomingEvents as $event)
                    <div class="py-3 flex items-center justify-between hover:bg-slate-50 px-2 rounded-lg transition-colors">
                        <div class="min-w-0 pr-4">
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-xs font-bold text-slate-800 hover:text-primary transition-colors truncate block">
                                {{ $event->title }}
                            </a>
                            <div class="flex items-center space-x-2 text-[11px] text-slate-400 mt-0.5">
                                <span class="text-emerald-600 font-semibold">{{ $event->event_date ? $event->event_date->format('d M Y') : '-' }}</span>
                                <span>&bull;</span>
                                <span>{{ $event->location ?? 'Online / Lokasi' }}</span>
                            </div>
                        </div>
                        <a href="{{ route('admin.events.edit', $event) }}"
                            class="text-xs px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 hover:bg-primary hover:text-white font-medium transition-all flex-shrink-0">
                            Detail
                        </a>
                    </div>
                @empty
                    <div class="py-8 text-center text-slate-400 text-xs">
                        Tidak ada agenda event mendatang yang dijadwalkan.
                    </div>
                @endforelse
            </div>

            <div class="p-3 bg-slate-50 border-t border-slate-100 text-center">
                <a href="{{ route('admin.events.create') }}" class="text-xs font-semibold text-primary hover:underline">
                    + Jadwalkan Event Baru
                </a>
            </div>
        </div>
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
                if (totalVisitorsEl) totalVisitorsEl.textContent = Number(data.total_visitors || 0).toLocaleString();
                if (totalVisitsEl) totalVisitsEl.textContent = Number(data.total_visits || 0).toLocaleString();
                if (todayVisitsEl) todayVisitsEl.textContent = Number(data.today_visits || 0).toLocaleString();
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
