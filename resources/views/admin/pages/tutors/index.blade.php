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
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page"><a href="">Manage Users</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row ml-1 mr-1">
            <div class="col-md-6">
                <h3 class="heading-third-res">New tutors requests</h3>
            </div>
            <div class="col-md-6 col-12">
                <a href="all-tutor-request.html" class="view-bookings view-bookings-res">
                    View all tutor requests
                </a>
            </div>
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
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($new_requests as $request)
                                        
                                        <tr>
                                            <td class="pt-4">
                                                <!-- -->
                                                {{ $request->tutor->first_name }} {{ $request->tutor->last_name }}
                                                <!-- <span data-toggle="tooltip" title="Harram Laraib Ali">Har***</span> -->
                                            </td>
                                            <td class="pt-4">
                                                123123141
                                            </td>
                                            <td class="pt-4">
                                                <span data-toggle="tooltip"
                                                    title="{{$request->tutor->email}}">{{Str::limit($request->tutor->email, 3, $end='***')}}</span>
                                            </td>
                                            <td class="pt-4">{{$request->sub_name}}</td>
                                            <td class="pt-4">{{$request->tutor->address}}</td>
                                            <td class="pt-4">{{$request->tutor->userdetail->std_level}}</td>
                                            <td class="pt-4">{{$request->tutor->userdetail->availability != NULL ? $request->tutor->userdetail->availability : '---'}}</td>
                                            <td class="pt-4">{{$request->tutor->userdetail->hourly_rate}}</td>
                                            <td class="pt-3 text-right">
                                                <a href="{{ route('admin.tutorRequest',[$request->tutor->id,$request->id]) }}" class="cencel-btn btn">
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
    <div class="container-fluid mt-4">
        <div class="row mt-5 ml-1 mr-1">
            <div class="col-md-6 col-6">
                <h3>All tutors</h3>
            </div>
            <div class="col-md-6 col-6">
                <a href="all-tutor.html">
                    <p class="view-bookings">
                        View all tutor
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!-- all teacher's table data -->
    <div class="container-fluid mb-5">
        <div class="row  container-bg pt-3 mt-3 ml-2 mr-2">
            <div class="col-md-12">
                <div class=" container-fluid border-bottom  pb-2">
                    <div class="row">
                        <div class="col-md-11">
                            <form class="row">
                                <div class="col-md-2">
                                    <div class="input-serach">
                                        <input type="search" placeholder="Tutor id" id="tutor-id-t" />
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <div class="input-serach ">
                                        <input type="search" placeholder="location" id="search-location-t" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-option">
                                        <select id="std-level-t">
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
                                        <select id="rate-number-t">
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
                                <select id="sort-by-home-t">
                                    <option value="3" disabled selected>Sort by</option>
                                    <option value="new">Old to new</option>
                                    <option value="old">New to old</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subjects</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Availability </th>
                                    <th scope="col">Rate</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @if(empty($approved_tutors))
                                    <p> No Data found. </p>
                                @else
                                @foreach($approved_tutors as $tutor)
                                            
                                    <tr>
                                        <td class="pt-4">
                                            <!-- -->
                                            {{ $tutor->first_name }} {{ $tutor->last_name }}
                                            <!-- <span data-toggle="tooltip" title="Harram Laraib Ali">Har***</span> -->
                                        </td>
                                        <td class="pt-4">
                                            123123141
                                        </td>
                                        <td class="pt-4">
                                            <span data-toggle="tooltip"
                                                title="{{$tutor->email}}">{{Str::limit($tutor->email, 3, $end='***')}}</span>
                                        </td>
                                        <td class="pt-4">{{$tutor->subjects}}</td>
                                        <td class="pt-4">{{$tutor->address}}</td>
                                        <td class="pt-4">{{$tutor->userdetail->std_level}}</td>
                                        <td class="pt-4">{{$tutor->userdetail->availability != NULL ? $tutor->userdetail->availability : '---'}}</td>
                                        <td class="pt-4">{{$tutor->userdetail->hourly_rate}}</td>
                                        <td class="pt-4 text-right">
                                            <a href="setting.html">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg')}}" alt="image"
                                                    class="edit-image" />
                                            </a>
                                        </td>
                                        <td class="pt-4 text-right">
                                            <label class="switch mt-0">
                                                <input type="checkbox" id="t_status" onchange="changeTutorStatus(`{{$tutor->id}}`)" {{ ($tutor->status == 1) ? 'checked' : ''}} >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td class="pt-3 text-right">
                                            <a href="{{ route('admin.tutorProfile',[$tutor->id]) }}" class="schedule-btn btn">
                                                View
                                            </a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach
                                @endif
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
                    @foreach($staff_members as $member)
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <span class="alex-name"><img src="{{ asset('admin/assets/img/ico/profile-boy.svg')}}"
                                        alt="std-icon" /></span>
                                <span class="pl-2 alex-names">{{$member->name}}</span>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="schedule-btn assgin-text" onclick="assignStaff(`{{$member->id}}`)" >Assign</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js') 
@include('js_files.admin.tutor')
@endsection
