@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
    <div class="space-y-6">
        <h1 class="text-3xl font-semibold mb-6">Edit Event: {{ $event->title }}</h1>

        <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="title">
                    Judul
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('title') border-red-500 @enderror"
                    id="title" type="text" name="title" value="{{ old('title', $event->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="link">
                    Link Pendaftaran
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('link') border-red-500 @enderror"
                    id="link" type="text" name="link" value="{{ old('link', $event->link) }}">
                @error('link')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="category_id">
                    Kategori
                </label>
                <select
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('category_id') border-red-500 @enderror"
                    id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="description">
                    Deskripsi
                </label>
                <textarea
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="5" required>{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="event_date">
                    Tanggal Event
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('event_date') border-red-500 @enderror"
                    id="event_date" type="datetime-local" name="event_date"
                    value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d\TH:i') : '') }}" required>
                @error('event_date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="location">
                    Lokasi
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('location') border-red-500 @enderror"
                    id="location" type="text" name="location" value="{{ old('location', $event->location) }}" required>
                @error('location')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="max_participants">
                    Maksimal Peserta
                </label>
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('max_participants') border-red-500 @enderror"
                    id="max_participants" type="number" name="max_participants"
                    value="{{ old('max_participants', $event->max_participants) }}">
                @error('max_participants')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="image">
                    Gambar Event
                </label>
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="mb-2 w-64 rounded">
                @endif
                <input
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('image') border-red-500 @enderror"
                    id="image" type="file" name="image">
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2" for="is_featured">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1"
                        {{ old('is_featured', $event->is_featured) ? 'checked' : '' }}>
                    Jadikan event unggulan
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-[#F15A24] hover:bg-[#dc4e1d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    type="submit">
                    Simpan Perubahan
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-[#00294B] hover:text-[#001f3b]"
                    href="{{ route('admin.events.index') }}">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        if (document.getElementById('description')) {
            CKEDITOR.replace('description');
        }
    </script>
@endpush
