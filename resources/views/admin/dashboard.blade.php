@extends('admin.layouts.app')

@section('content')

    <!--section start  -->
    <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mr-4 ml-3 mt-3">
            <div class="row">
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
            <div class="row">
                <div class="col-md-9">
                    <div class="cards-list">
                        <h2 class="mt-4 mb-0 animate__bounceIn">
                            Statistics
                        </h2>
                        <div class="container-fluid m-0 p-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="container card ">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                506
                                            </p>
                                            <p class="class-booking">
                                                Total tutors
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico" src="assets/img/ico/card-icon-1.svg" alt="blue-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="container card ">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                239
                                            </p>
                                            <p class="class-booking">
                                                Total students
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1" src="assets/img/ico/card-icon-2.svg" alt="red-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="container card">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                109
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
                        </div>
                    </div>
                    <div class="container-fluid container-bg growth-top m-0 p-0">
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
                        <div class="container-fluid m-0 p-0">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1 class="d-flex number-postion">1564
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
                <div class="col-md-3 m-0 p-0">
                    <!-- notification -->
                    <div class="container-fluid mt-4 m-0 p-0">
                        <div class="row mt-4 m-0 p-0">
                            <div class="col-6 m-0 p-0">
                                <h2>
                                    Notifications
                                </h2>
                            </div>
                            <div class="col-6 m-0 p-0">
                                <div class="view-bookings mt-0">
                                    <a href="notification/notification.html">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 container-bg-1 mr-2 pb-2 pt-0 notifiaction-margin ">
                            <div class="notification-hover container row mt-2 pt-2 pb-2 m-0 p-0 w-100">
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
                            <div class="notification-hover container row mt-2 pt-2 pb-2 m-0 p-0 w-100">
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
                            <div class="notification-hover container row mt-2 pt-2 pb-2 m-0 p-0 w-100">
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
                    <div id="box" class="container-bg pb-3 mt-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="selection pt-3 pl-3 mt-1">
                                        <h2>
                                            Revenue
                                        </h2>
                                        <span class="heading-fifth1 heading-fifth1-1">
                                            Total Revenue
                                            <h1 class="d-flex">1564
                                                <span class="heading-user">USD</span>
                                            </h1>
                                        </span>

                                    </div>
                                </div>
                                <div class="col-md-6 m-0 p-0">
                                    <div class="selection pt-3">
                                        <div class="input-option w-100">
                                            <select class="select ">
                                                <option>3 months</option>
                                                <option>6 months</option>
                                                <option>12 months</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box columnbox mt-4">
                                <div id="columnchart"> </div>
                            </div>

                        </div>
                        <!-- graph -->
                    </div>
                </div>
            </div>
            <!-- chart graph -->
        </div>
        <!-- bar chart -->
        <!-- bookings end -->
        <!-- chatbox -->
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
    <!-- tutor request bookings  table start-->
    <div class="container-fluid mx-auto width-97  mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>New tutors requests</h3>
            </div>
            <div class="col-md-6">
                <a href="tutor-manage/all-tutor.html" class="btn view-bookings">View all tutors</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-auto width-97">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-3 mt-3 container-bg ">
                    <div class=" container-fluid border-bottom  pb-2">
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
                    </div>

                    <div class="row ">
                        <div class="col-md-12">
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="border-bottom table-margin-top ">
                                        <th scope="col">Name</th>
                                        <th scope="col">Tutor id</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subjects</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Availability </th>
                                        <th scope="col">Rate</th>

                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody id="datas">
                                    <tr>
                                        <td class="pt-4">
                                            M Harram Laraib
                                        </td>
                                        <td class="pt-4">1234567890</td>
                                        <td class="pt-4">
                                            <span href="#" data-toggle="tooltip"
                                                title="harramlaraib127@gmail.com">har***</span>
                                        </td>
                                        <td class="pt-4">English</td>
                                        <td class="pt-4">Lahore, Punjab Pakistan</td>
                                        <td class="pt-4">Advance</td>
                                        <td class="pt-4" id="avalibility">8am-8pm</td>
                                        <td class="pt-4">$50</td>

                                        <td class="pt-3 text-right">
                                            <a href="tutor-manage/request.html" class="cencel-btn btn">
                                                View
                                            </a>
                                        </td>
                                        <td class="pt-3 text-right">
                                            <button class="schedule-btn" data-toggle="modal"
                                                data-target="#exampleModalCenter">Assign</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            M Harram Laraib
                                        </td>
                                        <td class="pt-4">1234567890</td>
                                        <td class="pt-4">
                                            <span href="#" data-toggle="tooltip"
                                                title="harramlaraib127@gmail.com">har***</span>
                                        </td>
                                        <td class="pt-4">English</td>
                                        <td class="pt-4">Lahore, Punjab Pakistan</td>
                                        <td class="pt-4">Advance</td>
                                        <td class="pt-4" id="avalibility">8am-8pm</td>
                                        <td class="pt-4">$50</td>

                                        <td class="pt-3 text-right">
                                            <a href="tutor-manage/request.html" class="cencel-btn btn">
                                                View
                                            </a>
                                        </td>
                                        <td class="pt-3 text-right">
                                            <button class="schedule-btn" data-toggle="modal"
                                                data-target="#exampleModalCenter">Assign</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            M Harram Laraib
                                        </td>
                                        <td class="pt-4">1234567890</td>
                                        <td class="pt-4">
                                            <span href="#" data-toggle="tooltip"
                                                title="harramlaraib127@gmail.com">har***</span>
                                        </td>
                                        <td class="pt-4">English</td>
                                        <td class="pt-4">Lahore, Punjab Pakistan</td>
                                        <td class="pt-4">Advance</td>
                                        <td class="pt-4" id="avalibility">8am-8pm</td>
                                        <td class="pt-4">$50</td>

                                        <td class="pt-3 text-right">
                                            <a href="tutor-manage/request.html" class="cencel-btn btn">
                                                View
                                            </a>
                                        </td>
                                        <td class="pt-3 text-right">
                                            <button class="schedule-btn" data-toggle="modal"
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
    <!-- end table -->
    <div class="container-fluid mx-auto width-97 mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Support</h3>
            </div>
            <div class="col-md-6">
                <a href="support/support.html" class="btn view-bookings">Support</a>
            </div>
        </div>
    </div>
    <!-- all teacher's table data -->
    <div class="container-fluid mx-auto width-97 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-3 mt-3 container-bg">
                    <div class="container-fluid border-bottom pb-2 pt-1">
                        <div class="row">
                            <div class="col-md-11">
                                <form class="row">
                                    <div class="col-md-2">
                                        <div class="input-serach">
                                            <input type="search" placeholder="Ticket no." id="home-ticket" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-serach">
                                            <input type="search" placeholder="User" id="home-user" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select id="home-category">
                                                <option>Category</option>
                                                <option>1</option>
                                                <option>1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select id="home-status">
                                                <option>Status</option>
                                                <option>Pending</option>
                                                <option>Solved</option>

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
                                <div class="sort-text">
                                    <select id="sort-by-home-1">
                                        <option value="3" disabled selected>Sort by</option>
                                        <option value="1">Old to new</option>
                                        <option value="3">New to old</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
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
                                    <tr>
                                        <td class="pt-4">
                                            <span>1234567890</span>
                                        </td>
                                        <td class="pt-4">Harram Laraib</td>
                                        <td class="pt-4">i have a issue for chemistry book and Solved this problem

                                        </td>
                                        <td class="pt-4">Payment</td>
                                        <td class="pt-4">03 jun, 21</td>
                                        <td class="pt-4">Danish Jaffery</td>
                                        <td class="pt-4">
                                            <span class="pending-text">Pending</span>
                                        </td>
                                        <td class="pt-3 float-right">
                                            <a href="support/ticket.html" class="schedule-btn btn">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            <span>1234567890</span>
                                        </td>
                                        <td class="pt-4">Harram Laraib</td>
                                        <td class="pt-4">i have a issue for chemistry book and Solved this problem

                                        </td>
                                        <td class="pt-4">Payment</td>
                                        <td class="pt-4">03 jun, 21</td>
                                        <td class="pt-4">Danish Jaffery</td>
                                        <td class="pt-4">
                                            <span class="pending-text">Pending</span>
                                        </td>
                                        <td class="pt-3 float-right">
                                            <a href="support/ticket.html" class="schedule-btn btn">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">
                                            <span>1234567890</span>
                                        </td>
                                        <td class="pt-4">Harram Laraib</td>
                                        <td class="pt-4">i have a issue for chemistry book and Solved this problem

                                        </td>
                                        <td class="pt-4">Payment</td>
                                        <td class="pt-4">03 jun, 21</td>
                                        <td class="pt-4">Danish Jaffery</td>
                                        <td class="pt-4">
                                            <span class="pending-text">Pending</span>
                                        </td>
                                        <td class="pt-3 float-right">
                                            <a href="support/ticket.html" class="schedule-btn btn">View</a>
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
