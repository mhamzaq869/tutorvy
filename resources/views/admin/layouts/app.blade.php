<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tutorvy - Admin</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('admin/assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- jquery animation libaray -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/assets/css/asset.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/tutor.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/home-main.css') }}" rel="stylesheet">



</head>
<body>

    <!-- side navbar -->
    @include('admin.layouts.sidebar')

    <section id="contents">
        <!-- navbar-->
        @include('admin.layouts.navbar')
        <!-- navbar end -->
        <!-- Main-->
        @yield('content')
        <!--End Main-->
    </section>

    @include('admin.layouts.scripts')
    @yield('js')

</body>
</html>
