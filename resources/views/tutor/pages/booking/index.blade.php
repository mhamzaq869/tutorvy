@extends('tutor.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>

    <div class="container">
        <p id="sidenav-toggles" class="heading-first  mr-3 mb-4 ml-2">
            Bookings
        </p>
    </div>
    <div class="container">
        <div class="row bg-white ml-2 mr-2">
            <div class="col-md-12 mt-3">
                <nav class="container">
                    <div class="nav nav-stwich" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                            href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            New Bookings
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                            aria-selected="false">
                            Upcomming
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                            aria-selected="false">
                            Pending
                        </a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                            role="tab" aria-controls="nav-about" aria-selected="false">
                            Delivered
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
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
                                                        Student
                                                    </th>
                                                    <th scope="col">
                                                        Duration
                                                    </th>
                                                    <th scope="col">
                                                        Payment
                                                    </th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="pt-4">
                                                        Chemistry
                                                    </td>
                                                    <td class="pt-4">
                                                        Atomic
                                                    </td>
                                                    <td class="pt-4">
                                                        5pm -07 Feb 2021
                                                    </td>
                                                    <td class="pt-4">
                                                        Harram Laraib
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;500$
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button class="schedule-btn" type="button">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="pt-4">
                                                        Chemistry
                                                    </td>
                                                    <td class="pt-4">
                                                        Atomic
                                                    </td>
                                                    <td class="pt-4">
                                                        5pm -07 Feb 2021
                                                    </td>
                                                    <td class="pt-4">
                                                        Harram Laraib
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4">
                                                        Chemistry
                                                    </td>
                                                    <td class="pt-4">
                                                        Atomic
                                                    </td>
                                                    <td class="pt-4">
                                                        5pm -07 Feb 2021
                                                    </td>
                                                    <td class="pt-4">
                                                        Harram Laraib
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">
                                                        &nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4">
                                                        Chemistry
                                                    </td>
                                                    <td class="pt-4">
                                                        Atomic
                                                    </td>
                                                    <td class="pt-4">
                                                        5pm -07 Feb 2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
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
                            <!-- end -->
                        </div>
                    </div>
                    <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="container-fluid ">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Student</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Payment</th>
                                                    <!-- <th scope="col">Review</th> -->
                                                    <!-- <th scope="col"></th> -->
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
                                                                View details
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="./bookingDetails.html">
                                                            <button type="button" class="schedule-btn">
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
                            <!-- end -->
                        </div>
                    </div>
                    <div class="tab-pane tab-border-none fade" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="container-fluid">

                            <div class="container-fluid ">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Student</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Payment</th>
                                                    <!-- <th scope="col">Review</th> -->
                                                    <!-- <th scope="col"></th> -->
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>

                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                    <div class="tab-pane tab-border-none fade" id="nav-about" role="tabpanel"
                        aria-labelledby="nav-about-tab">
                        <div class="container-fluid">

                            <div class="container-fluid ">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr
                                                    style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Topic</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Student</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Payment</th>
                                                    <th scope="col">Review</th>
                                                    <!-- <th scope="col"></th> -->
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4"> Chemistry
                                                    </td>
                                                    <td class="pt-4"> Atomic </td>
                                                    <td class="pt-4">5pm -07 Feb
                                                        2021 </td>
                                                    <td class="pt-4">Harram Laraib
                                                    </td>
                                                    <td class="pt-4">&nbsp;00:30:00
                                                    </td>
                                                    <td class="pt-4">&nbsp;500$
                                                    </td>
                                                    <td class="pt-4">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </td>
                                                    <td style="text-align: center   ;">
                                                        <a href="./bookingDetails.html"> <button
                                                                type="button" class="schedule-btn">View
                                                                details</button></a>
                                                    </td>
                                                </tr>
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
