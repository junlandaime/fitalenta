@props(['event'])


<div
    class="bg-gray-100 rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:-translate-y-1 hover:shadow-xl event-card">
    <div class="event-image overflow-hidden">
        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('images/default-event.jpg') }}"
            alt="{{ $event->title }}" class="w-full h-48 object-cover transition duration-300">
    </div>
    <div class="p-6">
        <div class="flex justify-between items-center mb-2">
            <span class="text-sm text-gray-600">{{ $event->event_date->diffForHumans() }}</span>
            {{-- <span class="text-sm text-gray-600">{{ $event->event_date->format('F j, Y') }}</span> --}}
            @if ($event->event_date->isPast())
                <span class="px-2 py-1 bg-gray-500 text-white text-xs rounded-full">Past</span>
            @else
                <span class="px-2 py-1 bg-green-500 text-white text-xs rounded-full">Upcoming</span>
            @endif
        </div>
        <h3 class="font-bold text-xl mb-2">{{ $event->title }}</h3>
        <p class="text-gray-700 mb-4">{!! Str::limit($event->description, 100) !!} </p>
        <a href="{{ route('events.show', $event) }}"
            class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-opacity-90 transition duration-300 mt-4">
            @if ($event->event_date->isPast())
                View Recap
            @else
                Learn More
            @endif
        </a>
    </div>
</div>
