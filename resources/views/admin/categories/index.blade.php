@extends('layouts.admin')

@section('title', 'Manajemen Kategori')
@section('header_title', 'Manajemen Kategori')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Daftar Kategori</h2>
            <p class="text-xs text-slate-500">Kelola kategori utama dan sub-kategori untuk artikel dan event.</p>
        </div>
        <a href="{{ route('admin.categories.create') }}"
            class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Kategori Baru</span>
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        @if ($categories->isEmpty())
            <div class="py-16 px-4 text-center">
                <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-700">Belum ada kategori</h3>
                <p class="text-xs text-slate-400 mt-1">Tambahkan kategori untuk mengelompokkan artikel dan event.</p>
                <a href="{{ route('admin.categories.create') }}"
                    class="mt-4 inline-flex items-center px-4 py-2 rounded-xl bg-primary text-white text-xs font-semibold shadow-xs hover:bg-[#001d36]">
                    Tambah Kategori
                </a>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-semibold uppercase tracking-wider">
                        <tr>
                            <th class="py-3.5 px-4">Nama Kategori</th>
                            <th class="py-3.5 px-4">Slug</th>
                            <th class="py-3.5 px-4 text-center">Sub-Kategori</th>
                            <th class="py-3.5 px-4">Tanggal Dibuat</th>
                            <th class="py-3.5 px-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        @foreach ($categories as $category)
                            <!-- Parent Category Row -->
                            <tr class="bg-slate-50/50 hover:bg-slate-100/60 transition-colors font-medium">
                                <td class="py-3.5 px-4 font-bold text-slate-900 flex items-center space-x-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-primary flex-shrink-0"></span>
                                    <span>{{ $category->name }}</span>
                                </td>
                                <td class="py-3.5 px-4 text-slate-500 font-mono text-[11px]">
                                    {{ $category->slug }}
                                </td>
                                <td class="py-3.5 px-4 text-center">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-slate-200 text-slate-700">
                                        {{ $category->child->count() }} sub-kategori
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-slate-500">
                                    {{ $category->created_at ? $category->created_at->format('d M Y') : '-' }}
                                </td>
                                <td class="py-3.5 px-4 text-right space-x-1.5 whitespace-nowrap">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-2.5 py-1 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white font-medium transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Child Categories Rows -->
                            @foreach ($category->child as $child)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-3 px-4 pl-10 text-slate-700 flex items-center space-x-2">
                                        <span class="text-slate-300 font-mono">└─</span>
                                        <span>{{ $child->name }}</span>
                                    </td>
                                    <td class="py-3 px-4 text-slate-400 font-mono text-[11px]">
                                        {{ $child->slug }}
                                    </td>
                                    <td class="py-3 px-4 text-center text-slate-400">
                                        -
                                    </td>
                                    <td class="py-3 px-4 text-slate-400">
                                        {{ $child->created_at ? $child->created_at->format('d M Y') : '-' }}
                                    </td>
                                    <td class="py-3 px-4 text-right space-x-1.5 whitespace-nowrap">
                                        <a href="{{ route('admin.categories.edit', $child->id) }}"
                                            class="inline-flex items-center px-2.5 py-1 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white font-medium transition-colors">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.categories.destroy', $child->id) }}" method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus sub-kategori ini?')">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
