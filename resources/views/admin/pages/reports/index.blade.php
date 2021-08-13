@extends('admin.layouts.app')

@section('content')
   <!--section start  -->

   <section id="homesection" style="display: flex;z-index: -1;">
    <!-- dashborad home -->

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="mt-3">
                            Revenue
                        </h1>
                    </div>
                    <div class="col-md-6 m-0 p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                                <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                                <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active"
                                    aria-current="page"><a href="">Reports</a>
                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="container-fluid container-bg mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="mt-4 ml-3"> Users growth </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="selection pt-3 pl-3">
                                <div class="input-option">
                                    <select class="float-right">
                                        <option>3 months</option>
                                        <option>6 months</option>
                                        <option>12 months</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3 container-bg-2">
                        <div class="row">
                            <div class="col-md-6">

                                <h1 class="h1 d-flex mt-2">1564
                                    <span class="heading-fifth-1 mt-4 ml-2">USD</span>
                                </h1>
                                <span class="heading-fifth-2">
                                    Showing user growth from last months
                                </span>

                            </div>
                            <div class="col-md-6">
                                <div class="row mt-5">
                                    <div class="col-md-4 d-flex">
                                        <span class="dot"></span>
                                        <span class="ml-2 paragraph-text1"> Tutors</span>
                                    </div>
                                    <div class="col-md-4 m-0 p-0 d-flex">
                                        <span class="dot1"></span>
                                        <span class="ml-2 paragraph-text1"> Student</span>
                                    </div>
                                    <div class="col-md-4 m-0 p-0 d-flex">
                                        <span class="dot2"></span>
                                        <span class="ml-2 paragraph-text1"> Institutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid mt-3 m-0 p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 m-0 p-0 ">
                <div class="container">
                    <div class="cards-list">
                        <div class="container m-0 p-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container card-1 bg-white">
                                        <div class="text-home-1 text-home-2">
                                            <p class="number-booking">
                                                506
                                            </p>
                                            <p class="class-booking mt-3">
                                                Delivered classes
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-icos" src="../assets/img/ico/blue-ico.png"
                                                alt="blue-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="position: relative;top: -10px;">
                                    <div class="container card-1 bg-white">
                                        <div class="text-home-1 text-home-2">
                                            <p class="number-booking">
                                                239
                                            </p>
                                            <p class="class-booking mt-3">
                                                Upcomming class
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-icos1-1" src="../assets/img/ico/red-ico.png"
                                                alt="red-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="container card card-1 bg-white">
                                        <div class="text-home text-home-3">
                                            <p class="number-booking">
                                                109
                                            </p>
                                            <p class="class-booking mt-3">
                                                Pending Bookings
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-icos1" src="../assets/img/ico/ico-blue.png"
                                                alt="ico-blue">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- chart graph -->


                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- chatbox -->
    <div class="chatbox-holder" style="display: none;">
        <div class="chatbox chatbox-min">
            <div class="chatbox-top">
                <div class="chatbox-avatar">
                    <a target="_blank" href="https://www.facebook.com/mfreak">
                        <img src="assets/img/ico/profile-boy.png" alt="harram">
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
<!-- tutor request bookings  table start-->
<div class="container-fluid  mt-5 pt-3 mr-5">
    <div class="row bg-white ml-1 mr-1">
        <div class="container-fluid mt-3 ">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mt-3 ml-3">
                        Revenue details
                    </h3>
                </div>
                <div class="col-md-6">
                    <span data-toggle="modal"
                        class="view-bookings schedule-btn w-25 text-center">Download</span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mt-4">
                <nav class="container-fluid border-bottom">
                    <div class="row">
                        <div class="col-md-4 nav nav-stwich" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                teachers
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Students
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                aria-selected="false">
                                Institutes
                            </a>

                        </div>
                        <div class="col-md-8 m-0 p-0 mt-1">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="input-serach">
                                            <input type="search" placeholder="Invoice number" class="" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select>
                                                <option>Paid by</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select>
                                                <option>Subjects</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select>
                                                <option>Status</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="sort-text mt-2">
                                            <select id="ddlList">
                                                <option value="3" disabled selected>Sort by</option>
                                                <option value="1">Old to new</option>
                                                <option value="1">New to old</option>
                                                <option value="1">Lowest rate</option>
                                                <option value="1">Highest rate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="input-serach">
                                <input type="search" placeholder="Invoice number" class="mr-1" />
                            </div>

                            <div class="input-option ml-1">
                                <select>
                                    <option>Paid by</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>

                            <div class="input-option ml-1">
                                <select>
                                    <option>Subjects</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="input-option ml-1">
                                <select>
                                    <option>Status</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                                <div class="sort-text mt-2" style="position: absolute;right: 0%;">
                                    <select id="ddlList">
                                        <option value="3" disabled selected>Sort by</option>
                                        <option value="1">Old to new</option>
                                        <option value="1">New to old</option>
                                        <option value="1">Lowest rate</option>
                                        <option value="1">Highest rate</option>
                                    </select>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="container-fluid pt-3">
                            <div class="row mt-0">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom pb-1">
                                                <th scope="col">Sr no.</th>
                                                <th scope="col">Student name</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Class duration</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Payment</th>
                                                <th scope="col">Invoice number</th>
                                                <th scope="col">Payment status</th>
                                                <th scope="col">Paid by</th>
                                                <th scope="col"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- pending payment -->
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="container-fluid pt-3">
                            <div class="row mt-0">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom pb-1">
                                                <th scope="col">Sr no.</th>
                                                <th scope="col">Student name</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Class duration</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Payment</th>
                                                <th scope="col">Invoice number</th>
                                                <th scope="col">Payment status</th>
                                                <th scope="col">Paid by</th>
                                                <th scope="col"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- pending payment -->
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="container-fluid pt-3">
                            <div class="row mt-0">
                                <div class="col-md-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="border-bottom pb-1">
                                                <th scope="col">Sr no.</th>
                                                <th scope="col">Student name</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Class duration</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Payment</th>
                                                <th scope="col">Invoice number</th>
                                                <th scope="col">Payment status</th>
                                                <th scope="col">Paid by</th>
                                                <th scope="col"></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- pending payment -->
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="pt-4">
                                                    <span>01</span>
                                                </td>
                                                <td class="pt-4">Harram Laraib</td>
                                                <td class="pt-4">Chemistry</td>
                                                <td class="pt-4">30 mintues</td>
                                                <td class="pt-4">03 Sep, 2021</td>
                                                <td class="pt-4">
                                                    $5
                                                </td>
                                                <td>
                                                    mn2444s21554ss
                                                </td>

                                                <td class="pt-4 d-flex">
                                                    <span class="pending-text-1">Pending</span>

                                                </td>
                                                <td>
                                                    Alexendra Felix
                                                </td>
                                                <td class="pt-3">
                                                    <button class="schedule-btn w-100" data-toggle="modal"
                                                        data-target="#exampleModalCenter">Assign</button>
                                                </td>

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
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p>Assgin</p>
            </div>
            <div class="modal-body">
                <div class="input-serach">
                    <input class="w-100" type="search" placeholder="Search members" />
                    <img class="serach-icon" src="../assets/img/ico/Search.png" />
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.svg"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name">
                                <img src="../assets/img/ico/profile-boy.png" alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
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
        </div>
    </div>
</div>
<!-- end section -->
@endsection
