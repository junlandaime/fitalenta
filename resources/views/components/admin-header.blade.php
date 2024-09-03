<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-900">
                @yield('header_title', 'Dashboard')
            </h1>
            <div class="flex items-center">
                <div x-data="{ open: false }" class="ml-3 relative">
                    <div>
                        <button @click="open = !open"
                            class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#00294B]"
                            id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="{{ Auth::user()->avatar ?? asset('images/default-avatar.png') }}" alt="">
                            <span class="ml-3 text-gray-700">{{ Auth::user()->name }}</span>
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" @click.away="open = false"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
                        {{-- <a href="{{ route('admin.profile') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                            Profile</a>
                        <a href="{{ route('admin.settings') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Sign out</button>
                        </form>
                    </div>
                </div>
                <div class="ml-3 relative">
                    {{-- <a href="{{ route('admin.notifications') }}"
                        class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#00294B]">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</header>
