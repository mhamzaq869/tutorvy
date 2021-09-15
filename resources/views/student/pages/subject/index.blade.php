@extends('student.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <p class="mr-3 mb-3 heading-first">
                Subjects</p>
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
                            data-target="#exampleModalCenter">Add Subjects</button>
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
                                                    <div class="form-group has-search">
                                                        <span class="fa fa-search form-control-feedback"></span>
                                                        <input type="search" style="width: 430px;"
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
        <!-- end -->
        <div class="line"></div>
    </div>
</section>
@endsection
