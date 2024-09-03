@extends('layouts.admin')

@section('title', 'Manage Articles')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Manage Articles</h1>
            <a href="{{ route('admin.articles.create') }}"
                class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Add New Article</a>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('admin.articles.index') }}" method="GET" class="mb-4">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Search articles..."
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2"
                        value="{{ request('search') }}">
                    <select name="status"
                        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                        <option value="">All Status</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published
                        </option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                    <button type="submit"
                        class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Search</button>
                </div>
            </form>

            @if ($articles->isEmpty())
                <p class="text-gray-600">No articles found.</p>
            @else
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="text-left py-2">Title</th>
                            <th class="text-left py-2">Author</th>
                            <th class="text-left py-2">Status</th>
                            <th class="text-left py-2">Created At</th>
                            <th class="text-left py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td class="py-2">{{ $article->title }}</td>
                                <td class="py-2">{{ $article->author->name }}</td>
                                <td class="py-2">
                                    @if ($article->published_at)
                                        <span
                                            class="bg-green-200 text-green-800 py-1 px-2 rounded-full text-xs">Published</span>
                                    @else
                                        <span
                                            class="bg-yellow-200 text-yellow-800 py-1 px-2 rounded-full text-xs">Draft</span>
                                    @endif
                                </td>
                                <td class="py-2">{{ $article->created_at->format('M d, Y') }}</td>
                                <td class="py-2">
                                    <a href="{{ route('admin.articles.edit', $article) }}"
                                        class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800"
                                            onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
