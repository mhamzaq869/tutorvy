@extends('student.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
<div class="content-wrapper " style="overflow: hidden;">
    <section id="classroomsection" style="display: flex;">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Classroom</p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="image-center-nobooking text-center mt-5">
                        <img src="../assets/images/ico/class-icon.png" alt="class-ico" style="width: 200px;">
                        <p class="nobooking-booking">Create New Classroom</p>
                        <P class="improve-booking">
                            It is a long established fact that a reader will be <br /> distracted by the
                            readable
                            content.</P>
                        <br />
                        <button data-toggle="modal" data-target="#exampleModalCenter" class="schedule-btn"
                            style="width: 180px;font-size: 14px;">

                            Create classroom
                        </button>
                    </div>
                    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-heade mt-3 pb-3">
                                    <p class="modal-title text-center text-justify" id="exampleModalLongTitle">
                                        Bookings</p>
                                </div>
                                <div class="modal-body ">
                                    <div class="d-flex std-name">
                                        <img src="../assets/images/logo/boy.jpg" alt="boy" style="width: 30px;">
                                        <p class="heading-fifth ml-2">Harram Laraib</p>
                                        <p class="std-student">Student</p>
                                        <img src="../assets/images/ico/3dot.png" alt="dots"
                                            style="width: 20px;position: relative;left: 260px;">
                                    </div>
                                    <div class="container">
                                        <p class="heading-fifth mt-3"> Lorem ipsum dolor sit amet consectetur ?
                                        </p>
                                        <p class="paragraph-text"> Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Maxime facere quis deleniti, nam, vel dolore
                                            distinctio eum nesciunt explicabo exercitationem sint fuga ad soluta
                                            aspernatur nisi id doloremque? Optio, labore!
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <input id="curtainInput" type="button" value="Send Class Link"
                                        class="schedule-btn w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-12 mt-3">
                    <nav>
                        <div class="nav nav-stwich" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Classes
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Upcomming Classes
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr
                                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Student</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($classes as $class)
                                            <tr>
                                                <td class="pt-4">
                                                    {{ $class->booking->subject->name }}
                                                </td>
                                                <td class="pt-4">
                                                    {{ $class->booking->topic }}
                                                </td>
                                                <td class="pt-4">
                                                    {{$class->booking->class_time}} {{date("g:i a", strtotime("$class->booking->class_time UTC"))}}
                                                </td>
                                                <td class="pt-4">
                                                    {{ $class->booking->user->first_name }} {{ $class->booking->user->last_name }}
                                                </td>
                                                <td class="pt-4">
                                                    {{ $class->booking->duration }} Hour(s)
                                                </td>
                                                <td class="pt-4">
                                                    <span class="bg-color-apporve3">
                                                        Pending
                                                    </span>
                                                </td>

                                                
                                                <td style="text-align: center;">
                                                    
                                                    <a href="{{route('student.join_class',[$class->classroom_id])}}"  class="schedule-btn">
                                                    Join Class
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-bordered ">
                                        <thead>
                                            <tr
                                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Student</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-4">
                                                    Hellow
                                                </td>
                                                <td class="pt-4">
                                                    I'm done
                                                </td>
                                                <td class="pt-4">
                                                    Hellow
                                                </td>
                                                <td class="pt-4">
                                                    I'm done
                                                </td>
                                                <td class="pt-4">
                                                    Hellow
                                                </td>
                                                <td class="pt-4">
                                                    <span class="bg-color-apporve">
                                                        Rejected
                                                    </span>
                                                    
                                                </td>

                                                <td style="text-align: center;">
                                                    <button class="schedule-btn" type="button">
                                                        Class Details
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
@include('js_files.room')
@endsection
