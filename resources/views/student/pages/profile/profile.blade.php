@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<style>
    .card {
        height: 100% !important;
    }

    .chee {
        background-color: transparent !important;
        border-right: 5px solid transparent !important;
    }

    .proPic {
        border-radius: 50%;
        border: 1px solid #1173FF;
    }

    .dropdown-menu .show {
        transform: translate3d(130px, 43px, 0px) !important;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 3px 15px;
        clear: both;
        font-weight: 400;
        color: #212529;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }


    .avatar-upload {
        position: relative;
        max-width: 205px;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 34px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
        padding: 8px 17px;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 4px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .nav {
    width: auto !important;
    padding: 0 !important;
     margin-left: 0 !important;
}
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #007bff !important;
}
#v-pills-Verification  .dropify-wrapper {
    height: 86px !important;
}
.passport{
    display:none;
}
.license{
    display:none;
}
</style>

<link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css') }}">

@section('content')
<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-12">
                    <p class="heading-first ml-3 mr-3">Profile    </p>
                </div>
            </div>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top:-12px">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center">
                                <img src="{{asset($student->picture)}}" class="profile-card-img" class="w-50">
                                <p class="heading-third mt-3">{{$student->first_name}} {{$student->last_name}}</p>
                                <p class="paragraph-text1 mt-0" style="line-height: 0;">Student</p>
                                <a href="{{route('student.profile')}}" class="schedule-btn w-100 mt-3 decoration-none">Edit Profile</a>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <img src="{{asset('assets/images/ico/location-red.png')}}">
                                </div>
                                <div class="col-md-9 m-0 p-0">
                                    <p class="paragraph-text1">Interested subjects</p>
                                    @if($subjects != "[]" && $subjects != null && $subjects != "")
                                        <p class="paragraph-text3" style="line-height: 0;">{{$subjects->name}}</p>
                                    @else
                                        <p class="paragraph-text3" style="line-height: 0;">No subject Selected</p>
                                    @endif

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <img src="{{asset('assets/images/ico/location-red.png')}}">
                                </div>
                                <div class="col-md-9 m-0 p-0">
                                    <p class="paragraph-text1">Languages</p>
                                    <p class="paragraph-text3" style="line-height: 0;">{{$student->lang_short}}</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <img src="{{asset('assets/images/ico/location-green.png')}}">
                                </div>
                                <div class="col-md-9 m-0 p-0">
                                    <p class="paragraph-text1">Location</p>
                                    <p class="paragraph-text3" style="line-height: 0;">{{$student->city}}, {{$student->country}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" >
                        <div class="card-body">
                            <p class="heading-forth">Education</p>
                            <div style="border-bottom: 1px solid #D6DBE2;"></div>
                            @if($student->experty_level === 1)
                                <p class="paragraph-text3 mt-3 "> Pre Elementary School </p>
                            @elseif($student->experty_level === 2)
                                <p class="paragraph-text3 mt-3 "> Elementary School </p>
                            @elseif($student->experty_level === 3)
                                <p class="paragraph-text3 mt-3 "> Secondary School </p>
                            @elseif($student->experty_level === 4)
                                <p class="paragraph-text3 mt-3 "> High School </p>
                            @elseif($student->experty_level === 5)
                                <p class="paragraph-text3 mt-3 "> Post Secondary School </p>
                            @endif
                        </div>
                        <!-- <p class="paragraph-text2 pt-0" style="line-height: 0;">University of Punjab Lahore</p> -->
                    </div>
                </div>
                <div class="col-md-9">
                    @if($classes === 3)
                    <div class="card " style="background-image: url('{{asset('assets/images/ico/bg-prfile1.png')}}');background-position: center;border-radius: 8px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7 text-white">
                                    <div class="text mt-5 ml-2">
                                        <p class="res-textup" style="font-family: 'Poppins'font;font-size: 20px;font-weight: 600;line-height: 0.4;">
                                            Congratulations</p>
                                        <p style=" font-size: 12px;font-weight: 400;font-family: Poppins;color: #FFFFFF;opacity: 0.71;">
                                            Congratulation {{$student->first_name}} , you have completed your 3 classes we have a gift for you.
                                        </p>
                                        <p style="font-family: Poppins;font-size: 14px;opacity: 0.9;">Open gift box
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5  m-0 p-0">
                                    <div class="home-image">
                                        <img src="{{asset('assets/images/ico/gift1.png')}}" style="width: 100%;height: 200px;">
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-body text-center text-white">
                                    <img src="{{asset('assets/images/ico/doollarss.png')}}" alt="">
                                    <p class="heading-fifth mb-0">
                                        Total Spent
                                    </p>
                                    <h2>${{$price}}.00</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-body text-center text-white">
                                    <img src="{{asset('assets/images/ico/red-clock.png')}}" alt="">
                                    <p class="heading-fifth mb-0">
                                        Total Classes
                                    </p>
                                    @if($classes < 10)
                                        <h2>0{{$classes}}</h2>
                                    @else
                                        <h2>{{$classes}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-body text-center text-white">
                                    <img src="{{asset('assets/images/ico/blue-icos.png')}}" alt="">
                                    <p class="heading-fifth mb-0">
                                        Reviews Sent
                                    </p>
                                    @if($reviews < 10)
                                        <h2>0{{$reviews}}</h2>
                                    @else
                                        <h2>{{$reviews}}</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="heading-third mt-3 ml-3">About me</p>
                                    <p class="paragraph-text1 ml-3"> 
                                        {{$student->bio}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="heading-third mt-3 ml-3">Favourite Tutors</p>
                                </div>
                                @foreach($favorite_tutors as $tutor)
                                    <div class="col-md-6 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-md-3">
                                                @if($tutor->picture != null)
                                                    <img src="{{asset($tutor->picture)}}" class=" profile-img" alt="" style="height:70px; width:70px;">
                                                @else
                                                    <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img " style="width:70px;height:70px;">
                                                @endif    
                                            </div>
                                            <div class="col-md-5 pl-0 pt-1">
                                                <p class=" mb-0"> <small> {{$tutor->first_name}} {{$tutor->last_name}} </small> </p>
                                                <div class="star-icos">
                                                    <small>
                                                        @if($tutor->rating == 1)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i> 1.0
                                                        @elseif($tutor->rating == 2)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>  2.0
                                                        @elseif($tutor->rating == 3)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>  3.0
                                                        @elseif($tutor->rating == 4)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>4.0
                                                        @elseif($tutor->rating == 5)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>  5.0
                                                        @else
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>  0.0
                                                        @endif
                                                    
                                                        <small class="text-grey">(0 reviews)</small>
                                                    </small>
                                                </div>
                                                <p class="mb-0"> <small><img src="{{asset('assets/images/ico/location-pro.png')}}" alt="" class=""> {{ $tutor->city != NULL ? $tutor->city.' , ' : '---' }} {{ $tutor->country != NULL ? $tutor->country: '---' }}</small> </p>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="schedule-btn w-100 mt-2" onclick="location.href = '{{route('student.book-now',[$tutor->id])}}';">
                                                    Book class
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/js/registration.js') }}"></script>
    <script src="{{ asset('assets/js/languages.js') }}"></script>
    <script src="{{ asset('assets/js/yearpicker.js') }}"></script>
    <script src="{{ asset('assets/js/googleapi.js') }}"></script>
    <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
    @include('js_files.student.profileJs')
@endsection

