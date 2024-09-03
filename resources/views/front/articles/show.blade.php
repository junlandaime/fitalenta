@extends('layouts.app2')

@section('title', $article->title)

@section('content')

    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">{{ $article->title }}</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">Fitalenta Blog: Insights, tips, and news from the world of
                business and talent
                management</p>
        </div>
    </div>

    <div class="bg-gray-200 py-2 px-4 lg:px-40 ">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('articles.index') }}" class="text-primary">Events</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">{{ $article->title }}</li>
            </ol>
        </div>
    </div>

    <!-- Article Content -->
    <section class="py-20 bg-white px-4 lg:px-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Main Content -->
                <div class="w-full lg:w-2/3 px-4 mb-12 lg:mb-0">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                        class="w-full rounded-lg shadow-lg mb-8">
                    <div class="flex items-center mb-8">
                        <img src="{{ $article->author->avatar }}" alt="{{ $article->author->name }}"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-bold">{{ $article->author->name }}</p>
                            <p class="text-sm text-gray-600">Published on {{ $article->published_at->format('F j, Y') }} •
                                {{ $article->read_time }} min read</p>
                        </div>
                    </div>
                    <div class="prose max-w-none">
                        {!! $article->content !!}

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 px-4">
                    <div class="bg-gray-100 rounded-lg p-6 sticky top-28">
                        <h3 class="text-2xl font-bold mb-4">About the Author</h3>
                        <div class="flex items-center mb-4">
                            <img src="https://picsum.photos/id/1025/80/80" alt="Author"
                                class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <p class="font-bold">{{ $article->author->name }}</p>
                                <p class="text-sm text-gray-600">{{ $article->author->email }}</p>
                                <p class="text-sm text-gray-600">HR Specialist at FITALENTA</p>
                            </div>
                        </div>
                        <p class="text-sm mb-4">John Doe is a seasoned HR professional with over 15 years of experience in
                            talent management and organizational development.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-primary hover:text-secondary">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-secondary">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-secondary">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @if ($relatedArticles->isNotEmpty())
                        <div class="bg-gray-100 rounded-lg p-6 mt-8">
                            <h3 class="text-2xl font-bold mb-4">Related Articles</h3>
                            <ul class="space-y-4">
                                @foreach ($relatedArticles as $relatedArticle)
                                    <li>
                                        <a href="{{ route('articles.show', $relatedArticle) }}" class="flex items-center">
                                            <img src="{{ $relatedArticle->image ? asset('storage/' . $relatedArticle->image) : asset('images/default-article.jpg') }}"
                                                alt="{{ $relatedArticle->title }}"
                                                class="w-16 h-16 object-cover rounded mr-4">
                                            <div>
                                                <h4 class="font-bold">{{ $relatedArticle->title }}</h4>
                                                <p class="text-sm text-gray-600">"{{ $relatedArticle->read_time }} min read
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Share Section -->
    <section class="py-20 bg-white px-4 lg:px-40">
        <section class="py-8 bg-gray-100 ">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <h3 class="text-xl font-bold mr-4">Share this article:</h3>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-blue-400 text-white p-2 rounded-full hover:bg-blue-500 transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-green-600 text-white p-2 rounded-full hover:bg-green-700 transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-blue-700 text-white p-2 rounded-full hover:bg-blue-800 transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comment Section -->
        <section class="py-20 bg-white px-4 lg:px-40">
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
            </section>



        @endsection
