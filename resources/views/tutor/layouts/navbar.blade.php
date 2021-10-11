  <!-- sidenav mobile view start -->
  <header class="site-header" style="display: none;">
    <div class="container-fluid">
        <div class="row" style="margin-bottom: -12px;">
            <span style="font-size:30px;cursor:pointer;position: absolute;left: 25px;top:17px "
                onclick="openNav()">
                &#9776;
            </span>
            <div id="mySidenav" class="sidenav">
                <p class="ml-5 mb-2">
                    <img src="{{asset('assets/images/logo/logo.png') }}" alt="logo">
                </p>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    &times;
                </a>
                <ul>
                    <li class="btn w-100 mt-3 active">
                        <a href="#" data-toggle="" aria-expanded="false" class="">
                            <img src="{{asset('assets/images/ico/dash-ico.png') }}" alt="dash-ico" class=" mr-2">
                            Dashboard
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="./Booking/Booking.html" data-toggle="" aria-expanded="false">
                            <img src="{{asset('assets/images/ico/book-icons.png') }}" alt="book-ico" class=" mr-2">
                            Bookings
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="#">
                            <img src="{{asset('assets/images/ico/class-ico.png') }}" alt="class-ico" class=" mr-2">
                            Classroom  <span class="counter-text bg-primary">  </span>
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="#">
                            <img src="{{asset('assets/images/ico/subject-ico.png') }}" alt="subject-ico" class=" mr-2">
                            Subjects
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="./clander/clander.html">
                            <img src="{{asset('assets/images/ico/class-ico.png') }}" alt="class-ico" class=" mr-2">
                            calendar
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="#">
                            <img src="{{asset('assets/images/ico/history-ico.png') }}" alt="history-ico" class=" mr-2">
                            History
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="#">
                            <img src="{{asset('assets/images/ico/payment-ico.png') }}" alt="payment-ico" class=" mr-2">
                            Payment
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="./setting/setting.html">
                            <img src="{{asset('assets/images/ico/setting-ico.png') }}" alt="setting-ico" class=" mr-2">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidenav -->
            <ul class="ml-5">
                <li>

                </li>
                <li>
                    <div class="notification mt-2 ml-3">
                        <img src="{{asset('assets/images/ico/Notification.png') }}" alt="notifiaction">
                        <span class="notification-text show_notification_counts"> 0 </span>
                        <ul class="notification-menu">
                            <li class="container-fluid">
                                <div class="row nav-row">
                                    <span class="col-md-6" style="text-align: left;">
                                        <a href="" class="notification-text1">
                                            Notifications
                                        </a>
                                    </span>
                                    <span class="col-md-6" style="text-align: right;">
                                        <a href="" class="notification-text2">
                                            Mark all read
                                        </a>
                                    </span>
                                </div>
                                <p class="mt-2 mb-2 notification-text3">
                                    Recent
                                </p>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/Layer.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png')}}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/star-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2 ml-3 notification-text3">
                                Yesterday
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/bach-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/tick-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" id="imageDropdown" data-toggle="dropdown"
                    style="position: absolute;right: 15px;">
                    <img src="{{asset('assets/images/logo/profile-image.png') }}" alt="logo"
                        style="width: 35px;border-radius: 30px;">
                    <div class="dropdown classdrop" style="position: absolute;right:99px;top: 7px; ">
                        <ul class="dropdown-menu classdrop " style="padding-bottom: 5px;padding-top: 5px;"
                            role="menu" aria-labelledby="imageDropdown">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{route('tutor.profile')}}">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                    Help
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="./Login/reset.html">
                                    Logout
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="ml-5">
                <li>

                </li>
                <li>
                    <div class="notification mt-2 ml-3">
                        <img src="{{asset('assets/images/ico/Notification.png') }}" alt="notifiaction">
                        <span class="notification-text">
                            4
                        </span>
                        <ul class="notification-menu">
                            <li class="container-fluid">
                                <div class="row nav-row">
                                    <span class="col-md-6" style="text-align: left;">
                                        <a href="" class="notification-text1">
                                            Notifications
                                        </a>
                                    </span>
                                    <span class="col-md-6" style="text-align: right;">
                                        <a href="" class="notification-text2">
                                            Mark all read
                                        </a>
                                    </span>
                                </div>
                                <p class="mt-2 mb-2 notification-text3">
                                    Recent
                                </p>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/Layer.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png')}}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/star-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2 mb-2 ml-3 notification-text3">
                                Yesterday
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/bach-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="avatar mt-2 mb-2 "
                                            src="{{asset('assets/images/notifiaction/tick-ico.png') }}" alt="Layer">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="notification-flex">
                                            <span class="notification-text4">
                                                <span class="notification-text5">
                                                    Marina Hurst
                                                </span>
                                                request for book a class of chemistry on periodic tab
                                                ...
                                            </span>
                                        </div>
                                        <span class="notification-time">
                                            10 min ago
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <img class="dot-image" src="{{asset('assets/images/ico/3dot.png') }}"
                                            alt="dot-ico">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" id="imageDropdown" data-toggle="dropdown"
                    style="position: absolute;right: 15px;">
                    <img src="{{asset('assets/images/logo/profile-image.png') }}" alt="logo"
                        style="width: 35px;border-radius: 30px;">
                    <div class="dropdown classdrop" style="position: absolute;right:99px;top: 7px; ">
                        <ul class="dropdown-menu classdrop " style="padding-bottom: 5px;padding-top: 5px;"
                            role="menu" aria-labelledby="imageDropdown">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{route('tutor.profile')}}">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                    Help
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="./Login/reset.html">
                                    Logout
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</header>
<!-- end mobile nav -->
<!-- side navbar of icons button with navbar -->
<nav class="navbar navbar-expand-lg mb-4 pb-2" style="width: 100%;background-color: #FBFBFB !important;">
    <button onclick="navicon()" class="sidenav-toggle rotate">
        <img src="{{asset('assets/images/ico/side-arrow-icon.jpg') }}" alt="side-arrow" style="width: 20px;">
    </button>
    <img id="sideicons-side" src="{{asset('assets/images/ico/side-icons.png') }}" alt="sideicons"
        style="position: absolute;left: 30px;margin-top: 10px; display: none;">
    <div class="box" id="box" style="float: left;">
        <form class="input-nav">

        </form>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item  mr-5">
                    <!-- <button class=" btn-download-app">
                        <i class="fa fa-android pr-2"></i> Download App Now
                    </button> -->
                    <button class=" btn-download-app">
                         Download App Now
                    </button>
            </li>
            <li class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2 pull-right">
                            <div class="notification">
                                <img src="{{asset('assets/images/ico/Notification.png') }}" alt="notification-ico">
                                <span class="notification-text show_notification_counts"> 0 </span>
                                <ul class="notification-menu ">
                                    <li class="container-fluid mb-0 pb-0">
                                        <div class="row nav-row">
                                            <span class="col-md-6" style="text-align: left;">
                                                <a href="" class="notification-text1 decoration-none">
                                                    Notifications
                                                </a>
                                            </span>
                                            <span class="col-md-6" style="text-align: right;">
                                                <a href="" class="notification-text2">
                                                    Mark all read
                                                </a>
                                            </span>
                                        </div>
                                        <p class="mt-2 mb-2 notification-text3">
                                            Recent
                                        </p>
                                    </li>
                                    
                                    <span class="show_all_notifications">

                                    </span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item pr-4">
                <a class="nav-link" href="{{ route('tutor.chat')}}">
                    <img src="{{asset('assets/images/ico/email.png') }}" alt="img-email"
                        style="width: 20px;cursor: pointer !important;">
                </a>
            </li>
            <li class="nav-item profile-name1" id="imageDropdowns">
                <div class="dropdown d-flex ">
                    <a class="nav-link profile-name  pl-4 mr-3 mt-0 pb-0" href="#"
                        data-toggle="dropdown" aria-expanded="true">
                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                        @if(Auth::user()->account_id != null)
                            <p class="text-mute mb-0">User Id# {{Auth::user()->account_id}}</p>
                        @endif
                    </a>
                    @auth
                        @if(Auth::user()->picture)
                                <img class="profile-img " src="{{asset(Auth::user()->picture) }}" data-toggle="dropdown" alt="profile">
                        @else
                        <img class="profile-img" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                        @endif
                    @else
                        <img class="profile-img" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                    @endauth

                    <ul class="dropdown-menu classdrop classdrop1 ">
                        <li>
                            <a tabindex="-1" class="" href="{{route('tutor.profileView',[Auth::user()->id])}}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" class="" href="#">
                                Help
                            </a>
                        </li>
                        <li>
                            <form id="form"  action="{{route('logout')}}" onclick="preventDefault()" method="post" style="display:none;">
                                @csrf
                            </form>
                            <a tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form').submit();">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- top Fixed navbar End -->
