@extends('layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-6">Edit Service: {{ $service->name }}</h1>

        <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Service Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                    id="name" type="text" name="name" value="{{ old('name', $service->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="5" required>{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Price (leave blank if variable)
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror"
                    id="price" type="number" name="price" value="{{ old('price', $service->price) }}" step="0.01">
                @error('price')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="duration">
                    Duration
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('duration') border-red-500 @enderror"
                    id="duration" type="text" name="duration" value="{{ old('duration', $service->duration) }}">
                @error('duration')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Service Image
                </label>
                @if ($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="mb-2 w-64">
                @endif
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                    id="image" type="file" name="image">
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="is_featured" value="1"
                        {{ old('is_featured', $service->is_featured) ? 'checked' : '' }} class="mr-2">
                    <span class="text-gray-700 text-sm font-bold">Feature this service</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update Service
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-[#00294B] hover:text-[#001f3b]"
                    href="{{ route('admin.services.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
