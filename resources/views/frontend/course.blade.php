@extends('layouts.app')

@section('content')
<style>
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
    margin-left: 19px;
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
.course_thumb{
    max-width: 100%;
    height: 165px;
    border-radius:9px;
}
</style>
<section class="mt-5">
    <div class="text-center mt-5">
        <span class="text-work" style="line-height: 0.8;">
            <p class="text-how">
                Find What

            </p>
            Fascinates You
        </span>
        <br />
        <p class="there-text none mt-4">
            There are many variations of passages available, but <br />
            the majority have suffered alteration in some form.
        </p>
        <p class="there-text shows mt-2">
            There are many variations of passages available, but
            the majority.
        </p>
    </div>
    <div class="container-fluid pb-5">
        <div class=" row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-12 bg-subject">
                <div class="mobile-input row" style="justify-content:center;">
                    <div class="col-md-4">
                        <select name="" id="" class="input-subject w-100">
                            <option value="#">Select Subjects</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="input-submite w-100" value="Find a course">

                    </div>
                    <!-- <input type="text" class="input-subject" placeholder="Choose subjects"> -->
                    
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-none-mp ml-5 mr-5">

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('assets/images/NoPath.png')}}" class="border-round course_thumb" alt="Avatar" >
                               
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <span class="paid-button">
                                    Subject Name
                                </span>
                            </div>
                            <div class="col-md-3">
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
                                    Edit Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid mt-5 none">
        <p class="text-how text-center">Featured courses</p>
        <div class=""
            style="background-color: #F2F8FF;width: 80%;position: absolute;height: 600px;left: 10%;border-radius: 8px;">
        </div>
        <div class="row ml-5 mr-5 mt-5 row-none-mp">

            <div class="col-md-3 mb-5 bg-white pb-3 rounded">
                <div class="img-blog1">
                    <img src="../assets/images/NoPath.png" alt="blog1" class="w-100">

                    <div class="container-fluid m-0 p-0 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <button class="paid-button">Chemistry</button>
                            </div>
                            <div class="col-md-6 col-6 mt-1">
                                <div class="dolar-text text-right">
                                    $99
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid m-0 p-0">
                        <div class="mt-3">
                            <p class="create-text mt-3">
                                How to create your online
                                <br /> courses in 3 steps.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p class="there-text-1">
                                        Next batch is starting <br /> from
                                        25 April, 2021
                                    </p>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div id="wrappers">
                                        <div id="demo">
                                            <div class="circlechart" data-percentage="55">Seats left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 learning-button mt-3">Start learning</button>
                </div>
            </div>
            <div class="col-md-3 mb-5 bg-white pb-3 rounded">
                <div class="img-blog1">
                    <img src="../assets/images/NoPath.png" alt="blog1" class="w-100">

                    <div class="container-fluid m-0 p-0 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <button class="paid-button">Chemistry</button>
                            </div>
                            <div class="col-md-6 col-6 mt-1">
                                <div class="dolar-text text-right">
                                    $99
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid m-0 p-0">
                        <div class="mt-3">
                            <p class="create-text mt-3">
                                How to create your online
                                <br /> courses in 3 steps.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p class="there-text-1">
                                        Next batch is starting <br /> from
                                        25 April, 2021
                                    </p>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div id="wrappers">
                                        <div id="demo">
                                            <div class="circlechart" data-percentage="55">Seats left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 learning-button mt-3">Start learning</button>
                </div>
            </div>
            <div class="col-md-3 mb-5 bg-white pb-3 rounded">
                <div class="img-blog1">
                    <img src="../assets/images/NoPath.png" alt="blog1" class="w-100">

                    <div class="container-fluid m-0 p-0 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <button class="paid-button">Chemistry</button>
                            </div>
                            <div class="col-md-6 col-6 mt-1">
                                <div class="dolar-text text-right">
                                    $99
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid m-0 p-0">
                        <div class="mt-3">
                            <p class="create-text mt-3">
                                How to create your online
                                <br /> courses in 3 steps.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p class="there-text-1">
                                        Next batch is starting <br /> from
                                        25 April, 2021
                                    </p>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div id="wrappers">
                                        <div id="demo">
                                            <div class="circlechart" data-percentage="55">Seats left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 learning-button mt-3">Start learning</button>
                </div>
            </div>
            <div class="col-md-3 mb-5 bg-white pb-3 rounded">
                <div class="img-blog1">
                    <img src="../assets/images/NoPath.png" alt="blog1" class="w-100">

                    <div class="container-fluid m-0 p-0 mt-3">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <button class="paid-button">Chemistry</button>
                            </div>
                            <div class="col-md-6 col-6 mt-1">
                                <div class="dolar-text text-right">
                                    $99
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid m-0 p-0">
                        <div class="mt-3">
                            <p class="create-text mt-3">
                                How to create your online
                                <br /> courses in 3 steps.
                            </p>
                            <hr />
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p class="there-text-1">
                                        Next batch is starting <br /> from
                                        25 April, 2021
                                    </p>
                                </div>
                                <div class="col-md-3 col-3">
                                    <div id="wrappers">
                                        <div id="demo">
                                            <div class="circlechart" data-percentage="55">Seats left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 learning-button mt-3">Start learning</button>
                </div>
            </div>

        </div>

    </div>
    <!-- why tutor -->
    <div class="container tc-m">
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
    <!-- why tutor end -->

</section>

@endsection
