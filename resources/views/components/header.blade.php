<header x-data="{ isScrolled: false }" x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 50 })"
    :class="{ 'bg-transparent': !isScrolled, 'bg-primary shadow-lg': isScrolled }"
    class="fixed w-full z-50 transition duration-300  md:px-40">
    <div class="container mx-auto px-4 text-white pt-2">
        <div class="flex justify-between items-center py-2 text-[10px]">
            <div class="flex items-center space-x-4 text-[10px] md:text-sm">
                <a href="mailto:info@fitalenta.co.id" class="hover:text-secondary transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>info@fitalenta.co.id
                </a>
                <a href="tel:+6285281791931" class="hover:text-secondary transition duration-300">
                    <i class="fas fa-phone mr-2"></i>+62 852 81791931
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://www.facebook.com/people/PT-FAST-Indo-Talenta/61550075167981/" target="_blank"
                    class="hover:text-secondary transition duration-300"><i class="fab fa-facebook-f"></i></a>
                {{-- <a href="#" class="hover:text-secondary transition duration-300"><i
                        class="fab fa-twitter"></i></a> --}}
                <a href="https://www.linkedin.com/company/pt-fast-indo-talenta/" target="_blank"
                    class="hover:text-secondary transition duration-300"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/fitalenta.id/" target="_blank"
                    class="hover:text-secondary transition duration-300"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <nav x-data="{ open: false }" class=" text-white">

        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0">
                        <img class="h-32 w-auto" src="{{ asset('logo.png') }}" alt="FITALENTA">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('home') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('home') ? 'bg-[#003a6b]' : '' }}">Home</a>
                        <a href="{{ route('events.index') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('events.index') ? 'bg-[#003a6b]' : '' }}">Event</a>
                        <a href="{{ route('services') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('services') ? 'bg-[#003a6b]' : '' }}">Services</a>
                        <a href="{{ route('articles.index') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('articles.index') ? 'bg-[#003a6b]' : '' }}">Blog</a>
                        <a href="{{ route('gallery') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('gallery') ? 'bg-[#003a6b]' : '' }}">Gallery</a>
                        <a href="{{ route('about') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('about') ? 'bg-[#003a6b]' : '' }}">About</a>
                        <a href="{{ route('contact') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium hover:bg-[#003a6b] {{ request()->routeIs('contact') ? 'bg-[#003a6b]' : '' }}">Contact</a>
                    </div>
                </div>
                <div class="mr-2 flex md:hidden">
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
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('home') ? 'bg-[#003a6b]' : '' }}">Home</a>
                <a href="{{ route('events.index') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('events.index') ? 'bg-[#003a6b]' : '' }}">Event</a>
                <a href="{{ route('services') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('services') ? 'bg-[#003a6b]' : '' }}">Services</a>
                <a href="{{ route('articles.index') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('articles.index') ? 'bg-[#003a6b]' : '' }}">Blog</a>
                <a href="{{ route('gallery') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('gallery') ? 'bg-[#003a6b]' : '' }}">Gallery</a>
                <a href="{{ route('about') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('about') ? 'bg-[#003a6b]' : '' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="px-3 py-2 rounded-md text-base font-medium hover:bg-[#003a6b] {{ request()->routeIs('contact') ? 'bg-[#003a6b]' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
</header>
