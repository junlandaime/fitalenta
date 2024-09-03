@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $heroSlide->image) }}" alt="{{ $heroSlide->title }}"
                class="w-full h-96 object-cover object-center">
            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $heroSlide->title }}</h1>
                <p class="text-gray-700 mb-4">{{ $heroSlide->subtitle }}</p>
                <div class="mb-4">
                    <span class="font-bold">CTA Text:</span> {{ $heroSlide->cta_text }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">CTA Link:</span> <a href="{{ $heroSlide->cta_link }}"
                        class="text-blue-500 hover:underline" target="_blank">{{ $heroSlide->cta_link }}</a>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Order:</span> {{ $heroSlide->order }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Active:</span> {{ $heroSlide->is_active ? 'Yes' : 'No' }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Created at:</span> {{ $heroSlide->created_at->format('F j, Y, g:i a') }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Last updated:</span> {{ $heroSlide->updated_at->format('F j, Y, g:i a') }}
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.hero-slides.edit', $heroSlide) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('admin.hero-slides.destroy', $heroSlide) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this hero slide?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('admin.hero-slides.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back to Hero Slides
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
