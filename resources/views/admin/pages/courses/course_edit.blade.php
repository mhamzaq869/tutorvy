@extends('admin.layouts.app')

@section('content')
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">

<style>
    .dropify-wrapper{
        height:120px;
    }
    .paid-text-1 a{
        text-decoration:none;
        color:#00132D ;
    }
</style>
  <!--section start  -->

  <div class="container-fluid pb-4">
    <h1 class="mt-5">
        Add Course </h1>
</div>
<div class="container-fluid mt-3">
    <form action="" method="POST" enctype="multipart/form-data">
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
                            <input type="search" name="course_title" placeholder="How to create your online courses in 3 steps." />
                        </div>
                        <div class="mt-3">
                            <span class="heading-forth">Subject</span>
                            <div class="input-options mt-2">
                                <select name="subject">
                                    <option disabled selected>Subject</option>
                                    <option value="1">Chemistry</option>
                                    <option value="2">Physice</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="mb-3">
                                <label class="form-label heading-forth">About course</label>
                                <textarea class="form-control texteara-s" name="about" rows="7">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus,
                                    inventore ratione! Laboriosam vitae repellendus modi fugit. Architecto numquam labore,
                                    perferendis eius autem quaerat, beatae repellendus possimus cupiditate, illo dolorem voluptatibus!
                                </textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-5">
                <div class="mt-5"><br />
                    <div class="bg-edit text-center">
                            <label for="" class="pt-2 ">Intro Video</label>
                            <input type="file" class="dropify" name="video" id="video" >

                    </div>
                    <div class="bg-edit mt-4 text-center">
                        <label for=""  class="pt-2 ">Course Thumbnail</label>
                            <input type="file" class="dropify" name="thumbnail" id="thumbnail" >

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
                        <div id="basicNew"></div>

                        <div class="text-center basicMore paid-text-1 btn w-100 mt-3 buttonAdd-1">
                           <a href="#basicNew"> + Add more </a>
                        </div>
                        <div class="w-100 border-bottom">&nbsp;</div>

                        <div class="mt-3 row">
                            <div class="col-md-1 ">
                                <span class="checkbox-edit"> <input type="checkbox" name="basic_home_work" id=""> </span>
                            </div>
                            <div class="col-md-10 ">
                                <span class="paragraph-text"> Home work</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox" name="basic_quiz" id=""> </span>
                            </div>
                            <div class="col-md-10 ">
                                <span class="paragraph-text"> Quiz</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_final" id=""> </span>
                            </div>
                            <div class="col-md-10 ">
                                <span class="paragraph-text"> Final test</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_one_one" id=""> </span>
                            </div>
                            <div class="col-md-10 ">
                                <span class="paragraph-text"> One to one session with tutor</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_note" id=""> </span>
                            </div>
                            <div class="col-md-10 ">
                                <span class="paragraph-text"> Note</span>
                            </div>
                        </div>
                        <div class="input-options mt-3">
                            <select name="basic_duration" >
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

                        <h3 class="mt-3 pb-2">
                            Timing
                        </h3>
                        <div class="input-options mt-2">
                            <select name="basic_days"  multiple role="multiselect">
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
                            <select name="basic_time">
                                <option disabled selected>Select time
                                </option>
                                <option>1 hour</option>
                                <option>2 hour</option>
                            </select>
                        </div>
                        <h3 class="mt-3 pb-2">
                        Price
                    </h3>
                    <div class="input-options mt-2">
                       <input type="text" class="form-control" placeholder="$23">
                    </div>
                        <!-- <div class="text-center mt-4">
                            <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                        </div> -->

                </div>

                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        Standard
                    </div>
                    <div class="adddivs-1">
                        <div class="input-serachs mt-2">
                            <input type="search" name="standard_title[]" placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="standard_explain[]" rows="6">Explaine</textarea>
                        <div class="input-serachs mt-2">
                            <input type="search" name="standard_title[]"  placeholder="Write course outline" />
                        </div>
                        <textarea class="form-control texteara-s mt-2 pt-2 mb-2"
                        name="standard_explain[]" rows="6">Explaine</textarea>
                    </div>
                    <div id="standardNew"></div>

                    <div class="text-center standardMore paid-text-1 btn w-100 mt-3 buttonAdd-1">
                        <a href="#standardNew"> + Add more </a>
                    </div>
                    <div class="w-100 border-bottom">&nbsp;</div>

                    <div class="mt-3 row">
                        <div class="col-md-1 ">
                            <span class="checkbox-edit"> <input type="checkbox" name="standard_home_work" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" name="standard_quiz" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_final" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_one_one" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_note" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
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
                        <select name="standard_days" multiple role="multiselect">
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
                        <select name="standard_time">
                            <option disabled selected>Select time
                            </option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <h3 class="mt-3 pb-2">
                        Price
                    </h3>
                    <div class="input-options mt-2">
                       <input type="text" class="form-control" placeholder="$23">
                    </div>
                    <!-- <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                    </div> -->

                </div>
                <div class="col-md-4 border-right mb-1">

                    <div class="text-center heading-forth">
                        Advance
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

                    <div id="advNew"></div>
                    <div class="text-center paid-text-1 advMore btn w-100 mt-3 buttonAdd-1">
                        <a href="#advNew"> + Add more </a>
                    </div>
                    <div class="w-100 border-bottom">&nbsp;</div>

                    <div class="mt-3 row">
                        <div class="col-md-1 ">
                            <span class="checkbox-edit"> <input type="checkbox" name="advance_home_work" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" name="advance_quiz" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_final" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_one_one" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_note" id=""> </span>
                        </div>
                        <div class="col-md-10 ">
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
                        <select name="advance_days" multiple role="multiselect">
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
                        <select name="advance_time">
                            <option disabled selected>Select time
                            </option>
                            <option>1 hour</option>
                            <option>2 hour</option>
                        </select>
                    </div>
                    <h3 class="mt-3 pb-2">
                        Price
                    </h3>
                    <div class="input-options mt-2">
                       <input type="text" class="form-control" placeholder="$23">
                    </div>
                    <!-- <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                    </div> -->

                </div>

                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="text-center mt-4">
                        <input type="submit" class="schedule-btn w-50 " value="Submit course" />
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </form>
</div>

<script>
$('#adv_days').multiselect({
    columns: 1,
    placeholder: 'Select Languages'
});
</script>
<!-- end section -->
@endsection
