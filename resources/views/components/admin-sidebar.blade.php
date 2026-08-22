<div class="h-full flex flex-col justify-between bg-[#001d36] text-slate-200">
    <!-- Top Branding & Navigation -->
    <div class="flex-1 overflow-y-auto py-5 px-4 space-y-6 custom-scrollbar">
        <!-- Logo / App Name -->
        <div class="flex items-center space-x-3 px-2 pb-4 border-b border-slate-700/60">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-secondary to-orange-400 flex items-center justify-center text-white shadow-lg shadow-orange-500/20 flex-shrink-0 font-black text-xl tracking-wider">
                F
            </div>
            <div>
                <span class="text-lg font-bold text-white tracking-wide block leading-tight">FITALENTA</span>
                <span class="text-xs text-orange-400 font-medium tracking-wider uppercase">Admin Workspace</span>
            </div>
        </div>

        <!-- Navigation Menu Groups -->
        <nav class="space-y-4">
            <!-- Section: UTAMA -->
            <div>
                <p class="px-3 text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Utama</p>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.dashboard') ? 'bg-secondary text-white font-semibold shadow-md shadow-orange-950/20' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0 transition-colors {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-slate-400 group-hover:text-white' }}"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </div>

            <!-- Section: KONTEN -->
            <div x-data="{ open: {{ request()->routeIs('admin.articles.*', 'admin.categories.*', 'admin.events.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" type="button"
                    class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.articles.*', 'admin.categories.*', 'admin.events.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 text-slate-400 group-hover:text-white transition-colors"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <span>Manajemen Konten</span>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-7 space-y-1">
                    <a href="{{ route('admin.articles.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.articles.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Artikel</span>
                    </a>
                    <a href="{{ route('admin.categories.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.categories.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Kategori</span>
                    </a>
                    <a href="{{ route('admin.events.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.events.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Agenda & Event</span>
                    </a>
                </div>
            </div>

            <!-- Section: WEBSITE & MEDIA -->
            <div x-data="{ open: {{ request()->routeIs('admin.hero-slides.*', 'admin.gallery.*', 'admin.services.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" type="button"
                    class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.hero-slides.*', 'admin.gallery.*', 'admin.services.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 text-slate-400 group-hover:text-white transition-colors"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Media & Tampilan</span>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-7 space-y-1">
                    <a href="{{ route('admin.hero-slides.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.hero-slides.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Hero Slides</span>
                    </a>
                    <a href="{{ route('admin.gallery.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.gallery.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Galeri Foto</span>
                    </a>
                    <a href="{{ route('admin.services.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.services.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Layanan (Services)</span>
                    </a>
                </div>
            </div>

            <!-- Section: MITRA & TESTIMONI -->
            <div x-data="{ open: {{ request()->routeIs('admin.university-partners.*', 'admin.clients.*', 'admin.testimonials.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" type="button"
                    class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.university-partners.*', 'admin.clients.*', 'admin.testimonials.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 text-slate-400 group-hover:text-white transition-colors"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span>Mitra & Testimoni</span>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-7 space-y-1">
                    <a href="{{ route('admin.university-partners.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.university-partners.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Mitra Kampus</span>
                    </a>
                    <a href="{{ route('admin.clients.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.clients.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Klien Kami</span>
                    </a>
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.testimonials.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Testimoni</span>
                    </a>
                </div>
            </div>

            <!-- Section: PORTAL KARIR -->
            <div x-data="{ open: {{ request()->routeIs('admin.companies.*', 'admin.jobs.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" type="button"
                    class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.companies.*', 'admin.jobs.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 text-slate-400 group-hover:text-white transition-colors"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Portal Karir</span>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-7 space-y-1">
                    <a href="{{ route('admin.companies.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.companies.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Perusahaan Mitra</span>
                    </a>
                    <a href="{{ route('admin.jobs.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.jobs.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Lowongan Kerja</span>
                    </a>
                </div>
            </div>

            <!-- Section: SISTEM & PENGGUNA -->
            <div x-data="{ open: {{ request()->routeIs('admin.team-members.*', 'admin.users.*', 'admin.settings.*') ? 'true' : 'false' }} }">
                <button @click="open = !open" type="button"
                    class="flex items-center justify-between w-full px-3 py-2.5 rounded-xl text-sm font-medium transition-all group {{ request()->routeIs('admin.team-members.*', 'admin.users.*', 'admin.settings.*') ? 'bg-white/10 text-white' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 text-slate-400 group-hover:text-white transition-colors"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Sistem & Pengguna</span>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 pl-7 space-y-1">
                    <a href="{{ route('admin.team-members.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.team-members.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Anggota Tim</span>
                    </a>
                    <a href="{{ route('admin.users.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.users.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Manajemen Pengguna</span>
                    </a>
                    <a href="{{ route('admin.settings.index') }}"
                        class="flex items-center px-3 py-2 rounded-lg text-xs font-medium transition-colors {{ request()->routeIs('admin.settings.*') ? 'bg-secondary text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                        <span>Pengaturan Situs</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bottom User Section & Logout Button -->
    <div class="p-4 border-t border-slate-700/60 bg-[#00172b]">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full flex items-center justify-center space-x-2 px-3 py-2 rounded-xl text-xs font-semibold text-rose-400 hover:text-white hover:bg-rose-600/20 border border-rose-500/20 hover:border-rose-500/40 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Keluar Aplikasi</span>
            </button>
        </form>
    </div>
</div>
