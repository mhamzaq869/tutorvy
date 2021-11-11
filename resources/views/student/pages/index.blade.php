@extends('student.layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<style>
</style>
  <!-- top Fixed navbar End -->
  <div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="container-fluid m-0 p-0">

            <div class="row ">
                <div class="col-md-12">
                    <p class="heading-first ml-3 mr-3">Dashboard    </p>

                </div>
            </div>
            <div class="row ml-2 mr-2">
                <div class="col-md-8">
                    <div class="row infoCard">
                        <div class="col-md-12 mb-3 ">
                            <div class=" card mt-0 bg-toast ">
                                <div class="card-body row">
                                    <div class="col-md-1 text-center">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-11 pl-0">
                                        <small>
                                            Dashboard have all the stats of your need including class details, upcoming classes, earning stats <a href="#">Learn More</a>
                                        </small>
                                        <a href="#" class="cross"  onclick="hideCard()"> 
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="card mt-0">
                                <div class="card-body">
                                    
                                    <p class="mb-2 ">Profile Strength: <strong class="text-success">
                                        @php 
                                            $default = 10;
                                            $default = Auth::user()->profile_completed == 1 ? ($default + 40) :  $default;
                                            $default = Auth::user()->picture != null ? ($default + 20) : $default;
                                            $default = $education_profile > 0 ? ($default + 30) : $default;
                                            echo $default .'%';
                                        @endphp         
                                    </strong>
                                    <small class="pull-right"><a href="{{route('student.profile')}}"> View Profile </a></small>
                                </p>
                                    <div class="progress">
                                        <div class="bg-dead bg-levelTwo" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="bg-dead {{$default >= 30  ? 'bg-levelThree' : ''}} ml-1" role="progressbar" style="width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="bg-dead {{$default >= 30  ? 'bg-levelThree' : ''}} ml-1" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="bg-dead {{$default >= 60 ? 'bg-levelFour' : '' }} ml-1" role="progressbar" style="width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="bg-dead {{$default >= 80 ? 'bg-levelFive' : ''}} ml-1" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="bg-dead {{$default > 90 ? 'bg-levelFive' : ''}} ml-1" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-mute mt-1 mb-0"> <i class="fa fa-check text-success"></i> Tutors with complete profile tends to have more students than the other tutors.</p>
                                    <p class="text-mute mb-0"> <i class="fa fa-check text-success"></i> Tutors with complete profile get verified sooner than others.</p>
                                    <p class="text-mute mb-0"> <i class="fa fa-check text-success"></i> Complete profile helps a tutor to earn more.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    @if($default > 90) 
                        <div class="bg-homeimage2 ">
                            <div class="row">
                                <div class="col-md-7 text-white pl-4">
                                    <div class="text mt-5 ml-2 ">
                                        <h2 class="text-white ">
                                            We have upgraded the classroom.
                                        </h2>
                                        <p >
                                            Register yourself on Tutorvy and learn or teach anything from
                                            anywhere.
                                        </p>
                                        <a href=""class="text-white ">
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
                    @else
                        <div class="bg-homeimage1">
                            <div class="row">
                                <div class="col-md-7 text-white pl-4">
                                    <div class="text mt-5 ml-2">
                                        <p class="res-textup">
                                            Welcome to Tutorvy
                                        </p>
                                        <p class="res-textup1">
                                        Register yourself on Tutorvy and learn or teach anything
                                        from anywhere.
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
                    @endif

                


                    <div class="row">
                        <div class="col-md-12">
                            <p class="heading-third mt-4 mb-0">
                                Statistics
                            </p>
                        </div>
                        <div class="col-md-12 stats">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="{{route('student.classroom')}}">
                                        <div class="container-fluid card 1">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{$delivered_count}}
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
                                    </a>
                                    
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('student.classroom')}}">
                                        <div class="container-fluid card 1">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{$upcoming_count}}
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
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('student.bookings')}}">
                                        <div class="container-fluid card 1">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{$pending_count}}
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
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('student.bookings')}}">
                                        <div class="container-fluid card 1">
                                            <div class="text-home">
                                                <p class="number-booking">
                                                    {{$subject_count}}
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
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="heading-third pt-4 mb-3">
                                        Favourite Tutors</p>
                                </div>
                                    @if($favorite_tutors != "[]")
                                        <div class="col-md-12 scrollable h-666" id="Fav_tutor">
                                            @foreach($favorite_tutors as $tutor)
                                                <div class="card">
                                                    <div class="card-body">
                                                        
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="row">
                                                                    <div class="col-md-10">
                                                                        <div class="row">
                                                                            
                                                                            <div class="col-md-2 col-6 pr-0 div-center">
                                                                                <a href="{{route('student.tutor.show',[$tutor->id])}}">
                                                                                    @if($tutor->picture != null)
                                                                                        <img src="{{asset($tutor->picture)}}" alt="" class="profile-img  " style="height:63px;width:63px;">
                                                                                    @else
                                                                                        <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img  " style="height:63px;width:63px;">
                                                                                    @endif                                                        
                                                                                </a>
                                                                            
                                                                            </div>
                                                                            <div class="col-md-4 col-6">
                                                                                <a href="{{route('student.tutor.show',[$tutor->id])}}" class="decoration-none">
                                                                                    <h3 class="mb-0">{{$tutor->first_name}} {{$tutor->last_name}}</h3>
                                                                                </a>
                                                                                <p class="mb-0">
                                                                                    <small>
                                                                                        <img src="../assets/images/ico/red-icon.png" alt="" class="">  {{$tutor->designation ?? '---'}}
                                                                                    </small>
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    <small>
                                                                                        <img src="../assets/images/ico/location-pro.png" alt="" class="">{{ $tutor->city != NULL ? $tutor->city.' , ' : '---' }} {{ $tutor->country != NULL ? $tutor->country: '---' }}
                                                                                    </small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <p class="mb-0">
                                                                                    @if($tutor->rating == 1)
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i> 1.0
                                                                                    @elseif($tutor->rating == 2)
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>  2.0
                                                                                    @elseif($tutor->rating == 3)
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>  3.0
                                                                                    @elseif($tutor->rating == 4)
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star "></i>4.0
                                                                                    @elseif($tutor->rating == 5)
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>
                                                                                    <i class="fa fa-star text-yellow"></i>  5.0
                                                                                    @else
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>
                                                                                    <i class="fa fa-star "></i>  0.0
                                                                                    @endif
                                                                                
                                                                                    <small class="text-grey">(0 reviews)</small>
                                                                                </p>
                                                                                <p>
                                                                                    <small>
                                                                                         3 hours tutoring in (this subject) 
                                                                                    </small>
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
<<<<<<< HEAD
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
            <div class="chatbox-holder" style="display: none;">
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
=======
                                                                    <div class="col-md-2">
                                                                        @if($tutor->rank == 1)
                                                                            <p class="text-right"><span class="text-green ">New</span> <span class="rank_icon"><img src="../assets/images/ico/bluebadge.png" alt=""></span> </p>
                                                                        @elseif($tutor->rank == 2)
                                                                            <p class="text-right"><span class="text-green ">Emerging</span> <span class="rank_icon"><img src="../assets/images/ico/yellow-rank.png" alt=""></span> </p>
                                                                        @elseif($tutor->rank == 3)
                                                                            <p class="text-right"><span class="text-green ">Top Rank</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                                                        @endif
                                                                    

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-md-4">
                                                                        @php

                                                                            $sub = explode(',',$tutor->subject_names);
                                                                            $ter = sizeof($sub);
                                                                        @endphp
                                                                        <p class="mb-2">Subject</p>
                                                                        <p>
                                                                            @for ($i=0 ; $i < 1; $i++)
                                                                            <span class="info-1 info">{{$sub[$i]}}</span>
                                                                                
                                                                                @if($ter > 1)
                                                                                <small>
                                                                                    <a href="#" class="text-dark decoration-none"> 
                                                                                        @php
                                                                                                $one = 1;
                                                                                                $check = $ter - $one;
                                                                                        @endphp
                                                                                        +{{$check}} Others
                                                                                    </a>
                                                                                </small>
                                                                                @endif
                                                                             @endfor
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p class="mb-2">Languages</p>
                                                                        <p>
                                                                            <span class="info-1 info lingo">{{$tutor->lang_short ?? ''}}</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                    <p class="mb-2">Education</p>
                                                                        @php
                                                                            $inst = explode(',',$tutor->insti_names);
                                                                        @endphp
                                                                        <p>
                                                                        @for ($i=0 ; $i < sizeof($inst); $i++)
                                                                        <span class="info-1 info edu">{{$inst[$i]}}</span>
                                                                        @endfor
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 find_tutor">
                                                                        <p><strong> About Tutor </strong></p>
                                                                        <p class="">
                                                                            {{Str::limit($tutor->bio, 100, $end='')}}
                                                                            @if(strlen($tutor->bio) > 100)
                                                                                <a href="{{route('student.tutor.show',[$tutor->id])}}">Read more...</a>
                                                                            @endif
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 bg-price text-center">
                                                                <div class="row mt-30">
                                                                    
                                                                        <a type="button" onclick="favourite_tutor({{$tutor->id}},'un_fav')" class="fav" title="Favourite">
                                                                            <i class="fa fa-star text-yellow" id="favorite_start_{{$tutor->id}}"></i>
                                                                        </a>
                                                                    <div class="col-md-12">
                                                                        
                                                                        <p>starting from</p>
                                                                        <h1 class="f-60">${{$tutor->hourly_rate}}</h1>
                                                                        <p>per hour</p>
                                                                        <button type="button" class=" cencel-btn w-100">
                                                                                &nbsp; Message &nbsp;
                                                                            </button>
                                                                        <button type="button" onclick="location.href = '{{route('student.book-now',[$tutor->id])}}';" class=" btn-general w-100 mt-2 p-2" >
                                                                                &nbsp; Book Class &nbsp;
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="col-md-12">
                                            <div class="card mt-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            No Favourite Tutor Added Yet
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                
                            </div>
                        </div>
                
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="row ">
                        <!-- <div class="col-md-12 mb-3">
                            <div class="card mt-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if($user->picture)
                                                <img src="{{asset ($user->picture)}}" alt=""  class="db_img">
                                            @else
                                                <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="db_img">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <p class="mb-0"><strong>{{$user->first_name}} {{$user->last_name}}</strong></p>
                                            <p class="text-mute mb-0">Student ID# 548{{$user->id}}09 </p>
                                            <label class="text-mute">Profile Completion</label>
                                            <div class="progress">
                                                
                                                <div class="progress-bar bg-tutorvy progress-bar-striped progress-bar-animated" role="progressbar"  style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                            <a href="{{route('student.profile')}}" class="pull-right"><small>Complete Profile</small> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="card mt-0">
                                <div class="card-body">

                                    <div class="row mt-2">
                                        <div class="col-md-8">
                                                <p class="heading-forth">
                                                    Today Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{route('student.bookings')}}" class="view-bookings">
                                                View all 
                                            </a>
                                        </div>
                                    </div>
                                        @if($today_bookings != "[]")
                                            @foreach($today_bookings as $booking)
                                                <a href="{{route('student.bookings')}}" class="decoration-none">
                                                    <div class="row mt-2 bg-bookings">
                                                        <div class="col-md-3 text-center div-center">
                                                            @if($booking->tutor->picture)
                                                                    <img src="{{asset ($booking->tutor->picture)}}" alt=""  class="profile-img book_dash">
                                                            @else
                                                                <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img book_dash">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-9 pl-0">
                                                            <p class="  mb-1 chemistry-tex1">
                                                            {{$booking->subject->name}}
                                                            </p>
                                                            <p class=" mb-0 chemistry-tex1">
                                                                Class: {{$booking->topic}}

                                                            </p>
                                                            <p class="chemistry-tex2 pt-2 pb-2 mb-0">
                                                                {{ \Illuminate\Support\Str::limit($booking->brief, $limit = 50, $end = '...') }}
                                                            </p>
                                                            <p class="time-chemistry mb-0">
                                                                <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class=" "> 
                                                                <span class="pt-1 pl-1">  {{date("g:i a", strtotime("$booking->class_time UTC"))}} - {{$booking->class_date }} </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @else
                                            
                                        <div class="text-center" style="min-height:113px;">
                                            <img src="{{asset('assets/images/ico/clander.png')}}" alt="" style="width:33%;"> 
                                            <p class="mb-5"> No Bookings for Today</p>

                                        </div>
                                        @endif
                                    <div class="row mt-2">
                                        <div class="col-md-9">
                                                <p class="heading-forth">
                                                    Upcoming Bookings
                                                </p>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{route('student.bookings')}}" class="view-bookings">
                                                View all
                                            </a>
                                        </div>
                                    </div>
                                    @if($upcoming_bookings != "[]")
                                            @foreach($upcoming_bookings as $booking)

                                                <a href="{{route('student.bookings')}}" class="decoration-none">
                                                    <div class="row mt-2 bg-bookings">
                                                        <div class="col-md-3 text-center div-center">
                                                            @if($booking->tutor->picture)
                                                                    <img src="{{asset ($booking->tutor->picture)}}" alt=""  class="profile-img book_dash">
                                                            @else
                                                                <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img book_dash">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-9 pl-0">
                                                            <p class="  mb-1 chemistry-tex1">
                                                            {{$booking->subject->name}}
                                                            </p>
                                                            <p class=" mb-0 chemistry-tex1">
                                                                Class: {{$booking->topic}}

                                                            </p>
                                                            <p class="chemistry-tex2 pt-2 pb-2 mb-0">
                                                                {{ \Illuminate\Support\Str::limit($booking->brief, $limit = 50, $end = '...') }}
                                                            </p>
                                                            <p class="time-chemistry mb-0">
                                                                <img src="{{asset('assets/images/ico/watch-icon.png') }}" alt="watch" class=" "> 
                                                                <span class="pt-1 pl-1">  {{date("g:i a", strtotime("$booking->class_time UTC"))}} - {{$booking->class_date }} </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @else
                                        <div class="text-center" style="min-height:113px;">
                                            <img src="{{asset('assets/images/ico/clander.png')}}" alt="" style="width:33%;"> 
                                            <p class="mb-5"> No Upcoming Bookings found</p>

                                        </div>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12  ">
                            <!-- <div class="card">
                                <div class="card-body"> -->
                                    <div class="card bg-ad">
                                        <div class="card-body">
                                            <div>
                                                <a href="{{route('student.bookings')}}">
                                                        <img src="{{asset('assets/images/ico/playStore.png')}}" class="w-45" alt="">
                                                </a>
                                            </div>
                                            <div class="mt-2">
                                                <a href="">
                                                        <img src="{{asset('assets/images/ico/appStore.png')}}" class="w-45" alt="">
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                
                                <!-- </div>
                            </div> -->
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
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
</div>
<<<<<<< HEAD

@endsection
=======
<script>
 
</script>
@endsection
@section('scripts')
@include('js_files.student.dashboardJS')
@endsection
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
