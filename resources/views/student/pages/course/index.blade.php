@extends('student.layouts.app')
<link href="{{ asset('admin/assets/css/tutor.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/course.css') }}" rel="stylesheet">

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-12">
                    <p class="heading-first mr-3 ml-3">
                            Courses
                    </p>
                </div>

            </div>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top:-12px">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="row ml-2 mr-2">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr
                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                <th scope="col">Sr#</th>
                                <th scope="col">Tutor</th>
                                <th scope="col">Course</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $i => $course)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$course->course->user->first_name}} {{$course->course->user->last_name}}</td>
                                <td>{{$course->course->title}}</td>
                                <td>
                                    @if ($course->plan == 1)
                                    {{$course->course->basic_duration . ' weeks'}}
                                    @elseif ($course->plan == 2)
                                    {{$course->course->standard_duration. ' weeks'}}
                                    @elseif ($course->plan == 3)
                                    {{$course->course->advance_duration. ' weeks'}}
                                    @endif
                                </td>
                                <td>
                                    @if($course->status == 0)
                                        <span class="bg-color-apporve3">
                                            Payment Pending
                                        </span>
                                    @elseif($course->status == 1)
                                        <span class="bg-color-apporve1">
                                            Approved
                                        </span>
                                    @elseif($course->status == 0)
                                        <span class="bg-color-apporve">
                                            Pending
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <a class="cencel-btn w-auto decoration-none mr-2" href="{{route('student.course-details',[$course->id])}}">
                                        View Details
                                    </a>
                                    <button class="schedule-btn w-auto">
                                        Start Course
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
