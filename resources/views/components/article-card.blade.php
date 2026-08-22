@props(['article'])

<div class="group bg-white rounded-2xl overflow-hidden border border-gray-100
            shadow-sm hover:shadow-xl transition-all duration-300
            hover:-translate-y-1 h-full flex flex-col">

    <!-- Image -->
    <div class="relative overflow-hidden">
        <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.jpg') }}"
             alt="{{ $article->title }}"
             class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105">

        <!-- Category -->
        <div class="absolute top-4 left-4">
            <span class="inline-block px-3 py-1.5 rounded-full
                         bg-white/95 backdrop-blur-sm
                         text-xs uppercase tracking-wider
                         text-[#005792] font-semibold shadow-sm">
                {{ $article->category->name }}
            </span>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6 md:p-7 flex flex-col flex-1">

        <!-- Title -->
        <h3 class="font-bold text-xl leading-snug mb-3 text-[#00294B]
                   transition-colors duration-300
                   group-hover:text-[#005792]">
            {{ $article->title }}
        </h3>

        <!-- Excerpt -->
        <p class="text-gray-600 text-sm leading-6 mb-6">
            {{ $article->excerpt }}
        </p>

        <!-- Meta -->
        <div class="space-y-3 mb-6">

            <div class="flex items-center text-sm text-gray-500">
                <span class="w-8 h-8 rounded-full bg-[#00294B]/5
                             flex items-center justify-center mr-3 flex-shrink-0">
                    <svg class="h-4 w-4 text-[#005792]"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0z
                                 M12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>

                {{ $article->author->name }}
            </div>

            <div class="flex items-center text-sm text-gray-500">
                <span class="w-8 h-8 rounded-full bg-[#00294B]/5
                             flex items-center justify-center mr-3 flex-shrink-0">
                    <svg class="h-4 w-4 text-[#005792]"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10
                                 M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5
                                 a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </span>

                {{ $article->created_at->format('F j, Y') }}
            </div>

        </div>

        <!-- Button -->
        <div class="mt-auto">
            <a href="{{ route('articles.show', $article) }}"
               class="inline-flex items-center gap-2
                      bg-[#00294B] text-white
                      py-2.5 px-5 rounded-xl
                      font-medium text-sm
                      shadow-sm
                      hover:bg-[#005792]
                      hover:shadow-md
                      transition-all duration-300">

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
