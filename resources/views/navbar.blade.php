<nav class="bg-white shadow-lg w-full z-50 ">
    {{-- Baris atas: Kontak & login --}}
    <div class="hidden sm:block bg-gradient-to-r from-slate-50 to-blue-50 text-sm py-3 px-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center flex-wrap">
             {{-- sosmed --}}
             <div class="flex items-center space-x-2 mt-2 md:mt-0">
                {{-- Facebook --}}
                <a href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-md transition duration-200 shadow-sm hover:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.5228-4.4772-10-10-10S2 6.4772 2 12c0 5.0071 3.6635 9.1365 8.4375 9.877v-6.987h-2.54v-2.89h2.54v-2.197c0-2.5062 1.4929-3.89 3.7773-3.89 1.0931 0 2.2388.195 2.2388.195v2.46h-1.2606c-1.242 0-1.6284.7717-1.6284 1.562V12h2.7735l-.4438 2.89h-2.3297v6.987C18.3365 21.1365 22 17.0071 22 12z" />
                    </svg>
                </a>

                {{-- Twitter --}}
                <a href="#"
                    class="bg-sky-500 hover:bg-sky-600 text-white p-2 rounded-md transition duration-200 shadow-sm hover:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.162 5.656c-.793.352-1.644.59-2.538.696a4.437 4.437 0 0 0 1.947-2.45 8.858 8.858 0 0 1-2.812 1.076 4.418 4.418 0 0 0-7.521 4.028 12.535 12.535 0 0 1-9.09-4.605 4.42 4.42 0 0 0 1.365 5.902 4.395 4.395 0 0 1-2.003-.553v.057a4.42 4.42 0 0 0 3.545 4.33 4.424 4.424 0 0 1-2 .076 4.421 4.421 0 0 0 4.13 3.068 8.868 8.868 0 0 1-5.488 1.894A8.92 8.92 0 0 1 2 19.539a12.51 12.51 0 0 0 6.794 1.992c8.149 0 12.603-6.749 12.603-12.6 0-.192-.004-.383-.013-.573a9.004 9.004 0 0 0 2.218-2.3l.001-.001z" />
                    </svg>
                </a>

            </div>
            
            {{-- kontak --}}
            <div class="flex items-center space-x-6">
                <a href="mailto:info@sdnbringin01.sch.id"
                    class="flex items-center space-x-2 text-slate-600 hover:text-blue-600 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>sdbringin01@gmail.com</span>
                </a>
                <div class="flex items-center space-x-2 text-slate-600">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span>(024) 76631105</span>
                </div>
            </div>

           

            <a href="#"
                class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-200 shadow-sm hover:shadow-md font-medium">
                Login
            </a>


        </div>
    </div>


    <div class="bg-blue-400 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
           

    
            <div class="flex justify-between items-center h-24">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SDN Bringin 01" class="h-16 sm:h-20 ">
    
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Beranda
                    </a>
                    <a href="/profil"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Profil
                    </a>
                    <a href="/berita"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Galeri
                    </a>
                    <a href="/berita"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Berita
                    </a>
                    <a href="/galeri"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Pengumuman
                    </a>
                    <a href="/galeri"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Pengaduan
                    </a>
                    <a href="/kontak"
                        class="text-white hover:text-blue-100 transition-colors duration-200 font-medium px-3 py-2 rounded-md hover:bg-white/10">
                        Kontak
                    </a>
                </div>
                {{-- Tombol menu mobile --}}
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle"
                        class="text-white hover:text-blue-100 focus:outline-none focus:ring-2 focus:ring-white/20 rounded-md p-2 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden bg-blue-800 border-t border-blue-500/20">
            <div class="px-4 py-3 space-y-1">
                <a href="/"
                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-md transition-colors duration-200 font-medium">
                    Beranda
                </a>
                <a href="/profil"
                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-md transition-colors duration-200 font-medium">
                    Profil
                </a>
                <a href="/berita"
                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-md transition-colors duration-200 font-medium">
                    Berita
                </a>
                <a href="/galeri"
                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-md transition-colors duration-200 font-medium">
                    Galeri
                </a>
                <a href="/kontak"
                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-md transition-colors duration-200 font-medium">
                    Kontak
                </a>
            </div>
        </div>
    </div>
</nav>


@section('scripts')
<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuToggle = document.getElementById('menu-toggle');

        if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

@endsection