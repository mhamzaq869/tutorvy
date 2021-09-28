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
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class=""
                                    style="">
                                    Advance search</h5>
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
                                            <div id="subjectDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
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
                                            <div id="locationDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <select class="w-100 form-control accSelect2">
                                                        <option value="">Search Location</option>

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
                                                    Rate <span class="pull-right"><i class="fa fa-chevron-down"></i></span>
                                                </div>
                                            </a>
                                            <div id="rateDiv" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body pl-2 pr-0 pt-0">
                                                    <div class="">
                                                        <p class="mb-0">$10 - $1000</p>
                                                        <div class="range-slider">
                                                            <input class="range-slider__range" type="range" id="range" value="100" min="0" max="500">
                                                            <span class="range-slider__value"></span>
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
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i> 
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i>
                                                            <i class="fa fa-star "></i> 
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        <p>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star text-yellow"></i>
                                                            <i class="fa fa-star "></i> 
                                                        </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
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
                                                        <option value="">Search Language</option>
                                                    </select>
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
                <div class="col-md-9 ">
                    @foreach ($available_tutors as $tutor)
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-2 col-6">
                                                    <img src="../assets/images/ico/Square-white.jpg" alt="" class="profile-img">
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <h3>{{$tutor['first_name']}} {{$tutor['last_name']}}</h3>
                                                    <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class="">  {{$tutor->designation ?? '---'}}</p>
                                                    <p><img src="../assets/images/ico/location-pro.png" alt="" class="">{{$tutor->address}}</p>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <p>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>  4.0
                                                        <small class="text-grey">(25 reviews)</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-right"><span class="text-green ">Verified</span> <span class="rank_icon"><img src="../assets/images/ico/bluebadge.png" alt=""></span> </p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <p class="mb-2">Subject</p>
                                            <p>
                                            @foreach ($tutor->teach as $teach)
                                            <span class="info-1 info">{{$teach->sub_name ?? ''}}</span>
                                            @endforeach</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-2">Languages</p>
                                            <p>
                                                <span class="info-1 info lingo">{{$tutor->lang_short ?? ''}}</span>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                        <p class="mb-2">Education</p>
                                            <p>
                                                @foreach ($tutor->education as $edu)
                                                    <span class="info-1 info edu">{{$edu->institute->name ?? ''}}</span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 find_tutor">
                                            <p><strong> About Tutor </strong></p>
                                            <p class="scrol-about ">
                                                    {{$tutor['bio']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 bg-price text-center">
                                    <div class="row mt-30">
                                        <div class="col-md-12">
                                            <p>starting from</p>
                                            <h1 class="f-60">${{$tutor['hourly_rate']}}</h1>
                                            <p>per hour</p>
                                            <button type="button" class=" cencel-btn w-100">
                                                    &nbsp; Message &nbsp;
                                                </button>
                                            <button type="button" onclick="location.href = '{{route('student.book-now')}}';" class=" btn-general w-100 mt-2" >
                                                    &nbsp; Book Class &nbsp;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('scripts')
@include('js_files.student.tutorJs')
@endsection
