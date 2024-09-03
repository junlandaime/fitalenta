@extends('layouts.admin')

@section('title', $article->title)

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Article Details: {{ $article->title }}</h1>
            <div>
                <a href="{{ route('admin.articles.edit', $article) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                </form>
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @if ($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                    class="mb-6 max-w-full h-auto rounded">
            @endif

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Content</h2>
                <div class="prose max-w-none">
                    {!! $article->content !!}
                </div>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Excerpt</h2>
                <p>{{ $article->excerpt }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Article Details</h2>
                <p><strong>Author:</strong> {{ $article->author->name }}</p>
                <p><strong>Category:</strong> {{ $article->category->name }}</p>
                <p><strong>Status:</strong> {{ $article->published_at ? 'Published' : 'Draft' }}</p>
                @if ($article->published_at)
                    <p><strong>Published at:</strong> {{ $article->published_at->format('F j, Y g:i A') }}</p>
                @endif
                <p><strong>Created at:</strong> {{ $article->created_at->format('F j, Y g:i A') }}</p>
                <p><strong>Last updated:</strong> {{ $article->updated_at->format('F j, Y g:i A') }}</p>
            </div>
        </div>

        <a href="{{ route('admin.articles.index') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Articles</a>
    </div>
@endsection
