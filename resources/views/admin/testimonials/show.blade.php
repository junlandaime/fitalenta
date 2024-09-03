@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/' . $testimonial->image) }}"
                        alt="{{ $testimonial->client_name }}">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Testimonial</div>
                    <h1 class="mt-1 text-3xl font-bold">{{ $testimonial->client_name }}</h1>
                    <p class="mt-2 text-gray-500">{{ $testimonial->company }}</p>
                </div>
            </div>
            <div class="p-8">
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-2">Testimonial Content</h2>
                    <p class="text-gray-700">{{ $testimonial->content }}</p>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Rating:</span>
                    <div class="flex items-center mt-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 fill-current {{ $i <= $testimonial->rating ? 'text-yellow-500' : 'text-gray-400' }}"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z" />
                            </svg>
                        @endfor
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Featured:</span>
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $testimonial->is_featured ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $testimonial->is_featured ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Created at:</span> {{ $testimonial->created_at->format('F j, Y, g:i a') }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Last updated:</span> {{ $testimonial->updated_at->format('F j, Y, g:i a') }}
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back to Testimonials
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
