@extends('layouts.admin')

@section('title', 'Anggota Tim')
@section('header_title', 'Manajemen Anggota Tim')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Tim Fitalenta</h2>
            <p class="text-xs text-slate-500">Kelola profil mentor, instruktur, dan manajemen tim Fitalenta.</p>
        </div>
        <a href="{{ route('admin.team-members.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Anggota Tim</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($teamMembers->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada anggota tim</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan profil anggota tim dan instruktur program.</p>
                <a href="{{ route('admin.team-members.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Anggota
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Nama Anggota</th>
                            <th class="py-3.5 px-4">Jabatan / Posisi</th>
                            <th class="py-3.5 px-4 text-center">Urutan</th>
                            <th class="py-3.5 px-4 text-center">Status</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($teamMembers as $member)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-9 h-9 rounded-full bg-slate-100 border border-slate-200 overflow-hidden flex-shrink-0">
                                            @if ($member->image)
                                                <img class="w-full h-full object-cover" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center font-bold text-xs text-slate-400">
                                                    {{ strtoupper(substr($member->name, 0, 1)) }}
                                                </div>
                                            @endif
                                        </div>
                                        <span class="font-bold text-slate-800">{{ $member->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-600 font-medium">
                                    {{ $member->position ?? '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-center font-semibold text-slate-700">
                                    {{ $member->order ?? 0 }}
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <a href="{{ route('admin.team-members.toggle', $member) }}"
                                        class="inline-flex items-center space-x-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold transition-all {{ $member->is_active ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}"
                                        title="Klik untuk ubah status">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $member->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                        <span>{{ $member->is_active ? 'Aktif' : 'Nonaktif' }}</span>
                                    </a>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.team-members.edit', $member) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.team-members.destroy', $member) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?')">
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
