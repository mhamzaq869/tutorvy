<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Pages</title>
    <!-- CSS only -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap end -->
    <!--  -->
    <link href="../assets/css/registerpage.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/demo.css">
    <link rel="stylesheet" href="../assets/css/intlTelInput.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- style css -->
    <link href="../assets/css/registration.css" rel="stylesheet">

    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/countrySelect.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/country_flag.css') }}"> --}}
    <!-- Year Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css') }}" />

    <!-- Moment Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <style>
        .error {
            color: red !important;
            font-weight: 500;
        }

        .cust_link {
            font-size: 16px;
            font-family: Poppins;
        }

        .cust_link:hover {

            text-decoration: none;
        }

        .select2-container .select2-selection--single {
            height: 46px;
            width: 100% !important;

        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 11px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 47px;
        }

        .select2 {
            width: 100% !important;
        }

        .is-invalid {
            color: red;
            border-color:red;
        }

        ul.bs-autocomplete-menu {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            max-height: 200px;
            overflow: auto;
            z-index: 9999;
            border: 1px solid #eeeeee;
            border-radius: 4px;
            background-color: #fff;
            box-shadow: 0px 1px 6px 1px rgba(0, 0, 0, 0.4);
        }

        ul.bs-autocomplete-menu a {
            font-weight: normal;
            color: #333333;
        }

        .ui-helper-hidden-accessible {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .ui-state-active,
        .ui-state-focus {
            color: #23527c;
            background-color: #eeeeee;
        }

        .bs-autocomplete-feedback {
            width: 1.5em;
            height: 1.5em;
            overflow: hidden;
            margin-top: .5em;
            margin-right: .5em;
        }

        .loader {
            font-size: 10px;
            text-indent: -9999em;
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            background: #333;
            background: -moz-linear-gradient(left, #333333 10%, rgba(255, 255, 255, 0) 42%);
            background: -webkit-linear-gradient(left, #333333 10%, rgba(255, 255, 255, 0) 42%);
            background: -o-linear-gradient(left, #333333 10%, rgba(255, 255, 255, 0) 42%);
            background: -ms-linear-gradient(left, #333333 10%, rgba(255, 255, 255, 0) 42%);
            background: linear-gradient(to right, #333333 10%, rgba(255, 255, 255, 0) 42%);
            position: relative;
            -webkit-animation: load3 1.4s infinite linear;
            animation: load3 1.4s infinite linear;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
        }

        .loader:before {
            width: 50%;
            height: 50%;
            background: #333;
            border-radius: 100% 0 0 0;
            position: absolute;
            top: 0;
            left: 0;
            content: '';
        }

        .loader:after {
            background: #fff;
            width: 75%;
            height: 75%;
            border-radius: 50%;
            content: '';
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        @-webkit-keyframes load3 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes load3 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .stat{
            border: 1px solid transparent;
            transition: 0.3s all ease;

        }
        .stat:hover{
            border: 1px solid #007bff;
            color:#007bff;
        }

    </style>

</head>

<body>


    <section id="body">
        <div class="container">
            <div class="row">
                <div class="col-md-6 nav-hide">
                    <div class="" style="position: sticky;top: 10%;">
                        <div class="login-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="text">
                            <p class="learn">Learn from the best tutors</p>
                            <p class="time"> Anytime, Anywhere</p>
                        </div>
                        <div class="Register mt-4">

                            Register yourself on Tutorvy and learn or teach anything <br /> from anywhere.
                        </div>
                        <div style="margin-top: 70px;">
                            <img src="../assets/images/login-image/loginImage.png" style="width: 90%;">
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card">
                    <p class="mt-5 ml-3 heading-first">Create a student account</p>
                    <p class="ml-3 heading-sixth">Already have an account?
                        <a href="{{route('login')}}" class="text-primary" style="text-decoration:none">
                            Sign in
                        </a>
                    </p>

                    <div class="row stu_reg mt-5">
                        <div class="col-md-12">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active w-50 stat" id="v-pills-General-tab"  role="tab" href="{{route('student.register')}}"  aria-selected="true">As a Student</a>
                                <a class="nav-link w-50 stat " id="v-pills-Security-tab" href="{{route('register')}}" role="tab" aria-selected="false">As a Teacher</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- <div class="board">
                                <ul class="nav nav-tabs">
                                    <div class="liner student_liner"></div>
                                    <li rel-index="0" class="bordr-none active">
                                        <a href="#step-1" aria-controls="step-1" role="tab" data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/profile-ico.png" alt="img">
                                            </span>
                                        </a>
                                        <p class="register-content">Personal</p>
                                    </li>
                                    <li rel-index="1" class="bordr-none">
                                        <a href="#step-2" class=" disabled" aria-controls="step-2" role="tab"
                                            data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/bag-icon.png"
                                                    alt="bag-icon">
                                            </span>
                                        </a>
                                        <p class="register-content">Educational</p>
                                    </li>
                                </ul>
                            </div> -->
                            <form action="{{ url('register') }}" method="post" id="register"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="3">
                                <div class="tab-content mt-5">
                                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3">Personal information</p>
                                            <div class="row mt-5">
                                                <div class="input-text col-md-6 d-block">
                                                    <input type="" class="form-control csd  @error('first_name') is-invalid @enderror" name="first_name" id="fname"
                                                    placeholder="First Name" value="{{$user->first_name ?? ''}}">
                                                    <span for="" id="fname_error" class="invalid-feedback" role="alert">
                                                        <strong> This field is required </strong>  
                                                    </span>

                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="input-text col-md-6 d-block">
                                                        <input type="" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                        placeholder="Last Name" value="{{$user->last_name ?? ''}}" id="lname">
                                                        <!-- <label for="" id="lname_error" class="text-red"><strong> This field is required </strong>  </label> -->
                                                        <span for="" id="lname_error" class="invalid-feedback" role="alert">
                                                            <strong> This field is required </strong>  
                                                        </span>
                                                        @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-3 d-block">
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                    placeholder="Email Address" value="{{$user->email ?? ''}}" id="email">
                                                    <!-- <label for="" id="email_error" class="text-red"><strong> This field is required </strong>  </label> -->
                                                    <span for="" id="email_error" class="invalid-feedback" role="alert">
                                                        <strong> This field is required </strong>  
                                                    </span>
                                                    <span for="" id="email_error_duplicate" class="invalid-feedback" role="alert">
                                                        <strong> This email already exists.  <a href="{{ route('login') }}" class="text-primary" style="text-decoration:none">Log in?</a> </strong>  
                                                    </span>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-3  d-block">
                                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                                                    placeholder="Password" id="password">
                                                    <!-- <label for="" id="password_error" class="text-red"><strong> This field is required </strong>  </label> -->
                                                    <small id="passTech">
                                                            Field should have at least:
                                                            <ul>
                                                                <li>One uppercase letter</li>
                                                                <li>One lowercase letter</li>
                                                                <li>One numeric value</li>
                                                                <li>One special character</li>
                                                                <li>8 characters</li>
                                                            </ul>
                                                        </small>
                                                    <span for="" id="password_error" class="invalid-feedback" role="alert">
                                                        <strong> This field is required </strong>  
                                                    </span>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <!-- <p class="heading-fifth">Date of Birth</p>
                                            <div class="row mt-4 mb-3">
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" id="day" name="day">
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" name="month"
                                                        aria-label=".form-select-lg example">
                                                        <option value="Jan" @if(isset($user) && $user->month == 'Jan') @endif>January</option>
                                                        <option value="Feb" @if(isset($user) && $user->month == 'Feb') @endif>February</option>
                                                        <option value="Mar" @if(isset($user) && $user->month == 'Mar') @endif>March</option>
                                                        <option value="Apr" @if(isset($user) && $user->month == 'Apr') @endif>April</option>
                                                        <option value="May" @if(isset($user) && $user->month == 'May') @endif>May</option>
                                                        <option value="Jun" @if(isset($user) && $user->month == 'Jun') @endif>June</option>
                                                        <option value="Jul" @if(isset($user) && $user->month == 'Jul') @endif>July</option>
                                                        <option value="Aug" @if(isset($user) && $user->month == 'Aug') @endif>August</option>
                                                        <option value="Sep" @if(isset($user) && $user->month == 'Sep') @endif>September</option>
                                                        <option value="Oct" @if(isset($user) && $user->month == 'Oct') @endif>October</option>
                                                        <option value="Nov" @if(isset($user) && $user->month == 'Nov') @endif>November</option>
                                                        <option value="Dec" @if(isset($user) && $user->month == 'Dec') @endif>December</option>
                                                    </select>   
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="" name="year" class=" yearpicker form-control"
                                                    placeholder="Year" id="year">
                                                </div>

                                            </div> -->
                                            <!-- <div class="row">
                                                <div class="col-md-12 mt-3 mb-3">
                                                    <input id="phone" name="phone" type="tel"
                                                        value="{{ $user->phone ?? '' }}" id="phone" placeholder="Phone Number">
                                                        <label for="" id="phone_error" class="text-red"><strong> This field is required </strong>  </label>
                                                    <span for="" id="phone_error" class="invalid-feedback" role="alert">
                                                        <strong> This field is required </strong>  
                                                    </span>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                
                                                    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
                                                    <script>
                                                        var input = document.getElementById("phone");
                                                        window.intlTelInput(input, {
                                                            utilsScript: "{{ asset('assets/js/utils.js') }}",
                                                        });
                                                    </script>
                                                </div>
                                                <div class="input-text col-md-12">
                                                    <input type="" name="address" class="form-control  @error('address') is-invalid @enderror"
                                                    placeholder="Address">
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> -->

                                            <!-- city dropdwon -->
                                            <div class="row mt-3">

                                                <!-- <div class="input-text col-md-6">
                                                    <div class="autocomplete " style="width:300px;">
                                                        <input id="myInput" type="" name="city" placeholder="City" value="{{$user->city ?? ''}}">
                                                    </div>
                                                </div>
                                                
                                                <div class="input-text col-md-6">
                                                    <div class="form-item">
                                                        <input id="country_selector" name="country" type="">
                                                        <input id="country_short" name="country_short" type="" hidden>
                                                        <label for="country_selector" style="display:none;">Select a
                                                            country here...</label>
                                                    </div>

                                                </div> -->
                                               
                                                <div class="container mt-3">
                                                    <!-- <div class=" row">
                                                        <div class="input-text col-md-6">
                                                            <select id="selection" name="security"
                                                                onchange="changeplh()"
                                                                class="form-select form-select-lg mb-3 "
                                                                aria-label=".form-select-lg example">
                                                                <option value="1" @if(isset($user) && $user->type == 1) selected @endif>ID card number</option>
                                                                <option value="2" @if(isset($user) && $user->type == 2) selected @endif>Social security number</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-text col-md-6">
                                                            <input id="textbox" type="number" @if (isset($user) && $user->type == 1) name="cnic" @else name="security" @endif class="form-control"
                                                                placeholder="ID card number"
                                                                value="{{ $user->cnic_security ?? '' }}">
                                                        </div>
                                                        
                                                    </div> -->
                                                    <!-- <div class="row ">
                                                        <div class="col-md-6 d-block">
                                                            <input type="" name="language" id="lang" hidden>
                                                            <select class="form-select form-select-lg mb-3"
                                                                id="languages-list" name="lang_short" onchange="langshort(this)">
                                                            </select>
                                                            <span for="" id="language_error" class="invalid-feedback" role="alert">
                                                                <strong> This field is required </strong>  
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6 d-block">
                                                            <div class="form-item">
                                                                <select
                                                                    class="form-select form-select-lg mb-3  @error('gender') is-invalid @enderror"
                                                                    aria-label=".form-select-lg example" name="gender" id="gender">
                                                                    <option selected disabled>Gender</option>
                                                                    <option value="male" @if (isset($user) && $user->gender === 'male') selected @endif>Male</option>
                                                                    <option value="female" @if (isset($user) && $user->gender === 'female') selected @endif>Female
                                                                    </option>
                                                                </select>
                                                                <label for="" id="gender_error" class="text-red"><strong> This field is required </strong>  </label>
                                                                <span for="" id="gender_error" class="invalid-feedback" role="alert">
                                                                    <strong> This field is required </strong>  
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> -->
                                                </div>

                                                <div class="container form-group mt-3">
                                                    <div class="row">
                                                        <!-- <div class="col-md-12">
                                                            <textarea class="form-control" name="bio"
                                                            id="exampleFormControlTextarea1" rows="5"
                                                            placeholder="Write about yourself...">{{$user->bio ?? ''}}</textarea>
                                                        </div> -->
                                                        <div class="col-md-12 text-right ">
                                                            <!-- <input type="submit"
                                                                class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5"
                                                                value=" Save for Later"> -->

                                                            <button id="finish"  type="submit"
                                                                class="btn btn-lg btn-registration schedule-btn  nextBtn pull-right  ">
                                                                &nbsp; Join &nbsp;
                                                            </button>
                                                        </div>

                                                        <div class="col-md-12 text-right">

                                                            <div class="social-Icon">
                                                                    <div class="Google">
                                                                        <a href="#">
                                                                            <img class="mr-3" src="{{asset('assets/images/ico/google.png')}}" alt="google">
                                                                            Continue with Google
                                                                        </a>
                                                                    </div>
                                                                    <div class="facebook">
                                                                        <img class="mr-3" src="{{asset('assets/images/ico/facebook(1).png')}}" alt="facebook">
                                                                        Continue with Facebook
                                                                    </div>
                                                                    <div class="Apple">
                                                                        <img class="mr-3" src="{{asset('assets/images/ico/apple.png')}}" alt="apple">
                                                                        Continue with Apple
                                                                    </div>
                                                                    <div class="Policy-text" style="display: flex;">
                                                                        <p class="by-text">
                                                                            Protected by reCAPTCHA and subject to the Google</p>
                                                                        <p class="Privacy-text">
                                                                            Privacy
                                                                        </p>
                                                                    </div>
                                                                    <div class="" style="display: flex;">
                                                                        <p class="policy-text1">
                                                                            Policy and
                                                                        </p>
                                                                        <p class="Privacy-text">
                                                                            Terms of Service.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div role="tabpanel" class="tab-pane border-right" id="step-2"
                                        style="padding-bottom: 100px;background-color: white;">
                                        <div class="col-md-12 ">
                                            <p class="heading-third mt-3">Educational information </p>
                                                <div class=" customer_records mt-5">
                                                    <div class="row">
                                                        <div class="input-text col-md-12">
                                                            <select name="degree"
                                                                class="form-select form-select-lg mb-3">
                                                                <option value="">Degree</option>
                                                            @foreach($degrees as $degree)
                                                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                            @endforeach
                                                            </select>
                                                            <select name="std_grade"
                                                                class="form-select form-select-lg mb-3">
                                                                <option value="" disabled selected>Which grade you are in?</option>
                                                            
                                                                    <option value="1">Pre Elementary School</option>
                                                                    <option value="2">Elementary School</option>
                                                                    <option value="3">Secondary School</option>
                                                                    <option value="4">High School</option>
                                                                    <option value=" 5"> Post Secondary</option>
                                                            
                                                            </select>
                                                        </div>

                                                        <div class="mt-3 col-md-12">
                                                            <p > <strong>What subject do you need help with?</strong> </p>
                                                            <select name="major"
                                                                class="form-select form-select-lg mb-3">
                                                                <option value="">Major</option>
                                                                @foreach($subjects as $subject)
                                                                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                                @endforeach
                                                            
                                                            </select>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <select name="std_subj"
                                                                        class="form-select form-select-lg mb-3">
                                                                        <option value="" disabled selected>Main Category</option>
                                                                        @foreach($subject_cat as $subject)
                                                                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                                        @endforeach
                                                                    
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select name="std_learn"
                                                                        class="form-select form-select-lg mb-3">
                                                                        <option value="" disabled selected>Sub Category</option>
                                                                        @foreach($subjects as $subject)
                                                                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                                        @endforeach
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            

                                                        </div>

                                                    
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="input-text col-md-12">
                                                            <select name="subject"
                                                                class="form-select form-select-lg mb-3">
                                                                <option value="">Which Subject do you want to learn?</option>
                                                                @foreach($subjects as $subject)
                                                                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                                @endforeach
                                                            
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-8"></div>
                                                    <div class="col-4">
                                                        <div class="btn-later">
                                                            <button type="submit"
                                                                class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5 ">Save
                                                                for Later
                                                            </button>
                                                            <button type="submit" id="finish"
                                                                class="btn btn-lg   schedule-btn  nextBtn pull-right ml-4 btn-registration">&nbsp;
                                                                Finish &nbsp;
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div> -->
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset('assets/js/ui-autocomplete.js') }}"></script>
        <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
        <script src="{{ asset('assets/js/registration.js') }}"></script>
        <script src="{{ asset('assets/js/yearpicker.js') }}"></script>
        <script src="{{ asset('assets/js/languages.js') }}"></script>
        <script src="{{ asset('assets/js/googleapi.js') }}"></script>
        <script src="{{ asset('assets/js/multiselect.js') }}"></script>
        <script src="{{ asset('assets/js/dropify.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.js') }} "></script>
        <script>
            for (var i = 1; i <= 31; i++) {
                $("#day").append("<option value='" + i + "'" + (i == {{ $user->day ?? 1 }} ? 'selected' : '') + ">" + i +
                    "</option>");
            }

            $("#finish").on('click', function() {
                $(this).attr('name', 'finish');
            });
            $(document).ready(function() {
                $("#year,#grad-year").yearpicker({
                    year: {{ $user->year ?? '1990' }},
                    startYear: 1950,
                    endYear: 2050,
                });
                $("#teach_error").hide();
                $(".text-red").hide();
            });

            $("#country_selector").countrySelect({
                defaultCountry: "{{ $user->country_short ?? '' }}",
                preferredCountries: ['ca', 'gb', 'us', 'pk']
            });

            $("#country_selector").on('change', function() {
                var short = $(this).countrySelect("getSelectedCountryData");
                $("#country_short").val(short.iso2);
            });

            // var languages_list = {...};
            (function() {
                var user_language_code = "{{ $user->language ?? 'en-US' }}";
                var option = '<option value="" disabled selected> Preffered Language</option>';;
                for (var language_code in languages_list) {
                    // var selected = (language_code == user_language_code) ? ' selected' : '';
                    option += '<option value="' + language_code + '">' + languages_list[language_code] +
                        '</option>';
                }
                // document.getElementById('languages-list').innerHTML = option;
            })();

            $('.extra-fields-customer').click(function() {
                count_field = document.querySelectorAll(".customer_records").length;

                var html = `<div class=" customer_records mt-5" id="record_` + count_field + `">
                <div class="row">
                    <div class="input-text col-md-6">
                        <select name="degree[` + count_field + `]" onchange="checkLevel(this)" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                            <option  selected="">Degree</option>
                        
                        </select>
                    </div>

                    <div class="input-text col-md-6">
                        <select name="major[` + count_field + `]" class="form-select form-select-lg mb-3">
                            <option value="0" selected="">Major</option>
                           
                        </select>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="input-text col-md-6">

                        <input type="hidden" name="institute[` + count_field + `]" id="inst_id_` + count_field + `" value="">

                        <input class="form-control bs-autocomplete" id="ac-demo"
                            placeholder="Type two characters of a Institute name..."
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
            
            });
            $("#register").validate({
                rules: {
                    // compound rule
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    
                },
                messages: {
                    email: {
                        required: "We need your email address to contact you",
                        email: "Your email address must be in the format of name@domain.com"
                    }
                }
            });

            $(document).ready(function() {
                $(".dropify").dropify();
                $(".form-select").select2();
                $(".text-red").hide();
            });

            function university() {

                $.ajax({
                    url: "{{ route('uni.name') }}",
                    data: {
                        name: code
                    },
                    success: function(result) {
                        for (var i = 0; i < result.length; i++) {
                            $("#instiuteList").append("<option value=" + result[i].id + ">" + result[i].name +
                                "</option>")
                        }
                    }
                });


            }

            function checkLevel(opt) {
                var level = opt.options[opt.selectedIndex].getAttribute('level');

                if (level == 1) {
                    $("#levels").html("<option value='1'>Basic</option>");
                }
                if (level == 2) {
                    $("#levels").html("<option value='1'>Basic</option><option value='2'>Intermediate</option>");
                }
                if (level == 3) {
                    $("#levels").html(
                        "<option value='1'>Basic</option><option value='2'>Intermediate</option><option value='3'>Expert</option>"
                    );
                }
            }

            function langshort(opt) {
                var val = opt.options[opt.selectedIndex].innerHTML;
                $("#lang").val(val)
            }

         


            $("#finish").click(function(){
                    var x = $("#teacher").val();
                    if(x == null){
                        $("#teach_error").show();
                        $("#teach_error").focus();
                    }
                    else{
                        $("#teach_error").hide();
                        $("#finish").attr("type","submit");
                    }
            });
            $("#email").change(function(){
                let email = $(this).val();
                // alert(email);
                $.ajax({
                    url: "{{ route('validate.email') }}",
                    data: {
                        email: email
                    },
                    success: function(result) {
                        if(result == "Trust me"){
                            $("#email_error_duplicate").show();
                            $("#email_error_duplicate").focus();
                            $("#email").addClass("is-invalid");
                            $("#email_error").hide();

                        }
                        else{
                            $("#email_error_duplicate").hide();
                            $("#email").removeClass("is-invalid");
                        }
                    }
                });  
                  
            });

        </script>
    </section>
</body>

</html>
