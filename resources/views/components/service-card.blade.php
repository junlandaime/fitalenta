@props(['service'])

<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="service-card bg-white p-6 rounded-lg text-justify shadow-lg">
        <div class="service-icon w-20 h-20 mx-auto mb-4 bg-secondary rounded-full flex items-center justify-center">
            <i class="fas fa-{{ $service->icon }} text-3xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4">{{ $service->name }}</h3>
        <p class="text-gray-600">{!! Str::limit($service->short, 150) !!}</p>
        @if ($service->price)
            <p class="text-gray-700 font-bold mb-4">{{ $service->formatted_price }}</p>
        @endif
        <a href="{{ route('services.show', $service) }}"
            class="inline-block bg-secondary text-white py-2 px-4 rounded hover:bg-[#001f3b] transition duration-300 mt-4">
            Learn More
        </a>
    </div>
</div>
