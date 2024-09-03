@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-8">
                <div class="mb-6">
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                        class="max-w-full h-auto mb-4">
                    <h1 class="text-3xl font-bold">{{ $client->name }}</h1>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Website:</span>
                    <a href="{{ $client->website }}" target="_blank"
                        class="text-blue-500 hover:underline">{{ $client->website }}</a>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Featured:</span>
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $client->is_featured ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $client->is_featured ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Created at:</span> {{ $client->created_at->format('F j, Y, g:i a') }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Last updated:</span> {{ $client->updated_at->format('F j, Y, g:i a') }}
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.clients.edit', $client) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('admin.clients.destroy', $client) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this client?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('admin.clients.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back to Clients
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
