<footer class="bg-primary text-white py-14 md:pl-32">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-8">

            <!-- About -->
            <div>
                <h3 class="text-lg font-semibold mb-5">About FITALENTA</h3>
                <p class="text-sm leading-6 text-white/80">
                    We are dedicated to <br>empowering businesses <br>and individuals <br>through
                    innovative talent management <br>and business consulting solutions.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="md:text-center">
                <h3 class="text-lg font-semibold mb-5">Quick Links</h3>
                <ul class="text-sm space-y-3">
                    <li>
                        <a href="{{ route('home') }}"
                           class="text-white/80 hover:text-secondary transition-colors duration-300">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}"
                           class="text-white/80 hover:text-secondary transition-colors duration-300">
                            Event
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}"
                           class="text-white/80 hover:text-secondary transition-colors duration-300">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                           class="text-white/80 hover:text-secondary transition-colors duration-300">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                           class="text-white/80 hover:text-secondary transition-colors duration-300">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-5">Contact Us</h3>
                <p class="text-sm leading-6 text-white/80">
                    Gedung Science Techno Park ITB <br>
                    Jl. Ganesha No. 15E, <br>
                    Lb. Siliwangi, Kec. Coblong <br>
                    Bandung 40132
                </p>
                <p class="text-sm mt-4 leading-6 text-white/80">
                    Phone: +62 811 10119273<br>
                    Email: info@fitalenta.co.id
                </p>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-5">Follow Us</h3>
                <div class="flex items-center gap-3">
                    <a href="https://www.facebook.com/people/PT-FAST-Indo-Talenta/61550075167981/" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 hover:text-secondary transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    {{-- <a href="#" class="text-white hover:text-gray-300">
                        <i class="fab fa-twitter"></i>
                    </a> --}}

                    <a href="https://www.linkedin.com/company/pt-fast-indo-talenta/" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 hover:text-secondary transition-all duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="https://www.instagram.com/fitalenta.id/" target="_blank"
                       class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 hover:text-secondary transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 border-t border-white/10 pt-6 md:pr-32 text-sm text-center text-white/60">
            <p>&copy; {{ date('Y') }} FITALENTA. All rights reserved.</p>
        </div>
    </div>
</footer>
