@extends('tutor.layouts.app')

@section('content')
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">
<style>
    .dropify-wrapper {
        height: 120px;
    }

</style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0rc.0/dist/js/select2.min.js"></script>

  <!--section start  -->

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

                            <div class="input-serachs mt-2">
                                <input type="search" name="basic_title[]" placeholder="Write course outline" />
                            </div>
                            <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                            name="basic_explain[]" rows="6">Explaine</textarea>
                            <div class="input-serachs mt-2">
                                <input type="search" name="basic_title[]"  placeholder="Write course outline" />
                            </div>
                            <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                            name="basic_explain[]" rows="6">Explaine</textarea>
                        </div>

                        <div class="text-center paid-text-1 btn w-100 mt-3 buttonAdd-1">
                            + Add more
                        </div>
                        <div class="adddiv-1">

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
                            <select name="basic_duration" class="js-example-placeholder-multiple" multiple="multiple">
                                <option disabled selected>Course duration</option>
                                <option value="1" @if($course->basic_duration == 1) selected @endif>1 hour</option>
                                <option value="2" @if($course->basic_duration == 2) selected @endif>2 hour</option>
                            </select>
                        </div>

                        <h3 class="mt-3 pb-2">
                            Timing
                        </h3>
                        <div class="input-options mt-2">
                            <select name="basic_days">
                                <option disabled selected>Select days</option>
                                <option>1 hour</option>
                                <option>2 hour</option>
                            </select>
                        </div>
                        <div class="input-options mt-2">
                            <select name="basic_time">
                                <option disabled selected>Select time
                                </option>
                                <option>1 hour</option>
                                <option>2 hour</option>
                            </select>
                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                        </div>

                </div>

                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        standard
                    </div>
                    <div class="adddivs-1">
                        <div class="input-serachs mt-2">
                            <input type="search" name="standard_title[]"  placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="standard_explain[]" rows="6">Explaine</textarea>
                        <div class="input-serachs mt-2">
                            <input type="search" name="standard_title[]"  placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="standard_explain[]" rows="6">Explaine</textarea>
                    </div>

                    <div class="text-center paid-text-1 btn w-100 mt-3 buttonAdd-1">
                        + Add more
                    </div>
                    <div class="adddiv-1">

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
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>

                    <h3 class="mt-3 pb-2">
                        Timing
                    </h3>
                    <div class="input-options mt-2">
                        <select name="standard_days">
                            <option disabled selected>Select days</option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <div class="input-options mt-2">
                        <select name="standard_time">
                            <option disabled selected>Select time
                            </option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                    </div>

                </div>
                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        advance
                    </div>
                    <div class="adddivs-1">
                        <div class="input-serachs mt-2">
                            <input type="search" name="advance_title[]" placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="advance_explain[]" rows="6">Explaine</textarea>
                        <div class="input-serachs mt-2">
                            <input type="search" name="advance_title[]"  placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="advance_explain[]" rows="6">Explaine</textarea>
                    </div>

                    <div class="text-center paid-text-1 btn w-100 mt-3 buttonAdd-1">
                        + Add more
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
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->advance_one_one != null) checked @endif  name="advance_one_one" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" @if($course->advance_note != null) checked @endif name="advance_note" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Note</span>
                        </div>
                    </div>
                    <div class="input-options mt-3">
                        <select name="advance_duration">
                            <option disabled selected>Course duration</option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>

                    <h3 class="mt-3 pb-2">
                        Timing
                    </h3>
                    <div class="input-options mt-2">
                        <select name="advance_days">
                            <option disabled selected>Select days</option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <div class="input-options mt-2">
                        <select name="advance_time">
                            <option disabled selected>Select time
                            </option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(".js-example-placeholder-multiple").select2({
        placeholder: "Select days"
    });
</script>
<!-- end section -->
@endsection
