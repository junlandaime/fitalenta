@props(['service'])

<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
        <div class="flex items-center justify-center w-16 h-16 bg-[#00294B] text-white rounded-full mb-4">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                @switch($service->icon)
                    @case('briefcase')
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    @break

                    @case('users')
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    @break

                    @default
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                @endswitch
            </svg>
        </div>
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->name }}</h2>
        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($service->description, 100) }}</p>
        @if ($service->price)
            <p class="text-gray-700 font-bold mb-4">{{ $service->formatted_price }}</p>
        @endif
        <a href="{{ route('services.show', $service) }}"
            class="inline-block bg-[#00294B] text-white py-2 px-4 rounded hover:bg-[#001f3b] transition duration-300">
            Learn More
        </a>
    </div>
</div>
