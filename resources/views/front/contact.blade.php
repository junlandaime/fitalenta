@extends('layouts.app2')

@section('title', 'Contact Us')

@section('content')
    <div class="bg-gradient-to-r from-[#00294B] to-[#005792] text-white py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-center pt-16">Get in Touch</h1>
            <p class="text-xl md:text-2xl mb-8 text-center">We'd love to hear from you. Let's start a conversation.</p>
        </div>
    </div>
    <!-- Breadcrumb -->
    <div class="bg-gray-200 py-2 px-4 lg:px-40">
        <div class="container mx-auto">
            <ol class="list-reset flex text-sm">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-700">Contact</li>
            </ol>
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
                            class="bg-[#00294B] text-white px-6 py-3 rounded-md hover:bg-[#001f3b] transition duration-300">Send
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
                                <h3 class="font-semibold text-lg">Address</h3>
                                <p>Gedung Science Techno Park ITB <br>
                                    Jl. Ganesha No. 15E, <br>Lb. Siliwangi, Kec. Coblong <br>
                                    Bandung 40132</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-lg">Phone</h3>
                                <p>+62 852 81791931</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-6 w-6 text-[#00294B] mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-lg">Email</h3>
                                <p>info@fitalenta.com</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold mt-12 mb-6">Office Location</h2>
                    <div class="h-64 bg-gray-300 rounded-lg overflow-hidden">
                        <!-- Replace the iframe src with your actual Google Maps embed code -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9732250684287!2d107.60635507475682!3d-6.893805993105349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79861a09a0f%3A0x7edcd4dc41c3c5e1!2sGedung%20Science%20and%20Techno%20Park%20(STP)%20ITB!5e0!3m2!1sid!2sid!4v1727146483487!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
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
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
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
    <a href="https://api.whatsapp.com/send?phone=6285281791931&text=Hello%20admin%20Fitalenta,%20Saya%20ingin%20bertanya%20terkait%20layanan%20dan%20produk"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        function gettogetInputValue() {
            let inputName = document.getElementById("name").value;
            let inputTopik = document.getElementById("subject").value;
            let email = document.getElementById("email").value;
            let inputMessage = document.getElementById("message").value;
            let tombol = document.getElementById('startcon')
            let hrefAwal =
                `https://wa.me/6285281791931?text=_Assalamualaikum_%20*Admin%20Fitalenta*%0A%0APerkenalkan%20saya%20${inputName}%0A%0AIngin%20bertanya%20terkait%20topik%20${inputTopik}%0AJika%20ada%20file%20yang%20bisa%20di%20kirimkan%20ke%20email%20saya%20${email}%0A%0Apesan%20tambahan%3A%0A${inputMessage}%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum`
            tombol.href = hrefAwal
        }
    </script>
@endpush
