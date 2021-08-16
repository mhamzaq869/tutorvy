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
    <link rel="stylesheet" href="assets/css/countrySelect.css">
    {{-- <link rel="stylesheet" href="assets/css/country_flag.css"> --}}
    <!-- Year Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css')}}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dropify.css')}}" />

    <!-- Moment Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0rc.0/dist/js/select2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <style>
        .error{
            color: red !important;
            font-weight: 500;
        }
        .cust_link{
            font-size: 16px;
            font-family: Poppins;
        }
        .cust_link:hover{

            text-decoration:none;
        }
        .select2-container .select2-selection--single{
        height:46px;
        width: 100% !important  ;

        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 11px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 47px;
            }
            .select2
            {
                width:100% !important;
            }
            .is-invalid{
                color:red;
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
                    <p class="mt-5 ml-3 heading-first">Create account</p>
                    <p class="ml-3 heading-sixth">Already have an account?
                        <a href="{{route('login')}}" class="text-primary" style="text-decoration:none">
                        Sign in
                        </a>
                    </p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="board">
                                <ul class="nav nav-tabs">
                                    <div class="liner"></div>
                                    <li rel-index="0" class="bordr-none active">
                                        <a href="#step-1" aria-controls="step-1" role="tab" data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/profile-ico.png" alt="img">
                                            </span>
                                        </a>
                                        <p class="register-content">Personal</p>
                                    </li>
                                    <li rel-index="1" class="bordr-none">
                                        <a href="#step-2" class=" disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/bag-icon.png"  alt="bag-icon">
                                            </span>
                                        </a>
                                        <p class="register-content">Educational</p>
                                    </li>
                                    <li rel-index="2" class="bordr-none">
                                        <a href="#step-3" class=" disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/cap-icon.png"
                                                    alt="cap-icon">
                                            </span>
                                        </a>
                                        <p class="register-content">Professional</p>
                                    </li>
                                    <li rel-index="3" class="bordr-none">
                                        <a href="#step-4" class=" disabled" aria-controls="step-4" role="tab"
                                            data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/cricle-icon.png"
                                                    alt="cricle-icon">
                                            </span>
                                        </a>
                                        <p class="register-content">Complete</p>
                                    </li>
                                </ul>
                            </div>
                            <form action="{{ url('register') }}" method="post" id="register" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="2">
                                <div class="tab-content mt-5">
                                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3">Personal information</p>
                                            <div class="row mt-5">
                                                <div class="input-text col-md-6 d-block">
                                                    <input type="" class="form-control csd" name="first_name"
                                                        placeholder="First Name" value="{{$user->first_name ?? ''}}">
                                                    {{-- @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror --}}

                                                </div>
                                                <div class="input-text col-md-6 d-block">
                                                    <input type="" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                                        placeholder="Last Name" value="{{$user->last_name ?? ''}}">
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-4 mb-3 d-block">
                                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                                                    placeholder="Enter Email Address" value="{{$user->email ?? ''}}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-3 mb-4 d-block">
                                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                                                    placeholder="Password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <p class="heading-fifth">Date of Birth</p>
                                            <!-- date of birth dropdown -->
                                            <div class="row mt-4 mb-3">
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" id="day" name="day">
                                                    </select>
                                                </div>
                                                <!--  -->
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

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3 mb-3">
                                                    <input id="phone" name="phone" type="tel" value="{{$user->phone ?? ''}}">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                    @enderror
                                                    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
                                                    <script>
                                                        var input = document.getElementById("phone");
                                                        window.intlTelInput(input, {
                                                            utilsScript: "assets/js/utils.js",
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <!-- city dropdwon -->
                                            <div class="row mt-3">
                                                <div class="input-text col-md-6">
                                                    <div class="autocomplete mt-1" style="width:300px;">
                                                        <input id="myInput" type="" name="city" placeholder="City" value="{{$user->city ?? ''}}">
                                                    </div>
                                                </div>
                                                <div class="input-text col-md-6">
                                                    <div class="form-item">
                                                        <input id="country_selector" name="country" onchange="university()" type="" >
                                                        <input id="country_short" name="country_short" type=""  hidden>
                                                        <label for="country_selector" style="display:none;">Select a
                                                            country here...</label>
                                                    </div>

                                                </div>
                                                <div class="container mt-3">
                                                    <div class=" row">
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
                                                            <input id="textbox" type="number" @if(isset($user) && $user->type == 1) name="cnic" @else name="security" @endif
                                                                class="form-control" placeholder="ID card number" value="{{$user->cnic_security ?? ''}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="" name="language" id="lang" hidden>
                                                            <select class="form-select form-select-lg mb-3"
                                                                id="languages-list" name="lang_short" onchange="langshort(this)">

                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select form-select-lg mb-3"
                                                                aria-label=".form-select-lg example" name="gender">
                                                                <option selected disabled>Gender</option>
                                                                <option value="male" @if(isset($user) &&$user->gender == 'male') selected @endif>Male</option>
                                                                <option value="female" @if(isset($user) && $user->gender == 'female') selected @endif>Female</option>
                                                                <option value="other" @if(isset($user) && $user->gender == 'other') selected @endif>Other</option>
                                                            </select>
                                                            @error('gender')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="container form-group mt-3" style="padding-right: 20px;">
                                                    <textarea class="form-control" name="bio"
                                                        id="exampleFormControlTextarea1" rows="5"
                                                        placeholder="Write about yourself...">{{$user->bio ?? ''}}</textarea>
                                                </div>
                                                <br />
                                                <div class="row ml-2 mt-4">
                                                    <div class="col-6">
                                                    </div>
                                                    <div class="col-6" style="display: flex;">
                                                        <input type="submit"
                                                            class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5"
                                                            value=" Save for Later">

                                                        <button id="step-1-next" type="button"
                                                            class="btn btn-lg btn-registration schedule-btn  nextBtn pull-right ml-4 ">
                                                            &nbsp; Continue &nbsp;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane border-right" id="step-2"
                                        style="padding-bottom: 100px;background-color: white;">
                                        <div class="col-md-12 ">
                                            <p class="heading-third mt-3">Educational information </p>
                                            @isset($user)
                                                @forelse ($user->education as $i => $education)
                                                <div class=" customer_records mt-5">
                                                    <div class="row">
                                                        <div class="input-text col-md-6">
                                                            <select name="degree[]" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                                                                @foreach ($degrees as $degree)
                                                                    <option  value="{{$degree->id}}" @if($education[$i] == $degree->id) selected @endif>{{$degree->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="input-text col-md-6">
                                                            <select name="major[]" class="form-select form-select-lg mb-3">
                                                                @foreach ($subjects as $subject)
                                                                <option value="{{$subject->id}}" @if($subject->id == $education->subject_id) selected @endif>{{$subject->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="input-text col-md-6">
                                                            <select name="institute[]" class="form-select form-select-lg mb-3"
                                                                aria-label=".form-select-lg example">
                                                                @foreach ($institutes as $institute)
                                                                    <option  value="{{$institute->id}}" @if($education[$i] == $institute->id) selected @endif>{{$institute->name}}</option>
                                                                @endforeach
                                                                <!-- <option  value="0">Institute3</option>
                                                                <option  value="1">Punjab University</option>
                                                                <option  value="2">Virtual University Of Pakistan</option> -->
                                                            </select>
                                                            <!-- <input list="instiuteList"  class="mb-3 form-control" name="institute[]" id="browser">
                                                            <datalist id="instiuteList">
                                                                <option value="Institute">
                                                                <option value="Punjab University">
                                                                <option value="Virtual University Of Pakistan">
                                                            </datalist> -->
                                                        </div>
                                                        <div class="input-text col-md-6">
                                                            <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                                            id="grad-yea" value="{{$user->year[$i] ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <input type="file" class="dropify" name="upload[]" id="" data-default-file="{{asset($education->docs)}}">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="button-wrapper mt-4">
                                                        <span class="label" style="position: relative">
                                                           <span><img src="../assets/images/ico/attach.png" class="w-25 "
                                                                alt="i">Attach degrees
                                                            </span>
                                                            <input type="file" name="upload[]" id="upload" class="upload-box" placeholder="Upload File"
                                                            accept=".doc,.pdf,.png,.jpg,.jpeg">
                                                            @if ($user->docs)
                                                            <button class="btn btn-outline-primary">{{$user->docs[$i]}}</button>
                                                            @endif
                                                        </span>
                                                    </div> -->
                                                </div>
                                                <hr />
                                                @empty
                                                <div class=" customer_records mt-5">
                                                    <div class="row">
                                                        <div class="input-text col-md-6">
                                                            <select name="degree[]" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                                                                <option value="0" selected>Degree</option>
                                                                @foreach ($degrees as $degree)
                                                                <option  value="{{$degree->id}}">{{$degree->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="input-text col-md-6">
                                                            <select name="major[]" class="form-select form-select-lg mb-3">
                                                                <option value="0" selected>Major</option>
                                                                @foreach ($subjects as $subject)
                                                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="input-text col-md-6">
                                                            <select name="institute[]" class="form-select form-select-lg mb-3"
                                                                aria-label=".form-select-lg example">
                                                                <option value="0">Institute</option>
                                                                <option value="1">Punjab University</option>
                                                                <option value="2">Virtual University Of Pakistan</option>
                                                            </select>
                                                            <!-- <input list="instiuteList" name="institute[]" id="browser">
                                                            <datalist id="instiuteList">
                                                                <option value="Institute">
                                                                <option value="Punjab University">
                                                                <option value="Virtual University Of Pakistan">
                                                            </datalist> -->
                                                        </div>
                                                        <div class="input-text col-md-6">
                                                            <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                                            id="grad-yea">
                                                        </div>

                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <input type="file" class="dropify" name="upload[]" id="" >
                                                        </div>
                                                    </div>
                                                    <!-- <div class="button-wrapper mt-4">
                                                        <span class="label" style="position: relative">
                                                            <input type="file" name="upload[]" id="upload" class="upload-box" placeholder="Upload File"
                                                            accept=".doc,.pdf,.png,.jpg,.jpeg">
                                                            <img src="../assets/images/ico/attach.png" class="w-25 "
                                                                alt="i">Attach degrees
                                                        </span>
                                                    </div> -->
                                                </div>
                                                <hr />
                                                @endforelse
                                            @else
                                            <div class=" customer_records mt-5">
                                                <div class="row">
                                                    <div class="input-text col-md-6">
                                                        <select name="degree[]" class="form-select form-select-lg mb-3" onchange="checkLevel(this)">
                                                            <option value="0" selected>Degree</option>
                                                            @foreach ($degrees as $degree)
                                                            <option  value="{{$degree->id}}">{{$degree->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="input-text col-md-6">
                                                        <select name="major[]" class="form-select form-select-lg mb-3">
                                                            <option value="0" selected>Major</option>
                                                            @foreach ($subjects as $subject)
                                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="input-text col-md-6">
                                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option value="0">Institute</option>
                                                            <option value="1">Punjab University</option>
                                                            <option value="2">Virtual University Of Pakistan</option>
                                                        </select>
                                                        <!--<input list="instiuteList" name="institute[]" id="browser">
                                                                <datalist id="instiuteList">
                                                                    <option value="Institute">
                                                                    <option value="Punjab University">
                                                                    <option value="Virtual University Of Pakistan">
                                                                </datalist>-->
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                                        id="grad-yea">
                                                    </div>

                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <input type="file" class="dropify" name="upload[]" id="" >
                                                    </div>

                                                </div>

                                                <!-- <div class="button-wrapper mt-4">
                                                    <span class="label" style="position: relative">
                                                        <input type="file" name="upload[]" id="upload" class="upload-box" placeholder="Upload File"
                                                        accept=".doc,.pdf,.png,.jpg,.jpeg">
                                                        <img src="../assets/images/ico/attach.png" class="w-25 "
                                                            alt="i">Attach degrees
                                                    </span>
                                                </div> -->
                                            </div>
                                            <hr />
                                            @endisset
                                            <a class="extra-fields-customer cust_link" href="#" >+
                                                Add  more degrees
                                            </a>
                                            <div class="customer_records_dynamic mt-5"></div>
                                            <div class="row">
                                                <div class="col-8"></div>
                                                <div class="col-4">
                                                    <div class="btn-later">
                                                        <button type="submit" class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5 ">Save
                                                            for Later
                                                        </button>
                                                        <button type="button" id="step-2-next"
                                                            class="btn btn-lg   schedule-btn  nextBtn pull-right ml-4 btn-registration">&nbsp;
                                                            Continue &nbsp;
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane border-right" id="step-3"
                                        style="padding-bottom: 100px;background-color: white;">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3">Professional information</p>
                                            <div class="wrapper mt-5">
                                                <div class="container">
                                                    @isset($user)
                                                        @forelse ($user->professional as $profession)
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="element">
                                                                    <div class="row">
                                                                        <div class="input-text col-md-6">
                                                                            <input name="designation[]" class="form-control" placeholder="Designation: Senior Developer at Google" value="{{$profession->designation}}">
                                                                        </div>
                                                                        <div class="input-text col-md-6">
                                                                            <input name="organization[]" class="form-control" placeholder="Organization"
                                                                            value="{{$profession->organization}}">
                                                                        </div>

                                                                    </div>
                                                                    <div class="row my-3">
                                                                        <div class="input-text col-md-6">
                                                                            <input type="date" class="form-control" name="degree_start[]" placeholder="Starting date"
                                                                            value="{{$profession->start_date ?? ''}}">
                                                                        </div>
                                                                        <div class="input-text col-md-6">
                                                                            <input type="date" class="form-control" name="degree_end[]" placeholder="Ending Date"
                                                                            value="{{$profession->end_date ?? ''}}">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @empty
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
                                                        @endforelse
                                                    @else
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
                                                    @endisset
                                                    <!-- <button  class="element1">aa</button> -->


                                                    <div class="buttons mb-5">
                                                        <a href="#" class="moreExperience cust_link" >+ Add more experience</a>
                                                        <!-- <button type="button" class="remove cencel-btn btn-registration"
                                                            style="visibility: hidden;color: black;">remove</button> -->

                                                    </div>
                                                    <div class="results"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ml-2 mt-5">
                                            <div class="col-4">

                                            </div>
                                            <div class="col-8" style="display: flex;">
                                                <button class="btn btn-lg cencel-btn nextBtn pull-right ml-5 btn-registration">Save
                                                    for Later
                                                </button>
                                                <button type="button" id="step-3-next"
                                                    class="btn btn-lg   schedule-btn  nextBtn pull-right ml-4 btn-registration">&nbsp;
                                                    Continue &nbsp;
                                                </button>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $(".clone").click(function() {
                                                $(".remove").css("visibility", "visible");
                                            });
                                        });
                                    </script>
                                    <div role="tabpanel" class="tab-pane border-right" id="step-4"
                                        style="background-color: white;">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="input-text col-md-6 d-block">
                                                    <select name="teach" class="form-select form-select-lg mb-3 @error('teach') is-invalid @enderror"  required>
                                                        <option  disabled selected>I want to teach</option>
                                                        @foreach ($subjects as $subject)
                                                        <option value="{{$subject->id}}" @if($subject->id ==( $user->userdetail->subject_id ?? 0)) selected @endif>{{$subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('teach')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="input-text col-md-6">
                                                    <select name="student_level" class="form-select form-select-lg mb-3" id="levels">
                                                        <option selected value="0" >Student level</option>
                                                        <option @if(isset($user) && $user->student_level == 1) selected @endif value="1" selected>Basic</option>
                                                        <option @if(isset($user) && $user->student_level == 2) selected @endif value="2">Intermediate</option>
                                                        <option @if(isset($user) && $user->student_level == 3) selected @endif value="3">Expert</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">

                                            <div class="input-text col-md-12 m-0 p-0 mt-3 mb-5">
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
                                        <div class="col-8" style="float: right;">

                                            <button type="submit" id="finish"
                                                class="btn btn-lg   schedule-btn  nextBtn  pull-right">&nbsp;
                                                Finsh&nbsp;
                                            </button>

                                        </div>
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
        </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
        <script src="assets/js/countrySelect.js"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
        <script src="{{ asset('assets/js/registration.js') }}"></script>
        <script src="{{ asset('assets/js/yearpicker.js')}}"></script>
        <script src="{{ asset('assets/js/languages.json')}}"></script>
        <script src="{{ asset('assets/js/googleapi.js')}}"></script>
        <script src="{{ asset('assets/js/multiselect.js')}}"></script>
        <script src="{{ asset('assets/js/dropify.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.validate.js') }} "></script>
        <script>



             for(var i=1; i<=31; i++){
                $("#day").append("<option value='"+i+"'"+ (i=={{$user->day ?? 1}} ? 'selected' : '')+">"+i+"</option>");
            }

            $("#finish").on('click', function(){
                $(this).attr('name','finish');
            });
            $(document).ready(function() {
                $("#year,#grad-year").yearpicker({
                    year: {{$user->year ?? '1990'}},
                    startYear: 1950,
                    endYear: 2050,
                });
            });

            $("#country_selector").countrySelect({
                defaultCountry: "{{$user->country_short ?? ''}}",
                preferredCountries: ['ca', 'gb', 'us', 'pk']
            });

            $("#country_selector").on('change', function(){
               var short = $(this).countrySelect("getSelectedCountryData");
               $("#country_short").val(short.iso2);
            });


                for(var i=0; i<teach_levels.length; i++){
                    if(level >= teach_levels[i].value){

                        for(var j=0; j<i; j++){
                            var opts=`<option value="`+teach_levels[i].value+`">"`+teach_levels[i].innerHTML+`"</option>`;
                            // "<option value="'+teach_levels[i].value+'">"'+teach_levels[i].innerHTML+'"</option>";
                            $("#levels").innerHtml=opts;
                        }
                    }
                }
            }
            // var languages_list = {...};
            (function () {
                var user_language_code = "{{ $user->language ?? 'en-US'}}";
                var option = '';
                for (var language_code in languages_list) {
                    var selected = (language_code == user_language_code) ? ' selected' : '';
                    option += '<option value="' + language_code + '"' + selected + '>' + languages_list[language_code] + '</option>';
                }
                document.getElementById('languages-list').innerHTML = option;
            })();

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
                        required:true
                    },
                    last_name: {
                        required:true
                    },
                    teach: {
                        required:true
                    }
                },
                messages: {
                    email: {
                        required: "We need your email address to contact you",
                        email: "Your email address must be in the format of name@domain.com"
                    }
                }
            });

            $(document).ready(function(){
                $(".dropify").dropify();
                $(".form-select").select2();
            });


            $('.extra-fields-customer').click(function() {
                // alert("Tech");
                count_field++;
                var html = `<div class=" customer_records mt-5" id="record_` + count_field + `">
                <div class="row">
                    <div class="input-text col-md-6">
                        <select name="degree[` + count_field + `]" onchange="checkLevel(this)" class="form-select form-select-lg mb-3">
                            <option  selected="">Degree</option>
                            @foreach ($degrees as $degree)
                               <option  value="{{$degree->id}}">{{$degree->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="input-text col-md-6">
                        <select name="major[` + count_field + `]" class="form-select form-select-lg mb-3">
                            <option value="0" selected="">Major</option>
                            @foreach ($subjects as $subject)
                                <option value="{{$subject->id}}" @if($subject->id ==( $user->userdetail->subject_id ?? 0)) selected @endif>{{$subject->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="input-text col-md-6">
                        <select name="institute[` + count_field + `]" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="0">Institute</option>
                            <option value="1">Punjab University</option>
                            <option value="2">Virtual University Of Pakistan</option>
                        </select>
                        <!--<input list="instiuteList" name="institute[]" id="browser">
                        <datalist id="instiuteList">
                            <option value="Institute">
                            <option value="Punjab University">
                            <option value="Virtual University Of Pakistan">
                        </datalist>-->
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

           function university(){
               var code = $("#country_short").val()
                $.ajax({
                    url: "{{route('uni.name')}}",
                    data: {name:code},
                    success: function(result){
                      for(var i=0; i<result.length; i++){
                          $("#instiuteList").append("<option value="+result[i].id+">"+result[i].name+"</option>")
                      }
                    }
                });
            }

            function checkLevel(opt){
                var level = opt.options[opt.selectedIndex].getAttribute('level');
                var teach_levels = document.getElementById("levels").options;

                for(var i=0; i<teach_levels.length; i++){
                    if(level >= teach_levels[i].value){

                        for(var j=0; j<i; j++){
                            $("#levels").html("<option value='"+teach_levels[i].value+"'>"+teach_levels[i].innerHTML+"</option>");
                        }
                    }
                }
            }

            function langshort(opt){
                var val = opt.options[opt.selectedIndex].innerHTML;
                $("#lang").val(val)
            }
        </script>
    </section>
</body>

</html>
