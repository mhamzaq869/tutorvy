 <div class="container-fluid pb-4">
     <div class="row">
         <div class="col-md-12">
             <div class="navigation-wrap  start-header start-style">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-12">
                             <nav class="navbar navbar-expand-xl navbar-light ml-5 mr-5">
                                 <a class="navbar-brand" href="{{ url('/') }}">
                                     <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                 </a>
                                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                     aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                 </button>
                                 <div class="collapse mobile-nav navbar-collapse ml-4" id="navbarSupportedContent">
                                     <ul class="navbar-nav mx-auto">
                                         <li class="nav-item @if (\Request::path()==='tutor' ) active @endif pl-md-0 ml-0 ml-md-4">
                                             <a class="nav-link" href="{{ url('tutor') }}">
                                                 For tutor
                                             </a>
                                         </li>
                                         <li class="nav-item @if (\Request::path()==='student'
                                             ) active @endif pl-md-0 ml-0 ml-md-4">
                                             <a class="nav-link" href="{{ url('student') }}">
                                                 For student
                                             </a>
                                         </li>
                                         <li class="nav-item @if (\Request::path()==='subject'
                                             ) active @endif pl-md-0 ml-0 ml-md-4">
                                             <a class="nav-link" href="{{ url('subject') }}">
                                                 Subjects
                                             </a>
                                         </li>
                                         <li class="nav-item @if (\Request::path()==='course' ) active @endif pl-md-0 ml-0 ml-md-4">
                                             <a class="nav-link" href="{{ url('course') }}">
                                                 Courses
                                             </a>
                                         </li>
                                     </ul>
                                     <ul class="navbar-nav ml-auto py-1 py-md-0">
                                        @auth
<<<<<<< HEAD
                                            <li class="nav-item profile-name1" id="imageDropdowns">
                                                <div class="dropdown d-flex ">
                                                    <a class="nav-link profile-name d-flex pl-4 mr-3 mt-1 pb-1" href="#"
                                                        data-toggle="dropdown" aria-expanded="true">
                                                        {{Auth::user()->first_name}}
                                                    </a>
                                                    @if (Auth::user()->picture)
                                                    <img class="profile-img" src="{{Auth::user()->picture}}"
                                                    data-toggle="dropdown" alt="profile">
                                                    @else
                                                    <img class="profile-img" src="../assets/images/ico/profile-boy.png"
                                                        data-toggle="dropdown" alt="profile">
                                                    @endif
=======
                                            <li class=" profile-name1 " id="imageDropdowns">
                                                <div class="dropdown d-flex ">
                                                    <a class="nav-link profile-name  pl-4 mr-3 mt-1 pb-1" href="#"
                                                        data-toggle="dropdown" aria-expanded="true">
                                                        {{Auth::user()->first_name}}
                                                        @if(Auth::user()->account_id != null)
                                                            <p class="text-mute mb-0">User Id# {{Auth::user()->account_id}}</p>
                                                        @endif

                                                    </a>
                                                    @auth
                                                        @if(Auth::user()->picture)
                                                             <img class="profile-img w-25" src="{{asset(Auth::user()->picture) }}" data-toggle="dropdown" alt="profile">
                                                        @else
                                                            <img class="profile-img w-25" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                                                        @endif
                                                    @else
                                                        <img class="profile-img w-25" src="{{asset('assets/images/ico/Square-white.jpg') }}" data-toggle="dropdown" alt="profile">
                                                    @endauth
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

                                                    <ul class="dropdown-menu classdrop classdrop1 ">
                                                        <li>
                                                            @if(Auth::user()->role == 2)
<<<<<<< HEAD
                                                            <a tabindex="-1" class="" href="{{route('tutor.profile')}}">
                                                                Profile
                                                            </a>
                                                            @elseif(Auth::user()->role == 3)
                                                            <a tabindex="-1" class="" href="{{route('student.profile')}}">
=======
                                                            <a tabindex="-1" class="" href="{{route('tutor.profileView',[Auth::user()->id])}}">
                                                                Profile
                                                            </a>
                                                            @elseif(Auth::user()->role == 3)
                                                            <a tabindex="-1" class="" href="{{route('student.profileView',[Auth::user()->id])}}">
                                                                Profile
                                                            </a>
                                                            @else
                                                            <a tabindex="-1" class="" href="{{url('role')}}">
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                                                                Profile
                                                            </a>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <a tabindex="-1" class="" href="#">
                                                                Help
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form id="form" action="{{route('logout')}}" onclick="preventDefault()" method="post">
                                                                @csrf
                                                            </form>
                                                            <a tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form').submit();">
                                                                Signout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                         @endauth

                                         @guest
                                            <li class="nav-item  pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link " href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </li>
                                            <li class=" button-blue pl-md-0 ml-0 ml-md-4">
<<<<<<< HEAD
                                                <a data-toggle="modal" href="#myModal" class="nav-link sign-text">
=======
                                                <!-- <a data-toggle="modal" href="#registerLogin" class="nav-link sign-text">
                                                    &nbsp;&nbsp; Sign Up &nbsp;&nbsp;
                                                </a> -->
                                                <a  href="{{route('student.register')}}" class="nav-link sign-text">
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
                                                    &nbsp;&nbsp; Sign Up &nbsp;&nbsp;
                                                </a>
                                            </li>
                                         @endguest

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

<<<<<<< HEAD
<style>
.modal .modal-header {
  border-bottom: none;
  position: relative;
}
.modal .modal-header .btn {
  position: absolute;
  top: 0;
  right: 0;
  margin-top: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 0;
}
.modal .modal-footer {
  border-top: none;
  padding: 0;
}
.modal .modal-footer .btn-group > .btn:first-child {
  border-bottom-left-radius: 0;
}
.modal .modal-footer .btn-group > .btn:last-child {
  border-top-right-radius: 0;
}
 </style>
 <div class="container">
	<div class="row">
	    <div id="myModal" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h4 class="modal-title">Modal Heading</h4>
                </div>
                <div class="modal-body ml-auto mr-auto">
                    <a href="{{route('register')}}" class="btn btn-primary">Tutor</a>
                    <a href="{{route('student.register')}}" class="btn btn-dark">Student</a>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
        <a data-toggle="modal" href="#myModal" class="btn btn-primary">Launch demo modal</a>
	</div>
</div>
=======
    <!-- Modal -->
    <div class="modal fade custom_modal" id="registerLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body bg-custom text-center p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="p-2"> <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                            </h1>
                            <h3 class="mb-4 p-2"> Are you a</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="bg-btn-light">
                                <a type="button" href="{{route('student.register')}}" class="btn  modal-btn animate__animated">Student</a>
                                <a type="buttin" href="{{route('register')}}" class="btn  modal-btn animate__animated">Tutor</a>

                            </div>
                        </div>
                    </div>



                </div>
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
