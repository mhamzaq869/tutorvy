@extends('tutor.layouts.app')

@section('content')
<!-- top Fixed navbar End -->
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="">
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <p class="heading-first ">
                        Dashboard
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="bg-homeimage1">
                        <div class="row">
                            <div class="col-md-7 text-white pl-4">
                                <div class="text mt-5 ml-2">
                                    <p class="res-textup">
                                        We have upgraded the classroom.
                                    </p>
                                    <p class="res-textup1">
                                        Register yourself on Tutorvy and learn or teach anything from
                                        anywhere.
                                    </p>
                                    <a href=""class="text-white res-textup">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5  ">
                                <div class="home-image">
                                    <img src="{{asset('assets/images/backgrounds/home-main.png')}}" alt="home-image"
                                        style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="heading-third mt-4 mb-0">
                                Statistics
                            </p>
                        </div>
                        <div class="col-md-12">
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
                                               {{round(Auth::user()->teach->count(),2)}}
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
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
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card mt-0">
                                <div class="card-body">
                                    <div class="row overflow-scroll">
                                        <div class="col-md-12 mb-3">
                                                <div class="" style="">
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
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-7">
                                                <p class="heading-third">
                                                    Today Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="Booking/Booking.html" class="view-bookings">
                                                View all Bookings
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-2 bg-bookings">
                                        <div class="col-md-3 text-center">
                                            <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                style="margin-top: 32px;">
                                        </div>
                                        <div class="col-md-9">
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
                                    <div class="row  mt-2 bg-bookings">
                                        <div class="col-md-3 text-center">
                                            <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                style="margin-top: 32px;">
                                        </div>
                                        <div class="col-md-9">
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
                                    <div class="row mt-2">
                                        <div class="col-md-7">
                                                <p class="heading-third">
                                                    Upcoming Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="Booking/Booking.html" class="view-bookings">
                                                View all Bookings
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-2 bg-bookings">
                                        <div class="col-md-3 text-center">
                                            <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                style="margin-top: 32px;">
                                        </div>
                                        <div class="col-md-9">
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
                                    <div class="row mt-2 bg-bookings">
                                        <div class="col-md-3 text-center">
                                            <img src="{{asset('assets/images/ico/botal-ico.png') }}" alt="botal-ico"
                                                style="margin-top: 32px;">
                                        </div>
                                        <div class="col-md-9">
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
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
</div>

@endsection
