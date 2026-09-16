<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FITALENTA') }} Admin - @yield('title', 'Dashboard')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.04);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.18);
            border-radius: 999px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.32);
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    @stack('styles')
</head>

<body
    class="font-sans antialiased text-slate-800 bg-[#f6f8fb] min-h-full selection:bg-[#f15a24] selection:text-white"
    x-data="{ sidebarOpen: false }">

    <div class="min-h-screen flex">

        <!-- Desktop Sidebar -->
        <aside
            class="hidden lg:flex lg:flex-col lg:w-72 lg:fixed lg:inset-y-0 z-40 border-r border-white/10 shadow-2xl shadow-slate-900/10">
            @include('components.admin-sidebar')
        </aside>

        <!-- Mobile Sidebar -->
        <div
            x-cloak
            x-show="sidebarOpen"
            class="relative z-50 lg:hidden"
            role="dialog"
            aria-modal="true">

            <div
                x-show="sidebarOpen"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm"
                @click="sidebarOpen = false">
            </div>

            <div class="fixed inset-0 flex">
                <div
                    x-show="sidebarOpen"
                    x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full"
                    class="relative flex w-full max-w-[18rem] flex-1">

                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button
                            @click="sidebarOpen = false"
                            type="button"
                            class="rounded-xl p-2.5 text-white hover:bg-white/10 transition">

                            <span class="sr-only">Tutup sidebar</span>

                            <svg
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        @include('components.admin-sidebar')
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Area -->
        <div class="flex min-h-screen flex-1 flex-col lg:pl-72 min-w-0">

            @include('components.admin-header')

            <main class="flex-1">
                <div class="px-4 py-5 sm:px-6 sm:py-6 lg:px-8 lg:py-8">

                    <div class="mx-auto w-full max-w-[1500px]">

                        @include('components.admin-alerts')

                        @yield('content')

                    </div>
                </div>
            </main>

            <footer class="mt-auto border-t border-slate-200/80 bg-white px-6 py-4">
                <div
                    class="mx-auto flex max-w-[1500px] flex-col items-center justify-between gap-2 text-center sm:flex-row sm:text-left">

                    <p class="text-xs text-slate-400">
                        &copy; {{ date('Y') }}
                        <span class="font-bold text-[#00294B]">FITALENTA</span>.
                        All rights reserved.
                    </p>

                    <p class="text-[11px] font-medium text-slate-400">
                        Admin Management Panel
                    </p>

                </div>
            </footer>

        </div>
    </div>

    @stack('scripts')
    @stack('script')

</body>

</html>
