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
                            <p class="learn">Learn from the best tutors</p>
                            <p class="time"> Anytime, Anywhere</p>
                        </div>
                        <div class="Register">
                            <br />
                            Register yourself on Tutorvy and learn or teach anything <br /> from anywhere.
                        </div>
                        <div class="mt-4">
                            <img src="../assets/images/login-image/loginImage.png" style="width: 100%;">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class=" card container pb-5 pt-5">
                        <div class="ml-3 mr-3">
                            <p class="sign-text">Reset password?</p>
                            <div class="row">
                                <p class="user-text ml-3" style="line-height: 0;font-size: 12px;">Enter your new password</p>

                                <br />

                            </div>
                            <form action="{{route('update.password')}}" method="post" id="reset">
                                @csrf
                                <div class="content mt-5">

                                    <input class="input toggle-password" name="password" id="password" onkeyup="checkPass()" type="password"
                                        placeholder="Enter new Password" required>
                                    <span class="show-hide">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="content mt-3">

                                    <input class="input toggle-password" type="password" id="password2" onkeyup="checkPass()"
                                        placeholder="Re-enter new password" required>
                                    <span class="show-hide">
                                        <i class="fa fa-eye"></i>
                                    </span>

                                </div>
                                <span id="confirmMessage" class="confirmMessage"> </span>
                                @if (Session::has('success'))
                                    <span id="confirmMessage" class="text-success">{{Session::get('success')}}</span>
                                @endif
                                <button type="submit" class="schedule-btn" id="continue" style="float: right;margin-top: 20px;width: 110px;">Continus</button>
                            </form>
                        </div>

                        <div class="social-Icon ml-4"
                            style="margin-top: 250px;font-size: 14px;color: #1173FF;font-family: Poppins;">
                            <a href="{{route('login')}}"> Back to signin</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{asset('assets/js/jquery.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.validate.js') }} "></script>
            <script>

            function checkPass() {

            var get_elem = document.getElementById,
            pass1 = document.getElementById('password'),
            pass2 = document.getElementById('password2'),
            message = document.getElementById('confirmMessage'),
            colors = {
                goodColor: "#fff",
                goodColored: "#087a08",
                badColor: "#fff",
                badColored: "#ed0b0b",
                fontStyle: "italic"


            },
            strings = {
                "confirmMessage": ["Password Matched", "Password not matched"]
            };

            if (password.value === password2.value && (password.value + password2.value) !== "") {
                password2.style.backgroundColor = colors["goodColor"];
                message.style.color = colors["goodColored"];
                message.innerHTML = strings["confirmMessage"][0];
                $("#continue").attr('type','submit');
            }
            else if (!(password2.value === "")) {
                password2.style.backgroundColor = colors["badColor"];
                message.style.color = colors["badColored"];
                message.innerHTML = strings["confirmMessage"][1];
                $("#continue").attr('type','button');
            }
                else {
                message.innerHTML = "";

                }

            }


            $("#reset").validate({
                rules: {
                    password: {
                        required: true,
                        length:8
                    },
                },
            });



            </script>
    </section>

</body>

</html>
