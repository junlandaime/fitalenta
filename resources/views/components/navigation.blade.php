<nav x-data="{ open: false }" class="bg-[#00294B] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="FITALENTA">
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('home') ? 'bg-[#003a6b]' : '' }}">Home</a>
                    <a href="{{ route('services') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('services') ? 'bg-[#003a6b]' : '' }}">Services</a>
                    <a href="{{ route('about') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('about') ? 'bg-[#003a6b]' : '' }}">About</a>
                    <a href="{{ route('contact') }}"
                        class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('contact') ? 'bg-[#003a6b]' : '' }}">Contact</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-[#003a6b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#00294B] focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="md:hidden" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('home') ? 'bg-[#003a6b]' : '' }}">Home</a>
            <a href="{{ route('services') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('services') ? 'bg-[#003a6b]' : '' }}">Services</a>
            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('about') ? 'bg-[#003a6b]' : '' }}">About</a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('contact') ? 'bg-[#003a6b]' : '' }}">Contact</a>
        </div>
    </div>
</nav>
