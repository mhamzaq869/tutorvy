@extends('tutor.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <p class="mr-3 mb-3 heading-first">
                Subjects
            </p>
        </div>

        @if(Auth::user()->teach)
            <div class="content" style="width: 100%;background-color: #FBFBFB !important;">

                <div class="container">
                    <!-- subject card -->
                    <div class="container-fluid">
                        <p class="heading-third mt-5">My Subjects</p>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="cards container-fluid">
                                    <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                        class="mt-3">
                                    <img src="../assets/images/ico/3dot.png" alt="botal" style="width: 25px;float: right;"
                                        class="mt-3">
                                    <div class="">
                                        <p class="heading-forth " style="margin-top: 35px;">Chemistry</p>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="cards container-fluid">
                                    <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                        class="mt-3">
                                    <img src="../assets/images/ico/3dot.png" alt="botal" style="width: 25px;float: right;"
                                        class="mt-3">
                                    <div class="">
                                        <p class="heading-forth" style="margin-top: 35px;">Physics</p>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Cards -->
                    <div class="container-fluid">
                        <p class="heading-first mt-3 ">Add subjects</p>
                        <div class="row">

                            <input class="ml-3 mr-3 form-control w-25 mb-4 " type="search" placeholder="Type a name"
                                aria-label="Search" id="search">
                            <div class="card-deck ml-1 mr-1" style="width: 100%;">
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                chemistry</h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">Chemistry</p>
                                                <p class="view-bookings " style="margin-top: 30px;">Add</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                chemistry</h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">Chemistry</p>
                                                <p class="view-bookings " style="margin-top: 30px;">Add</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class="cards card-shadow ">
                                        <div class="card-body">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                Math</h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">Math</p>
                                                <p class="view-bookings " style="margin-top: 30px;">Add</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                English</h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">English</p>
                                                <p class="view-bookings " style="margin-top: 30px;">Add</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                chemistry</h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">Chemistry</p>
                                                <p class="view-bookings " style="margin-top: 30px;">Add</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                chemistry
                                            </h4>
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;">
                                            <img src="../assets/images/ico/3dot.png" alt="botal"
                                                style="width: 25px;float: right;">
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">
                                                    Chemistry
                                                </p>
                                                <p class="view-bookings " style="margin-top: 30px;">
                                                    Add
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

        @else
            <!-- no subject start -->
            @include('tutor.pages.general.nosubject')
            <!-- end -->
        @endif
        <div class="line"></div>
    </div>
</section>
@endsection
