@extends('admin.layouts.app')
@section('content')

<div class="container-fluid pb-4 mt-5">
    <h1><a href=" {{ route ('admin.student') }}"> < </a> Student profile </h1>
</div>
<div class="container-fluid pb-3">
    <div class="row">
        <div class="col-md-3">
            <div class="bg-white pt-3 pb-2">
                <div class="container text-main-center">
                    <div class="row">
                        <div class="col-md-5 mt-2">
                            <img src="{{ asset('/admin/assets/img/ico/porfile-main.png')}}" class="w-100 profile-responsive" />
                        </div>
                        <div class="col-dm-7 text-main-center-1 mt-3">
                            <p class="heading-forth name-text mt-2">{{ $student->first_name }} {{ $student->last_name }}</p>
                            <p class="name-text1 paragraph-text1">Student</p>
                        </div>
                    </div>
                </div>
                <div class="line-profile">&nbsp;</div>
                <div class="container">
                    <div class="row">
                            <div class="col-md-4 text-center">
                                <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="{{ asset('/admin/assets/img/ico/delete-icon.png')}}" alt="image" />
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="edit-student.html">
                                    <img src="{{ asset('/admin/assets/img/ico/edit-icon.png')}}" alt="image" />
                                </a>
                            </div>

                            <div class="col-md-4 text-center">
                                <label class="switch"
                                    style="position: relative;left: -10px;top:5px;width: 60px;">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    <a href="activity.html" class="w-100 active-text-1 mt-4 btn">View activity log</a>
                </div>
            </div>
            <!-- deleet Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body modal-bodys">
                        <div class="container text-center pb-3 pt-3">
                            <img src="{{ asset('/admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                            <h3 class="mt-3 pb-2">
                                Remove student
                            </h3>
                            <p class="paragraph-text-1 pb-3">Are you sure you want to remove member?</P>
                            <button type="button" class="cencel-btn w-25" data-dismiss="modal">Yes,
                                Cancel</button>
                            <a href="" class="schedule-btn btn w-25">
                                No
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="mt-3">
                <div class="container-fluid m-0 p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bg-white pt-3 pb-4 border-radius-2 pl-2">
                                <span class="paragraph-text0">Total classes</span>
                                <h2 class="mt-2 ml-1">265</h2>
                                <a href="classes.html" class="view-bookings mt-0 mr-2">
                                    View
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white pt-3 pb-4 border-radius-2 pl-2">
                                <span class="paragraph-text0">Paid payments</span>
                                <h2 class="mt-2 ml-1">$265</h2>
                                <a href="payment.html" class="view-bookings mt-0 mr-2">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 container bg-white pt-4 pb-3 mb-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('/admin/assets/img/ico/hash-icon.png')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-8">
                                <h3 class="mt-3 ml-3">16
                                    <a href="student-reports.html">
                                        <span class="paragraph-text01 text-black">Reports</span>
                                    </a>
                                </h3>
                            </div>
                            <div class="col-md-2 mt-2">
                                <a href="student-reports.html" class="view-bookings view-bookings-1">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 container bg-white pt-4 pb-4 mb-3">
                        <div class="row pb-3">
                            <div class="col-md-2">
                                <img src="{{ asset('/admin/assets/img/ico/red-icons.png')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-10">
                                <p class="paragraph-text01 mb-0 mt-1">
                                    Interested subjects
                                </p>
                                <p class="heading-forth ml-1">
                                    physics, chemistry
                                </p>
                                </p>
                            </div>
                    
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-2">
                                <img src="{{ asset('/admin/assets/img/ico/red-icons.png')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-10">
                                <p class="paragraph-text01 mb-0 mt-1">Language</p>
                                <p class="heading-forth ml-1">
                                    English, Frence
                                </p>
                                </p>
                            </div>

                        </div>
                        <div class="row pb-3">
                            <div class="col-md-2">
                                <img src="{{ asset('/admin/assets/img/ico/red-icons.png')}}" alt="hash-icon" height="40px"
                                    class="mt-1" />
                            </div>
                            <div class="col-md-10">
                                <p class="paragraph-text01 mb-0 mt-1">Location</p>
                                <p class="heading-forth ml-1">
                                    Lahore, Pakistan
                                </p>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="container bg-white pt-4">
                        <h3>Education</h3>
                        <hr />
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <span class="heading-third1"> BSC Chemistry </span>
                                <span class="paragraph-text1 ml-3"> 2014
                                </span>
                                <p class="notification-text3 mt-2">University of Punjab Lahore, Pakistan</p>
                            </div>
                        </div>
                    </div>
                    <div class="container bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="heading-third1"> MSC Chemistry </span>
                                <span class="paragraph-text1 ml-3"> 2016
                                </span>
                                <p class="notification-text3 mt-2">University of Punjab Lahore, Pakistan</p>
                            </div>
                        </div>
                    </div>
                    <div class="container bg-white pt-4 mt-4">
                        <h3>Favorite tutors </h3>
                        <hr />
                        <div class="container text-main-center">
                            <div class="row">
                                <div class="col-md-4 mt-4 m-0 p-0">
                                    <div class="mt-1">
                                        <img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}" class="profile-responsive" width="70" height="70" />
                                    </div>
                                </div>
                                <div class="col-md-8 text-main-center-1 mt-3">
                                    <p class="heading-forth name-text mt-2">Danish jaffery</p>
                                <div class="" style="position: relative;top: -15px;">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="paragraph-text1">4.0</span>
                                </div>
                                    <p class="name-text1 paragraph-text1 mt-2">
                                        <img src="{{ asset('/admin/assets/img/ico/location.svg')}}" alt="icon" />
                                        <span class="paragraph-text-1 ml-1">Lahore</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
        
            <div class="container-fluid mt-3 bg-white pt-3 pb-3">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            About Student
                        </h3>
                        <article class="container-read-more">
                            <p class="paragraph-texts mt-1">
                                {{ $student->bio }}
                            </p>
                        </article>
                        </p>
                    </div>
                </div>
            </div>
            <br />
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                <h3>
                    Classes
                </h3>
                </div>
                <div class="col-md-6">
                    <a href="classes.html" class="view-bookings">
                    View all classes
                    </a>
                </div>
            </div>

        </div>

            <div class="container-fluid bg-white mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <table class="pt-2 tableed table  table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Srno.</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Tutor</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Duration </th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Chemistry</td>
                                    <td class="pt-4">Harram Laraib</td>
                                    <td class="text-center pt-4">$50</td>
                                    <td class="pt-4"> 
                                        1 hr 30 min
                                    </td>
                                    <td class="pt-4">
                                        3 sep, 2021
                                    </td>
            
                                    <td class="pt-3 float-right">
                                        <a href="classdetails.html" class="schedule-btn btn">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Chemistry</td>
                                    <td class="pt-4">Harram Laraib</td>
                                    <td class="text-center pt-4">$50</td>
                                    <td class="pt-4"> 
                                        1 hr 30 min
                                    </td>
                                    <td class="pt-4">
                                        3 sep, 2021
                                    </td>
            
                                    <td class="pt-3 float-right">
                                        <a href="classdetails.html" class="schedule-btn btn">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Chemistry</td>
                                    <td class="pt-4">Harram Laraib</td>
                                    <td class="text-center pt-4">$50</td>
                                    <td class="pt-4"> 
                                        1 hr 30 min
                                    </td>
                                    <td class="pt-4">
                                        3 sep, 2021
                                    </td>
            
                                    <td class="pt-3 float-right">
                                        <a href="classdetails.html" class="schedule-btn btn">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Chemistry</td>
                                    <td class="pt-4">Harram Laraib</td>
                                    <td class="text-center pt-4">$50</td>
                                    <td class="pt-4"> 
                                        1 hr 30 min
                                    </td>
                                    <td class="pt-4">
                                        3 sep, 2021
                                    </td>
            
                                    <td class="pt-3 float-right">
                                        <a href="classdetails.html" class="schedule-btn btn">
                                            View
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Chemistry</td>
                                    <td class="pt-4">Harram Laraib</td>
                                    <td class="text-center pt-4">$50</td>
                                    <td class="pt-4"> 
                                        1 hr 30 min
                                    </td>
                                    <td class="pt-4">
                                        3 sep, 2021
                                    </td>
            
                                    <td class="pt-3 float-right">
                                        <a href="classdetails.html" class="schedule-btn btn">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                        Courses enrolled 
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <a href="course.html" class="view-bookings">
                            View all courses
                        </a>
                    </div>
                </div>

            </div>

                    <div class="container-fluid bg-white mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="pt-2 tableed table  table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Srno.</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Tutor</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pt-4">01</td>
                                            <td class="pt-4">Chemistry</td>
                                            <td class="pt-4">
                                            How to create your online
                                            </td>
                                            <td class="text-center pt-4">Harram Laraib</td>
                                            <td class="pt-4"> 
                                            <label class="switch"
                                            style="position: relative;left: -10px;width: 60px;">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                            </td>
                
                                            <td class="pt-3 float-right">
                                                <a href="course.html" class="schedule-btn btn">
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td class="pt-4">01</td>
                                        <td class="pt-4">Chemistry</td>
                                        <td class="pt-4">
                                            How to create your online
                                        </td>
                                        <td class="text-center pt-4">Harram Laraib</td>
                                        <td class="pt-4"> 
                                            <label class="switch"
                                            style="position: relative;left: -10px;width: 60px;">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        </td>
                
                                        <td class="pt-3 float-right">
                                            <a href="course.html" class="schedule-btn btn">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">01</td>
                                        <td class="pt-4">Chemistry</td>
                                        <td class="pt-4">
                                            How to create your online
                                        </td>
                                        <td class="text-center pt-4">Harram Laraib</td>
                                        <td class="pt-4"> 
                                            <label class="switch"
                                            style="position: relative;left: -10px;width: 60px;">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        </td>
                
                                        <td class="pt-3 float-right">
                                            <a href="course.html" class="schedule-btn btn">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                        <tr>
                                        <td class="pt-4">01</td>
                                        <td class="pt-4">Chemistry</td>
                                        <td class="pt-4">
                                            How to create your online
                                            
                                        </td>
                                        <td class="text-center pt-4">Harram Laraib</td>
                                        <td class="pt-4"> 
                                            <label class="switch"
                                            style="position: relative;left: -10px;width: 60px;">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        </td>
                
                                        <td class="pt-3 float-right">
                                            <a href="course.html" class="schedule-btn btn">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>
                            Support tickets 
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <a href="ticket.html" class="view-bookings">
                                View all support tickets 
                            </a>
                        </div>
                    </div>
                </div>
    
                        <div class="container-fluid bg-white mt-3 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="pt-2 tableed table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="">Srno.</th>
                                                <th scope="col">Ticket number</th>
                                                <th scope="col">Ticket generated on</th>
                                                <th scope="col">Assigned to</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-4">01</td>
                                                <td class="pt-4">01423asd024</td>
                                                <td class="pt-4">
                                                03, sep 2021
                                                </td>
                                                <td class="text-center pt-4">Harram</td>
                                                <td class="pt-4"> 
                                            <span class="pending-text-1">pending</span>

                                                </td>
                    
                                                <td class="pt-3 d-flex">
                                                <a href="ticketpage.html" class="cencel-btn btn">
                                                    View
                                                    </a> 
                                                <a href="ticket.html" class="schedule-btn ml-2 btn"  data-toggle="modal"
                                                data-target="#exampleModalCenterd">
                                                    Assgin
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td class="pt-4">01</td>
                                            <td class="pt-4">01423asd024</td>
                                            <td class="pt-4">
                                                03, sep 2021
                                            </td>
                                            <td class="text-center pt-4">Harram</td>
                                            <td class="pt-4"> 
                                            <span class="pending-text-1">pending</span>
                                            </td>
                                            <td class="pt-3 d-flex">
                                                <a href="ticket.html" class="cencel-btn btn">
                                                    View
                                                    </a> 
                                                <a href="" class="schedule-btn ml-2 btn" data-toggle="modal"
                                                data-target="#exampleModalCenterd">
                                                Assgin
                                                </a>
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
                <img class="serach-icon" src="{{ asset('/admin/assets/img/ico/Search.png')}}" />
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 col-6">
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                            <img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}" alt="std-icon" /></span>
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
                        <span class="alex-name"><img src="{{ asset('/admin/assets/img/ico/profile-boy.png')}}"
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
