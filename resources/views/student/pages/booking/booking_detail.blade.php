@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
 <!-- top Fixed navbar End -->
 <div class="content-wrapper " style="overflow: hidden;">
    <section id="bookingDetailSection" style="display: flex;">
        <div class="container-fluid m-0 p-0">
            <a class="" href="">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                            Bookings
                        </p> -->
                        <p class="heading-first ml-3 mr-3">Booking Details</p>
                    </div>
                </div>
            </a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-white pb-0"
                                style="border-bottom: 1px solid #D6DBE2; display: inline-flex;">
                                <p class="col-md-6 col-xs-12 class-ch"
                                    style="margin-top: 10px; text-align: left;color: #00132D;font-size: 22px;font-family: Poppins;font-weight: 500;">
                                    {{$booking->subject->name}} Class</p>
                                <p style="text-align: right;" class="col-md-6 col-xs-12 class-btn-center">
                                    
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                                        class="cencel-btn mr-2" style="font-size: 12px;width: 150px;"> Cancel
                                        Bookings</button>
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCente"
                                        class="schedule-btn mr-2" style="font-size: 12px;width: 150px;"> Re-schedule
                                        class</button>
                                        @if($booking->status == 1)
                                        <button type="button" onclick="pay_now({{$booking->id}})"
                                        class="schedule-btn" style="font-size: 12px;width: 150px;"> Pay Now 
                                        </button>
                                        @endif
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row image1 mt-3 ">
                                                
                                                <div class="col-md-1">
                                                     @if ($booking->user->picture)
                                                        <img src="{{asset($booking->user->picture)}}" alt="profile-image"  class="profile-img" >
                                                    @else
                                                        <img src="{{asset ('assets/images/ico/Square-white.jpg')}}"  alt="profile-image" class=" profile-img" >
                                                    @endif
                                                </div>
                                                <div class="col-md-10">
                                                        <p style="color: #00132D; font-family: Poppins;font-size: 14px;font-weight: 500;"
                                                            class=" mt-1 mb-0"> {{$booking->user->full_name}} </p>
                                                        <p style="font-size: 12px;">
                                                        Student</p>
                                                </div>

                                            </div>
                                            <div class="text1"
                                                style="color: #00132D;font-size: 15px;font-family: Poppins;font-weight: 500;line-height: 2;">
                                                {{$booking->question}}
                                            </div>
                                            <div class="text2"
                                                style="color: #00132D;font-size: 14px;font-family: Poppins;font-weight: 400;">
                                                {{$booking->brief}}
                                            </div>
                                            <div class="mt-4">
                                                <div class="text3" style="display: flex;">
                                                    <span>
                                                        <img class="book-details"
                                                        
                                                            src="{{ asset('assets/images/ico/Group 4689.png') }}" alt="gros">
                                                        <span class="schedule">
                                                            Schedule Date:
                                                        </span>
                                                        <span class="time-details">
                                                            {{$booking->class_date}}
                                                        </span>
                                                    </span>
                                                    <span class="ml-3">
                                                        <img class="book-details"
                                                            src="{{ asset('assets/images/ico/Group 4689.png') }}" alt="gros">
                                                        <span class="schedule">

                                                            Schedule Time:
                                                        </span>
                                                        <span class="time-details">
                                                            {{$booking->class_time}}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="container-fluid" style="">
                                            <div class="col-md-12 mt-3">
                                                <p
                                                    style="color: #00132D;font-size: 16px;font-family: Poppins;font-weight: 500;">
                                                    Attachments</p>
                                                <div class="row">
                                                    <!-- <div class="col-md-3 col-sm-12 card bg-light mb-3"
                                                        style="">
                                                        <div class="container-fluid m-0 p-0">
                                                        <div class="text-home mt-3" style="display: flex;">
                                                                <p>
                                                                    <input style="display: none;" type="file"
                                                                        id="fileinput" />
                                                                    <img src="{{ asset($booking->attachments) }}"
                                                                        alt="word" width="100" height="100">
                                                                </p>
                                                                <p class="ml-3 mr-3">
                                                                    Image</p>
                                                            </div>
                                                            <div class="text-home mt-3" style="display: flex;">
                                                                <p>
                                                                    <input style="display: none;" type="file"
                                                                        id="fileinput" />
                                                                    <img src="{{ asset('assets/images/ico/word.png') }}"
                                                                        alt="word">
                                                                </p>
                                                                <p class="ml-3 mr-3">
                                                                    Word Files</p>
                                                            </div>
                                                            <div class="iconside">
                                                                <img src="{{ asset('assets/images/ico/download.png') }}" alt="o"
                                                                    id='btnLoad' value='download'
                                                                    onclick='downloadFile();'
                                                                    style="width: 30px;position: absolute;top: 10px;right: 10px;">
                                                            </div>
                                                        </div>
                                                    </div> &nbsp;&nbsp;
                                                    <div class="col-md-3 col-xs-12 bg-light  card mb-3"
                                                        style="">
                                                        <div class="container-fluid m-0 p-0">
                                                            <div class="text-home mt-3" style="display: flex;">
                                                                <p><img src="{{ asset('assets/images/ico/pptx.png') }}" alt="ga">
                                                                </p>
                                                                <p class="ml-3 mr-3">
                                                                    PPTX Files</p>
                                                            </div>

                                                            <div class="iconside">
                                                                <img src="{{ asset('assets/images/ico/download.png') }}" alt="ag"
                                                                    style="width: 30px;position: absolute;top: 10px;right: 10px;">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    @if($booking->attachments)
                                                        <div class="col-md-2 mt-1 mb-3">
                                                            <div class="card__corner">
                                                                <div class="card__corner-triangle"></div>
                                                            </div>
                                                            <div class="borderOne">
                                                                <span class="overlayAttach"></span>
                                                                <img src="{{ asset($booking->attachments) }}" alt="">
                                                                <!-- <span class="fileName">FileNameProplus.png</span> -->
                                                                <a href="{{asset($booking->attachments)}}" class="downFile"><i class="fa fa-download"></i></a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-md-12">
                                                            <p>No attachments found</p>
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- no bookings -->
            <!-- Modal -->
            <div class="modal " id="exampleModalCente" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pt-4 pb-4">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="iconss" style="text-align: center;">
                                            <img src="{{asset('assets/images/ico/watchs.png')}}" width="60px">
                                            <p
                                                style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                                Re-schedule class</p>
                                            <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                                class="ml-4 mr-4">
                                                Send new time for class with a short note about why are you rescheduling
                                                class
                                            </p>
                                        </div>
                                        <div class="ml-4 mr-4">
                                            <form>
                                                <div style="display: flex;">
                                                    <input id="today2" class="inputtype mb-2" style="width: 170px;"
                                                        type="date">
                                                    <input type="time" class="inputtype ml-5 mb-2" class="times"
                                                        style="width: 170px;" value="13:00" step="900">
                                                </div>
                                                <textarea class="form-control mt-3" rows="6" cols="50"
                                                    placeholder="Write reason"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-2" style="text-align: right;">
                                <button type="button" class="schedule-btn" data-dismiss="modal"
                                    style="width: 130px;margin-right: 40px;">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- schulde class modal -->
            <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pb-3">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 pt-4">
                                        <div class="iconss" style="text-align: center;">
                                            <img src="{{asset('assets/images/ico/cross.png')}}" alt="cross" class="mb-2" width="80px">
                                            <p
                                                style=" font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 600;margin-top: 10px;">
                                                Cancel Booking</p>
                                            <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;line-height: 1.4;"
                                                class="ml-5 mr-5">Are you sure you want to cancel booking ? it will cost
                                                10$ for cancelling</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center;" class="mt-2 mb-2">
                                <button type="button" class="cencel-btn" style="width: 130px;">Yes, Cancel</button>
                                &nbsp;&nbsp;
                                <button type="button" class="schedule-btn" data-dismiss="modal"
                                    style="width: 130px;">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!--Pay Now Class Modal -->
        <div class="modal " id="payModel" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                    Note</p>
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
                                         </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/paypal2.png')}}" class="w-50" alt="">
                                                        <!-- <span class="payment-menu dropdown d-flex"> 
                                                            <a class=" d-flex" href="#" data-toggle="dropdown" aria-expanded="true">
                                                                <img src="{{asset ('assets/images/payment-icon/menu_dots.png')}}" alt="">
                                                            </a>
                                                            <ul class="dropdown-menu  " >
                                                                <li>
                                                                    <a tabindex="-1" class="" href="">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span> -->
                                                        <span class="round">
                                                            <input type="checkbox" id="checkbox1" checked />
                                                            <label for="checkbox1"></label>
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
                                                        <!-- <span class="payment-menu dropdown d-flex"> 
                                                            <a class=" d-flex" href="#" data-toggle="dropdown" aria-expanded="true">
                                                                <img src="{{asset ('assets/images/payment-icon/menu_dots.png')}}" alt="">
                                                            </a>
                                                            <ul class="dropdown-menu  " >
                                                                <li>
                                                                    <a tabindex="-1" class="" href="">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span> -->
                                                        <span class="round">
                                                            <input type="checkbox" id="checkbox2" disabled/>
                                                            <label for="checkbox2"></label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right mt-3" id="show_pay_btn">
                                        </div>
                                    
                            </div>
                        </div>
                        <div class="mt-4 mb-2" style="text-align: right;">
                        
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