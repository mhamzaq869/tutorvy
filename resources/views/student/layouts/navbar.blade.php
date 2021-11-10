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
                <ul class="list-unstyled componentsX" id="sidenav-hide">
                    <li class="btn w-100 mt-3 @if(\Request::path() === 'student/dashboard') active @endif">
                        <a href="{{route('student.dashboard')}}" data-toggle="" aria-expanded="false" class="">
                            <img src="{{asset('assets/images/ico/dash-ico.png') }}" alt="dash-ico" class=" mr-2">
                            Dashboard
                        </a>
                    </li>
                    <li class="btn w-100 @if(\Request::path() === 'student/bookings') active @endif">
                        <a href="{{route('student.bookings')}}" data-toggle="" aria-expanded="false">
                            <img src="{{asset('assets/images/ico/book-icons.png') }}" alt="book-ico" class=" mr-2">
                            Bookings
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'student/classroom') active @endif w-100">
                        <a href="{{route('student.classroom')}}">
                            <img src="{{asset('assets/images/ico/class-ico.png') }}" alt="class-ico" class=" mr-2">
                            Classroom <span class="counter-text bg-primary">  </span>
                        </a>
                    </li>
                    <!-- <li class="btn w-100">
                        <a href="#">
                            <img src="{{asset('assets/images/ico/subject-ico.png') }}" alt="subject-ico" class=" mr-2">
                            Subjects
                        </a>
                    </li> -->
                    <li class="btn @if(\Request::path() === 'student/courses') active @endif w-100">
                        <a href="{{route('student.courses')}}">
                            <img src="{{asset('assets/images/ico/class-ico.png')}}" alt="class-ico" class=" mr-2">
                            Courses
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'student/tutor') active @endif w-100">
                        <a href="{{route('student.tutor')}}">
                            <img src="{{asset('assets/images/ico/find-ico.png')}}" alt="tutor" class=" mr-2">
                            Find a Tutor
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'student/calendar') active @endif w-100">
                        <a href="{{route('student.calendar')}}">
                            <img src="{{asset('assets/images/ico/calender-ico.png')}}" alt="calender-ico" class=" mr-2">
                            Calendar
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'tutor/history') active @endif w-100">
                        <a href="{{route('student.history')}}">
                            <img src="{{asset('assets/images/ico/history-ico.png')}}" alt="history-ico" class=" mr-2">
                            Support
                        </a>
                    </li>
                    <li class="btn  w-100">
                        <a href="{{route('student.wallet')}}">
                            <img src="{{asset('assets/images/ico/payment-ico.png')}}" class=" mr-2">
                            Wallet
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'student/settings') active @endif w-100">
                        <a href="{{route('student.settings')}}">
                            <img src="{{asset('assets/images/ico/setting-ico.png')}}" alt="setting-ico" class=" mr-2">
                            Settings
                        </a>
                    </li>
                    <li class="btn @if(\Request::path() === 'student/knowledge')  @endif w-100">
                        <a href="{{route('student.settings')}}">
                            <img src="{{asset('assets/images/ico/book-ico.png')}}" alt="setting-ico" class=" mr-2">
                            Knowledge Base
                        </a>
                    </li>
                </ul>
                <div class="">
                    <a data-toggle="modal" href="#supportModal" style="text-decoration:none;">
                        <div class=" text-center">

                            <img src="{{asset('assets/images/backgrounds/man.svg') }}" alt="background-image">
                            <div class="support">
                                <div class="text-side text-left">
                                    <p class="ml-2 mr-2 mt-2 pt-3 pt-2 support-text">
                                        Support
                                    </p>
                                    <p class="ml-2 mr-2 support-text1">
                                        Contact 24/7 if you need only support
                                    </p>
                                    <p class="ml-2 mr-2 support-text2">
                                        LEARN MORE &nbsp;
                                        <img src="{{asset('assets/images/ico/arrow-left.png')}}" alt="left-arrow-ico">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
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
                            <li class="">
                                <div class="row nav-row">
                                    <div class="col-md-6" style="text-align: left;">
                                        <a href="" class="notification-text1">
                                            Notifications
                                        </a>
                                    </div>
                                    <div class="col-md-6" style="text-align: right;">
                                        <a href="" class="notification-text2">
                                            Mark all read
                                        </a>
                                    </div>
                                </div>
                                <p class="mt-2 mb-2 notification-text3">
                                    Recent
                                </p>
                            </li>
                            <span class="show_all_notifications">
                              
                            </span>
                            
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
        <img src="{{asset('assets/images/ico/side-arrow-icon.jpg')}}" alt="side-arrow" style="width: 20px;">
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
                    <button class=" btn-download-app">
                         Download App Now
                    </button>
                <a href="{{route('student.tutor')}}">
                    <button class="booknow-btn">
                        Book Now
                    </button>
                </a>
            </li>
            <li class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2 pull-right">
                            <div class="notification">
                                <img src="{{asset('assets/images/ico/Notification.png') }}" alt="notification-ico">
                                <span class="notification-text show_notification_counts"> 0 </span>
                                <ul class="notification-menu">
                                    <li class="">
                                        <div class="row nav-row">
                                            <div class="col-md-6" style="text-align: left;">
                                                <a href="" class="notification-text1">
                                                    Notifications
                                                </a>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="notification-text2">
                                                    Mark all read
                                                </a>
                                            </div>
                                        </div>
                                        <p class="mt-2 notification-text3 mt-2">
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
                <a class="nav-link" href="{{ route('student.chat') }}">
                    <img src="{{asset('assets/images/ico/email.png') }}" alt="img-email"
                        style="width: 20px;cursor: pointer !important;">
                </a>
            </li>
            <li class="nav-item profile-name1" id="imageDropdowns">
                <div class="dropdown d-flex ">
               
                    <a class="nav-link profile-name dd  pl-4 mr-3 mt-0 pb-0" href="#"
                        data-toggle="dropdown" id="" aria-expanded="true">
                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                        @if(Auth::user()->account_id != null)
                            <p class="text-mute mb-0">User Id# {{Auth::user()->account_id}}</p>
                        @endif
                    </a>
                    @auth
                        @if(Auth::user()->picture)
                                <img class="profile-img profile-img2 dd "  aria-expanded="true" src="{{asset(Auth::user()->picture) }}" data-toggle="dropdown" alt="profile">
                            
                        @else
                            <img class="profile-img profile-img2 dd "  aria-expanded="true" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                        @endif
                    @else
                    <img class="profile-img profile-img2 dd "  aria-expanded="true" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                    @endauth
                    <ul class="dropdown-menu classdrop classdrop1 dd2">
                        <li>
                            <a tabindex="-1" class="" href="{{route('student.profileView',[Auth::user()->id])}}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" class="" href="#">
                                Help
                            </a>
                        </li>
                        <li>
                            <form id="form" style="display:none;"  action="{{route('logout')}}" onclick="preventDefault()" method="post">
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
