@extends('tutor.layouts.app')

@section('content')
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<style>
    .dropify-wrapper {
        height: 120px;
    }

</style>


<div class="container-fluid pb-4">
    <h1 class="mt-5">
        Add Course </h1>
</div>
<div class="container-fluid mt-3">
    <form action="{{route('tutor.course.update',[$course->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row container-bg ml-1 mr-1 pt-3 pb-3">
            <div class="col-md-7">
                <div class="container-fluid mt-3">
                    <h3>
                        Course details
                    </h3>
                    <div class=" mt-5">
                        <span class="heading-forth">Course Title</span>
                        <div class="input-serachs mt-2">
                            <input type="search" name="course_title" value="{{$course->title}}" placeholder="How to create your online courses in 3 steps." />
                        </div>
                        <div class="mt-3">
                            <span class="heading-forth">Subject</span>
                            <div class="input-options mt-2">
                                <select name="subject">
                                    <option disabled selected>Subject</option>
                                    @foreach (Auth::user()->teach as $teach)
                                    <option value="{{$teach->subject_id}}" @if($teach->subject_id == $teach->subject->id) selected @endif>{{$teach->subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="mb-3">
                                <label class="form-label heading-forth">About course</label>
                                <textarea class="form-control texteara-s" name="about" rows="7">{{$course->about}}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-5">
                <div class="mt-5"><br />
                    <div class="bg-edit text-center">
                        <label for="" class="pt-2 ">Intro Video</label>
                        <input type="file" class="dropify" name="video" id="video"
                        data-default-file="{{asset($course->video)}}">
                    </div>
                </div>
                <div class="bg-edit mt-4 text-center">
                    <label for="" class="pt-2 ">Course Thumbnail</label>
                    <input type="file" class="dropify" name="thumbnail" id="thumbnail"
                        data-default-file="{{asset($course->thumbnail)}}">

                </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="">Course levels</h3>
                    <p class="paragraph-text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered
                        alteration in some form, by injected humour, or randomized
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 pb-5">
            <div class="row">
                <div class="col-md-4 border-right mb-1">

                        <div class="text-center heading-forth">
                            Basic
                        </div>
                        <div class="adddivs-1">
                            @foreach ($course->outline->where('level',1) as $basic)
                            <div class="input-serachs mt-2">
                                <input type="search" name="basic_title[]" value="{{$basic->title}}" placeholder="Write course outline" />
                            </div>
                            <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                            name="basic_explain[]" rows="6">{{$basic->explain}}</textarea>
                            @endforeach
                        </div>
                        <div id="basicNew"></div>

                        <div class="text-center basicMore paid-text-1 btn w-100 mt-3 buttonAdd-1">
                           <a href="#basicNew"> + Add more </a>
                        </div>

                        <div class="w-100 border-bottom">&nbsp;</div>

                        <div class="mt-3 row">
                            <div class="col-md-1 ">
                                <span class="checkbox-edit"> <input type="checkbox" @if($course->basic_home_work != null) checked @endif  name="basic_home_work" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Home work</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  @if($course->basic_quiz != null) checked @endif name="basic_quiz" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Quiz</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox" @if($course->basic_final != null) checked @endif   name="basic_final" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Final test</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox" @if($course->basic_one_one != null) checked @endif name="basic_one_one" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> One to one session with tutor</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox" @if($course->basic_note != null) checked @endif name="basic_note" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Note</span>
                            </div>
                        </div>
                        <div class="input-options mt-3">
                            <select name="basic_duration">
                                <option disabled selected>Course duration</option>
                                <option @if($course->basic_duration == 1) selected @endif value="1">1 week</option>
                                <option @if($course->basic_duration == 2) selected @endif value="2">2 week</option>
                                <option @if($course->basic_duration == 3) selected @endif value="3">3 week</option>
                                <option @if($course->basic_duration == 4) selected @endif value="4">4 week</option>
                                <option @if($course->basic_duration == 5) selected @endif value="5">5 week</option>
                                <option @if($course->basic_duration == 6) selected @endif value="6">6 week</option>
                            </select>
                        </div>

                        <h3 class="mt-3 pb-2">
                            Timing
                        </h3>
                        <div class="input-options mt-2">
                            <select name="basic_days" id="basic_days" multiple role="multiselect">
                                @php $basic_days = json_decode($course->basic_days); @endphp
                                <option disabled selected required>Select days</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <div class="input-options mt-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="datetime-local" name="standard_start_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                                </div>
                                <div class="col-md-6">
                                    <input type="datetime-local" name="standard_end_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                                </div>
                            </div>
                            <h3 class="mt-3 pb-2">
                                Price
                            </h3>
                            <div class="input-options mt-2">
                               <input type="number" name="basic_price" class="form-control" value="{{$course->basic_price}}" placeholder="Add course price">
                            </div>
                        </div>


                </div>

                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        standard
                    </div>
                    <div class="adddivs-1">

                        @foreach ($course->outline->where('level',2) as $standard)
                        <div class="input-serachs mt-2">
                            <input type="search" name="standard_title[]" value="{{$standard->title}}" placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="standard_explain[]" rows="6">{{$standard->explain}}</textarea>
                        @endforeach
                    </div>

                    <div id="standardNew"></div>
                    <div class="text-center standardMore paid-text-1 btn w-100 mt-3 buttonAdd-1">
                        <a href="#standardNew"> + Add more </a>
                    </div>

                    <div class="w-100 border-bottom">&nbsp;</div>

                    <div class="mt-3 row">
                        <div class="col-md-1 ">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->standard_home_work != null) checked @endif  name="standard_home_work" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->standard_quiz != null) checked @endif name="standard_quiz"  id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->standard_final != null) checked @endif  name="standard_final" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  @if($course->standard_one_one != null) checked @endif name="standard_one_one" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->standard_note != null) checked @endif name="standard_note" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Note</span>
                        </div>
                    </div>
                    <div class="input-options mt-3">
                        <select name="standard_duration">
                            <option disabled selected>Course duration</option>
                            <option @if($course->standard_duration == 1) selected @endif value="1">1 week</option>
                            <option @if($course->standard_duration == 2) selected @endif value="2">2 week</option>
                            <option @if($course->standard_duration == 3) selected @endif value="3">3 week</option>
                            <option @if($course->standard_duration == 4) selected @endif value="4">4 week</option>
                            <option @if($course->standard_duration == 5) selected @endif value="5">5 week</option>
                            <option @if($course->standard_duration == 6) selected @endif value="6">6 week</option>
                        </select>
                    </div>

                    <h3 class="mt-3 pb-2">
                        Timing
                    </h3>
                    <div class="input-options mt-2">
                        <select name="standard_days" id="standard_days" multiple role="multiselect">
                            @php $standard_days = json_decode($course->standard_days); @endphp
                            <option disabled selected required>Select days</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                    <div class="input-options mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="datetime-local" name="standard_start_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" name="standard_end_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                            </div>
                        </div>
                        <h3 class="mt-3 pb-2">
                            Price
                        </h3>
                        <div class="input-options mt-2">
                           <input type="number" name="standard_price" class="form-control" value="{{$course->standard_price}}" placeholder="Add course price">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Update course" />
                    </div>

                </div>
                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        advance
                    </div>
                    <div class="adddivs-1">
                        @foreach ($course->outline->where('level',3) as $advance)
                        <div class="input-serachs mt-2">
                            <input type="search" name="advance_title[]" value="{{$advance->title}}" placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="advance_explain[]" rows="6">{{$advance->explain}}</textarea>
                        @endforeach
                    </div>
                    <div id="advNew"></div>
                    <div class="text-center paid-text-1 advMore btn w-100 mt-3 buttonAdd-1">
                        <a href="#advNew"> + Add more </a>
                    </div>
                    <div class="adddiv-1">

                    </div>
                    <div class="w-100 border-bottom">&nbsp;</div>

                    <div class="mt-3 row">
                        <div class="col-md-1 ">
                            <span class="checkbox-edit"> <input type="checkbox"  @if($course->advance_home_work != null) checked @endif name="advance_home_work" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->advance_quiz != null) checked @endif name="advance_quiz" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->advance_final != null) checked @endif name="advance_final" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit">
                                <input type="checkbox" @if($course->advance_one_one != null) checked @endif  name="advance_one_one" id="">
                            </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit">
                                <input type="checkbox" @if($course->advance_note != null) checked @endif name="advance_note" id="">
                            </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Note</span>
                        </div>
                    </div>
                    <div class="input-options mt-3">
                        <select name="advance_duration">
                            <option disabled selected>Course duration</option>
                            <option @if($course->advance_duration == 1) @endif value="1">1 week</option>
                            <option @if($course->advance_duration == 2) @endif value="2">2 week</option>
                            <option @if($course->advance_duration == 3) @endif value="3">3 week</option>
                            <option @if($course->advance_duration == 4) @endif value="4">4 week</option>
                            <option @if($course->advance_duration == 5) @endif value="5">5 week</option>
                            <option @if($course->advance_duration == 6) @endif value="6">6 week</option>
                        </select>
                    </div>

                    <h3 class="mt-3 pb-2">
                        Timing
                    </h3>
                    <div class="input-options mt-2">
                        <select name="advance_days" id="adv_days" multiple role="multiselect">
                            @php $advance_days = json_decode($course->advance_days); @endphp
                            <option disabled selected required>Select days</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                    <div class="input-options mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="datetime-local" name="advance_start_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" name="advance_end_time" class="form-control texteara-s mt-2 pt-2 mb-2">
                            </div>
                        </div>
                        <h3 class="mt-3 pb-2">
                            Price
                        </h3>
                        <div class="input-options mt-2">
                             <input type="number" name="advance_price" class="form-control" value="{{$course->advance_price}}" placeholder="Add course price">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end section -->
@endsection

@section('scripts')
<script>
    $(function() {
        $("#basic_days").multiselect('select',@json($basic_days));
    });
    $(function() {
        $("#standard_days").multiselect('select',@json($standard_days));
    });
    $(function() {
        $("#adv_days").multiselect('select',@json($advance_days));
    });
</script>
@endsection
