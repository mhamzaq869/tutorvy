@if(\Request::path() === 'tutor/booking')
<link href="{{ asset('assets/css/booking.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-asset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-mobile.css') }}" rel="stylesheet">
<<<<<<< HEAD
=======
<link href="{{ asset('assets/css/modal.css') }}" rel="stylesheet">

>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
@else
<link href="{{ asset('assets/css/tutor-home.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-asset.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/tutor-mobile.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
<<<<<<< HEAD
=======
<link href="{{ asset('assets/css/modal.css') }}" rel="stylesheet">
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
@endif
