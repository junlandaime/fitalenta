@extends('layouts.admin')

@section('title', 'Galeri Foto')
@section('header_title', 'Manajemen Galeri Foto')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Galeri Dokumentasi</h2>
            <p class="text-xs text-slate-500">Kelola arsip dokumentasi kegiatan, pelatihan, dan event Fitalenta.</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Upload Foto Baru</span>
        </a>
    </div>

    @if ($images->isEmpty())
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xs py-16 px-4 text-center">
            <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="text-sm font-bold text-slate-700">Belum ada foto galeri</h3>
            <p class="text-xs text-slate-400 mt-1">Upload foto kegiatan untuk ditampilkan di halaman galeri publik.</p>
            <a href="{{ route('admin.gallery.create') }}"
                class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                Upload Foto
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach ($images as $gallery)
                <div class="bg-white border border-slate-200 shadow-xs rounded-2xl overflow-hidden hover:shadow-md transition-all flex flex-col justify-between group">
                    <div class="relative aspect-video w-full bg-slate-100 overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        @if ($gallery->category)
                            <span class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-slate-900/70 text-white backdrop-blur-xs">
                                {{ $gallery->category->name }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-slate-800 text-sm line-clamp-1 group-hover:text-primary transition-colors">
                                {{ $gallery->title }}
                            </h3>
                            <p class="text-xs text-slate-500 mt-1 line-clamp-2">
                                {{ $gallery->description ?? 'Tidak ada deskripsi.' }}
                            </p>
                        </div>

                        <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-[10px] text-slate-400 font-medium">
                                {{ $gallery->created_at ? $gallery->created_at->format('d M Y') : '' }}
                            </span>
                            <div class="flex items-center space-x-1.5">
                                <a href="{{ route('admin.gallery.edit', $gallery) }}"
                                    class="p-1.5 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                                    title="Edit Foto">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                                <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST"
                                    class="inline-block"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="p-1.5 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white transition-colors"
                                        title="Hapus Foto">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
