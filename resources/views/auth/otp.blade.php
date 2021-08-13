<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Pages</title>
    <!-- bootstrap start -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- bootstrap end -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style css -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global-login.css') }}" rel="stylesheet">
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
                            <img src="{{asset('assets/images/login-image/loginImage.png')}}" alt="image-login"
                                style="width: 100%;">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class=" card container pb-5 pt-5">
                        <div class="ml-3 mr-3">


                            <!-- <p style="position: absolute;top: 50px;left: 100px;font-size: 14px;font-family: Poppins;line-height: 1;">Not you ?</p> -->
                            <p class="sign-text">Forgot password?</p>
                            <div class="row">
                                <p class="user-text1 ml-3">Enter OTP code that we have sent you on your email to reset
                                    your password</p>
                                <!-- <p class="ml-2 Create-text"> Enter password to login</p> -->
                                <br />
                                <br />
                                <!-- <div class="prompt">
                                    Enter the code generated on your mobile device below to log in!
                                </div> -->

                                <form method="post" class="digit-group" data-group-name="digits" data-autosubmit="false"
                                    autocomplete="off" style="display: flex;">
                                    @csrf
                                    <input type="" id="digit-1" name="digit-1" placeholder="9" data-next="digit-2" />
                                    <input type="" id="digit-2" name="digit-2" placeholder="9" data-next="digit-3"
                                        data-previous="digit-1" />
                                    <input type="" id="digit-3" name="digit-3" placeholder="9" data-next="digit-4"
                                        data-previous="digit-2" />
                                    <input type="" id="digit-4" name="digit-4" placeholder="9" data-next="digit-5"
                                        data-previous="digit-3" />

                                </form>
                            </div>
                            <div class="mb-5 input-login" style="display: flex;">
                                {{-- {{Session::get('otp')}} --}}
                                <p style="text-align: left; margin-top: 35px;width: 100%;font-size: 14px;font-family: Poppins;;color: #1173FF;padding-right: 15px;">
                                    Resend code
                                </p>
                                <button type="submit" class="schedule-btn" style="float: right;margin-top: 20px;width: 120px;">Continus</button>
                            </div>
                        </div>

                        <div class="social-Icon ml-4"
                            style="margin-top: 250px;font-size: 14px;color: #1173FF;font-family: Poppins;">
                            <a href="./login.html"> Back to signin</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('.digit-group').find('input').each(function () {
                    $(this).attr('maxlength', 1);
                    $(this).on('keyup', function (e) {
                        var parent = $($(this).parent());

                        if (e.keyCode === 8 || e.keyCode === 37) {
                            var prev = parent.find('input#' + $(this).data('previous'));

                            if (prev.length) {
                                $(prev).select();
                            }
                        } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                            var next = parent.find('input#' + $(this).data('next'));

                            if (next.length) {
                                $(next).select();
                            } else {
                                if (parent.data('autosubmit')) {
                                    parent.submit();
                                }
                            }
                        }
                    });
                });


                    function checkPass() {
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
                            $(".schedule-btn").attr('type','submit')
                        }
                        else if (!(password2.value === "")) {
                            password2.style.backgroundColor = colors["badColor"];
                            message.style.color = colors["badColored"];
                            message.innerHTML = strings["confirmMessage"][1];
                            $(".schedule-btn").attr('type','button')
                        }
                        else {
                            message.innerHTML = "";
                        }

                    }
            </script>
    </section>
</body>

</html>
