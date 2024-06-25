<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('assets/img/logos/logo.jpg') }}" type="image/x-icon">
    <title>Billify.tech</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('assets/lib/animate/animate.min.css') }}" />
    <!-- Styles -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Custom style for toggle -->
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
</head>

<body onload="onLoad()">
<!-- Spinner Start -->
    @include('components.loading')
    <!-- Spinner End -->

    @include('components.navbar')

    {{-- Page Main --}}
    <main>
        @include('components.menus-popup.contact-sale-sidebar')
        @yield('content')
    </main>
    {{-- End --}}
    @include('components.footer')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ url('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ url('assets/js/scripts.js') }}"></script>
<script src="{{ url('assets/js/product-scripts.js') }}"></script>
</html>

