@extends('admin.layouts.app')
<style>
    
svg:not(:root) {
    overflow: hidden;
    width: 100%;
    padding-top: 3px;
}

.flex-1 {
    opacity: 0;
}
</style>
@section('content')

    @if(Auth::user()->role == 1)
    <!--section start  -->
    <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mt-3">
            <div class="row ml-1 mr-1">
                <div class="col-md-6">
                    <h1 class="animate__animated animate__bounce animate__delay-0.3s">
                        Dashboard
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- cards -->
            <div class="row ml-1 mr-1">
                <div class="col-md-9">
                    <div class="cards-list">
                        <h2 class="mt-4 mb-0 animate__bounceIn">
                            Statistics
                        </h2>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.tutor')}}" class="text-dark" style="text-decoration: none;">
                                    <div class="container card ">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{ $tutors_count }}
                                            </p>
                                            <p class="class-booking">
                                                Total tutors
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico" src="assets/img/ico/card-icon-1.svg" alt="blue-ico">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('admin.student')}}" class="text-dark" style="text-decoration: none;">
                                    <div class="container card ">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                {{ $students_count }}
                                            </p>
                                            <p class="class-booking">
                                                Total students
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1" src="assets/img/ico/card-icon-2.svg" alt="red-ico">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <div class="container card">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            0
                                        </p>
                                        <p class="class-booking">
                                            Total institutes
                                        </p>
                                    </div>
                                    <div class="iconside">
                                        <img class="card-ico1-1" src="assets/img/ico/card-icon-3.svg" alt="ico-blue">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <h2 class="mt-4 ml-3"> Users growth </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="selection pt-3 pl-3 mr-3">
                                    <div class="input-option">
                                        <select class="select float-right">
                                            <option>3 months</option>
                                            <option>6 months</option>
                                            <option>12 months</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1 class="d-flex number-postion">{{$all_users}}
                                            <span class="heading-user">users</span>
                                        </h1>
                                        <span class="heading-fifth-2">
                                            Showing user growth from last months
                                        </span>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="row class-row">
                                            <div class="col-md-4">
                                                <span class="dot"></span>
                                                <span class="ml-1 paragraph-text1-1"> Tutors</span>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="dot1"></span>
                                                <span class="ml-1 paragraph-text1-1"> Student</span>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="dot2"></span>
                                                <span class="ml-1 paragraph-text1-1"> Institutes</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- notification -->
                    <div class="row ">    
                        <div class="col-md-6">
                            <h2 class="mt-3 "> Notifications </h2>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="#" class="btn view-bookings"> View All</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 container-bg-1 mr-2 pb-2 pt-0 notifiaction-margin ">
                                        <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                            <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                <span class="notification-text-home">
                                                    Marina Hurst
                                                </span>
                                                <span class="paragraph-text">
                                                    request for a
                                                </span>
                                            </div>
                                            <div class="col-md-3 m-0 p-0">
                                                <span class="heading-sixth row time-top float-right mr-2">
                                                    10 min ago
                                                </span>
                                            </div>
                                        </div>
                                        <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                            <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                <span class="notification-text-home">
                                                    Marina Hurst
                                                </span>
                                                <span class="paragraph-text">
                                                    request for a
                                                </span>
                                            </div>
                                            <div class="col-md-3 m-0 p-0">
                                                <span class="heading-sixth row time-top float-right mr-2">
                                                    10 min ago
                                                </span>
                                            </div>
                                        </div>
                                        <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                            <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                <span class="notification-text-home">
                                                    Marina Hurst
                                                </span>
                                                <span class="paragraph-text">
                                                    request for a
                                                </span>
                                            </div>
                                            <div class="col-md-3 m-0 p-0">
                                                <span class="heading-sixth row time-top float-right mr-2">
                                                    10 min ago
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <h2 class="mt-4 "> Revenue </h2>
                        </div>
                        <div class="col-md-6">
                            <div class="selection pt-3 pl-3 mr-3">
                                <div class="input-option">
                                    <select class="select float-right">
                                        <option>3 months</option>
                                        <option>6 months</option>
                                        <option>12 months</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <span class="heading-fifth1 heading-fifth1-1">
                                            Total Revenue
                                            <h1 class="d-flex">1564
                                                <span class="heading-user">USD</span>
                                            </h1>
                                        </span>
                                    <div class="box columnbox mt-4">
                                        <div id="columnchart"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="row ml-1 mr-1">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-6">
                            <h2 class="mt-4 ml-3"> New tutor requests </h2>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="#" class="btn view-bookings"> View All Tutors</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-11">
                                    <form class="row">
                                        <div class="col-md-2">
                                            <div class="input-serach">
                                                <input type="search" placeholder="Tutor id" id="home-ticket-1" />

                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="input-serach ">
                                                <input type="search" placeholder="location" id="search-location" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-option">
                                                <select id="TypeFeed">
                                                    <option disabled selected>Student Level</option>
                                                    <option>Begginer</option>
                                                    <option>Intermediate</option>
                                                    <option>Advance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="input-option">
                                                <select id="availability-id">
                                                    <option selected disabled>Availability</option>
                                                    <option>
                                                        1
                                                    </option>
                                                    <option>
                                                        2
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="input-option">
                                                <select id="rate-number">
                                                    <option value="rate">Rate</option>
                                                    <option value="Less">Less than $5</option>
                                                    <option value="dollar">$6 - $10 </option>
                                                    <option value="rate">$11 - $14 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="reset-text mt-2">
                                                <input type="reset" value="Reset" class="reset-button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1">
                                    <div class="sort-text mt-2">
                                        <select id="sort-by-home">
                                            <option value="3" disabled selected>Sort by</option>
                                            <option value="new">Old to new</option>
                                            <option value="old">New to old</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom table-margin-top ">
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Location</th>
                                                <!-- <th scope="col">Grade</th> -->
                                                <th scope="col">Availability </th>
                                                <th scope="col">Rate</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="datas">
                                            @foreach($new_requests as $request)
                                                @if($request->status == 2 && $request->assessment_id != '' && $request->assessment_id != null && $request->assessment_status == 0)
                                                    <tr>
                                                        <td class="pt-4">
                                                            {{ $request->first_name }} {{ $request->last_name }}
                                                        </td>
                                                        <td class="pt-4">
                                                            <span data-toggle="tooltip"
                                                                title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                        </td>
                                                        <td class="pt-4">{{$request->subject_name}}</td>
                                                        <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>
                                                                                                
                                                        <td class="pt-4">---</td>
                                                        <td class="pt-4">{{$request->hourly_rate}}</td>
                                                        <td class="pt-4"> 
                                                            @if($request->assessment_status == 0 && $request->status == 2)
                                                                <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                            @else
                                                                @if( $request->status == 0)
                                                                    <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                @elseif( $request->status == 1)
                                                                    <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="pt-3 text-right">
                                                            <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @elseif($request->status == 0)
                                                    <tr>
                                                        <td class="pt-4">
                                                            {{ $request->first_name }} {{ $request->last_name }}
                                                        </td>
                                                        <td class="pt-4">
                                                            <span data-toggle="tooltip"
                                                                title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                        </td>
                                                        <td class="pt-4">{{$request->subject_name}}</td>
                                                        <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>
                                                    
                                                        
                                                        <td class="pt-4">---</td>
                                                        <td class="pt-4">{{$request->hourly_rate}}</td>
                                                        <td class="pt-4"> 
                                                            @if($request->assessment_status == 0 && $request->status == 2)
                                                                <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                            @else
                                                                @if( $request->status == 0)
                                                                    <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                @elseif( $request->status == 1)
                                                                    <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="pt-3 text-right">
                                                            <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @elseif($request->status == 1)
                                                    <tr>
                                                        <td class="pt-4">
                                                            {{ $request->first_name }} {{ $request->last_name }}
                                                        </td>
                                                        <td class="pt-4">
                                                            <span data-toggle="tooltip"
                                                                title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                        </td>
                                                        <td class="pt-4">{{$request->subject_name}}</td>
                                                        <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>

                                                        <td class="pt-4">---</td>
                                                        <td class="pt-4">{{$request->hourly_rate}}</td>
                                                        <td class="pt-4"> 
                                                            @if($request->assessment_status == 0 && $request->status == 2)
                                                                <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                            @else
                                                                @if( $request->status == 0)
                                                                    <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                @elseif( $request->status == 1)
                                                                    <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="pt-3 text-right">
                                                            <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-6">
                            <h2 class="mt-4 ml-3"> Support </h2>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="#" class="btn view-bookings"> View All Tickets</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-11">
                                    <form class="row">
                                        <div class="col-md-2">
                                            <div class="input-serach">
                                                <input type="search" placeholder="Ticket No." id="home-ticket-1" />

                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="input-serach ">
                                                <input type="search" placeholder="User" id="search-location" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-option">
                                                <select id="TypeFeed">
                                                    <option disabled selected>Category</option>
                                                    <option>Begginer</option>
                                                    <option>Intermediate</option>
                                                    <option>Advance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="input-option">
                                                <select id="availability-id">
                                                    <option selected disabled>Status</option>
                                                    <option>
                                                        1
                                                    </option>
                                                    <option>
                                                        2
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="reset-text mt-2">
                                                <input type="reset" value="Reset" class="reset-button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1">
                                    <div class="sort-text mt-2">
                                        <select id="sort-by-home">
                                            <option value="3" disabled selected>Sort by</option>
                                            <option value="new">Old to new</option>
                                            <option value="old">New to old</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row ">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom table-margin-top">
                                                <th scope="col">Ticket no.</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Ticket Subject</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Answered by</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="datashow">
                                            @foreach($tickets as $ticket)
                                                <tr>
                                                    <td class="pt-4">
                                                        {{$ticket->ticket_no}}
                                                    </td>
                                                    <td class="pt-4">
                                                        @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "" && $ticket->tkt_created_by != [])
                                                            <span> {{$ticket->tkt_created_by->first_name}} {{$ticket->tkt_created_by->last_name}} </span>
                                                        @else
                                                            <span> - </span>
                                                        @endif
                                                    </td>
                                                    <td class="pt-4">
                                                        {{$ticket->subject}}
                                                    </td>
                                                    <td class="pt-4">
                                                        Payment
                                                    </td>
                                                    <td class="pt-4">
                                                        {{date_format($ticket->created_at,"Y-m-d")}}
                                                    </td>
                                                    <td class="pt-4">
                                                    @if($ticket->category != null && $ticket->category != "" && $ticket->category != [])
                                                        <span> {{$ticket->category->title}} </span>
                                                    @else
                                                        <span> - </span>
                                                    @endif
                                                    </td>
                                                    <td class="pt-4">
                                                        @if($ticket->status == 0)
                                                            <span class="statusTag doc_not_sub_status"> Pending </span>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <a href="{{url('admin/ticket')}}/{{$ticket->ticket_no}}" class="btn schedule-btn w-100">
                                                            View
                                                        </a>
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

                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-6">
                            <h2 class="mt-4 ml-3"> Activity Logs </h2>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="{{route('admin.activity.logs')}}" class="btn view-bookings"> View All Tickets</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">                            
                            <div class="row ">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom table-margin-top">
                                                <th scope="col"> Sr no.</th>
                                                <th scope="col"> Action </th>
                                                <th scope="col"> User Agent</th>
                                            </tr>
                                        </thead>
                                        <tbody id="datashow">
                                            @foreach($activity_logs as $logs)
                                                <tr>
                                                    <td class="pt-4">
                                                        {{$loop->iteration}}
                                                    </td>
                                                    <td class="pt-4">
                                                        {!! $logs->action_perform !!}
                                                    </td>
                                                    <td class="pt-4">
                                                        {{$logs->user_agent}}
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
        <div class="chatbox-holder" style="display: none;">
            <div class="chatbox chatbox-min">
                <div class="chatbox-top">
                    <div class="chatbox-avatar">
                        <a target="_blank" href="https://www.facebook.com/mfreak">
                            <img src="assets/img/ico/profile-boy.svg" alt="harram Laraib">
                        </a>
                    </div>
                    <div class="chat-partner-nam">
                        <span class="status online"></span>
                        <a target="_blank" href="#" class="chat-name" style="text-decoration: none;">
                            Harram Laraib
                        </a>
                    </div>
                    <div class="chatbox-icons">
                        <a href="javascript:void(0);">
                            <i class="fa fa-minus"></i>
                        </a>
                        <a href="javascript:void(0);">
                            <!-- <img src="assets/img/ico/ionic-ios-close.png" alt="close" class="fa fa-close"> -->
                        </a>
                    </div>
                </div>
                <div class="chat-messages">
                    <div class="message-box-holder">
                        <div class="message-sender" style="margin-top: 100px;">
                            Danish
                        </div>
                        <div class="message-box message-partner" style="margin-top: 0px;">
                            Hi. How are you
                            <img src="assets/img/ico/3dot.png" alt="dot-ico" style="width: 20px;">
                        </div>
                    </div>
                    <div class="message-box-holder">
                        <div class="message-box">
                            How are you doing?
                        </div>
                    </div>
                </div>
                <div class="chat-input-holder mb-3 ml-2 mr-2 ">
                    <textarea class="chat-input" placeholder="Write Your Massage"></textarea>
                    <!-- <img class="send" src="assets/img/ico/material-send.png" alt="send_image"> -->
                </div>
            </div>
        </div>
    </section>

    @elseif(Auth::user()->role != 1 && count(Session('permisssions')) == 0 )
        <h1 class="lead text-center font-weight-bold"> Contact Admin for Feature Access </h1>
    @else
        <section id="homesection" style="display: flex;z-index: -1;">
            <!-- dashborad home -->
            <div class="container-fluid mt-3">
                <div class="row ml-1 mr-1">
                    <div class="col-md-6">
                        <h1 class="animate__animated animate__bounce animate__delay-0.3s">
                            Dashboard
                        </h1>
                    </div>
                    <div class="col-md-6 m-0 p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                                <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                                <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                        href="">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- cards -->
                <div class="row ml-1 mr-1">
                    <div class="col-md-9">
                        <div class="cards-list">
                            <h2 class="mt-4 mb-0 animate__bounceIn">
                                Statistics
                            </h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('admin.tutor')}}" class="text-dark" style="text-decoration: none;">
                                        <div class="container card ">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{ $tutors_count }}
                                                </p>
                                                <p class="class-booking">
                                                    Total tutors
                                                </p>
                                            </div>
                                            <div class="iconside">
                                                <img class="card-ico" src="assets/img/ico/card-icon-1.svg" alt="blue-ico">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('admin.student')}}" class="text-dark" style="text-decoration: none;">
                                        <div class="container card ">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{ $students_count }}
                                                </p>
                                                <p class="class-booking">
                                                    Total students
                                                </p>
                                            </div>
                                            <div class="iconside">
                                                <img class="card-ico1" src="assets/img/ico/card-icon-2.svg" alt="red-ico">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <div class="container card">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                0
                                            </p>
                                            <p class="class-booking">
                                                Total institutes
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1-1" src="assets/img/ico/card-icon-3.svg" alt="ico-blue">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <h2 class="mt-4 ml-3"> Users growth </h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="selection pt-3 pl-3 mr-3">
                                        <div class="input-option">
                                            <select class="select float-right">
                                                <option>3 months</option>
                                                <option>6 months</option>
                                                <option>12 months</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="d-flex number-postion">{{$all_users}}
                                                <span class="heading-user">users</span>
                                            </h1>
                                            <span class="heading-fifth-2">
                                                Showing user growth from last months
                                            </span>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <div class="row class-row">
                                                <div class="col-md-4">
                                                    <span class="dot"></span>
                                                    <span class="ml-1 paragraph-text1-1"> Tutors</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <span class="dot1"></span>
                                                    <span class="ml-1 paragraph-text1-1"> Student</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <span class="dot2"></span>
                                                    <span class="ml-1 paragraph-text1-1"> Institutes</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- notification -->
                        <div class="row ">    
                            <div class="col-md-6">
                                <h2 class="mt-3 "> Notifications </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a href="#" class="btn view-bookings"> View All</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="w-100 container-bg-1 mr-2 pb-2 pt-0 notifiaction-margin ">
                                            <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                                <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                    <span class="notification-text-home">
                                                        Marina Hurst
                                                    </span>
                                                    <span class="paragraph-text">
                                                        request for a
                                                    </span>
                                                </div>
                                                <div class="col-md-3 m-0 p-0">
                                                    <span class="heading-sixth row time-top float-right mr-2">
                                                        10 min ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                                <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                    <span class="notification-text-home">
                                                        Marina Hurst
                                                    </span>
                                                    <span class="paragraph-text">
                                                        request for a
                                                    </span>
                                                </div>
                                                <div class="col-md-3 m-0 p-0">
                                                    <span class="heading-sixth row time-top float-right mr-2">
                                                        10 min ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="notification-hover row mt-2 pt-2 pb-2 m-0 p-0 w-100">
                                                <div class=" col-md-9 pl-2 m-0 p-0 ">
                                                    <span class="notification-text-home">
                                                        Marina Hurst
                                                    </span>
                                                    <span class="paragraph-text">
                                                        request for a
                                                    </span>
                                                </div>
                                                <div class="col-md-3 m-0 p-0">
                                                    <span class="heading-sixth row time-top float-right mr-2">
                                                        10 min ago
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <h2 class="mt-4 "> Revenue </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="selection pt-3 pl-3 mr-3">
                                    <div class="input-option">
                                        <select class="select float-right">
                                            <option>3 months</option>
                                            <option>6 months</option>
                                            <option>12 months</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="heading-fifth1 heading-fifth1-1">
                                                Total Revenue
                                                <h1 class="d-flex">1564
                                                    <span class="heading-user">USD</span>
                                                </h1>
                                            </span>
                                        <div class="box columnbox mt-4">
                                            <div id="columnchart"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="row ml-1 mr-1">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6">
                                <h2 class="mt-4 ml-3"> New tutor requests </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a href="#" class="btn view-bookings"> View All Tutors</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-11">
                                        <form class="row">
                                            <div class="col-md-2">
                                                <div class="input-serach">
                                                    <input type="search" placeholder="Tutor id" id="home-ticket-1" />

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="input-serach ">
                                                    <input type="search" placeholder="location" id="search-location" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-option">
                                                    <select id="TypeFeed">
                                                        <option disabled selected>Student Level</option>
                                                        <option>Begginer</option>
                                                        <option>Intermediate</option>
                                                        <option>Advance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="input-option">
                                                    <select id="availability-id">
                                                        <option selected disabled>Availability</option>
                                                        <option>
                                                            1
                                                        </option>
                                                        <option>
                                                            2
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="input-option">
                                                    <select id="rate-number">
                                                        <option value="rate">Rate</option>
                                                        <option value="Less">Less than $5</option>
                                                        <option value="dollar">$6 - $10 </option>
                                                        <option value="rate">$11 - $14 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="reset-text mt-2">
                                                    <input type="reset" value="Reset" class="reset-button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="sort-text mt-2">
                                            <select id="sort-by-home">
                                                <option value="3" disabled selected>Sort by</option>
                                                <option value="new">Old to new</option>
                                                <option value="old">New to old</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="border-bottom table-margin-top ">
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Location</th>
                                                    <!-- <th scope="col">Grade</th> -->
                                                    <th scope="col">Availability </th>
                                                    <th scope="col">Rate</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="datas">
                                                @foreach($new_requests as $request)
                                                    @if($request->status == 2 && $request->assessment_id != '' && $request->assessment_id != null && $request->assessment_status == 0)
                                                        <tr>
                                                            <td class="pt-4">
                                                                {{ $request->first_name }} {{ $request->last_name }}
                                                            </td>
                                                            <td class="pt-4">
                                                                <span data-toggle="tooltip"
                                                                    title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                            </td>
                                                            <td class="pt-4">{{$request->subject_name}}</td>
                                                            <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>
                                                                                                    
                                                            <td class="pt-4">---</td>
                                                            <td class="pt-4">{{$request->hourly_rate}}</td>
                                                            <td class="pt-4"> 
                                                                @if($request->assessment_status == 0 && $request->status == 2)
                                                                    <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                                @else
                                                                    @if( $request->status == 0)
                                                                        <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                    @elseif( $request->status == 1)
                                                                        <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                    @endif
                                                                @endif
                                                            </td>
                                                            <td class="pt-3 text-right">
                                                                <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif($request->status == 0)
                                                        <tr>
                                                            <td class="pt-4">
                                                                {{ $request->first_name }} {{ $request->last_name }}
                                                            </td>
                                                            <td class="pt-4">
                                                                <span data-toggle="tooltip"
                                                                    title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                            </td>
                                                            <td class="pt-4">{{$request->subject_name}}</td>
                                                            <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>
                                                        
                                                            
                                                            <td class="pt-4">---</td>
                                                            <td class="pt-4">{{$request->hourly_rate}}</td>
                                                            <td class="pt-4"> 
                                                                @if($request->assessment_status == 0 && $request->status == 2)
                                                                    <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                                @else
                                                                    @if( $request->status == 0)
                                                                        <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                    @elseif( $request->status == 1)
                                                                        <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                    @endif
                                                                @endif
                                                            </td>
                                                            <td class="pt-3 text-right">
                                                                <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @elseif($request->status == 1)
                                                        <tr>
                                                            <td class="pt-4">
                                                                {{ $request->first_name }} {{ $request->last_name }}
                                                            </td>
                                                            <td class="pt-4">
                                                                <span data-toggle="tooltip"
                                                                    title="{{$request->email}}">{{Str::limit($request->email, 3, $end='***')}}</span>
                                                            </td>
                                                            <td class="pt-4">{{$request->subject_name}}</td>
                                                            <td class="pt-4">{{$request->city != NULL ? $request->city.', ' : '---'}}{{$request->country != NULL ? $request->country : '---'}}</td>

                                                            <td class="pt-4">---</td>
                                                            <td class="pt-4">{{$request->hourly_rate}}</td>
                                                            <td class="pt-4"> 
                                                                @if($request->assessment_status == 0 && $request->status == 2)
                                                                    <span class="statusTag doc_sub_status">  Assessment Sumitted </span>
                                                                @else
                                                                    @if( $request->status == 0)
                                                                        <span class="statusTag doc_not_sub_status">  Document not Submitted </span>
                                                                    @elseif( $request->status == 1)
                                                                        <span class="statusTag doc_sub_status">  Document Sumitted </span>
                                                                    @endif
                                                                @endif
                                                            </td>
                                                            <td class="pt-3 text-right">
                                                                <a href="{{ route('admin.tutorRequest',[$request->id,$request->assessment_id !=null ? $request->assessment_id : '']) }}" class="cencel-btn btn">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6">
                                <h2 class="mt-4 ml-3"> Support </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a href="#" class="btn view-bookings"> View All Tickets</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-11">
                                        <form class="row">
                                            <div class="col-md-2">
                                                <div class="input-serach">
                                                    <input type="search" placeholder="Ticket No." id="home-ticket-1" />

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="input-serach ">
                                                    <input type="search" placeholder="User" id="search-location" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-option">
                                                    <select id="TypeFeed">
                                                        <option disabled selected>Category</option>
                                                        <option>Begginer</option>
                                                        <option>Intermediate</option>
                                                        <option>Advance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="input-option">
                                                    <select id="availability-id">
                                                        <option selected disabled>Status</option>
                                                        <option>
                                                            1
                                                        </option>
                                                        <option>
                                                            2
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="reset-text mt-2">
                                                    <input type="reset" value="Reset" class="reset-button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="sort-text mt-2">
                                            <select id="sort-by-home">
                                                <option value="3" disabled selected>Sort by</option>
                                                <option value="new">Old to new</option>
                                                <option value="old">New to old</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row ">
                                    <div class="col-md-12">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="border-bottom table-margin-top">
                                                    <th scope="col">Ticket no.</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Ticket Subject</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Answered by</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="datashow">
                                                @foreach($tickets as $ticket)
                                                    <tr>
                                                        <td class="pt-4">
                                                            {{$ticket->ticket_no}}
                                                        </td>
                                                        <td class="pt-4">
                                                            @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "" && $ticket->tkt_created_by != [])
                                                                <span> {{$ticket->tkt_created_by->first_name}} {{$ticket->tkt_created_by->last_name}} </span>
                                                            @else
                                                                <span> - </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4">
                                                            {{$ticket->subject}}
                                                        </td>
                                                        <td class="pt-4">
                                                            Payment
                                                        </td>
                                                        <td class="pt-4">
                                                            {{date_format($ticket->created_at,"Y-m-d")}}
                                                        </td>
                                                        <td class="pt-4">
                                                        @if($ticket->category != null && $ticket->category != "" && $ticket->category != [])
                                                            <span> {{$ticket->category->title}} </span>
                                                        @else
                                                            <span> - </span>
                                                        @endif
                                                        </td>
                                                        <td class="pt-4">
                                                            @if($ticket->status == 0)
                                                                <span class="statusTag doc_not_sub_status"> Pending </span>
                                                            @endif
                                                        </td>

                                                        <td style="text-align: center;">
                                                            <a href="{{url('admin/ticket')}}/{{$ticket->ticket_no}}" class="btn schedule-btn w-100">
                                                                View
                                                            </a>
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

                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6">
                                <h2 class="mt-4 ml-3"> Activity Logs </h2>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <a href="{{route('admin.activity.logs')}}" class="btn view-bookings"> View All Tickets</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">                            
                                <div class="row ">
                                    <div class="col-md-12">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="border-bottom table-margin-top">
                                                    <th scope="col"> Sr no.</th>
                                                    <th scope="col"> Action </th>
                                                    <th scope="col"> User Agent</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datashow">
                                                @foreach($activity_logs as $logs)
                                                    <tr>
                                                        <td class="pt-4">
                                                            {{$loop->iteration}}
                                                        </td>
                                                        <td class="pt-4">
                                                            {!! $logs->action_perform !!}
                                                        </td>
                                                        <td class="pt-4">
                                                            {{$logs->user_agent}}
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
            <div class="chatbox-holder" style="display: none;">
                <div class="chatbox chatbox-min">
                    <div class="chatbox-top">
                        <div class="chatbox-avatar">
                            <a target="_blank" href="https://www.facebook.com/mfreak">
                                <img src="assets/img/ico/profile-boy.svg" alt="harram Laraib">
                            </a>
                        </div>
                        <div class="chat-partner-nam">
                            <span class="status online"></span>
                            <a target="_blank" href="#" class="chat-name" style="text-decoration: none;">
                                Harram Laraib
                            </a>
                        </div>
                        <div class="chatbox-icons">
                            <a href="javascript:void(0);">
                                <i class="fa fa-minus"></i>
                            </a>
                            <a href="javascript:void(0);">
                                <!-- <img src="assets/img/ico/ionic-ios-close.png" alt="close" class="fa fa-close"> -->
                            </a>
                        </div>
                    </div>
                    <div class="chat-messages">
                        <div class="message-box-holder">
                            <div class="message-sender" style="margin-top: 100px;">
                                Danish
                            </div>
                            <div class="message-box message-partner" style="margin-top: 0px;">
                                Hi. How are you
                                <img src="assets/img/ico/3dot.png" alt="dot-ico" style="width: 20px;">
                            </div>
                        </div>
                        <div class="message-box-holder">
                            <div class="message-box">
                                How are you doing?
                            </div>
                        </div>
                    </div>
                    <div class="chat-input-holder mb-3 ml-2 mr-2 ">
                        <textarea class="chat-input" placeholder="Write Your Massage"></textarea>
                        <!-- <img class="send" src="assets/img/ico/material-send.png" alt="send_image"> -->
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!-- Modal  teacher -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Assgin</p>
                </div>
                <div class="modal-body">
                    <div class="input-serach">
                        <input class="w-100 search-input" type="search" id="myInput" placeholder="Search members" />
                        <img class="serach-icon" src="assets/img/ico/Search.png" />
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Harram</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Danish </span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Ali Raza</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Harram Laraib</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Harram</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Danish </span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Ali Raza</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4 main">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <span class="alex-name"><img src="assets/img/ico/profile-boy.svg"
                                            alt="std-icon" /></span>
                                    <span class="pl-2 alex-names">Harram Laraib</span>
                                </div>
                                <div class="col-md-6 col-6">
                                    <button class="schedule-btn assgin-text" data-toggle="modal"
                                        data-target="#exampleModalCenter">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
