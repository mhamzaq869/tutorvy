@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Staff members
            </h1>
        </div>
        <div class="col-md-6 m-0 p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                    <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                    <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                            href="">Staff member</a>
                    </li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <p class="heading-forth mt-3">
                Manage members
            </p>
        </div>
        <div class="col-md-6">
            <span data-toggle="modal" data-target="#exampleModalCenter-s"
                class="schedule-btn float-right w-25 text-center">Add new member</span>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class=" pt-3 mt-3 container-bg">
        <div class="row mt-0">
            <div class="col-md-12">
                <!-- start table -->
                <table class="table table-borderless">
                    <thead>
                        <!-- table header -->
                        <tr>
                            <th scope="col">Sr.no</th>
                            <th scope="col">Members</th>
                            <th scope="col">Members role</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- staff table data -->
                        @php
                            $count = 1;
                        @endphp

                        @foreach($users as $staff)
                        <tr>
                            <td class="pt-4">
                                <span>{{$count}}</span>
                            </td>
                            <td class="pt-3 alex-name-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2 m-0 p-0">
                                            <span class="alex-name">
                                                <img class="mt-1 img-whidth-table"
                                                    src="{{ asset('admin/assets/img/ico/profile-boy.svg')}}" alt="std-icon" />
                                            </span>
                                        </div>
                                        <div class="col-md-10  alex-21">
                                            <span class="alex-name">{{ $staff->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-4">{{ $staff->role }}</td>
                            <td class="pt-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img data-toggle="modal" data-target="#exampleModalCenter"
                                                src="{{ asset('admin/assets/img/ico/delete-icon.svg')}}" alt="a"
                                                class="mr-3 cursor-1">
                                        </div>
                                        <div class="col-md-1">
                                            <a href="staff-profile.html">
                                                <img src="{{ asset('admin/assets/img/ico/edit-icon.svg')}}" alt="a"
                                                    class="mr-2 cursor-1">
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="pt-3">
                                <a class="btn schedule-btn w-100" href="{{ route('admin.staffProfile',[$staff->id]) }}">
                                    View
                                </a>
                            </td>
                        </tr>
                        @php
                            $count ++;
                        @endphp
                        @endforeach
                        <!-- end data -->
                    </tbody>
                </table>
                <!-- end table -->
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination bg-white pagination-example-1">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">
                        <img src="{{ asset('admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link page-link-1" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <img src="{{ asset('admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                    </a>
                </li>
            </ul>
        </nav>
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
                    </h3>
                    <p class="paragraph-text mb-5">
                        Are you sure you want to remove member?
                    </p>

                    <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cancel</button>
                    <a href="">
                        <button class="schedule-btn w-25">No</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- edit modal -->
<div class="modal fade staff_modal" id="exampleModalCenter-s" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modals">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{ asset('admin/assets/img/ico/profile-blue.svg')}}" alt="verfiy" />
                    <h3 class="mt-3">
                        Add new memeber
                    </h3>
                    <form id="add_staff_form">
                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-6">
                                    <div class="input-serach">
                                        <input type="text" name="name" placeholder="Member name" class="w-100" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-serach">
                                        <input type="password" name="password" placeholder="Set password" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input class="w-100" type="" name="email" placeholder="Member email address" />
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-option">
                                        <select class="w-100" name="role" id="role">
                                            <option>Assign role</option>
                                            <option value="4">SEO Manager</option>
                                            <option value="5">Data Analyst</option>
                                            <option value="6">Support Agent</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <a href="">
                                        <button class="schedule-btn ml-3 add_new_staff" style="width: 130px;">Add memeber</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- confrim modal -->
<div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modals">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{ asset('admin/assets/img/ico/submit-test.png')}}" alt="verfiy" />
                    <h3 class=" mt-3 mb-5">
                        Member request sent successfully
                    </h3>
                    <button type="button" class="schedule-btn w-25" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- Extra js to perfome function using ajax. -->
@section('js')


<script src="{{ asset('/admin/assets/js/pages/staff.js')}}"></script>
@endsection

