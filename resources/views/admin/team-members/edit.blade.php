@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Team Member</h1>

        <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data"
            class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $teamMember->name) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position:</label>
                <input type="text" name="position" id="position" value="{{ old('position', $teamMember->position) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('position')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio:</label>
                <textarea name="bio" id="bio" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('bio', $teamMember->bio) }}</textarea>
                @error('bio')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if ($teamMember->image)
                    <p class="mt-2">Current image: {{ $teamMember->image }}</p>
                @endif
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="order" class="block text-gray-700 text-sm font-bold mb-2">Order:</label>
                <input type="number" name="order" id="order" value="{{ old('order', $teamMember->order) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('order')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <input type="checkbox" name="is_active" value="1"
                        {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }} class="mr-2 leading-tight">
                    <span class="text-sm">Active</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Team Member
                </button>
                <a href="{{ route('admin.team-members.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
