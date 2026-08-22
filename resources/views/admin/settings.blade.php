@extends('layouts.admin')

@section('title', 'Pengaturan Website')
@section('header_title', 'Pengaturan Website')

@section('content')
<div class="space-y-8 max-w-5xl">
    <!-- Header -->
    <div>
        <h2 class="text-xl font-bold text-slate-800">Pengaturan & Konfigurasi Situs</h2>
        <p class="text-xs text-slate-500">Kelola angka statistik counter di homepage, informasi kontak resmi, dan akun media sosial.</p>
    </div>

    <!-- Section 1: Stats Settings -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-800">Statistik Angka Beranda (Counter)</h3>
                    <p class="text-xs text-slate-500">Nilai metrik yang tampil pada bagian statistik utama website.</p>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.settings.update-stats') }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            @php
                $stats = collect(
                    is_string(setting('stats')) ? json_decode(setting('stats'), true) : setting('stats'),
                )
                    ->map(function ($stat) {
                        return (array) $stat;
                    })
                    ->toArray();
            @endphp

            <div class="space-y-4">
                @foreach ($stats as $index => $stat)
                    <div class="p-4 bg-slate-50/70 border border-slate-100 rounded-xl grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Nilai Angka (Value)</label>
                            <input type="number" name="stats[{{ $index }}][value]"
                                value="{{ old("stats.$index.value", $stat['value'] ?? 0) }}"
                                class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error("stats.$index.value") border-rose-500 @enderror">
                            @error("stats.$index.value")
                                <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Label Deskripsi</label>
                            <input type="text" name="stats[{{ $index }}][label]"
                                value="{{ old("stats.$index.label", $stat['label'] ?? '') }}"
                                class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error("stats.$index.label") border-rose-500 @enderror">
                            @error("stats.$index.label")
                                <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Durasi Animasi (ms)</label>
                            <input type="number" name="stats[{{ $index }}][duration]"
                                value="{{ old("stats.$index.duration", $stat['duration'] ?? 2000) }}"
                                class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error("stats.$index.duration") border-rose-500 @enderror">
                            @error("stats.$index.duration")
                                <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pt-2 flex justify-end">
                <button type="submit"
                    class="px-5 py-2 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all">
                    Simpan Perubahan Statistik
                </button>
            </div>
        </form>
    </div>

    <!-- Section 2: Contact Information -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-800">Informasi Kontak & Lokasi</h3>
                    <p class="text-xs text-slate-500">Alamat kantor, nomor WhatsApp, email resmi yang tampil di footer & kontak.</p>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.settings.update-contact') }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            @php
                $contact = setting('contact_info') ?? [];
            @endphp

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Alamat Lengkap</label>
                <textarea name="address" rows="3"
                    class="w-full text-xs rounded-xl border border-slate-300 p-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('address') border-rose-500 @enderror">{{ old('address', $contact['address'] ?? '') }}</textarea>
                @error('address')
                    <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Nomor Telepon</label>
                    <input type="text" name="phone" value="{{ old('phone', $contact['phone'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('phone') border-rose-500 @enderror">
                    @error('phone')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Email Resmi</label>
                    <input type="email" name="email" value="{{ old('email', $contact['email'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('email') border-rose-500 @enderror">
                    @error('email')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp', $contact['whatsapp'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('whatsapp') border-rose-500 @enderror">
                    @error('whatsapp')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-2 flex justify-end">
                <button type="submit"
                    class="px-5 py-2 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all">
                    Simpan Informasi Kontak
                </button>
            </div>
        </form>
    </div>

    <!-- Section 3: Social Media Links -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-5 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-slate-800">Tautan Media Sosial</h3>
                    <p class="text-xs text-slate-500">Link profil jejaring sosial resmi Fitalenta.</p>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.settings.update-social') }}" method="POST" class="p-6 space-y-4">
            @csrf
            @method('PUT')

            @php
                $social = setting('social_media') ?? [];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Facebook URL</label>
                    <input type="url" name="facebook" value="{{ old('facebook', $social['facebook'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('facebook') border-rose-500 @enderror"
                        placeholder="https://facebook.com/fitalenta">
                    @error('facebook')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Twitter / X URL</label>
                    <input type="url" name="twitter" value="{{ old('twitter', $social['twitter'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('twitter') border-rose-500 @enderror"
                        placeholder="https://x.com/fitalenta">
                    @error('twitter')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Instagram URL</label>
                    <input type="url" name="instagram" value="{{ old('instagram', $social['instagram'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('instagram') border-rose-500 @enderror"
                        placeholder="https://instagram.com/fitalenta">
                    @error('instagram')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">LinkedIn URL</label>
                    <input type="url" name="linkedin" value="{{ old('linkedin', $social['linkedin'] ?? '') }}"
                        class="w-full text-xs rounded-xl border border-slate-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary @error('linkedin') border-rose-500 @enderror"
                        placeholder="https://linkedin.com/company/fitalenta">
                    @error('linkedin')
                        <p class="text-rose-500 text-[11px] mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-2 flex justify-end">
                <button type="submit"
                    class="px-5 py-2 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-[#001d36] transition-all">
                    Simpan Media Sosial
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
