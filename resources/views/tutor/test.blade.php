<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorVy</title>
    <!-- <link href="./images/logo/logo.png" rel="icon"> -->
    <!-- cs -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->

    <!-- bootstrap start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- bootstrap end -->
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- css -->
    <link href="{{asset('assets/css/tutor-asset.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/subject.css')}}" rel="stylesheet">

</head>

<body style="background-color: #FBFBFB;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="logo text-center mt-5 mb-5">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
                </div>
                <div class="card"
                    style="margin-left: 300px;margin-right: 300px;   box-shadow: 0 16px 16px -22px #777;border: #00000005;border-radius: 8px;">
                    <div class="container mt-4 ">
                        <p class="heading-third ml-5">
                            Write down 3 questions and their awnsers
                        </p>
                        <p class="heading-sixth keep-res ml-5">
                            Keep in mind, we will analyze you by your questions and answers so, write <br /> good and
                            challenging questions. Best of luck
                        </p>
                        <p class="view-bookings float-left ml-5">
                            Learn how to write effective questions and answers.
                        </p>
                    </div>
                    <form action="{{route('tutor.assessment')}}" method="post" id="form">
                        @csrf
                        <input type="hidden" name="subject" value="{{$id}}">
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_1" class="form-control" placeholder="Question1" required>

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_1" placeholder="Answers"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_2" class="form-control" placeholder="Question2">

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_2" placeholder="Answers"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="input-test ml-5 mr-5 mb-0">
                                <br />
                                <input type="" name="question_3" class="form-control" placeholder="Question3">

                            </div>
                            <div class="input-answer ml-5 mr-5 mb-0">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" name="answer_3" placeholder="Answers"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                                class="schedule-btn mb-5 mt-4"
                                style="width: 100px;float: right;margin-right: 50px;">
                                Submit
                            </button>

                        </div>
                    </form>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="testsubmit-image text-center">
                                    <img class="mt-4" src="{{asset('assets/images/ico/submit-test.png')}}">
                                    <p class="text-center heading-third mt-5" style="line-height: 0.5;">
                                        Thanks for submitting

                                    </p>
                                    <p class="text-center paragraph-line">
                                        We will get to you soon with your <br /> results within 24 hours
                                    </p>
                                    <button type="button" id="test" data-toggle="modal"
                                            data-target="#exampleModalCenter" class="schedule-btn mb-5"
                                            style="width: 180px;">Go to dashboard
                                    </button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
       var test =  document.getElementById("test")
       var form =  document.getElementById("form")

       test.addEventListener('click', function(e){
            e.preventDefault();
            form.submit()
       })
    </script>
    <!-- <script src="../javascript/homePage.js"></script> -->
</body>

</html>
