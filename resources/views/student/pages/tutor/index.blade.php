@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
 <!-- top Fixed navbar End -->
 <section>

    <div class="">
        <p id="sidenav-toggles" class="heading-first  mr-3 mb-4 ml-2">
            Find a Tutor
        </p>
    </div>
    <div class="">
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
                            <div class="col-md-12 mt-2">
                                <input type="search" style="width: 100%;" class="form-control input12" data-search
                                placeholder="Search">

                                <span class="fa fa-search form-control-feedback searchIcon"></span>
                                <select class="w-100 mt-3 form-control py-2" id="subject">
                                    <option value="">Subject</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}"> {{$subject->name}}</option>
                                    @endforeach
                                </select>
                                <select class="w-100 mt-3 form-control py-2">
                                    <option value="">Location</option>

                                </select>
                                <select class="w-100 mt-3 form-control py-2">
                                    <option value="">Rate</option>
                                </select>
                                <select class="w-100 mt-3 form-control py-2">
                                    <option value="">Rating</option>
                                </select>
                                <select class="w-100 mt-3 form-control py-2">
                                    <option value="">Language</option>
                                </select>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                @foreach ($tutors as $tutor)
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-2 col-6">
                                                <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                            </div>
                                            <div class="col-md-5 col-6">
                                                <h3>{{$tutor->fullname}}</h3>
                                                <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class=""> {{$tutor->professional->last()->designation ?? '---'}}</p>
                                                <p><img src="../assets/images/ico/location-pro.png" alt="" class=""> {{$tutor->address}}</p>
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
                                        <p class="text-right"><span class="text-green ">Top Ranked</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <p class="mb-2">Subject</p>
                                        <p> 
                                            @foreach ($tutor->teach as $teach)
                                            <span class="info-1 info">{{$teach->sub_name ?? ''}}</span>
                                            @endforeach
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
                                            {{$tutor->bio}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 bg-price text-center">
                                <div class="row mt-30">
                                    <div class="col-md-12">
                                        <p>starting from</p>
                                        <h1 class="f-60">${{$tutor->hourly_rate}}</h1>
                                        <p>per hour</p>
                                        <button type="button" class=" cencel-btn w-100">
                                                &nbsp; Message &nbsp;
                                            </button>
                                        <button type="button" class=" btn-general w-100 mt-2" >
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
@endsection
