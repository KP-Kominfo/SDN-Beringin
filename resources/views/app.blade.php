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
    @include('partials.navbar')

    {{-- Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Mobile Menu --}}

    {{-- Script toggle menu --}}
    <script src="{{ asset('js/mobile-menu.js') }}" >
        
    </script>


    @yield('scripts')
</body>

</html>
