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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <div class="login-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/images/logo/logo.png')}}">
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
                    <div class="card container">
                        <div class="ml-3 mr-3">

                            <div class="row">
                                <p class="ml-3 mt-3 mt-5">
                                    @if($user->profile)
                                    @else
                                    <img src="../assets/images/ico/Square-white.jpg" alt="boy" style="width: 40px;">
                                    @endif
                                </p>
                                <p class="ml-3 mt-5 Welcome-text"> {{$user->first_name}} {{$user->last_name}}</p>
                            </div>
                            <p style="position: absolute;top: 75px;left: 90px;font-size: 14px;font-family: Poppins;line-height: 1;">
                                Not you ?</p>
                            <p class="sign-text">Enter Password</p>
                            <div class="row">
                                <p class="user-text ml-3">Enter password to login</p>
                                <br />
                                <br />
                            </div>
                            <div class="mb-5 input-login">
                                <div class="input-container">
                                    <form action="{{route('logged')}}" method="POST" onsubmit="return verifyPassword()">
                                        @csrf
                                        <input type="email" name="email" id="myName" placeholder="Enter Email Address"
                                            class="form-control @if(Session::has('error')) is-invalid @endif">

                                        <input type="text" name="role" value="{{$user->role}}" hidden/>
                                        <input type="password" name="password" id="pswd" placeholder="Enter your password"
                                        class="@if(Session::has('error')) is-invalid @endif">
                                        @if(Session::has('error'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{session::get('error')}}</strong>
                                                </span>
                                        @endif
                                        <span id="message" style="color:red"> </span> <br><br>
                                        <input type="submit" value="Submit" class="schedule-btn"
                                            style="float: right;width: 110px;">
                                    </form>
                                </div>
                                <span toggle="#password-field pr-5"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <p class="checkboxs"><input style="width: 15px;" type="checkbox" class="checkbox">
                                <P
                                    style="position: absolute;top: 341px;left: 55px;font-size: 16px;font-family: Poppins;">
                                    Stay signed in</P>
                                </p>

                            </div>
                        </div>
                        <a href="./forget.html">
                            <p class="forget-text">Forgot password?</p>
                        </a>
                        <div class="social-Icon ml-4"
                            style="margin-top: 250px;font-size: 14px;color: #1173FF;font-family: Poppins;">
                            <a href="./login.html"> Back to signin</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../assets/js/login.js"> </script>
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
                        pass: {
                            required: true,
                            minlength: 8
                        }
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
