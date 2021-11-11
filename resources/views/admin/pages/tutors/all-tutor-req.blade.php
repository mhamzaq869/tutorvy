@extends('admin.layouts.app')

@section('content')
      <!--section start  -->
      <div class="container-fluid mt-5">
        <div class="row ml-1 mr-1">
            <div class="col-md-6">
                <h1>Tutors</h1>
            </div>
            <div class="col-md-6 m-0 p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-items breadcrumb-item-active"><a href="#">Tutorvy</a></li>
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page"><a href="">Manage Requests</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row ml-1 mr-1">
            <div class="col-md-6">
                <h3 class="heading-third-res">All Tutor Requests</h3>
            </div>
            <!-- <div class="col-md-6 col-6 text-right">
                <a href="all-tutor-request.html" class="view-bookings view-bookings-res">
                    View all tutor requests
                </a>
            </div> -->
        </div>
    </div>
    <!-- tutor request bookings  table start-->

    <div class="container-fluid">
        <div class="row ml-1 mr-1">
            <div class="col-md-12">
                <div class="pt-3 mt-3 container-bg ">
                    <div class=" container-fluid border-bottom  pb-2">
                        <div class="row">
                            <div class="col-md-11">
                                <form class="row">
                                    <div class="col-md-2">
                                        <div class="input-serach">
                                            <input type="search" placeholder="Tutor id" id="tutor-id" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="input-serach ">
                                            <input type="search" placeholder="location" id="search-location" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-option">
                                            <select id="std-level">
                                                <option>Student Level</option>
                                                <option>Begginer</option>
                                                <option>Intermediate</option>
                                                <option>Advance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="input-option">
                                            <select id="availability-id">
                                                <option>Availability</option>
                                                <option>
                                                    1
                                                </option>
                                                <option>
                                                    2
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="input-option">
                                            <select id="rate-number">
                                                <option value="rate">Rate</option>
                                                <option value="Less">Less than $5</option>
                                                <option value="dollar">$6 - $10 </option>
                                                <option value="rate">$11 - $14 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="reset-text mt-2">
                                            <input type="reset" value="Reset" class="reset-button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-1">
                                <div class="sort-text mt-2">
                                    <select id="sort-by-home">
                                        <option value="3" disabled selected>Sort by</option>
                                        <option value="new">Old to new</option>
                                        <option value="old">New to old</option>
                                        <option value="low">Lowest rate</option>
                                        <option value="height">Highest rate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-md-12">
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="border-bottom table-margin-top ">

                                        <th scope="col">Name</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subjects</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Availability </th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($new_requests as $tutor)
                                        <tr>
                                            <td class="pt-4">
                                                <!-- -->
                                                <span data-toggle="tooltip" title="{{$tutor->first_name ?? '' }} {{$tutor->last_name ?? '' }}">{{Str::limit($tutor->first_name ?? $tutor->last_name, 3, $end='***')}}</span>
                                            </td>
                                            <td class="pt-4">
                                                123123141
                                            </td>
                                            <td class="pt-4">
                                                <span data-toggle="tooltip"
                                                    title="{{$tutor->email ?? '' }}">{{Str::limit($tutor->email, 3, $end='***')}}</span>
                                            </td>
                                            <td class="pt-4">{{$tutor->subject_name}}</td>
                                            <td class="pt-4">{{$tutor->city != NULL ? $tutor->city.', ' : '---'}}{{$tutor->country != NULL ? $tutor->country : '---'}}</td>

                                            @if($tutor->student_level == 1)
                                            <td class="pt-4">Basic</td>
                                            @elseif($tutor->student_level == 2)
                                            <td class="pt-4">Intermediate</td>
                                            @elseif($tutor->student_level == 3)
                                            <td class="pt-4">Expert</td>
                                            @else
                                            <td class="pt-4">---</td>
                                            @endif
                                            
                                            <td class="pt-4">---</td>
                                            <td class="pt-4">${{$tutor->hourly_rate}}</td>
                                            @if($tutor->assess_status == 0)
                                            <td class="pt-4"><span class="badge badge-warning all-tutor-badge"> Pending</span></td>
                                            @elseif($tutor->assess_status == null && $tutor->status == 3)
                                            <td class="pt-4"><span class="badge badge-danger all-tutor-badge"> Rejected</span></td>
                                            @endif
                                            <td class="pt-3 text-right">
                                                <a href="#" class="cencel-btn btn">
                                                    View
                                                </a>
                                            </td>
                                            <td class="pt-3 text-right">
                                                <button class="schedule-btn"  data-toggle="modal"
                                                    data-target="#exampleModalCenter">Assign</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end table -->
    <!-- Modal  teacher -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Assgin</p>
                </div>
                <div class="modal-body">
                    <div class="input-serach">
                        <input class="w-100" type="search" placeholder="Search members" />
                        <img class="serach-icon" src="{{ asset('admin/assets/img/ico/Search.png')}}" />
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="{{ asset('admin/assets/img/ico/profile-boy.svg')}}"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">Name</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text" onclick="assignStaff()" >Assign</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js') 
@include('js_files.admin.tutor')
@endsection
