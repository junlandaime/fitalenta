@extends('layouts.admin')

@section('title', 'Testimoni')
@section('header_title', 'Manajemen Testimoni')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Testimoni & Ulasan</h2>
            <p class="text-xs text-slate-500">Kelola ulasan kepuasan dari peserta program dan mitra Fitalenta.</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Testimoni Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($testimonials->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada testimoni</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan ulasan atau kutipan testimoni klien & peserta.</p>
                <a href="{{ route('admin.testimonials.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Testimoni
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Pemberi Testimoni</th>
                            <th class="py-3.5 px-4">Instansi / Perusahaan</th>
                            <th class="py-3.5 px-4 text-center">Rating</th>
                            <th class="py-3.5 px-4 text-center">Status Unggulan</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($testimonials as $testimonial)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-9 h-9 rounded-full bg-slate-100 overflow-hidden flex-shrink-0 border border-slate-200">
                                            @if ($testimonial->image)
                                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->client_name }}"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center font-bold text-xs text-slate-400">
                                                    {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-800">{{ $testimonial->client_name }}</div>
                                            <p class="text-[11px] text-slate-400 max-w-xs truncate">{{ $testimonial->content }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-600 font-medium">
                                    {{ $testimonial->company ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <div class="inline-flex items-center space-x-0.5 text-amber-400">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-3.5 h-3.5 {{ $i <= ($testimonial->rating ?? 5) ? 'fill-current' : 'text-slate-200 fill-current' }}" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <a href="{{ route('admin.testimonials.toggle', $testimonial) }}"
                                        class="inline-flex items-center space-x-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold transition-all {{ $testimonial->is_featured ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}"
                                        title="Klik untuk ubah status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $testimonial->is_featured ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                        <span>{{ $testimonial->is_featured ? 'Unggulan' : 'Biasa' }}</span>
                                    </a>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
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
