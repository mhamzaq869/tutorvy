<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorvy</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- jquery animation libaray -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/asset.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tutor.css') }}" rel="stylesheet">

    <!--Select 2 dropdown-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>
<body>
    <section>
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- navbar end -->
        <!-- Main-->
        @yield('content')
        <!--End Main-->
        @include('layouts.footer')
    </section>
</body>
</html>
