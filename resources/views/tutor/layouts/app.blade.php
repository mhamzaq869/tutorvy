<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorvy</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/chat.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
      <!-- Dropify CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />
    <!-- Styles -->
    @include('tutor.layouts.css')

</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- side navbar -->
        @include('tutor.layouts.sidebar')
        <!-- seide navbar end -->
        <div class="content" style="width: 100%;background-color: #FBFBFB !important;">
            @include('tutor.layouts.navbar')
            <!-- Main-->
            @yield('content')
        <div>

    </div>

     <!-- custom js -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <script src="{{ asset('assets/js/mobile.js') }}"></script>
     <script src="{{ asset('assets/js/history.js') }}"></script>
     <script src="{{ asset('assets/js/subject.js') }}"></script>
     <script src="{{ asset('assets/js/homePage.js') }}"></script>
     <script src="{{ asset('assets/js/clander.js') }}"></script>
     <script src="{{ asset('assets/js/dropify.js')}}"></script>

<script>
      $(document).ready(function(){
        $(".dropify").dropify();
    })
</script>
</body>
</html>
