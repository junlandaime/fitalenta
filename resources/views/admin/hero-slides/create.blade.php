@extends('layouts.admin')

@section('title', 'Manajemen Hero Slides')
@section('header_title', 'Manajemen Hero Slides')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Create New Hero Slide</h1>

        <form action="{{ route('admin.hero-slides.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-slate-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-slate-700 text-sm font-bold mb-2">Subtitle:</label>
                <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                @error('subtitle')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-slate-700 text-sm font-bold mb-2">Image:</label>
                <input type="file" name="image" id="image"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cta_text" class="block text-slate-700 text-sm font-bold mb-2">CTA Text:</label>
                <input type="text" name="cta_text" id="cta_text" value="{{ old('cta_text') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                @error('cta_text')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cta_link" class="block text-slate-700 text-sm font-bold mb-2">CTA Link:</label>
                <input type="url" name="cta_link" id="cta_link" value="{{ old('cta_link') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                @error('cta_link')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="order" class="block text-slate-700 text-sm font-bold mb-2">Order:</label>
                <input type="number" name="order" id="order" value="{{ old('order') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('order')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}
                        class="mr-2 leading-tight">
                    <span class="text-sm">Active</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                    Create Slide
                </button>
                <a href="{{ route('admin.hero-slides.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
