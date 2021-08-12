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
                                        <a href="#step-2" class=" disabled" aria-controls="step-2" role="tab"
                                            data-toggle="tab">
                                            <span>
                                                <img class="mb-3" src="../assets/images/ico/bag-icon.png"
                                                    alt="bag-icon">

                                            </span>
                                        </a>
                                        <p class="register-content">Educational</p>
                                    </li>
                                    <li rel-index="2" class="bordr-none">
                                        <a href="#step-3" class=" disabled" aria-controls="step-3" role="tab"
                                            data-toggle="tab">
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
                                                        placeholder="First Name">

                                                </div>
                                                <div class="input-text col-md-6">

                                                    <input type="" class="form-control" name="last_name"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-4 mb-3">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter Email Address">
                                            </div>
                                            <div class="input-text col-md-12 m-0 p-0 mt-3 mb-4">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password">
                                            </div>

                                            <p class="heading-fifth">Date of Birth</p>
                                            <!-- date of birth dropdown -->
                                            <div class="row mt-4 mb-3">
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" name="day"
                                                        aria-label=".form-select-lg example">
                                                        <option class="h" value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>

                                                    </select>
                                                </div>
                                                <!--  -->
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" name="month"
                                                        aria-label=".form-select-lg example">
                                                        <option name="January" value="Jan">January</option>
                                                        <option name="February" value="Feb">February</option>
                                                        <option name="March" value="Mar">March</option>
                                                        <option name="April" value="Apr">April</option>
                                                        <option name="May" value="May">May</option>
                                                        <option name="June" value="Jun">June</option>
                                                        <option name="July" value="Jul">July</option>
                                                        <option name="August" value="Aug">August</option>
                                                        <option name="September" value="Sep">September</option>
                                                        <option name="October" value="Oct">October</option>
                                                        <option name="November" value="Nov">November</option>
                                                        <option name="December" value="Dec">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-select form-select-lg" name="year"
                                                        aria-label=".form-select-lg example">
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
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3 mb-3">
                                                    <input id="phone" name="phone" type="tel">

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
                                                        <input id="myInput" type="" name="city" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="input-text col-md-6">
                                                    {{-- <select class="mt-1 mb-3 pl-3 color-input1"
                                                        style="color:#afb3b8; height: 49px;border-radius: 4px;"
                                                        id="selectCountry" name="country">
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                        <option value="">Choose Country</option>
                                                    </select> --}}


                                                    <div class="form-item">
                                                        <input id="country_selector" name="country" type="">
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
                                                                <option value="1">ID card number</option>
                                                                <option value="2">Social security number</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-text col-md-6">
                                                            <input id="textbox" type="number" name="cnic"
                                                                class="form-control" placeholder="ID card number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <select class="form-select form-select-lg mb-3"
                                                                aria-label=".form-select-lg example" name="language">
                                                                <option selected disabled>Language</option>
                                                                <option value="2">English</option>
                                                                <option value="2">Urdu</option>
                                                                <option value="2">English</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select form-select-lg mb-3"
                                                                aria-label=".form-select-lg example" name="gender">
                                                                <option selected disabled>Gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="container form-group mt-3" style="padding-right: 20px;">
                                                    <textarea class="form-control" name="bio"
                                                        id="exampleFormControlTextarea1" rows="5"
                                                        placeholder="Write about yourself..."></textarea>
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
                                                        <select class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option selected disabled>Degree</option>
                                                            <option value="Associate's Degree">Associate's Degree
                                                            </option>
                                                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                            <option value="Doctor of Medicine (M.D.)">Doctor of Medicine
                                                                (M.D.)</option>
                                                            <option value="Doctor of Philosophy (Ph.D.)">Doctor of
                                                                Philosophy (Ph.D.)</option>
                                                            <option value="Engineer's Degree">Engineer's Degree</option>
                                                            <option value="Juris Doctor (J.D.)">Juris Doctor (J.D.)
                                                            </option>
                                                            <option value="Master's Degree">Master's Degree</option>
                                                            <option
                                                                value="Master's of Business Administration (M.B.A.)">
                                                                Master's of Business Administration (M.B.A.)</option>
                                                            <option value="Others">Others</option>

                                                        </select>
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <select class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option value="1">Major</option>
                                                            <option value="1">Computer Scinece</option>
                                                        </select>
                                                        {{-- <input type="" name="major" class="form-control"
                                                            placeholder="Search Major"> --}}

                                                            {{-- <select class="js-example-basic-single" name="state">
                                                                <option value="AL">Alabama</option>
                                                                  ...
                                                                <option value="WY">Wyoming</option>
                                                              </select> --}}
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="input-text col-md-6">
                                                        <select class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option value="1">Institute</option>
                                                            <option value="2">Punjab University</option>
                                                            <option value="2">Virtual University Of Pakistan</option>

                                                        </select>
                                                    </div>
                                                    <div class="input-text col-md-6">
                                                        <select class="form-select form-select-lg mb-3"
                                                            aria-label=".form-select-lg example">
                                                            <option value="1">Year</option>
                                                            <option value="2">Pakistan</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                            <option value="2">Lahore</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="button-wrapper mt-4">
                                                    <span class="label ">
                                                        <img src="../assets/images/ico/attach.png" class="w-25 "
                                                            alt="i">
                                                        Attach
                                                        degrees
                                                    </span>


                                                    <input type="file" name="upload" id="upload" class="upload-box"
                                                        placeholder="Upload File">

                                                </div>
                                            </div>
                                            <hr />
                                            <a class="extra-fields-customer" href="#"
                                                style="font-size: 16px;font-family: Poppins;text-decoration: none;">+
                                                Add
                                                more degrees </a>


                                            <div class="customer_records_dynamic mt-5"></div>
                                            <div class="row">

                                                <div class="col-8">

                                                </div>
                                                <div class="col-4">
                                                    <div class="btn-later">
                                                        <button
                                                            class="btn btn-registration btn-lg cencel-btn nextBtn pull-right ml-5 ">Save
                                                            for Later</button>
                                                        <button type="button" id="step-2-next"
                                                            class="btn btn-lg   schedule-btn  nextBtn pull-right ml-4 btn-registration">&nbsp;
                                                            Continue &nbsp; </button>
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
                                                                        <select class="form-select form-select-lg"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">Desigination</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="input-text col-md-6">
                                                                        <select class="form-select form-select-lg"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">Organization</option>
                                                                            <option value="2">Pakistan</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="input-text col-md-6">
                                                                        <select
                                                                            class="form-select form-select-lg mb-4 mt-4"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">Starting date</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-text col-md-6">
                                                                        <select
                                                                            class="form-select form-select-lg mb-4 mt-4"
                                                                            aria-label=".form-select-lg example">
                                                                            <option value="1">Ending date</option>
                                                                            <option value="2">Pakistan</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                            <option value="2">Lahore</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <button  class="element1">aa</button> -->
                                                    <div class="results"></div>

                                                    <div class="buttons mb-5">
                                                        <button class="clone schedule-btn ">Add more experience</button>
                                                        <button class="remove cencel-btn btn-registration"
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
                                                    <select class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        <option value="1">I want to teach</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>

                                                    </select>
                                                </div>
                                                <div class="input-text col-md-6">
                                                    <select class="form-select form-select-lg mb-3"
                                                        aria-label=".form-select-lg example">
                                                        <option value="1">Student level</option>
                                                        <option value="2">Pakistan</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>
                                                        <option value="2">Lahore</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">

                                            <div class="input-text col-md-12 m-0 p-0 mt-3">
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example">
                                                    <option value="1">Your availability</option>
                                                    <option value="2">Pakistan</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>


                                                </select>

                                            </div>

                                            <div class="input-text col-md-12 m-0 p-0 mt-3 mb-5">
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example">
                                                    <option value="1">Per hour charges</option>
                                                    <option value="2">Pakistan</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                    <option value="2">Lahore</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-8" style="float: right;">
                                            <a href="../Login/skip.html">
                                                <button id="step-1-next"
                                                    class="btn btn-lg   schedule-btn  nextBtn  pull-right">&nbsp;
                                                    Finsh&nbsp; </button>
                                            </a>
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
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>

        <!-- <script src="./inputflags.js"></script> -->
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
        <script src="{{ asset('assets/js/registration.js') }}"></script>
        <script src="{{ asset('assets/js/googleapi.js') }}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/countrySelect.js"></script>
        <script>
            $(document).ready(function() {
                $('.form-select-lg').select2();
            });


            $("#country_selector").countrySelect({
                preferredCountries: ['ca', 'gb', 'us', 'pk']
            });

            try {
                fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                    method: 'HEAD',
                    mode: 'no-cors'
                })).then(function(response) {
                    return true;
                }).catch(function(e) {
                    var carbonScript = document.createElement("script");
                    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                    carbonScript.id = "_carbonads_js";
                    document.getElementById("carbon-block").appendChild(carbonScript);
                });
            } catch (error) {
                console.log(error);
            }
        </script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                    '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </section>
</body>

</html>
