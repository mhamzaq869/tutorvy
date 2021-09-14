@extends('student.layouts.app')

@section('content')
<style>
    
</style>
  <!-- top Fixed navbar End -->
  <div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="row">
            <div class="col-md-12">
            <p class="heading-first ">
                        Dashboard
                    </p>
            </div>

            <div class="col-md-8">
                <div class="col-md-12 mb-3 ">
                    <div class=" card  bg-toast infoCard">
                        <a href="#" class="cross"  onclick="hideCard()"> 
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>

                        <div class="card-body row">
                            <div class="col-md-2 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10">
                                Dashboard have all the stats of your need including class details, upcoming classes, earning stats <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <img src="{{asset('assets/images/backgrounds/home.svg')}}" alt="home-image"
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
                                        <img class="card-ico" src="{{asset('assets/images/ico/blue-ico.png')}}"
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
                                        <img class="card-ico1" src="{{asset('assets/images/ico/red-ico.png')}}"
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
                                        <img class="card-ico" src="{{asset('assets/images/ico/ico-blue.png')}}"
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
                                        <img class="card-ico1" src="{{asset('assets/images/ico/yellow-ico.png')}}"
                                            alt="yellow-ico">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="heading-third pt-4 mb-3">
                                    Favourite Tutors</p>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9 row">
                                        <div class="col-md-3 mt-2 w-100">
                                            <select name="" id="" class="form-control">
                                                <option value="Subject"> Subject</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <select name="" id="" class="form-control">
                                                <option value="Location"> Location</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <select name="" id="" class="form-control">
                                                <option value="Rate"> Rate</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <select name="" id="" class="form-control">
                                                <option value="Rating"> Rating</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <button class="btn-general w-100">Apply Filters</button>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-12 scrollable h-666">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-2 col-3">
                                                                <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                            </div>
                                                            <div class="col-md-6 col-9">
                                                                <h3>Danish Jaffery</h3>
                                                                <small class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class=""> Associate Professor at UKAS</small>
                                                                <p><small><img src="../assets/images/ico/location-pro.png" alt="" class=""> Lahore,Pakistan</small></p>
                                                            </div>
                                                            <div class="col-md-4 col-6">
                                                                <p>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>  4.0
                                                                    <small class="text-grey">(25 reviews)</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <p><span class="text-green pr-3">Top Ranked</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-4">
                                                        <p class="mb-2">Subject</p>
                                                        <p> <span class="info-1 info">Computer Science</span><span class="info">Maths</span></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-2">Languages</p>
                                                        <p>
                                                            <span class="info-1 info lingo">French</span>
                                                            <span class="info lingo">English</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <p class="mb-2">Education</p>
                                                        <p>
                                                            <span class="info-1 info edu">Govt College Lahore Pakistan</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <p><strong> About Tutor </strong></p>
                                                        <p class="scrol-about">
                                                            Lorem ipsum dolor sit amet,  est commodi pariatur deserunt distinctio consectetur necessitatibus vitae obcaecati magni recusandae blanditiis sint porro placeat. Quia voluptates atque rerum ipsa architecto.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bg-price text-center">
                                                <div class="row mt-30">
                                                    <div class="col-md-12">
                                                        <p>starting from</p>
                                                        <h1 class="f-60">$51</h1>
                                                        <p>per hour</p>
                                                            <button type="button" class="p-2 cencel-btn w-100">
                                                                &nbsp; Message &nbsp;
                                                            </button>
                                                        <button type="button" class=" btn-general w-100 mt-2 p-2">
                                                                &nbsp; Book Class &nbsp;
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-2 col-3">
                                                                <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                            </div>
                                                            <div class="col-md-6 col-9">
                                                                <h3>Danish Jaffery</h3>
                                                                <small class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class=""> Associate Professor at UKAS</small>
                                                                <p><small><img src="../assets/images/ico/location-pro.png" alt="" class=""> Lahore,Pakistan</small></p>
                                                            </div>
                                                            <div class="col-md-4 col-6">
                                                                <p>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>
                                                                    <i class="fa fa-star text-yellow"></i>  4.0
                                                                    <small class="text-grey">(25 reviews)</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <p><span class="text-green pr-3">Top Ranked</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-4">
                                                        <p class="mb-2">Subject</p>
                                                        <p> <span class="info-1 info">Computer Science</span><span class="info">Maths</span></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-2">Languages</p>
                                                        <p>
                                                            <span class="info-1 info lingo">French</span>
                                                            <span class="info lingo">English</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <p class="mb-2">Education</p>
                                                        <p>
                                                            <span class="info-1 info edu">Govt College Lahore Pakistan</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <p><strong> About Tutor </strong></p>
                                                        <p class="scrol-about">
                                                            Lorem ipsum dolor sit amet,  est commodi pariatur deserunt distinctio consectetur necessitatibus vitae obcaecati magni recusandae blanditiis sint porro placeat. Quia voluptates atque rerum ipsa architecto.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 bg-price text-center">
                                                <div class="row mt-30">
                                                    <div class="col-md-12">
                                                        <p>starting from</p>
                                                        <h1 class="f-60">$51</h1>
                                                        <p>per hour</p>
                                                            <button type="button" class="p-2 cencel-btn w-100">
                                                                &nbsp; Message &nbsp;
                                                            </button>
                                                        <button type="button" class=" btn-general w-100 mt-2 p-2">
                                                                &nbsp; Book Class &nbsp;
                                                            </button>
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
                                        <div class="col-md-8">
                                                <p class="heading-third">
                                                    Today Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="Booking/Booking.html" class="view-bookings">
                                                View all 
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
                                        <div class="col-md-9">
                                                <p class="heading-third">
                                                    Upcoming Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="Booking/Booking.html" class="view-bookings">
                                                View all
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
    </section>
    <div class="line"></div>
</div>
<script>
 
</script>
@endsection
