@extends('tutor.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<style>
    .card {
        height: 100% !important;
    }

    .chee {
        background-color: transparent !important;
        border-right: 5px solid transparent !important;
    }

    .proPic {
        border-radius: 50%;
        border: 1px solid #1173FF;
    }

    .dropdown-menu .show {
        transform: translate3d(130px, 43px, 0px) !important;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 3px 15px;
        clear: both;
        font-weight: 400;
        color: #212529;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }


    .avatar-upload {
        position: relative;
        max-width: 205px;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 34px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
        padding: 8px 17px;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 4px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .nav {
    width: auto !important;
    padding: 0 !important;
     margin-left: 0 !important;
}
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #007bff !important;
}
.passport{
    display:none;
}
.license{
    display:none;
}
</style>

<link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css') }}">

@section('content')
    <!-- <div class="container">
                <p class="heading-first ml-3 mr-3">
                    Profile
                </p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="container-fluid pb-3 profile-header">
                            <div class="img-profile text-center pt-3">
                                <span style="position: absolute;right: 25px;">
                                    <img src="../assets/images/ico/yellow-rank.png" alt="yellow">
                                </span>
                                <img src="../assets/images/ico/porfile-main.png" alt="profile-image" class="w-50">
                                <p class="heading-third mt-3">
                                    Danish jaffery
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
                                    <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
                                </div>
                                <div class="col-md-9">
                                    <p class="profile-tutor">
                                        Professional
                                    </p>
                                    <p class="paragraph-text" style="line-height: 0;">
                                        Physics, Chemistry
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
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
                                    <img src="../assets/images/ico/red-icons.png" alt="blue-ico">
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

                        </div>
                        <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                            <p class="heading-forth">
                                Education
                            </p>
                            <div style="border-bottom: 1px solid #D6DBE2;"></div>
                            <p class="profile-tutor mt-3 ">
                                BSC Chemistry 2014
                            </p>
                            <p class="paragraph-text pt-0" style="line-height: 0;">
                                University of Punjab Lahore
                            </p>
                        </div>
                        <div class="container-fluid mt-3 pt-3 pb-3 mb-3 profile-header">
                            <p class="heading-forth">
                                Experience
                            </p>
                            <div style="border-bottom: 1px solid #D6DBE2;"></div>
                            <p class="profile-tutor mt-3 ">
                                BSC Chemistry 2014
                            </p>
                            <p class="paragraph-text pt-0" style="line-height: 0;">
                                University of Punjab Lahore
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="container profile-header pt-4 pb-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src="../assets/images/ico/blue-icos.png" alt="blue">
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
                                            <img src="../assets/images/ico/blue-clock.png" alt="blue-clock">
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
                                            <img src="../assets/images/ico/red-clock.png" alt="red">
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
                                            <img src="../assets/images/ico/blue-icos.png" alt="blue+">
                                        </div>
                                        <span class="heading-third ml-3">
                                            100% <br />
                                            <span class="heading-sixths">Response time</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-3 pt-4 pb-4 profile-header">
                            <div class="row">
                                <p class="heading-second ml-3 ">About tutor</p>
                                <span class="about-text ml-3">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at
                                    its lyout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed
                                    to using 'Content here, content ere', making it look like readable English. Many
                                    desktop publishing packages and
                                    web page editors now use Lorem Ipsum as their default model text, and a search for
                                    'lorem ipsum' will uncover
                                    many web sites still in their infancy.
                                </span>
                            </div>
                        </div>
                        <p class="heading-second pt-3 pb-3">
                            Courses
                        </p>
                        <div class="container pt-4 pb-4 profile-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="../assets/images/ico/course.png" alt="Avatar" style="width:100%">
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
                                                    How to create your online
                                                    courses in 3 steps.
                                                </span>
                                            </div>
                                            <button class="mt-3 w-100 schedule-btn1">Start learning</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="../assets/images/ico/NoPath.png" alt="Avatar" style="width:100%">
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
                                                    How to create your online
                                                    courses in 3 steps.
                                                </span>
                                            </div>
                                            <button class="mt-3 w-100 schedule-btn1">Start learning</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="add-new">
                                        <img src="../assets/images/ico/add-new.png" alt="add-new">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-4 pb-4 mt-4 profile-header">
                            <span class="heading-second">Student reviews</span>
                            <div class="container">
                                <div class="row">
                                    <div class="mt-3 d-flex">
                                        <div>
                                            <img src="../assets/images/ico/profile-boy.png" alt="profile-header">
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
                        </div>
                    </div>
                </div>
            </div> -->

<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading-first">Edit Profile</h1>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-General-tab" data-toggle="pill" href="#v-pills-General"
                                    role="tab" aria-controls="v-pills-General" aria-selected="true">General</a>
                                <a class="nav-link" id="v-pills-Education-tab" data-toggle="pill" href="#v-pills-Education"
                                    role="tab" aria-controls="v-pills-Education" aria-selected="false">Education</a>
                                <a class="nav-link" id="v-pills-Professional-tab" data-toggle="pill"
                                    href="#v-pills-Professional" role="tab" aria-controls="v-pills-Professional"
                                    aria-selected="false">Professional</a>
                                <a class="nav-link" id="v-pills-Verification-tab" data-toggle="pill" href="#v-pills-Verification"
                                    role="tab" aria-controls="v-pills-Verification" aria-selected="false">Verification</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="v-pills-tabContent chang_photo">
                                <div class="tab-pane fade show active chee" id="v-pills-General" role="tabpanel"
                                    aria-labelledby="v-pills-General-tab">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('tutor.profile.update', [Auth::user()->id]) }}" method="Post"
                                        enctype="multipart/form-data" id="personal">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-12">
                                                <h1>Change Photo</h1>
                                            </div>
                                            <div class="col-md-12 mt-3">

                                                <div class="avatar-upload my-4">
                                                    <div class="avatar-edit">
                                                        <input type='file' name="filepond" id="imageUpload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            style="background-image: url({{ asset(Auth::user()->picture ?? 'assets/images/ico/porfile-main.png') }});">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleName">First Name</label>
                                                    <input type="text" name="first_name" class="form-control"
                                                        value="{{ Auth::user()->first_name }}" id="exampleName"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleName">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control"
                                                        value="{{ Auth::user()->last_name }}" id="exampleName"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <p class="heading-fifth">Date of Birth</p>
                                            </div>

                                            <!-- date of birth dropdown -->
                                            <div class="col-md-4">
                                                <select class="form-select form-select-lg" id="day" name="day"></select>
                                            </div>
                                            <!--  -->
                                            <div class="col-md-4">
                                                <select class="form-select form-select-lg" name="month"
                                                    aria-label=".form-select-lg example">
                                                    <option value="Jan" @if (Auth::user()->month == 'Jan') selected @endif>January</option>
                                                    <option value="Feb" @if (Auth::user()->month == 'Feb') selected @endif>February</option>
                                                    <option value="Mar" @if (Auth::user()->month == 'Mar') selected @endif>March</option>
                                                    <option value="Apr" @if (Auth::user()->month == 'Apr') selected @endif>April</option>
                                                    <option value="May" @if (Auth::user()->month == 'May') selected @endif>May</option>
                                                    <option value="Jun" @if (Auth::user()->month == 'Jun') selected @endif>June</option>
                                                    <option value="Jul" @if (Auth::user()->month == 'Jul') selected @endif>July</option>
                                                    <option value="Aug" @if (Auth::user()->month == 'Aug') selected @endif>August</option>
                                                    <option value="Sep" @if (Auth::user()->month == 'Sep') selected @endif>September</option>
                                                    <option value="Oct" @if (Auth::user()->month == 'Oct') selected @endif>October</option>
                                                    <option value="Nov" @if (Auth::user()->month == 'Nov') selected @endif>November</option>
                                                    <option value="Dec" @if (Auth::user()->month == 'Dec') selected @endif>December</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="" name="year" class=" yearpicker form-control" placeholder="Year"
                                                    id="year">
                                            </div>



                                            <div class="col-md-12 my-3">
                                                <input id="phone" name="phone" type="tel"
                                                    value="{{ Auth::user()->phone ?? '' }}">

                                            </div>


                                            <!-- city dropdwon -->

                                            <div class="input-text col-md-6">

                                                <input id="myInput" type="" name="city" placeholder="City"
                                                    value="{{ Auth::user()->city ?? '' }}">

                                            </div>
                                            <div class="input-text col-md-6 w-100">

                                                <input id="country_selector" name="country" onchange="university()" type="">
                                                <input id="country_short" value="{{ Auth::user()->country_short }}"
                                                    name="country_short" type="" hidden>
                                                <label for="country_selector" style="display:none;">Select a country
                                                    here...</label>

                                            </div>
                                            <!-- <div class="container mt-3">
                                                <div class=" row">
                                                    <div class="input-text col-md-6">
                                                        <select id="selection" name="security" onchange="changeplh()"
                                                            class="form-select form-select-lg mb-3 "
                                                            aria-label=".form-select-lg example">
                                                            <option value="1" @if (Auth::user()->type == 1) selected @endif>ID card number</option>
                                                            <option value="2" @if (Auth::user()->type == 2) selected @endif>Social security number</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <input id="textbox" type="number" @if (Auth::user()->type == 1) name="cnic" @else name="security" @endif class="form-control" placeholder="ID card number"
                                                            value="{{ Auth::user()->cnic_security ?? '' }}">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="container mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="" name="language" id="lang" hidden>
                                                        <select class="form-select form-select-lg mb-3" id="languages-list"
                                                            name="lang_short" onchange="langshort(this)">
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example" name="gender">
                                                            <option selected disabled>Gender</option>
                                                            <option value="male" @if (Auth::user()->gender == 'male') selected @endif>Male</option>
                                                            <option value="female" @if (Auth::user()->gender == 'female') selected @endif>Female</option>
                                                            <option value="other" @if (Auth::user()->gender == 'other') selected @endif>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container form-group mt-3"></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleText">About</label>
                                                    <textarea class="form-control" name="bio" id="exampleFormControlTextarea1"
                                                        rows="5"
                                                        placeholder="Write about yourself...">{{ Auth::user()->bio ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit"
                                                    name="personal">Save Changes</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade chee" id="v-pills-Education" role="tabpanel"
                                    aria-labelledby="v-pills-Education-tab">
                                    <form action="{{ route('tutor.profile.edu', [Auth::user()->id]) }}" method="post" id="edu">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Education</h1>
                                            </div>
                                        </div>
                                        @foreach (Auth::user()->education as $i => $education)
                                            <div class="row mt-3">
                                                <div class="input-text col-md-4">
                                                    <select name="degree[]" onchange="checkLevel(this)"
                                                        class="form-select form-select-lg mb-3">
                                                        <option value="Degree"> Degree</option>
                                                        @foreach ($degrees as $degree)
                                                            <option value="{{ $degree->id }}" @if (Auth::user()->education[$i]->subject_id == $degree->id) selected @endif>{{ $degree->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="input-text col-md-4">
                                                    <select name="major[]" class="form-select form-select-lg mb-3">
                                                        <option value="">Majors</option>
                                                        @foreach ($subjects as $subject)
                                                            <option value="{{ $subject->id }}" @if ($subject->id == $education->subject_id) selected @endif>{{ $subject->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div class="input-text col-md-4">
                                                    <select name="student_grade"
                                                        class="form-select form-select-lg mb-3" id="levels">
                                                        <option value="" disabled selected>School</option>
                                                    
                                                            <option value="1">Pre Elementary School</option>
                                                            <option value="2">Elementary School</option>
                                                            <option value="3">Secondary School</option>
                                                            <option value="4">High School</option>
                                                            <option value="5"> Post Secondary</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="input-text col-md-6">
                                                    <select name="institute[]" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        <option value="Institute">Institute</option>
                                                        @foreach ($institutes as $institute)
                                                            <option value="{{ $institute->id }}" @if ($education->institute_id   == $institute->id) selected @endif>{{ $institute->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-text col-md-6">
                                                    <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                                        value="{{ $education->year }}">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <input type="file" class="dropify" name="upload[]" id=""
                                                        data-default-file="{{ asset($education->docs) }}">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <a class="extra-fields-customer cust_link" href="#">+
                                                        Add more degrees
                                                    </a>
                                                    <div class="customer_records_dynamic mt-5"></div>
                                                </div>
                                            </div>

                                        @endforeach
                                        <div class="col-md-12">
                                            <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit"
                                                id="edu2">Save Changes</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade chee" id="v-pills-Professional" role="tabpanel"
                                    aria-labelledby="v-pills-Professional-tab">
                                    <form action="{{ route('tutor.profile.profession', [Auth::user()->id]) }}" method="post"
                                        id="profession">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Professional</h1>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <div class="element">
                                                            <div class="row">
                                                                <div class="input-text col-md-6">
                                                                    <input name="designation[]" class="form-control"
                                                                        value=""
                                                                        title="Designation: Senior Developer at Google"
                                                                        placeholder="Designation">
                                                                </div>
                                                                <div class="input-text col-md-6">
                                                                    <input name="organization[]"
                                                                        value=""
                                                                        class="form-control" title="Organization Like Google"
                                                                        placeholder="Organization">
                                                                </div>
                                                            </div>
                                                            <div class="row my-3">
                                                                <div class="input-text col-md-6">
                                                                    <input type="date"
                                                                        value=""
                                                                        class="form-control" name="degree_start[]"
                                                                        placeholder="Starting date" value="">
                                                                </div>
                                                                <div class="input-text col-md-6">
                                                                    <input type="date" value=""
                                                                        class="form-control" name="degree_end[]"
                                                                        placeholder="Ending Date" value="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buttons mb-5">
                                                    <a href="#" class="moreExperience cust_link">+ Add more experience</a>
                                                    <!-- <button type="button" class="remove cencel-btn btn-registration"
                                                            style="visibility: hidden;color: black;">remove</button> -->
                                                </div>
                                                <div class="results"></div>
                                        @if(Auth::user()->professional)
                                            @foreach (Auth::user()->professional as $profession)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="element">
                                                            <div class="row">
                                                                <div class="input-text col-md-6">
                                                                    <input name="designation[]" class="form-control"
                                                                        value="{{ $profession->designation }}"
                                                                        title="Designation: Senior Developer at Google"
                                                                        placeholder="Designation">
                                                                </div>
                                                                <div class="input-text col-md-6">
                                                                    <input name="organization[]"
                                                                        value="{{ $profession->organization }}"
                                                                        class="form-control" title="Organization Like Google"
                                                                        placeholder="Organization">
                                                                </div>
                                                            </div>
                                                            <div class="row my-3">
                                                                <div class="input-text col-md-6">
                                                                    <input type="date"
                                                                        value="{{ $profession->start_date ?? '' }}"
                                                                        class="form-control" name="degree_start[]"
                                                                        placeholder="Starting date" value="">
                                                                </div>
                                                                <div class="input-text col-md-6">
                                                                    <input type="date" value="{{ $profession->end_date ?? '' }}"
                                                                        class="form-control" name="degree_end[]"
                                                                        placeholder="Ending Date" value="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buttons mb-5">
                                                    <a href="#" class="moreExperience cust_link">+ Add more experience</a>
                                                    <!-- <button type="button" class="remove cencel-btn btn-registration"
                                                            style="visibility: hidden;color: black;">remove</button> -->
                                                </div>
                                                <div class="results"></div>
                                            @endforeach
                                        @else
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="element">
                                                        <div class="row">
                                                            <div class="input-text col-md-6">
                                                                <input name="designation[]" class="form-control"
                                                                    value=""
                                                                    title="Designation: Senior Developer at Google"
                                                                    placeholder="Designation">
                                                            </div>
                                                            <div class="input-text col-md-6">
                                                                <input name="organization[]"
                                                                    value=""
                                                                    class="form-control" title="Organization Like Google"
                                                                    placeholder="Organization">
                                                            </div>
                                                        </div>
                                                        <div class="row my-3">
                                                            <div class="input-text col-md-6">
                                                                <input type="date"
                                                                    value=""
                                                                    class="form-control" name="degree_start[]"
                                                                    placeholder="Starting date" value="">
                                                            </div>
                                                            <div class="input-text col-md-6">
                                                                <input type="date" value=""
                                                                    class="form-control" name="degree_end[]"
                                                                    placeholder="Ending Date" value="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons mb-5">
                                                <a href="#" class="moreExperience cust_link">+ Add more experience</a>
                                                <!-- <button type="button" class="remove cencel-btn btn-registration"
                                                        style="visibility: hidden;color: black;">remove</button> -->
                                            </div>
                                            <div class="results"></div>
                                            @endif
                                            
                                        <!-- <div class="row ">
                                            <div class="input-text col-md-12">
                                                <select name="hour_rate" class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example">
                                                    <option disabled>Per hour charges</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 5) selected @endif value="5">$5</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 10) selected @else selected @endif value="10">$10
                                                    </option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 15) selected @endif value="15">$15</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 20) selected @endif value="20">$20</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 25) selected @endif value="25">$25</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 30) selected @endif value="30">$30</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 35) selected @endif value="35">$35</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 40) selected @endif value="40">$40</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 45) selected @endif value="45">$45</option>
                                                    <option @if (isset(Auth::user()->userdetail) && Auth::user()->userdetail->hourly_rate == 50) selected @endif value="50">$50</option>

                                                </select>

                                            </div>
                                        </div> -->
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit"
                                                    name="profession">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade chee" id="v-pills-Verification" role="tabpanel"
                                    aria-labelledby="v-pills-Verification-tab">
                                    <form action="" method="post" id="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Verification</h1>
                                            </div>
                                        </div>
                                        <div class=" row mt-3">
                                            <div class="col-md-6">
                                                <select id="selection" name="security" 
                                                    class="form-select form-select-lg mb-3 w-100"
                                                    aria-label=".form-select-lg example">
                                                    <option value="1" selected>National Identity Card</option>
                                                    <option value="2">Driving License</option>
                                                    <option value="3">Passport</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 id">
                                                <input id="textbox" type="number" placeholder="Add Id Card number">
                                            </div>
                                            <div class="col-md-6 license">
                                                <input id="textbox" type="number" placeholder="Add Driving License number">
                                            </div>
                                            <div class="col-md-6 passport">
                                                <input id="textbox" type="number" placeholder="Add Passport number">
                                            </div>
                                            <div class="col-md-6 mt-2 passport" >
                                                <input type="file" class="dropify">
                                            </div>
                                                
                                            <div class="col-md-6 mt-2 id">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-6 mt-2 id">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-6 mt-2 license">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-6 mt-2 license">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <p>
                                                    <strong>Kindly upload Card photos with white Background</strong>
                                                </p>
                                            </div>
                                        </div>


                                        <!-- <div class=" row ">
                                            <div class="col-md-6">
                                                <input id="" type="text" class="form-control" placeholder="Add Driving License Number">
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                           
                                            <div class="col-md-6 mt-2">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <input type="file" class="dropify">
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <p>
                                                    <strong>Kindly upload License photos with white Background</strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class=" row ">
                                            <div class="col-md-6">
                                                <input id="" type="text" class="form-control" placeholder="Add Passport Number">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                            </div>
                                            
                                            <div class="col-md-6 mt-2 passport">
                                                <input type="file" class="dropify ">
                                            </div>
                                            <div class="col-md-12 mt-2 passport">
                                                <p>
                                                    <strong>Kindly upload Passport photo with white Background</strong>
                                                </p>
                                            </div>
                                        </div> -->
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit" name="personal">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/js/registration.js') }}"></script>
    <script src="{{ asset('assets/js/languages.js') }}"></script>
    <script src="{{ asset('assets/js/yearpicker.js') }}"></script>
    <script src="{{ asset('assets/js/googleapi.js') }}"></script>
    <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
    @include('js_files.tutor.profileJs')
    <script>
        for (var i = 1; i <= 31; i++) {
            $("#day").append("<option value='" + i + "'" + (i == {{ Auth::user()->day ?? 1 }} ? 'selected' : '') + ">" +
                i + "</option>");
        }


        $(document).ready(function() {
            $("#year").yearpicker({
                year: {{ Auth::user()->year ?? '1990' }},
                startYear: 1950,
                endYear: 2050,
            });
        });

        $("#country_selector").countrySelect({
            defaultCountry: "{{ Auth::user()->country_short ?? '' }}",
            preferredCountries: ['ca', 'gb', 'us', 'pk']
        });

        $("#country_selector").on('change', function() {
            var short = $(this).countrySelect("getSelectedCountryData");
            $("#country_short").val(short.iso2);
        });

        var input = document.getElementById("phone");
        window.intlTelInput(input, {
            utilsScript: "{{ asset('assets/js/utils.js') }}",
        });
        // var languages_list = {...};
        (function() {
            var user_language_code = "{{ Auth::user()->language ?? 'en-US' }}";
            var option = '';
            for (var language_code in languages_list) {
                var selected = (language_code == user_language_code) ? ' selected' : '';
                option += '<option value="' + language_code + '"' + selected + '>' + languages_list[language_code] +
                    '</option>';
            }
            document.getElementById('languages-list').innerHTML = option;
        })();



        function checkLevel(opt) {
            var level = opt.options[opt.selectedIndex].getAttribute('level');
            var teach_levels = document.getElementById("levels").options;

            for (var i = 0; i < teach_levels.length; i++) {
                if (level >= teach_levels[i].value) {

                    for (var j = 0; j < i; j++) {
                        $("#levels").html("<option value='" + teach_levels[i].value + "'>" + teach_levels[i].innerHTML +
                            "</option>");
                    }
                }
            }
        }

        function langshort(opt) {
            var val = opt.options[opt.selectedIndex].innerHTML;
            $("#lang").val(val)
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#edu2").click(function(){
            $("#edu").submit();
        });

            $('.extra-fields-customer').click(function() {
                count_field = document.querySelectorAll(".customer_records").length;

                var html = `<div class=" customer_records mt-5" id="record_` + count_field + `">
                <div class="row">
                    <div class="input-text col-md-6">
                        <select name="degree[` + count_field + `]" onchange="checkLevel(this)" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                            <option  selected="">Degree</option>
                            @foreach ($degrees as $degree)
                                <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-text col-md-6">
                        <select name="major[` + count_field + `]" class="form-select form-select-lg mb-3">
                            <option value="0" selected="">Major</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="input-text col-md-6">

                        <input type="hidden" name="institute[` + count_field + `]" id="inst_id_` + count_field + `" value="">

                        <input class="form-control bs-autocomplete" id="ac-demo"
                            placeholder="University"
                            data-source="demo_source.php"
                            data-hidden_field_id="city-code" data-item_id="id"
                            data-item_label="name" autocomplete="off">

                    </div>
                    <div class="input-text col-md-6">
                        <input type="date" name="graduate_year[` + count_field + `]" class=" yearpicker form-control" id="grad-yea">
                    </div>

                </div>
                <div class="row mt-3">
                <div class="col-md-12">
                    <input type="file" class="dropify" name="upload[` + count_field + `]" id="">
                </div>
                <div class="col-md-12 mt-3">
                    <a href="#" class="removeFields" onclick="removeFields(` + count_field + `)"> Remove Fields</a>
                </div>
                </div>

                </div>`;
                $('.customer_records_dynamic').append(html);
                $('.dropify').dropify();
                // $(".form-select").select2();
                (function() {
                    "use strict";
                    var cities = @json($institutes);

                    $('.bs-autocomplete').each(function() {
                        var _this = $(this),
                            _data = _this.data(),
                            _hidden_field = $('#' + _data.hidden_field_id);

                        _this.after(
                                '<div class="bs-autocomplete-feedback form-control-feedback"><div class="loader">Loading...</div></div>'
                            )
                            .parent('.form-group').addClass('has-feedback');

                        var feedback_icon = _this.next('.bs-autocomplete-feedback');
                        feedback_icon.hide();

                        _this.autocomplete({
                                minLength: 2,
                                autoFocus: true,

                                source: function(request, response) {
                                    var _regexp = new RegExp(request.term, 'i');
                                    var data = cities.filter(function(item) {
                                        return item.name.match(_regexp);
                                    });
                                    response(data);
                                },

                                search: function() {
                                    feedback_icon.show();
                                    _hidden_field.val('');
                                },

                                response: function() {
                                    feedback_icon.hide();
                                },

                                focus: function(event, ui) {
                                    _this.val(ui.item[_data.item_label]);
                                    event.preventDefault();
                                },

                                select: function(event, ui) {
                                    _this.val(ui.item[_data.item_label]);
                                    _hidden_field.val(ui.item[_data.item_id]);
                                    event.preventDefault();
                                    $("#inst_id_" + count_field + "").val(ui.item.id)
                                    console.log(event)
                                }
                            })
                            .data('ui-autocomplete')._renderItem = function(ul, item) {
                                return $('<li></li>')
                                    .data("item.autocomplete", item)
                                    .append('<a>' + item[_data.item_label] + '</a>')
                                    .appendTo(ul);
                            };
                        // end autocomplete
                    });
                })();
            });
            $("#selection").on('change', function(){
                var ter=$(this).val();
                if(ter == 3){
                    $(".passport").css("display","block");
                    $(".id").css("display","none");
                    $(".license").css("display","none");
                }
                else if(ter == 1){
                    $(".passport").css("display","none");
                    $(".id").css("display","block");
                    $(".license").css("display","none");

                    }
                    else if(ter == 2){
                    $(".passport").css("display","none");
                    $(".id").css("display","none");
                    $(".license").css("display","block");

                    }
                });
    </script>
@endsection
