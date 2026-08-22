<header class="bg-white border-b border-slate-200 sticky top-0 z-30 shadow-sm">
    <div class="px-4 sm:px-6 lg:px-8 py-3.5">
        <div class="flex items-center justify-between">
            <!-- Left: Mobile Toggle & Page Title -->
            <div class="flex items-center space-x-3 sm:space-x-4">
                <!-- Mobile Hamburger Button -->
                <button @click="sidebarOpen = !sidebarOpen" type="button"
                    class="lg:hidden p-2 rounded-lg text-slate-500 hover:text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 transition-colors"
                    aria-label="Toggle sidebar">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Page Header Title -->
                <div>
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-800 tracking-tight">
                        @yield('header_title', 'Dashboard')
                    </h1>
                </div>
            </div>

            <!-- Right: Actions & User Profile -->
            <div class="flex items-center space-x-3 sm:space-x-4">
                <!-- Live Website Button -->
                <a href="{{ route('home') }}" target="_blank"
                    class="hidden sm:inline-flex items-center px-3.5 py-1.5 border border-slate-300 rounded-lg text-xs font-semibold text-slate-700 bg-white hover:bg-slate-50 hover:text-primary transition-all shadow-xs space-x-1.5">
                    <span>Lihat Website</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>

                <!-- User Dropdown -->
                <div x-data="{ userMenuOpen: false }" class="relative" @click.away="userMenuOpen = false">
                    <button @click="userMenuOpen = !userMenuOpen" type="button"
                        class="flex items-center space-x-3 p-1.5 rounded-xl hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 transition-all"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        
                        <div class="w-9 h-9 rounded-full bg-primary/10 text-primary border border-primary/20 flex items-center justify-center font-bold text-sm overflow-hidden flex-shrink-0">
                            @if (Auth::user()->avatar ?? false)
                                <img class="h-full w-full object-cover" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                            @else
                                <span>{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</span>
                            @endif
                        </div>

                        <div class="hidden md:block text-left">
                            <div class="text-sm font-semibold text-slate-800 leading-tight">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-slate-500 font-medium">Administrator</div>
                        </div>

                        <svg class="w-4 h-4 text-slate-400 hidden md:block transition-transform duration-200"
                            :class="{ 'rotate-180': userMenuOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="userMenuOpen"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                        class="absolute right-0 mt-2 w-56 rounded-2xl bg-white shadow-xl border border-slate-100 py-1.5 z-50 divide-y divide-slate-100"
                        role="menu" style="display: none;">
                        
                        <div class="px-4 py-3">
                            <p class="text-xs text-slate-400 font-medium">Login sebagai</p>
                            <p class="text-sm font-semibold text-slate-800 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="py-1">
                            <a href="{{ route('profile.edit') }}"
                                class="flex items-center px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                                role="menuitem">
                                <svg class="w-4 h-4 mr-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Profil Saya
                            </a>
                            <a href="{{ route('admin.settings.index') }}"
                                class="flex items-center px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                                role="menuitem">
                                <svg class="w-4 h-4 mr-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Pengaturan Situs
                            </a>
                            <a href="{{ route('home') }}" target="_blank"
                                class="sm:hidden flex items-center px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                                role="menuitem">
                                <svg class="w-4 h-4 mr-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                Lihat Website
                            </a>
                        </div>

                        <div class="py-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full flex items-center px-4 py-2 text-sm text-rose-600 hover:bg-rose-50 font-medium transition-colors"
                                    role="menuitem">
                                    <svg class="w-4 h-4 mr-2.5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Keluar (Logout)
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
