@extends('layouts.admin')

@section('title', 'Hero Slides')
@section('header_title', 'Manajemen Hero Slides')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Banner Hero Beranda</h2>
            <p class="text-xs text-slate-500">Kelola gambar slide utama dan teks sambutan di halaman depan website.</p>
        </div>
        <a href="{{ route('admin.hero-slides.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Slide Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($heroSlides->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada slide hero</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan gambar slide untuk mempercantik beranda utama.</p>
                <a href="{{ route('admin.hero-slides.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Slide
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Banner Slide</th>
                            <th class="py-3.5 px-4">Judul & Subtitle</th>
                            <th class="py-3.5 px-4 text-center">Urutan</th>
                            <th class="py-3.5 px-4 text-center">Status Aktif</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($heroSlides as $slide)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="w-24 h-14 rounded-lg overflow-hidden bg-slate-100 border border-slate-200 flex items-center justify-center">
                                        @if ($slide->image)
                                            <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}"
                                                class="w-full h-full object-cover">
                                        @else
                                            <span class="text-[10px] text-slate-400 font-medium">No Image</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 max-w-xs">
                                    <div class="font-bold text-slate-800 text-sm truncate">{{ $slide->title }}</div>
                                    <p class="text-slate-500 text-xs mt-0.5 line-clamp-1">{{ $slide->subtitle }}</p>
                                </td>
                                <td class="py-3.5 px-4 text-center font-bold text-slate-700">
                                    {{ $slide->order ?? 0 }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <a href="{{ route('admin.hero-slides.toggle', $slide) }}"
                                        class="inline-flex items-center space-x-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold transition-all {{ $slide->is_active ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}"
                                        title="Klik untuk ubah status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $slide->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                        <span>{{ $slide->is_active ? 'Aktif' : 'Nonaktif' }}</span>
                                    </a>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.hero-slides.edit', $slide) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.hero-slides.destroy', $slide) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus slide ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white font-medium transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
