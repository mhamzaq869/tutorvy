@extends('admin.layouts.app')
@section('content')
<style>
    .w-30{
        width:30%;
    }
    .h-auto{
        height:auto;
    }
    .fr{
        width:25px;
    }
</style>
<!--section start  -->
<section id="tutorProsection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                  
                    <h1 class="animate__animated animate__bounce animate__delay-0.3s">
                        <a href="{{ route ('admin.tutor') }}">
                        <
                        </a>
                         Tutor Profile
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="row card-body text-center">
                            <small class="mb-3">
                                @if($tutor->rank == 0)
                                <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">New <img src="/assets/images/ico/bluebadge.png" class="wd-30" alt="" widht="30">
                                </a>
                                @elseif($tutor->rank == 1)
                                <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Emerging <img src="/assets/images/ico/yellow-rank.png" class="wd-30" alt="" widht="30">
                                </a>
                                @elseif($tutor->rank == 2)
                                <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Top Rank <img src="/assets/images/ico/rank.png" class="wd-30" alt="" widht="30">
                                </a>
                                @else
                                <a class="ab_right" href="#" data-toggle="modal"
                                    data-target="#rankModal">Upgrade badge <img src="/assets/images/ico/rank.png" class="wd-30" alt="" widht="30">
                                </a>
                                @endif
                                
                            </small>
                            <div class="col-md-12 mt-3">
                                @if($tutor->picture != null)
                                    <img src="{{asset($tutor->picture)}}" class="round-profile" alt="re" class="w-50">
                                @else
                                    <img src="{{asset('admin/assets/img/ico/Square-white.jpg')}}" class="round-profile" alt="re" class="w-50">
                                @endif
                            </div>
                            <div class="col-md-12 ">
                                <!-- <p class="heading-forth name-text mt-2">{{ $tutor->first_name }} {{ $tutor->last_name }} <span><img src="{{asset('admin/assets/img/ico/check.png')}}" data-toggle="tooltip" data-placement="bottom" title="This user is verified by the tutorvy authorities due to his sustained and appreciatable performance in the field" alt=""></span></p> -->
                                <p class="heading-forth name-text mt-2">{{ $tutor->first_name }} {{ $tutor->last_name }} 
                                    <svg xmlns="http://www.w3.org/2000/svg" data-toggle="tooltip" data-placement="bottom" title="This user is verified by the tutorvy authorities due to his sustained and appreciatable performance in the field" aria-hidden="true" viewBox="0 0 14 14"  role="img" style="width:16px;vertical-align: text-top;">
                                    <path fill="#1273FE" d="M13.72 7.03c.45-.56.34-1.39-.24-1.82l-.55-.41c-.34-.25-.53-.66-.51-1.08l.03-.68c.03-.72-.53-1.32-1.25-1.33h-.68c-.42 0-.81-.22-1.05-.57L9.11.57c-.39-.6-1.2-.75-1.79-.33l-.55.4c-.34.24-.79.3-1.18.15L4.95.55c-.67-.25-1.41.11-1.64.79l-.21.65c-.14.4-.46.71-.87.82l-.65.18C.89 3.19.5 3.92.71 4.6l.21.65c.13.41.04.85-.22 1.18l-.42.54c-.45.56-.34 1.39.24 1.81l.55.41c.34.25.53.66.51 1.08l-.03.68c-.03.72.54 1.32 1.25 1.33h.68c.42 0 .81.22 1.05.57l.37.57c.39.6 1.21.75 1.79.33l.55-.4c.34-.25.78-.31 1.18-.16l.64.24c.67.25 1.41-.1 1.64-.79l.21-.65c.13-.4.45-.71.86-.82l.65-.17c.69-.19 1.09-.92.87-1.61l-.21-.65c-.13-.4-.05-.85.22-1.18l.42-.53zM6.06 9.84L3.5 7.27l1.23-1.23 1.33 1.33 3.21-3.21L10.5 5.4 6.06 9.84z"></path></svg>
                                    
                                </p>
                                <p class="name-text1 paragraph-text1 mb-0 ">
                                    {{$tutor->tagline}}
                                </p>
                                
                                @if($tutor->rating == 1)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">1.0</span>
                                </p>
                                @elseif($tutor->rating == 2)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">2.0</span>
                                </p>
                                @elseif($tutor->rating == 3)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">3.0</span>
                                </p>
                                @elseif($tutor->rating == 4)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">4.0</span>
                                </p>
                                @elseif($tutor->rating == 5)
                                <p class="name-text1 paragraph-text1 mb-0">
                                    <span class="fa fa-star checked"></span>
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
                                    <span class="fa fa-star "></span>
                                    <span class="paragraph-text1">0.0</span>
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="line-profile">&nbsp;</div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('admin/assets/img/ico/delete-icon.png')}}" alt="image" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="setting.html">
                                            <img src="{{asset('admin/assets/img/ico/edit-icon.png')}}" alt="image" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <label class="switch" style="position: relative;left: -10px;top:5px;width: 60px;">
                                            <input type="checkbox" onchange="changeTutorStatus(`{{$tutor->id}}`)" {{ ($tutor->status == 2) ? 'checked' : ''}}>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="activity.html" class="w-100 btn active-text-1 mt-4"> View activity log</a>
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
                                        <div class="col-md-8">
                                            <small class="text-grey">Paid Payments</small>
                                            <h2>$0</h2>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="payment.html" class="mt-2">
                                                <p class="view-bookings">View</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <small class="text-grey">Pending Payments</small>
                                            <h2>${{$total_pending_payments}}</h2>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="payment.html" class="mt-2">
                                                <p class="view-bookings">View</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <img src="{{asset('admin/assets/img/ico/hash-icon.png')}}" alt="hash-icon" height="40px"
                                            class="" />
                                        </div>
                                        <div class="col-md-5">
                                            <h2 class="mt-2">16 <span class="text-grey f-14"> Reports</span></h2>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="payment.html" class="mt-2">
                                                <p class="mt-2 view-bookings">View</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row pb-3">
                                        <div class="col-md-2">
                                            <img src="{{asset('admin/assets/img/ico/book-icon.svg')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-6">
                                            <p class="paragraph-text01 mb-0 mt-1">Subject</p>
                                            <p class="heading-forth ml-1">
                                                {{$tutor->subjects}}
                                            </p>
                                            </p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="{{ route('admin.tutorSubjects',[$tutor->id]) }}">
                                                <p class="view-bookings">View</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-2">
                                            <img src="{{asset('admin/assets/img/ico/red-icons.png')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-10">
                                            <p class="paragraph-text01 mb-0 mt-1">Language</p>
                                            <p class="heading-forth ml-1">
                                                {{$tutor->lang_short}}
                                            </p>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row pb-3">
                                        <div class="col-md-2">
                                            <img src="{{asset('admin/assets/img/ico/green-icon.svg')}}" alt="hash-icon" height="40px"
                                                class="mt-1" />
                                        </div>
                                        <div class="col-md-10">
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
                                                    <div class="col-md-9">
                                                        <span class="heading-third1"> {{$edu->degree->name ?? ''}} </span>
                                                    </div>
                                                    <div class="col-md-3">
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
                                                    <div class="col-md-9">
                                                        <span class="heading-third1"> {{$exp->designation}} </span>
                                                    </div>
                                                    <div class="col-md-3">
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
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('admin/assets/img/ico/blue-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="mb-0">{{$total_classes}}</h3>
                                            <p class="mb-0">Total classes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                                <img src="{{asset('admin/assets/img/ico/green-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8">
                                            @if($tutor->hourly_rate)
                                            <h3 class="mb-0">${{$tutor->hourly_rate}}</h3>
                                            @else
                                            <h5 class="mb-0">No rates defined yet</h3>
                                            @endif
                                            <p class="mb-0">Per hour rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('admin/assets/img/ico/red-icon.svg')}}" alt="image" />

                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="mb-0">9am to 5am</h3>
                                            <p class="mb-0">Availability</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('admin/assets/img/ico/yellow-icon.svg')}}" alt="image" />
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="mb-0">100%</h3>
                                            <p class="mb-0">Response time</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>
                                        About tutor
                                    </h3>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right responseTime">
                                    <p class="heading-fourth"> 
                                        <span>
                                            <img src="{{asset('admin/assets/img/ico/watchs.png')}}" class="mr-2 fr" alt="">
                                        </span> 
                                        Response Time: <strong>1 hour</strong>
                                    </p>
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
                                Subjects
                            </h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="pt-2 tableed table  table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Srno.</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="subject_table">
                                        @foreach($tutor->teach as $tutor_plan)
                                        <tr>
                                            <td class="pt-4">{{$loop->iteration}}</td>
                                            <td class="pt-4">{{$tutor_plan->sub_name}}</td>
                                            <td >
                                                <a href="javascript:void(0)" onclick="showTutorPlans('{{$tutor_plan->sub_name}}',{{$tutor_plan->user_id}},{{$tutor_plan->subject_id}})" class="schedule-btn btn">
                                                    View Plans
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                        <h3>Subjects</h3>
                                        <ul class="pl-0 ml-0">
                                            <li>Assembly Language</li>
                                            <li>Assembly Language</li>
                                            <li>Assembly Language</li>
                                            <li>Assembly Language</li>
                                        </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Student Levels</h3>
                                    <ul class="pl-0 ml-0">
                                        <li>Secondary School</li>
                                        <li>Elementory School</li>
                                        <li>Post Secondary School</li>
                                        <li>High School</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Rate per hour</h3>
                                    <ul class="pl-0 ml-0">
                                        <li>$ 3500</li>
                                        <li>$ 1500</li>
                                        <li>$ 9500</li>
                                        <li>$ 6500</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row headings mt-3">
                        <div class="col-md-6 col-6">
                            <h3>
                                Courses
                            </h3>
                        </div>
                        <div class="col-md-6 col-6 text-right">
                            <a href="#"> View all tutor requests</a>
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
                                                <th scope="col">Title </th>
                                                <th scope="col">Student</th>
                                                <th scope="col" > Reviews </th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
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
                                                        <td class="text-center pt-4">26</td>
                                                        <td class="pt-4 text-center"> <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="paragraph-text1 ">(4.0)</span>
                                                        </td>
                                                        <td class="pt-4">
                                                            <img src="{{asset('admin/assets/img/ico/delete-icon.svg')}}" alt="2" data-toggle="modal"
                                                                data-target="#exampleModalCenters" />
                                                        </td>
                                                        <td class="pt-4">
                                                            <a href="edit-course.html"> <img src="{{asset('admin/assets/img/ico/edit-icon.svg')}}"
                                                                    alt="1" /></a>
                                                        </td>
                                                        <td class="pt-4">
                                                            <label class="switch"
                                                                style="position: relative;left: -10px;width: 60px;">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </td>
                                                        <td class="pt-3">
                                                            <a href="{{route('admin.course-profile',[$course->id])}}" class="schedule-btn btn">
                                                                View</a>
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
                    <div class="row headings mt-3">
                        <div class="col-md-6 col-6">
                            <h3>
                                Courses Approval
                            </h3>
                        </div>
                        <div class="col-md-6 col-6 text-right">
                            <a href="#"> View all approvals</a>
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
                                                <th scope="col"></th>
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
                                                    <td class="pt-4 w-30" >{{$course->title}}</td>
                                                    <td class="pt-3 float-right">
                                                        <a href="{{route('admin.course-request',[$course->id])}}" class="btn cencel-btn">
                                                            View
                                                        </a>
                                                        <button class="schedule-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenterd">Assign</button>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="row headings mt-3">
                                <div class="col-md-6 col-6">
                                    <h3>
                                        Student Reviews
                                    </h3>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <a href="#"> View all reviews</a>
                                </div>
                            </div>
                            <div class="row">
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
<!-- deleet Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                    <h3 class="mt-3 pb-2">
                        Remove tutor
                    </h3>
                    <p class="paragraph-text-1 pb-3">Are you sure you want to remove member?</P>
                    <button type="button" class="cencel-btn w-25" data-dismiss="modal">Yes
                    </button>
                    <a href="" class="schedule-btn btn w-25">
                        No
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- delete -->

