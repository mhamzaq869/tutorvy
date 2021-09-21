@extends('tutor.layouts.app')

@section('content')
<!-- top Fixed navbar End -->
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="">
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <p class="heading-first ">
                        Dashboard
                    </p>
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
                                            <small>Dashboard have all the stats of your need including class details, upcoming classes, earning stats  <a href="#">Learn More</a></small> 
                                            <a href="#" class="cross pull-right"  onclick="hideCard()"> 
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
                                    <img src="{{asset('assets/images/backgrounds/home-main.png')}}" alt="home-image"
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
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
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
                                            <img class="card-ico" src="{{asset('assets/images/ico/card-icon-1.svg')}}"
                                                alt="blue-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                            <img class="card-ico3" src="{{asset('assets/images/ico/card-icon-2.svg')}}"
                                                alt="red-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                            <img class="card-ico2" src="{{asset('assets/images/ico/card-icon-3.svg')}}"
                                                alt="ico-blue">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                            <img class="card-ico1" src="{{asset('assets/images/ico/yellow-ico.png') }}"
                                                alt="yellow-ico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="heading-third pt-3 mb-3">
                                                New Bookings
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('tutor.booking')}}" class="view-bookings pt-3 mb-3">
                                                View all Bookings
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered" style="border: none !important;">
                                                <thead>
                                                    <tr class="tb-new-header">
                                                        <th scope="col">
                                                            Subjects
                                                        </th>
                                                        <th scope="col">
                                                            Topic
                                                        </th>
                                                        <th scope="col">
                                                            Time
                                                        </th>
                                                        <th scope="col">
                                                            Student
                                                        </th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($new_bookings as $booking)
                                                        <tr>
                                                            <td class="pt-4">
                                                                {{$booking->subject->name}}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{$booking->topic}}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{date("g:i a", strtotime("$booking->class_time UTC"))}} - {{$booking->class_date }}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{$booking->user->fullname}}
                                                            </td>
                                                            <td class="detail-table pt-4 pl-5">
                                                                View details
                                                            </td>
                                                            <td>
                                                                <button type="button" class="schedule-btn"
                                                                    style="float: right;width: 100px;">
                                                                    Accept
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                            <p class="text-mute mb-0">Tutor ID# 548{{$user->id}}09 </p>
                                            <label class="text-mute">Profile Completion</label>
                                            <div class="progress">
                                                
                                                <div class="progress-bar bg-tutorvy" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                            <a href="{{route('tutor.profile')}}" class="pull-right"><small>Complete Profile</small> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mt-0">
                                <div class="card-body"> 
                                    <div class="row mt-2">
                                        <div class="col-md-9">
                                                <p class="heading-third">
                                                    Today Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{route('tutor.booking')}}" class="view-bookings">
                                                View all
                                            </a>
                                        </div>
                                    </div>
                                    @if($today_bookings != "[]")
                                        @foreach($today_bookings as $booking)
                                            <div class="row mt-2 bg-bookings">
                                                <div class="col-md-3 text-center">
                                                    
                                                    <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                        style="margin-top: 32px;">
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="mt-3 mb-2 periodic-cls">
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
                                            <a href="{{route('tutor.booking')}}" class="view-bookings">
                                                View all
                                            </a>
                                        </div>
                                    </div>
                                    @if($upcoming_bookings != "[]")
                                        @foreach($upcoming_bookings as $booking)

                                            <div class="row mt-2 bg-bookings">
                                                <div class="col-md-3 text-center">
                                                    <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                        style="margin-top: 32px;">
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="mt-3 mb-2 periodic-cls">
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
                                            <a href="">
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
        </div>
    </section>
    <div class="line"></div>
</div>

@endsection
