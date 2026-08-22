@extends('layouts.admin')

@section('title', 'Mitra Kampus')
@section('header_title', 'Persebaran Mitra Kampus')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Universitas Mitra</h2>
            <p class="text-xs text-slate-500">Kelola perguruan tinggi mitra dan persebaran peserta program.</p>
        </div>
        <a href="{{ route('admin.university-partners.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Mitra Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($partners->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada mitra kampus</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan universitas mitra untuk menampilkan persebaran peserta.</p>
                <a href="{{ route('admin.university-partners.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Mitra Kampus
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Universitas</th>
                            <th class="py-3.5 px-4">Lokasi</th>
                            <th class="py-3.5 px-4 text-center">Jumlah Peserta</th>
                            <th class="py-3.5 px-4 text-center">Urutan</th>
                            <th class="py-3.5 px-4 text-center">Status</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($partners as $partner)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 border border-slate-200 overflow-hidden flex-shrink-0 flex items-center justify-center">
                                            @if ($partner->logo_url)
                                                <img class="w-full h-full object-cover" src="{{ $partner->logo_url }}" alt="{{ $partner->name }}">
                                            @else
                                                <span class="font-bold text-[10px] text-slate-400">UNIV</span>
                                            @endif
                                        </div>
                                        <span class="font-bold text-slate-800">{{ $partner->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-600">
                                    {{ $partner->location ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center font-bold text-slate-800">
                                    {{ number_format($partner->student_count ?? 0) }}
                                </td>
                                <td class="py-3.5 px-4 text-center text-slate-500 font-semibold">
                                    {{ $partner->order ?? 0 }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold {{ $partner->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-600' }}">
                                        {{ $partner->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.university-partners.edit', $partner) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.university-partners.destroy', $partner) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus mitra kampus ini?')">
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