<div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                    <h3 class="mt-3 pb-2">
                        Remove course
                    </h3>
                    <p class="paragraph-text-1 pb-3">Are you sure you want to remove course?</P>
                    <button type="button" class="cencel-btn w-25" data-dismiss="modal">Yes
                    </button>
                    <a href="" class="schedule-btn btn w-25">
                        No
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!--Rank Modal -->
<div class="modal fade" id="rankModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal-bodys modal-width">
                <div class="container text-center pb-3 pt-3">
                    <h3>
                        Upgrade badge
                    </h3>
                    <p class="paragraph-text mt-3 pb-3">
                        Upgrade tutor badge according to tutor's performance
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 pb-3">
                                <a href="#" class="rank-select">
                                    <div class="card pt-3 pb-3">
                                        <div class="container row">
                                            <div class="col-md-4">
                                                <img class="w-100 w-100-yellow"
                                                    src="{{asset('admin/assets/img/ico/yellow-rank.png')}}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-left">
                                                    <span class="heading-forth">
                                                        Top Ranked
                                                    </span>
                                                    <p class="paragraph-text">
                                                        After 100% tutting
                                                        success
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 pb-3">
                                <a href="#" class="rank-select">
                                    <div class="card pt-3 pb-3">
                                        <div class="container row">
                                            <div class="col-md-4">
                                                <img class="w-100 w-100-yellow"
                                                    src="{{asset('admin/assets/img/ico/blue-rank.png')}}" />
                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-left">
                                                    <span class="heading-forth">
                                                        Tutorvy verified
                                                    </span>
                                                    <p class="paragraph-text">
                                                        After 100% verification
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 pb-3">
                                <a href="#" class="rank-select">
                                    <div class="card pt-3 pb-3">
                                        <div class="container row">
                                            <div class="col-md-4">
                                                <img class="w-100 w-100-yellow"
                                                    src="{{asset('admin/assets/img/ico/green-rank.png')}}" />

                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-left">
                                                    <span class="heading-forth">
                                                        Emerging tutor
                                                    </span>
                                                    <p class="paragraph-text">
                                                        After 5 successful classes
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 pb-3">
                                <a href="#" class="rank-select">
                                    <div class="card pt-3 pb-3">
                                        <div class="container row">
                                            <div class="col-md-4">
                                                <img class="w-100 w-100-yellow"
                                                    src="{{asset('admin/assets/img/ico/red-rank.png')}}" />

                                            </div>
                                            <div class="col-md-8">
                                                <div class="text-left">
                                                    <span class="heading-forth">
                                                        Top Ranked
                                                    </span>
                                                    <p class="paragraph-text">
                                                        After 100% tutting
                                                        success
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                        <button class="schedule-btn w-25 mt-3"
                            style="float: right;">Upgrade</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="exampleModalCenterd" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p>Assgin</p>
            </div>
            <div class="modal-body">
                <div class="input-serach">
                    <input class="w-100" type="search" placeholder="Search members" />
                    <img class="serach-icon" src="{{asset('admin/assets/img/ico/Search.png')}}" />
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name">
                                <img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}" alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="{{asset('admin/assets/img/ico/profile-boy.svg')}}"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text">Assign</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="planModal" tabindex="-1" role="dialog"
    aria-labelledby="planModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header text-center">
            </div> -->
            <div class="modal-body h-auto">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img  src="{{asset('admin/assets/img/ico/dollars.png')}}" />
                    </div>
                    <div class="col-md-12 text-center mt-3">
                        <h3 id="subject_title"> </h3>
                    </div>
                </div>
                <div id="show_plans"></div>
            </div>
            <div class="modal-footer ">
                <div class="row">
                    <div class="col-md-12">
                        <button class="schedule-btn btn" data-dismiss="modal">
                            Okay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js') 
    @include('js_files.admin.tutor')
@endsection
