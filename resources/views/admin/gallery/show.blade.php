@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $galleryItem->image) }}" alt="{{ $galleryItem->title }}"
                class="w-full h-96 object-cover object-center">
            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $galleryItem->title }}</h1>
                <p class="text-gray-700 mb-4">{{ $galleryItem->description }}</p>
                <div class="mb-4">
                    <span class="font-bold">Category:</span> {{ $galleryItem->category }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Featured:</span> {{ $galleryItem->is_featured ? 'Yes' : 'No' }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Created at:</span> {{ $galleryItem->created_at->format('F j, Y, g:i a') }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Last updated:</span> {{ $galleryItem->updated_at->format('F j, Y, g:i a') }}
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.gallery.edit', $galleryItem) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('admin.gallery.destroy', $galleryItem) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this image?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('admin.gallery.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back to Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
