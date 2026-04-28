<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MS Repair — Spesialis perbaikan iPhone terbaik di Semarang. Teknisi ahli, harga transparan, dan garansi pasti.">
    <meta name="keywords" content="iPhone repair, service iPhone, Semarang, ganti LCD, ganti baterai, MS Repair">

    <title>@yield('title', 'MS Repair — Spesialis Perbaikan iPhone di Semarang')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Preconnect for Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-surface text-on-surface">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Mobile Nav Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('mobile-nav-toggle');
            const mobileNav = document.getElementById('mobile-nav');
            const iconOpen = document.getElementById('icon-open');
            const iconClose = document.getElementById('icon-close');

            if (toggle && mobileNav) {
                toggle.addEventListener('click', function() {
                    mobileNav.classList.toggle('hidden');
                    iconOpen.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
