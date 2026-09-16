@extends('layouts.admin')

@section('title', 'Manajemen Artikel')
@section('header_title', 'Manajemen Artikel')

@section('content')

<div class="space-y-6">

    {{-- HEADER + FILTER --}}
    <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

        <div class="p-5 sm:p-6">

            {{-- HEADER --}}
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 rounded-full bg-[#F15A24]"></span>

                        <span class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#F15A24]">
                            Content Management
                        </span>
                    </div>

                    <h2 class="text-2xl font-extrabold text-[#00294B]">
                        Daftar Artikel
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Kelola berita, tips, wawasan, dan konten yang dipublikasikan di website FITALENTA.
                    </p>
                </div>

                <a
                    href="{{ route('admin.articles.create') }}"
                    class="inline-flex flex-shrink-0 items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-5 py-3 text-xs font-bold text-white shadow-sm hover:bg-[#dc4e1d] transition">

                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4" />
                    </svg>

                    Tambah Artikel Baru
                </a>

            </div>


            {{-- FILTER --}}
            <div class="mt-6 pt-5 border-t border-slate-100">

                <form
                    action="{{ route('admin.articles.index') }}"
                    method="GET"
                    class="grid grid-cols-1 lg:grid-cols-12 gap-3">

                    {{-- SEARCH --}}
                    <div class="relative lg:col-span-6">

                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>

                        </div>

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari judul artikel..."
                            class="block w-full h-11 rounded-xl border border-slate-200 bg-white pl-10 pr-4 text-xs text-slate-700 placeholder:text-slate-400 focus:border-[#00294B] focus:ring-2 focus:ring-[#00294B]/10">

                    </div>


                    {{-- STATUS --}}
                    <div class="lg:col-span-3">

                        <select
                            name="status"
                            class="block w-full h-11 rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 focus:border-[#00294B] focus:ring-2 focus:ring-[#00294B]/10">

                            <option value="">
                                Semua Status
                            </option>

                            <option
                                value="published"
                                {{ request('status') == 'published' ? 'selected' : '' }}>
                                Published
                            </option>

                            <option
                                value="draft"
                                {{ request('status') == 'draft' ? 'selected' : '' }}>
                                Draft
                            </option>

                        </select>

                    </div>


                    {{-- FILTER BUTTON --}}
                    <div class="lg:col-span-2">

                        <button
                            type="submit"
                            class="w-full h-11 inline-flex items-center justify-center gap-2 rounded-xl bg-[#00294B] px-4 text-xs font-bold text-white hover:bg-[#001f39] transition">

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2l-7 7v5l-4 2v-7L3 6V4z" />
                            </svg>

                            Filter
                        </button>

                    </div>


                    {{-- RESET --}}
                    <div class="lg:col-span-1">

                        @if (request()->hasAny(['search', 'status']))

                            <a
                                href="{{ route('admin.articles.index') }}"
                                class="w-full h-11 inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-3 text-[11px] font-semibold text-slate-500 hover:bg-slate-100 hover:text-[#00294B] transition">

                                Reset
                            </a>

                        @endif

                    </div>

                </form>

            </div>

        </div>

    </section>


    {{-- DATA ARTIKEL --}}
    <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

        {{-- HEADER DATA --}}
        <div class="flex items-center justify-between px-5 py-4 border-b border-slate-100">

            <div>
                <h3 class="text-sm font-extrabold text-[#00294B]">
                    Data Artikel
                </h3>

                <p class="mt-0.5 text-[11px] text-slate-400">
                    Daftar konten artikel FITALENTA
                </p>
            </div>


            @if (!$articles->isEmpty())

                <div class="hidden sm:flex items-center gap-2">

                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>

                    <span class="text-[11px] font-medium text-slate-400">
                        {{ $articles->count() }} artikel ditampilkan
                    </span>

                </div>

            @endif

        </div>


        {{-- EMPTY STATE --}}
        @if ($articles->isEmpty())

            <div class="py-16 px-5 text-center">

                <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-100 text-slate-400 flex items-center justify-center">

                    <svg
                        class="w-8 h-8"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13V7m0 13h2a2 2 0 002-2V9a2 2 0 00-2-2h-2" />
                    </svg>

                </div>

                <h3 class="mt-4 text-sm font-extrabold text-[#00294B]">
                    Tidak ada artikel ditemukan
                </h3>

                <p class="mt-1 text-xs text-slate-400">
                    Coba gunakan kata kunci lain atau tambahkan artikel baru.
                </p>

                <a
                    href="{{ route('admin.articles.create') }}"
                    class="mt-5 inline-flex items-center justify-center rounded-xl bg-[#F15A24] px-4 py-2.5 text-xs font-bold text-white hover:bg-[#dc4e1d] transition">

                    + Tambah Artikel
                </a>

            </div>

        @else

            {{-- DESKTOP TABLE --}}
            <div class="hidden md:block w-full">

                <table class="w-full table-fixed text-left">

                    {{-- FIXED WIDTH --}}
                    <colgroup>
                        <col style="width: 38%">
                        <col style="width: 15%">
                        <col style="width: 8%">
                        <col style="width: 11%">
                        <col style="width: 12%">
                        <col style="width: 16%">
                    </colgroup>


                    <thead>

                        <tr class="bg-[#f8fafc] border-b border-slate-200">

                            <th class="px-4 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Artikel
                            </th>

                            <th class="px-3 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Penulis
                            </th>

                            <th class="px-2 py-3.5 text-center text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Views
                            </th>

                            <th class="px-2 py-3.5 text-center text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Status
                            </th>

                            <th class="px-3 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Tanggal
                            </th>

                            <th class="px-4 py-3.5 text-right text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @foreach ($articles as $article)

                            <tr class="hover:bg-slate-50/80 transition-colors">

                                {{-- ARTICLE --}}
                                <td class="px-4 py-4">

                                    <div class="min-w-0">

                                        <a
                                            href="{{ route('admin.articles.edit', $article) }}"
                                            title="{{ $article->title }}"
                                            class="block truncate text-xs font-bold text-slate-800 hover:text-[#F15A24] transition">

                                            {{ $article->title }}

                                        </a>


                                        @if ($article->category)

                                            <span
                                                class="inline-flex mt-1.5 max-w-full truncate rounded-lg bg-blue-50 px-2 py-1 text-[9px] font-semibold text-blue-600">

                                                {{ $article->category->name }}

                                            </span>

                                        @endif

                                    </div>

                                </td>


                                {{-- AUTHOR --}}
                                <td class="px-3 py-4">

                                    <div class="flex items-center gap-2 min-w-0">

                                        <div
                                            class="w-7 h-7 flex-shrink-0 rounded-lg bg-slate-100 text-[#00294B] flex items-center justify-center text-[9px] font-extrabold">

                                            {{ strtoupper(substr($article->author->name ?? 'A', 0, 1)) }}

                                        </div>

                                        <span class="truncate text-[11px] font-medium text-slate-600">

                                            {{ $article->author->name ?? 'Admin' }}

                                        </span>

                                    </div>

                                </td>


                                {{-- VIEWS --}}
                                <td class="px-2 py-4 text-center">

                                    <span class="text-[11px] font-semibold text-slate-500">
                                        {{ number_format($article->views ?? 0) }}
                                    </span>

                                </td>


                                {{-- STATUS --}}
                                <td class="px-2 py-4 text-center">

                                    @if ($article->event_date || $article->published_at)

                                        <span
                                            class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-1 text-[9px] font-bold text-emerald-700">

                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>

                                            Published

                                        </span>

                                    @else

                                        <span
                                            class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2 py-1 text-[9px] font-bold text-amber-700">

                                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>

                                            Draft

                                        </span>

                                    @endif

                                </td>


                                {{-- DATE --}}
                                <td class="px-3 py-4">

                                    <span class="text-[11px] text-slate-500 whitespace-nowrap">

                                        {{ $article->created_at ? $article->created_at->format('d M Y') : '-' }}

                                    </span>

                                </td>


                                {{-- ACTION --}}
                                <td class="px-4 py-4">

                                    <div class="flex items-center justify-end gap-1.5">

                                        <a
                                            href="{{ route('admin.articles.edit', $article) }}"
                                            class="inline-flex items-center justify-center gap-1 rounded-lg bg-blue-50 px-2.5 py-1.5 text-[10px] font-bold text-blue-600 hover:bg-blue-600 hover:text-white transition">

                                            <svg
                                                class="w-3 h-3"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M11 4H4a1 1 0 00-1 1v15a1 1 0 001 1h15a1 1 0 001-1v-7M18.5 2.5a2.1 2.1 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                            </svg>

                                            Edit

                                        </a>


                                        <form
                                            action="{{ route('admin.articles.destroy', $article) }}"
                                            method="POST"
                                            class="inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex items-center justify-center gap-1 rounded-lg bg-rose-50 px-2.5 py-1.5 text-[10px] font-bold text-rose-600 hover:bg-rose-600 hover:text-white transition">

                                                <svg
                                                    class="w-3 h-3"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor">

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M6 7h12m-9 0V5h6v2m-7 3v7m4-7v7m4-7v7M5 7l1 14h12l1-14" />
                                                </svg>

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


            {{-- MOBILE CARDS --}}
            <div class="md:hidden divide-y divide-slate-100">

                @foreach ($articles as $article)

                    <article class="p-4">

                        <div class="flex items-start justify-between gap-3">

                            <div class="min-w-0 flex-1">

                                <a
                                    href="{{ route('admin.articles.edit', $article) }}"
                                    class="block text-sm font-bold text-[#00294B]">

                                    {{ $article->title }}

                                </a>


                                @if ($article->category)

                                    <span
                                        class="inline-flex mt-2 rounded-lg bg-blue-50 px-2 py-1 text-[10px] font-semibold text-blue-600">

                                        {{ $article->category->name }}

                                    </span>

                                @endif

                            </div>


                            @if ($article->event_date || $article->published_at)

                                <span
                                    class="flex-shrink-0 rounded-full bg-emerald-50 px-2.5 py-1 text-[9px] font-bold text-emerald-700">

                                    Published

                                </span>

                            @else

                                <span
                                    class="flex-shrink-0 rounded-full bg-amber-50 px-2.5 py-1 text-[9px] font-bold text-amber-700">

                                    Draft

                                </span>

                            @endif

                        </div>


                        <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-[11px] text-slate-400">

                            <span>
                                {{ $article->author->name ?? 'Admin' }}
                            </span>

                            <span>
                                {{ number_format($article->views ?? 0) }} views
                            </span>

                            <span>
                                {{ $article->created_at ? $article->created_at->format('d M Y') : '-' }}
                            </span>

                        </div>


                        <div class="mt-4 grid grid-cols-2 gap-2">

                            <a
                                href="{{ route('admin.articles.edit', $article) }}"
                                class="rounded-xl bg-blue-50 px-3 py-2 text-center text-[11px] font-bold text-blue-600 hover:bg-blue-100 transition">

                                Edit

                            </a>


                            <form
                                action="{{ route('admin.articles.destroy', $article) }}"
                                method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full rounded-xl bg-rose-50 px-3 py-2 text-[11px] font-bold text-rose-600 hover:bg-rose-100 transition">

                                    Hapus

                                </button>

                            </form>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- PAGINATION --}}
            @if ($articles->hasPages())

                <div class="border-t border-slate-100 bg-slate-50/60 px-4 py-3">

                    {{ $articles->links() }}

                </div>

            @endif

        @endif

    </section>

</div>

@endsection
