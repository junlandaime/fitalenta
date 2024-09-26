<footer class="bg-[#00294B] text-white py-8 md:pl-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-lg font-semibold mb-4">About FITALENTA</h3>
                <p class="text-sm">We are dedicated to <br>empowering businesses <br>and individuals <br>through
                    innovative
                    talent
                    management <br>and business consulting solutions.</p>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0 md:text-center">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="text-sm">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('events.index') }}" class="hover:underline">Event</a></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <p class="text-sm">Gedung Science Techno Park ITB <br>
                    Jl. Ganesha No. 15E, <br>Lb. Siliwangi, Kec. Coblong <br>
                    Bandung 40132
                </p>
                <p class="text-sm mt-2">Phone: +62 852 81791931<br>Email: info@fitalenta.co.id</p>
            </div>
            <div class="w-full md:w-1/4 te">
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/people/PT-FAST-Indo-Talenta/61550075167981/" target="blank"
                        class="text-white hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-twitter"></i></a> --}}
                    <a href="https://www.linkedin.com/company/pt-fast-indo-talenta/" target="blank"
                        class="text-white hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/fitalenta.id/" target="blank"
                        class="text-white hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 md:pr-32 text-sm text-center">
            <p>&copy; {{ date('Y') }} FITALENTA. All rights reserved.</p>
        </div>
    </div>
</footer>
