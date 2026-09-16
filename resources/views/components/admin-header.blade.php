<header
    class="sticky top-0 z-30 h-[76px] bg-white/95 backdrop-blur-xl border-b border-slate-200/80">

    <div class="h-full px-4 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-[1500px] h-full flex items-center justify-between gap-4">

            {{-- LEFT --}}
            <div class="flex items-center gap-3 min-w-0">

                {{-- MOBILE MENU --}}
                <button
                    @click="sidebarOpen = true"
                    type="button"
                    class="lg:hidden flex-shrink-0 w-10 h-10 rounded-xl border border-slate-200 bg-white text-[#00294B] flex items-center justify-center hover:bg-slate-50 transition">

                    <span class="sr-only">Buka menu</span>

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                </button>

                {{-- TITLE --}}
                <div class="min-w-0">

                    <div class="flex items-center gap-2">

                        <span class="hidden sm:block w-1.5 h-6 rounded-full bg-[#F15A24]"></span>

                        <h1 class="text-xl sm:text-2xl font-extrabold tracking-tight text-[#00294B] truncate">
                            @yield('header_title', 'Dashboard')
                        </h1>

                    </div>

                    <p class="hidden md:block mt-0.5 ml-3.5 text-[11px] font-medium text-slate-400">
                        FITALENTA Admin Management
                    </p>

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="flex items-center gap-2 sm:gap-3">

                {{-- VIEW WEBSITE --}}
                <a
                    href="{{ route('home') }}"
                    target="_blank"
                    class="hidden sm:inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-xs font-bold text-[#00294B] shadow-sm hover:border-[#F15A24]/40 hover:text-[#F15A24] hover:shadow-md transition-all">

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M14 3h7m0 0v7m0-7L10 14M5 5h5M5 5v14h14v-5" />
                    </svg>

                    <span>Lihat Website</span>

                </a>


                {{-- DIVIDER --}}
                <div class="hidden sm:block w-px h-8 bg-slate-200"></div>


                {{-- PROFILE DROPDOWN --}}
                <div
                    x-data="{ open: false }"
                    class="relative">

                    <button
                        @click="open = !open"
                        @click.outside="open = false"
                        type="button"
                        class="flex items-center gap-2 sm:gap-3 rounded-xl px-1.5 sm:px-2 py-1.5 hover:bg-slate-50 transition">

                        {{-- AVATAR --}}
                        <div
                            class="w-10 h-10 rounded-xl bg-[#00294B] text-white flex items-center justify-center text-sm font-extrabold shadow-sm">

                            {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}

                        </div>

                        {{-- USER --}}
                        <div class="hidden md:block text-left">

                            <p class="max-w-[150px] truncate text-xs font-bold text-slate-800">
                                {{ Auth::user()->name ?? 'Admin User' }}
                            </p>

                            <p class="mt-0.5 text-[10px] font-medium text-slate-400">
                                Administrator
                            </p>

                        </div>

                        <svg
                            class="hidden sm:block w-4 h-4 text-slate-400 transition-transform"
                            :class="{ 'rotate-180': open }"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>

                    </button>


                    {{-- DROPDOWN --}}
                    <div
                        x-cloak
                        x-show="open"
                        x-transition.origin.top.right
                        class="absolute right-0 mt-3 w-64 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl shadow-slate-900/10">

                        {{-- USER INFO --}}
                        <div class="border-b border-slate-100 p-4">

                            <div class="flex items-center gap-3">

                                <div
                                    class="w-11 h-11 flex-shrink-0 rounded-xl bg-[#00294B] text-white flex items-center justify-center font-extrabold">

                                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}

                                </div>

                                <div class="min-w-0">

                                    <p class="truncate text-sm font-bold text-[#00294B]">
                                        {{ Auth::user()->name ?? 'Admin User' }}
                                    </p>

                                    <p class="mt-0.5 truncate text-[11px] text-slate-400">
                                        {{ Auth::user()->email ?? '' }}
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- MENU --}}
                        <div class="p-2">

                            <a
                                href="{{ route('admin.settings.index') }}"
                                class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-[#00294B] transition">

                                <div class="w-8 h-8 rounded-lg bg-orange-50 text-[#F15A24] flex items-center justify-center">

                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 15.5A3.5 3.5 0 1012 8a3.5 3.5 0 000 7.5zM19 12a7 7 0 01-.2 1.7l2 1.5-2 3.4-2.4-1a7 7 0 01-2.8 1.6L13.3 22h-4l-.3-2.8a7 7 0 01-2.8-1.6l-2.4 1-2-3.4 2-1.5A7 7 0 013.6 12a7 7 0 01.2-1.7l-2-1.5 2-3.4 2.4 1A7 7 0 019 4.8L9.3 2h4l.3 2.8a7 7 0 012.8 1.6l2.4-1 2 3.4-2 1.5A7 7 0 0119 12z" />
                                    </svg>

                                </div>

                                <div>
                                    <p>Pengaturan Situs</p>
                                    <p class="mt-0.5 text-[10px] font-normal text-slate-400">
                                        Konfigurasi website
                                    </p>
                                </div>

                            </a>


                            {{-- MOBILE VIEW WEBSITE --}}
                            <a
                                href="{{ route('home') }}"
                                target="_blank"
                                class="sm:hidden flex items-center gap-3 rounded-xl px-3 py-2.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 transition">

                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">

                                    <svg
                                        class="w-4 h-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M14 3h7m0 0v7m0-7L10 14M5 5h5M5 5v14h14v-5" />
                                    </svg>

                                </div>

                                Lihat Website

                            </a>

                        </div>


                        {{-- LOGOUT --}}
                        <div class="border-t border-slate-100 p-2">

                            <form
                                method="POST"
                                action="{{ route('logout') }}">

                                @csrf

                                <button
                                    type="submit"
                                    class="w-full flex items-center gap-3 rounded-xl px-3 py-2.5 text-left text-xs font-semibold text-rose-500 hover:bg-rose-50 transition">

                                    <div class="w-8 h-8 rounded-lg bg-rose-50 flex items-center justify-center">

                                        <svg
                                            class="w-4 h-4"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>

                                    </div>

                                    Keluar dari Admin

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
