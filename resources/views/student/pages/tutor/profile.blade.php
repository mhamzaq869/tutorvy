@extends('student.layouts.app')

@section('content')
    <div class="container">
        <p class="heading-first ml-3 mr-3">
            Profile
        </p>
        <div class="row">
            <div class="col-md-3">
                <div class="container-fluid pb-3 profile-header">
                    <div class="img-profile text-center pt-3">
                        <span style="position: absolute;right: 25px;">
                            <img src="{{asset('assets/images/ico/yellow-rank.png')}}" alt="yellow">
                        </span>
                        @if ($tutor->picture)
                        <img src="{{asset($tutor->picture)}}" alt="profile-image" class="w-50">
                        @else
                        <img src="{{asset('assets/images/ico/porfile-main.png')}}" alt="profile-image" class="w-50">
                        @endif
                        <p class="heading-third mt-3">
                           {{$tutor->full_name}}
                        </p>
                        <p class="profile-tutor mt-0" style="line-height: 0;">
                            Tutor
                        </p>
                        <button class="schedule-btn w-100 mt-3">
                            Book class
                        </button>
                        <button class="cencel-btn w-100 mt-3">
                            Send massage
                        </button>
                        <div class="star-icos">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="perfile-text ml-1">4.0</span>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="{{asset('assets/images/ico/red-icons.png')}}" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            @foreach ($tutor->teach as $i => $teach)
                            <p class="paragraph-text mb-0">
                                {{$teach->subject->name}}
                                @if(($loop->count-1) > $i){{","}}@endif
                            </p>
                            @endforeach

                        </div>
                    </div>
                    {{-- <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="{{asset('assets/images/ico/red-icons.png')}}" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            <p class="paragraph-text" style="line-height: 0;">
                                Physics, Chemistry
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <img src="{{asset('assets/images/ico/red-icons.png')}}" alt="blue-ico">
                        </div>
                        <div class="col-md-9">
                            <p class="profile-tutor">
                                Subjects
                            </p>
                            <p class="paragraph-text" style="line-height: 0;">
                                Physics, Chemistry
                            </p>
                        </div>
                    </div> --}}

                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <p class="heading-forth">
                        Education
                    </p>
                    <div style="border-bottom: 1px solid #D6DBE2;"></div>
                    @foreach ($tutor->education as $edu)
                    <p class="profile-tutor mt-3 ">
                        {{$edu->degree->name}} {{$edu->subject->name}} {{ $edu->c_year }}
                    </p>
                    <p class="paragraph-text pt-0" style="line-height: 0;">
                       
                    </p>
                    @endforeach

                </div>
                <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                    <p class="heading-forth">
                        Experience
                    </p>
                    <div style="border-bottom: 1px solid #D6DBE2;"></div>
                    @foreach ($tutor->professional as $pro)
                    <p class="profile-tutor mt-3 ">
                        {{$pro->designation}} at {{$pro->organization}}
                    </p>
                    <p class="paragraph-text pt-0" style="line-height: 0;">
                        {{date('d M, Y',strtotime($pro->start_date))}} - {{date('d M, Y',strtotime($pro->end_date))}}
                    </p>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <div class="container profile-header pt-4 pb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('assets/images/ico/blue-icos.png')}}" alt="blue">
                                </div>
                                <span class="heading-third ml-3">
                                    16 <br />
                                    <span class="heading-sixths">Total classes</span>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('assets/images/ico/blue-clock.png')}}" alt="blue-clock">
                                </div>
                                <span class="heading-third ml-3">
                                    50$ <br />
                                    <span class="heading-sixths">Per hour rate</span>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex  ">
                                <div class="">
                                    <img src="{{asset('assets/images/ico/red-clock.png')}}" alt="red">
                                </div>
                                <span class="heading-third ml-3">
                                    9am-5pm <br />
                                    <span class="heading-sixths ml-1">Availability</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 m-0 p-0">
                            <div class="d-flex">
                                <div class="">
                                    <img src="{{asset('assets/images/ico/blue-icos.png')}}" alt="blue+">
                                </div>
                                <span class="heading-third ml-3">
                                    100% <br />
                                    <span class="heading-sixths">Response time</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 pt-4 pb-4 profile-header">
                    <div class="heading-second">
                        <p class="heading-second">About tutor</p>
                    </div>
                    <div class="about-text">
                        {{$tutor->bio}}
                    </div>

                </div>
                <p class="heading-second pt-3 pb-3">
                    Courses
                </p>

                <div class="row mb-5">
                    @foreach ($tutor->course as $course)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('assets/images/ico/course.png')}}" alt="Avatar" style="width:100%">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="che-text">
                                            {{$course->subject->name}}
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="dolar-text ml-5">
                                            ${{$course->basic_price}}
                                        </span>
                                    </div>
                                    <span class="heading-forth ml-3 mt-3">
                                            {{$course->title}}
                                    </span>
                                </div>
                                <button class="mt-3 w-100 schedule-btn1">Start learning</button>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

{{--
                <div class="row mt-5">
                    <span class="heading-second">Student reviews</span>
                    <div class="container">
                        <div class="row">
                            <div class="mt-3 d-flex">
                                <div>
                                    <img src="{{asset('assets/images/ico/profile-boy.png')}}" alt="profile-header">
                                </div>
                                <span class="ml-3 heading-forth1">Smith John <br />
                                    <span class="notification-text4">
                                        Student
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="star-icos">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="fa fa-star checked ml-1"></span>
                            <span class="perfile-text ml-1">4.0</span>
                        </div>
                        <span class="notification-text6">
                            <br />
                            It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its
                            lyout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using
                            Content here content making it look like readable English.
                        </span>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>
@endsection
