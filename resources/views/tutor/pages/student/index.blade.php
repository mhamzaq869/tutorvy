@extends('tutor.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<style>
    .card {
        height: 100% !important;
    }

    .chee {
        background-color: transparent !important;
        border-right: 5px solid transparent !important;
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
                    <p class="heading-first ml-3 mr-3"> Student Profile </p>
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
                                <!-- <a href="{{route('student.profile')}}" class="schedule-btn w-100 mt-3">Edit Profile</a> -->
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
                                    <p class="paragraph-text3" style="line-height: 0;">{{$subjects->name}}</p>
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
                    <div class="card ">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3 ml-3">About Student</p>
                                            <p class="paragraph-text1 ml-3"> 
                                                {{$student->bio}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
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

