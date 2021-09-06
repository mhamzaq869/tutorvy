@extends('layouts.app')
<link rel="stylesheet" href="{{asset('admin/assets/css/tutor.css')}}">
@section('content')
<style>
    #languages-list .select2 .select2-container .-container--default .select2-container--below{
        width:100% !important;
    }
</style>
    <link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
    <section class="section-profile">
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-md-3">
                    <div class="card">
                        <div class="row card-body text-center">
                            <small class="mb-3">
                                @if($tutor->rank == 1)
                                <p class="ab_right">
                                     <span class="text-primary">Tutorvy Verified </span>
                                     <img src="{{asset('admin/assets/img/ico/blue-rank.png')}}" class="wd-30" alt="" widht="30">
                                </p>
                                <!-- <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Upgrade badge 
                                </a> -->
                                @elseif($tutor->rank == 2)
                                <p class="ab_right">
                                     <span class="text-warning"> Top Ranked </span>
                                     <img src="{{asset('admin/assets/img/ico/yellow-rank.png')}}" class="wd-30" alt="" widht="30">
                                </p>
                                <!-- <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Upgrade badge 
                                </a> -->
                                @elseif($tutor->rank == 3)
                                <p class="ab_right">
                                     <span class="text-success"> Emerging Tutor </span>
                                     <img src="{{asset('admin/assets/img/ico/green-rank.png')}}" class="wd-30" alt="" widht="30">

                                </p>
                                <!-- <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Upgrade badge 
                                </a> -->
                                @else
                                <p class="ab_right">
                                     <span class="text-danger"> New </span>
                                     <img src="{{asset('admin/assets/img/ico/red-rank.png')}}" class="wd-30" alt="" widht="30">
                                </p>
                                
                                <!-- <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Upgrade badge 
                                </a> -->
                                @endif
                                
                            </small>
                            <div class="col-md-12 mt-3">
                                <img src="{{asset('admin/assets/img/ico/Square-white.jpg')}}"
                                class="profile-responsive round-profile" />
                            </div>
                            <div class="col-md-12 ">
                                <p class="heading-forth name-text mt-2">{{ $tutor->first_name }} {{ $tutor->last_name }}</p>
                                <p class="name-text1 paragraph-text1 mb-0 ">Tutor</p>
                                
                                @if($tutor->rating == 1)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="paragraph-text1">1.0</span>
                                </p>
                                @elseif($tutor->rating == 2)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="paragraph-text1">2.0</span>
                                </p>
                                @elseif($tutor->rating == 3)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="paragraph-text1">3.0</span>
                                </p>
                                @elseif($tutor->rating == 4)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="paragraph-text1">4.0</span>
                                </p>
                                @else
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">0.0</span>
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="line-profile"></div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="row"> 
                                    <div class="col-md-6 mt-2">
                                        <button class=" cencel-btn pd-btn w-100"> Message </button>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <button class=" btn-general pd-btn w-100" onclick="bookNow(`{{$tutor->id}}`)"> Book Now </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <small class="text-grey">Paid Payments</small>
                                    <h2>$265</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <small class="text-grey">Pending Payments</small>
                                    <h2>$265</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-4">
                                        <img src="{{asset('admin/assets/img/ico/hash-icon.png')}}" alt="hash-icon" height="40px"
                                            class="" />
                                        </div>
                                        <div class="col-md-9 col-8">
                                            <h2 class="">16 <span class="text-grey f-14"> Reports</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row pb-3">
                                        <div class="col-md-3 col-4">
                                            <img src="{{asset('admin/assets/img/ico/book-icon.svg')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-9 col-8">
                                            <p class="paragraph-text01 mb-0 mt-1">Subject</p>
                                            <p class="heading-forth ml-1">
                                                {{$tutor->subjects}}
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-3 col-4">
                                            <img src="{{asset('admin/assets/img/ico/red-icons.png')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-9 col-8">
                                            <p class="paragraph-text01 mb-0 mt-1">Language</p>
                                            <p class="heading-forth ml-1">
                                                {{$tutor->lang_short}}
                                            </p>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-3 col-4">
                                            <img src="{{asset('admin/assets/img/ico/green-icon.svg')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-9 col-8">
                                            <p class="paragraph-text01 mb-0 mt-1">Address</p>
                                            <p class="heading-forth ml-1">
                                                {{$tutor->address}}
                                            </p>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Education</h3>
                                    <hr />
                                    @foreach($tutor->education as $edu)
                                    @php

                                        $year = '';
                                        if($edu->year != null){
                                            $y = explode('-',$edu->year);
                                            $year = $y[0];
                                        }

                                    @endphp
                                    <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-9  col-9">
                                                        <span class="heading-third1"> {{$edu->degree->name ?? ''}} </span>
                                                    </div>
                                                    <div class="col-md-3 col-3">
                                                        <span class="paragraph-text1 ml-3 pull-right"> {{ $year }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <p class="notification-text3 mt-2">{{$edu->institute->name ?? ''}} </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Work experience</h3>
                                    <hr />
                                    @foreach($tutor->professional as $exp)
                                        @php

                                            $year = '';
                                            if($exp->end_date != null){
                                                $y = explode('-',$exp->end_date);
                                                $year = $y[0];
                                            }

                                        @endphp
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-9 col-9">
                                                        <span class="heading-third1"> {{$exp->designation}} </span>
                                                    </div>
                                                    <div class="col-md-3 col-3">
                                                        <span class="paragraph-text1 ml-3 pull-right"> {{ $year }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <p class="notification-text3 mt-2">{{$exp->organization}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <img src="{{asset('admin/assets/img/ico/blue-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8 col-8">
                                            <h3 class="mb-0">16</h3>
                                            <p class="mb-0">Total classes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                                <img src="{{asset('admin/assets/img/ico/green-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8 col-8">
                                            <h3 class="mb-0">${{$tutor->hourly_rate}}</h3>
                                            <p class="mb-0">Per hour rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <img src="{{asset('admin/assets/img/ico/red-icon.svg')}}" alt="image" />

                                        </div>
                                        <div class="col-md-8 col-8">
                                            <h3 class="mb-0">9am to 5am</h3>
                                            <p class="mb-0">Availability</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-4">
                                            <img src="{{asset('admin/assets/img/ico/yellow-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8 col-8">
                                            <h3 class="mb-0">100%</h3>
                                            <p class="mb-0">Response time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        About tutor
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        {{$tutor->bio}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row headings mt-3">
                        <div class="col-md-12 col-12">
                            <h3>
                                Courses
                            </h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="pt-2  table  table-borderless " >
                                        <thead>
                                            <tr>
                                                <th scope="col" class="">Srno.</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Title </th>
                                                <th scope="col">Student</th>
                                                <th scope="col" > Reviews </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(sizeof($approved_courses) > 0)
                                                @foreach($approved_courses as $course)
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    <tr>
                                                        <td class="pt-4">{{$count}}</td>
                                                        <td class="pt-4">{{$course->subject_name}}</td>
                                                        <td class="pt-4">{{$course->title}}</td>
                                                        <td class=" pt-4">26</td>
                                                        <td class="pt-4 "> <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="paragraph-text1 ">(4.0)</span>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $count++;
                                                    @endphp
                                                @endforeach
                                            @else
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>No Record Found.
                                                </td>
                                                <td></td>
                                            </tr>
                                            @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row headings mt-3">
                        <div class="col-md-12 col-12">
                            <h3>
                                Courses Approval
                            </h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="pt-2 tableed table  table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="">Srno.</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(sizeof($requested_courses) > 0)
                                            @foreach($requested_courses as $course)
                                                @php
                                                    $count = 1;
                                                @endphp
                                                <tr>
                                                    <td class="pt-4">{{$count}}</td>
                                                    <td class="pt-4">{{$course->subject_name}}</td>
                                                    <td class="pt-4" >{{$course->title}}</td>
                                                </tr>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach
                                        @else
                                            <tr>
                                                <td></td>
                                            
                                                <td>No Record Found.
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endif 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row headings mt-3">
                                <div class="col-md-12 col-12">
                                    <h3>
                                        Student Reviews
                                    </h3>
                                </div>
                            </div>
                            <div class="row overScroll">
                                <div class="col-md-12">
                                     <!-- student reviews -->
                                    <div class="row bg-std-reviews pb-3 ml-3 mr-3">
                                        <div class="col-md-6">
                                            <div class="container-fluid container-center">
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}" alt="image" class="img-round">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <span class="heading-forth ml-2">Harram Laraib</span>
                                                        <p class="paragraph-text ml-2">Student</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="view-date mt-3">02 March 2021</span>
                                        </div>
                                        <div class="container-fluid mt-3">
                                            <div class="star-fa1 ml-3 mt-0">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="paragraph-text1">4.0</span>
                                            </div>
                                            <p class="paragraph-texts mt-2 ml-3">
                                                It is a long established fact that a reader will be distracted by the readable
                                                content of a page when looking at0 its lyout. The point
                                                of using Lorem Ipsum is that it has more-or-less normal distribution of letters,
                                                as opposed to using 'Content here, content ere'
                                                making it look like readable English.

                                                <!-- <span>see more</span> -->
                                            </p>
                                        </div>
                                        <!-- tutor reply -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10 pt-3 bg-white">
                                                    <div class="container-fluid">
                                                        <span class="heading-fifth">Tutor replied</span>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}" alt="image"
                                                                                class="img-round">
                                                                        </div>
                                                                        <div class="col-md-9 mt-1">
                                                                            <span class="heading-forth">Ali Raza</span>
                                                                            <p class="paragraph-text">Tutor</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span class="view-date mt-3 mr-3">02 March 2021</span>
                                                            </div>
                                                            <div class="container mt-2">
                                                                <div class="star-fa1 ml-3 mt-0">
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="paragraph-text1">4.0</span>
                                                                </div>
                                                                <p class="paragraph-texts col-md-12 mt-2">
                                                                    Thank you for your reply

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row bg-std-reviews pb-3 ml-3 mr-3">
                                        <div class="col-md-6">
                                            <div class="container-fluid container-center">
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}" alt="image" class="img-round">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <span class="heading-forth ml-2">Harram Laraib</span>
                                                        <p class="paragraph-text ml-2">Student</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="view-date mt-3">02 March 2021</span>
                                        </div>
                                        <div class="container-fluid mt-3">
                                            <div class="star-fa1 ml-3 mt-0">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="paragraph-text1">4.0</span>
                                            </div>
                                            <p class="paragraph-texts mt-2 ml-3">
                                                It is a long established fact that a reader will be distracted by the readable
                                                content of a page when looking at0 its lyout. The point
                                                of using Lorem Ipsum is that it has more-or-less normal distribution of letters,
                                                as opposed to using 'Content here, content ere'
                                                making it look like readable English.

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
</section>
    <!-- end -->
@endsection
@section('scripts')
@include('js_files.frontJs')
@endsection
