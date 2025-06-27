<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SDN Bringin 01')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 font-sans antialiased">

    {{-- Navbar --}}
    @include('navbar')

    {{-- Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('footer')

    {{-- Mobile Menu --}}

    {{-- Script toggle menu --}}
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


    @yield('scripts')
</body>

</html>
