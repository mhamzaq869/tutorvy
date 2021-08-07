<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Pages</title>
    <!-- CSS only -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

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

    <!-- Moment Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0rc.0/dist/js/select2.min.js"></script> --}}


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
                    <p class="ml-3 heading-sixth">Already have an account? Sign in</p>

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
                            <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="2">
                                <div class="tab-content mt-5">
                                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3">Personal information</p>
                                            <div class="row mt-5">
                                                <div class="input-text col-md-6">
                                                    <input type="" class="form-control csd" name="first_name"
                                                        placeholder="First Name" value="{{$user->first_name ?? ''}}">

                                                </div>
                                                <div class="input-text col-md-6">
                                                    <input type="" class="form-control" name="last_name"
                                                        placeholder="Last Name" value="{{$user->last_name ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-4 mb-3">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter Email Address" value="{{$user->email ?? ''}}">
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-3 mb-4">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password">
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
                                                    {{-- <select class="form-select form-select-lg" name="year">
                                                        <option value="2020">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000" selected>2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                    </select> --}}
                                                    <input type="" name="year" class=" yearpicker form-control"
                                                    placeholder="Year" id="year">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3 mb-3">
                                                    <input id="phone" name="phone" type="tel" value="{{$user->phone ?? ''}}">

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
                                                        <input id="country_selector" name="country" type="">
                                                        <input id="country_short" name="country_short" type="" hidden>
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
                                                            <select class="form-select form-select-lg mb-3"
                                                                id="languages-list" name="language">

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
                                            <p class="heading-third mt-3">Educational information</p>

                                            <div class=" customer_records mt-5">
                                                <div class="row">
                                                    <div class="input-text col-md-6">
                                                        <select name="degree[]" class="form-select form-select-lg mb-3">
                                                            <option selected disabled>Degree</option>
                                                            <option value="Associate's Degree">Associate's Degree</option>
                                                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                            <option value="Doctor of Medicine (M.D.)">Doctor of Medicine (M.D.)</option>
                                                            <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                                            <option value="Engineer's Degree">Engineer's Degree</option>
                                                            <option value="Juris Doctor (J.D.)">Juris Doctor (J.D.)</option>
                                                            <option value="Master's Degree">Master's Degree</option>
                                                            <option value="Master's of Business Administration (M.B.A.)"> Master's of Business Administration (M.B.A.)</option>
                                                            <option value="Others">Others</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <select name="major[]" class="form-select form-select-lg mb-3">
                                                            <option disabled selected>Major</option>
                                                            <option  value="1">Computer Scinece</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="input-text col-md-6">
                                                        <select name="institute[]" class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option value="1">Institute</option>
                                                            <option value="2">Punjab University</option>
                                                            <option value="2">Virtual University Of Pakistan</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <input type="date" name="graduate_year[]" class=" yearpicker form-control"
                                                        id="grad-yea">
                                                    </div>
                                                </div>
                                                <div class="button-wrapper mt-4">
                                                    <span class="label" style="position: relative">
                                                        <input type="file" name="upload[]" id="upload" class="upload-box" placeholder="Upload File"
                                                        accept=".doc,.pdf,.png,.jpg,.jpeg">
                                                        <img src="../assets/images/ico/attach.png" class="w-25 "
                                                            alt="i">Attach degrees
                                                    </span>
                                                </div>
                                            </div>
                                            <hr />

                                            <a class="extra-fields-customer" href="#" style="font-size: 16px;font-family: Poppins;text-decoration: none;">+
                                                Add  more degrees
                                            </a>
                                            <div class="customer_records_dynamic mt-5"></div>
                                            <div class="row">

                                                <div class="col-8">

                                                </div>
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
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="element">
                                                                <div class="row">
                                                                    <div class="input-text col-md-6">
                                                                        <select class="form-select form-select-lg" name="designation[]" >
                                                                            <option value="1">Desigination</option>
                                                                            <option value="Senior Engineer">Software Engineer</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-text col-md-6">
                                                                        <select class="form-select form-select-lg" name="organization[]">
                                                                            <option value="1">Organization</option>
                                                                            <option value="creative sprout media">Creative sprout media</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row my-3">
                                                                    <div class="input-text col-md-6">
                                                                        <input type="date" class="form-control" name="degree_start[]" placeholder="Starting date">
                                                                    </div>
                                                                    <div class="input-text col-md-6">
                                                                        <input type="date" class="form-control" name="degree_end[]" placeholder="Ending Date">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <button  class="element1">aa</button> -->
                                                    <div class="results"></div>

                                                    <div class="buttons mb-5">
                                                        <button type="button" class="clone schedule-btn ">Add more experience</button>
                                                        <button type="button" class="remove cencel-btn btn-registration"
                                                            style="visibility: hidden;color: black;">remove</button>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="row ml-2 mt-5">
                                            <div class="col-4">

                                            </div>
                                            <div class="col-8" style="display: flex;">
                                                <button
                                                    class="btn btn-lg cencel-btn nextBtn pull-right ml-5 btn-registration">Save
                                                    for Later</button>
                                                <button type="button" id="step-3-next"
                                                    class="btn btn-lg   schedule-btn  nextBtn pull-right ml-4 btn-registration">&nbsp;
                                                    Continue &nbsp; </button>

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
                                                <div class="input-text col-md-6">
                                                    <select name="teach" class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        <option value="1">I want to teach</option>
                                                        <option value="2">Physics</option>
                                                        <option value="2">Chemistery</option>
                                                    </select>
                                                </div>
                                                <div class="input-text col-md-6">
                                                    <select name="student_level" class="form-select form-select-lg mb-3" >
                                                        <option disabled >Student level</option>
                                                        <option value="1" selected>Basic</option>
                                                        <option value="2">Intermediate</option>
                                                        <option value="3">Expert</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">

                                            {{-- <div class="input-text col-md-12 m-0 p-0 mt-3">
                                                <select class="form-select form-select-lg mb-3" name="availability">
                                                    <option value="1">Your availability</option>
                                                </select>



                                                <script type="text/javascript">
                                                $(function() {
                                                    $('.multiselect-ui').multiselect({
                                                        includeSelectAllOption: true
                                                    });
                                                });
                                                </script>
                                            </div> --}}

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

                                            <button type="submit" id="step-1-next"
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
        <script>

             for(var i=1; i<=31; i++){
                $("#day").append("<option value='"+i+"'"+ (i=={{$user->day ?? 1}} ? 'selected' : '')+">"+i+"</option>");
            }

            $("#step-1-next").on('click', function(){
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
        </script>
    </section>
</body>

</html>
