@extends('layouts.app')

@section('content')
    <style>
        /*Progress Bar STyle */
        .leftSeat p {
            font-size: 14px;
        }

        .progress {
            width: 150px;
            height: 150px;
            line-height: 150px;
            background: none;
            box-shadow: none;
            position: relative;
        }

        .progress {
            margin-left: 9px;
            width: 51px !important;
            height: 51px !important;
        }

        .progress:after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 12px solid #fff;
            position: absolute;
            top: 0;
            left: 0;
        }

        .progress>span {
            width: 50%;
            height: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 1;
        }

        .progress .progress-left {
            left: 0;
        }

        .progress .progress-bar {
            width: 100%;
            height: 100%;
            background: none;
            border-width: 6px;
            border-style: solid;
            position: absolute;
            top: 0;
        }

        .progress .progress-left .progress-bar {
            left: 100%;
            border-top-right-radius: 80px;
            border-bottom-right-radius: 80px;
            border-left: 0;
            -webkit-transform-origin: center left;
            transform-origin: center left;
        }

        .progress .progress-right {
            right: 0;
        }

        .progress .progress-right .progress-bar {
            left: -100%;
            border-top-left-radius: 80px;
            border-bottom-left-radius: 80px;
            border-right: 0;
            -webkit-transform-origin: center right;
            transform-origin: center right;
            animation: loading-1 1.8s linear forwards;
        }

        .progress .progress-value {
            width: 90%;
            height: 90%;
            border-radius: 50%;
            background: transparent;
            font-size: 19px;
            color: #00132D;
            line-height: 45px;
            text-align: center;
            position: absolute;
            top: 5%;
            left: 5%;
        }

        .progress.blue .progress-bar {
            border-color: #1173FF;
        }

        .progress.blue .progress-left .progress-bar {
            animation: loading-2 1.5s linear forwards 1.8s;
        }

        .progress.yellow .progress-bar {
            border-color: #fdba04;
        }

        .progress.yellow .progress-left .progress-bar {
            animation: loading-3 1s linear forwards 1.8s;
        }

        .progress.pink .progress-bar {
            border-color: #ed687c;
        }

        .progress.pink .progress-left .progress-bar {
            animation: loading-4 0.4s linear forwards 1.8s;
        }

        .progress.green .progress-bar {
            border-color: #1abc9c;
        }

        .progress.green .progress-left .progress-bar {
            animation: loading-5 1.2s linear forwards 1.8s;
        }

        @keyframes loading-1 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
        }

        @keyframes loading-2 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(144deg);
                transform: rotate(144deg);
            }
        }

        @keyframes loading-3 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
        }

        @keyframes loading-4 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(36deg);
                transform: rotate(36deg);
            }
        }

        @keyframes loading-5 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(126deg);
                transform: rotate(126deg);
            }
        }

        @media only screen and (max-width: 990px) {
            .progress {
                margin-bottom: 20px;
            }
        }

        /**Progress End */
        .course_thumb {
            max-width: 100%;
            height: 165px;
            border-radius: 9px;
        }

        .bdl {
            border-top-right-radius: 95px;
            border-top-left-radius: 95px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .inv_bdl {
            border-bottom-right-radius: 95px;
            border-bottom-left-radius: 95px;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .inv_bdl p {
            opacity: 0;

        }

    </style>
    <section class="section-main section-main-std mt-5 pb-5">
        <div class="container-fluid mt-5">
            <br><br>
            <div class="row " data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-12 text-center    mt-5">
                    <span class="text-work text-work-top" style="line-height: 1;">
                        <p class="text-how">
                            Find what
                        </p>
                        Fascinates You
                    </span>
                    <p class="there-text none mt-4">
                        There are many variations of passages available, but <br />
                        the majority have suffered alteration in some form.
                    </p>
                    <p class="there-text shows mt-2">
                        There are many variations of passages available, but
                        the majority.
                    </p>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 bg-subject">
                    <div class="mobile-input row" style="justify-content:center;">
                        <div class="col-md-4 col-sm-8 col-8">
                            <select name="" id="" class="input-subject w-100">
                                <option value="#">Select Subjects</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-4 col-sm-4">
                            <input type="submit" class="input-submite w-100" value="Find a course">

                        </div>
                        <!-- <input type="text" class="input-subject" placeholder="Choose subjects"> -->

                    </div>

                </div>
                <div class="col-md-2"></div>
            </div>
            <div class=" row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 bg-subject bdl">
                    <p class="text-how text-center mb-0">All Courses</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row row-none-mp ml-5 mr-5 mb-5 mt-1">
                @if($courses)
                    @foreach ($courses as $course)
                        @if($course->status == 1)
                            <div class="col-md-3 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                @if ($course->thumbnail == '' || $course->thumbnail == null)
                                                    <img src="{{ asset('assets/images/ico/Square-white.jpg') }}"
                                                        class="border-round course_thumb" alt="Avatar">
                                                @else
                                                    <img src="{{ $course->thumbnail }}" class="border-round course_thumb"
                                                        alt="Avatar">

                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-8">
                                                <span class="paid-button">
                                                    {{ $course->subject_name }}
                                                </span>
                                            </div>
                                            <div class="col-md-4">
                                                <h2 class="dolar-text text-right">${{ $course->basic_price }}</h2>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <h6 class="create-text mt-1">{{ $course->title }}</h6>
                                                <hr>
                                            </div>
                                            <div class="col-md-8">
                                                <p class="mt-2">Next batch is starting from
                                                    {{ date('d M, Y', strtotime($course->start_date)) }}</p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <div class="progress blue">
                                                    <span class="progress-left">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar"></span>
                                                    </span>
                                                    <div class="progress-value">
                                                        <span>{{$course->seats}}</span>

                                                    </div>
                                                </div>
                                                <span class="leftSeat text-center">
                                                    <p>Seats Left</p>
                                                </span>
                                            </div>
                                            <div class="col-md-12 text-center learning-button mt-4">
                                                <a href="{{route('course.enroll',[$course->id])}}" class="no-decor">
                                                    Enroll Course
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                <div class="col-md-12 text-center">
                    <button class="btn-general p-3 pl-5 pr-5">
                        Load More
                    </button>
                </div>
                @else
                    <div class="col-md-3 mb-5">
                        <div class="card">
                            <div class="card-body">
                                No Courses added yet
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class=" row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 bg-subject bdl">
                    <p class="text-how text-center mb-0">Featured Courses</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row row-none-mp ml-5 mr-5">
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('assets/images/NoPath.png') }}" class="border-round course_thumb"
                                        alt="Avatar">

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <span class="paid-button">
                                        Subject Name
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="dolar-text text-right">$23</h2>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12">
                                    <h6 class="create-text mt-1">Title</h6>
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <p class="mt-2">Next batch is starting from 25 April,2016</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="progress blue">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <span>5</span>

                                        </div>
                                    </div>
                                    <span class="leftSeat text-center">
                                        <p>Seats Left</p>
                                    </span>
                                </div>
                                <div class="col-md-12 text-center learning-button mt-4">
                                    <a href="#" class="no-decor">
                                        Start Course
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('assets/images/NoPath.png') }}" class="border-round course_thumb"
                                        alt="Avatar">

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <span class="paid-button">
                                        Subject Name
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="dolar-text text-right">$23</h2>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12">
                                    <h6 class="create-text mt-1">Title</h6>
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <p class="mt-2">Next batch is starting from 25 April,2016</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="progress blue">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <span>5</span>

                                        </div>
                                    </div>
                                    <span class="leftSeat text-center">
                                        <p>Seats Left</p>
                                    </span>
                                </div>
                                <div class="col-md-12 text-center learning-button mt-4">
                                    <a href="#" class="no-decor">
                                        Start Course
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('assets/images/NoPath.png') }}" class="border-round course_thumb"
                                        alt="Avatar">

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <span class="paid-button">
                                        Subject Name
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="dolar-text text-right">$23</h2>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12">
                                    <h6 class="create-text mt-1">Title</h6>
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <p class="mt-2">Next batch is starting from 25 April,2016</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="progress blue">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <span>5</span>

                                        </div>
                                    </div>
                                    <span class="leftSeat text-center">
                                        <p>Seats Left</p>
                                    </span>
                                </div>
                                <div class="col-md-12 text-center learning-button mt-4">
                                    <a href="#" class="no-decor">
                                        Start Course
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 bg-subject inv_bdl">
                    <p class="text-how text-center ">All Courses</p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class=" text-center ">
                        <p class="text-how">
                            Join our
                            <span class="text-work">
                                newsletter
                            </span>
                        </p>
                        <p class="there-text none">
                            There are many variations of passages available, but <br />
                            the majority have suffered alteration in some form.
                        </p>
                        <p class="there-text shows mt-2">
                            There are many variations of passages available, but
                            the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
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
    </section>

@endsection
