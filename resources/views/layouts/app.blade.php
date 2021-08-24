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
    <link href="{{ asset('assets/css/modal.css') }}" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>

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

    <!-- <div class="modal fade support_modal show" id="support-modal" tabindex="-1" role="dialog" aria-labelledby="support-modal" style="padding-right: 7px; display: block;">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <div class="modal-body modal-bodys">
                    <div class="container text-center pb-3 pt-3">
                        <img src="{{asset('')}}" alt="verfiy">
                        <h3 class="mt-3">
                            Add Role
                        </h3>
                        <form id="edit_role_form">
                            <div class="container mt-3">
                                <div class="row pb-3">
                                    <div class="col-md-12">
                                        <div class="input-serach">
                                            <input type="hidden" id="edit_id" value="13">
                                            <input type="text" name="edit_name" id="edit_name" placeholder="Enter Name" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-7 d-flex">
                                        <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                        <button class="schedule-btn ml-3 edit_role" style="width: 130px;" type="submit">Edit Role</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>
</html>
