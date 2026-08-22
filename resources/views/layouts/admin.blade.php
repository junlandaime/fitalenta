<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FITALENTA') }} Admin - @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom inline scrollbar styling -->
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.4);
        }
    </style>

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="font-sans antialiased text-slate-800 bg-slate-50 h-full selection:bg-secondary selection:text-white"
    x-data="{ sidebarOpen: false }">

    <div class="min-h-full flex">
        <!-- Desktop Sidebar -->
        <aside class="hidden lg:flex lg:flex-col lg:w-72 lg:fixed lg:inset-y-0 z-40 shadow-xl">
            @include('components.admin-sidebar')
        </aside>

        <!-- Mobile Sidebar Overlay & Off-canvas -->
        <div x-show="sidebarOpen" class="relative z-50 lg:hidden" role="dialog" aria-modal="true" style="display: none;">
            <!-- Backdrop -->
            <div x-show="sidebarOpen"
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs" @click="sidebarOpen = false"></div>

            <div class="fixed inset-0 flex">
                <div x-show="sidebarOpen"
                    x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    class="relative mr-16 flex w-full max-w-xs flex-1">
                    
                    <!-- Close button on mobile -->
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button @click="sidebarOpen = false" type="button" class="-m-2.5 p-2.5 text-white hover:text-slate-200">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        @include('components.admin-sidebar')
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Wrapper -->
        <div class="flex-1 flex flex-col lg:pl-72 min-w-0">
            <!-- Header -->
            @include('components.admin-header')

            <!-- Main Content Section -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                <div class="max-w-7xl mx-auto">
                    <!-- Global Flash Alerts -->
                    @include('components.admin-alerts')

                    <!-- Page Specific Content -->
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 px-6 border-t border-slate-200 bg-white text-center text-xs text-slate-500">
                &copy; {{ date('Y') }} <span class="font-semibold text-slate-700">FITALENTA</span>. All rights reserved. Admin Management Panel.
            </footer>
        </div>
    </div>

    <!-- Additional Scripts -->
    @stack('scripts')
    @stack('script')
</body>

</html>
