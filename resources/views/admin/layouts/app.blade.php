<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tutorvy - Admin</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
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
    <link href="{{ asset('admin/assets/css/course.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/tutor.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/home-main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .bgm{
            text-decoration:none !important;
            color:black !important;
        }
    </style>

</head>
<!-- <body>
    <input type="hidden" id="role" class="role" value="{{Auth::user()->role}}"> -->
    <!-- side navbar -->
    @include('admin.layouts.sidebar')

    <section id="contents">
    <input type="hidden" class="user_id" value={{Auth::user()->id}}>
    <input type="hidden" class="user_role_id" value={{Auth::user()->role}}>
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
