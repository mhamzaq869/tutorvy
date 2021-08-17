@extends('admin.layouts.app')

@section('content')
     <!--section start  -->
     <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    Courses
                </h1>
            </div>
            <div class="col-md-6 m-0 p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                        <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                href="">Courses</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <h3 class="mt-3">
                    Courses for approval
                </h3>
            </div>
            <div class="col-md-6">
                <a href="all-courses.html" class="view-bookings w-100 text-right">View all courses for approval</a>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="pt-3 mt-3 container-bg">
            <form>
                <div class="row border-bottom pb-2 ml-1 mr-1">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="input-serach">
                                    <input type="text" placeholder="Course name" class="courses-input"
                                        id="student-id" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-option">
                                    <select id="std-courses">
                                        <option>Tutor name</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-option">
                                    <select id="std-email">
                                        <option>Subject</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="reset-text mt-2">
                                    <input type="reset" value="Reset" class="reset-button">
                                </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="sort-text">
                            <select id="sort-by-home-1">
                                <option value="3" disabled selected>Sort by</option>
                                <option value="1">Old to new</option>
                                <option value="1">New to old</option>
                                <option value="1">Lowest rate</option>
                                <option value="1">Highest rate</option>

                            </select>
                        </div>
                    </div>
            </form>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <!-- start table -->
                <table class="table table-borderless">
                    <thead>
                        <!-- table header -->
                        <tr>
                            <th scope="col">Sr.no</th>
                            <th scope="col">Course name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Tutor</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- staff table data -->
                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                            <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="{{route('admin.course-request')}}">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                             <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="#">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                             <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="#">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                             <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="#">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                             <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="#">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-4">
                                <span>01</span>
                            </td>
                            <td class="pt-4">
                                <span>How to create your online courses in 3 steps.</span>
                            </td>
                            <td class="pt-4">Chemistry</td>
                            <td class="pt-4">Alexandra Felix</td>
                            <td class="pt-4">
                                <div class="container ">
                                    <div class="row float-right">
                                        <div class="col-md-1">
                                             <a href="#"><img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a"
                                                class="mr-3 cursor-1"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('admin.course-edit')}}">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3 d-flex">
                                <a  class="btn cencel-btn w-50 mr-2" href="#">
                                    View
                                </a>
                                <a class="btn schedule-btn w-50" href="#" data-toggle="modal"
                                    data-target="#exampleModalCenterd">
                                    Assign
                                </a>
                            </td>
                        </tr>

                        <!-- end data -->
                    </tbody>
                </table>
                <!-- end table -->
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3 ml-3">
                    All courses
                </h3>
            </div>
            <div class="col-md-6">
                <a href="all-courses-detail.html" class="view-bookings w-100 text-right">View all courses </a>
            </div>
        </div>
    </div>
    <!-- all courses -->
    <div class="container-fluid  pt-3 mt-3 container-bg">
        <form>
            <div class="row border-bottom pb-2">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-serach">
                                <input type="text" placeholder="Course name" class="courses-input"
                                    id="std-email-1" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-option">
                                <select id="std-support">
                                    <option>Tutor name</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-option">
                                <select id="std-support-1">
                                    <option>Student</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-option">
                                <select id="std-support-2">
                                    <option>Subject</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="reset-text mt-2">
                                <input type="reset" value="Reset" class="reset-button">
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="sort-text">
                        <select id="sort-by-home">
                            <option value="3" disabled selected>Sort by</option>
                            <option value="1">Old to new</option>
                            <option value="1">New to old</option>
                            <option value="1">Lowest rate</option>
                            <option value="1">Highest rate</option>

                        </select>
                    </div>
                </div>
        </form>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-md-12">
            <!-- start table -->
            <table class="table table-borderless">
                <thead>
                    <!-- table header -->
                    <tr>
                        <th scope="col">Sr.no</th>
                        <th scope="col">Course name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Tutor</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- staff table data -->
                    <tr>
                        <td class="pt-4">
                            <span>01</span>
                        </td>
                        <td class="pt-4">
                            <span>How to create your online courses in 3 steps.</span>
                        </td>
                        <td class="pt-4">Chemistry</td>
                        <td class="pt-4">Alexandra Felix</td>
                        <td class="pt-4">
                            <div class="container ">
                                <div class="row float-right">
                                    <div class="col-md-1">
                                        <img data-toggle="modal" data-target="#exampleModalCenter"
                                            src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a" class="mr-3 cursor-1">
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{route('admin.course-edit')}}">
                                            <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                class="mr-2 cursor-1">
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pt-3 d-flex">
                            <a href="{{route('admin.course-profile')}}" class="btn schedule-btn w-100 mr-2" href="#">
                                View
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                            <span>01</span>
                        </td>
                        <td class="pt-4">
                            <span>How to create your online courses in 3 steps.</span>
                        </td>
                        <td class="pt-4">Chemistry</td>
                        <td class="pt-4">Alexandra Felix</td>
                        <td class="pt-4">
                            <div class="container ">
                                <div class="row float-right">
                                    <div class="col-md-1">
                                        <img data-toggle="modal" data-target="#exampleModalCenter"
                                            src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a" class="mr-3 cursor-1">
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{route('admin.course-edit')}}">
                                            <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                class="mr-2 cursor-1">
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pt-3 d-flex">
                            <a href="approve-comment.html" class="btn schedule-btn w-100 mr-2" href="#">
                                View
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                            <span>01</span>
                        </td>
                        <td class="pt-4">
                            <span>How to create your online courses in 3 steps.</span>
                        </td>
                        <td class="pt-4">Chemistry</td>
                        <td class="pt-4">Alexandra Felix</td>
                        <td class="pt-4">
                            <div class="container ">
                                <div class="row float-right">
                                    <div class="col-md-1">
                                        <img data-toggle="modal" data-target="#exampleModalCenter"
                                            src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a" class="mr-3 cursor-1">
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{route('admin.course-edit')}}">
                                            <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                class="mr-2 cursor-1">
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pt-3 d-flex">
                            <a href="approve-comment.html" class="btn schedule-btn w-100 mr-2" href="#">
                                View
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                            <span>01</span>
                        </td>
                        <td class="pt-4">
                            <span>How to create your online courses in 3 steps.</span>
                        </td>
                        <td class="pt-4">Chemistry</td>
                        <td class="pt-4">Alexandra Felix</td>
                        <td class="pt-4">
                            <div class="container ">
                                <div class="row float-right">
                                    <div class="col-md-1">
                                        <img data-toggle="modal" data-target="#exampleModalCenter"
                                            src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a" class="mr-3 cursor-1">
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{route('admin.course-edit')}}">
                                            <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                class="mr-2 cursor-1">
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pt-3 d-flex">
                            <a href="approve-comment.html" class="btn schedule-btn w-100 mr-2" href="#">
                                View
                            </a>

                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                            <span>01</span>
                        </td>
                        <td class="pt-4">
                            <span>How to create your online courses in 3 steps.</span>
                        </td>
                        <td class="pt-4">Chemistry</td>
                        <td class="pt-4">Alexandra Felix</td>
                        <td class="pt-4">
                            <div class="container ">
                                <div class="row float-right">
                                    <div class="col-md-1">
                                        <img data-toggle="modal" data-target="#exampleModalCenter"
                                            src="{{ asset('admin/assets/img/ico/delete-icon.svg') }}" alt="a" class="mr-3 cursor-1">
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{route('admin.course-edit')}}">
                                            <img src="{{ asset('admin/assets/img/ico/edit-icon.svg') }}" alt="a"
                                                class="mr-2 cursor-1">
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pt-3 d-flex">
                            <a href="approve-comment.html" class="btn schedule-btn w-100 mr-2" href="#">
                                View
                            </a>

                        </td>
                    </tr>

                    <!-- end data -->
                </tbody>
            </table>
            <!-- end table -->
        </div>
    </div>

    <!-- delete modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <div class="modal-body modal-bodys">
                    <div class="container text-center pb-3 pt-3">
                        <img src="../assets/img/ico/cross-icon.png" alt="verfiy" />
                        <h3 class="mt-3">
                            Remove courses
                        </h3>
                        <p class="paragraph-text mb-5">
                            Are you sure you want to remove course?
                        </p>

                        <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cancel</button>
                        <a href="">
                            <button class="schedule-btn w-25">No</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- assgin -->

    <div class="modal fade" id="exampleModalCenterd" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Assgin</p>
                </div>
                <div class="modal-body">
                    <div class="input-serach">
                        <input class="w-100" type="search" placeholder="Search members" />
                        <img class="serach-icon" src="../assets/img/ico/Search.png" />
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name">
                                    <img src="../assets/img/ico/profile-boy.png" alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="../assets/img/ico/profile-boy.png"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Harram</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text">Assign</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
