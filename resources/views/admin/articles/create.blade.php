@extends('layouts.admin')

@section('title', 'Tambah Artikel')
@section('header_title', 'Tambah Artikel')

@section('content')

<div class="space-y-6">

    {{-- PAGE HEADER --}}
    <section class="rounded-2xl bg-white border border-slate-200 shadow-sm p-5 sm:p-6">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 rounded-full bg-[#F15A24]"></span>

                    <span class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#F15A24]">
                        Content Management
                    </span>
                </div>

                <h2 class="text-2xl font-extrabold text-[#00294B]">
                    Tambah Artikel Baru
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Buat konten baru untuk dipublikasikan di website FITALENTA.
                </p>
            </div>

            <a
                href="{{ route('admin.articles.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-xs font-bold text-[#00294B] hover:bg-slate-50 transition">

                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 19l-7-7 7-7" />
                </svg>

                Kembali
            </a>

        </div>

    </section>


    {{-- FORM --}}
    <form
        action="{{ route('admin.articles.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-6">

        @csrf


        {{-- MAIN CONTENT --}}
        <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

            <div class="px-5 sm:px-6 py-4 border-b border-slate-100">

                <h3 class="text-sm font-extrabold text-[#00294B]">
                    Informasi Artikel
                </h3>

                <p class="mt-0.5 text-[11px] text-slate-400">
                    Isi judul, ringkasan, dan isi utama artikel.
                </p>

            </div>


            <div class="p-5 sm:p-6 space-y-6">

                {{-- TITLE --}}
                <div>

                    <label for="title"
                        class="block mb-2 text-xs font-bold text-slate-700">

                        Judul Artikel
                        <span class="text-rose-500">*</span>

                    </label>

                    <input
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="Masukkan judul artikel..."
                        class="block w-full rounded-xl border bg-white px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-[#00294B]/10
                        @error('title')
                            border-rose-400 focus:border-rose-400
                        @else
                            border-slate-200 focus:border-[#00294B]
                        @enderror">

                    @error('title')
                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- EXCERPT --}}
                <div>

                    <div class="flex items-center justify-between mb-2">

                        <label for="excerpt"
                            class="text-xs font-bold text-slate-700">

                            Ringkasan Artikel
                            <span class="text-rose-500">*</span>

                        </label>

                        <span class="text-[10px] text-slate-400">
                            Tampil sebagai deskripsi singkat
                        </span>

                    </div>

                    <textarea
                        id="excerpt"
                        name="excerpt"
                        rows="4"
                        required
                        placeholder="Tulis ringkasan singkat artikel..."
                        class="block w-full resize-none rounded-xl border bg-white px-4 py-3 text-sm text-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-[#00294B]/10
                        @error('excerpt')
                            border-rose-400 focus:border-rose-400
                        @else
                            border-slate-200 focus:border-[#00294B]
                        @enderror">{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- CONTENT --}}
                <div>

                    <label for="content"
                        class="block mb-2 text-xs font-bold text-slate-700">

                        Isi Artikel
                        <span class="text-rose-500">*</span>

                    </label>

                    <div class="@error('content') ring-1 ring-rose-400 rounded-xl @enderror">

                        <textarea
                            id="content"
                            name="content"
                            rows="12">{{ old('content') }}</textarea>

                    </div>

                    @error('content')
                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

            </div>

        </section>


        {{-- PUBLISH SETTINGS --}}
        <section class="rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">

            <div class="px-5 sm:px-6 py-4 border-b border-slate-100">

                <h3 class="text-sm font-extrabold text-[#00294B]">
                    Pengaturan Publikasi
                </h3>

                <p class="mt-0.5 text-[11px] text-slate-400">
                    Atur kategori, gambar utama, dan tanggal publikasi.
                </p>

            </div>


            <div class="p-5 sm:p-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    {{-- CATEGORY --}}
                    <div>

                        <label for="category_id"
                            class="block mb-2 text-xs font-bold text-slate-700">

                            Kategori
                            <span class="text-rose-500">*</span>

                        </label>

                        <select
                            id="category_id"
                            name="category_id"
                            required
                            class="block w-full h-12 rounded-xl border bg-white px-4 text-sm text-slate-700 focus:ring-2 focus:ring-[#00294B]/10
                            @error('category_id')
                                border-rose-400 focus:border-rose-400
                            @else
                                border-slate-200 focus:border-[#00294B]
                            @enderror">

                            <option value="">
                                Pilih kategori artikel
                            </option>

                            @foreach ($categories as $category)

                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>

                                    {{ $category->name }}

                                </option>

                            @endforeach

                        </select>

                        @error('category_id')
                            <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- PUBLISH DATE --}}
                    <div>

                        <label for="event_date"
                            class="block mb-2 text-xs font-bold text-slate-700">

                            Tanggal Publikasi

                        </label>

                        <input
                            id="event_date"
                            type="datetime-local"
                            name="event_date"
                            value="{{ old('event_date') }}"
                            class="block w-full h-12 rounded-xl border bg-white px-4 text-sm text-slate-700 focus:ring-2 focus:ring-[#00294B]/10
                            @error('event_date')
                                border-rose-400 focus:border-rose-400
                            @else
                                border-slate-200 focus:border-[#00294B]
                            @enderror">

                        <p class="mt-1.5 text-[10px] text-slate-400">
                            Kosongkan jika artikel ingin disimpan sebagai draft.
                        </p>

                        @error('event_date')
                            <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>


                {{-- IMAGE --}}
                <div class="mt-6">

                    <label for="image"
                        class="block mb-2 text-xs font-bold text-slate-700">

                        Featured Image

                    </label>

                    <label
                        for="image"
                        class="group flex flex-col items-center justify-center min-h-[170px] rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50 cursor-pointer hover:border-[#F15A24]/50 hover:bg-orange-50/30 transition">

                        <div class="flex flex-col items-center text-center px-5">

                            <div
                                class="w-12 h-12 rounded-xl bg-white border border-slate-200 text-[#00294B] flex items-center justify-center shadow-sm group-hover:text-[#F15A24] transition">

                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2 1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                </svg>

                            </div>

                            <p class="mt-3 text-xs font-bold text-[#00294B]">
                                Pilih gambar artikel
                            </p>

                            <p class="mt-1 text-[11px] text-slate-400">
                                Klik area ini untuk memilih file dari perangkat.
                            </p>

                            <p
                                id="image-file-name"
                                class="mt-2 text-[11px] font-semibold text-[#F15A24]">
                            </p>

                        </div>

                        <input
                            id="image"
                            type="file"
                            name="image"
                            accept="image/*"
                            class="sr-only">

                    </label>

                    @error('image')
                        <p class="mt-1.5 text-[11px] font-medium text-rose-500">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                {{-- IS FEATURED --}}
                <div class="mt-6 pt-5 border-t border-slate-100">
                    <label class="inline-flex items-center cursor-pointer select-none">
                        <input type="checkbox" id="is_featured" name="is_featured" value="1"
                            {{ old('is_featured') ? 'checked' : '' }}
                            class="rounded border-slate-300 text-[#F15A24] shadow-sm focus:border-[#00294B] focus:ring focus:ring-[#00294B]/20 w-4 h-4 mr-2.5">
                        <span class="text-xs font-bold text-slate-700">Jadikan artikel unggulan (Feature this article)</span>
                    </label>
                    <p class="mt-1 text-[11px] text-slate-400 pl-6.5">
                        Artikel unggulan akan ditampilkan di bagian banner atau sorotan utama.
                    </p>
                    @error('is_featured')
                        <p class="mt-1 text-[11px] font-medium text-rose-500">{{ $message }}</p>
                    @enderror
                </div>

            </div>

        </section>


        {{-- ACTIONS --}}
        <section class="rounded-2xl bg-white border border-slate-200 shadow-sm p-5">

            <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-end gap-3">

                <a
                    href="{{ route('admin.articles.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-xs font-bold text-slate-600 hover:bg-slate-50 transition">

                    Batal

                </a>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#F15A24] px-6 py-3 text-xs font-bold text-white shadow-md shadow-orange-950/10 hover:bg-[#dc4e1d] transition">

                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />

                    </svg>

                    Simpan Artikel

                </button>

            </div>

        </section>

    </form>

</div>

@endsection


@push('styles')

<style>
    .ck-editor__editable_inline {
        min-height: 320px;
    }

    .ck.ck-editor {
        width: 100%;
    }

    .ck.ck-toolbar {
        border-color: #e2e8f0 !important;
        border-radius: 12px 12px 0 0 !important;
        background: #f8fafc !important;
    }

    .ck.ck-editor__main > .ck-editor__editable {
        border-color: #e2e8f0 !important;
        border-radius: 0 0 12px 12px !important;
        box-shadow: none !important;
        font-size: 14px;
        color: #334155;
    }

    .ck.ck-editor__main > .ck-editor__editable.ck-focused {
        border-color: #00294B !important;
    }
</style>

@endpush


@push('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .then(editor => {
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', () => {
                    document.querySelector('#content').value = editor.getData();
                });
            }
        })
        .catch(error => {
            console.error(error);
        });

    const imageInput = document.getElementById('image');
    const imageFileName = document.getElementById('image-file-name');

    if (imageInput && imageFileName) {
        imageInput.addEventListener('change', function () {
            if (this.files && this.files.length > 0) {
                imageFileName.textContent = this.files[0].name;
            } else {
                imageFileName.textContent = '';
            }
        });
    }
</script>

@endpush
