@extends('layouts.admin')

@section('title', 'Manajemen Tim')
@section('header_title', 'Manajemen Tim')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Add New Team Member</h1>

        <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-slate-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="position" class="block text-slate-700 text-sm font-bold mb-2">Position:</label>
                <input type="text" name="position" id="position" value="{{ old('position') }}"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                    required>
                @error('position')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="bio" class="block text-slate-700 text-sm font-bold mb-2">Bio:</label>
                <textarea name="bio" id="bio" rows="4"
                    class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]">{{ old('bio') }}</textarea>
                @error('bio')
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
                    Add Team Member
                </button>
                <a href="{{ route('admin.team-members.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
