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
                    <p class="mb-6">PT FAST Indo Talenta (FITALENTA) adalah Perusahaan yang bergerak dibidang Human
                        CapitalManagement,denganberfokuspada peopleempowermentmelaluilayanan
                        recruitment&assessment,penyediaantalent, pelatihan berbasis kompetensi, dan
                        pendampinganbisnisberbasistarget.
                        Empoweringpeople</p>
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
                            <p>FITALENTA is founded with a vision to empower businesses and individuals</p>
                        </div>
                        <div class="w-4 h-4 bg-[#00294B] rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-4 h-4 bg-[#00294B] rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                        <div class="w-1/2 pl-8">
                            <h3 class="text-2xl font-bold">2024</h3>
                            <p>Expansion of services and growing client base</p>
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Innovation</h3>
                    <p>We constantly seek new ways to improve and innovate in our services.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Collaboration</h3>
                    <p>We believe in the power of teamwork and partnership with our clients.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="h-12 w-12 text-[#00294B] mx-auto mb-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Excellence</h3>
                    <p>We strive for excellence in everything we do, ensuring the best results for our clients.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Meet Our Team</h2>
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
            {{-- <a href="{{ route('careers') }}"
                class="bg-white text-[#00294B] px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">
                View Open Positions
            </a> --}}
        </div>
    </div>
@endsection
