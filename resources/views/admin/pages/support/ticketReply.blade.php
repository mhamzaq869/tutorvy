@extends('admin.layouts.app')

@section('content')
<style>
    .header h1 {
        margin-left: 70px;
    }
</style>
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <!-- dashborad home -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="heading-first">
                        <a href="#"> < </a>
                        Ticket Title
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Support</a>
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row pt-4 container-bg-1  ml-1 mr-1">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <span class="heading-fifth-1">From tutor </span> <span class="paragraph-text-1 ml-3">11:30
                                            PM</span>
                                        <p class="paragraph-text-1 mt-2 p-3 bg-sky rounded rd-8">
                                            Accessibility ideas for distance learningduring COVID-19. It was popularised in the 1960s
                                            with
                                            the release f Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop
                                            publishing software ike Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>

                                        <div class="container mt-4">
                                            <div class="row">
                                                <div class="col-md-12  m-0 p-0 mt-2 mb-3">
                                                    <span class="heading-fifth-1">Attached file </span> <span
                                                        class="paragraph-text-1 ml-3">11:30 PM</span>
                                                </div>
                                                <div class="col-md-4 bg-sky rounded  p-3 rd-8">
                                                    <img src="{{asset('admin/assets/img/ico/course.png')}}" class="img-fluid" alt="">
                                                    <a href="" class="paragraph-text mt-2">Screenshot01</a>
                                                </div>
                                                <div class="col-md-4 bg-sky rounded p-3 rd-8">
                                                    <img src="{{asset('admin/assets/img/ico/course.png')}}" class="img-fluid" alt="">
                                                    <a href="" class="paragraph-text mt-2">Screenshot01</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right mt-3">
                                        <span class="heading-fifth-1">From admin </span> <span class="paragraph-text-1 ml-3">11:30
                                            PM</span>
                                        <p class="paragraph-text-1 mt-2 p-3 border rounded">
                                            Accessibility ideas for distance learningduring COVID-19. It was popularised in the 1960s
                                            with
                                            the release f Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop
                                            publishing software ike Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>

                                        <div class="container mt-4">
                                            <div class="row">
                                                <div class="col-md-12  m-0 p-0 mt-2 mb-3">
                                                    <span class="heading-fifth-1">Attached file </span> <span
                                                        class="paragraph-text-1 ml-3">11:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="row flex-row-reverse mt-3">
                                                <div class="col-md-4 ">
                                                    <img src="{{asset('admin/assets/img/ico/course.png')}}" class="img-fluid" alt="">
                                                    <a href="" class="paragraph-text mt-2">Screenshot01</a>
                                                </div>
                                                <div class="col-md-4  ">
                                                    <img src="{{asset('admin/assets/img/ico/course.png')}}" class="img-fluid" alt="">
                                                    <a href="" class="paragraph-text mt-2">Screenshot02</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid mt-5 m-0 p-0">
                                        <span class="heading-fifth-1 mb-3">Reply</span>
                                        <form class="form-border mb-5 mt-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <textarea class="textarea-ticket form-control mt-3 p-2" name="" id="" cols="" rows="" placeholder="Your Reply"></textarea>
                                                    <!-- image upload name -->
                                                    <div class="divided-line"></div>
                                                    <!-- end -->
                                                </div>
                                            </div>
                                            <div class="row p-1">
                                                <div class="col-md-9 ">
                                                    <input type="file" id="file" class="file-attach" />
                                                    <label for="file">
                                                        <img src="{{asset('admin/assets/img/ico/Repeat-image.png')}}" class="" alt="repeat" />
                                                    </label>
                                                    <input type="file" id="file" accept=".jpg,.jpeg,.png')}}" class="file-attach" />
                                                    <label for="file">
                                                        <img src="{{asset('admin/assets/img/ico/metro-attachment.png')}}" class="" style="height: 33px;"
                                                            alt="repeat" />
                                                    </label>
                                                    <div id="custom-file-name"></div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <a href="./support-reply.html"> <button class="schedule-btn ">Send</button></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4 rounded border">
                                    <div class="card-1 mt-3">
                                            <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="heading-fifth">Status</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="pending-text-1 float-right">Pending</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="heading-fifth">Date</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="paragraph-text-1 float-right">03 Sep, 2021</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="heading-fifth">Ticket no.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="paragraph-text-1 float-right">0123435</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-1">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="heading-fifth">Category</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <span class="paragraph-text-1 float-right">payment</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mb-3 ml-1 mr-1 border-bottom pb-2">
                                                <div class="col-md-3">
                                                    <div class="">
                                                        <img src="{{asset('admin/assets/img/ico/profile-boy.png')}}" alt="asd">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="">
                                                        <span class="heading-fifth">Harram Laraib</span>
                                                        <p class="paragraph-text">Student</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="float-right schedule-btn mt-2 w-50" data-toggle="modal"
                                                data-target="#assignModal">Assign ticket</button>
                                            <button class="float-right cencel-btn mt-2  w-50" data-toggle="modal"
                                                data-target="#assignModal">Chage Assignnment</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Assign -->
      <div class="modal" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p>Assgin</p>
                        </div>
                        <div class="modal-body">
                            <div class="input-serach">
                                <input class="w-100" type="search" placeholder="Search members" />
                                <img class="serach-icon" src="{{asset('admin/assets/img/ico/Search.png')}}" />
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name">
                                            <img src="{{asset('admin/assets/img/ico/std-icon.png')}}" alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span class="alex-name"><img src="{{asset('admin/assets/img/ico/std-icon.png')}}"
                                                alt="std-icon" /></span>
                                        <span class="pl-2 alex-names">Harram</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <button class="schedule-btn assgin-text" data-toggle="modal"
                                            data-target="#assignModal">Assign</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection
@section('js')
  
@include('js_files.admin.supportJs')
@endsection
