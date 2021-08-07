<aside class="side-nav" id="show-side-navigation1">
    <nav id="sidebar" class="bg-dark1 ">
        <div class="sidebar-header">
            <div class="logoImage">
                <a href="{{route('admin.dashboard')}}">
                    <img class="mt-2 mb-1 w-50 ml-5 mr-4" src="assets/img/logo/logo-white.png" alt="logoImage">
                </a>
            </div>
        </div>
        <div class="list-ul mt-3">
            <ul class="list-unstyled list-unstyled-1 newClass componentsX" id="sidenav-hide">
                <li class="btn @if(\Request::path() === 'admin/dashboard') active @endif w-100">
                    <a href="{{route('admin.dashboard')}}" data-toggle="" aria-expanded="false">
                        <img src="assets/img/sidebar/dash-icon.svg" alt="dash-icon" class=" mr-2"> Dashboard
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/tutor') active @endif w-100">
                    <a href="{{route('admin.tutor')}}" role="button" class="btn-manage">
                        <img src="assets/img/sidebar/tutor.svg" alt="user-icon" class=" mr-2"> Tutor
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/student') active @endif w-100">
                    <a href="{{route('admin.student')}}" class="btn-manage">
                        <img src="assets/img/sidebar/students.svg" alt="user-icon" class=" mr-2"> Student
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/institute') active @endif w-100">
                    <a href="{{route('admin.course')}}" class="btn-manage">
                        <img src="assets/img/sidebar/institues.svg" alt="user-icon" class=" mr-2"> Institute
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/course') active @endif w-100">
                    <a href="{{route('admin.course')}}">
                        <img src="assets/img/sidebar/manage-icon.svg" alt="class-ico" class=" mr-2"> Courses
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/subject') active @endif w-100">
                    <a href="{{route('admin.subject')}}">
                        <img src="assets/img/sidebar/course-icon.png" alt="class-ico" class=" mr-2"> Subject
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/website') active @endif w-100">
                    <a href="{{route('admin.website')}}">
                        <img src="assets/img/sidebar/website.svg" alt="class-ico" class=" mr-2"> Webiste
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/report') active @endif w-100">
                    <a href="{{route('admin.report')}}">
                        <img src="assets/img/sidebar/report-icon.svg" alt="class-ico" class=" mr-2"> Reports
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/integration') active @endif w-100">
                    <a href="{{route('admin.integration')}}">
                        <img src="assets/img/sidebar/intergration-icon.svg" alt="class-ico" class=" mr-2">
                        Integrations
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/staff') active @endif w-100">
                    <a href="{{route('admin.staff')}}">
                        <img src="assets/img/sidebar/staff-icon.svg" alt="class-ico" class=" mr-2"> Staff Members
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/knowledge') active @endif w-100">
                    <a href="{{route('admin.knowledge')}}">
                        <img src="assets/img/sidebar/knowledge-icon.svg" alt="class-ico" class=" mr-2"> Knowledge
                        Base
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/support') active @endif w-100">
                    <a href="{{route('admin.support')}}">
                        <img src="assets/img/sidebar/support-icon.svg" alt="class-ico" class=" mr-2"> Support
                    </a>
                </li>
                <li class="btn @if(\Request::path() === 'admin/setting') active @endif w-100">
                    <a href="{{route('admin.setting')}}">
                        <img src="assets/img/sidebar/setting-icon.png" alt="class-ico" class=" mr-2"> Settings
                    </a>
                </li>
            </ul>
        </div>
        <!-- end -->
    </nav>

</aside>
