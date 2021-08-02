 <div class="container-fluid pb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation-wrap  start-header start-style">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-xl navbar-light ml-5 mr-5">
                                <a class="navbar-brand" href="{{url('/')}}">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse mobile-nav navbar-collapse ml-4"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item @if(\Request::path() ==='tutor') active @endif pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="{{url('tutor')}}">
                                                For tutor
                                            </a>
                                        </li>
                                        <li class="nav-item @if(\Request::path() ==='student') active @endif pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="{{url('student')}}">
                                                For student
                                            </a>
                                        </li>
                                        <li class="nav-item @if(\Request::path() ==='subject') active @endif pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="{{url('subject')}}">
                                                Subjects
                                            </a>
                                        </li>
                                        <li class="nav-item @if(\Request::path() ==='course') active @endif pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="{{url('course')}}">
                                                Courses
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ml-auto py-1 py-md-0">
                                        <li class="nav-item  pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link " href="{{route('login')}}">
                                                Login
                                            </a>
                                        </li>
                                        <li class=" button-blue pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link sign-text" href="{{route('register')}}">
                                                &nbsp;&nbsp; Sign Up &nbsp;&nbsp;
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
