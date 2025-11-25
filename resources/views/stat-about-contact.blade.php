@extends('layouts.app2')

@section('title', 'About FITALENTA')

@section('content')

    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">About FITALENTA</h1>
            {{-- <p class="text-xl md:text-2xl mb-8 text-center">{{ $companyInfo['mission'] }}</p> --}}
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Stat - About - Contact</li>
            </ol>
        </div>
    </div>

    <!-- Stats Section -->
    <section class="py-20 bg-gray-100 md:px-40" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Impact</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach ($stats as $stat)
                    <div x-data="{ count: 0 }" x-init="setInterval(() => { if (count < {{ $stat['value'] }}) count++ }, {{ $stat['duration'] }})" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="text-4xl font-bold text-primary mb-2" x-text="count + '+'"></div>
                        <div class="text-gray-600">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-white lg:px-40">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://picsum.photos/id/1076/600/400" alt="FITALENTA Office" class="rounded-lg shadow-md">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">{{ $companyStory['title'] }}</h2>
                    <div class="prose max-w-none">
                        {!! nl2br(e($companyStory['content'])) !!}
                    </div>
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
                        <div class="w-4 h-4 bg-primary rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-4 h-4 bg-primary rounded-full absolute left-1/2 transform -translate-x-1/2"></div>
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

    <div class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-bold mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                                required></textarea>
                        </div>
                        <a id="startcon" href="#" onclick="gettogetInputValue()"
                            class="bg-primary text-white px-6 py-3 rounded-md hover:bg-[#001f3b] transition duration-300">Send
                            Message</a>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold mb-1">Address</h3>
                                <p class="text-gray-600">{{ $contactInfo['address'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold mb-1">Phone</h3>
                                <p class="text-gray-600">{{ $contactInfo['phone'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold mb-1">Email</h3>
                                <p class="text-gray-600">{{ $contactInfo['email'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold mb-1">WhatsApp</h3>
                                <p class="text-gray-600">{{ $contactInfo['whatsapp'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Connect With Us on Social Media</h2>
            <div class="flex justify-center space-x-6">
                @if ($socialMedia['facebook'])
                    <a href="{{ $socialMedia['facebook'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                @if ($socialMedia['twitter'])
                    <a href="{{ $socialMedia['twitter'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                @endif

                @if ($socialMedia['instagram'])
                    <a href="{{ $socialMedia['instagram'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif

                @if ($socialMedia['linkedin'])
                    <a href="{{ $socialMedia['linkedin'] }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Connect With Us on Social Media</h2>
            <div class="flex justify-center space-x-6 mt-6">
                <a href="https://www.facebook.com/people/PT-FAST-Indo-Talenta/61550075167981/" target="_blank"
                    class="text-gray-400 hover:text-[#00294B]">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/fitalenta.id/" target="_blank"
                    class="text-gray-400 hover:text-[#00294B]">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                {{-- <a href="#" class="text-gray-400 hover:text-[#00294B]">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a> --}}
                <a href="https://www.linkedin.com/company/pt-fast-indo-talenta/" target="_blank"
                    class="text-gray-400 hover:text-[#00294B]">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg" x-data="{ show: true }"
            x-show="show" x-init="setTimeout(() => show = false, 3000)">
            {{ session('success') }}
        </div>
    @endif
    <!-- WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=6281110119273&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    <script>
        function gettogetInputValue() {
            let inputName = document.getElementById("name").value;
            let inputTopik = document.getElementById("subject").value;
            let email = document.getElementById("email").value;
            let inputMessage = document.getElementById("message").value;
            let tombol = document.getElementById('startcon')
            let hrefAwal =
                `https://wa.me/6281110119273?text=_Assalamualaikum_%20*Admin%20Fitalenta*%0A%0APerkenalkan%20saya%20${inputName}%0A%0AIngin%20bertanya%20terkait%20topik%20${inputTopik}%0AJika%20ada%20file%20yang%20bisa%20di%20kirimkan%20ke%20email%20saya%20${email}%0A%0APesan%20tambahan%3A%0A${inputMessage}%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum`
            tombol.href = hrefAwal
        }
    </script>
@endsection
