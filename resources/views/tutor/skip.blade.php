<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skip</title>
    <!-- bootstrap start -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- bootstrap end -->
    <link href="../assets/css/global-login.css" rel="stylesheet">
    <link href="../assets/css/skip.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <img class="mx-auto d-block mt-5 mb-5" src="{{asset('assets/images/logo/logo.png')}}">
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto d-block text-center">
                    <img class="mx-auto skip-img d-block pt-5 w-50" src="../assets/images/login-image/image-skip.png">
                    <p class="text-center  show-text mt-3">Show us your eligibility</p>
                    <p class="text-center pb-2 show-text1">Answer some questions related to the subjects you are <br />
                        interested to teach</p>
                    <div class="text-center mt-5" style="padding-bottom: 60px;">
                        <a href="{{route('tutor.dashboard')}}" class="cencel-btn" style="width: 140px;color: black;">Skip for now</a>
                        <a href="{{route('tutor.test',[$request->teach])}}">
                            <button class="schedule-btn" style="width: 140px;">Start test</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
