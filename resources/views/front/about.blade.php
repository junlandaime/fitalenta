@extends('layouts.app2')

@section('title', 'About FITALENTA')

@section('content')

    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">About FITALENTA</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">{{ $companyInfo['mission'] }}</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">About</li>
            </ol>
        </div>
    </div>



    <section class="py-20 bg-white lg:px-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://picsum.photos/id/1076/600/400" alt="FITALENTA Office" class="rounded-lg shadow-md">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                    <p class="mb-6">PT FAST Indo Talenta (FITALENTA) lahir dengan tekad kuat untuk menjembatani
                        kesenjangan antara dunia pendidikan dan dunia kerja di Indonesia. Semakin banyak lulusan baru yang
                        menghadapi tantangan dalam mencari pekerjaan, meskipun tingkat partisipasi tenaga kerja terus
                        meningkat. FITALENTA hadir sebagai solusi atas permasalahan ini, dengan menawarkan layanan
                        rekrutmen, pengembangan keterampilan, dan mentoring bisnis yang dirancang khusus untuk membantu
                        individu siap terjun ke dunia kerja. Visi perusahaan adalah menjadi mitra seumur hidup bagi setiap
                        individu dan perusahaan dalam meraih kesejahteraan finansial yang berkelanjutan. Melalui
                        program-program seperti kesempatan bekerja dan belajar di luar negeri, FITALENTA membantu memperluas
                        peluang karier bagi para talenta Indonesia, baik di tingkat nasional maupun global.</p>
                    <p class="mb-6">Sebagai bagian dari misinya, FITALENTA berfokus pada penciptaan ekosistem yang
                        mempercepat proses rekrutmen, dengan memanfaatkan teknologi terkini untuk menghubungkan
                        talenta-talenta unggul dengan kesempatan kerja yang sesuai, baik di dalam negeri maupun luar negeri.
                        Selain itu, FITALENTA ingin tumbuh bersama para mitra dan karyawan, membangun kolaborasi yang
                        berkelanjutan. Dengan semangat #EmpoweringPeople, FITALENTA berkomitmen untuk meningkatkan kualitas
                        sumber daya manusia Indonesia dan mewujudkan masa depan yang lebih sejahtera melalui akses yang
                        lebih mudah dan cepat ke dunia kerja.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission -->
    <section class="py-20 bg-primary text-white lg:px-40">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Vision and Mission</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="text-center">
                    <div class="text-5xl mb-4">🔭</div>
                    <h3 class="text-2xl font-bold mb-4">Vision</h3>
                    <p class="text-base mb-4">Menjadi life time partner untuk Perusahaan dan individu untuk
                        mencapai kesejahteraan finansial yang
                        berkesinambungan</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl mb-4">🎯</div>
                    <h3 class="text-2xl font-bold mb-4">Mission</h3>
                    <ol class="text-base  mb-4">
                        <li>Menjadi partner perusahaan Anda dalam mencapai tujuan finansial melalui <b>penyediaan tenaga
                                kerja handal</b>
                        </li>
                        <br>
                        <li><b>Meningkatkan kemampuan </b>karyawan perusahaan Anda <b>melalui pelatihan terkini</b>
                            sesuai kebutuhan industri
                        </li>
                        <br>
                        <li>Menjadi partner perusahaan untu kmencapai <b>pertumbuhan finansial </b> melalui
                            <b>pendampingan bisnis berbasis target</b>.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Our Journey</h2>
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 border-2 border-[#00294B] h-full"></div>
                <div class="space-y-12">
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <h3 class="text-2xl font-bold">2023</h3>
                            <p>FITALENTA was founded with the vision to empower businesses and individuals by bridging the
                                gap between talent and opportunity.</p>
                        </div>
                        <div class="w-4 h-4 bg-[#00294B] rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-4 h-4 bg-[#00294B] rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                        <div class="w-1/2 pl-8">
                            <h3 class="text-2xl font-bold">2024</h3>
                            <p>FITALENTA is strengthening its foundation and expanding into seven key services: Financial
                                Industry Services, Human Capital Program, Next Level Eduventures, Business Affiliate
                                Program, Marketing Program, Event Organizer, and STEMSpark. These services provide
                                comprehensive solutions, empowering individuals and businesses to grow in a competitive
                                market.</p>
                        </div>
                    </div>
                    <!-- Add more timeline items as needed -->
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Our Values</h2>
            <h2 class="text-2xl font-bold text-center mb-12">Value FAST</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>


                    <h3 class="text-xl font-bold mb-2">Forward Thinking</h3>
                    <p>Inovatif dan Proaktif
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Agile Mindset</h3>
                    <p>Berpikir & Bergerak Cepat
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Solution Oriented
                    </h3>
                    <p>Kreatif dan Komprehensif
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" viewBox="0 0 33 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.4574 13.9978V25.9412C32.4574 28.368 31.2102 30.6227 29.1582 31.9129L19.5555 37.9522C19.3528 38.0812 19.0824 37.9337 19.0824 37.6941V33.4673C19.0824 32.773 19.4265 32.1279 20.004 31.7409L26.1293 27.6553C26.9833 27.0839 27.4994 26.1255 27.4994 25.0995V16.8669C27.4994 16.2095 27.8496 15.6013 28.4209 15.2695L31.5358 13.4755C31.9474 13.2421 32.4574 13.537 32.4574 14.01V13.9978Z"
                            fill="#625DF5" />
                        <path
                            d="M31.714 10.4228L18.1486 18.2561C17.1963 18.8029 16.6127 19.8166 16.6127 20.9164V37.4184C16.6127 37.658 16.3546 37.8055 16.1519 37.6826L3.5818 30.3716C1.36391 29.0814 0 26.716 0 24.148V14.1582C0 11.1478 1.60352 8.3647 4.2146 6.85948L15.6542 0.248821C16.2256 -0.0829405 16.926 -0.0829405 17.4974 0.248821L20.3603 1.90149C20.9747 2.25782 20.9747 3.14252 20.3603 3.49886L6.70282 11.3813C5.75054 11.9281 5.16688 12.9418 5.16688 14.0415V23.5397C5.16688 24.6395 5.75054 25.6532 6.70282 26.2L11.2308 28.8111C11.3291 28.8663 11.4458 28.7988 11.4458 28.6882V19.2514C11.4458 17.3346 12.4656 15.5713 14.1245 14.6129L27.2475 7.03765C27.8618 6.68131 28.6237 6.71203 29.2073 7.11138L31.7693 8.86234C32.3283 9.24325 32.2976 10.0788 31.7078 10.4228H31.714Z"
                            fill="#625DF5" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Trustworthy
                    </h3>
                    <p>Berintegritas
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Meet Our Team</h2>
            <img class="rounded-3xl mb-12" src="{{ asset('direktur.jpg') }}" alt="direktur">
            <img class="rounded-3xl mb-12" src="{{ asset('manajemen.jpg') }}" alt="manajemen">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- @foreach ($teamMembers as $member)
                    <div class="bg-gray-100 p-6 rounded-lg text-center">
                        <img src="{{ asset('images/team/' . $member['image']) }}" alt="{{ $member['name'] }}"
                            class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-bold mb-2">{{ $member['name'] }}</h3>
                        <p class="text-gray-600 mb-2">{{ $member['position'] }}</p>
                        <p class="text-sm">{{ $member['bio'] }}</p>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>

    <div class="bg-[#00294B] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Join Our Team</h2>
            <p class="text-xl mb-8">We're always looking for talented individuals to join our growing team.</p>
            <a href="{{ route('contact') }}"
                class="bg-white text-[#00294B] px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">
                Call For possibility
            </a>
        </div>
    </div>
@endsection
