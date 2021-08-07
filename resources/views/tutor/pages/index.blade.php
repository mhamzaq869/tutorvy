@extends('tutor.layouts.app')

@section('content')
<!-- top Fixed navbar End -->
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid m-0 p-0">
            <div class="row  mr-1 ml-1">
                <p class="heading-first ml-3 mr-3">
                    Dashboard
                </p>
                <div class="col-md-12 ">
                    <div class="container-fluid">
                        <div class="row bg-homeimage">
                            <div class="col-md-7 text-white">
                                <div class="text mt-5 ml-2">
                                    <p class="res-textup">
                                        We have upgraded the classroom.
                                    </p>
                                    <p class="res-textup1">
                                        Register yourself on Tutorvy and learn or teach anything from
                                        anywhere.
                                    </p>
                                    <p class="res-textup2">
                                        LERAN MORE
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5  m-0 p-0">
                                <div class="home-image">
                                    <img src="{{asset('assets/images/backgrounds/home.svg')}}" alt="home-image"
                                        style="width: 100%;height: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cards -->
                <div class="container-fluid">
                    <div class="cards-list">
                        <p class="heading-second mt-4 mb-0">
                            Statistics
                        </p>
                        <div class="container-fluid m-0 p-0">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                16
                                            </p>
                                            <p class="class-booking mt-4">
                                                Delivered classes
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico" src="{{asset('assets/images/ico/card-icon-1.svg')}}"
                                                alt="blue-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                09
                                            </p>
                                            <p class="class-booking mt-4">
                                                Upcomming class
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico3" src="{{asset('assets/images/ico/card-icon-2.svg')}}"
                                                alt="red-ico">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                09
                                            </p>
                                            <p class="class-booking mt-4">
                                                Pending Bookings
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico2" src="{{asset('assets/images/ico/card-icon-3.svg')}}"
                                                alt="ico-blue">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="container-fluid card 1">
                                        <div class="text-home">
                                            <p class="number-booking">
                                                02
                                            </p>
                                            <p class="class-booking mt-4">
                                                Total Subjects
                                            </p>
                                        </div>
                                        <div class="iconside">
                                            <img class="card-ico1" src="{{asset('assets/images/ico/yellow-ico.png') }}"
                                                alt="yellow-ico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table start -->
                    <div class="container-fluid mt-4 "
                        style="background-color: #ffffff;border-radius: 8px;">
                        <div class="container-fluid m-0 p-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="heading-third pt-3 mb-3">
                                        New Bookings
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <a href="Booking/Booking.html" class="view-bookings pt-3 mb-3">
                                        View all Bookings
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-xs-12">
                                    <table class="table table-bordered" style="border: none !important;">
                                        <thead>
                                            <tr class="tb-new-header">
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
                                                <th scope="col"></th>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
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
                                                    5pm -07
                                                </td>
                                                <td class="pt-4">
                                                    Harram
                                                </td>
                                                <td class="detail-table pt-4 pl-5">
                                                    View details
                                                </td>
                                                <td>
                                                    <button type="button" class="schedule-btn"
                                                        style="float: right;width: 100px;">
                                                        Accept
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- table end -->
                </div>
            </div>
        </div>
        <!-- end dashborad home -->
        <div class="container-fluid m-0 p-0" style="width: 46%;" id="calcultor">
            <div class="col-md-12 m-0 p-0">
                <!-- clander -->
                <div class="wrapper">
                    <div class="container-calendar " style="width:100%;border-radius: 8px;">
                        <h3 id="monthAndYear">
                            &nbsp;
                        </h3>
                        <div class="button-container-calendar mt-3">
                            <span id="previous" onclick="previous()">
                                <img src="{{asset('assets/images/ico/side-arrow.png') }}" alt="arrow">
                            </span>
                            <span id="next" onclick="next()">
                                <img src="{{asset('assets/images/ico/side-arrow1.png') }}" alt="arrow">
                            </span>
                        </div>
                        <table class="table-calendar" id="calendar" data-lang="en">
                            <thead id="thead-month"></thead>
                            <tbody id="calendar-body"></tbody>
                        </table>
                        <div class="footer-container-calendar" style="display: none;">
                            <label for="month">Jump To: </label>
                            <select id="month" onchange="jump()">
                                <option value=0>Jan</option>
                                <option value=1>Feb</option>
                                <option value=2>Mar</option>
                                <option value=3>Apr</option>
                                <option value=4>May</option>
                                <option value=5>Jun</option>
                                <option value=6>Jul</option>
                                <option value=7>Aug</option>
                                <option value=8>Sep</option>
                                <option value=9>Oct</option>
                                <option value=10>Nov</option>
                                <option value=11>Dec</option>
                            </select>
                            <select id="year" onchange="jump()"></select>
                        </div>
                    </div>
                </div>
                <!-- clander end -->
            </div>
            <!-- bookings start -->
            <div class="container-fluid clander1">
                <div class="row rows-rap" style="display: flex;">
                    <div class="col-md-7">
                        <p class="heading-third">
                            Today Bookings
                        </p>
                    </div>
                    <div class="col-md-5">
                        <a href="Booking/Booking.html" class="view-bookings">
                            View all Bookings
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-bac">
                    <div class="col-md-2">
                        <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                            style="margin-top: 32px;">
                    </div>
                    <div class="col-md-10">
                        <p class="mt-3 mb-2 periodic-cls">
                            <a class="chemistry-tex1">
                                Chemistry class:
                            </a>
                            Periodic table
                        </p>
                        <p class="chemistry-tex2">
                            It is a long established fact that a reader will be distracted by.
                        </p>
                        <div style="display: inline-flex;">
                            <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                            <p class="time-chemistry">
                                5 PM - 07 Feburary 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-bac mt-3">
                    <div class="col-md-2">
                        <img src="{{asset('assets/images/ico/che-ico.png') }}" alt="botal-ico" style="margin-top: 32px;">
                    </div>
                    <div class="col-md-10">
                        <p class="mt-3 mb-2 periodic-cls">
                            <a class="chemistry-tex1">
                                Chemistry class:
                            </a>
                            Periodic table
                        </p>
                        <p class="chemistry-tex2">
                            It is a long established fact that a reader will be distracted by.
                        </p>
                        <div style="display: inline-flex;">
                            <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                            <p class="time-chemistry">
                                5 PM - 07 Feburary 2021
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid clander1">
                <div class="row rows-rap" style="display: flex;">
                    <div class="col-md-7">
                        <p class="heading-third">
                            Upcomming
                        </p>
                    </div>
                    <div class="col-md-5">
                        <a href="Booking/Booking.html" class="view-bookings">
                            View all Bookings
                        </a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row row-bac">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                style="margin-top: 32px;">
                        </div>
                        <div class="col-md-10">
                            <p class="mt-3 mb-2 periodic-cls">
                                <a class="chemistry-tex1">
                                    Chemistry class:
                                </a>
                                Periodic table
                            </p>
                            <p class="chemistry-tex2">
                                It is a long established fact that a reader will be distracted by.
                            </p>
                            <div style="display: inline-flex;">
                                <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                                <p class="time-chemistry">
                                    5 PM - 07 Feburary 2021
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-bac mt-3">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/che-ico.png') }}" alt="botal-ico"
                                style="margin-top: 32px;">
                        </div>
                        <div class="col-md-10">
                            <p class="mt-3 mb-2 periodic-cls">
                                <a class="chemistry-tex1">
                                    Chemistry class:
                                </a>
                                Periodic table
                            </p>
                            <p class="chemistry-tex2">
                                It is a long established fact that a reader will be distracted by.
                            </p>

                            <div style="display: inline-flex;">
                                <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class="watch-icon">
                                <p class="time-chemistry">
                                    5 PM - 07 Feburary 2021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bookings end -->
            <!-- chatbox -->
            <div class="chatbox-holder" style ="display:none">
                <div class="chatbox chatbox-min">
                    <div class="chatbox-top">
                        <div class="chatbox-avatar">
                            <a target="_blank" href="https://www.facebook.com/mfreak">
                                <img src="{{asset('assets/images/logo/harram.jpg')}}" alt="harram">
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
                                <img src="{{asset('assets/images/ico/ionic-ios-close.png') }}" alt="close"
                                    class="fa fa-close">
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
                                <img src="{{asset('assets/images/ico/3dot.png') }}" alt="dot-ico" style="width: 20px;">
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
                        <img class="send" src="{{asset('assets/images/ico/material-send.png') }}" alt="send_image">
                    </div>
                </div>
            </div>
            <!-- end chatbox -->
        </div>
    </section>
    <div class="line"></div>
</div>

@endsection
