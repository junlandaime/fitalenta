@extends('layouts.app2')

@section('title', $image->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">{{ $image->title }}</h1>
            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->title }}"
                class="w-full rounded-lg shadow-lg mb-8">
            <p class="text-gray-600 mb-4">{{ $image->description }}</p>
            <p class="text-gray-600 mb-4">{{ $image->event_date->format('F j, Y') }}</p>
            <p class="text-sm text-gray-500">Category: {{ $image->category->name }}</p>

            <!-- Related Images -->
            @if ($relatedImages->count() > 0)
                <h2 class="text-2xl font-semibold mt-12 mb-4">Related Images</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($relatedImages as $relatedImage)
                        <a href="{{ route('gallery.show', $relatedImage->id) }}" class="block">
                            <img src="{{ asset('storage/' . $relatedImage->image) }}" alt="{{ $relatedImage->title }}"
                                class="w-full h-48 object-cover rounded-lg shadow-md hover:shadow-xl transition duration-300">
                            <h3 class="mt-2 text-lg font-semibold">{{ $relatedImage->title }}</h3>
                        </a>
                    @endforeach
                </div>
            @endif

            <a href="{{ route('gallery') }}"
                class="inline-block mt-8 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Back
                to Gallery</a>
        </div>
    </div>
@endsection
