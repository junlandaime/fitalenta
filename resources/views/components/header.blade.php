<header x-data="{ isScrolled: false }"
        x-init="window.addEventListener('scroll', () => { isScrolled = window.pageYOffset > 50 })"
        :class="{ 'bg-transparent': !isScrolled, 'bg-primary/95 backdrop-blur-md shadow-lg': isScrolled }"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300 md:px-40">

    <div class="container mx-auto px-4 text-white pt-2">
        <div class="flex justify-end items-center py-2 text-[10px]">
            <div class="flex items-center space-x-4">
                <a href="https://www.facebook.com/people/PT-FAST-Indo-Talenta/61550075167981/" target="_blank"
                   class="w-7 h-7 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:text-secondary transition-all duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                {{-- <a href="#" class="hover:text-secondary transition duration-300"><i class="fab fa-twitter"></i></a> --}}
                <a href="https://www.linkedin.com/company/pt-fast-indo-talenta/" target="_blank"
                   class="w-7 h-7 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:text-secondary transition-all duration-300">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.instagram.com/fitalenta.id/" target="_blank"
                   class="w-7 h-7 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:text-secondary transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <nav x-data="{ open: false }" class="text-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between h-16">

                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0">
                        <img src="{{ asset('logo.png') }}" alt="FITALENTA"
                             class="h-24 md:h-28 w-auto object-contain transition-transform duration-300 hover:scale-105">
                    </a>
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-1">

                        <a href="{{ route('home') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('home*') ? 'bg-white/10 text-secondary' : '' }}">
                            Home
                        </a>

                        <a href="{{ route('events.index') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('events*') ? 'bg-white/10 text-secondary' : '' }}">
                            Event
                        </a>

                        <a href="{{ route('services') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('services*') ? 'bg-white/10 text-secondary' : '' }}">
                            Services
                        </a>

                        <a href="{{ route('articles.index') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('articles*') ? 'bg-white/10 text-secondary' : '' }}">
                            Blog
                        </a>

                        <a href="{{ route('gallery') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('gallery*') ? 'bg-white/10 text-secondary' : '' }}">
                            Gallery
                        </a>

                        <a href="{{ route('about') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('about*') ? 'bg-white/10 text-secondary' : '' }}">
                            About
                        </a>

                        <a href="{{ route('contact') }}"
                           class="px-4 py-2.5 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-white/10 hover:text-secondary {{ request()->routeIs('contact*') ? 'bg-white/10 text-secondary' : '' }}">
                            Contact
                        </a>

                        <a href="https://registrasi.fitalenta.co.id/register"
                           class="ml-2 px-5 py-2.5 rounded-lg text-sm font-semibold bg-white text-primary shadow-md hover:shadow-lg hover:bg-secondary hover:text-white transition-all duration-300">
                            Registrasi
                        </a>
                    </div>
                </div>

                <div class="mr-2 flex md:hidden">
                    <button @click="open = !open"
                            class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-white/10 hover:bg-white/20 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Open main menu</span>

                        <svg class="h-6 w-6" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="h-6 w-6" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="open" x-transition
             class="md:hidden bg-primary/95 backdrop-blur-md border-t border-white/10"
             style="display: none;">

            <div class="px-4 py-4 space-y-1">

                <a href="{{ route('home') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('home') ? 'bg-white/10 text-secondary' : '' }}">
                    Home
                </a>

                <a href="{{ route('events.index') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('events.index') ? 'bg-white/10 text-secondary' : '' }}">
                    Event
                </a>

                <a href="{{ route('services') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('services') ? 'bg-white/10 hover:text-secondary' : '' }}">
                    Services
                </a>

                <a href="{{ route('articles.index') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('articles.index') ? 'bg-white/10 text-secondary' : '' }}">
                    Blog
                </a>

                <a href="{{ route('gallery') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('gallery') ? 'bg-white/10 text-secondary' : '' }}">
                    Gallery
                </a>

                <a href="{{ route('about') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('about') ? 'bg-white/10 text-secondary' : '' }}">
                    About
                </a>

                <a href="{{ route('contact') }}"
                   class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white/10 hover:text-secondary transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-white/10 text-secondary' : '' }}">
                    Contact
                </a>

                <a href="https://registrasi.fitalenta.co.id/register"
                   class="block mt-2 px-4 py-3 rounded-lg text-sm font-semibold bg-white text-primary text-center hover:bg-secondary hover:text-white transition-all duration-300">
                    Registrasi
                </a>

            </div>
        </div>
    </nav>
</header>
