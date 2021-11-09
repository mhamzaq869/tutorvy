 <!-- sidenav mobile view start -->
 <header class="site-header" style="display: none;">
    <div class="container-fluid">
        <div class="row" style="margin-bottom: -12px;">
            <span style="font-size:30px;cursor:pointer;position: absolute;left: 25px;top:17px;"
                onclick="openNav()">
                &#9776;
            </span>
            <div id="mySidenav" class="sidenav">
                <p class="ml-5 mb-2">
                    <img src="{{ asset('/admin/assets/img/logo/logo.png')}}" alt="logo">
                </p>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    &times;
                </a>
                <!-- <ul class="list-unstyled list-unstyled-1 newClass componentsX" id="sidenav-hide">
                    <li class="btn active w-100">
                        <a href="{{route('admin.dashboard')}}" data-toggle="" aria-expanded="false">
                            <img src="{{ asset('/admin/assets/img/sidebar/dash-icon.svg')}}" alt="dash-icon" class=" mr-2"> Dashboard
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="tutor-manage/tutor.html" role="button" class="btn-manage">
                            <img src="{{ asset('/admin/assets/img/sidebar/tutor.svg')}}" alt="user-icon" class=" mr-2"> Tutor
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="student-manage/student.html" class="btn-manage">
                            <img src="{{ asset('/admin/assets/img/sidebar/students.svg')}}" alt="user-icon" class=" mr-2"> Student
                        </a>
                    </li>

                    <li class="btn w-100">
                        <a href="manage-institute/institute.html" class="btn-manage">
                            <img src="{{ asset('/admin/assets/img/sidebar/institues.svg')}}" alt="user-icon" class=" mr-2"> Institute
                        </a>
                    </li>
                    <li class="btn  w-100">
                        <a href="courses/courses.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/manage-icon.svg')}}" alt="class-ico" class=" mr-2"> Courses
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="subject/subject.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/course-icon.png')}}" alt="class-ico" class=" mr-2"> Subject
                        </a>
                    </li>
                    <li class="btn  w-100">
                        <a href="webiste/website.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/website.svg')}}" alt="class-ico" class=" mr-2"> Webiste
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="reports/reports.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/report-icon.svg')}}" alt="class-ico" class=" mr-2"> Reports
                        </a>
                    </li>
                    <li class="btn  w-100">
                        <a href="integrations/integrations.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/intergration-icon.svg')}}" alt="class-ico" class=" mr-2">
                            Integrations
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="staff/staff.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/staff-icon.svg')}}" alt="class-ico" class=" mr-2"> Staff
                            Members
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="knowlegde/knowledge.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/knowledge-icon.svg')}}" alt="class-ico" class=" mr-2">
                            Knowledge Base
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="support/support.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/support-icon.svg')}}" alt="class-ico" class=" mr-2">
                            Support
                        </a>
                    </li>
                    <li class="btn w-100">
                        <a href="setting/setting.html">
                            <img src="{{ asset('/admin/assets/img/sidebar/setting-icon.png')}}" alt="class-ico" class=" mr-2">
                            Settings
                        </a>
                    </li>
                </ul> -->
                <ul class="list-unstyled list-unstyled-1 newClass componentsX" id="sidenav-hide">
             @if(Auth::user()->role == 1)
                <li class="btn @if(\Request::path() === 'admin/dashboard') active @endif w-100">
                    <a href="{{route('admin.dashboard')}}" data-toggle="" aria-expanded="false">
                        <img src="{{ asset('/admin/assets/img/sidebar/dash-icon.svg')}}" alt="dash-icon" class=" mr-2"> Dashboard
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/tutor') active @endif w-100">
                    <a href="{{route('admin.tutor')}}" role="button" class="btn-manage">
                        <img src="{{ asset('/admin/assets/img/sidebar/tutor.svg')}}" alt="user-icon" class=" mr-2"> Tutor
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/student') active @endif w-100">
                    <a href="{{route('admin.student')}}" class="btn-manage">
                        <img src="{{ asset('/admin/assets/img/sidebar/students.svg')}}" alt="user-icon" class=" mr-2"> Student
                    </a>
                </li>
                <!-- <li class="btn @if(\Request::path() === 'admin/institute') active @endif w-100">
                    <a href="{{route('admin.course')}}" class="btn-manage">
                        <img src="{{ asset('/admin/assets/img/sidebar/institues.svg')}}" alt="user-icon" class=" mr-2"> Institute
                    </a>
                </li> -->
                <li class="btn  @if(\Request::path() === 'admin/booking') active @endif w-100">
                        <a href="{{route('admin.booking')}}">
                            <img src="{{ asset('/admin/assets/img/sidebar/booking.svg')}}" alt="class-ico" class=" mr-2">
                            Bookings
                        </a>
                </li>
                <li class="btn  @if(\Request::path() === 'admin/classroom') active @endif w-100">
                    <a href="{{route('admin.classroom')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/classroom.svg')}}" alt="class-ico" class=" mr-2"> Classrooms
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/course') active @endif w-100">
                    <a href="{{route('admin.course')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/manage-icon.svg')}}" alt="class-ico" class=" mr-2"> Courses
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/subject') active @endif w-100">
                    <a href="{{route('admin.subject')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/course-icon.png')}}" alt="class-ico" class=" mr-2"> Subject
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/website') active @endif w-100">
                    <a href="{{route('admin.website')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/website.svg')}}" alt="class-ico" class=" mr-2"> Webiste
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/report') active @endif w-100">
                    <a href="{{route('admin.report')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/report-icon.svg')}}" alt="class-ico" class=" mr-2"> Reports
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/integration') active @endif w-100">
                    <a href="{{route('admin.integration')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/intergration-icon.svg')}}" alt="class-ico" class=" mr-2">
                        Integrations
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/staff') active @endif w-100">
                    <a href="{{route('admin.staff')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/staff-icon.svg')}}" alt="class-ico" class=" mr-2"> Staff Members
                    </a>
                </li>
                <!-- <li class="btn @if(\Request::path() === 'admin/role') active @endif w-100">
                    <a href="{{route('admin.role')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/staff-icon.svg')}}" alt="class-ico" class=" mr-2"> Roles Manager
                    </a>
                </li> -->
                <li class="btn @if(\Request::path() === 'admin/knowledge') active @endif w-100">
                    <a href="{{route('admin.knowledge')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/knowledge-icon.svg')}}" alt="class-ico" class=" mr-2"> Knowledge
                        Base
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/support') active @endif w-100">
                    <a href="{{route('admin.support')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/support-icon.svg')}}" alt="class-ico" class=" mr-2"> Support
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/activity-logs') active @endif w-100">
                    <a href="{{route('admin.activity.logs')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/support-icon.svg')}}" alt="class-ico" class=" mr-2"> Activity Logs
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/setting') active @endif w-100">
                    <a href="{{route('admin.setting')}}">
                        <img src="{{ asset('/admin/assets/img/sidebar/setting-icon.png')}}" alt="class-ico" class=" mr-2"> Settings
                    </a>
                </li>
                @else
                    @foreach(Session('permisssions') as $permission)
                        @if($permission->menu_title == "Dashboard")
                            <li class="btn @if(\Request::path() === 'admin/dashboard') active @endif w-100">
                                <a href="{{route('admin.dashboard')}}" data-toggle="" aria-expanded="false">
                                    <img src="{{ asset('/admin/assets/img/sidebar/dash-icon.svg')}}" alt="dash-icon" class=" mr-2"> Dashboard
                                </a>
                            </li>
                        @elseif($permission->menu_title == "Tutor")
                            <li class="btn @if(\Request::path() === 'admin/tutor') active @endif w-100">
                                <a href="{{route('admin.tutor')}}" role="button" class="btn-manage">
                                    <img src="{{ asset('/admin/assets/img/sidebar/tutor.svg')}}" alt="user-icon" class=" mr-2"> Tutor
                                </a>
                            </li>
                        @elseif($permission->menu_title == "Student")
                            <li class="btn @if(\Request::path() === 'admin/student') active @endif w-100">
                                <a href="{{route('admin.student')}}" class="btn-manage">
                                    <img src="{{ asset('/admin/assets/img/sidebar/students.svg')}}" alt="user-icon" class=" mr-2"> Student
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Courses")
                            <li class="btn @if(\Request::path() === 'admin/course') active @endif w-100">
                                <a href="{{route('admin.course')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/manage-icon.svg')}}" alt="class-ico" class=" mr-2"> Courses
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Subject")
                            <li class="btn @if(\Request::path() === 'admin/subject') active @endif w-100">
                                <a href="{{route('admin.subject')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/course-icon.png')}}" alt="class-ico" class=" mr-2"> Subject
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Webiste")
                            <li class="btn @if(\Request::path() === 'admin/website') active @endif w-100">
                                <a href="{{route('admin.website')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/website.svg')}}" alt="class-ico" class=" mr-2"> Webiste
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Reports")
                            <li class="btn @if(\Request::path() === 'admin/report') active @endif w-100">
                                <a href="{{route('admin.report')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/report-icon.svg')}}" alt="class-ico" class=" mr-2"> Reports
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Integrations")
                            <li class="btn @if(\Request::path() === 'admin/integration') active @endif w-100">
                                <a href="{{route('admin.integration')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/intergration-icon.svg')}}" alt="class-ico" class=" mr-2">
                                    Integrations
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Staff Members")
                            <li class="btn @if(\Request::path() === 'admin/staff') active @endif w-100">
                                <a href="{{route('admin.staff')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/staff-icon.svg')}}" alt="class-ico" class=" mr-2"> Staff Members
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Knowledge Base")
                            <li class="btn @if(\Request::path() === 'admin/knowledge') active @endif w-100">
                                <a href="{{route('admin.knowledge')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/knowledge-icon.svg')}}" alt="class-ico" class=" mr-2"> Knowledge
                                    Base
                                </a>
                            </li>
                            
                            @elseif($permission->menu_title == "Support")
                            <li class="btn @if(\Request::path() === 'admin/support') active @endif w-100">
                                <a href="{{route('admin.support')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/support-icon.svg')}}" alt="class-ico" class=" mr-2"> Support
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Activity Logs")
                            <li class="btn @if(\Request::path() === 'admin/activity-logs') active @endif w-100">
                                <a href="{{route('admin.activity.logs')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/support-icon.svg')}}" alt="class-ico" class=" mr-2"> Activity Logs
                                </a>
                            </li>
                            @elseif($permission->menu_title == "Settings")
                            <li class="btn @if(\Request::path() === 'admin/setting') active @endif w-100">
                                <a href="{{route('admin.setting')}}">
                                    <img src="{{ asset('/admin/assets/img/sidebar/setting-icon.png')}}" alt="class-ico" class=" mr-2"> Settings
                                </a>
                            </li>
                        
                        @endif
                        
                    @endforeach
                @endif
            </ul>
            </div>
            <!-- sidenav -->
            <ul class="ml-5">
                <li>
                    <form class="input ml-2 mt-2 input-serach-text">
                        <input type="text" name="search" placeholder="Search Tutor, Student ,Institute">
                    </form>
                </li>
                <li class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2 pull-right">
                                <div class="notification">
                                    <img src="{{ asset('/admin/assets/img/ico/Notification.png')}}" alt="notification-ico">
                                    <span class="notification-text show_notification_counts"> 0 </span>
                                    <ul class="notification-menu navbarNav-1 mt-1">
                                        <li class="container-fluid">
                                            <div class="row nav-row">
                                                <span class="col-md-6">
                                                    <a href="../notification/notification.html"
                                                        class="notification-text1">
                                                        Notifications
                                                    </a>
                                                </span>
                                                <span class="col-md-6">
                                                    <a href="" class="view-bookings">
                                                        Mark all read
                                                    </a>
                                                </span>
                                            </div>
                                            <p class="mt-2 notification-text3 mt-2">
                                                Recent
                                            </p>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="head-1-noti">
                                                        <span class="notification-text6">
                                                            <span class="">
                                                                Marina Hurst
                                                            </span> request for book a class of chemistry on
                                                            periodic tab ...
                                                        </span>
                                                    </div>
                                                    <span class="notification-time">
                                                        10 min ago
                                                    </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="head-1-noti">
                                                        <span class="notification-text6">
                                                            <span>
                                                                Marina Hurst
                                                            </span> request for book a class of chemistry on
                                                            periodic tab ...
                                                        </span>
                                                    </div>
                                                    <span class="notification-time">
                                                        10 min ago
                                                    </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-2 mb-2 ml-1 notification-text3">
                                            Yesterday
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="head-1-noti">
                                                        <span class="notification-text6">
                                                            <span class="">
                                                                Marina Hurst
                                                            </span> request for book a class of chemistry on
                                                            periodic tab ...
                                                        </span>
                                                    </div>
                                                    <span class="notification-time">
                                                        10 min ago
                                                    </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="head-1-noti">
                                                        <span class="notification-text6">
                                                            <span>
                                                                Marina Hurst
                                                            </span> request for book a class of chemistry on
                                                            periodic tab ...
                                                        </span>
                                                    </div>
                                                    <span class="notification-time">
                                                        10 min ago
                                                    </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <img class="avatar mt-2"
                                                        src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}" alt="layer">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item profile-name1 profile-name-12" id="imageDropdowns" data-toggle="dropdown">
                    <a class="nav-link profile-name pl-4 mr-3 mt-1 pb-1" href="#">
                    </a>
                    <img class="profile-img" src="{{ asset('/admin/assets/img/ico/profile-main-1.png')}}" alt="profile">
                    <div class="dropdown">
                        <ul class="dropdown-menu classdrop  classdrop1" role="menu"
                            aria-labelledby="imageDropdown">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" class="disabled" href="">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="#">
                                    Help
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{route('admin.logout')}}">
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
<nav class="navbar navbar-expand-lg mb-4 pb-0">
    <div class="box" id="box" style="float: left;">
        <form class="input ml-2 input-serach-text">
            <input type="text" name="search" placeholder="Search Tutor, Student ,Institute">
        </form>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2 pull-right">
                            <div class="notification mr-4">
                                <img src="{{ asset('/admin/assets/img/ico/Notification.svg')}}" alt="notification-ico">
                                <span class="notification-text show_notification_counts"> 0 </span>
                                <ul class="notification-menu navbarNav-1 mt-1">
                                    <li class="container-fluid mb-0 pb-0">
                                        <div class="row nav-row">
                                            <span class="col-md-6">
                                                <a href="notification/notification.html"
                                                    class="notification-text1 decoration-none">
                                                    Notifications
                                                </a>
                                            </span>
                                            <span class="col-md-6 text-right">
                                                <a href="" class="view-bookings">
                                                    Mark all read
                                                </a>
                                            </span>
                                        </div>
                                        <p class="mt-2 notification-text3 mt-2 ">
                                            Recent
                                        </p>
                                    </li>
                                    <span  class="show_all_notifications">
                                        
                                    </span>
                                    <!-- <li class="show_all_notifications">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img class="avatar mt-2" src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}"
                                                    alt="layer">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="head-1-noti">
                                                    <span class="notification-text6">
                                                        <span class="">
                                                            Marina Hurst
                                                        </span> request for book a class of chemistry on
                                                        periodic tab ...
                                                    </span>
                                                </div>
                                                <span class="notification-time">
                                                    10 min ago
                                                </span>
                                            </div>
                                            <div class="col-md-1">
                                                <img class="dot-image" src="{{ asset('/admin/assets/img/ico/3dot.png')}}"
                                                    alt="dot-ico">
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item profile-name1" id="imageDropdowns">
                <div class="dropdown d-flex">
                    <a class="nav-link profile-name d-flex pl-4 mr-3 mt-1 pb-1" href="#" data-toggle="dropdown">
                        @if( Auth::user()->first_name == null &&  Auth::user()->last_name == null)
                            {{Auth::user()->name}}
                        @else
                            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                        @endif
                    </a>

                    @if(Auth::user()->picture != null)
                        <img class="profile-img" src="{{ asset(Auth::user()->picture)}}" data-toggle="dropdown"
                            alt="profile">
                    @else
                        <img class="profile-img" src="{{ asset('/admin/assets/img/ico/Square-white.jpg')}}" data-toggle="dropdown"
                            alt="profile">
                    @endif
                    <ul class="dropdown-menu classdrop classdrop1">
                        <li>
                            <a tabindex="-1" class="disabled" href="setting/setting.html">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" class="disabled" href="#">
                                Help
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" class="disabled" href="{{route('admin.logout')}}">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- end top nav -->
