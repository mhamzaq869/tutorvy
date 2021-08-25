@extends('admin.layouts.app')
<style>
    /*23 August 2021*/

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
    text-align: center;
    font-size: 30px !important;
}

.card {
    height: auto !important;
}
</style>

@section('content')
 <!--section start  -->
 <div class="container-fluid pb-4">
            <a href="">
                <a href="./report.html">
                    <h1 class="heading-first mt-5">
                        < Course </h1>
                </a>
            </a>
        </div>
        <div class="container-fluid">
            <div class="row ml-1 mr-1">
                <div class="col-md-5 bg-white pb-5">
                    <div class=" mt-4">
                        <h3 class="">
                            {{$course->title}}
                        </h3>
                        <p class="paragraph-text-1">{{$course->subject_name}} course</p>
                        @if($course->video != null && $course->video != '')
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                            style="border-radius: 8px;">
                        </iframe>
                        @else
                        <img width="100%" height="345" src="{{ asset($course->thumbnail) }}"></img>
                        @endif
                        <div class="row pb-3 border-bottom mt-1">
                            <div class="col-md-6">
                                <p class="heading-fifth heading-fifth-0">
                                    Next batch is starting from <br />
                                    <span class="paragraph-text-1">
                                        25 April, 2021
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div id="wrappers">

                                    <div id="demo">
                                        <div class="circlechart" data-percentage="55">Seats left</div>
                                    </div>
                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                        crossorigin="anonymous"></script>
                                    <script src="progresscircle.js"></script>
                                    <script>
                                        $('.circlechart').circlechart(); // Initialization
                                    </script>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-4">About course</h3>
                        <p class="paragraph-text-2 mt-2 pb-4">
                            {{$course->about}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" float-right">
                                    <button data-toggle="modal" data-target="#rejectCourseModal" class="cencel-btn">
                                        Reject
                                    </button>
                                    <button class="schedule-btn" onclick="changeCourseStatus(`{{$course->id}}`,1)">
                                        Accept
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="container-fluid bg-color  pt-4">
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="heading-forth ml-2">Course outline</span>
                
                                                <div id="main">
                                                    <!-- first -->
                                                    <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                    @foreach($course->outline as $outline)
                                                        @if($outline->level == 1)   
                                                            <div class="accordion active" id="faq">
                                                                    <div class="card m-0 p-0">
                                                                        
                                                                            <div class="card-header" id="outlinehead{{$outline->id}}">
                                                                                <a href="#" 
                                                                                    class=" bg-color btn-header-link collapsed"
                                                                                    data-toggle="collapse" data-target="#outline{{$outline->id}}"
                                                                                    aria-expanded="true" aria-controls="outline{{$outline->id}}">
                                                                                    <img class="mr-2"
                                                                                        src="{{asset('admin/assets/img/ico/round.png')}}" />
                                                                                    {{$outline->title}}</a>
                                                                            </div>
                                                                            <div id="outline{{$outline->id}}" class="collapse show border-radius"
                                                                                aria-labelledby="{{$outline->id}}" data-parent="#outline{{$outline->id}}">
                                                                                <div class="card-body">
                                                                                    {{$outline->explain}}
                                                                                </div>
                                                                            </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="heading-fifth" style="font-weight: 600;">Timing</span>
                                                <p class="paragraph-text-2 mt-1">{{ $course->basic_duration != null ? $course->basic_duration : 0 }} weeks ({{ $course->course_basic_days != null ? $course->course_basic_days : '---' }}) - {{date("g:i a", strtotime("$course->basic_start_time UTC"))}} to
                                                 {{date("g:i a", strtotime("$course->basic_end_time UTC"))}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-0 w-100 div-1">
                                            <div class="col-md-12">
                                                <table class="table table-borderless">
                                                    <thea>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">Mon</th>
                                                            <th scope="col"> &nbsp;&nbsp;&nbsp;Tue </th>
                                                            <th scope="col">Wed</th>
                                                            <th scope="col">Thu</th>
                                                            <th scope="col">Fri</th>
                                                            <th scope="col">Sat</th>
                                                            <th scope="col">Sun</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- classes table time and topics -->
                                                            <tr>
                                                                <td class="pt-4">
                                                                    <span>2pm</span>
                                                                    <p class="mt-5">4pm</p>
                                                                </td>
                            
                                                                <td class="pt-4 pb-0"></td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve1 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br />your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve3 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                            
                                                            </tr>
                            
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-5 pb-5">
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">6 classes</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Home work</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="view-bookings" >
                                                    ${{$course->basic_price}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel" id="two-panel">
                
                                    <div class="container-fluid ">
                                        <div class="panel-title">Take-Away Skills</div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <span class="heading-forth ml-2">Course outline</span>
                                                <div id="main">
                                                    <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                        @foreach($course->outline as $outline)
                                                            @if($outline->level == 2) 
                                                            <div class="accordion" id="faq">
                                                                <div class="card m-0 p-0">
                                                                    <div class="card-header" id="faqhead">
                                                                        <a href="#"
                                                                            class="bg-color btn-header-link collapsed"
                                                                            data-toggle="collapse" data-target="#faq11"
                                                                            aria-expanded="true" aria-controls="faq11">
                                                                            <img class="mr-2"
                                                                                src="{{asset('admin/assets/img/ico/round.png')}}" />
                                                                                {{$outline->title}}
                                                                        </a>
                                                                    </div>
                                                                    <div id="faq11" class="collapse show border-radius"
                                                                        aria-labelledby="faqhead3" data-parent="#faq11">
                                                                        <div class="card-body">
                                                                        {{$outline->explain}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="heading-fifth" style="font-weight: 600;">Timing</span>
                                                <p class="paragraph-text-2 mt-1">{{ $course->standard_duration != null ? $course->standard_duration : 0 }} weeks ({{ $course->course_standard_days != null ? $course->course_standard_days : '---' }}) - {{date("g:i a", strtotime("$course->standard_start_time UTC"))}} to
                                                {{date("g:i a", strtotime("$course->standard_end_time UTC"))}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-0 w-100 div-1">
                                            <div class="col-md-12">
                                                <table class="table table-borderless">
                                                    <thea>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">Mon</th>
                                                            <th scope="col"> &nbsp;&nbsp;&nbsp;Tue </th>
                                                            <th scope="col">Wed</th>
                                                            <th scope="col">Thu</th>
                                                            <th scope="col">Fri</th>
                                                            <th scope="col">Sat</th>
                                                            <th scope="col">Sun</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- classes table time and topics -->
                                                            <tr>
                                                                <td class="pt-4">
                                                                    <span>2pm</span>
                                                                    <p class="mt-5">4pm</p>
                                                                </td>
                            
                                                                <td class="pt-4 pb-0"></td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve1 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br />your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve3 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                            
                                                            </tr>
                            
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-5 pb-5">
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">6 classes</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Home work</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="view-bookings" >
                                                    ${{$course->standard_price}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                                <div class="panel" id="three-panel">
                
                                    <div class="container-fluid ">
                                        <div class="panel-title">Note on Prerequisites</div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <span class="heading-forth ml-2">Course outline</span>
                                                <div id="main">
                                                    <div class="container-fluid m-0 p-0 border-bottom pb-3">
                                                    @foreach($course->outline as $outline)
                                                            @if($outline->level == 2) 
                                                            <div class="accordion" id="faq">
                                                                <div class="card m-0 p-0">
                                                                    <div class="card-header" id="faqhead">
                                                                        <a href="#"
                                                                            class="bg-color btn-header-link collapsed"
                                                                            data-toggle="collapse" data-target="#faq11"
                                                                            aria-expanded="true" aria-controls="faq11">
                                                                            <img class="mr-2"
                                                                                src="{{asset('admin/assets/img/ico/round.png')}}" />
                                                                                {{$outline->title}}
                                                                        </a>
                                                                    </div>
                                                                    <div id="faq11" class="collapse show border-radius"
                                                                        aria-labelledby="faqhead3" data-parent="#faq11">
                                                                        <div class="card-body">
                                                                        {{$outline->explain}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="heading-fifth" style="font-weight: 600;">Timing</span>
                                                <p class="paragraph-text-2 mt-1">{{ $course->advance_duration != null ? $course->advance_duration : 0 }} weeks ({{ $course->course_advance_days != null ? $course->course_advance_days : '---' }}) - {{date("g:i a", strtotime("$course->advance_start_time UTC"))}} to
                                                {{date("g:i a", strtotime("$course->advance_end_time UTC"))}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-0 w-100 div-1">
                                            <div class="col-md-12">
                                                <table class="table table-borderless">
                                                    <thea>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">Mon</th>
                                                            <th scope="col"> &nbsp;&nbsp;&nbsp;Tue </th>
                                                            <th scope="col">Wed</th>
                                                            <th scope="col">Thu</th>
                                                            <th scope="col">Fri</th>
                                                            <th scope="col">Sat</th>
                                                            <th scope="col">Sun</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- classes table time and topics -->
                                                            <tr>
                                                                <td class="pt-4">
                                                                    <span>2pm</span>
                                                                    <p class="mt-5">4pm</p>
                                                                </td>
                            
                                                                <td class="pt-4 pb-0"></td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve1 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br />your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                                                                <td class="m-0 p-0">
                                                                    <div class="bg-color-apporve3 pl-2 pr-3 m-0 p-0">
                                                                        <span class="heading-fifth">
                                                                            Live class
                                                                        </span>
                                                                        <p class="paragraph-text-1">
                                                                            2pm
                                                                        </p>
                                                                        <p class="paragraph-text">
                                                                            Jump start into
                                                                            <br /> your live class with <br />
                                                                            students.
                                                                        </p>
                                                                    </div>
                                                                </td>
                            
                            
                                                            </tr>
                            
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-5 pb-5">
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">6 classes</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Home work</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Quiz</span>
                                                </div>
                                                <div class="d-flex pb-3">
                                                    <span>
                                                        <img height="19px" class="mt-2" src="{{asset('admin/assets/img/ico/circle-outline.png')}}" alt="ico" />
                                                    </span>
                                                    <span class="ml-3 heading-fifth mt-1">Final test</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="view-bookings" >
                                                    ${{$course->advance_price}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- end section -->
               <!-- Modal reject-->
               <div class="modal fade" id="rejectCourseModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body  modal-bodys" style="height: 450px;">
                                <div class="container-fluid text-center pb-3 pt-3">
                                    <img src="{{asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                                    <h3 class="mt-3 ">
                                        Why are you rejecting course?
                                    </h3>
                                    <p class="paragraph-text">
                                        Write allegation that why are you rejecting course
                                    </p>
                                    <textarea class="form-control" rows="5" placeholder="Write reason" id="c_reject_reason"></textarea>
                                    <div class="mt-4 d-flex" style="position: absolute;right: 30px;">
                                        <button class="cencel-btn w-150 mr-4" data-dismiss="modal">Cancel</button>
                                        <button class="schedule-btn w-150" onclick="changeCourseStatus(`{{$course->id}}`,2)">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js')
  
@include('js_files.admin.course')
@endsection
