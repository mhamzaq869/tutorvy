@extends('admin.layouts.app')
@section('content')

<div class="container-fluid pb-4 mt-5">
    <h1>< Tutor profile </h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="bg-white pt-3 pb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right ">

                            <p class="view-bookings" style="cursor: pointer;" data-toggle="modal"
                                data-target="#exampleModalCenterup">
                                Upgrade badge
                                <img src="{{asset('admin/assets/img/ico/yellow-rank.png')}}" class="yellow-rank ml-2" />
                            </p>

                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-2 text-main-center">
                    <div class="row">
                        <div class="col-md-5 mt-2">
                            <img src="{{asset('admin/assets/img/ico/porfile-main.svg')}}"
                                class="w-100 profile-responsive img-round" />
                        </div>
                        <div class="col-dm-7 text-main-center-1">
                            <p class="heading-forth name-text mt-2">{{ $tutor->first_name }} {{ $tutor->last_name }}</p>
                            <p class="name-text1 paragraph-text1">Tutor</p>
                            <div class="star-fa">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="paragraph-text1">4.0</span>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="line-profile">&nbsp;</div>
                <div class="container-fluid">
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
                                <input type="checkbox" onchange="changeTutorStatus(`{{$tutor->id}}`)" {{ ($tutor->status == 1) ? 'checked' : ''}}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <a href="activity.html" class="w-100 btn active-text-1 mt-4"> View activity log</a>
                </div>
            </div>
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
            <div class="mt-3">
                <div class="container-fluid m-0 p-0">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="bg-white pt-3 pb-4 border-radius-2 pl-2">
                                <span class="paragraph-text0">Paid</span>
                                <h2 class="mt-2 ml-1">$265</h2>
                                <a href="payment.html">
                                    <p class="view-bookings mt-0 mr-2">View</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white pt-3 pb-4 border-radius-2 pl-2">
                                <span class="paragraph-text0">Pending </span>
                                <h2 class="mt-2 ml-1">$265</h2>
                                <a href="payment.html">
                                    <p class="view-bookings mt-0 mr-2">View</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 container-fluid bg-white pt-4 pb-3 mb-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{asset('admin/assets/img/ico/hash-icon.png')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-8">
                                <h3 class="mt-2 ml-3">16

                                    <span class="paragraph-text01">Reports</span>

                                </h3>
                            </div>
                            <div class="col-md-2">
                                <a href="report.html" class="view-bookings view-bookings-1">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 container-fluid bg-white pt-4 pb-4 mb-3">
                        <div class="row pb-3">
                            <div class="col-md-2">
                                <img src="{{asset('admin/assets/img/ico/book-icon.svg')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-8">
                                <p class="paragraph-text01 mb-0 mt-1">Subject</p>
                                <p class="heading-forth ml-1">
                                    {{$tutor->subjects}}
                                </p>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('admin.tutorSubjects',[$tutor->id]) }}">
                                    <p class="view-bookings view-bookings-1">View</p>
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
                                    {{$tutor->language}}
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
                                <p class="paragraph-text01 mb-0 mt-1">Lahore</p>
                                <p class="heading-forth ml-1">
                                    {{$tutor->address}}
                                </p>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="container-fluid bg-white pt-4">
                        <h3>Education</h3>
                        <hr />
                       
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <span class="heading-third1"> BSC Chemistry </span>
                                <span class="paragraph-text1 ml-3"> 2014
                                </span>
                                <p class="notification-text3 mt-2">University of Punjab Lahore, Pakistan</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container-fluid bg-white pt-4 mt-4">
                        <h3>Work experience</h3>
                        <hr />
                        @foreach($tutor->professional as $exp)
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <span class="heading-third1"> {{$exp->designation}} </span>
                                    <span class="paragraph-text1 ml-3"> 2014
                                    </span>
                                    <p class="notification-text3 mt-2">{{$exp->organization}}</p>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container-fluid bg-white">
                <div class="row pt-4 pb-4">
                    <div class="col-md-3 col-6">
                        <div class="">
                            <img src="{{asset('admin/assets/img/ico/blue-icon.svg')}}" alt="image" />
                            <span class="heading-third-number ml-2">16</span>
                            <p class="notification-text2 notification-text21">total classes</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="">
                            <img src="{{asset('admin/assets/img/ico/green-icon.svg')}}" alt="image" />
                            <span class="heading-third-number ml-2">${{$tutor->hourly_rate}}</span>
                            <p class="notification-text2 notification-text21">Per hour rate</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 m-0 p-0">
                        <div class="col-6-btn">
                            <img src="{{asset('admin/assets/img/ico/red-icon.svg')}}" alt="image" />
                            <span class="heading-third-number ml-3">9 to 5pm</span>
                            <p class="notification-text2 notification-text21">Availability</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="col-6-btn">
                            <img src="{{asset('admin/assets/img/ico/yellow-icon.svg')}}" alt="image" />
                            <span class="heading-third-number ml-2">100%</span>
                            <p class="notification-text2 notification-text21">Response time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3 bg-white pt-3 pb-3">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            About tutor
                        </h3>
                        <article class="container-read-more">
                            <p class="paragraph-texts mt-1">
                                {{$tutor->bio}}
                            </p>
                        </article>
                        </p>
                    </div>
                </div>
            </div>
            <br />
            <h3>
                Courses
            </h3>

            <div class="container-fluid bg-white mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <table class="pt-2 tableed table  table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Srno.</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Title </th>
                                    <th scope="col">Student</th>
                                    <th scope="col" style="position: relative;left: -2px;"> <span
                                            style="visibility: hidden;">asd</span>reviews </th>
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
                                            <td class="pt-4"> <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="paragraph-text1">4.0</span>
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
                                                <a href="course.html" class="schedule-btn btn">
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
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenterup" tabindex="-1" role="dialog"
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
                                        </div>
                                        <div class="col-md-6 pb-3">
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
                                        </div>
                                        <div class="col-md-6 pb-3">
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
                                        </div>
                                        <div class="col-md-6 pb-3">
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
            <h3>
                Courses approvals
            </h3>

            <div class="container-fluid bg-white mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <table class="pt-2 tableed table  table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Srno.</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Title</th>
                                    <th scope="col"></th>
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
                                        <td class="pt-4">{{$course->title}}</td>
                                        <td class="pt-3">
                                        </td>
                                        <td class="pt-3 float-right">
                                            <a href="approve.html" class="btn cencel-btn">
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
            <div class="mt-3 container-fluid bg-white pt-3 pb-3">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="heading-third">Student reviews</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="report.html">
                            <span class="view-bookings">
                                View all reviews
                            </span>
                        </a>
                    </div>
                </div>

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

@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js') 
@include('js_files.admin.tutor')
@endsection
