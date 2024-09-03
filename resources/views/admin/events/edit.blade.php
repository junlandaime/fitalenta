@extends('layouts.admin')

@section('title', 'Edit Event')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold mb-6">Edit Event: {{ $event->title }}</h1>

        <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
                    id="title" type="text" name="title" value="{{ old('title', $event->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                    Category
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category_id') border-red-500 @enderror"
                    id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                    id="description" name="description" rows="5" required>{{ old('description', $event->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="event_date">
                    Event Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('event_date') border-red-500 @enderror"
                    id="event_date" type="datetime-local" name="event_date"
                    value="{{ old('event_date', $event->event_date->format('Y-m-d\TH:i')) }}" required>
                @error('event_date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                    Location
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('location') border-red-500 @enderror"
                    id="location" type="text" name="location" value="{{ old('location', $event->location) }}" required>
                @error('location')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="max_participants">
                    Max Participants
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('max_participants') border-red-500 @enderror"
                    id="max_participants" type="number" name="max_participants"
                    value="{{ old('max_participants', $event->max_participants) }}">
                @error('max_participants')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Event Image
                </label>
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="mb-2 w-64">
                @endif
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                    id="image" type="file" name="image">
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="is_featured">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1"
                        {{ old('is_featured', $event->is_featured) ? 'checked' : '' }}>
                    Feature this event
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update Event
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-[#00294B] hover:text-[#001f3b]"
                    href="{{ route('admin.events.index') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
