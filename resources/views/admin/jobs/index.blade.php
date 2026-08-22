@extends('layouts.admin')

@section('title', 'Lowongan Kerja')
@section('header_title', 'Manajemen Lowongan Kerja')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Lowongan Pekerjaan</h2>
            <p class="text-xs text-slate-500">Kelola posisi karir, magang, dan lowongan kerja dari perusahaan mitra.</p>
        </div>
        <a href="{{ route('admin.jobs.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Lowongan Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($jobs->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada lowongan kerja</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan info lowongan karir untuk ditampilkan ke publik.</p>
                <a href="{{ route('admin.jobs.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Lowongan
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Posisi & Judul Lowongan</th>
                            <th class="py-3.5 px-4">Perusahaan</th>
                            <th class="py-3.5 px-4 text-center">Tipe Pekerjaan</th>
                            <th class="py-3.5 px-4 text-center">Lokasi</th>
                            <th class="py-3.5 px-4 text-center">Tanggal Posting</th>
                            <th class="py-3.5 px-4 text-center">Status</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($jobs as $job)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-slate-800">
                                    {{ $job->title }}
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-slate-700 font-semibold">{{ $job->company->name ?? '-' }}</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-blue-50 text-blue-700">
                                        {{ $job->type }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap text-slate-600">
                                    {{ $job->location ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap text-slate-500">
                                    {{ $job->posted_at ? $job->posted_at->format('d M Y') : '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold {{ $job->is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-600' }}">
                                        {{ $job->is_active ? 'Aktif' : 'Tutup' }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.jobs.edit', $job) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus lowongan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white font-medium transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                    <a href="{{ route('jobs.show', $job) }}" target="_blank"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200 font-medium transition-colors"
                                        title="Lihat Halaman Publik">
                                        Preview
                                    </a>
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
