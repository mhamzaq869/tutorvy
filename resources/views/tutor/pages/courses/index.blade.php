@extends('tutor.layouts.app')

@section('content')
    <link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">

    <!--section start  -->

    <div class="container-fluid">
        <h1 class="">
            Courses
        </h1>
    </div>
    <div class="container-fluid mt-3">
        <div class="container pt-4 pb-4 profile-header">
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset($course->thumbnail)}}" alt="Avatar" style="width:100%">
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
                                    {{$course->title}}
                                </span>
                            </div>

                            <a href="{{route('tutor.course.edit',[$course->id])}}">
                                <button class="mt-3 w-100 schedule-btn1">Edit Course</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-4">
                    <div class="add-new">
                        <a href="{{route('tutor.addcourse')}}">
                            <img src="{{asset('assets/images/ico/add-new.png')}}" alt="add-new">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
