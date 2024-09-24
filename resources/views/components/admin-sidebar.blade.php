<nav class="mt-5">
    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.dashboard') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.dashboard') }}">
        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
        <span class="mx-3">Dashboard</span>
    </a>

    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.categories.*') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.categories.index') }}">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="mx-3">Categories</span>
    </a>

    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.events.*') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.events.index') }}">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="mx-3">Events</span>
    </a>

    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.articles.*') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.articles.index') }}">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
        </svg>
        <span class="mx-3">Articles</span>
    </a>

    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.services.*') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.services.index') }}">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2" />
        </svg>
        <span class="mx-3">Services</span>
    </a>
    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.users.*') ? 'bg-[#003a6b]' : '' }}"
        href="{{ route('admin.users.index') }}">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="mx-3">Users</span>
    </a>
    <a href="{{ route('admin.hero-slides.index') }}"
        class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.hero-slides.*') ? 'bg-[#003a6b]' : '' }}">
        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">

        </svg>
        <span class="mx-3">Hero Slides</span>
    </a>
    <a href="{{ route('admin.gallery.index') }}"
        class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.gallery.*') ? 'bg-[#003a6b]' : '' }}">
        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">

        </svg>
        <span class="mx-3">Gallery</span>
    </a>
    <a href="{{ route('admin.team-members.index') }}"
        class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.team-members.*') ? 'bg-[#003a6b]' : '' }}">
        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
        </svg>
        <span class="mx-3">Our Expert</span>
    </a>
    <a href="{{ route('admin.testimonials.index') }}"
        class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.testimonials.*') ? 'bg-[#003a6b]' : '' }}">
        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
            </path>
        </svg>
        <span class="mx-3">Testimonials</span>
    </a>
    <a href="{{ route('admin.clients.index') }}"
        class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b] {{ request()->routeIs('admin.clients.*') ? 'bg-[#003a6b]' : '' }}">
        <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
            </path>
        </svg>
        <span class="mx-3">Clients</span>
    </a>

    <a class="flex items-center mt-4 py-2 px-6 hover:bg-[#003a6b]" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="mx-3">Logout</span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
