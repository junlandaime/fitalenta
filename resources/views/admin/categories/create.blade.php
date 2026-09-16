@extends('layouts.admin')

@section('title', 'Tambah Kategori')
@section('header_title', 'Tambah Kategori')

@section('content')

<div class="space-y-6">

    {{-- PAGE HEADER --}}
    <section class="rounded-2xl bg-white border border-slate-200 shadow-sm p-5 sm:p-6">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

            <div>

                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 rounded-full bg-[#F15A24]"></span>

                    <span class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#F15A24]">
                        Content Management
                    </span>
                </div>

                <h2 class="text-2xl font-extrabold text-[#00294B]">
                    Tambah Kategori Baru
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Tambahkan kategori utama atau sub-kategori untuk konten FITALENTA.
                </p>

            </div>


            <a
                href="{{ route('admin.categories.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-xs font-bold text-[#00294B] hover:bg-slate-50 transition">

                <svg
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7" />

                </svg>

                Kembali

            </a>

        </div>

    </section>


    {{-- ERROR MESSAGE --}}
    @if ($errors->any())

        <section class="rounded-2xl border border-rose-200 bg-rose-50 p-4">

            <div class="flex items-start gap-3">

                <div
                    class="w-9 h-9 flex-shrink-0 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center">

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.667 1.73-3L13.73 4c-.77-1.333-2.69-1.333-3.46 0L3.34 16c-.77 1.333.19 3 1.73 3z" />

                    </svg>

                </div>


                <div>

                    <p class="text-xs font-extrabold text-rose-700">
                        Data belum dapat disimpan
                    </p>

                    <ul class="mt-1 space-y-1">

                        @foreach ($errors->all() as $error)

                            <li class="text-[11px] text-rose-600">
                                • {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </section>

    @endif


    {{-- FORM --}}
    <form
        method="POST"
        action="{{ route('admin.categories.store') }}"
        enctype="multipart/form-data"
        class="space-y-6">

        @csrf


        {{-- FORM CARD --}}
        <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

            {{-- HEADER --}}
            <div class="px-5 sm:px-6 py-4 border-b border-slate-100">

                <h3 class="text-sm font-extrabold text-[#00294B]">
                    Informasi Kategori
                </h3>

                <p class="mt-0.5 text-[11px] text-slate-400">
                    Isi nama kategori dan tentukan apakah kategori ini merupakan kategori utama atau sub-kategori.
                </p>

            </div>


            <div class="p-5 sm:p-6 space-y-6">

                {{-- CATEGORY NAME --}}
                <div>

                    <label
                        for="name"
                        class="block mb-2 text-xs font-bold text-slate-700">

                        Nama Kategori
                        <span class="text-rose-500">*</span>

                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Contoh: Berita, Event, Karier..."
                        class="block w-full h-12 rounded-xl border bg-white px-4 text-sm text-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-[#00294B]/10
                        @error('name')
                            border-rose-400 focus:border-rose-400
                        @else
                            border-slate-200 focus:border-[#00294B]
                        @enderror">

                    @error('name')

                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- PARENT CATEGORY --}}
                <div>

                    <label
                        for="parent_id"
                        class="block mb-2 text-xs font-bold text-slate-700">

                        Kategori Induk

                    </label>


                    <div class="relative">

                        <select
                            name="parent_id"
                            id="parent_id"
                            class="block w-full h-12 appearance-none rounded-xl border border-slate-200 bg-white pl-4 pr-10 text-sm text-slate-700 focus:border-[#00294B] focus:ring-2 focus:ring-[#00294B]/10">

                            <option value="">
                                Tidak Ada — Jadikan Kategori Utama
                            </option>


                            @forelse ($parent as $row)

                                <option
                                    value="{{ $row->id }}"
                                    {{ old('parent_id') == $row->id ? 'selected' : '' }}>

                                    {{ $row->name }}

                                </option>

                            @empty

                            @endforelse

                        </select>


                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 9l-7 7-7-7" />

                            </svg>

                        </div>

                    </div>


                    <p class="mt-2 text-[10px] text-slate-400">
                        Biarkan kosong jika ingin membuat kategori utama. Pilih kategori jika ingin membuat sub-kategori.
                    </p>


                    @error('parent_id')

                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- INFORMATION --}}
                <div class="rounded-xl border border-blue-100 bg-blue-50/60 p-4">

                    <div class="flex items-start gap-3">

                        <div
                            class="w-8 h-8 flex-shrink-0 rounded-lg bg-white text-[#00294B] flex items-center justify-center border border-blue-100">

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                        </div>


                        <div>

                            <p class="text-[11px] font-bold text-[#00294B]">
                                Tentang Struktur Kategori
                            </p>

                            <p class="mt-1 text-[10px] leading-relaxed text-slate-500">
                                Kategori utama dapat memiliki beberapa sub-kategori.
                                Gunakan sub-kategori jika ingin mengelompokkan konten secara lebih spesifik.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ACTION --}}
        <section class="rounded-2xl bg-white border border-slate-200 shadow-sm p-5">

            <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-end gap-3">

                <a
                    href="{{ route('admin.categories.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-xs font-bold text-slate-600 hover:bg-slate-50 transition">

                    Batal

                </a>


                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-6 py-3 text-xs font-bold text-white shadow-md shadow-orange-950/10 hover:bg-[#dc4e1d] transition">

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 13l4 4L19 7" />

                    </svg>

                    Simpan Kategori

                </button>

            </div>

        </section>

    </form>

</div>

@endsection
