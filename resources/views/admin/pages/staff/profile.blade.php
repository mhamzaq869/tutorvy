@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-3">Alexandra Felix</h1>
        </div>
        <div class="col-md-6 m-0 p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                    <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                    <li class="breadcrumb-items m-0 p-0 ml-3"><a href="#">Staff</a></li>
                    <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                    <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                            href="">Staff Profile</a>
                    </li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="bg-white pt-3 pb-3">
                <div class="container text-main-center">
                    <div class="row">
                        <div class="col-md-12 text-center profile-image-1">
                            <img src="{{ asset('admin/assets/img/ico/porfile-main.svg')}}" class="w-50 profile-responsive" />
                            <p class="heading-fifth mt-3 email-text-2">{{ $staff->name }} </p>
                            <p class="heading-sixth-1 mt-0 email-text-1">{{ $staff->role }}</p>
                            <a href="">
                                <p class="text-primary email-text">{{ $staff->email }} </p>
                            </a>
                        </div>
                    </div>
                </div>
                <br />
                <hr />
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                                <img data-toggle="modal" data-target="#exampleModalCenter"
                                    src="{{ asset('admin/assets/img/ico/delete-icon.svg')}}" alt="image" />
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="edit.html">
                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg')}}" alt="image" />
                            </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Tasks
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="all-task.html" class="view-bookings">View all tasks</a>
                </div>
            </div>

            <div class="container-fluid bg-white mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <table class="pt-2 tableed table  table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Srno.</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Assigned date </th>
                                    <th scope="col">Assigned time</th>
                                    <th scope="col">Assigned by</th>
                                    <th scope="col">status</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Ticket no</td>
                                    <td class="text-center pt-4">03 Sep, 2021</td>
                                    <td class="pt-4"> 9 AM
                                    </td>
                                    <td class="pt-4">
                                        Harram
                                    </td>
                                    <td class="pt-4">
                                        <span class="paid-text-1">Sloved</span>
                                    </td>
                                    <td class="pt-3 text-right">
                                        <a href="" class="btn schedule-btn">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pt-4">01</td>
                                    <td class="pt-4">Ticket no</td>
                                    <td class="text-center pt-4">03 Sep, 2021</td>
                                    <td class="pt-4"> 9 AM
                                    </td>
                                    <td class="pt-4">
                                        Harram
                                    </td>
                                    <td class="pt-4">
                                        <span class="pending-text-1">Pendding</span>
                                    </td>
                                    <td class="pt-3 text-right">
                                        <a href="" class="btn schedule-btn">View</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h3>Today</h3>
            <div class="mt-3 container-fluid bg-white pt-3 pb-3">
                <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                    <div class="col-md-1">
                        <div class="">
                            <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                        </div>
                    </div>
                    <div class="col-md-10 mt-1">
                        <span class="heading-forth">Alexandra Felix</span>
                        <span class="paragraph-text1">took a chemistry class with</span>
                        <span class="heading-forth">
                            Marina Hurst
                        </span>
                        <br />
                        <p class="float-left view-bookings-2">10 min ago</p>
                    </div>
                    <div class="col-md-1">
                        <div class="view-bookings">View</div>
                    </div>
                </div>
                <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                    <div class="col-md-1">
                        <div class="">
                            <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                        </div>
                    </div>
                    <div class="col-md-10 mt-1">
                        <span class="heading-forth">Alexandra Felix</span>
                        <span class="paragraph-text1">took a chemistry class with</span>
                        <span class="heading-forth">
                            Marina Hurst
                        </span>
                        <br />
                        <p class="float-left view-bookings-2">10 min ago</p>
                    </div>
                    <div class="col-md-1">
                        <div class="view-bookings">View</div>
                    </div>
                </div>
                <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                    <div class="col-md-1">
                        <div class="">
                            <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                        </div>
                    </div>
                    <div class="col-md-10 mt-1">
                        <span class="heading-forth">Alexandra Felix</span>
                        <span class="paragraph-text1">took a chemistry class with</span>
                        <span class="heading-forth">
                            Marina Hurst
                        </span>
                        <br />
                        <p class="float-left view-bookings-2">10 min ago</p>
                    </div>
                    <div class="col-md-1">
                        <div class="view-bookings">View</div>
                    </div>
                </div>

                <h3>Yesterday</h3>
                <div class="mt-3 container-fluid bg-white pt-3 pb-3">
                    <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                        <div class="col-md-1">
                            <div class="">
                                <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                            </div>
                        </div>
                        <div class="col-md-10 mt-1">
                            <span class="heading-forth">Alexandra Felix</span>
                            <span class="paragraph-text1">took a chemistry class with</span>
                            <span class="heading-forth">
                                Marina Hurst
                            </span>
                            <br />
                            <p class="float-left view-bookings-2">10 min ago</p>
                        </div>
                        <div class="col-md-1">
                            <div class="view-bookings">View</div>
                        </div>
                    </div>
                    <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                        <div class="col-md-1">
                            <div class="">
                                <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                            </div>
                        </div>
                        <div class="col-md-10 mt-1">
                            <span class="heading-forth">Alexandra Felix</span>
                            <span class="paragraph-text1">took a chemistry class with</span>
                            <span class="heading-forth">
                                Marina Hurst
                            </span>
                            <br />
                            <p class="float-left view-bookings-2">10 min ago</p>
                        </div>
                        <div class="col-md-1">
                            <div class="view-bookings">View</div>
                        </div>
                    </div>
                    <div class="row border-bottom ml-2 mr-2 pb-3 mb-3">
                        <div class="col-md-1">
                            <div class="">
                                <img src="{{ asset('admin/assets/img/ico/profile-teacher.svg')}}" alt="profile-image" />
                            </div>
                        </div>
                        <div class="col-md-10 mt-1">
                            <span class="heading-forth">Alexandra Felix</span>
                            <span class="paragraph-text1">took a chemistry class with</span>
                            <span class="heading-forth">
                                Marina Hurst
                            </span>
                            <br />
                            <p class="float-left view-bookings-2">10 min ago</p>
                        </div>
                        <div class="col-md-1">
                            <div class="view-bookings">View</div>
                        </div>
                    </div>
                    <!-- student reviews -->

                </div>
            </div>
        </div>
    </div>

    <!-- end section -->
    <!-- delete modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <div class="modal-body modal-bodys">
                    <div class="container text-center pb-3 pt-3">
                        <img src="{{ asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                        <h3 class="mt-3">
                            Remove memeber
                        </p>
                        <p class="paragraph-text mb-4">
                            Are you sure you want to remove member?
                        </p>

                        <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cencel</button>
                        <a href="">
                            <button class="schedule-btn w-25">No</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

