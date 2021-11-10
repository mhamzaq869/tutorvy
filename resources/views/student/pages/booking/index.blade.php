@extends('student.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->


 <div class="content-wrapper " style="overflow: hidden;">
    <section id="bookingSection" >
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Booking    </p>
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
                    <div class="col-md-12 mb-1 ">
                        <div class=" card  bg-toast infoCard">
                            <div class="card-body row">
                                <div class="col-md-1 text-center">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11 pl-0">
                                    <small>
                                        Ticket Details and all about your isuues opened for dicussion <a href="#">Learn More</a>
                                    </small>
                                    <a href="#" class="cross"  onclick="hideCard()">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <nav>
                            <div class="nav nav-stwich" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home " role="tab" aria-controls="nav-home" aria-selected="true">
                                    All
                                    <span class="counter-text bg-primary"> {{count($all)}} </span>
                                </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">
                                    Pending
                                    <span class="counter-text bg-warning"> {{count($pending)}} </span>

                                </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">
                                    Confirmed
                                    <span class="counter-text bg-success"> {{count($confirmed)}} </span>

                                </a>

                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">
                                    Completed
                                    <span class="counter-text bg-info"> {{count($completed)}} </span>

                                </a>
                                <a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel"
                                    role="tab" aria-controls="nav-cancel" aria-selected="false">
                                    Cancelled
                                    <span class="counter-text bg-danger"> {{count($cancelled)}} </span>

                                </a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr
                                                            style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                            <th scope="col"> Tutor </th>
                                                            <th scope="col"> Subjects </th>
                                                            <th scope="col">
                                                                Topic
                                                            </th>
                                                            <th scope="col">Time
                                                            </th>

                                                            <th scope="col">Duration
                                                                </th>
                                                            <th scope="col">Payment
                                                            </th>
                                                            <th scope="col">Status
                                                            </th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($all != "[]")
                                                            @foreach ($all as $booking)
                                                                @php
                                                                $tz = get_local_time();
                                                                $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                                $time = $dt->format('g:i a');

                                                                @endphp
                                                            <tr>
                                                                <td class="pt-4">
                                                                    {{$booking->tutor->first_name}} {{$booking->tutor->last_name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->subject->name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->topic}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$time}} - {{$booking->class_date }}
                                                                </td>

                                                                <td class="pt-4">
                                                                    &nbsp;{{$booking->duration}} Hour(s)
                                                                </td>
                                                                <td class="pt-4">
                                                                    &nbsp;${{$booking->price}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    @if($booking->status == 1)
                                                                        <span class="bg-color-apporve3">
                                                                            Payment Pending
                                                                        </span>
                                                                    @elseif($booking->status == 2)
                                                                        <span class="bg-color-apporve1">
                                                                            Approved
                                                                        </span>
                                                                    @elseif($booking->status == 0)
                                                                        <span class="bg-color-apporve2">
                                                                            Pending
                                                                        </span>
                                                                    @elseif($booking->status == 3)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>
                                                                    @elseif($booking->status == 4)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>
                                                                    @endif
                                                                </td>

                                                                <td style="text-align: center;">
                                                                        @if($booking->status == 1 )
                                                                            <button  onclick="pay_now({{$booking->id}})" id="pay_now_btn_{{$booking->id}}" type="button" role="button" class="cencel-btn mr-2"> Pay Now </button>
                                                                            <button type="button" id="pay_now_loader_{{$booking->id}}" style="display:none" disabled role="button" class="btn btn-primary btn-sm"> Processing </button>
                                                                        @endif
                                                                        <a href="{{route('student.booking-detail',[$booking->id])}}">
                                                                            <button class="schedule-btn" type="button">
                                                                                View details
                                                                            </button>
                                                                        </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td>No Booking Found</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    <!-- end -->
                            </div>

                            <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr
                                                            style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                            <th scope="col">Tutor</th>
                                                            <th scope="col">Subjects</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">Payment</th>
                                                            <th scope="col">
                                                                Status
                                                            </th>
                                                            <!-- <th scope="col">Review</th> -->
                                                            <!-- <th scope="col"></th> -->
                                                            <th scope="col" style="width:119px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($confirmed != "[]")
                                                            @foreach ($confirmed as $booking)
                                                                @php

                                                                $tz = get_local_time();
                                                                $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                                $time = $dt->format('g:i a');

                                                                @endphp
                                                                <tr>
                                                                    <td class="pt-4">
                                                                    {{$booking->tutor->first_name}} {{$booking->tutor->last_name}}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        {{$booking->subject->name}}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        {{$booking->topic}}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        {{$time}} - {{$booking->class_date }}
                                                                    </td>

                                                                    <td class="pt-4">
                                                                        &nbsp;{{$booking->duration}} Hour(s)
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        &nbsp;${{$booking->price}}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        @if($booking->status == 1)
                                                                            <span class="bg-color-apporve3">
                                                                                Payment Pending
                                                                            </span>
                                                                        @elseif($booking->status == 2)
                                                                            <span class="bg-color-apporve1">
                                                                                Approved
                                                                            </span>
                                                                        @elseif($booking->status == 0)
                                                                            <span class="bg-color-apporve2">
                                                                                Pending
                                                                            </span>
                                                                        @elseif($booking->status == 3)
                                                                            <span class="bg-color-apporve">
                                                                                Cancelled
                                                                            </span>
                                                                        @elseif($booking->status == 4)
                                                                            <span class="bg-color-apporve">
                                                                                Cancelled
                                                                            </span>
                                                                        @endif
                                                                    </td>
                                                                    <td class="pt-3 pb-3" style="text-align: center; " >

                                                                        <a href="{{route('student.booking-detail',[$booking->id])}}"  class="schedule-btn">

                                                                                View details
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                        <tr>
                                                            <td>No Booking Found</td>
                                                        </tr>
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>

                            <div class="tab-pane tab-border-none fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr
                                                            style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                            <th scope="col">Tutor</th>
                                                            <th scope="col">Subjects</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">Payment</th>
                                                            <th scope="col">
                                                                Status
                                                            </th>
                                                            <!-- <th scope="col">Review</th> -->
                                                            <!-- <th scope="col"></th> -->
                                                            <th scope="col" style="width:214px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($pending !="[]")
                                                        @foreach ($pending as $booking)
                                                            @php

                                                            $tz = get_local_time();
                                                            $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                            $time = $dt->format('g:i a');

                                                            @endphp
                                                            <tr>
                                                                <td class="pt-4">
                                                                {{$booking->tutor->first_name}} {{$booking->tutor->last_name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->subject->name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->topic}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$time}} - {{$booking->class_date }}
                                                                </td>

                                                                <td class="pt-4">
                                                                    &nbsp;{{$booking->duration}} Hour(s)
                                                                </td>
                                                                <td class="pt-4">
                                                                    &nbsp;${{$booking->price}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    @if($booking->status == 1)
                                                                        <span class="bg-color-apporve3">
                                                                            Payment Pending
                                                                        </span>
                                                                    @elseif($booking->status == 2)
                                                                        <span class="bg-color-apporve1">
                                                                            Approved
                                                                        </span>
                                                                    @elseif($booking->status == 0)
                                                                        <span class="bg-color-apporve2">
                                                                            Pending
                                                                        </span>
                                                                    @elseif($booking->status == 3)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>
                                                                    @elseif($booking->status == 4)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>
                                                                    @endif
                                                                </td>
                                                                <td class="pt-3 pb-3 action_button" style="text-align: center; " >
                                                                    <div class="d-flex justify-content-center">
                                                                        @if($booking->status == 1 )
                                                                            <button  onclick="pay_now({{$booking->id}})" id="pay_now_btn_{{$booking->id}}" type="button" role="button" class="cencel-btn mr-2"> Pay Now </button>
                                                                            <button type="button" id="pay_now_loader_{{$booking->id}}" style="display:none" disabled role="button" class="btn btn-primary btn-sm"> Processing </button>
                                                                        @endif
                                                                        <a href="{{route('student.booking-detail',[$booking->id])}}"  class="schedule-btn"> View details </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td>No Booking Found</td>
                                                        </tr>
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>

                            <div class="tab-pane tab-border-none fade" id="nav-about" role="tabpanel"
                                aria-labelledby="nav-about-tab">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Tutor</th>
                                                        <th scope="col">Subjects</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
                                                        <th scope="col">
                                                                Status
                                                            </th>
                                                        <th scope="col">Review</th>
                                                        <!-- <th scope="col"></th> -->
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($completed !="[]")
                                                        @foreach ($completed as $booking)
                                                            @php

                                                            $tz = get_local_time();
                                                            $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                            $time = $dt->format('g:i a');

                                                            @endphp
                                                            <tr>
                                                                <td class="pt-4">
                                                                {{$booking->tutor->first_name}} {{$booking->tutor->last_name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->subject->name}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$booking->topic}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    {{$time}} - {{$booking->class_date }}
                                                                </td>

                                                                <td class="pt-4">
                                                                    &nbsp;{{$booking->duration}} Hour(s)
                                                                </td>
                                                                <td class="pt-4">
                                                                    &nbsp;${{$booking->price}}
                                                                </td>
                                                                <td class="pt-4">
                                                                    @if($booking->status == 1)
                                                                        <span class="bg-color-apporve3">
                                                                            Payment Pending
                                                                        </span>
                                                                    @elseif($booking->status == 2)
                                                                        <span class="bg-color-apporve1">
                                                                            Approved
                                                                        </span>
                                                                    @elseif($booking->status == 0)
                                                                        <span class="bg-color-apporve2">
                                                                            Pending
                                                                        </span>
                                                                    @elseif($booking->status == 3)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>
                                                                    @elseif($booking->status == 4)
                                                                        <span class="bg-color-apporve">
                                                                            Cancelled
                                                                        </span>

                                                                    @endif
                                                                </td>
                                                                <td class="pt-3 pb-3" style="text-align: center; " >
                                                                    <a class="cencel-btn mr-2" data-toggle="modal" data-target="#payModel" >
                                                                        Pay Now
                                                                    </a>
                                                                    <a href="{{route('student.booking-detail',[$booking->id])}}"  class="schedule-btn">

                                                                            View details
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td>No Booking Found</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane tab-border-none fade" id="nav-cancel" role="tabpanel"
                                aria-labelledby="nav-cancel-tab">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">Tutor</th>
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Payment</th>
                                                    <th scope="col">
                                                            Status
                                                        </th>
                                                    <th scope="col">Review</th>
                                                    <!-- <th scope="col"></th> -->
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($cancelled !="[]")
                                                    @foreach ($cancelled as $booking)
                                                        @php
                                                        $tz = get_local_time();
                                                        $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                        $time = $dt->format('g:i a');

                                                        @endphp
                                                        <tr>
                                                            <td class="pt-4">
                                                            {{$booking->tutor->first_name}} {{$booking->tutor->last_name}}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{$booking->subject->name}}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{$booking->topic}}
                                                            </td>
                                                            <td class="pt-4">
                                                                {{$time}} - {{$booking->class_date }}
                                                            </td>

                                                            <td class="pt-4">
                                                                &nbsp;{{$booking->duration}} Hour(s)
                                                            </td>
                                                            <td class="pt-4">
                                                                &nbsp;${{$booking->price}}
                                                            </td>
                                                            <td class="pt-4">
                                                                @if($booking->status == 1)
                                                                    <span class="bg-color-apporve3">
                                                                        Payment Pending
                                                                    </span>
                                                                @elseif($booking->status == 2)
                                                                    <span class="bg-color-apporve1">
                                                                        Approved
                                                                    </span>
                                                                @elseif($booking->status == 0)
                                                                    <span class="bg-color-apporve">
                                                                        Pending
                                                                    </span>
                                                                @elseif($booking->status == 3)
                                                                    <span class="bg-color-apporve">
                                                                        Cancelled
                                                                    </span>
                                                                @elseif($booking->status == 4)
                                                                    <span class="bg-color-apporve">
                                                                        Cancelled
                                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td class="pt-3 pb-3" style="text-align: center; " >
                                                                <a class="cencel-btn mr-2" onclick >
                                                                    Pay Now
                                                                </a>
                                                                <a href="{{route('student.booking-detail',[$booking->id])}}"  class="schedule-btn">

                                                                        View details
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>No Booking Found</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!--Pay Now Class Modal -->
        <div class="modal fade" id="payModel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-4 pb-4">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                        <div class="col-md-12">
                                            <div class="iconss" style="text-align: center;">

                                                <img src="{{asset ('admin/assets/img/ico/doollarss.png')}}" width="60px">
                                                <p
                                                    style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                                    Payment Details</p>
                                                <!-- <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                                    class="ml-4 mr-4">
                                                    Send approved time for class.
                                                </p> -->
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Class Details</h3>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 ">
                                            <p class="mb-0">Schedule Date: </p>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 text-right" >
                                            <strong id="scdule_date"></strong>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6">
                                            <p class="mb-0">Schedule Time: </p>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 text-right" >
                                            <strong id="class_time"></strong>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6">
                                             <p class="">Schedule Duration: </p>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 text-right" >
                                            <strong id="duration"></strong>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Payment Details</h3>
                                         </div>

                                        <div class="col-md-6 col-6 col-sm-6">
                                            <p class="mb-0">Tutor Fee: </p>
                                        </div>

                                        <div class="col-md-6 col-6 col-sm-6 text-right" >
                                            <strong id="price"></strong>
                                        </div>

                                        <div class="col-md-6 col-6 col-sm-6">
                                            <p class="mb-0">Service Fee: <span id="total_commision"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 text-right">
                                            <strong id="commission"></strong>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6">
                                            <p class="mb-0">Total Fee: </p>
                                        </div>
                                        <div class="col-md-6 col-6 col-sm-6 text-right">
                                            <strong id="total_price"></strong>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Payment Method</h3>
                                            @if ($defaultPay == null)
                                            <p> <i class="fa fa-info-circle"></i> You haven't select any default payment method, Please select any method by following this
                                                <a href="{{route('student.settings')}}">Payment Method</a>
                                            </p>
                                            @endif
                                         </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/paypal2.png')}}" class="w-50" alt="">

                                                        <span class="round">
                                                        <input id="checkbox1" name="paytype" onclick="paymentMethod(this.value)" class="radio-custom" value="paypal" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'paypal' ? 'checked' : '') }}>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/skrill.png')}}" class="w-50" alt="">

                                                        <span class="round">
                                                        <input id="checkbox2" name="paytype" onclick="paymentMethod(this.value)" value="skrill" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'skrill' ? 'checked' : '') }}>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/icons8-wallet-64.png')}}" class="w-50" alt="">

                                                        <span class="round">
                                                        <input id="checkbox3" name="paytype" onclick="paymentMethod(this.value)"  value="wallet" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'wallet' ? 'checked' : '') }}>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 text-right mt-3" id="show_pay_btn">

                                            <form action="{{url('/student/booking/payment')}}" id="payment" method="post" target="_blank">
                                                @csrf
                                                <div id="paytype"></div>
                                                <span></span>

                                            </form>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@section('scripts')
    @include('js_files.student.bookingJs')
@endsection

