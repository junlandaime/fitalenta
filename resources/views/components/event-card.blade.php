@props(['event'])

<div
    class="h-full bg-white rounded-2xl overflow-hidden border border-gray-100
           shadow-sm hover:shadow-xl transition-all duration-300
           hover:-translate-y-1 flex flex-col group"
>

    {{-- Event Image --}}
    <div class="relative h-56 overflow-hidden bg-gray-100">
        <img
            src="{{ $event->image
                ? asset('storage/' . $event->image)
                : asset('images/default-event.jpg') }}"
            alt="{{ $event->title }}"
            class="w-full h-full object-cover transition-transform duration-500
                   group-hover:scale-105"
        >

        {{-- Status --}}
        <div class="absolute top-4 right-4">
            @if ($event->event_date->isPast())
                <span
                    class="inline-flex items-center px-3 py-1.5 rounded-full
                           bg-gray-800/80 backdrop-blur-sm text-white
                           text-xs font-semibold"
                >
                    Past Event
                </span>
            @else
                <span
                    class="inline-flex items-center px-3 py-1.5 rounded-full
                           bg-[#F15A24] text-white text-xs font-semibold
                           shadow-sm"
                >
                    Upcoming
                </span>
            @endif
        </div>
    </div>


    {{-- Event Content --}}
    <div class="flex flex-col flex-1 p-6">

        {{-- Date --}}
        <div class="flex items-center gap-2 mb-3">
            <svg
                class="w-4 h-4 text-[#F15A24]"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                />
            </svg>

            <span class="text-sm font-medium text-gray-500">
                {{ $event->event_date->diffForHumans() }}
            </span>
        </div>


        {{-- Title --}}
        <h3
            class="text-xl font-bold text-[#00294B] leading-snug
                   mb-3 line-clamp-2 group-hover:text-[#F15A24]
                   transition-colors duration-300"
        >
            {{ $event->title }}
        </h3>


        {{-- Description --}}
        <p class="text-sm text-gray-600 leading-6 line-clamp-3 mb-6">
            {!! Str::limit(strip_tags($event->description), 110) !!}
        </p>


        {{-- CTA --}}
        <div class="mt-auto pt-2">
            <a
                href="{{ route('events.show', $event) }}"
                class="inline-flex items-center justify-center gap-2
                       w-full px-5 py-3 rounded-xl
                       bg-[#00294B] text-white text-sm font-semibold
                       hover:bg-[#F15A24]
                       transition-all duration-300"
            >
                @if ($event->event_date->isPast())
                    View Recap
                @else
                    Learn More
                @endif

                <svg
                    class="w-4 h-4 transition-transform duration-300
                           group-hover:translate-x-1"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 5l7 7-7 7"
                    />
                </svg>
            </a>
        </div>

    </div>
</div>
