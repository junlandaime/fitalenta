@extends('layouts.admin')

@section('title', 'Klien Kami')
@section('header_title', 'Manajemen Klien')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Logo Klien</h2>
            <p class="text-xs text-slate-500">Kelola daftar klien dan partner institusi yang ditampilkan di website.</p>
        </div>
        <a href="{{ route('admin.clients.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Klien Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($clients->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada klien</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan logo klien yang bekerjasama dengan Fitalenta.</p>
                <a href="{{ route('admin.clients.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Klien
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Nama Klien</th>
                            <th class="py-3.5 px-4">Logo</th>
                            <th class="py-3.5 px-4">Website</th>
                            <th class="py-3.5 px-4 text-center">Status Unggulan</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($clients as $client)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-slate-800">
                                    {{ $client->name }}
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="w-20 h-10 rounded-lg bg-slate-50 border border-slate-200 p-1 flex items-center justify-center">
                                        @if ($client->logo)
                                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                                                class="max-h-full max-w-full object-contain">
                                        @else
                                            <span class="text-[10px] text-slate-400">No Logo</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-500">
                                    @if ($client->website)
                                        <a href="{{ $client->website }}" target="_blank"
                                            class="text-primary hover:underline font-medium inline-flex items-center space-x-1">
                                            <span>{{ Str::limit($client->website, 30) }}</span>
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    @else
                                        <span class="text-slate-400">-</span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <a href="{{ route('admin.clients.toggle', $client) }}"
                                        class="inline-flex items-center space-x-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold transition-all {{ $client->is_featured ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}"
                                        title="Klik untuk ubah status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $client->is_featured ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                        <span>{{ $client->is_featured ? 'Unggulan' : 'Biasa' }}</span>
                                    </a>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.clients.edit', $client) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.clients.destroy', $client) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus klien ini?')">
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
