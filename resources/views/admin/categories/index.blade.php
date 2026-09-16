@extends('layouts.admin')

@section('title', 'Manajemen Kategori')
@section('header_title', 'Manajemen Kategori')

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
                    Daftar Kategori
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Kelola kategori utama dan sub-kategori untuk artikel dan event FITALENTA.
                </p>

            </div>


            <a
                href="{{ route('admin.categories.create') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-5 py-3 text-xs font-bold text-white shadow-md shadow-orange-950/10 hover:bg-[#dc4e1d] transition">

                <svg
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 4v16m8-8H4" />

                </svg>

                Tambah Kategori Baru

            </a>

        </div>

    </section>


    {{-- DATA CARD --}}
    <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

        {{-- CARD HEADER --}}
        <div class="px-5 sm:px-6 py-4 border-b border-slate-100">

            <div class="flex items-center justify-between gap-4">

                <div>

                    <h3 class="text-sm font-extrabold text-[#00294B]">
                        Data Kategori
                    </h3>

                    <p class="mt-0.5 text-[11px] text-slate-400">
                        Kategori utama beserta sub-kategori yang tersedia.
                    </p>

                </div>


                @if (!$categories->isEmpty())

                    <div class="hidden sm:flex items-center gap-2">

                        <div
                            class="w-8 h-8 rounded-lg bg-[#00294B]/5 flex items-center justify-center text-[#00294B]">

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />

                            </svg>

                        </div>

                        <span class="text-[11px] font-semibold text-slate-500">
                            {{ $categories->count() }} kategori utama
                        </span>

                    </div>

                @endif

            </div>

        </div>


        @if ($categories->isEmpty())

            {{-- EMPTY STATE --}}
            <div class="py-16 px-5 text-center">

                <div
                    class="w-16 h-16 mx-auto rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-400">

                    <svg
                        class="w-7 h-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.7"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />

                    </svg>

                </div>

                <h3 class="mt-4 text-sm font-extrabold text-[#00294B]">
                    Belum Ada Kategori
                </h3>

                <p class="mt-1 text-xs text-slate-400">
                    Tambahkan kategori untuk mengelompokkan artikel dan event.
                </p>

                <a
                    href="{{ route('admin.categories.create') }}"
                    class="mt-5 inline-flex items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-5 py-2.5 text-xs font-bold text-white hover:bg-[#dc4e1d] transition">

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4" />

                    </svg>

                    Tambah Kategori

                </a>

            </div>

        @else

            {{-- DESKTOP TABLE --}}
            <div class="hidden md:block">

                <table class="w-full table-fixed text-left">

                    <colgroup>
                        <col class="w-[30%]">
                        <col class="w-[22%]">
                        <col class="w-[14%]">
                        <col class="w-[16%]">
                        <col class="w-[18%]">
                    </colgroup>


                    <thead>

                        <tr class="bg-slate-50 border-b border-slate-200">

                            <th class="px-5 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Nama Kategori
                            </th>

                            <th class="px-5 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Slug
                            </th>

                            <th class="px-3 py-3.5 text-center text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Sub-Kategori
                            </th>

                            <th class="px-4 py-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Dibuat
                            </th>

                            <th class="px-5 py-3.5 text-right text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @foreach ($categories as $category)

                            {{-- PARENT CATEGORY --}}
                            <tr class="bg-slate-50/50 hover:bg-slate-50 transition">

                                <td class="px-5 py-4">

                                    <div class="flex items-center gap-3 min-w-0">

                                        <div
                                            class="w-9 h-9 flex-shrink-0 rounded-xl bg-[#00294B] text-white flex items-center justify-center">

                                            <svg
                                                class="w-4 h-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M3 7a2 2 0 012-2h5l2 2h7a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />

                                            </svg>

                                        </div>


                                        <div class="min-w-0">

                                            <p class="text-xs font-extrabold text-[#00294B] truncate">
                                                {{ $category->name }}
                                            </p>

                                            <p class="mt-0.5 text-[10px] text-slate-400">
                                                Kategori utama
                                            </p>

                                        </div>

                                    </div>

                                </td>


                                <td class="px-5 py-4">

                                    <span
                                        class="inline-block max-w-full truncate rounded-lg bg-slate-100 px-2.5 py-1 text-[10px] font-mono text-slate-500">

                                        {{ $category->slug }}

                                    </span>

                                </td>


                                <td class="px-3 py-4 text-center">

                                    <span
                                        class="inline-flex items-center justify-center min-w-[30px] rounded-full bg-[#00294B]/10 px-2.5 py-1 text-[10px] font-bold text-[#00294B]">

                                        {{ $category->child->count() }}

                                    </span>

                                </td>


                                <td class="px-4 py-4">

                                    <p class="text-[11px] font-semibold text-slate-600">

                                        {{ $category->created_at
                                            ? $category->created_at->format('d M Y')
                                            : '-' }}

                                    </p>

                                </td>


                                <td class="px-5 py-4">

                                    <div class="flex items-center justify-end gap-2">

                                        <a
                                            href="{{ route('admin.categories.edit', $category->id) }}"
                                            class="inline-flex items-center justify-center rounded-lg bg-blue-50 px-3 py-1.5 text-[10px] font-bold text-blue-600 hover:bg-blue-600 hover:text-white transition">

                                            Edit

                                        </a>


                                        <form
                                            action="{{ route('admin.categories.destroy', $category->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex items-center justify-center rounded-lg bg-rose-50 px-3 py-1.5 text-[10px] font-bold text-rose-600 hover:bg-rose-600 hover:text-white transition">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>


                            {{-- CHILD CATEGORIES --}}
                            @foreach ($category->child as $child)

                                <tr class="hover:bg-slate-50/70 transition">

                                    <td class="px-5 py-3.5">

                                        <div class="flex items-center gap-3 pl-5 min-w-0">

                                            <div
                                                class="w-7 h-7 flex-shrink-0 rounded-lg bg-orange-50 text-[#F15A24] flex items-center justify-center">

                                                <svg
                                                    class="w-3.5 h-3.5"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor">

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5l7 7-7 7" />

                                                </svg>

                                            </div>


                                            <div class="min-w-0">

                                                <p class="text-[11px] font-bold text-slate-700 truncate">
                                                    {{ $child->name }}
                                                </p>

                                                <p class="mt-0.5 text-[10px] text-slate-400">
                                                    Sub-kategori
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <td class="px-5 py-3.5">

                                        <span
                                            class="inline-block max-w-full truncate rounded-lg bg-slate-50 px-2.5 py-1 text-[10px] font-mono text-slate-400">

                                            {{ $child->slug }}

                                        </span>

                                    </td>


                                    <td class="px-3 py-3.5 text-center">

                                        <span class="text-[11px] text-slate-300">
                                            —
                                        </span>

                                    </td>


                                    <td class="px-4 py-3.5">

                                        <p class="text-[11px] text-slate-400">

                                            {{ $child->created_at
                                                ? $child->created_at->format('d M Y')
                                                : '-' }}

                                        </p>

                                    </td>


                                    <td class="px-5 py-3.5">

                                        <div class="flex items-center justify-end gap-2">

                                            <a
                                                href="{{ route('admin.categories.edit', $child->id) }}"
                                                class="inline-flex items-center justify-center rounded-lg bg-blue-50 px-3 py-1.5 text-[10px] font-bold text-blue-600 hover:bg-blue-600 hover:text-white transition">

                                                Edit

                                            </a>


                                            <form
                                                action="{{ route('admin.categories.destroy', $child->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus sub-kategori ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="inline-flex items-center justify-center rounded-lg bg-rose-50 px-3 py-1.5 text-[10px] font-bold text-rose-600 hover:bg-rose-600 hover:text-white transition">

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        @endforeach

                    </tbody>

                </table>

            </div>


            {{-- MOBILE --}}
            <div class="md:hidden divide-y divide-slate-100">

                @foreach ($categories as $category)

                    <div class="p-4">

                        <div class="flex items-start gap-3">

                            <div
                                class="w-10 h-10 flex-shrink-0 rounded-xl bg-[#00294B] text-white flex items-center justify-center">

                                <svg
                                    class="w-4 h-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M3 7a2 2 0 012-2h5l2 2h7a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />

                                </svg>

                            </div>


                            <div class="flex-1 min-w-0">

                                <h4 class="text-xs font-extrabold text-[#00294B]">
                                    {{ $category->name }}
                                </h4>

                                <p class="mt-1 text-[10px] font-mono text-slate-400 break-all">
                                    {{ $category->slug }}
                                </p>

                                <div class="mt-2">

                                    <span
                                        class="inline-flex rounded-full bg-[#00294B]/10 px-2.5 py-1 text-[10px] font-bold text-[#00294B]">

                                        {{ $category->child->count() }} sub-kategori

                                    </span>

                                </div>

                            </div>

                        </div>


                        <div class="mt-4 flex gap-2">

                            <a
                                href="{{ route('admin.categories.edit', $category->id) }}"
                                class="flex-1 text-center rounded-lg bg-blue-50 px-3 py-2 text-[10px] font-bold text-blue-600">

                                Edit

                            </a>


                            <form
                                action="{{ route('admin.categories.destroy', $category->id) }}"
                                method="POST"
                                class="flex-1"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full rounded-lg bg-rose-50 px-3 py-2 text-[10px] font-bold text-rose-600">

                                    Hapus

                                </button>

                            </form>

                        </div>


                        {{-- MOBILE CHILD --}}
                        @if ($category->child->count() > 0)

                            <div class="mt-4 ml-5 border-l-2 border-slate-100 pl-4 space-y-3">

                                @foreach ($category->child as $child)

                                    <div>

                                        <div class="flex items-start justify-between gap-3">

                                            <div class="min-w-0">

                                                <p class="text-[11px] font-bold text-slate-700">
                                                    {{ $child->name }}
                                                </p>

                                                <p class="mt-0.5 text-[9px] font-mono text-slate-400 break-all">
                                                    {{ $child->slug }}
                                                </p>

                                            </div>


                                            <div class="flex gap-1.5">

                                                <a
                                                    href="{{ route('admin.categories.edit', $child->id) }}"
                                                    class="rounded-lg bg-blue-50 px-2 py-1 text-[9px] font-bold text-blue-600">

                                                    Edit

                                                </a>


                                                <form
                                                    action="{{ route('admin.categories.destroy', $child->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus sub-kategori ini?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="rounded-lg bg-rose-50 px-2 py-1 text-[9px] font-bold text-rose-600">

                                                        Hapus

                                                    </button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            </div>

                        @endif

                    </div>

                @endforeach

            </div>

        @endif

    </section>

</div>

@endsection
