@extends('tutor.layouts.app')
<style>



</style>
@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p  class="mr-3 heading-first">
                         Bookings
                    </p>
                </div>
            </div>

        <div class="row bg-white ml-2 mr-2">
            <div class="col-md-12 mb-1 ">
                <div class=" card  bg-toast infoCard">
                    <div class="card-body row">
                        <div class="col-md-1 text-center">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-11 pl-0">
                            <small>
                                    Booking Details and all about your schedule for meetings <a href="#">Learn More</a>
                            </small>
                            <a href="#" class="cross pull-right"  onclick="hideCard()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <nav class="">
                    <div class="nav nav-stwich pb-0" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                            href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            All
                            <span class="counter-text bg-primary all_counts" id="all_counts">{{count($all)}}</span>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                            aria-selected="false">
                            Pending
                            <span class="counter-text bg-warning pending_counts" id="pending_counts"> {{count($pending)}} </span>
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                            aria-selected="false">
                            Confirmed
                            <span class="counter-text bg-success confirmed_counts" id="confirmed_counts">{{count($confirmed)}}</span>
                        </a>

                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                            role="tab" aria-controls="nav-about" aria-selected="false">
                            Completed
                            <span class="counter-text bg-info completed_counts" id="completed_counts">{{count($completed)}}</span>
                        </a>
                        <a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel"
                            role="tab" aria-controls="nav-cancel" aria-selected="false">
                            Cancelled
                            <span class="counter-text bg-danger cancelled_counts" id="cancelled_counts"> {{count($cancelled)}} </span>
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">
                                                        Student
                                                    </th>
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
                                                        Duration
                                                    </th>
                                                    <th scope="col">
                                                        Payment
                                                    </th>
                                                    <th scope="col">
                                                        Status
                                                    </th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="all_booking_table">
                                               @if($all)
                                                    @foreach ($all as $booking)
                                                        @php

                                                        $tz = get_local_time();
                                                        $dt = new DateTime($booking->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                        $time = $dt->format('g:i a');

                                                        @endphp
                                                        <tr id="all_{{$booking->id}}">
                                                            <td class="pt-4">
                                                                <a href="{{route('tutor.student',[$booking->user->id])}}" >
                                                                    {{$booking->user->fullname}}
                                                                </a>
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
                                                                <a class="schedule-btn" href="{{route('tutor.booking.detail',[$booking->id])}}">

                                                                        View details
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>No Booking FOund</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                    </div>

                    <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">Student</th>
                                                    <th scope="col">Subjects </th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Payment</th>
                                                    <th scope="col">
                                                        Status
                                                    </th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="confirm_booking_table">
                                            @if($confirmed)
                                                @foreach ($confirmed as $booking)
                                                <tr>
                                                    <td class="pt-4">
                                                        <a href="{{route('tutor.student',[$booking->user->id])}}" >
                                                            {{$booking->user->fullname}}
                                                        </a>
                                                    </td>
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
                                                        @endif
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="{{route('tutor.booking.detail',[$booking->id])}}">
                                                            <button class="schedule-btn" type="button">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            @else
                                                <td>No Booking Found</td>
                                            @endif


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                            </div>


                        <div class="tab-pane tab-border-none fade" id="nav-contact" role="tabpanel"
                            aria-labelledby="nav-contact-tab">

                                <div class="container-fluid ">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Student</th>
                                                        <th scope="col">Subjects </th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
                                                        <th scope="col">
                                                            Status
                                                        </th>
                                                        <th scope="col">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="all_pending_table">
                                                @if($pending)
                                                    @foreach ($pending as $booking)
                                                    <tr id="pending_{{$booking->id}}">
                                                        <td class="pt-4">
                                                            <a href="{{route('tutor.student',[$booking->user->id])}}" >
                                                                {{$booking->user->fullname}}
                                                            </a>
                                                        </td>
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
                                                            @endif
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <a href="{{route('tutor.booking.detail',[$booking->id])}}">
                                                                <button class="schedule-btn" type="button">
                                                                    View details
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <td>No Booking Found</td>
                                                @endif

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>

                        <div class="tab-pane tab-border-none fade" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">

                                <div class="container-fluid ">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Student </th>
                                                        <th scope="col">Subjects </th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
                                                        <th scope="col">
                                                            Status
                                                        </th>
                                                        <th scope="col">Rating</th>
                                                        <!-- <th scope="col"></th> -->
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @if($completed)
                                                    @foreach ($completed as $booking)
                                                    <tr>
                                                        <td class="pt-4">
                                                            <a href="{{route('tutor.student',[$booking->user->id])}}" >
                                                                {{$booking->user->fullname}}
                                                            </a>
                                                        </td>
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
                                                            @endif
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <a href="{{route('tutor.booking.detail',[$booking->id])}}">
                                                                <button class="schedule-btn" type="button">
                                                                    View details
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                     <td>No Booking Found</td>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>

                        <div class="tab-pane tab-border-none fade" id="nav-cancel" role="tabpanel"
                            aria-labelledby="nav-cancel-tab">

                                <div class="container-fluid ">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Student</th>
                                                        <th scope="col">Subjects</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
                                                        <th scope="col">
                                                            Status
                                                        </th>
                                                        <th scope="col">Rating</th>
                                                        <!-- <th scope="col"></th> -->
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if($cancelled)
                                                    @foreach ($cancelled as $booking)
                                                    <tr>
                                                        <td class="pt-4">

                                                            {{$booking->user->fullname}}
                                                        </td>
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
                                                            <a href="{{route('tutor.booking.detail',[$booking->id])}}">
                                                                <button class="schedule-btn" type="button">
                                                                    View details
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                     <td>No Booking Found</td>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    var pending_booking = {!! $pending !!};
    console.log(pending_booking, "pending_booking");
    const date = new Date();
    const offset = date.getTimezoneOffset();
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    console.log(timezone);

</script>
