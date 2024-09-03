@props(['article'])

{{-- <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img class="w-full h-48 object-cover object-center"
        src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.jpg') }}"
        alt="{{ $article->title }}">
    <div class="p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $article->title }}</h2>
        <p class="text-gray-600 text-sm mb-4">{{ $article->excerpt }}</p>
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            {{ $article->author->name }}
        </div>
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            {{ $article->created_at->format('F j, Y') }}
        </div>
        <a href="{{ route('articles.show', $article) }}"
            class="inline-block bg-[#00294B] text-white py-2 px-4 rounded hover:bg-[#001f3b] transition duration-300">
            Read More
        </a>
    </div>
</div> --}}

<div
    class="bg-gray-100 rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:-translate-y-1 hover:shadow-xl article-card">
    <div class="article-image overflow-hidden">
        <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.jpg') }}"
            alt="{{ $article->title }}" class="w-full h-48 object-cover transition duration-300">
    </div>
    <div class="p-6">
        <span class="text-sm text-secondary font-semibold">{{ $article->category->name }}</span>
        <h3 class="font-bold text-xl mb-2 mt-1">{{ $article->title }}</h3>
        <p class="text-gray-700 mb-4">{{ $article->excerpt }}</p>
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            {{ $article->author->name }}
        </div>
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            {{ $article->created_at->format('F j, Y') }}
        </div>
        <a href="{{ route('articles.show', $article) }}"
            class="inline-block bg-[#00294B] text-white py-2 px-4 rounded hover:bg-[#001f3b] transition duration-300">
            Read More
        </a>
    </div>
</div>
