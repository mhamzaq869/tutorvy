@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
 <!-- top Fixed navbar End -->
 <div class="content-wrapper " style="overflow: hidden;">
    <section id="findTutorsection" style="display: flex;">

        <div class="container-fluid m-0 p-0">
            <p class="heading-first ml-3 mr-3">Find a Tutor</p>
            <div class="row bg-white ml-2 mr-2 ">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">


                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small>
                                    Filter according to your need. Specify the age,ranges,ratings,subjects and every possible details to get the exact person you need <a href="#">Learn More</a>
                                </small>
                                <a href="#" class="cross"  onclick="hideCard()">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <h5 class=""
                                    style="">
                                    Advance search</h5> -->
                                </div>
                                <!-- <div class="col-md-12 mt-2">
                                    <input type="search" style="width: 100%;" class="form-control input12" data-search
                                    placeholder="Search">

                                    <span class="fa fa-search form-control-feedback searchIcon"></span>
                                </div> -->
                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#subjectDiv" aria-expanded="true" aria-controls="subjectDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                        Subject <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="subjectDiv" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <select class="w-100 form-control accSelect2" id="subjects-list">
                                                        <option value="">Search Subject</option>
                                                        @foreach ($subjects as $subject)
                                                        <option value="{{$subject->id}}"> {{$subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#locationDiv" aria-expanded="true" aria-controls="locationDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                        Location <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="locationDiv" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <select class="w-100 form-control accSelect2" id="location">
                                                        <option value="">Select Location</option>
                                                        @foreach ($locations as $location)
                                                        <option value="{{$location->name}}"> {{$location->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#rateDiv" aria-expanded="true" aria-controls="rateDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                    Price <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="rateDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body  pt-0">
                                                        <!-- <p class="mb-0">$10 - $1000</p> -->
                                                        <!-- <div class="range-slider">
                                                            <input class="range-slider__range" type="range" id="range" value="999" min="0" max="1000">
                                                            <span class="range-slider__value"></span>
                                                        </div> -->
                                                        <div class="range-slider">
                                                             <input type="text" class="js-range-slider" id="range"  name="my_range" value="" />
                                                             <span class="range-slider__value"></span>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-5 ">
                                                                <input type="number" class="  formy-range" placeholder="Min">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <p>-</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="number" max="1000" class="  formy-range" placeholder="Max">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#ratingDiv" aria-expanded="true" aria-controls="ratingDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                    Rating <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="ratingDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="0" >
                                                        <label class="form-check-label" for="rating_filter">
                                                        <p>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="1" >
                                                        <label class="form-check-label" for="rating_filter">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="2" >
                                                        <label class="form-check-label" for="rating_filter">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="3" >
                                                        <label class="form-check-label" for="rating_filter">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i>
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter" value="4" checked>
                                                        <label class="form-check-label" for="rating_filter">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                        </p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#langDiv" aria-expanded="true" aria-controls="langDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                    Language <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="langDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <select class="w-100 form-control accSelect2" id="languages-list">
                                                        <!-- <option value="">Search Language</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#genderDiv" aria-expanded="true" aria-controls="genderDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                Gender <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="genderDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <div class="row ml-1">
                                                        <div class="form-check col-sm-6">
                                                            <input class="form-check-input" type="radio" name="gender" id="male"  value="male">
                                                            <label class="form-check-label" for="male">
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-sm-6">
                                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                            <label class="form-check-label" for="female">
                                                                Female
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-sm-4">
                                                            <input class="form-check-input" type="radio" name="gender" id="gender" checked  value="any">
                                                            <label class="form-check-label" for="gender">
                                                                Any
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#availableDiv" aria-expanded="true" aria-controls="availableDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                Availability <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="availableDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <div class="row ml-1">
                                                        <div class="form-check col-sm-4">
                                                            <input class="form-check-input" type="radio" name="availability" id="availability1" value="online">
                                                            <label class="form-check-label" for="availability1">
                                                                Online
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-sm-4">
                                                            <input class="form-check-input" type="radio" name="availability" id="availability2"  value="offline">
                                                            <label class="form-check-label" for="availability2">
                                                                Offline
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-sm-4">
                                                            <input class="form-check-input" type="radio" name="availability" id="availabilityAll" checked value="all">
                                                            <label class="form-check-label" for="availabilityAll">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id="accordion">
                                        <div class=" ">
                                            <a href="#" class="" data-toggle="collapse" data-target="#ageDiv" aria-expanded="true" aria-controls="ageDiv">
                                                <div class="tutorFilterHead" id="headingOne">
                                                    Age <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="ageDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body  pt-0">
                                                        <!-- <p class="mb-0">$10 - $1000</p> -->
                                                        <!-- <div class="range-slider">
                                                            <input class="range-slider__range" type="range" id="range" value="999" min="0" max="1000">
                                                            <span class="range-slider__value"></span>
                                                        </div> -->
                                                        <div class="range-slider">
                                                             <input type="text" class="age-range-slider" name="my_range" value="" />
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-5 ">
                                                                <input type="number" class="  formy-range" min="18" placeholder="Min">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <p>-</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="number" max="70" class="  formy-range"  placeholder="Max">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 " >
                    <!-- <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>  Searched Filters:  </strong></p>
                                    <p>
                                        <span class="info-1 info4">subject</span>
                                        <span class="info-1 info4">location</span>
                                        <span class="info-1 info4">rate</span>
                                        <span class="info-1 info4">range</span>
                                        <span class="info-1 info4">gender</span>
                                        <span class="info-1 info4">age</span>
                                        <span class="info-1 info4">availability</span>
                                    </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <p class="number-booking mt-0 " id="number-booking">  {{ sizeof($available_tutors) }}  </p>
                                    <p class="mb-0">Total Tutors</p>
                                </div>
                            </div>
                        </div>

                    </div> -->
                    <div class="row">
                        <div class="col-md-12" id="number-booking">
                            <h3  class="mb-0  mt-4">  {{ sizeof($available_tutors) }}  Tutors Available</h3>
                        </div>
                        <div class="col-md-12" id="tutors-list">
                        @if(sizeof($available_tutors) == 0 || $available_tutors == '[]' )
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="{{asset('assets/images/ico/no-tutor.svg')}}" alt="" width="200">
                                <h1 class="">No Tutor Found For Your Search</h1>
                                <h3 class="">Try a new search for your subject from</h3>
                                    <h3>  our community of tutors.</h3>
                            </div>
                        </div>
                    @else
                        @foreach ($available_tutors as $tutor)

                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">

                                                    <div class="col-md-2 col-6 pr-0 div-center">
                                                        <a href="{{route('student.tutor.show',[$tutor->id])}}">
                                                            @if($tutor->picture != null)
                                                                <img src="{{asset($tutor->picture)}}" alt="" class="profile-img " style="height:70px; width:70px;">
                                                            @else
                                                                <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img " style="height:70px; width:70px;">
                                                            @endif
                                                        </a>

                                                    </div>
                                                    <div class="col-md-4 col-6  pr-0">
                                                        <a href="{{route('student.tutor.show',[$tutor->id])}}" class="decoration-none"><h3 class="mb-0">{{$tutor->first_name}} {{$tutor->last_name}}</h3></a>
                                                        <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class="">  {{$tutor->designation ?? '---'}}</p>
                                                        <p class="mb-0"><img src="../assets/images/ico/location-pro.png" alt="" class="">{{ $tutor->city != NULL ? $tutor->city.' , ' : '---' }} {{ $tutor->country != NULL ? $tutor->country: '---' }}</p>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <p class="mb-0">
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
                                                        </p>
                                                        <p class="mb-0">
                                                            <small>
                                                                3 hours tutoring in (this subject)
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                @if($tutor->rank == 1)
                                                    <p class="text-right"><span class="text-green ">New</span> <span class="rank_icon"><img src="../assets/images/ico/bluebadge.png" alt=""></span> </p>
                                                @elseif($tutor->rank == 2)
                                                    <p class="text-right"><span class="text-green ">Emerging</span> <span class="rank_icon"><img src="../assets/images/ico/yellow-rank.png" alt=""></span> </p>
                                                @elseif($tutor->rank == 3)
                                                    <p class="text-right"><span class="text-green ">Top Rank</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                                @endif
                                                <!-- <small> <strong> 3 hours</strong> tutoring in (this subject) </small> -->

                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                @php

                                                    $sub = explode(',',$tutor->subject_names);
                                                    $ter = sizeof($sub);

                                                @endphp
                                                <p class="mb-2">Subject</p>
                                                <p>
                                                    @for ($i=0 ; $i < 1; $i++)
                                                        <span class="info-1 info">{{$sub[$i]}}</span>

                                                        @if($ter > 1)
                                                        <small>
                                                            <a href="#" class="text-dark decoration-none">
                                                                @php
                                                                        $one = 1;
                                                                        $check = $ter - $one;
                                                                @endphp
                                                                +{{$check}} Others
                                                            </a>
                                                        </small>
                                                        @endif
                                                    @endfor
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="mb-2">Languages</p>
                                                <p>
                                                    <span class="info-1 info lingo">{{$tutor->lang_short ?? ''}}</span>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                            <p class="mb-2">Education</p>
                                                @php
                                                    $inst = explode(',',$tutor->insti_names);
                                                @endphp
                                                <p>
                                                @for ($i=0 ; $i < sizeof($inst); $i++)
                                                    <span class="info-1 info edu">{{$inst[$i]}}</span>
                                                @endfor
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12 find_tutor">
                                                <p><strong> About Tutor </strong></p>
                                                <p >
                                                    {{Str::limit($tutor->bio, 240, $end='')}}
                                                    @if(strlen($tutor->bio) > 240)
                                                        <a href="{{route('student.tutor.show',[$tutor->id])}}">Read more...</a>
                                                    @endif

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bg-price text-center">
                                        <div class="row mt-30">
                                            @if($tutor->is_favourite != null && $tutor->is_favourite != "")
                                                <a type="button" onclick="favourite_tutor({{$tutor->id}},'un_fav')" class="fav" title="Favourite">
                                                    <i class="fa fa-star text-yellow" id="favorite_start_{{$tutor->id}}"></i>
                                                </a>
                                            @else
                                                <a type="button" onclick="favourite_tutor({{$tutor->id}},'fav')" class="fav" title="Favourite">
                                                    <i class="fa fa-star" id="favorite_start_{{$tutor->id}}"></i>
                                                </a>
                                            @endif
                                            <div class="col-md-12">

                                                <p>starting from</p>
                                                <h1 class="f-60">${{$tutor->hourly_rate != null ? $tutor->hourly_rate : 0}}</h1>
                                                <p>per hour</p>
                                                <button type="button" class=" cencel-btn w-100" onclick="chat({{$tutor->id}})">
                                                        &nbsp; Message &nbsp;
                                                </button>
                                                <button type="button" onclick="location.href = '{{route('student.book-now',[$tutor->id])}}';" class=" btn-general w-100 mt-2" >
                                                        &nbsp; Book Class &nbsp;
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('scripts')
@include('js_files.student.tutorJs')
@endsection
