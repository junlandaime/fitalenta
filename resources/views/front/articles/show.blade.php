@extends('layouts.app2')

@section('title', $article->title)

@section('meta_description')
    {{ Str::limit($article->excerpt, 160) }}
@endsection

@section('og_title', $article->title . ' - FITALENTABlogs')

@section('og_description')
    {{ Str::limit($article->excerpt, 200) }}
@endsection

@section('og_image', 'https://fitalenta.co.id/storage/' . $article->image)

@section('additional_meta_tags')
    <meta name="author" content="{{ $article->author->name }}">
    {{-- <meta name="published_date" content="{{ $article->published_at->toDateString() }}"> --}}
@endsection

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#004875] to-[#005792] text-white py-24 md:py-32">
        <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-white/5 rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <div class="inline-flex items-center px-4 py-2 mb-6 rounded-full bg-white/10 border border-white/20 text-sm font-medium backdrop-blur-sm">
                    FITALENTA Blog
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    {{ $article->title }}
                </h1>

            </div>
        </div>
    </section>


    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm flex-wrap">
                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li>
                    <a href="{{ route('articles.index') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition">
                        Events
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 truncate max-w-xs">
                    {{ $article->title }}
                </li>
            </ol>
        </div>
    </div>


    <!-- Article Content -->
    <section class="py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-12">

                <!-- Main Content -->
                <div class="lg:col-span-2">

                    <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100">

                        <!-- Article Image -->
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $article->image) }}"
                                 alt="{{ $article->title }}"
                                 class="w-full h-[300px] md:h-[450px] object-cover">
                        </div>

                        <div class="p-6 md:p-10">

                            <!-- Author & Date -->
                            <div class="flex items-center justify-between flex-wrap gap-4 mb-8 pb-6 border-b border-gray-100">

                                <div>
                                    <p class="font-bold text-gray-900">
                                        {{ $article->author->name }}
                                    </p>

                                    <p class="text-sm text-gray-500 mt-1">
                                        Published on {{ $article->event_date->format('F j, Y') }}
                                    </p>
                                </div>

                                <span class="px-4 py-2 rounded-full bg-[#00294B]/5 text-[#00294B] text-sm font-semibold">
                                    FITALENTA
                                </span>

                            </div>


                            <!-- Content -->
                            <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                                {!! $article->content !!}
                            </div>

                        </div>

                    </article>

                </div>


                <!-- Sidebar -->
                <div>

                    <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6 lg:p-7 sticky top-28">

                        @if ($relatedArticles->isNotEmpty())

                            <div class="mb-6">
                                <span class="text-xs font-bold uppercase tracking-wider text-[#005792]">
                                    Explore More
                                </span>

                                <h3 class="text-2xl font-bold text-[#00294B] mt-2">
                                    Related Articles
                                </h3>

                                <div class="w-12 h-1 bg-[#F15A24] rounded-full mt-3"></div>
                            </div>


                            <ul class="space-y-5">

                                @foreach ($relatedArticles as $relatedArticle)

                                    <li>
                                        <a href="{{ route('articles.show', $relatedArticle) }}"
                                           class="flex gap-4 group">

                                            <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0">
                                                <img src="{{ $relatedArticle->image ? asset('storage/' . $relatedArticle->image) : asset('images/default-article.jpg') }}"
                                                     alt="{{ $relatedArticle->title }}"
                                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                            </div>

                                            <div class="flex-1">

                                                <h4 class="font-semibold text-gray-900 leading-snug group-hover:text-[#005792] transition duration-300">
                                                    {{ $relatedArticle->title }}
                                                </h4>

                                            </div>

                                        </a>
                                    </li>

                                @endforeach

                            </ul>

                        @endif

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Share Section -->
    <section class="py-12 md:py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl mx-auto">

                <div class="bg-gray-50 rounded-3xl border border-gray-100 px-6 py-8 md:py-10">

                    <div class="text-center mb-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-[#005792]">
                            Share
                        </span>

                        <h3 class="text-2xl font-bold text-[#00294B] mt-2">
                            Share this article:
                        </h3>

                    </div>


                    <div class="flex justify-center items-center gap-3">

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                           target="_blank"
                           class="w-11 h-11 bg-blue-600 text-white rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition duration-300">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>

                        </a>


                        <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}"
                           target="_blank"
                           class="w-11 h-11 bg-blue-400 text-white rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition duration-300">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>

                        </a>


                        <a href="whatsapp://send?text={{ url()->current() }}"
                           target="_blank"
                           class="w-11 h-11 bg-green-600 text-white rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition duration-300">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.67-.51-.173-.008-.372.074-.57.372-.273.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982 1-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.437-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.439 9.884-9.887 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.89c0 2.096.547 4.142 1.588 5.945L.057 24l6.304-1.654a11.933 11.933 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.89a11.821 11.821 0 00-3.478-8.416"/>
                            </svg>

                        </a>


                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                           target="_blank"
                           class="w-11 h-11 bg-blue-700 text-white rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition duration-300">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.762 2.239 5 5 5h14c2.762 0 5-2.238 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/>
                            </svg>

                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>



    <!-- Comment Section -->
        {{-- <section class="py-20 bg-white px-4 lg:px-40">
            <section class="py-20 bg-white ">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold mb-8">Comments</h2>

                    <!-- Comment Form -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold mb-4">Leave a Comment</h3>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="comment" class="block text-gray-700 font-bold mb-2">Comment</label>
                                <textarea id="comment" name="comment" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                                    required></textarea>
                            </div>
                            <button type="submit"
                                class="bg-primary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition duration-300">Submit
                                Comment</button>
                        </form>
                    </div>

                    <!-- Existing Comments -->
                    <div class="space-y-8">
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <img src="https://picsum.photos/id/1027/60/60" alt="Commenter"
                                    class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <h4 class="font-bold">Jane Doe</h4>
                                    <p class="text-sm text-gray-600">Posted on August 20, 2024</p>
                                </div>
                            </div>
                            <p>Great article! I particularly found the section on best practices for implementing hybrid
                                work
                                models
                                very insightful. It's crucial for companies to focus on results rather than hours worked.
                            </p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <img src="https://picsum.photos/id/1028/60/60" alt="Commenter"
                                    class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <h4 class="font-bold">John Smith</h4>
                                    <p class="text-sm text-gray-600">Posted on August 21, 2024</p>
                                </div>
                            </div>
                            <p>As someone who has been working remotely for the past year, I can attest to the importance of
                                establishing clear communication protocols. It's been a game-changer for our team's
                                productivity
                                and
                                overall satisfaction.</p>
                        </div>
                    </div>
                </div>
            </section> --}}



    @endsection
