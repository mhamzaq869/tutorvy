@extends('tutor.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <p class="mr-3 heading-first">
                             Classroom
                        </p>
                </div>
            </div>
            
            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">
                        

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                               <small>
                                   Every Details about your classes will be published here <br>along with schedules for meetings <a href="#">Learn More</a>

                               </small> 
                               <a href="#" class="cross"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <nav class="">
                        <div class="nav nav-stwich pb-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Classes
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Delivered Classes
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Subject</th>
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
                                                            
                                                            <button class="cencel-btn" type="button">
                                                                View details
                                                            </button>
                                                            <a href="{{route('tutor.start_class',[$class->classroom_id])}}"  class="schedule-btn">
                                                                Start Call
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>
                        <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Subjects</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Student</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
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
                                                            I'm done
                                                        </td>

                                                        <td style="text-align: center;">
                                                                
                                                                <button class="cencel-btn" type="button">
                                                                    View details
                                                                </button>
                                                                <button class="schedule-btn" type="button">
                                                                    Start Class
                                                                </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>
@endsection