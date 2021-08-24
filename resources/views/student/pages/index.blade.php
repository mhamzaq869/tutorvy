@extends('student.layouts.app')

@section('content')
  <!-- top Fixed navbar End -->
  <div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="display: flex;">
        <!-- dashborad home -->
        <div class="container-fluid m-0 p-0">
            <p class="heading-first ml-3 mr-3">Dashboard</p>
            <div class="col-md-12 col-sm-12">
                <div class="container-fluid bg-homeimage">
                    <div class="row">
                        <div class="col-md-7 text-white">
                            <div class="text mt-5 ml-2">
                                <p class="res-textup"
                                    style="font-family: 'Poppins'font;font-size: 20px;font-weight: 600;line-height: 0.4;">
                                    We
                                    have upgraded the classroom.</p>
                                <p
                                    style=" font-size: 12px;font-weight: 400;font-family: Poppins;color: #FFFFFF;opacity: 0.71;">
                                    Register yourself on Tutorvy and learn or teach anything from anywhere.
                                </p>
                                <p style="font-family: Poppins;font-size: 14px;opacity: 0.8;">LERAN MORE
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5  m-0 p-0">
                            <div class="home-image">
                                <img src="{{asset('assets/images/backgrounds/home.svg')}}"
                                    style="width: 100%;height: 200px;">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- cards -->
            <div class="container">
                <div class="cards-list">
                    <p class="heading-second mt-4 mb-0">
                        Statistics
                    </p>
                    <div class="container m-0 p-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            16
                                        </p>
                                        <p class="class-booking mt-4">
                                            Delivered classes
                                        </p>
                                    </div>
                                    <div class="iconside">
                                        <img class="card-ico" src="{{asset('assets/images/ico/blue-ico.png')}}"
                                            alt="blue-ico">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            09
                                        </p>
                                        <p class="class-booking mt-4">
                                            Upcomming class
                                        </p>
                                    </div>
                                    <div class="iconside">
                                        <img class="card-ico1" src="{{asset('assets/images/ico/red-ico.png')}}"
                                            alt="red-ico">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            09
                                        </p>
                                        <p class="class-booking mt-4">
                                            Pending Bookings
                                        </p>
                                    </div>
                                    <div class="iconside">
                                        <img class="card-ico" src="{{asset('assets/images/ico/ico-blue.png')}}"
                                            alt="ico-blue">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            02
                                        </p>
                                        <p class="class-booking mt-4">
                                            Total Subjects
                                        </p>
                                    </div>
                                    <div class="iconside">
                                        <img class="card-ico1" src="{{asset('assets/images/ico/yellow-ico.png')}}"
                                            alt="yellow-ico">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table start -->
                <div class="container-fluid mt-4 " style="background-color: #ffffff;border-radius: 8px;">
                    <!-- table start -->
                    <div class="container-fluid m-0 p-0">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="heading-third pt-4 mb-3">
                                    Find a tutors</p>
                            </div>
                            <div class="col-md-6 mt-4">
                                <button type="button" style="float: right;" class="btn btn-primary"
                                    data-toggle="modal" data-target="#exampleModalCenter">
                                    Apply Filter
                                </button>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body"
                                        style="padding-top: 100px;padding-bottom: 100px;">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="box">
                                                        <select class="selectpicker w-100 select-o"
                                                            data-size="4">
                                                            <option value="">Select Custom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="w-100 select-o">
                                                        <option value="">hello</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="w-100 select-o">
                                                        <option value="">hello</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="w-100 select-o">
                                                        <option value="">hello</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>

                            <div style="overflow-y: scroll;height: 400px;">
                                <div class="container-fluid mt-4"
                                    style="background-color: white;border-radius: 8px;">
                                    <div class="row">
                                        <div class="col-md-9 m-0 p-0">
                                            <div class="row" style="line-height: 0.8;">
                                                <div class="col-md-2">
                                                    <div class="popover__wrapper mt-0">
                                                        <a href="../Profile/profile.html">
                                                            <h2 class="popover__title">
                                                                <img src="{{asset('assets/images/ico/hom-profile.png')}}"
                                                                    alt="home-profile">
                                                            </h2>
                                                        </a>
                                                        <div class="popover__content">
                                                            <div class="col-md-12">
                                                                <div class="row" style="line-height: 0.8;">
                                                                    <div class="col-md-2 mt-3">
                                                                        <img src="{{asset('assets/images/ico/hom-profile.png')}}"
                                                                            alt="home-profile">
                                                                    </div>
                                                                    <div class="col-md-10 mt-4">
                                                                        <div class="d-flex ml-5 ">
                                                                            <p class="heading-third ml-1">
                                                                                Harram
                                                                            </p>
                                                                            <div class=" ml-2">
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star"></span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row ml-4">
                                                                            <div class="col-md-1 mr-2 ml-3">
                                                                                <img src="{{asset('assets/images/ico/red-icon.png')}}"
                                                                                    alt="red-ico">
                                                                            </div>
                                                                            <div class="col-md-9 m-0 p-0">
                                                                                <p class="text-pro">
                                                                                    Associate Prof. at UKAS
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row  ml-4">
                                                                            <div class="col-md-1 ml-3">
                                                                                <img src="{{asset('assets/images/ico/location-pro.png')}}"
                                                                                    alt="location-pro">
                                                                            </div>
                                                                            <div class="col-md-9 m-0 p-0">
                                                                                <p
                                                                                    class="heading-fifth ml-2">
                                                                                    Lahore, Pakistan
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-4">
                                                    <div class="d-flex ml-3 ">
                                                        <p class="heading-third">
                                                            Harram
                                                        </p>
                                                        <div class=" ml-2">
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <p class="ml-2 mt-1 paragraph-text1">
                                                            4.0
                                                        </p>
                                                        <p class="ml-2 mt-1 paragraph-text2">
                                                            (25 review)
                                                        </p>
                                                    </div>
                                                    <div class="row ml-1">
                                                        <div class="col-md-1 mr-2">
                                                            <img src="{{asset('assets/images/ico/red-icon.png')}}"
                                                                alt="red-ico">
                                                        </div>
                                                        <div class="col-md-9 m-0 p-0">
                                                            <p class="text-pro">
                                                                Associate Prof. at UKAS
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row  ml-1">
                                                        <div class="col-md-1">
                                                            <img src="{{asset('assets/images/ico/location-pro.png')}}"
                                                                alt="location-pro">
                                                        </div>
                                                        <div class="col-md-9 m-0 p-0">
                                                            <p class="heading-fifth ml-2">
                                                                Lahore, Pakistan
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="d-flex justify-content-end">
                                                        <p class="rank-text mt-1">
                                                            TOP RANK
                                                        </p>
                                                        <img class="mr-1" src="{{asset('assets/images/ico/rank.png')}}"
                                                            alt="rank">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid mt-3">
                                                <div class="row">
                                                    <div class="col-md-4 m-0 p-0">
                                                        <p class="heading-fifth">
                                                            Subjects
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="heading-fifth">
                                                            Language
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="heading-fifth">
                                                            Education
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid mt-1 pb-3">
                                                <div class="row">
                                                    <div class="d-flex">
                                                        <button class="color-btn-std1">
                                                            Computer
                                                        </button>
                                                        <button class="color-btn-std1  ml-2">
                                                            Math
                                                        </button>
                                                        <button class="color-btn-std  ml-2">
                                                            Franch
                                                        </button>
                                                        <button class="color-btn-std  ml-2">
                                                            English
                                                        </button>
                                                        <button class="color-btn-std ml-2">
                                                            Urdu
                                                        </button>
                                                        <button class="color-btn-std3 ml-2 ">
                                                            University College
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 heading-forth">
                                                About tutor
                                            </p>
                                            <div class="container-fluid m-0 p-0">
                                                <p class="paragraph-text1" style="opacity: 0.8;">
                                                    Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the
                                                    industry's
                                                    standard dummy text ever since the 1500s, when an
                                                    unknown
                                                    printer took a galley of type and scrambled it to make a
                                                    type specimen book.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-3"
                                            style="background-color: #ebf4ff;border-radius: 8px;">
                                            <div class="text-center mt-5">
                                                <p class="paragraph-text1">starting from</p>
                                                <p
                                                    style="font-size: 64px;font-family: 'poppins';line-height: 1;">
                                                    $15
                                                </p>
                                                <p class="paragraph-text1 mb-5" style="line-height: 1;">
                                                    Per hour
                                                </p>
                                                <button class="cencel-btn w-100 mt-5">Massge</button>
                                                <button class="schedule-btn w-100 mt-3">Book class</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="container-fluid mt-4 "
                                    style="background-color: white;border-radius: 8px;">
                                    <div class="row">
                                        <div class="col-md-9 m-0 p-0">
                                            <div class="row" style="line-height: 0.8;">
                                                <div class="col-md-2">
                                                    <div class="popover__wrapper mt-0">
                                                        <a href="../Profile/profile.html">
                                                            <h2 class="popover__title">
                                                                <img src="{{asset('assets/images/ico/hom-profile.png')}}"
                                                                    alt="home-profile">
                                                            </h2>
                                                        </a>
                                                        <div class="popover__content">
                                                            <div class="col-md-12">
                                                                <div class="row" style="line-height: 0.8;">
                                                                    <div class="col-md-2 mt-3">
                                                                        <img src="{{asset('assets/images/ico/hom-profile.png')}}"
                                                                            alt="home-profile">
                                                                    </div>
                                                                    <div class="col-md-10 mt-4">
                                                                        <div class="d-flex ml-5 ">
                                                                            <p class="heading-third ml-1">
                                                                                Harram
                                                                            </p>
                                                                            <div class=" ml-2">
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star checked text-warning"></span>
                                                                                <span
                                                                                    class="fa fa-star"></span>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row ml-4">
                                                                            <div class="col-md-1 mr-2 ml-3">
                                                                                <img src="{{asset('assets/images/ico/red-icon.png')}}"
                                                                                    alt="red-ico">
                                                                            </div>
                                                                            <div class="col-md-9 m-0 p-0">
                                                                                <p class="text-pro">
                                                                                    Associate Prof. at UKAS
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row  ml-4">
                                                                            <div class="col-md-1 ml-3">
                                                                                <img src="{{asset('assets/images/ico/location-pro.png')}}"
                                                                                    alt="location-pro">
                                                                            </div>
                                                                            <div class="col-md-9 m-0 p-0">
                                                                                <p
                                                                                    class="heading-fifth ml-2">
                                                                                    Lahore, Pakistan
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mt-4">
                                                    <div class="d-flex ml-3 ">
                                                        <p class="heading-third">
                                                            Harram
                                                        </p>
                                                        <div class=" ml-2">
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span
                                                                class="fa fa-star checked text-warning"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <p class="ml-2 mt-1 paragraph-text1">
                                                            4.0
                                                        </p>
                                                        <p class="ml-2 mt-1 paragraph-text2">
                                                            (25 review)
                                                        </p>
                                                    </div>
                                                    <div class="row ml-1">
                                                        <div class="col-md-1 mr-2">
                                                            <img src="{{asset('assets/images/ico/red-icon.png')}}"
                                                                alt="red-ico">
                                                        </div>
                                                        <div class="col-md-9 m-0 p-0">
                                                            <p class="text-pro">
                                                                Associate Prof. at UKAS
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row  ml-1">
                                                        <div class="col-md-1">
                                                            <img src="{{asset('assets/images/ico/location-pro.png')}}"
                                                                alt="location-pro">
                                                        </div>
                                                        <div class="col-md-9 m-0 p-0">
                                                            <p class="heading-fifth ml-2">
                                                                Lahore, Pakistan
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mt-4">
                                                    <div class="d-flex justify-content-end">
                                                        <p class="rank-text mt-1"
                                                            style="position: absolute;left: -30px;">
                                                            Top Rank
                                                        </p>
                                                        <img src="{{asset('assets/images/ico/rank.png')}}" alt="rank">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid mt-3">
                                                <div class="row">
                                                    <div class="col-md-4 m-0 p-0">
                                                        <p class="heading-fifth">
                                                            Subjects
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="heading-fifth">
                                                            Language
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="heading-fifth">
                                                            Education
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid mt-1 pb-3">
                                                <div class="row">
                                                    <div class="d-flex">
                                                        <button class="color-btn-std1">
                                                            Computer
                                                        </button>
                                                        <button class="color-btn-std1  ml-2">
                                                            Math
                                                        </button>
                                                        <button class="color-btn-std  ml-2">
                                                            Franch
                                                        </button>
                                                        <button class="color-btn-std  ml-2">
                                                            English
                                                        </button>
                                                        <button class="color-btn-std ml-2">
                                                            Urdu
                                                        </button>
                                                        <button class="color-btn-std3 ml-2 ">
                                                            University College
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 heading-forth">
                                                About tutor
                                            </p>
                                            <div class="container-fluid m-0 p-0">
                                                <p class="paragraph-text1" style="opacity: 0.8;">
                                                    Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the
                                                    industry's
                                                    standard dummy text ever since the 1500s, when an
                                                    unknown
                                                    printer took a galley of type and scrambled it to make a
                                                    type specimen book.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-3"
                                            style="background-color: #ebf4ff;border-radius: 8px;">
                                            <div class="text-center mt-5">
                                                <p class="paragraph-text1">starting from</p>
                                                <p
                                                    style="font-size: 64px;font-family: 'poppins';line-height: 1;">
                                                    $15
                                                </p>
                                                <p class="paragraph-text1 mb-5" style="line-height: 1;">
                                                    Per hour
                                                </p>
                                                <button class="cencel-btn w-100 mt-5">Massge</button>
                                                <button class="schedule-btn w-100 mt-3">Book class</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end -->
                    </div>
                    <!-- table end -->
                    <!-- end -->
                </div>
                <!-- table end -->
            </div>

        </div>
        <!-- end dashborad home -->
        <div class="container-fluid m-0 p-0" style="width: 46%;" id="calcultor">
            <div class="col-md-12 m-0 p-0">
                <!-- clander -->
                <div class="wrapper">

                    <div class="container-calendar " style="width:100%;border-radius: 8px;">
                        <h3 id="monthAndYear">&nbsp;</h3>
                        <div class="button-container-calendar mt-3">
                            <span id="previous" onclick="previous()">
                                <img src="{{asset('assets/images/ico/side-arrow.png')}}" alt="arrow">
                            </span>
                            <span id="next" onclick="next()">
                                <img src="{{asset('assets/images/ico/side-arrow1.png')}}" alt="arrow">
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
                        <p class="view-bookings">
                            View all Bookings
                        </p>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row row-bac">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/botal-ico.png')}}" alt="botal-ico"
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
                                <img src="{{asset('assets/images/ico/watch-icon.png')}}" alt="watch" class="watch-icon">
                                <p class="time-chemistry">
                                    5 PM - 07 Feburary 2021
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row row-bac mt-3">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/che-ico.png')}}" alt="botal-ico" style="margin-top: 32px;">
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
                                <img src="{{asset('assets/images/ico/watch-icon.png')}}" alt="watch" class="watch-icon">
                                <p class="time-chemistry">
                                    5 PM - 07 Feburary 2021
                                </p>
                            </div>
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
                        <p class="view-bookings">
                            View all Bookings
                        </p>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row row-bac">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/botal-ico.png')}}" alt="botal-ico"
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
                                <img src="{{asset('assets/images/ico/watch-icon.png')}}" alt="watch" class="watch-icon">
                                <p class="time-chemistry">
                                    5 PM - 07 Feburary 2021
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row row-bac mt-3">
                        <div class="col-md-2">
                            <img src="{{asset('assets/images/ico/che-ico.png')}}" alt="botal-ico" style="margin-top: 32px;">
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
                                <img src="{{asset('assets/images/ico/watch-icon.png')}}" alt="watch" class="watch-icon">
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
            <div class="chatbox-holder" style="display: ;">
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
                                <img src="{{asset('assets/images/ico/ionic-ios-close.png')}}" alt="close"
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
                                <img src="{{asset('assets/images/ico/3dot.png')}}" alt="dot-ico" style="width: 20px;">
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
                        <img class="send" src="{{asset('assets/images/ico/material-send.png')}}" alt="send_image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
</div>

@endsection
