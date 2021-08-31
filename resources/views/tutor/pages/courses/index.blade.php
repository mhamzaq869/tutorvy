@extends('tutor.layouts.app')
<style>
    .card{
        height:auto !important;
    }
    .list-inline{
        list-style:none;
        display:inline-flex;
    }
    .list-inline li{
        padding-left:3px;
        font-size:16px;
    }
    .list-inline li a{
        color: #FAAF3A;
    }
    .border-round{
        border-radius:5px;
    }
    .che-text{
        background: #FAEAE9;
        padding: 5px 13px;
    }
    .price{
        color:#1072FE;
    }

    /*Progress Bar STyle */
    .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    box-shadow: none;
    position: relative;
}
.progress {
    margin-right: auto !important;
    width: 51px !important;
    height: 51px !important;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 6px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
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
.progress.blue .progress-bar{
    border-color: #1173FF;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}
/**Progress End */

.learning-button {
    background-color: #cedef5;
    padding: 10px;
    cursor: pointer;
    border-radius: 4px;
    border: 1px #cedef5;
    color: #1173FF;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}
.no-decor:hover{
    text-decoration:none;
}
.pending_hover:hover .overlay{
    display:block;
}
.overlay{
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: rgba(127,127,127,0.4);
    border-radius: 10px;
    z-index: 2;
    text-align: center;
    display: none;
    transition: 5s all;
}
.overlay span{
    margin-top: 54%;
    padding: 10px 36px;
    border-radius: 22px;
    background: #fff;
    color: #00132D;
}
.overlay span:hover{
    margin-top: 54%;
    padding: 10px 36px;
    border-radius: 22px;
    background: #fff;
    color: #00132D;
}
.leftSeat{
    position:absolute;
    top: 51px;
}
.course_thumb{
    max-width: 100%;
    height: 176px;
}
</style>
@section('content')
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">
<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <!--section start  -->
        <div class="container-fluid ">
            <div class="row">
                    <div class="col-md-12">
                            <p class="mr-3 heading-first">
                                < Courses
                            </p>
                    </div>
                </div>
            <div class=" profile-header">
                @if ($pen_course->count() != 0)
                <div class="row">
                    <div class="col-md-12">
                        <h2>Pending Courses</h2>
                    </div>
                    @foreach ($pen_course as $course)
                        <div class="col-md-3 pending_hover">
                            <div class="card">
                                <div class="overlay">
                                    <span class="border-round btn">Approval Pending</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            @if ($course->thumbnail)
                                            <img src="{{asset($course->thumbnail)}}" class="border-round course_thumb" alt="Avatar"  >
                                            @else
                                            <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar"  >
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-9">
                                            <span class="che-text border-round">
                                                {{$course->subject->name}}
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="price">${{$course->basic_price}}</h2>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h5>{{$course->title}}</h5>
                                            <hr>
                                        </div>
                                        <div class="col-md-8">
                                            <p class="mt-2">Next batch is starting from {{date('d M, Y', strtotime($course->basic_start_time))}}</p>
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
                                            <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                @endif

                @if ($rej_course->count() != 0)
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h2>Rejected Courses</h2>
                    </div>
                    @foreach ($rej_course as $course)
                    <div class="col-md-3 pending_hover">
                        <div class="card">
                            <div class="overlay">
                                <span class="border-round btn">Rejected Course</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        @if ($course->thumbnail)
                                        <img src="{{asset($course->thumbnail)}}" class="border-round course_thumb" alt="Avatar"  >
                                        @else
                                        <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar"  >
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-md-9">
                                        <span class="che-text border-round">
                                            {{$course->subject->name}}
                                        </span>
                                    </div>
                                    <div class="col-md-3">
                                        <h2 class="price">${{$course->basic_price}}</h2>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h5>{{$course->title}}</h5>
                                        <hr>
                                    </div>
                                    <div class="col-md-8">
                                    <p class="mt-2">Next batch is starting from {{date('d M, Y', strtotime($course->basic_start_time))}}</p>
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
                                        <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                @endif


                <div class="row mt-3">
                    <div class="col-md-12">
                        <h2>My Courses</h2>
                    </div>
                    @foreach ($app_course as $course)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        @if ($course->thumbnail)
                                        <img src="{{asset($course->thumbnail)}}" class="border-round course_thumb" alt="Avatar" >
                                        @else
                                        <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-9">
                                        <span class="che-text border-round">
                                            {{$course->subject->name}}
                                        </span>
                                    </div>
                                    <div class="col-md-3">
                                        <h2 class="price">${{$course->basic_price}}</h2>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h6>{{$course->title}}</h6>
                                        <hr>
                                    </div>
                                    <div class="col-md-8">
                                    <p class="mt-2">Next batch is starting from {{date('d M, Y', strtotime($course->basic_start_time))}}</p>
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
                                        <a href="{{ route('tutor.course.edit',[$course->id]) }}" class="no-decor">
                                            Edit Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-3 text-center">
                        <div class="card border-only" >
                            <div class="card-body ">
                                <div class="add-new" style="margin-top:40%;margin-bottom: 40%;">
                                    <a href="{{route('tutor.addcourse')}}">
                                        <img src="{{asset('assets/images/ico/add-new.png')}}" alt="add-new">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    </div>
</section>

    


@endsection
