@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Testimonial</h1>

        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data"
            class="max-w-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="client_name" class="block text-gray-700 text-sm font-bold mb-2">Client Name:</label>
                <input type="text" name="client_name" id="client_name"
                    value="{{ old('client_name', $testimonial->client_name) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('client_name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="company" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
                <input type="text" name="company" id="company" value="{{ old('company', $testimonial->company) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('company')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Testimonial Content:</label>
                <textarea name="content" id="content" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>{{ old('content', $testimonial->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating:</label>
                <select name="rating" id="rating"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                    <option value="">Select Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}"
                            {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('rating')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Client Image:</label>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if ($testimonial->image)
                    <p class="mt-2">Current image: {{ $testimonial->image }}</p>
                @endif
                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    <input type="checkbox" name="is_featured" value="1"
                        {{ old('is_featured', $testimonial->is_featured) ? 'checked' : '' }} class="mr-2 leading-tight">
                    <span class="text-sm">Featured</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
