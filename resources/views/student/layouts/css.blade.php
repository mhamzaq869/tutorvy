@if(\Request::path() === 'tutor/booking')
<link href="{{ asset('assets/css/booking.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-asset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-mobile.css') }}" rel="stylesheet">
@else
<link href="{{ asset('assets/css/student-home.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-asset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/student-asset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/student-mobile.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-mobile.css') }}" rel="stylesheet">

@endif
