@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>
                < Subject </h1>
        </div>
        <div class="col-md-6">

        </div>

    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row ml-2 mr-2">
        <div class="col-md-4 mt-2">
            <h3>All subjects</h3>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <!-- <span class="view-bookings mr-4">
                    View all tutor requests
                </span> -->
        </div>
    </div>
</div>
<!-- tutor request bookings  table start-->

<div class="container-fluid">
    <div class="pt-3 mt-3 container-bg ml-1 mr-1">
        <form>
            <div class="row border-bottom pb-3 ml-1 mr-1">
                <div class="col-md-2">
                    <div class="input-serach">
                        <input type="search" placeholder="Subject" id="tutor-id-c" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option">
                        <select id="std-level">
                            <option selected disabled>Student Level</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advance</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="availability-id">
                            <option>Availability</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="rate-number">
                            <option selected disabled>Rate</option>
                            <option>Less than $5</option>
                            <option>$6 - $10 </option>
                            <option>$11 - $14 </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="varified-id">
                            <option selected disabled>Varified by</option>
                            <option>Harram Laraib</option>
                            <option>Harram Laraib</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="reset-text mt-2">
                        <input type="reset" value="Reset" class="reset-button">
                    </div>
                </div>
            </div>
        </form>

        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Subjects</th>
                            <th scope="col">Student level</th>
                            <th scope="col">Availability</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Classes</th>
                            <th scope="col">Verified by</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($tutor->teach as $appr_sub)
                        <tr>
                            <td class="pt-4">
                                <span>{{ $appr_sub->sub_name}}</span>
                            </td>
                            <td class="pt-4">{{  $tutor->std_level != null ? $tutor->std_level : '---'  }}</td>
                            <td class="pt-4">{{ $tutor->availability != null ? $tutor->availability : '---' }}</td>
                            <td class="pt-4">{{ $tutor->hourly_rate != null ? $tutor->hourly_rate : '---' }}$</td>
                            <td class="pt-4">15</td>
                            <td class="pt-4">{{$appr_sub->verified_by_name}}</td>
                            <td class="pt-4 d-flex">
                                <span>
                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                        <img src="{{ asset('/admin/assets/img/ico/delete-icon.svg')}}" alt="image" />
                                    </a>

                                </span>
                                <label class="switch ml-3">
                                    <input type="checkbox" {{ ($appr_sub->status == 1) ? 'checked' : ''}}>
                                    <span class="slider round" ></span>
                                </label>
                            </td>
                            <td class="pt-3 text-right">
                                <a href="{{route('admin.tutor-class')}}" class="btn cencel-btn w-100">
                                    View all classes
                                </a>
                            </td>
                            <td class="pt-3 text-right">
                                <a href="{{route('admin.tutotAssessment',[$appr_sub->sub_name])}}" class="schedule-btn btn">
                                    View test
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end table -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-4 mt-3">
            <h3 class="heading-third ml-3">Subjects for approval</h3>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<!-- all teacher's table data -->
<div class="container-fluid mb-4">
    <div class="container-bg  pt-3 mt-3 ml-2 mr-2 ">
        <form>
            <div class="row border-bottom pb-2 ml-1 mr-1">
                <div class="col-md-2">
                    <div class="input-serach">
                        <input type="search" placeholder="Subject" id="tutor-id-s" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option">
                        <select id="std-level-s">
                            <option selected disabled>Student Level</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advance</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="availability-id-s">
                            <option>Availability</option>
                            <option>1</option>
                            <option>1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="rate-number-s">
                            <option selected disabled>Rate</option>
                            <option>Less than $5</option>
                            <option>$6 - $10 </option>
                            <option>$11 - $14 </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-option ml-1">
                        <select id="varified-id-s">
                            <option selected disabled>Varified by</option>
                            <option>Harram Laraib</option>
                            <option>Harram Laraib</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="reset-text mt-2">
                        <input type="reset" value="Reset" class="reset-button">
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Subjects</th>
                            <th scope="col">Student level</th>
                            <th scope="col">Availability</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Classes</th>
                            <th scope="col">Assigned to</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pending_subjects as $pend_reqs)
                        <tr>
                            <td class="pt-4">
                                <span>{{ $pend_reqs->sub_name }}</span>
                            </td>
                            <td class="pt-4">{{ ($tutor->userdetail != null ? $tutor->userdetail->std_level : '---' )  }}</td>
                            <td class="pt-4">{{ ($tutor->userdetail != null ? $tutor->userdetail->availability != NULL ? $tutor->userdetail->availability : '---' : '---')}}</td>
                            <td class="pt-4">{{ ($tutor->userdetail != null ? $tutor->userdetail->hourly_rate : '---') }}$</td>
                            <td class="pt-4">15</td>
                            <td class="pt-4">Harram</td>
                            <td class="pt-3 d-flex">
                                <span class="pending-text"> Pending </span>
                            </td>
                            <td class="pt-3 text-right">
                                <a href="test.html" class="cencel-btn w-100 btn">
                                    View test
                                </a>
                            </td>
                            <td class="pt-3 text-right">
                                <button class="schedule-btn">Assigned</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal delete  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="../assets/img/ico/cross-icon.png" alt="verfiy" />
                    <h3 class="mt-3 pb-2">
                        Remove Subject
                    </h3>
                    <p class="paragraph-text-1 pb-3">Are you sure you want to remove subject?</P>
                    <button type="button" class="cencel-btn w-25" data-dismiss="modal">Yes</button>
                    <a href="" class="schedule-btn btn w-25">
                        No
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tutor modal -->
<div class="modal fade" id="exampleModalCentered" tabindex="-1" role="dialog"
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
                            <span class="alex-name"><img src="../assets/img/ico/profile-boy.svg"
                                    alt="std-icon" /></span>
                            <span class="pl-2 alex-names">Harram</span>
                        </div>
                        <div class="col-md-6 col-6">
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
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
                            <button class="schedule-btn assgin-text" data-toggle="modal"
                                data-target="#exampleModalCenter">Assign</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
