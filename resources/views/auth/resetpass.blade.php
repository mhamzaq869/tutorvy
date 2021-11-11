<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style css -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global-login.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!--favicon --->
    <link href="{{ asset('assets/images/ico/side-icons.png') }}" rel="icon">
    <!-- bootstrap link -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- fonawsome -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
</head>

<body>
    <section id="body" style="padding-bottom: 35px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <div class="login-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="text">
                            <p class="learn">
                                Learn from the best tutors
                            </p>
                            <p class="time">
                                Anytime, Anywhere
                            </p>
                        </div>
                        <div class="Register mt-4">
                            Register yourself on Tutorvy and learn or teach anything <br />
                            from anywhere.
                        </div>
                        <div style="margin-top: 70px;">
                            <img src="../assets/images/login-image/loginImage.png" alt="login" style="width: 90%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" card border-0 container pb-5">
                        <div class="ml-3 mr-3 mt-4">

                            <p class="sign-text">
                                Forget Password
                            </p>
                            <div class="row">
                                <p class="user-text ml-3">
                                   <a href="{{ route('login') }}" class="Create-text text-decoration-none">
                                    Login
                                    </a>
                                </p>
                                <br /><br />
                            </div>
                            <div class="mb-5 input-login">
                                <div class="input-container">
                                    <form action="{{ route('password.update') }}" method="POST" id="form">
                                        @csrf

                                        <input type="email" name="email" id="myName" placeholder="Enter Email Address"
                                            class="form-control @error('email') is-invalid @enderror">


                                            @if(Session::has('error'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{session::get('error')}}</strong>
                                            </span>
                                            @endif

                                        <input type="submit" class="submit schedule-btn w-25 mt-3 float-right"
                                            value="Submit">

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="social-Icon ml-3 mr-3">

                            <div class="Policy-text mt-5" style="display: flex;">
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
                                <P class="Privacy-text">
                                    Terms of Service.
                                </P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/login.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>
        <script>
            // jquery form validation
            $(document).ready(function() {
                $("#form").validate({
                    rules: {
                        myName: {
                            required: true,
                            minlength: 8
                        },
                    },

                    highlight: function(element) {
                        $(element).addClass("cl");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("cl");
                    },
                    messages: {
                        myName: {
                            required: "Enter your password",

                        },
                        pass: {
                            required: "Enter new password",

                        },
                        cpass: {
                            required: "Re-enter password",
                            equalTo: "password not matched"

                        }
                    }


                })
            })
        </script>
    </section>
</body>

</html>
