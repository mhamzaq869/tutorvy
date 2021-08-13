<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <!-- CSS only -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap end -->
    <link href="{{asset('assets/css/registerpage.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
    <!-- style css -->
    <link href="{{asset('assets/css/registration.css')}}" rel="stylesheet">

    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/countrySelect.css')}}">
    <!-- Year Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/multiselect.css')}}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
                            <form action="{{ url('register') }}" method="post" enctype="multipart/form-data" id="register">
                                @csrf
                                <input type="hidden" name="role" value="3">
                                <div class="tab-content mt-5">
                                    <div role="tabpanel" class="border-right tab-pane active" id="step-1">
                                        <div class="col-md-12">
                                            <p class="heading-third mt-3">Personal information</p>
                                            <div class="row mt-5">
                                                <div class="input-text col-md-6 d-block">
                                                    <input type="" class="form-control csd  @error('first_name') is-invalid @enderror" name="first_name"
                                                        placeholder="First Name" value="{{$user->first_name ?? ''}}">
                                                        @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
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
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
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
                                                <div class="col-md-12 mt-3 mb-3 d-block">
                                                    <input id="phone" name="phone" type="tel" value="{{$user->phone ?? ''}}"
                                                    class="form-control @error('phone') is-invalid @enderror" />

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
                                                        <div class="col-md-6 d-block">
                                                            <select class="form-select form-select-lg mb-3  @error('gender') is-invalid @enderror"
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
                                                    <div class="col-6 text-right" style="display: flex;">

                                                        <button type="submit" name="finish"
                                                            class="btn btn-lg btn-registration schedule-btn  nextBtn pull-right ml-4 ">
                                                            &nbsp; Continue &nbsp;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
        <script src="{{ asset('assets/js/countrySelect.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/registration.js') }}"></script>
        <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
        <script src="{{ asset('assets/js/yearpicker.js')}}"></script>
        <script src="{{ asset('assets/js/languages.json')}}"></script>
        {{-- <script src="{{ asset('assets/js/jquery.validate.js') }} "></script> --}}
        <script src="{{ asset('assets/js/utils.js') }} "></script>

        <script>

             for(var i=1; i<=31; i++){
                $("#day").append("<option value='"+i+"'"+ (i=={{$user->day ?? 1}} ? 'selected' : '')+">"+i+"</option>");
            }

            $(document).ready(function() {
                $("#year").yearpicker({
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

            $("#register").validate({
                rules: {
                    // compound rule
                    email: {
                        required: true,
                        email: true,
                        remote: {
                                url: "{{route('available.email')}}",
                                type: "post",
                                data: {
                                    _token: function() {
                                        return "{{csrf_token()}}"
                                    },
                                }
                            }
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

                },
                messages: {
                    email: {
                        required: "We need your email address to contact you",
                        email: "Your email address must be in the format of name@domain.com"
                    }
                }
            });
        </script>
    </section>
</body>

</html>
