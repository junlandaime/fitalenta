@extends('layouts.admin')

@section('title', $service->name)

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Service Details: {{ $service->name }}</h1>
            <div>
                <a href="{{ route('admin.services.edit', $service) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                </form>
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
                    class="mb-6 max-w-full h-auto rounded">
            @endif

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Description</h2>
                <p>{{ $service->description }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Service Details</h2>
                <p><strong>Price:</strong> {{ $service->price ? '$' . number_format($service->price, 2) : 'Variable' }}</p>
                <p><strong>Duration:</strong> {{ $service->duration ?: 'Not specified' }}</p>
                <p><strong>Featured:</strong> {{ $service->is_featured ? 'Yes' : 'No' }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Other Information</h2>
                <p><strong>Created at:</strong> {{ $service->created_at->format('F j, Y g:i A') }}</p>
                <p><strong>Last updated:</strong> {{ $service->updated_at->format('F j, Y g:i A') }}</p>
            </div>
        </div>

        <a href="{{ route('admin.services.index') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Services</a>
    </div>
@endsection
