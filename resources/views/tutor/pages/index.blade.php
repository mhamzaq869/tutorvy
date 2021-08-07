@extends('tutor.layouts.app')

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="display: flex;">
        <!-- dashborad home -->
        <div class="container-fluid m-0 p-0">
            <p class="heading-first ml-3 mr-3">Dashboard</p>
            <div class="col-md-12 col-sm-12">
                <div class="container-fluid bg-homeimage1">
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
                                <img src="../assets/images/backgrounds/home-main.png"
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
                        Statistics</p>

                    <div class="container m-0 p-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            00 </p>
                                        <p class="class-booking mt-4">
                                            Delivered classes</p>
                                    </div>

                                    <div class="iconside">
                                        <img src="../assets/images/ico/blue-ico.png"
                                            style="width: 30px;position: absolute;top: 10px;right: 10px;">
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            00 </p>
                                        <p class="class-booking mt-4">
                                            Upcomming class</p>
                                    </div>

                                    <div class="iconside">
                                        <img src="../assets/images/ico/red-ico.png"
                                            style="opacity: 0.6;width: 35px;position: absolute;top: 10px;right: 10px;">
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking">
                                            00 </p>
                                        <p class="class-booking mt-4">
                                            Pending Bookings</p>
                                    </div>

                                    <div class="iconside">
                                        <img src="../assets/images/ico/ico-blue.png"
                                            style="width: 30px;position: absolute;top: 10px;right: 10px;">
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-3">
                                <div class="container card 1">
                                    <div class="text-home">
                                        <p class="number-booking"> 00 </p>
                                        <p class="class-booking mt-4">
                                            Total Subjects</p>
                                    </div>

                                    <div class="iconside">
                                        <img src="../assets/images/ico/yellow-ico.png"
                                            style="width: 25px;position: absolute;top: 10px;right: 10px;">
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>


                </div>
                <!-- table start -->

                <div class="container-fluid mt-4 " style="background-color: #ffffff;border-radius: 8px;">

                    <div class="container-fluid m-0 p-0">
                        <div class="row" style="border-bottom: 1px solid #D6DBE2;">
                            <div class="col-md-6">
                                <p class="heading-second pt-3 mb-3">
                                    New Bookings</p>
                            </div>
                            <div class="col-md-6">
                                <p class="view-bookings pt-3 mb-3">
                                    View all Bookings</p>
                            </div>
                        </div>

                        <div class="row">
                            <div style="margin: auto;" class="text-center mt-5 pb-5">
                                <img src="../assets/images/ico/subject-con.png" style="width: 200px;">
                                <p class="heading-third text-center mt-3">No bookings</p>
                                <p class="heading-fifth" style="line-height: 0;opacity: 0.7;">Improve your
                                    profile to get bookings</p>
                                <button class="schedule-btn mt-3 w-50 mb-5">Learn More</button>
                            </div>
                        </div>
                    </div>
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
                        <h3 id="monthAndYear"></h3>
                        <div class="button-container-calendar mt-3">
                            <span id="previous" onclick="previous()">
                                <img src="../assets/images/ico/side-arrow.png" alt="arrow">
                            </span>
                            <span id="next" onclick="next()">
                                <img src="../assets/images/ico/side-arrow1.png" alt="arrow">
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
            <div class="container-fluid mt-3 pt-3 pb-3"
                style="background-color: #ffffff;border-radius: 8px;">
                <p class="heading-second">Get verified</p>
                <p class="heading-fifth">Pending things required to get verified</p>
                <div class="d-flex">
                    <img src="../assets/images/ico/photo-ico.png" class="pr-3 h-100 mt-1">
                    <p class="hp-1">Profile photo</p>
                </div>
                <div class="d-flex">
                    <img src="../assets/images/ico/book-ico.png" class="pr-3 h-100 mt-1">
                    <p class="hp-1">Subjects</p>
                </div>
                <div class="d-flex">
                    <img src="../assets/images/ico/location-ico.png" class="pr-3 h-100 mt-1">
                    <p class="hp-1">Location</p>
                </div>
                <div class="d-flex">
                    <img src="../assets/images/ico/table-ico.png" class="pr-3 h-100 mt-1">
                    <p class="hp-1">Availability</p>
                </div>
                <p class="schedule-btn text-center mt-2" style="width: 150px;">Get verified</p>
            </div>




            <!-- bookings end -->
            <div class="chatbox-holder" style="display: none;">
                <div class="chatbox chatbox-min">
                    <div class="chatbox-top">
                        <div class="chatbox-avatar">
                            <a target="_blank" href="https://www.facebook.com/mfreak">
                                <img src="../assets/images/logo/harram.jpg" alt="logo"></a>
                        </div>
                        <div class="chat-partner-nam">
                            <span class="status online"></span>
                            <a target="_blank" href="#" class="chat-name" style="text-decoration: none;">
                                Harram Laraib
                            </a>
                        </div>
                        <div class="chatbox-icons">
                            <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
                            <a href="javascript:void(0);">

                                <img src="../assets/images/ico/ionic-ios-close.png" alt="icons-close" class="fa fa-close">
                            </a>
                        </div>
                    </div>

                    <div class="chat-messages">
                        <!-- <div class="message-box-holder">
                            <div class="message-box">
                                Hello
                            </div>
                        </div> -->

                        <div class="message-box-holder">
                            <div class="message-sender" style="margin-top: 100px;">
                                Danish
                            </div>
                            <div class="message-box message-partner" style="margin-top: 0px;">
                                Hi. How are you <img src="../assets/images/ico/3dot.png" style="width: 20px;">
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

                        <img src="../assets/images/ico/Icon material-send.png" alt="send_image" class="send"
                            style="width: 20px;height: 20px;margin-top: 10px;">

                    </div>

                </div>



            </div>
        </div>
    </section>
    <div class="line"></div>
</div>

@endsection
