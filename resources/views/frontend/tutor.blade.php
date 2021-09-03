@extends('layouts.app')

@section('content')
       <!-- learn more  -->
       <section class="section-main mt-5 pb-5">
        <div class="container-fluid learn-more">
            <div class="row mt-5">
                <div class="col-md-6 main-bg-height none" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-sectiom-one">
                        <p data-aos="flip-left mb-0" class="Learn-text">
                            Teach anytime,
                        </p>
                        <p  class="where-text-home " style="">
                            at best rate
                        </p>
                        <p class="there-text there-text-main mt-3">
                            There are many variations of passages available, but <br />
                            the majority have suffered alteration in some form.</p>
                        <div class="input-text-1 input-text-main mt-5">
                            <a href="{{route('register')}}">
                                <input  type="submit" value="Become a tutor">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="1000">
                    <div>
                        <div class="image-section-one text-left">
                            <img src="../assets/images/ico/student-image-main.svg" class="w-100"
                                alt="home-section-one">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 main-bg-height shows mt-4" data-aos="fade-right" data-aos-duration="1000">
                    <div class="text-sectiom-one">
                        <p data-aos="flip-left" class="Learn-text">
                            Teach anytime,

                        </p>
                        <p  class="where-text" style="">
                            at best rate
                        </p>
                        <p  class="there-text there-text-main">
                            There are many variations of passages available, but
                            the majority have suffered alteration in some form.</p>
                        <div class="input-text-1 input-text-main mt-5 mx-auto text-center">
                            <a href="../registerion/registration.html">
                                <input  type="submit" value="Become a tutor">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- how work -->
        <div data-aos="fade-up" data-aos-duration="1000" class="container  mb-5">
            <div class=" text-center mt-5 how-mobile-section">
                <span class="Learn-texts Learn-texts-mobile font-size font-weight800 mt-5 aos-init aos-animate">
                    How
                    <span class="where-texts where-texts-mobile font-size font-weight800">
                        it works
                    </span>
                </span>
                <p  class="there-text none">
                    There are many variations of passages available, but <br />
                    the majority have suffered alteration in some form.
                </p>
                <p  class="there-text shows mt-2">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.
             </p>
            </div>
        </div>
        <!-- find tutuor -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="img-profile img-profile-2">
                            <img src="../assets/images/ico/book-icon-std.svg" alt="search-icon">
                        </div>
                        <div>
                            <p class="text-find mt-3">
                                Get bookings
                            </p>
                            <p class="there-text mt-0">
                                There are many variations of passages available, but
                                the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6" style="border-radius: 8px;">
                    <div>
                        <p class="text-center  text-white gif-image">
                            <img src="../assets/images/ico/Mask Group 63.png" class="w-100">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- add section line -->
        <div class="container">
            <div class="add-section-line">
                <img src="../assets/images/add-section-line.png" width="100%" alt="add-section-line">
            </div>
        </div>
        <!-- calender -->
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <img class="clander-img none mx-auto d-block" src="../assets/images/calender.png" alt="clander">
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6 ">
                    <div class="img-profile img-profile-2">
                        <img src="../assets/images/red-calender.png" alt="red-calender">
                    </div>
                    <p class="text-find mt-3">
                        Take class anytime
                    </p>
                    <p class="there-text mt-0">
                        There are many variations of passages available, but
                        the majority have suffered alteration in some form.
                    </p>
                </div>
                <div class="col-md-6 shows" data-aos="fade-up" data-aos-duration="1000">
                    <img class="clander-img  mx-auto d-block" src="../assets/images/calender.png" alt="clander">
                </div>
            </div>
        </div>
        <!-- add section line -->
        <div class="container">
            <div class="add-section-line">
                <img src="../assets/images/add-section-lines.png" width="100%" alt="add-section-line">
            </div>
        </div>
        <!-- whiteboard -->
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6">
                    <div class="img-profile img-profile-2">
                        <img src="../assets/images/enjoy-icon.png" alt="red-calender">
                    </div>
                    <div>
                        <p class="text-find mt-3">
                            Enjoy Learning
                        </p>
                        <p class="there-text mt-0">
                            There are many variations of passages available, but
                            the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000" class="col-md-6">
                    <img class="w-100 mobile-calender" src="../assets/images/white-borad.png" alt="clander">
                </div>
            </div>
        </div>
    </section>
    <!-- mobile view -->
    <div class="container bg-advance">
        <div class="row">
            <div class="col-md-6">
                <div class="text-class">
                    <p>
                        Advance
                        <span class="class-text">
                        Classroom
                    </span>
                    </p>
                    
                </div>
                <div class=" chweck ml-4 pb-5">
                    <p class="class-there text-xs-center-1">
                        There are many variations of passages available, but the
                        majority have suffered alteration in some form. There are
                        many variations of passages available.
                    </p>
                    <br />
                    <input type="submit" value="Take a demo class" class="submit-type none">
                    <div class="none">
                    <span class="text-demo">
                        Watch demo
                    </span>
                    <img id="image-rotate-play"  data-toggle="modal" data-target="#exampleModalCenter"
                        src="../assets/images/play-icon.png" alt="play-icon">
                    </div>
                    </div>
                    <div class="take-demo shows">Take demo class</div>
                </div>
            <!-- Modal -->
            <div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-body ">
                        <div class="modal-content" style="background-color: transparent;border: none;">
                            <div class="container">
                                <button type="button" class="close text-light" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <iframe width="100%" height="315" src="https://www.youtube.com/v/A6XUVjK9W4o"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="variation">
                    <ul>
                        <li>
                            <img src="../assets/images/tick-icon.png" alt="tick-icon">
                            There are many variations
                        </li>
                        <li>
                            <img src="../assets/images/tick-icon.png" alt="tick-icon">
                            There are many variations
                        </li>
                        <li>
                            <img src="../assets/images/tick-icon.png" alt="tick-icon">
                            There are many variations
                        </li>
                        <li>
                            <img src="../assets/images/tick-icon.png" alt="tick-icon">
                            There are many variations
                        </li>
                        <li>
                            <img src="../assets/images/tick-icon.png" alt="tick-icon">
                            There are many variations
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container main mt-5">
        <!-- <section class="page1"> -->
            <div class="page_container">
                <img class="img w-100" src="../assets/images/Classroom – live.svg" />
            </div>
        <!-- </section>   -->
    </div>
    </div>

    <!-- mobile downliad app -->
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-5 ">
                <!-- <br /> -->
                <div class="mibile-image pt-4">
                    <br />
                    <span class="ml-5 mobile-down">
                        Download
                        <span class="app-text">
                            the app
                        </span>
                    </span>
                    <p  class="there-text none">
                        There are many variations of passages available, but <br />
                        the majority have suffered alteration in some form.
                    </p>
                    <p  class="there-text shows mt-2">
                        There are many variations of passages available, but
                        the majority have suffered alteration in some form.
                 </p>
                    <div class="btn-socail">
                        <img class="w-25 ml-5" src="../assets/images/g-btn.png" alt="img">
                        <img class="w-25 ml-3" src="../assets/images/Apple-btn.png" alt="img">
                    </div>
                </div>
                <div class="margin-top-image">
                    <img src="../assets/images/mobile-image.png" class="w-100 none" alt="icon">
                    <img src="../assets/images/ico/mobile-advance.svg" class="w-100 shows" alt="icon">
                </div>
            </div>
        </div>
    </div>
    <!-- our happy -->
    <div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
        <br /><br /><br />
        <div class="row mobile-top-happy ">
            <div class="col-md-6 text-xs-center">
                <span class="Learn-texts Learn-texts-mobile font-size font-weight800">
                    Our happy
                    <span class="where-texts Learn-texts-mobile font-size font-weight800">
                        users
                    </span>
                </span>
            </div>
            <div class="col-md-6">
                <p class="there-text mt-4">
                    There are many variations of passages available, but
                    the majority have suffered alteration in some form.
                </p>
            </div>
        </div>
        <br />
    </div>
    <div class="container-fluid mt-5 carousel-hide">
        <div class="container-fluid">
            <div class="row m-0 p-0" style="overflow: hidden;">
                <div class="col-md-4 col-12 mb-3 train ">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                4.0
                            </span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-3 train ">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                4.0
                            </span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-3 train">
                    <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                        <div class=" ml-4 d-flex ">
                            <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                            <span class="std-name ml-3">Harram Altaf
                                <p class="std-text">Student</p>
                            </span>
                            <span class="date-year">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                4.0
                            </span>
                        </div>
                        <p class="there-text mt-2 ml-3">
                            It is a long established fact that a reader will be distracted
                            by the readable content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="pages">
            <div class="panes">
                <div>Looping Horizontal Scroll</div>
            </div>
            <div class="panes">
                <div>2</div>
            </div>
            <div class="panes">
                <div>3</div>
            </div>
            <div class="panes">
                <div class="row" style="overflow: hidden;">
                    <div class="col-md-4 mb-3">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                            <div class=" ml-4 d-flex ">
                                <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                <span class="std-name ml-3">Harram Altaf
                                    <p class="std-text">Student</p>
                                </span>
                                <span class="date-year"> 02 March 2021</span>
                            </div>
                            <p class="there-text mt-2 ml-3">
                                It is a long established fact that a reader will <br /> be distracted
                                by the readable content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panes ml-4">
                <div>
                    <div class="row" style="overflow: hidden;">
                        <div class="col-md-4 mb-3">
                            <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                                <div class=" ml-4 d-flex ">
                                    <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                    <span class="std-name ml-3">Harram Altaf
                                        <p class="std-text">Student</p>
                                    </span>
                                    <span class="date-year"> 02 March 2021</span>
                                </div>
                                <p class="there-text mt-2 ml-3">
                                    It is a long established fact that a reader will <br /> be distracted
                                    by the readable content.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                                <div class=" ml-4 d-flex ">
                                    <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                    <span class="std-name ml-3">Harram Altaf
                                        <p class="std-text">Student</p>
                                    </span>
                                    <span class="date-year"> 02 March 2021</span>
                                </div>
                                <p class="there-text mt-2 ml-3">
                                    It is a long established fact that a reader will <br /> be distracted
                                    by the readable content.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <div class="pt-4 pb-3 bg-card-std" style="background-color: #F9FBFF;">
                                <div class=" ml-4 d-flex ">
                                    <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                                    <span class="std-name ml-3">Harram Altaf
                                        <p class="std-text">Student</p>
                                    </span>
                                    <span class="date-year"> 02 March 2021</span>
                                </div>
                                <p class="there-text mt-2 ml-3">
                                    It is a long established fact that a reader will <br /> be distracted
                                    by the readable content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panes">
                <div>Last</div>
            </div>
            <div class="panes">
                <div>Looping Horizontal Scroll</div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="mx-auto mt-4 input-text">
                    <input type="submit" value="Rate us" />
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="container-fluid shows">
        <div class="row m-0 p-0 flex-scroll">
            <div class="col-md-4 col-10 mb-3 card-mobile">
                <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                    </div>
                    <span class="date-year">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        4.0
                    </span>
                    <p class="there-text mt-2 ml-1 m-4 text-left">
                        It is a long established fact that a reader
                        will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-10 mb-3 card-mobile">
                <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                    </div>
                    <span class="date-year">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        4.0
                    </span>
                    <p class="there-text mt-2 ml-1 m-4 text-left">
                        It is a long established fact that a reader
                        will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-10 mb-3 card-mobile">
                <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                    </div>
                    <span class="date-year">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        4.0
                    </span>
                    <p class="there-text mt-2 ml-1 m-4 text-left">
                        It is a long established fact that a reader
                        will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-10 mb-3 card-mobile">
                <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                    </div>
                    <span class="date-year">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        4.0
                    </span>
                    <p class="there-text mt-2 ml-1 m-4 text-left">
                        It is a long established fact that a reader
                        will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-10 mb-3 card-mobile">
                <div class="pt-3 pb-1 bg-card-std" style="background-color: #F9FBFF;">
                    <div class=" ml-4 d-flex ">
                        <img src="../assets/images/card-profile.png" height="50px" alt="card-profile">
                        <span class="std-name ml-3">Harram Altaf
                            <p class="std-text">Student</p>
                        </span>
                    </div>
                    <span class="date-year">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        4.0
                    </span>
                    <p class="there-text mt-2 ml-1 m-4 text-left">
                        It is a long established fact that a reader
                        will be distracted
                        by the readable content.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="mx-auto mt-4 input-text">
                    <input type="submit" value="Rate us" />
                </div>
            </div>
        </div>
    </div>
    <section id="section-tutor">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center pt-5 pb-5 bg-tutor"
                    style="background-image: url('../assets/images/tutor-img-line.png');background-position: center;">
                    <span class="Learn-texts Learn-texts-mobile font-size font-weight800">
                        Become a
                        <span class="where-texts where-texts-mobile font-size font-weight800">
                            tutor
                        </span>
                    </span>
                    <p  class="there-text none">
                        There are many variations of passages available, but <br />
                        the majority have suffered alteration in some form.
                    </p>
                    <p  class="there-text shows mt-2">
                        There are many variations of passages available, but
                        the majority have suffered alteration in some form.
                 </p>
                 <a href="{{route('register')}}">

                    <button class="view-text">Become a tutor</button>

                 </a>
                    <br />
                    <br />
                    <img class="mt-0 w-50 ml-5 tutor-img-mobile" src="../assets/images/tutor-img.png">
                </div>
            </div>
        </div>
    </section>

    <!-- why tutor -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class=" text-center ">
                    <p class="Learn-texts Learn-texts-mobile font-size font-weight800">
                        Join our
                        <span class="where-texts where-texts-mobile font-size font-weight800">
                            newsletter
                        </span>
                    </p>
                    <p  class="there-text none">
                        There are many variations of passages available, but <br />
                        the majority have suffered alteration in some form.
                    </p>
                    <p  class="there-text shows mt-2">
                        There are many variations of passages available, but
                        the majority have suffered alteration in some form.
                 </p>


                </div>
            </div>
        </div>
    </div>
    <!-- why tutor end -->
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="input-section text-center">
                    <div class="input-text mt-5 input-sub">
                        <input type="text" placeholder="Enter your email" class="inputs">
                        <input type="submit" class="mobile-input inputss" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
