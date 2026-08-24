<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FITALENTA') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <link rel="icon" href="{{ asset('favicon.png') }}">


    {{-- meta text --}}
    <!-- Meta tags untuk SEO dan sharing -->
    <meta name="description"
        content="FITALENTA - Empowering businesses and careers through innovative talent management and business consulting solutions. Expert services in global recruitment, professional training, and business growth strategies.">

    <meta name="keywords"
        content="FITALENTA, business consulting, talent management, professional training, global recruitment, career development, business growth, HR solutions, Indonesia">

    <meta name="author" content="FITALENTA">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'FITALENTA - Empowering Businesses and Careers')">
    <meta property="og:description" content="@yield(
        'og_description',
        'Expert business consulting and talent management solutions for sustainable growth and
                                                success. Unlock your potential with FITALENTA.'
    )">
    <meta property="og:image" content="@yield('og_image', 'https://fitalenta.co.id/landing.png')">

    <!-- Additional meta tags -->
    @yield('additional_meta_tags')

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.fitalenta.co.id/">
    <meta property="twitter:title" content="FITALENTA - Empowering Businesses and Careers">
    <meta property="twitter:description"
        content="Expert business consulting and talent management solutions for sustainable growth and success. Unlock your potential with FITALENTA.">
    <meta property="twitter:image" content="https://www.fitalenta.co.id/images/twitter-image.jpg">

    <!-- Tambahan meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="FITALENTA">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <!-- Additional Styles -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            countVisit();
            displayStats();
        });
    </script>
    @stack('scriptwal')
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('components.header')

        <!-- Page Heading -->
        @hasSection('header')
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    <!-- Additional Scripts -->
    @stack('scripts')

    <!-- Chatbot FITALENTA AI -->
    <div id="chatbot-container" class="fixed bottom-5 right-5 sm:bottom-6 sm:right-6 z-[9999]">

        <!-- Tombol Chat -->
        <button id="chatbot-toggle"
                class="flex items-center gap-2 bg-[#050B91] hover:bg-[#0710B5] text-white px-5 py-3 rounded-full shadow-xl transition-all duration-300 hover:scale-105">

            <i class="fas fa-robot text-lg"></i>

            <span class="font-semibold text-sm">
            Tanya FITALENTA AI
        </span>

        </button>


        <!-- Kotak Chat -->
        <div id="chatbot-box"
             class="hidden fixed sm:absolute bottom-0 sm:bottom-20 right-0
        w-full sm:w-[380px] h-[100dvh] sm:h-[560px]
        bg-[#18191D] rounded-none sm:rounded-[24px]
        shadow-2xl overflow-hidden border border-gray-700">

            <div class="flex flex-col h-full">


                <!-- ================= HEADER ================= -->
                <div
                    class="bg-gradient-to-r from-[#020A8F] to-[#0815C5] text-white px-4 py-4 flex items-center justify-between shrink-0">

                    <div class="flex items-center gap-3">

                        <!-- Icon Robot -->
                        <div class="w-11 h-11 rounded-xl bg-[#06108F] flex items-center justify-center shrink-0">
                            <i class="fas fa-robot text-lg text-gray-200"></i>
                        </div>

                        <!-- Judul -->
                        <div>
                            <h3 class="font-bold text-lg leading-tight">
                                FITALENTA AI Assistant
                            </h3>

                            <p class="text-xs text-gray-300 mt-1">
                                Virtual Career Assistant
                            </p>
                        </div>

                    </div>


                    <!-- Header Buttons -->
                    <div class="flex items-center gap-4">

                        <!-- Hapus Chat -->
                        <button id="chatbot-clear"
                                type="button"
                                title="Hapus percakapan"
                                class="text-gray-200 hover:text-white transition text-base">

                            <i class="fas fa-trash-alt"></i>

                        </button>


                        <!-- Tutup -->
                        <button id="chatbot-close"
                                type="button"
                                class="text-gray-200 hover:text-white transition text-2xl leading-none">

                            &times;

                        </button>

                    </div>

                </div>


                <!-- ================= MESSAGES ================= -->
                <div id="chatbot-messages"
                     class="flex-1 overflow-y-auto px-4 py-4 space-y-4 bg-[#191A1E]">

                    <!-- Pesan Awal -->
                    <div class="flex justify-start items-start gap-2.5">

                        <!-- Icon AI -->
                        <div
                            class="w-9 h-9 shrink-0 rounded-xl bg-[#050B91] flex items-center justify-center">

                            <i class="fas fa-robot text-sm text-gray-200"></i>

                        </div>


                        <!-- Bubble AI -->
                        <div
                            class="bg-[#202125] border border-gray-600 text-gray-100 rounded-2xl rounded-tl-none px-4 py-3 shadow-sm max-w-[82%] text-sm leading-relaxed">

                            <p>
                                Halo! 👋
                            </p>

                            <p class="mt-2">
                                Saya <strong>FITALENTA AI Assistant</strong>.
                                Ada yang ingin Anda tanyakan mengenai program,
                                layanan, karier, atau informasi FITALENTA?
                            </p>

                        </div>

                    </div>

                </div>


                <!-- ================= TOP FAQ ================= -->
                <div class="shrink-0 bg-[#191A1E] border-t border-gray-700 px-3 py-2.5">

                    <div class="flex items-center gap-2">

                        <!-- Label -->
                        <span class="text-gray-300 font-bold text-xs whitespace-nowrap shrink-0">
            TOP FAQ:
        </span>

                        <!-- FAQ Scroll -->
                        <div class="flex gap-2 overflow-x-auto chatbot-faq-scroll pb-1">

                            <button type="button"
                                    class="chatbot-faq bg-[#444549] hover:bg-[#55565A] text-gray-200 px-4 py-2 rounded-full whitespace-nowrap text-xs transition"
                                    data-question="Apakah program tersedia secara online?">

                                Apakah program tersedia secara online?

                            </button>

                            <button type="button"
                                    class="chatbot-faq bg-[#444549] hover:bg-[#55565A] text-gray-200 px-4 py-2 rounded-full whitespace-nowrap text-xs transition"
                                    data-question="Bagaimana cara mendaftar program FITALENTA?">

                                Bagaimana cara mendaftar?

                            </button>

                            <button type="button"
                                    class="chatbot-faq bg-[#444549] hover:bg-[#55565A] text-gray-200 px-4 py-2 rounded-full whitespace-nowrap text-xs transition"
                                    data-question="Apa saja program yang tersedia di FITALENTA?">

                                Program yang tersedia

                            </button>

                            <button type="button"
                                    class="chatbot-faq bg-[#444549] hover:bg-[#55565A] text-gray-200 px-4 py-2 rounded-full whitespace-nowrap text-xs transition"
                                    data-question="Apa saja layanan FITALENTA?">

                                Layanan FITALENTA

                            </button>

                            <button type="button"
                                    class="chatbot-faq bg-[#444549] hover:bg-[#55565A] text-gray-200 px-4 py-2 rounded-full whitespace-nowrap text-xs transition"
                                    data-question="Bagaimana cara menghubungi FITALENTA?">

                                Cara menghubungi FITALENTA

                            </button>

                        </div>

                    </div>

                </div>


                <!-- ================= INPUT ================= -->
                <div class="shrink-0 bg-[#191A1E] px-3.5 pb-4 pt-2.5">

                    <form id="chatbot-form"
                          class="flex items-center gap-2">

                        <!-- Input -->
                        <input
                            type="text"
                            id="chatbot-input"
                            placeholder="Ketik pertanyaan Anda..."
                            autocomplete="off"
                            class="flex-1 h-12 bg-[#202125] border border-gray-500 focus:border-[#2434FF] focus:ring-2 focus:ring-[#2434FF] text-white placeholder-gray-400 rounded-xl px-4 text-sm outline-none transition">


                        <!-- Send -->
                        <button
                            type="submit"
                            class="w-12 h-12 shrink-0 rounded-xl bg-[#050B91] hover:bg-[#0710B5] text-white flex items-center justify-center transition">

                            <i class="fas fa-paper-plane text-base"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>


    <!-- ================= CHATBOT SCRIPT ================= -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const chatbotToggle = document.getElementById('chatbot-toggle');
            const chatbotBox = document.getElementById('chatbot-box');
            const chatbotClose = document.getElementById('chatbot-close');
            const chatbotClear = document.getElementById('chatbot-clear');
            const chatbotForm = document.getElementById('chatbot-form');
            const chatbotInput = document.getElementById('chatbot-input');
            const chatbotMessages = document.getElementById('chatbot-messages');
            const faqButtons = document.querySelectorAll('.chatbot-faq');


            // ================= BUKA CHATBOT =================

            chatbotToggle.addEventListener('click', function () {

                chatbotBox.classList.remove('hidden');

                chatbotInput.focus();

            });


            // ================= TUTUP CHATBOT =================

            chatbotClose.addEventListener('click', function () {

                chatbotBox.classList.add('hidden');

            });


            // ================= HAPUS CHAT =================

            chatbotClear.addEventListener('click', function () {

                chatbotMessages.innerHTML = `

                <div class="flex justify-start items-start gap-2.5">

                    <div
                        class="w-9 h-9 shrink-0 rounded-xl bg-[#050B91] flex items-center justify-center">

                        <i class="fas fa-robot text-sm text-gray-200"></i>

                    </div>

                    <div
                        class="bg-[#202125] border border-gray-600 text-gray-100 rounded-2xl rounded-tl-none px-4 py-3 shadow-sm max-w-[82%] text-sm leading-relaxed">

                        <p>
                            Halo! 👋
                        </p>

                        <p class="mt-2">
                            Saya <strong>FITALENTA AI Assistant</strong>.
                            Ada yang ingin Anda tanyakan mengenai program,
                            layanan, karier, atau informasi FITALENTA?
                        </p>

                    </div>

                </div>

            `;

            });


            // ================= FUNGSI KIRIM PESAN =================

            function sendMessage(question) {

                const message = question.trim();

                if (!message) {
                    return;
                }


                // Tampilkan pesan user

                chatbotMessages.innerHTML += `

                <div class="flex justify-end">

                    <div
                        class="bg-[#050B91] text-white rounded-2xl rounded-tr-none px-4 py-3 max-w-[82%] text-sm leading-relaxed shadow-lg">

                        ${message}

                    </div>

                </div>

            `;


                // Kosongkan input

                chatbotInput.value = '';


                // Scroll ke bawah

                chatbotMessages.scrollTop = chatbotMessages.scrollHeight;


                // ================= LOADING =================

                const loadingId = 'chatbot-loading-' + Date.now();

                chatbotMessages.innerHTML += `

                <div id="${loadingId}" class="flex justify-start items-start gap-2.5">

                    <div
                        class="w-9 h-9 shrink-0 rounded-xl bg-[#050B91] flex items-center justify-center">

                        <i class="fas fa-robot text-sm text-gray-200"></i>

                    </div>

                    <div
                        class="bg-[#202125] border border-gray-600 text-gray-300 rounded-2xl rounded-tl-none px-4 py-3 text-sm">

                        <span class="animate-pulse">
                            ...
                        </span>

                    </div>

                </div>

            `;


                chatbotMessages.scrollTop = chatbotMessages.scrollHeight;


                // ================= REQUEST KE N8N =================

                fetch('https://n8n-6xr7vvprsosz.jkt6.sumopod.my.id/webhook/fitalenta-chat', {

                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify({
                        message: message
                    })

                })


                    // ================= RESPONSE =================

                    .then(response => {

                        if (!response.ok) {
                            throw new Error('Gagal menghubungi chatbot');
                        }

                        return response.json();

                    })


                    .then(data => {

                        // Hapus loading

                        const loadingElement =
                            document.getElementById(loadingId);

                        if (loadingElement) {
                            loadingElement.remove();
                        }


                        // Ambil jawaban

                        const reply = data.reply ||
                            'Maaf, saya belum dapat memberikan jawaban saat ini.';


                        // Tampilkan jawaban AI

                        chatbotMessages.innerHTML += `

                        <div class="flex justify-start items-start gap-2.5">

                            <div
                                class="w-9 h-9 shrink-0 rounded-xl bg-[#050B91] flex items-center justify-center">

                                <i class="fas fa-robot text-sm text-gray-200"></i>

                            </div>

                            <div
                                class="bg-[#202125] border border-gray-600 text-gray-100 rounded-2xl rounded-tl-none px-4 py-3 shadow-sm max-w-[82%] text-sm leading-relaxed">

                                ${reply.replace(/\n/g, '<br>')}

                            </div>

                        </div>

                    `;


                        chatbotMessages.scrollTop =
                            chatbotMessages.scrollHeight;


                        // ================= HANDOFF WHATSAPP =================

                        if (data.needs_handoff && data.whatsapp_url) {

                            chatbotMessages.innerHTML += `

                            <div class="flex justify-start items-start gap-2.5">

                                <div class="w-9 shrink-0"></div>

                                <a
                                    href="${data.whatsapp_url}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center justify-center gap-2 w-full max-w-[82%] bg-[#050B91] hover:bg-[#0710B5] text-white px-4 py-3 rounded-xl font-semibold text-sm transition">

                                    <i class="fab fa-whatsapp text-lg"></i>

                                    Chat via WhatsApp

                                </a>

                            </div>

                        `;

                        }


                        chatbotMessages.scrollTop =
                            chatbotMessages.scrollHeight;

                    })


                    // ================= ERROR =================

                    .catch(error => {

                        console.error(error);


                        const loadingElement =
                            document.getElementById(loadingId);

                        if (loadingElement) {
                            loadingElement.remove();
                        }


                        chatbotMessages.innerHTML += `

                        <div class="flex justify-start items-start gap-2.5">

                            <div
                                class="w-9 h-9 shrink-0 rounded-xl bg-[#050B91] flex items-center justify-center">

                                <i class="fas fa-robot text-sm text-gray-200"></i>

                            </div>

                            <div
                                class="bg-red-950 border border-red-800 text-red-200 rounded-2xl rounded-tl-none px-4 py-3 max-w-[82%] text-sm">

                                Maaf, chatbot sedang mengalami gangguan.
                                Silakan coba lagi beberapa saat.

                            </div>

                        </div>

                    `;


                        chatbotMessages.scrollTop =
                            chatbotMessages.scrollHeight;

                    });

            }


            // ================= FORM SUBMIT =================

            chatbotForm.addEventListener('submit', function (e) {

                e.preventDefault();

                sendMessage(chatbotInput.value);

            });


            // ================= ENTER =================

            chatbotInput.addEventListener('keydown', function (e) {

                if (e.key === 'Enter') {

                    e.preventDefault();

                    chatbotForm.requestSubmit();

                }

            });


            // ================= FAQ =================

            faqButtons.forEach(function (button) {

                button.addEventListener('click', function () {

                    const question = this.dataset.question;

                    sendMessage(question);

                });

            });

        });
    </script>


    <!-- ================= CHATBOT STYLE ================= -->
    <style>

        /* ================= CHAT SCROLLBAR ================= */

        #chatbot-messages::-webkit-scrollbar {
            width: 6px;
        }

        #chatbot-messages::-webkit-scrollbar-track {
            background: #191A1E;
        }

        #chatbot-messages::-webkit-scrollbar-thumb {
            background: #55565A;
            border-radius: 999px;
        }


        /* ================= FAQ SCROLLBAR ================= */

        .chatbot-faq-scroll::-webkit-scrollbar {
            display: none;
        }

        .chatbot-faq-scroll {
            scrollbar-width: none;
        }


        /* ================= MOBILE ================= */

        @media (max-width: 639px) {

            #chatbot-container {
                bottom: 16px;
                right: 16px;
                left: auto;
            }


            #chatbot-toggle {
                position: fixed;
                right: 16px;
                bottom: 16px;
            }


            #chatbot-box {
                position: fixed;
                inset: 0;
                width: 100vw;
                height: 100dvh;
                border-radius: 0;
            }

        }

    </style>

    @push('scripts')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            document.addEventListener('DOMContentLoaded', function() {
                new Swiper('.hero-swiper', {
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

                new Swiper('.services-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 4,
                        },
                    },
                });

                new Swiper('.team-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });

                new Swiper('.testimonial-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });

                new Swiper('.clients-swiper', {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 3,
                        },
                        1024: {
                            slidesPerView: 5,
                        },
                    },
                });
            });
        </script>
    @endpush
</body>

</html>
