<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FITALENTA') }} Admin - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('components.admin-header')

        <div class="flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-[#00294B] text-white min-h-screen">
                @include('components.admin-sidebar')
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                <!-- Page Heading -->
                @hasSection('header')
                    <header class="bg-white shadow mb-6">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            @yield('header')
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Additional Scripts -->
    @stack('scripts')

    <script>
        // Simple JavaScript for toggling mobile menu
        function toggleMobileMenu() {
            const sidebar = document.querySelector('aside');
            sidebar.classList.toggle('hidden');
        }
    </script>
</body>

</html>
