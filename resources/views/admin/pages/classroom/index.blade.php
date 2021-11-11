@extends('admin.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
        <div class="container-fluid mt-5">
            <div class="row ml-1 mr-1">
                <div class="col-md-12">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Classroom   </p>
                </div>
            </div>
            <div class="row bg-white ml-1 mr-1">
                <div class="col-md-12 mt-3">
                    <nav>
                        <div class="nav nav-stwich" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Classes
                                <span class="counter-text badge bg-primary"> {{count($classes)}} </span>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Delivered Classes
                                <span class="counter-text badge bg-success"> {{count($delivered_classess)}} </span>
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
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Student</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Starts In</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($classes != null && $classes != [] && $classes != "")
                                                @foreach($classes as $class)
                                                    <tr>
                                                        <td class="pt-4">
                                                            @if($class->tutor != null && $class->tutor != "")
                                                                {{ $class->tutor->first_name }} {{ $class->tutor->last_name }}
                                                            @else
                                                            <span> - </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4">
                                                            @if($class->user != null && $class->user != "")
                                                                {{ $class->user->first_name }} {{ $class->user->last_name }}
                                                            @else
                                                            <span> - </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4"> {{ $class->subject->name }} </td>
                                                        <td class="pt-4"> {{ $class->topic }} </td>
                                                        <td class="pt-4"> {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}} </td>
                                                        
                                                        <td class="pt-4"> {{ $class->duration }} Hour(s) </td>
                                                        <td class="pt-4">
                                                            @if($class->status == 1)
                                                                <span class="bg-color-apporve3">
                                                                    Payment Pending
                                                                </span>
                                                            @elseif($class->status == 2)
                                                                <span class="bg-color-apporve1">
                                                                    Approved
                                                                </span>
                                                            @elseif($class->status == 5)
                                                                <span class="bg-color-apporve1">
                                                                    Delivered
                                                                </span>
                                                            @elseif($class->status == 0)
                                                                <span class="bg-color-apporve">
                                                                    Pending
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4"> {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}} </td>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>
                                                        No Class Found
                                                    </td>
                                                </tr>
                                            @endif
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
                                                <th scope="col">Tutor</th>
                                                <td scope="col">Student</td>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($delivered_classess != null && $delivered_classess != [] && $delivered_classess != "")
                                                @foreach($delivered_classess as $class)
                                                    <tr>
                                                        <td class="pt-4">
                                                            @if($class->tutor != null && $class->tutor != "")
                                                                {{ $class->tutor->first_name }} {{ $class->tutor->last_name }}
                                                            @else
                                                            <span> - </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4">
                                                            @if($class->user != null && $class->user != "")
                                                                {{ $class->user->first_name }} {{ $class->user->last_name }}
                                                            @else
                                                            <span> - </span>
                                                            @endif
                                                        </td>
                                                        <td class="pt-4">
                                                            {{ $class->subject->name }}
                                                        </td>
                                                        <td class="pt-4">
                                                            {{ $class->topic }}
                                                        </td>
                                                        <td class="pt-4">
                                                        {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}}
                                                        </td>
                                                        
                                                        <td class="pt-4">
                                                            {{ $class->duration }} Hour(s)
                                                        </td>
                                                        <td class="pt-4">
                                                    
                                                            <span class="bg-color-apporve1">
                                                                Delivered
                                                            </span>
                                                    
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>
                                                        No Class Found
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

<script src="{{asset('/admin/assets/js/jquery.js')}}"></script>
<script src="{{asset('/admin/assets/js/jquery-ui.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
