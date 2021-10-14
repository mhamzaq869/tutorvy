@extends('layouts.app')

@section('content')
<style>
    #languages-list .select2 .select2-container .-container--default .select2-container--below{
        width:100% !important;
    }
</style>
    <link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
<section class="section-main section-main-std mt-5 pb-5">
    <div class="container-fluid ">
        <div class="row mt-5">
            <div class="col-md-12 text-center    mt-5">
                <span class="text-work text-work-top" style="line-height: 1;">
                    <span class="text-how">
                        Find a
                    </span>
                    Tutor
                </span>
                <span class="there-text shows">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.
                </span>
                <span class="there-text none" style="line-height: 1.6;">
                    There are many variations of passages available, but<br />
                    the majority have suffered alteration in some form.
                </span>
            </div>
        </div>
        <form method="get" action="/findtutor">
        <div class=" row mt-3">
            
                <div class="col-md-2"></div>
                    <div class="col-md-8 bg-subject">
                        <div class="">
                            <select name="subject" id="subject" class="input-subject">
                                <option value="">Select Subject</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->name}}" {{ ( $sub == $subject->name) ? 'selected' : '' }} >{{$subject->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" class="input-submite w-25" value="Find a Tutor">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
           
        </div>
        </form>
        <div class="row mar-left-right mt-5">
            <div class="col-md-3 bg-white-range">
                <div class="d-flex mt-3">
                    <p class="text-fliter">Filters</p>
                    <a href="#" class="ml-auto mt-2"onclick="resetFilter()">
                        <img class="" src="../assets/images/blog/Group 5487.png" height="18px">
                        Reset
                    </a>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 bg-white-range">
                <!-- col-bg -->
                <div class="d-flex">
                    <p class="mt-3 text-sort">
                        Sort by Tutorvy rank
                    </p>

                    <a href="">
                       <img src="../assets/images/arrow-Right Circle.png" height="10px"
                        style="position: absolute;right: 20px;top: 45px;" />
                    </a>
                    <a href="">
                       <img src="../assets/images/Stroke-arrow.png" height="10px"
                        style="position: absolute;right: 20px;top: 25px;" />
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="row mar-left-right">
            <div class="col-md-3 bg-white filteration">
                 <!--TAB4-->
                 <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Location
                            </a>
                        </p>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md form-select" id="location" aria-label=".form-select-md example">
                                        
                                        @foreach ($locations as $location)
                                            <option value="{{$location->name}}"> {{$location->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               
                <!--Tab1-->
                <div class="panel panel-default mt-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseone" aria-expanded="false" aria-controls="collapseTwo">
                                Price Range
                            </a>
                        </p>
                    </div>
                    <div id="collapseone" class="panel-collapse collapse show pb-3" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">

                            <!-- <div class="row">
                                <b>
                                    <div class="col align-self-start">
                                        $10-$1000
                                    </div>
                                </b>
                            </div>
                            <div class="">
                                <div class="range-slider">
                                    <input class="range-slider__range w-100" type="range" id="range" value="1000" min="0"
                                        max="500">
                                    <span class="range-slider__value"></span>
                                </div>
                            </div> -->
                            <div class="range-slider">
                                    <input type="text" class="js-range-slider" name="my_range" value="" />
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 ">
                                    <input type="number" class="  formy-range" min="18" placeholder="Minimum">
                                </div>
                                <div class="col-md-2">
                                    <p>to</p>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" max="70" class="  formy-range"  placeholder="Maximum">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab2-->
                <div class="panel panel-default mt-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Rating
                            </a>
                        </p>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter0" value="0" >
                                        <label class="form-check-label" for="rating_filter0">
                                        <p>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter1" value="1" >
                                        <label class="form-check-label" for="rating_filter1">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter2" value="2" >
                                        <label class="form-check-label" for="rating_filter2">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter3" value="3" >
                                        <label class="form-check-label" for="rating_filter3">
                                        <p>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star text-yellow"></i>
                                            <i class="fa fa-star "></i> 
                                        </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating_filter" id="rating_filter4" value="4" checked>
                                        <label class="form-check-label" for="rating_filter4">
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

                        </div>
                    </div>
                </div>
                <!--TAb3-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTry" aria-expanded="false" aria-controls="collapseTry">
                                Language
                            </a>
                        </p>
                    </div>
                    <div id="collapseTry" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md form-select" id="languages-list" aria-label=".form-select-md example">
                                        <option disabled selected>Choose a Language</option>
                                       
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               
                <!--TAB5-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Gender
                            </a>
                        </p>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <div class="row ml-1">
                                        <div class="form-check col-sm-4">
                                            <input class="form-check-input" type="radio" name="gender" id="male"  value="male">
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check col-sm-4">
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
                                   
                                    <!-- <select class="form-control-md" id="locat" aria-label=".form-select-md example">
                                        <option disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAB4-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Availability
                            </a>
                        </p>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
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

                        </div>
                    </div>
                </div>

                <!--TAB4-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Age
                            </a>
                        </p>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="range-slider">
                                    <input type="text" class="age-range-slider" name="my_range" value="" />
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 ">
                                    <input type="number" class="  formy-range" min="18" placeholder="Minimum">
                                </div>
                                <div class="col-md-2">
                                    <p>to</p>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" max="70" class="  formy-range"  placeholder="Maximum">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mb-3" id="tutor">
                    <!-- <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>  Searched Filters:  </strong></p>
                                    <p>
                                        <span class="info-1 info4">subject</span> 
                                        <span class="info-1 info4">location</span>
                                        <span class="info-1 info4">price</span>
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
                                    <h1 class="number-booking  ">  56  </h1>
                                    <p class="">Total Tutors</p>  
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12" id="number-booking">
                            <h3  class="mb-0  mt-4">  {{ sizeof($tutors) }}  Tutors Available</h3>
                        </div>
                        <div class="col-md-12">
                            @if(sizeof($tutors) == 0 || $tutors == '[]' )
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets/images/ico/no-tutor.svg')}}" alt="" width="200">
                                        <h1 class="">No Tutor Found For Your Search</h1>
                                        <h3 class="">Try a new search for your subject from</h3>
                                            <h3>  our community of tutors.</h3>
                                    </div>
                                </div>
                            @else
                                @foreach ($tutors as $i => $tutor)
                                <div class="card mt-3">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-9">

                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-2 col-6 pr-0 div-center">
                                                                <a href="{{route('student.tutor.show',[$tutor->id])}}">
                                                                    @if($tutor->picture != null)
                                                                        <img src="{{asset($tutor->picture)}}" alt="" class="profile-img findTutor-img" style="">
                                                                    @else
                                                                        <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img findTutor-img" style="">
                                                                    @endif                                                        
                                                                </a>
                                                            
                                                            </div>
                                                            <div class="col-md-4 col-6 pr-0">
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
                                                                <p class="mb-0"><small> 3 hours tutoring in (this subject) </small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
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
                                                <div class="row mt-4">
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
                                                                                $check = $ter - $one
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
                                                                <a href="">Read more...</a>
                                                            @endif

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bg-price text-center">
                                                <div class="row mt-4">
                                                    <a href="#" class="fav" title="Favourite">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                    <div class="col-md-12 ">
                                                        <p>starting from</p>
                                                        <h1 class="f-60">${{$tutor->hourly_rate}}</h1>
                                                        <p>per hour</p>
                                                        <button type="button" class=" cencel-btn pd-btn w-100 mt-3">
                                                                &nbsp; Message &nbsp;
                                                            </button>
                                                        <button type="button" onclick="bookNow(`{{$tutor->id}}`)" class=" btn-general pd-btn w-100 mt-2" >
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
    <!-- end -->
    <script src="{{ asset('assets/js/filterajax.js') }}"></script>
@endsection
@section('scripts')
@include('js_files.frontJs')
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection
