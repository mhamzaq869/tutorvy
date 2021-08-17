@extends('tutor.layouts.app')
<style>
    .card{
        height:100% !important;
    }
    .chee {
    background-color: transparent !important;
    border-right: 5px solid transparent !important;
}
.proPic{
border-radius:50%;
border:1px solid #1173FF;
}
.dropdown-menu .show{
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
.filepond{
    width:200px;
    height:200px;
}
</style>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading-first">Edit Profile</h1>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-General-tab" data-toggle="pill" href="#v-pills-General" role="tab" aria-controls="v-pills-General" aria-selected="true">General</a>
                            <a class="nav-link" id="v-pills-Education-tab" data-toggle="pill" href="#v-pills-Education" role="tab" aria-controls="v-pills-Education" aria-selected="false">Education</a>
                            <a class="nav-link" id="v-pills-Professional-tab" data-toggle="pill" href="#v-pills-Professional" role="tab" aria-controls="v-pills-Professional" aria-selected="false">Professional</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent chang_photo">
                            <div class="tab-pane fade show active chee" id="v-pills-General" role="tabpanel" aria-labelledby="v-pills-General-tab">
                                <form action="">
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <h1>Change Photo</h1>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="file" 
                                            class="filepond"
                                            name="filepond"
                                            accept="image/png, image/jpeg, image/gif" />
                                    
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleName">Name</label>
                                                <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp">
                                                <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleText">About</label>
                                                <textarea class="form-control" id="exampleText" aria-describedby="emailHelp"></textarea>
                                                <small id="textHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit">Save Changes</button>
                                        </div>
                                    
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade chee" id="v-pills-Education" role="tabpanel" aria-labelledby="v-pills-Education-tab">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Education</h1>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="input-text col-md-4">
                                            <select name="degree[]" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                                             <option value="Degree"> Degree</option>
                                            </select>
                                        </div>

                                        <div class="input-text col-md-4">
                                            <select name="major[]" class="form-select form-select-lg mb-3">
                                              <option value="">Majors</option>
                                            </select>

                                        </div>
                                        <div class="input-text col-md-4">
                                                <select name="student_level" class="form-select form-select-lg mb-3" id="levels">
                                                    <option selected value="0" >Student level</option>
                                                    <option @if(isset($user) && $user->student_level == 1) selected @endif value="1" selected>Basic</option>
                                                    <option @if(isset($user) && $user->student_level == 2) selected @endif value="2">Intermediate</option>
                                                    <option @if(isset($user) && $user->student_level == 3) selected @endif value="3">Expert</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="input-text col-md-6">
                                            <select name="institute[]" class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                             
                                                    <option  value="Institute" >Institute</option>
                                               
                                                <!-- <option  value="0">Institute3</option>
                                                <option  value="1">Punjab University</option>
                                                <option  value="2">Virtual University Of Pakistan</option> -->
                                            </select>
                                        </div>
                                        <div class="input-text col-md-6">
                                            <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                            id="grad-yea" value="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <input type="file" class="dropify" name="upload[]" id="" data-default-file="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <a class="extra-fields-customer cust_link" href="#" >+
                                                Add  more degrees
                                            </a>
                                            <div class="customer_records_dynamic mt-5"></div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade chee" id="v-pills-Professional" role="tabpanel" aria-labelledby="v-pills-Professional-tab">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Professional</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="element">
                                                <div class="row">
                                                    <div class="input-text col-md-6">
                                                        <input name="designation[]" class="form-control" title="Designation: Senior Developer at Google"  placeholder="Designation">
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <input name="organization[]" class="form-control" title="Organization Like Google" placeholder="Organization">
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="input-text col-md-6">
                                                        <input type="date" class="form-control" name="degree_start[]" placeholder="Starting date"
                                                        value="">
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <input type="date" class="form-control" name="degree_end[]" placeholder="Ending Date"
                                                        value="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons mb-5">
                                        <a href="#" class="moreExperience cust_link" >+ Add more experience</a>
                                        <!-- <button type="button" class="remove cencel-btn btn-registration"
                                            style="visibility: hidden;color: black;">remove</button> -->
                                    </div>
                                    <div class="results"></div>
                                    <div class="row ">
                                        <div class="input-text col-md-12">
                                            <select name="hour_rate" class="form-select form-select-lg mb-3"
                                                aria-label=".form-select-lg example">
                                                <option disabled >Per hour charges</option>
                                                <option value="5">$5</option>
                                                <option value="10" selected>$10</option>
                                                <option value="15">$15</option>
                                                <option value="20">$20</option>
                                                <option value="25">$25</option>
                                                <option value="30">$30</option>
                                                <option value="35">$35</option>
                                                <option value="40">$40</option>
                                                <option value="45">$45</option>
                                                <option value="50">$50</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                                <button class="schedule-btn" style="width: 180px;font-size: 14px;" type="submit">Save Changes</button>
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

    <script>
       
    </script>
@endsection
