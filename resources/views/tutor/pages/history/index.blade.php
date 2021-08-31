@extends('tutor.layouts.app')
<link href="http://127.0.0.1:8000/assets/css/booking.css" rel="stylesheet">
<style>
   
</style>
@section('content')
<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="mr-3 heading-first">
                         History
                    </p>
                </div>
                <div class="col-md-6">
                    <button class="cencel-btn  " id="cmd" style="float: right;">Download pdf</button>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 bg-white">
                    <div class="card-body ">
                        <nav class=" row pl-3 pr-3">
                            <div class="col-md-6" id="nav-tab" role="tablist">
                                <div class=" nav nav-stwich  pb-0 pt-0">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Chemistry</a>
                                    <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Physics</a> -->
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                        role="tab" aria-controls="nav-about" aria-selected="false">Physics</a>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="pull-right pt-2">
                                            <img src="{{asset('assets/images/ico/Icon-bin.png')}}"  alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control form-select-lg " id="day" name="day" >
                                            <option value="">Select</option>
                                            <option value="1">1 Months</option>
                                            <option value="6">6 Months</option>
                                            <option value="12">12 Months</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="row well mt-3" style="float: right;">
                                    <a class=" text-white delete_all mr-3 mt-2">
                                        </a>
                                    
                                </div>
                            </div> -->
                        </nav>
                        <!-- table of history -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="container-fluid m-0 p-0">

                                    <div class="m-0 p-0 cad container-fluid ">

                                        <div class="row">
                                            <div class=" col-md-12 col-sm-12 col-xs-12">


                                                <table id="employee_grid"
                                                    class="tab-content1 table table-condensed table-hover table-striped bootgrid-table"
                                                    width="60%" cellspacing="0">
                                                    <thead>
                                                        <tr
                                                            style="border-bottom: 1px solid #D6DBE2;border-top: 1px solid #D6DBE2;">
                                                            <th><input type="checkbox" id="master"></th>
                                                            <th>Subject</th>
                                                            <th>Topic</th>
                                                            <th>Time</th>
                                                            <th>Student</th>
                                                            <th>Duration</th>
                                                            <th>Payment</th>
                                                            <th>Review</th>
                                                            <th class="cence"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr data-row-id="1" id="passport">
                                                            <td><input type="checkbox" class="sub_chk mt-3  "
                                                                    data-id="1">
                                                            </td>
                                                            <td class="pt-4">Chemistry</td>
                                                            <td class="pt-4">Atomic </td>
                                                            <td class="pt-4">5 PM - 07 Feb 2021</td>
                                                            <td class="pt-4">Harram </td>
                                                            <td class="pt-4">00:30:00</td>
                                                            <td class="pt-4 Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="pt-4">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-3">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="2" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="2">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="3" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="3">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="4" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="4">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="5" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="5">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="6" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="6">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="7" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="7">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr data-row-id="8" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="8">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1">
                                                                <a href="../Booking/bookingDetails.html">
                                                                    <button class="schedule-btn w-100 ">
                                                                        View details
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="container-fluid m-0 p-0">

                                    <div class="m-0 p-0 cad container-fluid ">

                                        <div class="row">
                                            <div class=" col-md-12 col-sm-12 col-xs-12">


                                                <table id="employee_grid"
                                                    class="tab-content1 table table-condensed table-hover table-striped bootgrid-table"
                                                    width="60%" cellspacing="0">
                                                    <thead>
                                                        <tr
                                                            style="border-bottom: 1px solid #D6DBE2;border-top: 1px solid #D6DBE2;">
                                                            <th><input type="checkbox" id="master"></th>
                                                            <th>Subject</th>
                                                            <th>Topic</th>
                                                            <th>Time</th>
                                                            <th>Student</th>
                                                            <th>Duration</th>
                                                            <th>Payment</th>
                                                            <th>Review</th>
                                                            <th class="cence"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr data-row-id="1" id="passport">
                                                            <td><input type="checkbox" class="sub_chk mt-3  "
                                                                    data-id="1">
                                                            </td>
                                                            <td class="pt-4">Chemistry</td>
                                                            <td class="pt-4">Atomic </td>
                                                            <td class="pt-4">5 PM - 07 Feb 2021</td>
                                                            <td class="pt-4">Harram </td>
                                                            <td class="pt-4">00:30:00</td>
                                                            <td class="pt-4 Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="pt-4">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-3"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="2" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="2">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="3" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="3">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="4" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="4">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="5" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="5">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="6" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="6">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="7" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="7">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="8" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="8">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel"
                                aria-labelledby="nav-about-tab">
                                <div class="container-fluid m-0 p-0">

                                    <div class="m-0 p-0 cad container-fluid ">

                                        <div class="row">
                                            <div class=" col-md-12 col-sm-12 col-xs-12">


                                                <table id="employee_grid"
                                                    class="tab-content1 table table-condensed table-hover table-striped bootgrid-table"
                                                    width="60%" cellspacing="0">
                                                    <thead>
                                                        <tr
                                                            style="border-bottom: 1px solid #D6DBE2;border-top: 1px solid #D6DBE2;">
                                                            <th><input type="checkbox" id="master"></th>
                                                            <th>Subject</th>
                                                            <th>Topic</th>
                                                            <th>Time</th>
                                                            <th>Student</th>
                                                            <th>Duration</th>
                                                            <th>Payment</th>
                                                            <th>Review</th>
                                                            <th class="cence"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr data-row-id="1" id="passport">
                                                            <td><input type="checkbox" class="sub_chk mt-3  "
                                                                    data-id="1">
                                                            </td>
                                                            <td class="pt-4">Chemistry</td>
                                                            <td class="pt-4">Atomic </td>
                                                            <td class="pt-4">5 PM - 07 Feb 2021</td>
                                                            <td class="pt-4">Harram </td>
                                                            <td class="pt-4">00:30:00</td>
                                                            <td class="pt-4 Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="pt-4">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-3"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="2" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="2">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="3" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="3">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="4" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="4">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="5" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="5">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="6" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="6">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="7" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="7">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Paid">
                                                                <p>Paid</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>
                                                        <tr data-row-id="8" id="passport">
                                                            <td class="pt-0"><input type="checkbox"
                                                                    class="sub_chk mt-3  " data-id="8">
                                                            </td>
                                                            <td class="">Chemistry</td>
                                                            <td class="">Atomic </td>
                                                            <td class="">5 PM - 07 Feb 2021</td>
                                                            <td class="">Harram </td>
                                                            <td class="">00:30:00</td>
                                                            <td class=" Pending">
                                                                <p>Pending</p>
                                                            </td>
                                                            <td class="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>

                                                            </td>
                                                            <td class="pt-1"><button class="schedule-btn w-100 ">
                                                                    View details</button></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
@endsection
