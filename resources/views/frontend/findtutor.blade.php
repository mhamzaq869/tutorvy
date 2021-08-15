@extends('layouts.app')

@section('content')

<div class="text-center    mt-5">
    <br />
    <br />
    <br />
    <br />
    <br />
    <span class="text-work text-work-top" style="line-height: 1;">
        <span class="text-how">
            Find a
        </span>
        Tutor
    </span>
    <span class="there-text shows">
        There are many variations of passages available, but
        the majority have suffered alteration in some form.
    </span>
    <span class="there-text none" style="line-height: 1.6;">
        There are many variations of passages available, but<br />
        the majority have suffered alteration in some form.
    </span>
</div>
<div class="container pb-5 mt-3">
    <div class=" row">
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-subject">
            <div class="">
                <input type="text" class="input-subject" placeholder="Choose subjects">
                <input type="text" class="input-subject" placeholder="Learning level">
                <input type="submit" class="input-submite w-25" value="Find a Tutor">
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>
<section style="background-color: #FBFCFF;padding-top: 20px;">
    <div class="container-fluid">
        <div class="row mar-left-right">
            <div class="col-md-3 bg-white-range">
                <div class="d-flex mt-3">
                    <p class="text-fliter">Filters</p>
                    <p class="ml-5 text-rest">
                        <img class="mr-2" src="../assets/images/blog/Group 5487.png" height="20px">
                        Reset
                    </p>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 bg-white-range">
                <!-- col-bg -->
                <div class="d-flex">
                    <p class="mt-3 text-sort">
                        Sort by Tutorvy rank
                    </p>
                    <img src="../assets/images/arrow-Right Circle.png" height="10px"
                        style="position: absolute;right: 20px;top: 45px;" />
                        <img src="../assets/images/Stroke-arrow.png" height="10px"
                        style="position: absolute;right: 20px;top: 25px;" />
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row mar-left-right">
            <div class="col-md-3 bg-white">
                <div class="panel panel-default mb-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseone" aria-expanded="false" aria-controls="collapseTwo">
                                Price Range
                            </a>
                        </p>
                    </div>
                    <div id="collapseone" class="panel-collapse collapse show pb-3" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">

                            <div class="row">
                                <b>
                                    <div class="col align-self-start">
                                        $10-$15
                                    </div>
                                </b>
                            </div>
                            <div class="">
                                <div class="range-slider">
                                    <input class="range-slider__range" type="range" id="range" value="100" min="0" max="500">
                                    <span class="range-slider__value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab2-->
                <div class="panel panel-default mt-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Rating
                            </a>
                        </p>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col align-self-start start-text">
                                    3 Star
                                </div>
                            </div>
                            <div class="col align-self-start mt-0 pb-3 star-size">
                                <span class="fa fa-star checked text-warning ml-4"></span>
                                <span class="fa fa-star checked text-warning ml-2"></span>
                                <span class="fa fa-star checked text-warning ml-2"></span>
                                <span class="fa fa-star checked text-warning ml-2"></span>
                                <span class="fa fa-star ml-2"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAb3-->
                <div class="panel panel-default mt-3 bottom-line">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <p class="panel-title">
                            <a class="collapsed range-text" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree" aria-expanded="false" aria-controls="collapseTree">
                                Language
                            </a>
                        </p>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md" aria-label=".form-select-md example">
                                        <option value="1">Languages</option>
                                        <option value="2">urdu</option>
                                        <option value="2">English</option>
                                        <option value="2">Arabic</option>
                                        <option value="2">Hindi</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAB4-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <p class="panel-title">
                            <a class="range-text collapsed " data-toggle="collapse" data-parent="#accordion"
                                href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Location
                            </a>
                        </p>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md" aria-label=".form-select-md example">
                                        <option value="1">Choose a location</option>
                                        <option value="2">Lahore</option>
                                        <option value="2">Karachi</option>
                                        <option value="2">Islamabad</option>
                                        <option value="2">Pakistan</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--TAb5-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <p class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                Gender
                            </a>
                        </p>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-3">
                                <div class="col align-self-start d-flex">
                                    <div class="form-check mr-3">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1"
                                                name="optradio" value="option1" checked>Male
                                        </label>
                                    </div>
                                    <div class="form-check mr-3">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input" id="radio2"
                                                name="optradio" value="option2">Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="radio3"
                                                name="optradio" value="option2">others
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--TAb6-->
                <div class="bottom-line mt-3 panel panel-default">
                    <div class="panel-heading" role="tab" id="headingsix">
                        <p class="panel-title">
                            <a class="range-text collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Availability
                            </a>
                        </p>
                    </div>
                    <div id="collapsesix" class="panel-collapse collapse show" role="tabpanel"
                        aria-labelledby="headingTree">
                        <div class="panel-body">
                            <div class="pb-4">
                                <div class="col align-self-start m-0 p-0">
                                    <select class="form-control-md" aria-label=".form-select-md example">
                                        <option value="1">Online</option>
                                        <option value="2">Offline</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mb-3">
                @foreach ($tutors as $tutor)
                <div class="container pt-4 bg-white">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row" style="line-height: 0.8;">
                                <div class="col-md-2">
                                    <div class="popover__wrapper mt-0">
                                        <a href="../Profile/profile.html">
                                            <h2 class="popover__title">
                                                <img src="../assets/images/ico/hom-profile.png" alt="home-profile">
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-3 m-0 p-0">
                                    <div class="d-flex ml-3 heading-third-name heading-third-names">
                                        <p class="heading-third">{{$tutor->fullname}}</p>
                                        <div class="ml-2">
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star checked text-warning"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="ml-2 mt-1 paragraph-text1 paragraph-text1-text">4.0</p>
                                        <p class="ml-3 mt-1 paragraph-text2">(25 review)</p>
                                    </div>
                                    <div class="row image-text ml-1">
                                        <!-- <div class="image-text"> -->
                                        <div class="col-md-1">
                                            <img class="img-mobile-view" src="../assets/images/ico/red-icon.png">
                                        </div>
                                        <div class="col-md-9 m-0 p-0">
                                            <p class="text-pro text-pro-mobile"> {{$tutor->professionals->designation ?? '---'}} at {{$tutor->professionals->organization ?? '---'}} </p>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                    <div class="row image-text ml-1">
                                        <!-- <div class=""> -->
                                        <div class="col-md-1">
                                            <img class="img-mobile-view1" src="../assets/images/ico/location-pro.png">
                                        </div>
                                        <div class="col-md-9 m-0 p-0">
                                            <p class="heading-fifth text-pro-mobile"> {{$tutor->city}}, {{$tutor->country}} </p>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                                <div class="col-md-2 mt-3">
                                    <div class="d-flex justify-content-end">
                                        <p class="rank-text mt-1">Top
                                            Rank</p>
                                        <img class="rank-image" src="../assets/images/ico/rank.png">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <p class="heading-fifth text-center"> Subjects</p>
                                    <div class="d-flex">
                                        <div class="btn-responsive">
                                            @foreach ($tutor->teach as  $subject)
                                            <button class="color-btn-std1">&nbsp; {{$subject->subjectCategory->name}} &nbsp;</button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="heading-fifth"> Language</p>
                                    <div class="d-flex">
                                        <div class="btn-responsive">
                                            <button class="color-btn-std">&nbsp; Computer &nbsp;</button>
                                            <button class="color-btn-std  ml-2">&nbsp; Math &nbsp;</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <p class="heading-fifth"> Education</p>
                                    <div class="d-flex">
                                        <div class="btn-responsive">
                                            <button class="color-btn-std3">&nbsp; Computer &nbsp;</button>
                                            <button class="color-btn-std3 ml-2">&nbsp; Math &nbsp;</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-3 heading-forth-text">About tutor</p>
                            <div class="container-fluid m-0 p-0">
                                <p class="paragraph-text1" style="opacity: 0.8;">
                                   {{$tutor->bio}}
                                </p>
                            </div>

                        </div>
                        <div class="col-md-3 pb-4 start-bg">
                            <div class="text-center mt-5">
                                <p class="paragraph-text1">starting from</p>
                                <p class="dollar-text">
                                    ${{$tutor->userdetail->hourly_rate ?? 0}}
                                </p>
                                <p class="paragraph-text1 mb-5" style="line-height: 1;">Per hour</p>
                                <button class="cencel-btn w-100 mt-5">Massge</button>
                                <button class="schedule-btn w-100 mt-3">Book class</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

</section>
<!-- end -->
<script src="{{asset('assets/js/filterajax.js')}}"></script>
@endsection
