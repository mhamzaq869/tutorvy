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
                            <img src="../assets/images/logo/logo.png" alt="logo">
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

                                <form method="post" action="{{route('check.otp')}}" class="digit-group" data-group-name="digits" data-autosubmit="false"
                                    autocomplete="off">
                                    @csrf

                                    <div class="d-flex">
                                        <input class="text-dark" id="digit-1" name="digit1" placeholder="9" data-next="digit-2" />
                                        <input class="text-dark" id="digit-2" name="digit2" placeholder="9" data-next="digit-3" data-previous="digit-1" />
                                        <input class="text-dark" id="digit-3" name="digit3" placeholder="9" data-next="digit-4" data-previous="digit-2" />
                                        <input class="text-dark" id="digit-4" name="digit4" placeholder="9" data-next="digit-5" data-previous="digit-3" />
                                    </div>

                                    @if(Session::has('error'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{session::get('error')}}</strong>
                                        </span>
                                    @endif


                                        <div class="mb-5 input-login" style="display: flex;">

                                            <p style="text-align: left; margin-top: 35px;width: 100%;font-size: 14px;font-family: Poppins;;color: #1173FF;padding-right: 15px;">
                                                Resend code</p>

                                                <button type="submit" class="schedule-btn" style="float: right;margin-top: 20px;width: 120px;">
                                                    Continus
                                                </button>
                                        </div>
                                </form>
                            </div>

                        </div>

                        <div class="social-Icon ml-4"
                            style="margin-top: 250px;font-size: 14px;color: #1173FF;font-family: Poppins;">
                            <a href="./login.html"> Back to signin</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="../assets/js/bootstrap.js"></script>
            <script src="../assets/js/login.js">   </script>
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
            </script>
    </section>
</body>

</html>
