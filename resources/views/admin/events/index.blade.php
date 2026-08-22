@extends('layouts.admin')

@section('title', 'Manajemen Agenda & Event')
@section('header_title', 'Manajemen Agenda & Event')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Agenda & Event</h2>
            <p class="text-xs text-slate-500">Kelola jadwal webinar, workshop, dan kegiatan Fitalenta.</p>
        </div>
        <a href="{{ route('admin.events.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Event Baru</span>
        </a>
    </div>

    <!-- Filter & Search Box -->
    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs">
        <form action="{{ route('admin.events.index') }}" method="GET" class="flex flex-col sm:flex-row items-center gap-3">
            <div class="relative flex-1 w-full">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" name="search" placeholder="Cari nama event / topik..."
                    class="w-full pl-9 pr-4 py-2 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
                    value="{{ request('search') }}">
            </div>
            <div class="w-full sm:w-48">
                <select name="status"
                    class="w-full py-2 px-3 text-xs rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                    <option value="">Semua Jadwal</option>
                    <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Akan Datang (Upcoming)</option>
                    <option value="past" {{ request('status') == 'past' ? 'selected' : '' }}>Selesai (Past)</option>
                </select>
            </div>
            <div class="flex items-center space-x-2 w-full sm:w-auto">
                <button type="submit"
                    class="flex-1 sm:flex-none px-4 py-2 bg-primary text-white text-xs font-semibold rounded-xl hover:bg-[#001d36] transition-all">
                    Filter
                </button>
                @if (request()->hasAny(['search', 'status']))
                    <a href="{{ route('admin.events.index') }}"
                        class="px-3 py-2 bg-slate-100 text-slate-600 hover:bg-slate-200 text-xs font-semibold rounded-xl transition-all">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($events->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Tidak ada event ditemukan</h3>
                <p class="text-xs text-slate-400 mt-1">Coba sesuaikan pencarian atau jadwalkan event baru.</p>
                <a href="{{ route('admin.events.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Event
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Event</th>
                            <th class="py-3.5 px-4">Tanggal Pelaksanaan</th>
                            <th class="py-3.5 px-4">Lokasi</th>
                            <th class="py-3.5 px-4 text-center">Views</th>
                            <th class="py-3.5 px-4 text-center">Status</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($events as $event)
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-4 font-semibold text-slate-800 max-w-xs">
                                    <div class="truncate">{{ $event->title }}</div>
                                    @if ($event->category)
                                        <span class="inline-block mt-0.5 px-2 py-0.5 bg-slate-100 text-slate-500 rounded text-[10px]">
                                            {{ $event->category->name }}
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-600 font-medium">
                                    {{ $event->event_date ? $event->event_date->format('d M Y, H:i') : '-' }}
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-500">
                                    {{ $event->location ?? 'Online' }}
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-center text-slate-500">
                                    {{ number_format($event->views ?? 0) }}
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-center">
                                    @if ($event->event_date && $event->event_date->isPast())
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-600">
                                            Selesai
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-800">
                                            Mendatang
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1.5">
                                    <a href="{{ route('admin.events.edit', $event) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?')">
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

            @if ($events->hasPages())
                <div class="p-4 border-t border-slate-100">
                    {{ $events->links() }}
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
