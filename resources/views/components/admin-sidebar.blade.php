<div class="h-full flex flex-col justify-between bg-[#00294B] text-slate-200">

    <!-- TOP -->
    <div class="flex-1 overflow-y-auto custom-scrollbar">

        <!-- BRAND -->
        <div class="px-5 pt-6 pb-5 border-b border-white/10">
            <div class="flex items-center gap-3">

                <div class="w-11 h-11 rounded-2xl bg-[#F15A24] flex items-center justify-center text-white font-extrabold text-xl shadow-lg shadow-orange-900/20">
                    F
                </div>

                <div>
                    <div class="text-[19px] font-extrabold tracking-wide text-white leading-tight">
                        FITALENTA
                    </div>

                    <div class="text-[10px] uppercase tracking-[0.2em] text-orange-300 font-semibold mt-1">
                        Admin Management
                    </div>
                </div>

            </div>
        </div>

        <!-- NAVIGATION -->
        <div class="px-4 py-5">

            <p class="px-3 mb-2 text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                Utama
            </p>

            <!-- DASHBOARD -->
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-3.5 py-3 rounded-xl text-sm font-semibold transition-all
                {{ request()->routeIs('admin.dashboard')
                    ? 'bg-[#F15A24] text-white shadow-lg shadow-orange-950/20'
                    : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l9-9 9 9M5 10v10h14V10M9 20v-6h6v6" />
                </svg>

                <span>Dashboard</span>
            </a>

            <div class="h-px bg-white/10 my-5"></div>

            <!-- MANAJEMEN KONTEN -->
            <div
                x-data="{ open: {{ request()->routeIs('admin.articles.*', 'admin.events.*') ? 'true' : 'false' }} }">

                <button
                    @click="open = !open"
                    type="button"
                    class="w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-sm font-medium transition-all
                    {{ request()->routeIs('admin.articles.*', 'admin.events.*')
                        ? 'bg-white/10 text-white'
                        : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13V7m0 13h2a2 2 0 002-2V9a2 2 0 00-2-2h-2" />
                        </svg>

                        <span>Manajemen Konten</span>
                    </div>

                    <svg
                        class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': open }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" x-transition class="mt-2 ml-8 space-y-1">

                    <a href="{{ route('admin.articles.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.articles.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Artikel
                    </a>

                    <a href="{{ route('admin.events.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.events.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Agenda & Event
                    </a>

                </div>
            </div>

            <!-- MEDIA -->
            <div
                x-data="{ open: {{ request()->routeIs('admin.hero-slides.*', 'admin.gallery.*', 'admin.services.*') ? 'true' : 'false' }} }"
                class="mt-1">

                <button
                    @click="open = !open"
                    type="button"
                    class="w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-sm font-medium transition-all
                    {{ request()->routeIs('admin.hero-slides.*', 'admin.gallery.*', 'admin.services.*')
                        ? 'bg-white/10 text-white'
                        : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4-4 4 4 4-4 4 4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        <span>Media & Tampilan</span>
                    </div>

                    <svg class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': open }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" x-transition class="mt-2 ml-8 space-y-1">

                    <a href="{{ route('admin.hero-slides.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.hero-slides.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Hero Slides
                    </a>

                    <a href="{{ route('admin.gallery.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.gallery.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Galeri Foto
                    </a>

                    <a href="{{ route('admin.services.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.services.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Layanan
                    </a>

                </div>
            </div>

            <!-- MITRA -->
            <div
                x-data="{ open: {{ request()->routeIs('admin.university-partners.*', 'admin.clients.*', 'admin.testimonials.*') ? 'true' : 'false' }} }"
                class="mt-1">

                <button
                    @click="open = !open"
                    type="button"
                    class="w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-sm font-medium transition-all
                    {{ request()->routeIs('admin.university-partners.*', 'admin.clients.*', 'admin.testimonials.*')
                        ? 'bg-white/10 text-white'
                        : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5-3M7 20H2v-2a3 3 0 015-3M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <span>Mitra & Testimoni</span>
                    </div>

                    <svg class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': open }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" x-transition class="mt-2 ml-8 space-y-1">

                    <a href="{{ route('admin.university-partners.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.university-partners.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Mitra Kampus
                    </a>

                    <a href="{{ route('admin.clients.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.clients.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Klien Kami
                    </a>

                    <a href="{{ route('admin.testimonials.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.testimonials.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Testimoni
                    </a>

                </div>
            </div>

            <!-- PORTAL KARIR -->
            <div
                x-data="{ open: {{ request()->routeIs('admin.companies.*', 'admin.jobs.*') ? 'true' : 'false' }} }"
                class="mt-1">

                <button
                    @click="open = !open"
                    type="button"
                    class="w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-sm font-medium transition-all
                    {{ request()->routeIs('admin.companies.*', 'admin.jobs.*')
                        ? 'bg-white/10 text-white'
                        : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4H8v2M5 20h14a2 2 0 002-2V8H3v10a2 2 0 002 2z" />
                        </svg>

                        <span>Portal Karir</span>
                    </div>

                    <svg class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': open }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" x-transition class="mt-2 ml-8 space-y-1">

                    <a href="{{ route('admin.companies.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.companies.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Perusahaan Mitra
                    </a>

                    <a href="{{ route('admin.jobs.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.jobs.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Lowongan Kerja
                    </a>

                </div>
            </div>

            <!-- SYSTEM -->
            <div
                x-data="{ open: {{ request()->routeIs('admin.team-members.*', 'admin.users.*', 'admin.settings.*') ? 'true' : 'false' }} }"
                class="mt-1">

                <button
                    @click="open = !open"
                    type="button"
                    class="w-full flex items-center justify-between px-3.5 py-3 rounded-xl text-sm font-medium transition-all
                    {{ request()->routeIs('admin.team-members.*', 'admin.users.*', 'admin.settings.*')
                        ? 'bg-white/10 text-white'
                        : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">

                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15.5A3.5 3.5 0 1012 8a3.5 3.5 0 000 7.5zM19.4 15a1.7 1.7 0 00.34 1.88l.06.06-2.12 2.12-.06-.06a1.7 1.7 0 00-1.88-.34 1.7 1.7 0 00-1.04 1.56V20h-3v-.08a1.7 1.7 0 00-1.04-1.56 1.7 1.7 0 00-1.88.34l-.06.06-2.12-2.12.06-.06A1.7 1.7 0 007 15a1.7 1.7 0 00-1.56-1.04H5v-3h.44A1.7 1.7 0 007 9.92a1.7 1.7 0 00-.34-1.88L6.6 7.98l2.12-2.12.06.06a1.7 1.7 0 001.88.34A1.7 1.7 0 0011.7 4.7V4h3v.7a1.7 1.7 0 001.04 1.56 1.7 1.7 0 001.88-.34l.06-.06 2.12 2.12-.06.06A1.7 1.7 0 0019.4 10a1.7 1.7 0 001.56 1.04H21v3h-.04A1.7 1.7 0 0019.4 15z" />
                        </svg>

                        <span>Sistem & Pengguna</span>
                    </div>

                    <svg class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': open }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="open" x-transition class="mt-2 ml-8 space-y-1">

                    <a href="{{ route('admin.team-members.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.team-members.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Anggota Tim
                    </a>

                    <a href="{{ route('admin.users.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.users.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Manajemen Pengguna
                    </a>

                    <a href="{{ route('admin.settings.index') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium transition
                        {{ request()->routeIs('admin.settings.*')
                            ? 'bg-[#F15A24] text-white'
                            : 'text-slate-400 hover:bg-white/10 hover:text-white' }}">
                        Pengaturan Situs
                    </a>

                </div>
            </div>

        </div>
    </div>

    <!-- BOTTOM USER AREA -->
    <div class="p-4 border-t border-white/10 bg-[#00233f]">

        <div class="mb-3 px-2 flex items-center gap-3">

            <div class="w-9 h-9 rounded-xl bg-white/10 border border-white/10 flex items-center justify-center text-white font-bold">
                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="min-w-0">
                <p class="text-xs font-semibold text-white truncate">
                    {{ Auth::user()->name ?? 'Administrator' }}
                </p>

                <p class="text-[10px] text-slate-400 truncate">
                    Administrator
                </p>
            </div>

        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="w-full flex items-center justify-center gap-2 px-3 py-2.5 rounded-xl text-xs font-semibold text-rose-300 border border-rose-400/20 hover:text-white hover:bg-rose-500/15 transition">

                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>

                <span>Keluar Aplikasi</span>
            </button>
        </form>

    </div>

</div>
