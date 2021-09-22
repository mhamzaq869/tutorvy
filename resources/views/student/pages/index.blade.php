@extends('student.layouts.app')

@section('content')
<style>
</style>
  <!-- top Fixed navbar End -->
  <div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="row">
            <div class="col-md-12">
                <p class="heading-first "> 
                        Dashboard  
                    </p> 
            </div>
            <div class="col-md-12 mb-3">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success ml-2" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info ml-2" role="progressbar" style="width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar ml-2" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success ml-2" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info ml-2" role="progressbar" style="width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar ml-2" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row infoCard">
                    <div class="col-md-12 mb-3 ">
                        <div class=" card mt-0 bg-toast ">
                            <div class="card-body row">
                                <div class="col-md-1 text-center">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11 pl-0">
                                    <small>
                                        Dashboard have all the stats of your need including class details, upcoming classes, earning stats <a href="#">Learn More</a>
                                    </small>
                                    <a href="#" class="cross"  onclick="hideCard()"> 
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="bg-homeimage1">
                    <div class="row">
                        <div class="col-md-7 text-white pl-4">
                            <div class="text mt-5 ml-2">
                                <p class="res-textup">
                                    We have upgraded the classroom.
                                </p>
                                <p class="res-textup1">
                                    Register yourself on Tutorvy and learn or teach anything from
                                    anywhere.
                                </p>
                                <a href=""class="text-white res-textup">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5  ">
                            <div class="home-image">
                                <img src="{{asset('assets/images/backgrounds/home.svg')}}" alt="home-image"
                                    style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="heading-third mt-4 mb-0">
                            Statistics
                        </p>
                    </div>
                    <div class="col-md-12 stats">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('student.classroom')}}">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{$delivered_count}}
                                            </p>
                                            <p class="class-booking mt-4">
                                                Delivered classes
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico" src="{{asset('assets/images/ico/blue-ico.png')}}"
                                                alt="blue-ico">
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('student.classroom')}}">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{$upcoming_count}}
                                            </p>
                                            <p class="class-booking mt-4">
                                                Upcomming class
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1" src="{{asset('assets/images/ico/red-ico.png')}}"
                                                alt="red-ico">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('student.bookings')}}">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{$pending_count}}
                                            </p>
                                            <p class="class-booking mt-4">
                                                Pending Bookings
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico" src="{{asset('assets/images/ico/ico-blue.png')}}"
                                                alt="ico-blue">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('student.bookings')}}">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{$subject_count}}
                                            </p>
                                            <p class="class-booking mt-4">
                                                Total Subjects
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1" src="{{asset('assets/images/ico/yellow-ico.png')}}"
                                                alt="yellow-ico">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="heading-third pt-4 mb-3">
                                    Favourite Tutors</p>
                            </div>
                                @if($favorite_tutors != "[]")
                                    <div class="col-md-12 scrollable h-666" id="Fav_tutor">
                                        @foreach($favorite_tutors as $tutor)
                                            <div class="card  mt-0">
                                                <div class="card-body">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <div class="row">
                                                                        
                                                                        <div class="col-md-2 col-6">
                                                                            <a href="{{route('student.tutor.show',[$tutor->id])}}">
                                                                                @if($tutor->picture != null)
                                                                                    <img src="{{asset($tutor->picture)}}" alt="" class="round-border">
                                                                                @else
                                                                                    <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                                                @endif                                                        
                                                                            </a>
                                                                        
                                                                        </div>
                                                                        <div class="col-md-5 col-6">
                                                                            <h3>{{$tutor->first_name}} {{$tutor->last_name}}</h3>
                                                                            <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class="">  {{$tutor->designation ?? '---'}}</p>
                                                                            <p class="mb-0"><img src="../assets/images/ico/location-pro.png" alt="" class="">{{ $tutor->city != NULL ? $tutor->city.' , ' : '---' }} {{ $tutor->country != NULL ? $tutor->country: '---' }}</p>
                                                                        </div>
                                                                        <div class="col-md-4 col-12">
                                                                            <p>
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
                                                                    <small> <strong> 3 hours</strong> tutoring in (this subject) </small>

                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-4">
                                                                    @php

                                                                        $sub = explode(',',$tutor->subject_names);
                                                                        
                                                                    @endphp
                                                                    <p class="mb-2">Subject</p>
                                                                    <p>
                                                                    @for ($i=0 ; $i < sizeof($sub); $i++)
                                                                    <span class="info-1 info">{{$sub[$i]}}</span>
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
                                                                    <p class="scrol-about ">
                                                                            {{$tutor->bio}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 bg-price text-center">
                                                            <div class="row mt-30">
                                                                
                                                                    <a type="button" onclick="favourite_tutor({{$tutor->id}},'un_fav')" class="fav" title="Favourite">
                                                                        <i class="fa fa-star text-yellow" id="favorite_start_{{$tutor->id}}"></i>
                                                                    </a>
                                                                <div class="col-md-12">
                                                                    
                                                                    <p>starting from</p>
                                                                    <h1 class="f-60">${{$tutor->hourly_rate}}</h1>
                                                                    <p>per hour</p>
                                                                    <button type="button" class=" cencel-btn w-100">
                                                                            &nbsp; Message &nbsp;
                                                                        </button>
                                                                    <button type="button" onclick="location.href = '{{route('student.book-now',[$tutor->id])}}';" class=" btn-general w-100 mt-2 p-2" >
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
                                @else
                                    <div class="col-md-12">
                                        <div class="card mt-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        No Favourite Tutor Added Yet
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="col-md-4">
                <div class="row ">
                    <div class="col-md-12 mb-3">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        @if($user->picture)
                                            <img src="{{asset ($user->picture)}}" alt=""  class="db_img">
                                        @else
                                            <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="db_img">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mb-0"><strong>{{$user->first_name}} {{$user->last_name}}</strong></p>
                                        <p class="text-mute mb-0">Student ID# 548{{$user->id}}09 </p>
                                        <label class="text-mute">Profile Completion</label>
                                        <div class="progress">
                                            
                                            <div class="progress-bar bg-tutorvy progress-bar-striped progress-bar-animated" role="progressbar"  style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                        <a href="{{route('student.profile')}}" class="pull-right"><small>Complete Profile</small> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mt-0">
                            <div class="card-body">

                                <div class="row mt-2">
                                    <div class="col-md-8">
                                            <p class="heading-third">
                                                Today Bookings
                                            </p>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('student.bookings')}}" class="view-bookings">
                                            View all 
                                        </a>
                                    </div>
                                </div>
                                    @if($today_bookings != "[]")
                                        @foreach($today_bookings as $booking)
                                            <div class="row mt-2 bg-bookings">
                                                <div class="col-md-4 text-center">
                                                @if($booking->tutor->picture)
                                                        <img src="{{asset ($booking->tutor->picture)}}" alt=""  class="db_img">
                                                @else
                                                    <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="db_img">
                                                @endif
                                                   
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="mb-2 periodic-cls">
                                                        <a class="chemistry-tex1">
                                                        {{$booking->subject->name}} class:
                                                        </a>
                                                        {{$booking->topic}}
                                                    </p>
                                                    <p class="chemistry-tex2">
                                                    {{ \Illuminate\Support\Str::limit($booking->brief, $limit = 50, $end = '...') }}
                                                    </p>
                                                    <div style="display: inline-flex;">
                                                        <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                                                        <p class="time-chemistry">
                                                        {{date("g:i a", strtotime("$booking->class_time UTC"))}} - {{$booking->class_date }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    <div class="text-center">
                                        <img src="{{asset('assets/images/clock.png')}}" alt=""> 
                                        <p> No Bookings for Today</p>

                                    </div>
                                    @endif
                                <div class="row mt-2">
                                    <div class="col-md-9">
                                            <p class="heading-third">
                                                Upcoming Bookings
                                            </p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{route('student.bookings')}}" class="view-bookings">
                                            View all
                                        </a>
                                    </div>
                                </div>
                                @if($upcoming_bookings != "[]")
                                        @foreach($upcoming_bookings as $booking)

                                            <div class="row mt-2 bg-bookings">
                                                <div class="col-md-4 text-center">
                                                @if($booking->tutor->picture)
                                                        <img src="{{asset ($booking->tutor->picture)}}" alt=""  class="db_img">
                                                @else
                                                    <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="db_img">
                                                @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <p class=" mb-2 periodic-cls">
                                                        <a class="chemistry-tex1">
                                                        {{$booking->subject->name}} class:
                                                        </a>
                                                        {{$booking->topic}}
                                                    </p>
                                                    <p class="chemistry-tex2">
                                                    {{ \Illuminate\Support\Str::limit($booking->brief, $limit = 50, $end = '...') }}
                                                    </p>
                                                    <div style="display: inline-flex;">
                                                        <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                                                        <p class="time-chemistry">
                                                        {{date("g:i a", strtotime("$booking->class_time UTC"))}} - {{$booking->class_date }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    <div class="text-center">
                                        <img src="{{asset('assets/images/learning.png')}}" alt=""> 
                                        <p> No Upcoming Bookings Registered</p>

                                    </div>
                                    @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12  ">
                        <!-- <div class="card">
                            <div class="card-body"> -->
                                <div class="card bg-ad">
                                    <div class="card-body">
                                        <div>
                                            <a href="{{route('student.bookings')}}">
                                                    <img src="{{asset('assets/images/ico/playStore.png')}}" class="w-45" alt="">
                                            </a>
                                        </div>
                                        <div class="mt-2">
                                            <a href="">
                                                    <img src="{{asset('assets/images/ico/appStore.png')}}" class="w-45" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                            <!-- </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body"
                        style="padding-top: 100px;padding-bottom: 100px;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="box">
                                        <select class="selectpicker w-100 select-o"
                                            data-size="4">
                                            <option value="">Select Custom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="w-100 select-o">
                                        <option value="">hello</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="w-100 select-o">
                                        <option value="">hello</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="w-100 select-o">
                                        <option value="">hello</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
</div>
<script>
 
</script>
@endsection
@section('scripts')
@include('js_files.student.dashboardJs')
@endsection