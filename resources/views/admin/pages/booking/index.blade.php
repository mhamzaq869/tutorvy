@extends('admin.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->

        <div class="container-fluid mt-5">
            <div class="row ml-1 mr-1">
                <div class="col-md-12">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Booking    </p>
                </div>
            </div>
            <div class="row bg-white ml-1 mr-1">
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
                                    <!-- <span class="counter-text bg-primary"> </span> -->
                                </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                    href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">
                                    Pending 
                                    <!-- <span class="counter-text bg-warning">  </span> -->

                                </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">
                                    Confirmed
                                    <!-- <span class="counter-text bg-success">  </span> -->

                                </a>
                                
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">
                                    Completed
                                    <!-- <span class="counter-text bg-info">  </span> -->

                                </a>
                                <a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel"
                                    role="tab" aria-controls="nav-cancel" aria-selected="false">
                                    Cancelled
                                    <!-- <span class="counter-text bg-danger">  </span> -->

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
                                                            <th scope="col"> Teacher </th>
                                                            <th scope="col"> Student </th>
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
                                                            <th scope="col">Teacher</th>
                                                            <th scope="col">Student</th>
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
                                                            <th scope="col">Teacher</th>
                                                            <th scope="col">Student</th>
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
                                                        <th scope="col">Teacher</th>
                                                        <th scope="col">Student</th>
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
                                                    <th scope="col">Teacher</th>
                                                    <th scope="col">Students</th>
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
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection
