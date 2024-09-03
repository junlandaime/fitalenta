@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Hero Slides</h1>
            <a href="{{ route('admin.hero-slides.create') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Add New Slide
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Gambar</th>
                        <th class="py-3 px-6 text-left">Subtitle</th>
                        <th class="py-3 px-6 text-center">Order</th>
                        <th class="py-3 px-6 text-center">Active</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($heroSlides as $slide)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                {{ $slide->title }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->name }}"
                                    class="h-10 w-auto">
                            </td>
                            <td class="py-3 px-6 text-left">
                                {{ Str::limit($slide->subtitle, 30) }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{ $slide->order }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-{{ $slide->is_active ? 'green' : 'red' }}-500 text-white py-1 px-3 rounded-full text-xs">
                                    {{ $slide->is_active ? 'Yes' : 'No' }}
                                </span>
                                <a href="{{ route('admin.hero-slides.toggle', $slide) }}">
                                    <span
                                        class="bg-{{ $slide->is_active ? 'red' : 'green' }}-500 text-white py-1 px-3 rounded-full text-xs">
                                        {{ $slide->is_active ? 'deactivate' : 'activate' }}
                                    </span>
                                </a>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('admin.hero-slides.show', $slide) }}"
                                        class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.hero-slides.edit', $slide) }}"
                                        class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.hero-slides.destroy', $slide) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this slide?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
