@extends('tutor.layouts.app')

@section('content')
    <div class="container">
        <p class="heading-first ml-3 mr-3">
            Profile
        </p>
        <div class="row">
            <div class="col-md-3">
                <div class="container-fluid pb-3 profile-header">
                    <div class="img-profile text-center pt-3">
                        <span style="position: absolute;right: 25px;">
                            <img src="../assets/images/ico/yellow-rank.png" alt="yellow">
                        </span>
                        <img src="../assets/images/ico/porfile-main.png" alt="profile-image" class="w-50">
                        <p class="heading-third mt-3">
                            Danish jaffery
                        </p>
                        <p class="profile-tutor mt-0" style="line-height: 0;">
                            Tutor
                        </p>
                        <button class="schedule-btn w-100 mt-3">
                            Book class
                        </button>
                        <button class="cencel-btn w-100 mt-3">
                            Send massage
                        </button>
                        <div class="star-icos">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="perfile-text ml-1">4.0</span>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            <p class="paragraph-text" style="line-height: 0;">
                                Physics, Chemistry
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            <p class="paragraph-text" style="line-height: 0;">
                                Physics, Chemistry
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            <p class="paragraph-text" style="line-height: 0;">
                                Physics, Chemistry
                            </p>
                        </div>
                    </div>

                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <p class="heading-forth">
                        Education
                    </p>
                    <div style="border-bottom: 1px solid #D6DBE2;"></div>
                    <p class="profile-tutor mt-3 ">
                        BSC Chemistry 2014
                    </p>
                    <p class="paragraph-text pt-0" style="line-height: 0;">
                        University of Punjab Lahore
                    </p>
                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <p class="heading-forth">
                        Experience
                    </p>
                    <div style="border-bottom: 1px solid #D6DBE2;"></div>
                    <p class="profile-tutor mt-3 ">
                        BSC Chemistry 2014
                    </p>
                    <p class="paragraph-text pt-0" style="line-height: 0;">
                        University of Punjab Lahore
                    </p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container profile-header pt-4 pb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="../assets/images/ico/blue-icos.png" alt="blue">
                                </div>
                                <span class="heading-third ml-3">
                                    16 <br />
                                    <span class="heading-sixths">Total classes</span>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex">
                                <div class="">
                                    <img src="../assets/images/ico/blue-clock.png" alt="blue-clock">
                                </div>
                                <span class="heading-third ml-3">
                                    50$ <br />
                                    <span class="heading-sixths">Per hour rate</span>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex  ">
                                <div class="">
                                    <img src="../assets/images/ico/red-clock.png" alt="red">
                                </div>
                                <span class="heading-third ml-3">
                                    9am-5pm <br />
                                    <span class="heading-sixths ml-1">Availability</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex">
                                <div class="">
                                    <img src="../assets/images/ico/blue-icos.png" alt="blue+">
                                </div>
                                <span class="heading-third ml-3">
                                    100% <br />
                                    <span class="heading-sixths">Response time</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-3 pt-4 pb-4 profile-header">
                    <div class="row">
                        <p class="heading-second ml-3 ">About tutor</p>
                        <span class="about-text ml-3">
                            It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at
                            its lyout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed
                            to using 'Content here, content ere', making it look like readable English. Many
                            desktop publishing packages and
                            web page editors now use Lorem Ipsum as their default model text, and a search for
                            'lorem ipsum' will uncover
                            many web sites still in their infancy.
                        </span>
                    </div>
                </div>
                <p class="heading-second pt-3 pb-3">
                    Courses
                </p>
                <div class="container pt-4 pb-4 profile-header">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="../assets/images/ico/course.png" alt="Avatar" style="width:100%">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="che-text">
                                                chemistry
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="dolar-text ml-5">
                                                $99
                                            </span>
                                        </div>
                                        <span class="heading-forth ml-3 mt-3">
                                            How to create your online
                                            courses in 3 steps.
                                        </span>
                                    </div>
                                    <button class="mt-3 w-100 schedule-btn1">Start learning</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="../assets/images/ico/NoPath.png" alt="Avatar" style="width:100%">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="che-text">
                                                chemistry
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="dolar-text ml-5">
                                                $99
                                            </span>
                                        </div>
                                        <span class="heading-forth ml-3 mt-3">
                                            How to create your online
                                            courses in 3 steps.
                                        </span>
                                    </div>
                                    <button class="mt-3 w-100 schedule-btn1">Start learning</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="add-new">
                                <img src="../assets/images/ico/add-new.png" alt="add-new">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-4 pb-4 mt-4 profile-header">
                    <span class="heading-second">Student reviews</span>
                    <div class="container">
                        <div class="row">
                            <div class="mt-3 d-flex">
                                <div>
                                    <img src="../assets/images/ico/profile-boy.png" alt="profile-header">
                                </div>
                                <span class="ml-3 heading-forth1">Smith John <br />
                                    <span class="notification-text4">
                                        Student
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="star-icos">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="perfile-text ml-1">4.0</span>
                        </div>
                        <span class="notification-text6">
                            <br />
                            It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its
                            lyout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using
                            Content here content making it look like readable English.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
