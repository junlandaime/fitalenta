<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitalenta.id - Platform Affiliate Syariah</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Header -->
    <header class="sticky top-0 bg-white/80 backdrop-blur-md shadow-sm z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center">
                        <span class="text-2xl font-bold text-green-600">Fitalenta</span>
                        <span class="text-gray-500">.id</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-green-600">Beranda</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">Produk</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">Tentang Kami</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">Kontak</a>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="px-4 py-2 text-gray-600 hover:text-green-600">Masuk</a>
                        <a href="#"
                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">Daftar</a>
                    </div>
                </div>

                <!-- Mobile Navigation Button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-600 hover:text-green-600" x-data="{ open: false }"
                        @click="open = !open" @click.outside="open = false">
                        <svg class="h-6 w-6" x-show="!open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" x-show="open" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>

                        <!-- Mobile Menu -->
                        <div x-show="open"
                            class="absolute top-16 right-0 left-0 bg-white shadow-lg rounded-b-lg py-2 px-4"
                            style="display: none;">
                            <a href="#" class="block py-2 text-gray-600 hover:text-green-600">Beranda</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-green-600">Produk</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-green-600">Tentang Kami</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-green-600">Kontak</a>
                            <div class="pt-2 mt-2 border-t border-gray-200">
                                <a href="#" class="block py-2 text-gray-600 hover:text-green-600">Masuk</a>
                                <a href="#"
                                    class="block py-2 mt-2 bg-green-600 text-white rounded-lg text-center hover:bg-green-700 transition-colors">Daftar</a>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!-- Breadcrumb -->
    <div class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-4 text-sm">
                <a href="/" class="text-green-600 hover:text-green-700">Home</a>
                <span class="text-gray-500">/</span>
                <span class="text-gray-600">Landing Page</span>
            </div>
        </div>
    </div>

    <!-- Hero Section with Floating Elements -->
    <section class="relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-green-50 py-20">
        <!-- Floating Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -right-8 top-20 w-64 h-64 bg-green-200 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute -left-8 bottom-20 w-96 h-96 bg-green-300 rounded-full opacity-10 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="space-y-8">
                    <span class="inline-block px-4 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">#1
                        Platform Affiliate Syariah</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Wujudkan Masa Depan <span class="text-green-600">Finansial</span> Syariah
                    </h1>
                    <p class="text-lg text-gray-600">
                        Bergabung dengan ribuan affiliate untuk menyediakan solusi keuangan syariah terbaik bagi
                        masyarakat Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transform hover:-translate-y-1 transition-all duration-300">
                            Mulai Sekarang
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 border-2 border-green-600 text-green-600 rounded-lg hover:bg-green-50 transform hover:-translate-y-1 transition-all duration-300">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                    <!-- Trust Badges -->
                    <div class="flex flex-wrap gap-6 items-center pt-8">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm font-medium">4.9/5 Rating</span>
                        </div>
                        <div class="h-4 w-px bg-gray-300"></div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium">Terpercaya</span>
                        </div>
                        <div class="h-4 w-px bg-gray-300"></div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span class="text-sm font-medium">100% Aman</span>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" class="relative">
                    <div class="relative z-10">
                        <img src="https://picsum.photos/600/400" alt="Hero Image" class="rounded-2xl shadow-2xl">
                        <!-- Floating Stats Card -->
                        <div
                            class="absolute -bottom-6 -left-6 bg-white rounded-lg shadow-lg p-4 transform hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="bg-green-100 p-3 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-600">Total Affiliate</div>
                                    <div class="text-xl font-bold text-gray-900">1,000+</div>
                                </div>
                            </div>
                        </div>
                        <!-- Floating Success Card -->
                        <div
                            class="absolute -top-6 -right-6 bg-white rounded-lg shadow-lg p-4 transform hover:-translate-y-1 transition-all duration-300">
                            <div class="flex items-center gap-4">
                                <div class="bg-green-100 p-3 rounded-lg">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-600">Success Rate</div>
                                    <div class="text-xl font-bold text-gray-900">95%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products with Cards Carousel -->
    <section class="py-20" x-data="{ activeSlide: 0 }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900">Produk Unggulan</h2>
                <p class="mt-4 text-lg text-gray-600">Pilihan produk terbaik untuk kebutuhan finansial Anda</p>
            </div>

            <div class="relative" data-aos="fade-up">
                <div class="flex overflow-x-auto gap-6 snap-x snap-mandatory hide-scrollbar pb-8">
                    <!-- Product Card 1 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <img src="https://picsum.photos/400/250" alt="Product 1"
                                    class="w-full h-48 object-cover">
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 bg-green-500 text-white text-sm font-medium rounded-full">
                                    Terpopuler
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Pembiayaan Motor</h3>
                                <p class="text-gray-600 mb-4">Syariah-compliant financing untuk kendaraan impian Anda
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-500">Mulai dari</span>
                                    <span class="text-lg font-bold text-green-600">Rp 1.5jt/bulan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <img src="https://picsum.photos/401/250" alt="Product 2"
                                    class="w-full h-48 object-cover">
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 bg-blue-500 text-white text-sm font-medium rounded-full">
                                    Best Seller
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Asuransi Syariah</h3>
                                <p class="text-gray-600 mb-4">Perlindungan menyeluruh untuk Anda dan keluarga</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-500">Premi mulai</span>
                                    <span class="text-lg font-bold text-green-600">Rp 200rb/bulan</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="snap-start flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <img src="https://picsum.photos/402/250" alt="Product 3"
                                    class="w-full h-48 object-cover">
                                <div
                                    class="absolute top-4 left-4 px-3 py-1 bg-purple-500 text-white text-sm font-medium rounded-full">
                                    New
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Wakaf Produktif</h3>
                                <p class="text-gray-600 mb-4">Investasi akhirat dengan manfaat berkelanjutan</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-gray-500">Minimal</span>
                                    <span class="text-lg font-bold text-green-600">Rp 100rb</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section with Interactive Cards -->
                <section class="py-20 bg-gradient-to-b from-white to-green-50">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center mb-16" data-aos="fade-up">
                            <span class="text-green-600 font-medium">Keunggulan Kami</span>
                            <h2 class="text-3xl font-bold text-gray-900 mt-2">Mengapa Memilih Fitalenta?</h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Feature Card 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300"
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="bg-green-100 rounded-lg w-12 h-12 flex items-center justify-center mb-6">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">100% Syariah</h3>
                                <p class="text-gray-600">Semua produk dan layanan kami telah mendapat sertifikasi dan
                                    pengawasan dari Dewan Syariah Nasional.</p>
                            </div>

                            <!-- Feature Card 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="bg-green-100 rounded-lg w-12 h-12 flex items-center justify-center mb-6">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Komisi Kompetitif</h3>
                                <p class="text-gray-600">Dapatkan komisi menarik untuk setiap transaksi yang berhasil
                                    dengan sistem bagi hasil yang transparan.</p>
                            </div>

                            <!-- Feature Card 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300"
                                data-aos="fade-up" data-aos-delay="300">
                                <div class="bg-green-100 rounded-lg w-12 h-12 flex items-center justify-center mb-6">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Support 24/7</h3>
                                <p class="text-gray-600">Tim support kami siap membantu Anda 24 jam sehari, 7 hari
                                    seminggu melalui berbagai channel komunikasi.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Achievement Stats with Animation -->
                <section class="py-20 bg-white" x-data="{ shown: false }" x-intersect="shown = true">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid md:grid-cols-4 gap-8 text-center">
                            <!-- Stat 1 -->
                            <div class="bg-gradient-to-br from-green-50 to-white rounded-lg p-6 shadow-lg">
                                <div class="text-4xl font-bold text-green-600 mb-2" x-data>
                                    <span x-text="shown ? '1000' : '0'"
                                        x-transition:enter="transition duration-[1500ms]">0</span>+
                                </div>
                                <div class="text-gray-600">Affiliate Aktif</div>
                            </div>

                            <!-- Stat 2 -->
                            <div class="bg-gradient-to-br from-green-50 to-white rounded-lg p-6 shadow-lg">
                                <div class="text-4xl font-bold text-green-600 mb-2" x-data>
                                    <span x-text="shown ? '50' : '0'"
                                        x-transition:enter="transition duration-[1500ms]">0</span>+
                                </div>
                                <div class="text-gray-600">Produk</div>
                            </div>

                            <!-- Stat 3 -->
                            <div class="bg-gradient-to-br from-green-50 to-white rounded-lg p-6 shadow-lg">
                                <div class="text-4xl font-bold text-green-600 mb-2" x-data>
                                    <span x-text="shown ? '25' : '0'"
                                        x-transition:enter="transition duration-[1500ms]">0</span>+
                                </div>
                                <div class="text-gray-600">Mitra</div>
                            </div>

                            <!-- Stat 4 -->
                            <div class="bg-gradient-to-br from-green-50 to-white rounded-lg p-6 shadow-lg">
                                <div class="text-4xl font-bold text-green-600 mb-2">24/7</div>
                                <div class="text-gray-600">Support Available</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Call to Action -->
                <section class="py-20 bg-green-600">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 md:p-12 text-center">
                            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                                Siap Memulai Perjalanan Affiliate Anda?
                            </h2>
                            <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto">
                                Bergabunglah dengan ribuan affiliate sukses lainnya dan mulai hasilkan pendapatan
                                tambahan dari produk syariah berkualitas.
                            </p>
                            <div class="flex flex-wrap justify-center gap-4">
                                <a href="#"
                                    class="inline-flex items-center px-6 py-3 bg-white text-green-600 rounded-lg hover:bg-green-50 transform hover:-translate-y-1 transition-all duration-300">
                                    Daftar Sekarang
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-6 py-3 border-2 border-white text-white rounded-lg hover:bg-white/10 transform hover:-translate-y-1 transition-all duration-300">
                                    Pelajari Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="bg-gray-900 text-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <!-- Company Info -->
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <span class="text-2xl font-bold text-green-500">Fitalenta</span>
                                    <span class="text-gray-400">.id</span>
                                </div>
                                <p class="text-gray-400">Platform Affiliate Syariah #1 di Indonesia yang menghubungkan
                                    produk keuangan syariah dengan masyarakat.</p>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-400 hover:text-green-500">
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-green-500">
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-green-500">
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Quick Links -->
                            <div>
                                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Tentang Kami</a>
                                    </li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Produk</a></li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Karir</a></li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Blog</a></li>
                                </ul>
                            </div>

                            <!-- Support -->
                            <div>
                                <h3 class="text-lg font-semibold mb-4">Support</h3>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">FAQ</a></li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Kebijakan
                                            Privasi</a></li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Syarat &
                                            Ketentuan</a></li>
                                    <li><a href="#" class="text-gray-400 hover:text-green-500">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Contact -->
                            <div>
                                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                                <ul class="space-y-2">
                                    <li class="flex items-start space-x-3">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-gray-400">Jl. Example No. 123, Jakarta Selatan</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-gray-400">info@fitalenta.id</span>
                                    </li>
                                    <li class="flex items-start space-x-3">
                                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <span class="text-gray-400">+62 812-3456-7890</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Bottom Footer -->
                        <div class="border-t border-gray-800 mt-12 pt-8">
                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <div class="text-gray-400 text-sm">
                                    © 2025 Fitalenta.id. All rights reserved.
                                </div>
                                <div class="mt-4 md:mt-0 flex items-center space-x-4">
                                    <img src="/api/placeholder/120/40" alt="OJK Logo" class="h-8">
                                    <img src="/api/placeholder/120/40" alt="DSN-MUI Logo" class="h-8">
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Alpine.js Initialization -->
                <script>
                    // Add this to your existing Alpine.js setup
                    document.addEventListener('alpine:init', () => {
                        Alpine.store('header', {
                            scrolled: false,
                            init() {
                                window.addEventListener('scroll', () => {
                                    this.scrolled = window.scrollY > 0
                                })
                            }
                        })
                    })
                </script>

                <style>
                    /* Add these styles to your existing styles */
                    .sticky-header {
                        transition: all 0.3s ease;
                    }

                    .sticky-header.scrolled {
                        background-color: rgba(255, 255, 255, 0.9);
                        backdrop-filter: blur(5px);
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            offset: 100
                        });
                    });
                </script>

                <style>
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    .hide-scrollbar {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                </style>

</body>

</html>
