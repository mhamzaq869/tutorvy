<<<<<<< HEAD
@extends('tutor.layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="heading-first  mb-4">
                    History</p>
            </div>
            <div class="col-md-6">
                <button class="cencel-btn  " id="cmd" style="float: right;">Download pdf</button>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-12  card pt-3 ">
                <nav class="container row">
                    <div class=" nav nav-stwich col-md-6" id="nav-tab" role="tablist">
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
                    <div class="col-md-6">
                        <div class="row well mt-3" style="float: right;">
                            <a class=" text-white delete_all mr-3 mt-2">
                                <img src="../assets/images/ico/delete.png" style="width: 20px;"> </a>

                            <select id="test" class="select" onchange="check()">
                                <option value="">Select</option>
                                <option value="1">1 Months</option>
                                <option value="6">6 Months</option>
                                <option value="12">12 Months</option>
                            </select>
                        </div>
                    </div>
                </nav>


                <!-- table of history -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="container-fluid mt-4 m-0 p-0">

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
                        <div class="container-fluid mt-4 m-0 p-0">

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
                        <div class="container-fluid mt-4 m-0 p-0">

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
=======
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
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD

            </div>
        </div>

    </div>
</section>
=======
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
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
@endsection
