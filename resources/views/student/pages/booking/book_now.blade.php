@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
 <!-- top Fixed navbar End -->
 <section>

    <div class="container">
        <p id="sidenav-toggles" class="heading-first  mr-3 mb-4 ml-2">
            Bookings
        </p>
    </div>
    <div class="container">
        <div class="row bg-white ml-2 mr-2 card">
            <div class="col-md-12">
                <div class="board">
                    <ul class="nav nav-tabs">
                        <div class="liner"></div>
                        <li rel-index="0" class="bordr-none active chee" id="step_1">
                            <a href="#step-1" aria-controls="step-1" role="tab" data-toggle="tab">
                                <span>
                                    <img class="mt-3" src="../assets/images/ico/profile-ico.png" alt="img">
                                </span>
                            </a>
                            <p class="register-content">Personal</p>
                        </li>
                        <li rel-index="1" class="bordr-none  chee" id="step_2">
                            <a href="#step-2" aria-controls="step-2" class="disabled" role="tab" data-toggle="tab">
                                <span>
                                    <img class="mt-3" src="../assets/images/ico/bag-icon.png" alt="img">
                                </span>
                            </a>
                            <p class="register-content">Find Tutor</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-5">
                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                        <div class="col-md-12">
                            <p class="heading-third mt-3">Personal information</p>
                            <div class="row mt-5">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg"
                                            aria-label=".form-select-lg example">
                                            <option value="Select SUbject">Select SUbject</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6 d-block">
                                        <input type="text" class="form-control " name=""
                                            placeholder="Type your Topic" value="">
                                    </div>
                                </div><div class="row mt-3">
                                    <div class="input-text col-md-12">
                                        <input type="text"class="form-control " name=""
                                            placeholder="What is the Question?" value="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-12 ">
                                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Write brief about your question"></textarea>
                                    </div>
                                </div>
                              <div class="row mt-3">
                                    <div class="  col-md-12">
                                        <label for="" class="col-md-12 pl-0"><b>Upload any attachment if you want</b></label>
                                        <input type="file" class="dropify" name="upload[]" id="" data-default-file="">
                                    </div>
                              </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Class Date</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Class Time</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Lesson Duration</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="input-text col-md-6">
                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">
                                            <option value="">Select Location</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="row mt-3">
                                <div class="col-12" >
                                 
                                    <button id="step-1-next" type="button"
                                        class="btn-general  nextBtn pull-right  mb-3">
                                        &nbsp; Continue &nbsp;
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane border-right" id="step-2"
                        style="padding-bottom: 100px;background-color: white;">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-2 col-6">
                                                            <img src="../assets/images/logo/boy.jpg" alt="" class="round-border">
                                                        </div>
                                                        <div class="col-md-5 col-6">
                                                            <h3>Danish Jaffery</h3>
                                                            <p class="mb-0"><img src="../assets/images/ico/red-icon.png" alt="" class=""> Associate Professor at UKAS</p>
                                                            <p><img src="../assets/images/ico/location-pro.png" alt="" class=""> Lahore,Pakistan</p>
                                                        </div>
                                                        <div class="col-md-4 col-12">
                                                            <p>
                                                                <i class="fa fa-star text-yellow"></i>
                                                                <i class="fa fa-star text-yellow"></i>
                                                                <i class="fa fa-star text-yellow"></i>
                                                                <i class="fa fa-star text-yellow"></i>  4.0
                                                                <small class="text-grey">(25 reviews)</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p><span class="text-green pr-3">Top Ranked</span> <span class="rank_icon"><img src="../assets/images/ico/rank.png" alt=""></span> </p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    <p class="mb-2">Subject</p>
                                                    <p> <span class="info-1 info">Computer Science</span><span class="info">Maths</span></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="mb-2">Languages</p>
                                                    <p>
                                                        <span class="info-1 info lingo">French</span>
                                                        <span class="info lingo">English</span>
                                                        <span class="info lingo">Urdu</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                <p class="mb-2">Education</p>
                                                    <p>
                                                        <span class="info-1 info edu">Govt College Lahore Pakistan</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <p><strong> About Tutor </strong></p>
                                                    <p class="scrol-about">
                                                        Lorem ipsum dolor sit amet,  est commodi pariatur deserunt distinctio consectetur necessitatibus vitae obcaecati magni recusandae blanditiis sint porro placeat. Quia voluptates atque rerum ipsa architecto.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 bg-price text-center">
                                            <div class="row mt-30">
                                                <div class="col-md-12">
                                                    <p>starting from</p>
                                                    <h1 class="f-60">$51</h1>
                                                    <p>per hour</p>
                                                    <button type="button" class=" btn-general">
                                                            &nbsp; Book Class &nbsp;
                                                        </button>
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
    </div>
</section>
@endsection
