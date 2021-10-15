@extends('student.layouts.app')

@section('content')

<div class="content-wrapper " style="overflow: hidden;">
    <section id="bookingSection" >
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-6">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Support Tickets    </p>
                </div>
                <div class="col-md-6 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Support</a>
                            </li>
                        </ol>
                    </nav>
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
                <div class="col-md-12 mb-3 ">
                    <div class=" card  bg-toast infoCard">
                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small>
                                    Booking Details and all about your schedule for meetings <a href="#">Learn More</a>
                                </small>
                                <a href="#" class="cross"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="heading-third">
                        All tickets
                    </h3>
                </div>
                <div class="col-md-6 text-right">
                    <a data-toggle="modal" href="#supportModal" style="text-decoration:none;" class="schedule-btn  text-center">Add new ticket</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-borderless mt-3">
                        <thead>
                            <tr
                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                <th scope="col"> Ticket no. </th>
                                <th scope="col">User </th>
                                <th scope="col">Subject </th>
                                <th scope="col">Category </th>
                                <th scope="col">Date </th>
                                <th scope="col">Answered by </th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($tickets != "[]")
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <td> {{$ticket->ticket_no != null ? $ticket->ticket_no : '-'}} </td>
                                        <td> 
                                            @if($ticket->tkt_created_by != null && $ticket->tkt_created_by != "")
                                                <span> 
                                                    {{$ticket->tkt_created_by->first_name != null ? $ticket->tkt_created_by->first_name : '-' }}
                                                    {{$ticket->tkt_created_by->last_name != null ? $ticket->tkt_created_by->last_name : '-' }}
                                                </span>
                                            @else
                                                <span> - </span>
                                            @endif    
                                        </td>
                                        <td> {{$ticket->subject != null ? $ticket->subject : '-'}} </td>
                                        <td> 
                                            @if($ticket->created_at != null && $ticket->created_at != "")
                                                <span> 
                                                    {{$ticket->category->title != null ? $ticket->category->title : '-' }}
                                                </span>
                                            @else
                                                <span> - </span>
                                            @endif    
                                        </td>
                                        <td> {{$ticket->created_at}} </td>
                                        <td> - </td>
                                        <td>
                                            @if($ticket->status == 0)
                                                <span class="bg-color-apporve "> Pending </span>
                                            @else
                                                <span> - </span>
                                            @endif
                                        </td>
                                        <td> 
                                            <a href="{{url('student/ticket')}}/{{$ticket->ticket_no}}" class="btn schedule-btn">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td>
                                    No Tickets Added yet
                                </td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
