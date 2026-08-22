@extends('layouts.app2')

@section('title', 'Blog Articles')

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .article-card:hover .article-image img {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#003E68] to-[#005792] text-white py-24 md:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_40%)]"></div>
        <div class="absolute -bottom-24 -left-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <span class="inline-flex items-center px-4 py-2 rounded-full
                             bg-white/10 border border-white/20 backdrop-blur-sm
                             text-sm font-medium mb-6">
                    FITALENTA Blog
                </span>

                <h1 class="text-4xl md:text-6xl font-bold mb-5">
                    FITALENTA Blog
                </h1>

                <p class="text-lg md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    Insights, tips, and news from the world of business and talent
                    management
                </p>

            </div>
        </div>
    </section>


    <!-- Breadcrumb -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm">

                <li>
                    <a href="{{ route('home') }}"
                       class="text-[#005792] font-medium hover:text-[#00294B] transition duration-300">
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">/</li>

                <li class="text-gray-500 font-medium">
                    Blog
                </li>

            </ol>
        </div>
    </div>


    <!-- Featured Article -->
    @if ($articles)
        <section class="py-16 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-1 bg-[#F15A24] rounded-full"></div>

                    <span class="text-sm font-semibold uppercase tracking-wider text-[#005792]">
                        Featured Article
                    </span>
                </div>

                <div class="group bg-[#F7F9FC] rounded-3xl overflow-hidden
                            border border-gray-100 shadow-sm
                            hover:shadow-xl transition-all duration-300">

                    <div class="grid grid-cols-1 md:grid-cols-2">

                        <!-- Image -->
                        <div class="relative overflow-hidden min-h-[280px] md:min-h-[420px]">
                            <img src="{{ $articles->first()->image ? asset('storage/' . $articles->first()->image) : asset('images/default-article.jpg') }}"
                                 alt="{{ $articles->first()->title }}"
                                 class="w-full h-full object-cover
                                       transition-transform duration-700
                                       group-hover:scale-105">

                            <div class="absolute inset-0 bg-gradient-to-t
                                        from-black/20 to-transparent"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 md:p-12 flex flex-col justify-center">

                            {{-- <span class="text-secondary font-semibold">Newest</span> --}}

                            <h2 class="text-3xl md:text-4xl font-bold
                                       leading-tight text-[#00294B] mb-5
                                       group-hover:text-[#005792]
                                       transition-colors duration-300">
                                {{ $articles->first()->title }}
                            </h2>

                            <p class="text-gray-600 text-base md:text-lg leading-relaxed mb-8">
                                {{ $articles->first()->excerpt }}
                            </p>

                            <div>
                                <a href="{{ route('articles.show', $articles->first()) }}"
                                   class="inline-flex items-center gap-2
                                          bg-[#00294B] text-white
                                          px-6 py-3 rounded-xl
                                          font-semibold
                                          hover:bg-[#005792]
                                          transition-all duration-300
                                          shadow-sm hover:shadow-md">

                                    Read More

                                    <svg class="w-4 h-4 transition-transform duration-300
                                                group-hover:translate-x-1"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M9 5l7 7-7 7" />
                                    </svg>

                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
    @endif


    <!-- Articles -->
    <section class="py-20 bg-[#F7F9FC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($articles->isEmpty())

                <div class="bg-white rounded-3xl p-12 text-center border border-gray-100">
                    <p class="text-gray-600">
                        No articles found. Please try a different search or check back later
                        for new content.
                    </p>
                </div>

            @else

                <div class="text-center mb-12">
                    <span class="text-sm font-semibold uppercase tracking-wider text-[#005792]">
                        Latest Articles
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2">
                        Explore Our Articles
                    </h2>

                    <div class="w-14 h-1 bg-[#F15A24] mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                    @foreach ($articles->skip(1) as $article)
                        <x-article-card :article="$article" />
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $articles->links() }}
                </div>

            @endif

        </div>
    </section>


    <!-- CTA -->
    <section class="relative overflow-hidden py-20 bg-white">

        <div class="absolute -top-24 -right-24 w-72 h-72 bg-[#005792]/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-[#F15A24]/5 rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">

            <span class="text-sm font-semibold uppercase tracking-wider text-[#005792]">
                Stay Connected
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2 mb-4">
                Stay Updated with FITALENTA
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                Subscribe to our newsletter for the latest insights and industry trends.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      bg-[#00294B] text-white
                      px-8 py-3.5 rounded-xl
                      text-lg font-semibold
                      hover:bg-[#005792]
                      transition-all duration-300 shadow-sm">
                Get in Touch →
            </a>

            {{-- <form action="{{ route('newsletter.subscribe') }}" method="POST" class="max-w-md mx-auto">
                @csrf
                <div class="flex">
                    <input type="email" name="email" placeholder="Enter your email" required
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#00294B]">
                    <button type="submit"
                        class="bg-primary text-white px-6 py-2 rounded-r-md hover:bg-[#001f3b] transition duration-300">Subscribe</button>
                </div>
            </form> --}}

        </div>
    </section>

@endsection
