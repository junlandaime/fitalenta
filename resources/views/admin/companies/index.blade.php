@extends('layouts.admin')

@section('title', 'Perusahaan Mitra')
@section('header_title', 'Perusahaan Mitra & Industri')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Perusahaan</h2>
            <p class="text-xs text-slate-500">Kelola profil perusahaan mitra dan penyedia lowongan kerja.</p>
        </div>
        <a href="{{ route('admin.companies.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Perusahaan Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($companies->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada perusahaan</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan perusahaan mitra untuk mengunggah lowongan kerja.</p>
                <a href="{{ route('admin.companies.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Perusahaan
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Nama Perusahaan</th>
                            <th class="py-3.5 px-4">Industri</th>
                            <th class="py-3.5 px-4 text-center">Lokasi</th>
                            <th class="py-3.5 px-4 text-center">Lowongan Aktif</th>
                            <th class="py-3.5 px-4 text-center">Status</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($companies as $company)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 border border-slate-200 overflow-hidden flex-shrink-0 flex items-center justify-center">
                                            @if ($company->logo_url)
                                                <img class="w-full h-full object-cover" src="{{ $company->logo_url }}" alt="{{ $company->name }}">
                                            @else
                                                <span class="font-bold text-[10px] text-slate-400">CORP</span>
                                            @endif
                                        </div>
                                        <span class="font-bold text-slate-800">{{ $company->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-600">
                                    {{ $company->industry ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center text-slate-600">
                                    {{ $company->location ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-indigo-50 text-indigo-700">
                                        {{ $company->jobs()->count() }} Posisi
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold {{ $company->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-600' }}">
                                        {{ $company->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.companies.edit', $company) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.companies.destroy', $company) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus perusahaan ini?')">
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
