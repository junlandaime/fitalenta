@extends('layouts.admin')

@section('title', 'Manajemen Klien')
@section('header_title', 'Manajemen Klien')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Client</h1>

        <form action="{{ route('admin.clients.update', $client) }}" method="POST" enctype="multipart/form-data"
            class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-slate-700 text-sm font-bold mb-2">Client Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $client->name) }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="logo" class="block text-slate-700 text-sm font-bold mb-2">Logo:</label>
                <input type="file" name="logo" id="logo"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                <p class="mt-2">Current logo: {{ $client->logo }}</p>
                @error('logo')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="website" class="block text-slate-700 text-sm font-bold mb-2">Website:</label>
                <input type="url" name="website" id="website" value="{{ old('website', $client->website) }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                @error('website')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4">
                <label class="block text-slate-700 text-sm font-bold mb-2">
                    <input type="checkbox" name="is_featured" value="1"
                        {{ old('is_featured', $client->is_featured) ? 'checked' : '' }} class="mr-2 leading-tight">
                    <span class="text-sm">Featured</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">
                    Update Client
                </button>
                <a href="{{ route('admin.clients.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
