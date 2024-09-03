<section class="py-20 bg-gray-100 lg:px-32">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Meet Our Visionaries</h2>
        <div class="swiper-container" x-data="{ swiper: null }" x-init="swiper = new Swiper($el, {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next-1',
                prevEl: '.swiper-button-prev-1',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        })">
            <div class="swiper-wrapper">
                @foreach ($members as $index => $member)
                    <div class="swiper-slide">
                        <div class="relative group" @mouseenter="activeProfile={{ $index }}"
                            @mouseleave="activeProfile=null">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                class="w-full h-80- object-cover rounded-lg shadow-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 p-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h3 class="text-xl font-semibold">{{ $member['name'] }}</h3>
                                <p>{{ $member['position'] }}</p>
                            </div>
                        </div>
                        <div x-show="activeProfile === {{ $index }}"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            class="mt-4 p-4 bg-white rounded-lg shadow-lg">
                            <p class="text-sm">Leading innovation in {{ strtolower($member['position']) }} with over 15
                                years of industry experience.</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next-1"></div>
            <div class="swiper-button-prev-1"></div>
        </div>
    </div>
</section>
