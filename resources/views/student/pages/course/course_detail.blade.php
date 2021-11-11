@extends('student.layouts.app')
<link href="{{ asset('admin/assets/css/tutor.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/course.css') }}" rel="stylesheet">
<style>
    .circlechart {
        float: left;
        padding: 20px;
    }

    .div-1 {
        width: 3px;
        overflow-x: auto;
        white-space: nowrap;
    }

    .div-1::-webkit-scrollbar {
        width: 4px;
        height: 4px;
    }

    .div-1::-webkit-scrollbar-track {
        border-radius: 4px;
        /* -webkit-box-shadow: inset 0 0 6px red; */
    }

    .div-1::-webkit-scrollbar-thumb {
        /* border-radius: 10px; */
        background-color: #1173FF;
        /* outline: 1px solid #1173FF; */
    }

    .div-1::-webkit-scrollbar:vertical {
        display: none;
    }

    .view-bookings {
        float: left !important;
        font-size: 30px !important;
    }

    .card {
        height: auto !important;
    }

</style>
@section('content')
    <!--section start  -->
    <div class="content-wrapper " style="overflow: hidden;">
        <section id="homesection">
            <div class="container-fluid m-0 p-0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <a href="{{ route('student.courses') }}" class="decoration-none"> -->
                        <p class="heading-first mr-3 ml-3">
                            Course Detail
                        </p>
                        <!-- </a> -->
                    </div>

                </div>
                @if (Session::has('error'))
                    {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            style="margin-top:-12px">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ Session::get('error') }}
                    </div> --}}
                    <div class="col-md-12 mb-1 ">
                        <div class=" card  bg-toast bg-danger" id="errorCard">
                            <div class="card-body row">
                                <div class="col-md-1 text-center">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11 pl-0">

                                        {{Session::get('error')}}

                                    <a type="button" class="cross pull-right" onclick="document.getElementById('errorCard').style.display='none';return false;">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                <div class="row ml-2 mr-2">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class=" mt-4">
                                    <h3 class="">
                                        {{ $course->title }}
                                    </h3>
                                    <p class="paragraph-text-1">{{ $course->subject_name }} course</p>
                                    @if ($course->video != null && $course->video != '')
                                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                            style="border-radius: 8px;">
                                        </iframe>
                                    @elseif($course->thumbnail != null && $course->thumbnail != '')
                                        <img width="100%" height="345" src="{{ asset($course->thumbnail) }}"></img>
                                    @else
                                        <img width="100%" height="345"
                                            src="{{ asset('admin/assets/img/login-image/loginImage.png') }}"></img>

                                    @endif
                                    <div class="row pb-3 border-bottom mt-1">
                                        <div class="col-md-12">
                                            <p class="heading-fifth heading-fifth-0">
                                                Next batch is starting from <br />
                                                <span class="paragraph-text-1">
                                                    25 April, 2021
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <h3 class="mt-4">About course</h3>
                                    <p class="paragraph-text-2 mt-2 pb-4">
                                        {{ $course->about }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="card bg-color">
                            <div class="card-body">
                                <div class="warpper">
                                    <input class="radio" id="one" name="group" type="radio" checked>
                                    <input class="radio" id="two" name="group" type="radio">
                                    <input class="radio" id="three" name="group" type="radio">
                                    <div class="tabs pb-3">
                                        <label class="tab" id="one-tab" for="one">Basic</label>
                                        <label class="tab" id="two-tab" for="two">Standard</label>
                                        <label class="tab" id="three-tab" for="three">Advance</label>
                                    </div>
                                    <div class="panels">
                                        <div class="panel " id="one-panel">
                                            <div class="container-fluid ">

                                                <div class="panel-title">Course outline</div>
                                                @if ($course->basic_class_title == 'null')
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 text-center mt-5">
                                                            <h3 class="">No basic package added yet</h3>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row mt-3 mb-3">
                                                        <div class="col-md-4">
                                                            <div class="d-flex pb-3">
                                                                <span>
                                                                    @if ($course->basic_home_work == 'on')
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                            alt="ico" />
                                                                    @else
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                            alt="ico" />
                                                                    @endif
                                                                </span>
                                                                <span class="ml-3 heading-fifth mt-1">Home Work</span>
                                                            </div>
                                                            <div class="d-flex pb-3">
                                                                <span>
                                                                    @if ($course->basic_quiz == 'on')
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                            alt="ico" />
                                                                    @else
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                            alt="ico" />
                                                                    @endif
                                                                </span>
                                                                <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                            </div>
                                                            <div class="d-flex pb-3">
                                                                <span>
                                                                    @if ($course->basic_note == 'on')
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                            alt="ico" />
                                                                    @else
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                            alt="ico" />
                                                                    @endif
                                                                </span>
                                                                <span class="ml-3 heading-fifth mt-1">Note</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="d-flex pb-3">
                                                                <span>
                                                                    @if ($course->basic_one_one == 'on')
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                            alt="ico" />
                                                                    @else
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                            alt="ico" />
                                                                    @endif
                                                                </span>
                                                                <span class="ml-3 heading-fifth mt-1">One to One
                                                                    session</span>
                                                            </div>
                                                            <div class="d-flex pb-3">
                                                                <span>
                                                                    @if ($course->basic_final == 'on')
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                            alt="ico" />
                                                                    @else
                                                                        <img height="19px" class="mt-2"
                                                                            src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                            alt="ico" />
                                                                    @endif
                                                                </span>
                                                                <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="view-bookings text-center">
                                                                        ${{ $course->basic_price ?? 0 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <button class="schedule-btn w-100 mt-4"
                                                                        data-toggle="modal" data-target="#payModel"
                                                                        onclick="pay_now({{ $course->basic_duration }},{{ $course->basic_class_start_time }},{{ $course->basic_class_end_time }},{{ $course->basic_price }},{{ $basic_comm }},1)">Buy
                                                                        Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- <span class="heading-forth ml-2">Course outline</span> -->

                                                            <div id="main">
                                                                <!-- first -->
                                                                <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                                    @foreach ($course->outline as $outline)
                                                                        @if ($outline->level == 1)
                                                                            @if ($outline->title == '' && $outline->explain == '')
                                                                                <p>No Course Outline added.</p>
                                                                            @else
                                                                                <div class="accordion active" id="faq">
                                                                                    <div class="card m-0 p-0">

                                                                                        <div class="card-header"
                                                                                            id="outlinehead{{ $outline->id }}">
                                                                                            <a href="#"
                                                                                                class=" bg-color btn-header-link collapsed"
                                                                                                data-toggle="collapse"
                                                                                                data-target="#outline{{ $outline->id }}"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="outline{{ $outline->id }}">
                                                                                                <img class="mr-2"
                                                                                                    src="{{ asset('admin/assets/img/ico/round.png') }}" />
                                                                                                {{ $outline->title }}</a>
                                                                                        </div>
                                                                                        <div id="outline{{ $outline->id }}"
                                                                                            class="collapse show border-radius"
                                                                                            aria-labelledby="{{ $outline->id }}"
                                                                                            data-parent="#outline{{ $outline->id }}">
                                                                                            <div class="card-body">
                                                                                                {{ $outline->explain }}
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="heading-fifth"
                                                                style="font-weight: 600;">Timing</span>
                                                            <p class="paragraph-text-2 mt-1">
                                                                {{ $course->basic_duration != null ? $course->basic_duration : 0 }}
                                                                weeks
                                                                ({{ $course->course_basic_days != null ? $course->course_basic_days : '---' }})
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-md-12 scrollable">
                                                            <table class="table table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col w-150">Mon</th>
                                                                        <th scope="col w-150">Tue </th>
                                                                        <th scope="col w-150">Wed</th>
                                                                        <th scope="col w-150">Thu</th>
                                                                        <th scope="col w-150">Fri</th>
                                                                        <th scope="col w-150">Sat</th>
                                                                        <th scope="col w-150">Sun</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- classes table time and topics -->
                                                                    @foreach ($course->basic_classes as $class)
                                                                        <tr class="wordBreak">
                                                                            <td class="pt-4">
                                                                                <div class="w-150">
                                                                                    <span>{{ date('g:i a', strtotime("$class->st_time UTC")) }}
                                                                                    </span>
                                                                                    <p class="mt-5">
                                                                                        {{ date('g:i a', strtotime("$class->et_time UTC")) }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>

                                                                            @if ($class->day == 1)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 2)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 3)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 4)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 5)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 6)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 7)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif
                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                @endif
                                            </div>
                                        </div>
                                        <div class="panel" id="two-panel">

                                            <div class="container-fluid ">
                                                <div class="panel-title">Course Outline</div>
                                                @if ($course->standard_class_title == 'null')
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 text-center mt-5">
                                                            <h3 class="">No standard package added yet</h3>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row mt-3 pb-5">
                                                                <div class="col-md-4">
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->standard_home_work == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Home Work</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->standard_quiz == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->standard_note == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Note</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->standard_one_one == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">One to One
                                                                            session</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->standard_final == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="view-bookings text-center">
                                                                                ${{ $course->standard_price ?? 0 }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 ">
                                                                            <button class="schedule-btn w-100 mt-4"
                                                                                data-toggle="modal" data-target="#payModel"
                                                                                onclick="pay_now({{ $course->standard_duration }},{{ $course->standard_class_start_time }},{{ $course->standard_class_end_time }},{{ $course->standard_price }},{{ $standard_comm }},2)">Buy
                                                                                Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="main">
                                                                <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                                    @foreach ($course->outline as $outline)
                                                                        @if ($outline->level == 2)
                                                                            @if ($outline->title == '' && $outline->explain == '')
                                                                                <p>No Course Outline added.</p>
                                                                            @else
                                                                                <div class="accordion" id="faq">
                                                                                    <div class="card m-0 p-0">
                                                                                        <div class="card-header"
                                                                                            id="faqhead">
                                                                                            <a href="#"
                                                                                                class="bg-color btn-header-link collapsed"
                                                                                                data-toggle="collapse"
                                                                                                data-target="#faq11"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="faq11">
                                                                                                <img class="mr-2"
                                                                                                    src="{{ asset('admin/assets/img/ico/round.png') }}" />
                                                                                                {{ $outline->title }}
                                                                                            </a>
                                                                                        </div>
                                                                                        <div id="faq11"
                                                                                            class="collapse show border-radius"
                                                                                            aria-labelledby="faqhead3"
                                                                                            data-parent="#faq11">
                                                                                            <div class="card-body">
                                                                                                {{ $outline->explain }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="heading-fifth"
                                                                style="font-weight: 600;">Timing</span>
                                                            <p class="paragraph-text-2 mt-1">
                                                                {{ $course->standard_duration != null ? $course->standard_duration : 0 }}
                                                                weeks
                                                                ({{ $course->course_standard_days != null ? $course->course_standard_days : '---' }})
                                                                -
                                                                {{ date('g:i a', strtotime("$course->standard_start_time UTC")) }}
                                                                to
                                                                {{ date('g:i a', strtotime("$course->standard_end_time UTC")) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-0 w-100 div-1">
                                                        <div class="col-md-12">
                                                            <table class="table table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col w-150">Mon</th>
                                                                        <th scope="col w-150">Tue </th>
                                                                        <th scope="col w-150">Wed</th>
                                                                        <th scope="col w-150">Thu</th>
                                                                        <th scope="col w-150">Fri</th>
                                                                        <th scope="col w-150">Sat</th>
                                                                        <th scope="col w-150">Sun</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- classes table time and topics -->
                                                                    @foreach ($course->standard_classes as $class)
                                                                        <tr class="wordBreak">
                                                                            <td class="pt-4">
                                                                                <div class="w-150">
                                                                                    <span>{{ date('g:i a', strtotime("$class->st_time UTC")) }}
                                                                                    </span>
                                                                                    <p class="mt-5">
                                                                                        {{ date('g:i a', strtotime("$class->et_time UTC")) }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>

                                                                            @if ($class->day == 1)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 2)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 3)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 4)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 5)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 6)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 7)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif
                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                @endif
                                            </div>

                                        </div>
                                        <div class="panel" id="three-panel">

                                            <div class="container-fluid ">
                                                <div class="panel-title">Course Outline</div>
                                                @if ($course->advance_class_title == 'null')
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 text-center mt-5">
                                                            <h3 class="">No advance package added yet</h3>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row mt-3">
                                                        <div class="col-md-12 pl-0">
                                                            <div class="row mt-5 pb-5">
                                                                <div class="col-md-4">
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->advance_home_work == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Home Work</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->advance_quiz == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->advance_note == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Note</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->advance_one_one == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">One to One
                                                                            session</span>
                                                                    </div>
                                                                    <div class="d-flex pb-3">
                                                                        <span>
                                                                            @if ($course->advance_final == 'on')
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline.png') }}"
                                                                                    alt="ico" />
                                                                            @else
                                                                                <img height="19px" class="mt-2"
                                                                                    src="{{ asset('admin/assets/img/ico/circle-outline-cross.png') }}"
                                                                                    alt="ico" />
                                                                            @endif
                                                                        </span>
                                                                        <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="view-bookings text-center">
                                                                                ${{ $course->advance_price ?? 0 }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 ">
                                                                            <button class="schedule-btn w-100 mt-4"
                                                                                data-toggle="modal" data-target="#payModel"
                                                                                onclick="pay_now({{ $course->advance_duration }},{{ $course->advance_class_start_time }},{{ $course->advance_class_end_time }},{{ $course->advance_price }},{{ $advance_comm }},3)">Buy
                                                                                Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="main">
                                                                <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                                    @foreach ($course->outline as $outline)
                                                                        @if ($outline->level == 2)
                                                                            @if ($outline->title == '' && $outline->explain == '')
                                                                                <p>No Course Outline added.</p>
                                                                            @else
                                                                                <div class="accordion" id="faq">
                                                                                    <div class="card m-0 p-0">
                                                                                        <div class="card-header"
                                                                                            id="faqhead">
                                                                                            <a href="#"
                                                                                                class="bg-color btn-header-link collapsed"
                                                                                                data-toggle="collapse"
                                                                                                data-target="#faq121"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="faq121">
                                                                                                <img class="mr-2"
                                                                                                    src="{{ asset('admin/assets/img/ico/round.png') }}" />
                                                                                                {{ $outline->title }}
                                                                                            </a>
                                                                                        </div>
                                                                                        <div id="faq121"
                                                                                            class="collapse show border-radius"
                                                                                            aria-labelledby="faqhead3"
                                                                                            data-parent="#faq121">
                                                                                            <div class="card-body">
                                                                                                {{ $outline->explain }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="heading-fifth"
                                                                style="font-weight: 600;">Timing</span>
                                                            <p class="paragraph-text-2 mt-1">
                                                                {{ $course->advance_duration != null ? $course->advance_duration : 0 }}
                                                                weeks
                                                                ({{ $course->course_advance_days != null ? $course->course_advance_days : '---' }})
                                                                -
                                                                {{ date('g:i a', strtotime("$course->advance_start_time UTC")) }}
                                                                to
                                                                {{ date('g:i a', strtotime("$course->advance_end_time UTC")) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-0 w-100 div-1">
                                                        <div class="col-md-12">
                                                            <table class="table table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col w-150">Mon</th>
                                                                        <th scope="col w-150">Tue </th>
                                                                        <th scope="col w-150">Wed</th>
                                                                        <th scope="col w-150">Thu</th>
                                                                        <th scope="col w-150">Fri</th>
                                                                        <th scope="col w-150">Sat</th>
                                                                        <th scope="col w-150">Sun</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- classes table time and topics -->
                                                                    @foreach ($course->advance_classes as $class)
                                                                        <tr class="wordBreak">
                                                                            <td class="pt-4">
                                                                                <div class="w-150">
                                                                                    <span>{{ date('g:i a', strtotime("$class->st_time UTC")) }}
                                                                                    </span>
                                                                                    <p class="mt-5">
                                                                                        {{ date('g:i a', strtotime("$class->et_time UTC")) }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>

                                                                            @if ($class->day == 1)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 2)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 3)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 4)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 5)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve1 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 6)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve3 pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif

                                                                            @if ($class->day == 7)
                                                                                <td class="m-0 p-0 pt-4">
                                                                                    <div
                                                                                        class="bg-color-apporve pl-2 pr-3 m-0 p-0 w-150">
                                                                                        <span class="heading-fifth">
                                                                                            {{ $class->title }}
                                                                                        </span>
                                                                                        <p class="paragraph-text-1 mb-1">
                                                                                            <small>{{ date('g:i a', strtotime("$class->st_time UTC")) }}</small>
                                                                                        </p>
                                                                                        <p class="paragraph-text">
                                                                                            {{ $class->overview }}
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                            @else
                                                                                <td class="pt-4 pb-0">---</td>
                                                                            @endif
                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end section -->

    <!-- Modal reject-->
    <div class="modal fade" id="rejectCourseModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body  modal-bodys" style="height: 450px;">
                    <div class="container-fluid text-center pb-3 pt-3">
                        <img src="{{ asset('admin/assets/img/ico/cross-icon.png') }}" alt="verfiy" />
                        <h3 class="mt-3 ">
                            Why are you rejecting course?
                        </h3>
                        <p class="paragraph-text">
                            Write allegation that why are you rejecting course
                        </p>
                        <textarea class="form-control" rows="5" placeholder="Write reason"
                            id="c_reject_reason"></textarea>
                        <div class="mt-4 d-flex" style="position: absolute;right: 30px;">
                            <button class="cencel-btn w-150 mr-4" data-dismiss="modal">Cancel</button>
                            <button class="schedule-btn w-150"
                                onclick="changeCourseStatus(`{{ $course->id }}`,2)">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Pay Now Class Modal -->
    <div class="modal fade" id="payModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-4 pb-4">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="iconss" style="text-align: center;">

                                    <img src="{{ asset('admin/assets/img/ico/doollarss.png') }}" width="60px">
                                    <p
                                        style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                        Payment</p>
                                    <!-- <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                                class="ml-4 mr-4">
                                                Send approved time for class.
                                            </p> -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Course Details</h3>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 ">
                                <p class="mb-0">Start Date: </p>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="scdule_date">{{ date('d M, Y', strtotime($course->start_date)) }}</strong>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6">
                                <p class="mb-0">Course Duration: </p>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="class_time"></strong>
                            </div>
                            <div class="col-md-12 col-12 col-sm-12">
                                <p class=""><strong>Course Timings</strong> </p>
                            </div>
                            <div class="col-md-12">
                                <ul style="list-style-type:disc;" id="courseTime">

                                </ul>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="duration"></strong>
                            </div>
                            <div class="col-md-12">
                                <h3>Payment Details</h3>
                                @if ($defaultPay == null)
                                    <p> <i class="fa fa-info-circle"></i> You haven't select any default payment method, Please select any method by following this
                                        <a href="{{route('student.settings')}}">Payment Method</a>
                                    </p>
                                @endif
                            </div>

                            <div class="col-md-6 col-6 col-sm-6">
                                <p class="mb-0">Course Fee: </p>
                            </div>

                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="price"></strong>
                            </div>

                            <div class="col-md-6 col-6 col-sm-6">
                                <p class="mb-0">Service Fee: <span
                                        id="total_commision">%{{ $commission->commission }}</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="commission"></strong>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6">
                                <p class="mb-0">Total Fee: </p>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6 text-right">
                                <strong id="total_price"></strong>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <h3>Payment Method</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/payment-icon/paypal2.png') }}"
                                                class="w-50" alt="">

                                            <span class="round">
                                                <input id="checkbox1" name="paytype" onclick="paymentMethod(this.value)"
                                                    class="radio-custom" value="paypal" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'paypal' ? 'checked' : '') }}>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/payment-icon/skrill.png') }}"
                                                class="w-50" alt="">

                                            <span class="round">
                                                <input id="checkbox2" name="paytype" onclick="paymentMethod(this.value)"
                                                    value="skrill" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'skrill' ? 'checked' : '') }}>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/icons8-wallet-64.png') }}"
                                                class="w-50" alt="">

                                            <span class="round">
                                                <input id="checkbox3" name="paytype" onclick="paymentMethod(this.value)"
                                                    value="wallet" type="radio" {{$defaultPay == null ? '' : ($defaultPay->method == 'wallet' ? 'checked' : '') }}>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right mt-3" id="show_pay_btn">

                                <form action="{{route('student.course.payment',[$course->id])}}" id="payment" method="post" target="_blank">

                                    @csrf
                                    <div id="paytype"></div>
                                    <span id="amount"></span>
                                    <span id="comm"></span>
                                    <span id="plan"></span>
                                    <input type="submit" class="btn btn-primary" value="Pay now">

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2" style="text-align: right;">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script>
    function pay_now(duration, time, time_end, price, comm,plan) {

        $("#class_time").html(duration + " Weeks")
        $("#price").html("$" + price)
        $("#commission").html("$" + comm)
        let total = comm + price
        $("#total_price").html("$" + total)

        var amount = "<input type='hidden' name='amount' value='" + total + "' />";
        $("#payment #amount").html(amount);

        var cmssion = "<input type='hidden' name='comm' value='" + comm + "' />";
        $("#payment #comm").html(cmssion);

        var planInput = "<input type='hidden' name='plan' value='" + plan + "' />";
        $("#payment #plan").html(planInput);

        let day = []
        let times = []
        let e_time = [];


        $("#courseTime li").remove();

        for (bs in time) {
            if (bs == 1) {
                day.push('Monday')
                times.push(tConvert(time[1]))
                e_time.push(tConvert(time_end[1]))
            } else if (bs == 2) {
                day.push('Tuesday')
                times.push(tConvert(time[2]))
                e_time.push(tConvert(time_end[2]))
            } else if (bs == 3) {
                day.push('Wednesday')
                times.push(tConvert(time[3]))
                e_time.push(tConvert(time_end[3]))
            } else if (bs == 4) {
                day.push('Thursday')
                times.push(tConvert(time[4]))
                e_time.push(tConvert(time_end[4]))
            } else if (bs == 5) {
                day.push('Friday')
                times.push(tConvert(time[5]))
                e_time.push(tConvert(time_end[5]))
            } else if (bs == 6) {
                day.push('Saturday')
                times.push(tConvert(time[6]))
                e_time.push(tConvert(time_end[6]))
            }

        }
        for (var i = 0; i < day.length; i++) {
            var html = "<li><p class='mb-0'>" + day[i] + "<span class='pull-right'>" + times[i] + " - " + e_time[i] +
                "</span></p></li>"
                $("#courseTime").append(html);
        }


    }

    function tConvert(time) {
        // Check correct time format and split into components
        time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

        if (time.length > 1) { // If time format correct
            time = time.slice(1); // Remove full string match value
            time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
            time[0] = +time[0] % 12 || 12; // Adjust hours
        }
        return time.join(''); // return adjusted time or original string
    }


    let val = $('input[name="paytype"]:checked').val();
    console.log(val)
    if(val){
        let input = "<input type='hidden' name='paymentMethod' value='"+val+"' />"
        $("#payment #paytype").html(input)
    }


    function paymentMethod(value) {
        let input = "<input type='hidden' name='paymentMethod' value='" + value + "' />"
        $("#payment #paytype").html(input)
    }
</script>
@endsection
