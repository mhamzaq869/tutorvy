@extends('tutor.layouts.app')
<style>
    .searchBtn{
        position: absolute;
    right: 23px;
    top: 10px;
}
    }
</style>
@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <p class="mr-3 mb-3 heading-first">
                Subjects
            </p>
        </div>
        <!-- no subject start -->
        <div class="container" style="margin-bottom: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="image-center-nobooking"
                        style="text-align: center;margin-top: 5px;margin-bottom: 120px;">
                        <img src="../assets/images/ico/subject-con.png" alt="subject-con" style="width: 200px;">
                        <p class="nosubject-subject">
                            No Subjects</p>
                        <P class="long-subject">
                            It is a long established fact that a
                            <br />
                            reader will be distracted by the readable content.
                        </P>
                        <br />
                        <button class="schedule-btn" style="width: 140px;" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">Add Subjects </button>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Choose Subjects</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body m-0 p-0">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="search">
                                                    <div class="form-group has-search col-md-12">
                                                        <a href="#"  class="fa fa-search form-control-feedback searchBtn"></a>
                                                        <input type="search" style=""
                                                            class="form-control " data-search
                                                            placeholder="Search">
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div data-filter-item data-filter-name="chemistry">
                                                        <div class="container-fluid ">
                                                            <div class="row mt-2 row-rap">
                                                                <div class="col-md-6">
                                                                    <p style="float: left;">
                                                                        <img src="../assets/images/ico/botal-ico.png"
                                                                            alt="botal-ico">
                                                                        Chemistry
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p style="float: right;">
                                                                        <a href="./test.html">
                                                                            <button class="schedule-btn"
                                                                                style="width: 80px;height: 43px;">
                                                                                Add
                                                                            </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-filter-item data-filter-name="chemistry">
                                                        <div class="container-fluid ">
                                                            <div class="row mt-2 row-rap">
                                                                <div class="col-md-6">
                                                                    <p style="float: left;"> <img
                                                                            src="../assets/images/ico/botal-ico.png"
                                                                            alt="botal">
                                                                        Chemistry
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p style="float: right;">
                                                                        <a href="./test.html"> <button
                                                                                class="schedule-btn"
                                                                                style="width: 80px;height: 43px;">
                                                                                Add
                                                                            </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-filter-item data-filter-name="chemistry">
                                                        <div class="container-fluid ">
                                                            <div class="row mt-2 row-rap">
                                                                <div class="col-md-6">
                                                                    <p style="float: left;">
                                                                        <img src="../assets/images/ico/botal-ico.png"
                                                                            alt="botal">
                                                                        Chemistry
                                                                </div>
                                                                </p>
                                                                <div class="col-md-6">
                                                                    <p style="float: right;">
                                                                        <a href="./test.html"> <button
                                                                                class="schedule-btn"
                                                                                style="width: 80px;height: 43px;">
                                                                                Add
                                                                            </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-filter-item data-filter-name="chemistry">
                                                        <div class="container-fluid ">
                                                            <div class="row mt-2 row-rap">
                                                                <div class="col-md-6">
                                                                    <p style="float: left;">
                                                                        <img src="../assets/images/ico/botal-ico.png"
                                                                            alt="botal">
                                                                        Chemistry
                                                                </div>
                                                                </p>
                                                                <div class="col-md-6">
                                                                    <p style="float: right;">
                                                                        <a href="./test.html"> <button
                                                                                class="schedule-btn"
                                                                                style="width: 80px;height: 43px;">
                                                                                Add
                                                                            </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-filter-item data-filter-name="chemistry">
                                                        <div class="container-fluid ">
                                                            <div class="row mt-2 row-rap">
                                                                <div class="col-md-6">
                                                                    <p style="float: left;">
                                                                        <img src="../assets/images/ico/botal-ico.png"
                                                                            alt="botal">
                                                                        Chemistry
                                                                </div>
                                                                </p>
                                                                <div class="col-md-6">
                                                                    <p style="float: right;">
                                                                        <a href="./test.html">
                                                                            <button class="schedule-btn"
                                                                                style="width: 80px;height: 43px;">
                                                                                Add
                                                                            </button>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
