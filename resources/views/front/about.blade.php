@extends('layouts.app2')

@section('title', 'About FITALENTA')

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#00294B] via-[#003E68] to-[#005792] text-white py-24 md:py-32">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.12),transparent_40%)]"></div>
        <div class="absolute -bottom-24 -left-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/5 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">

                <span class="inline-block px-4 py-2 mb-5 rounded-full bg-white/10 border border-white/20 text-sm font-medium backdrop-blur-sm">
                    FITALENTA About Us
                </span>

                <h1 class="text-4xl md:text-6xl font-bold mb-5">
                    About FITALENTA
                </h1>

                <p class="text-lg md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    {{ $companyInfo['mission'] }}
                </p>

            </div>
        </div>
    </section>

    {{-- Breadcrumb --}}
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <ol class="flex items-center text-sm">
                <li>
                    <a
                        href="{{ route('home') }}"
                        class="text-[#005792] hover:text-[#F15A24] transition"
                    >
                        Home
                    </a>
                </li>

                <li class="mx-3 text-gray-300">
                    /
                </li>

                <li class="text-gray-500">
                    About
                </li>
            </ol>
        </div>
    </div>


    {{-- Our Story --}}
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <div class="overflow-hidden rounded-3xl">
                    <img
                        src="https://picsum.photos/id/1076/600/400"
                        alt="FITALENTA Office"
                        class="w-full h-[350px] md:h-[450px] object-cover"
                    >
                </div>

                <div>
                <span class="text-[#F15A24] font-semibold uppercase tracking-wider text-sm">
                    About Us
                </span>

                    <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3 mb-6">
                        Our Story
                    </h2>

                    <div class="space-y-5">

                        <p class="text-gray-600 leading-relaxed">
                            PT FAST Indo Talenta (FITALENTA) lahir dengan tekad kuat untuk menjembatani
                            kesenjangan antara dunia pendidikan dan dunia kerja di Indonesia. Semakin banyak
                            lulusan baru yang menghadapi tantangan dalam mencari pekerjaan, meskipun tingkat
                            partisipasi tenaga kerja terus meningkat. FITALENTA hadir sebagai solusi atas
                            permasalahan ini, dengan menawarkan layanan rekrutmen, pengembangan keterampilan,
                            dan mentoring bisnis yang dirancang khusus untuk membantu individu siap terjun
                            ke dunia kerja.
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            Sebagai bagian dari misinya, FITALENTA berfokus pada penciptaan ekosistem yang
                            mempercepat proses rekrutmen dengan memanfaatkan teknologi terkini untuk
                            menghubungkan talenta-talenta unggul dengan kesempatan kerja yang sesuai.
                            Dengan semangat
                            <strong class="text-[#00294B]">#EmpoweringPeople</strong>,
                            FITALENTA berkomitmen untuk meningkatkan kualitas sumber daya manusia Indonesia.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Vision & Mission --}}
    <section class="py-20 md:py-24 bg-[#F5F9FC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
            <span class="text-[#F15A24] font-semibold uppercase tracking-wider text-sm">
                Our Directions
            </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3">
                    Our Vision and Mission
                </h2>

                <div class="w-12 h-1 bg-[#F15A24] mx-auto mt-5 rounded-full"></div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Vision --}}
                <div
                    class="bg-white border border-gray-100 rounded-3xl p-8 md:p-10 shadow-sm hover:shadow-md transition duration-300"
                >
                    <div class="w-14 h-14 bg-[#EAF3F8] rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-3xl">
                        🔭
                    </span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#00294B] mb-4">
                        Vision
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Menjadi life time partner untuk Perusahaan dan individu untuk
                        mencapai kesejahteraan finansial yang berkesinambungan.
                    </p>
                </div>


                {{-- Mission --}}
                <div
                    class="bg-white border border-gray-100 rounded-3xl p-8 md:p-10 shadow-sm hover:shadow-md transition duration-300"
                >
                    <div class="w-14 h-14 bg-[#EAF3F8] rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-3xl">
                        🎯
                    </span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#00294B] mb-6">
                        Mission
                    </h3>

                    <ol class="text-gray-600 leading-relaxed space-y-5 list-decimal list-inside">
                        <li>
                            Menjadi partner perusahaan Anda dalam mencapai tujuan finansial
                            melalui <strong class="text-[#00294B]">penyediaan tenaga kerja handal</strong>.
                        </li>

                        <li>
                            <strong class="text-[#00294B]">Meningkatkan kemampuan</strong>
                            karyawan perusahaan Anda melalui
                            <strong class="text-[#00294B]">pelatihan terkini</strong>
                            sesuai kebutuhan industri.
                        </li>

                        <li>
                            Menjadi partner perusahaan untuk mencapai
                            <strong class="text-[#00294B]">pertumbuhan finansial</strong>
                            melalui
                            <strong class="text-[#00294B]">pendampingan bisnis berbasis target</strong>.
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>


    {{-- Our Journey --}}
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-14">
            <span class="text-[#F15A24] font-semibold uppercase tracking-wider text-sm">
                Our Journey
            </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3">
                    Our Journey
                </h2>

                <div class="w-12 h-1 bg-[#F15A24] mx-auto mt-5 rounded-full"></div>
            </div>


            <div class="relative">

                {{-- Timeline Line --}}
                <div
                    class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-[#D8E5EC] md:-translate-x-1/2"
                ></div>


                <div class="space-y-14">

                    {{-- 2023 --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-2">

                        <div class="md:pr-12 pl-10 md:pl-0 md:text-right">
                            <div class="bg-[#F5F9FC] border border-gray-100 rounded-3xl p-7">
                                <h3 class="text-2xl font-bold text-[#00294B] mb-3">
                                    2023
                                </h3>

                                <p class="text-gray-600 leading-relaxed">
                                    FITALENTA was founded with the vision to empower businesses
                                    and individuals by bridging the gap between talent and opportunity.
                                </p>
                            </div>
                        </div>

                        <div
                            class="absolute left-4 md:left-1/2 top-8 w-3 h-3 bg-[#F15A24] rounded-full md:-translate-x-1/2 ring-4 ring-white"
                        ></div>

                    </div>


                    {{-- 2024 --}}
                    <div class="relative grid grid-cols-1 md:grid-cols-2">

                        <div class="hidden md:block"></div>

                        <div class="md:pl-12 pl-10">
                            <div class="bg-[#F5F9FC] border border-gray-100 rounded-3xl p-7">

                                <h3 class="text-2xl font-bold text-[#00294B] mb-3">
                                    2024
                                </h3>

                                <p class="text-gray-600 leading-relaxed">
                                    FITALENTA is strengthening its foundation and expanding into
                                    seven key services: Financial Industry Services, Human Capital
                                    Program, Next Level Eduventures, Business Affiliate Program,
                                    Marketing Program, Event Organizer, and STEMSpark. These services
                                    provide comprehensive solutions, empowering individuals and
                                    businesses to grow in a competitive market.
                                </p>

                            </div>
                        </div>

                        <div
                            class="absolute left-4 md:left-1/2 top-8 w-3 h-3 bg-[#F15A24] rounded-full md:-translate-x-1/2 ring-4 ring-white"
                        ></div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- Our Values --}}
    <section class="py-20 md:py-24 bg-[#F5F9FC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
            <span class="text-[#F15A24] font-semibold uppercase tracking-wider text-sm">
                Our Values
            </span>

                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-3">
                    Value FAST
                </h2>

                <div class="w-12 h-1 bg-[#F15A24] mx-auto mt-5 rounded-full"></div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                {{-- Forward Thinking --}}
                <div
                    class="bg-white p-7 rounded-3xl border border-gray-100 shadow-sm hover:-translate-y-1 hover:shadow-md transition duration-300"
                >
                    <div
                        class="w-14 h-14 bg-[#00294B] rounded-2xl flex items-center justify-center mb-5"
                    >
                        <svg
                            class="h-7 w-7 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-[#00294B]">
                        Forward Thinking
                    </h3>

                    <p class="text-gray-600">
                        Inovatif dan Proaktif
                    </p>
                </div>


                {{-- Agile Mindset --}}
                <div
                    class="bg-white p-7 rounded-3xl border border-gray-100 shadow-sm hover:-translate-y-1 hover:shadow-md transition duration-300"
                >
                    <div
                        class="w-14 h-14 bg-[#00294B] rounded-2xl flex items-center justify-center mb-5"
                    >
                        <svg
                            class="h-7 w-7 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-[#00294B]">
                        Agile Mindset
                    </h3>

                    <p class="text-gray-600">
                        Berpikir & Bergerak Cepat
                    </p>
                </div>


                {{-- Solution Oriented --}}
                <div
                    class="bg-white p-7 rounded-3xl border border-gray-100 shadow-sm hover:-translate-y-1 hover:shadow-md transition duration-300"
                >
                    <div
                        class="w-14 h-14 bg-[#00294B] rounded-2xl flex items-center justify-center mb-5"
                    >
                        <svg
                            class="h-7 w-7 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 013.138-3.138z"
                            />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-[#00294B]">
                        Solution Oriented
                    </h3>

                    <p class="text-gray-600">
                        Kreatif dan Komprehensif
                    </p>
                </div>


                {{-- Trustworthy --}}
                <div
                    class="bg-white p-7 rounded-3xl border border-gray-100 shadow-sm hover:-translate-y-1 hover:shadow-md transition duration-300"
                >
                    <div
                        class="w-14 h-14 bg-[#00294B] rounded-2xl flex items-center justify-center mb-5"
                    >
                        <svg
                            class="h-7 w-7 text-white"
                            viewBox="0 0 33 38"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M32.4574 13.9978V25.9412C32.4574 28.368 31.2102 30.6227 29.1582 31.9129L19.5555 37.9522C19.3528 38.0812 19.0824 37.9337 19.0824 37.6941V33.4673C19.0824 32.773 19.4265 32.1279 20.004 31.7409L26.1293 27.6553C26.9833 27.0839 27.4994 26.1255 27.4994 25.0995V16.8669C27.4994 16.2095 27.8496 15.6013 28.4209 15.2695L31.5358 13.4755C31.9474 13.2421 32.4574 13.537 32.4574 14.01V13.9978Z"
                                fill="currentColor"
                            />

                            <path
                                d="M31.714 10.4228L18.1486 18.2561C17.1963 18.8029 16.6127 19.8166 16.6127 20.9164V37.4184C16.6127 37.658 16.3546 37.8055 16.1519 37.6826L3.5818 30.3716C1.36391 29.0814 0 26.716 0 24.148V14.1582C0 11.1478 1.60352 8.3647 4.2146 6.85948L15.6542 0.248821C16.2256 -0.0829405 16.926 -0.0829405 17.4974 0.248821L20.3603 1.90149C20.9747 2.25782 20.9747 3.14252 20.3603 3.49886L6.70282 11.3813C5.75054 11.9281 5.16688 12.9418 5.16688 14.0415V23.5397C5.16688 24.6395 5.75054 25.6532 6.70282 26.2L11.2308 28.8111C11.3291 28.8663 11.4458 28.7988 11.4458 28.6882V19.2514C11.4458 17.3346 12.4656 15.5713 14.1245 14.6129L27.2475 7.03765C27.8618 6.68131 28.6237 6.71203 29.2073 7.11138L31.7693 8.86234C32.3283 9.24325 32.2974 10.0788 31.7078 10.4228H31.714Z"
                                fill="currentColor"
                            />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold mb-2 text-[#00294B]">
                        Trustworthy
                    </h3>

                    <p class="text-gray-600">
                        Berintegritas
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- Meet Our Team --}}
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mb-4">
                    Meet Our Team
                </h2>

                <p class="text-gray-600">
                    Kenali tim di balik FITALENTA
                </p>
            </div>


            <div class="space-y-8">

                <div class="overflow-hidden rounded-3xl border border-gray-100">
                    <img
                        src="{{ asset('direktur.jpg') }}"
                        alt="FITALENTA Director"
                        class="w-full"
                    >
                </div>

                <div class="overflow-hidden rounded-3xl border border-gray-100">
                    <img
                        src="{{ asset('fitalenta.jpg') }}"
                        alt="FITALENTA Team"
                        class="w-full"
                    >
                </div>

            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="relative overflow-hidden py-20 bg-white">

        <div class="absolute -top-24 -right-24 w-72 h-72 bg-[#005792]/5 rounded-full"></div>
        <div class="absolute -bottom-32 -left-20 w-80 h-80 bg-[#F15A24]/5 rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">


            <h2 class="text-3xl md:text-4xl font-bold text-[#00294B] mt-2 mb-4">
                Join Our Team
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                We're always looking for talented individuals to join our growing team.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      bg-[#00294B] text-white
                      px-8 py-3.5 rounded-xl
                      text-lg font-semibold
                      hover:bg-[#005792]
                      transition-all duration-300 shadow-sm">
                Call For Possibility
            </a>

        </div>
    </section>


@endsection
