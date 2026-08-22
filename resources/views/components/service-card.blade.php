@props(['service'])

<div class="group h-full bg-white rounded-3xl overflow-hidden
            border border-gray-100 shadow-sm
            hover:shadow-xl hover:-translate-y-2
            transition-all duration-300">

    <div class="p-7 md:p-8 flex flex-col h-full">

        <div class="w-16 h-16 mb-6 bg-[#EEF5F9] rounded-2xl
                    flex items-center justify-center
                    text-[#005792]
                    group-hover:bg-[#005792] group-hover:text-white
                    transition-all duration-300">
            <i class="fas fa-{{ $service->icon }} text-2xl"></i>
        </div>

        <h3 class="text-xl font-bold mb-4 text-[#00294B]">
            {{ $service->name }}
        </h3>

        <p class="text-gray-600 leading-7 text-sm flex-1">
            {!! Str::limit($service->short, 150) !!}
        </p>

        @if ($service->price)
            <div class="mt-5">
                <p class="text-[#00294B] font-bold text-lg">
                    {{ $service->formatted_price }}
                </p>
            </div>
        @endif

        <div class="mt-6 pt-5 border-t border-gray-100">
            <a href="{{ route('services.show', $service) }}"
               class="inline-flex items-center justify-center
                      bg-[#00294B] text-white
                      py-2.5 px-6 rounded-xl
                      font-medium text-sm
                      hover:bg-[#005792]
                      transition-all duration-300">
                Learn More →
            </a>
        </div>

    </div>
</div>
