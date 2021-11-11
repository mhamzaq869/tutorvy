@extends('tutor.layouts.app')

@section('content')
<link href="{{ asset('assets/css/course.css') }}" rel="stylesheet">

  <!--section start  -->

  <div class="container-fluidpb-4">
    <h1 class="mt-5">
        < Edit courses </h1>
</div>
<div class="container-fluid mt-3">
    <form action="{{route('tutor.storecourse')}}" method="POST" enctype="multipart/form-data">
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
                                    <option>Chemistry</option>
                                    <option>Physice</option>
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
                    <div class="bg-edit">
                        <div class="text-center">
                            <div class="text-center">
                                <input type="file" id="file" name="video" class="repeat-image-2" />
                                <label for="file">
                                    <img src="../assets/img/ico/Icon-feather-image.svg" class="repeat-image-2 mt-2"
                                        style="height: 63px;" alt="repeat" />
                                </label>
                            </div>
                            <p class="paragraph-text">Upload intro video</p>
                        </div>
                    </div>
                    <div class="bg-edit mt-4">
                        <div class="text-center">
                            <!-- <img src="../assets/img/ico/Icon-feather-upload-cloud.svg" alt="asd" class="mt-4" /> -->
                            <div class="text-center">
                                <input type="file" id="file" name="thumbnail" class="repeat-image-2" />
                                <label for="file">
                                    <img src="../assets/img/ico/Icon-feather-upload-cloud.svg"
                                        class="repeat-image-2 mt-2" style="height: 63px;" alt="repeat" />
                                </label>
                            </div>
                            <p class="paragraph-text">Upload course thumbnail </p>
                        </div>
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
                                <span class="checkbox-edit"> <input type="checkbox" name="basic_home_work" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Home work</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox" name="basic_quiz" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Quiz</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_final" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Final test</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_one_one" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> One to one session with tutor</span>
                            </div>
                        </div>
                        <div class="mt-3 row">
                            <div class="col-md-1">
                                <span class="checkbox-edit"> <input type="checkbox"  name="basic_note" id=""> </span>
                            </div>
                            <div class="col-md-11 m-0 p-0 pl-2">
                                <span class="paragraph-text"> Note</span>
                            </div>
                        </div>
                        <div class="input-options mt-3">
                            <select name="basic_duration">
                                <option disabled selected>Course duration</option>
                                <option>1 hour</option>
                                <option>2 hour</option>
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

                    <div class="text-center paid-text-1 btn w-100 mt-3 buttonAdd-1">
                        + Add more
                    </div>
                    <div class="adddiv-1">

                    </div>
                    <div class="w-100 border-bottom">&nbsp;</div>

                    <div class="mt-3 row">
                        <div class="col-md-1 ">
                            <span class="checkbox-edit"> <input type="checkbox" name="standard_home_work" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" name="standard_quiz" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_final" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_one_one" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="standard_note" id=""> </span>
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
                            <span class="checkbox-edit"> <input type="checkbox" name="advance_home_work" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Home work</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox" name="advance_quiz" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Quiz</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_final" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> Final test</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_one_one" id=""> </span>
                        </div>
                        <div class="col-md-11 m-0 p-0 pl-2">
                            <span class="paragraph-text"> One to one session with tutor</span>
                        </div>
                    </div>
                    <div class="mt-3 row">
                        <div class="col-md-1">
                            <span class="checkbox-edit"> <input type="checkbox"  name="advance_note" id=""> </span>
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
<!-- end section -->
@endsection
