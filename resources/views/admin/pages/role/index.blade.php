@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Staff Roles
            </h1>
        </div>
        <div class="col-md-6 m-0 p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                    <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                    <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                            href="">Staff role</a>
                    </li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <p class="heading-forth mt-3">
                Manage Roles
            </p>
        </div>
        <div class="col-md-6">
            <span data-toggle="modal" data-target="#exampleModalCenter-s"
                class="schedule-btn float-right w-25 text-center">Add new Role</span>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class=" pt-3 mt-3 container-bg">
        <div class="row mt-0">
            <div class="col-md-12">
                <!-- start table -->
                <table class="table table-borderless" id="RolesList">
                    <thead>
                        <!-- table header -->
                        <tr>
                            <th scope="col">Sr.no</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- staff table data -->
                        @php
                            $count = 1;
                        @endphp

                        @foreach($roles as $role)
                        <tr>
                            <td class="pt-4">
                                <span id="role_id">{{ $role->id }}</span>
                            </td>
                            <td class="pt-3 alex-name-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 alex-21_">
                                            <span class="alex-name_{{ $role->id }}">{{ $role->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a type="button"  onclick="delRole({{ $role->id }})">
                                        <img src="{{ asset('admin/assets/img/ico/delete-icon.png')}}" alt="delete-icon" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                </a>
                                <a type="button" onclick="editRole({{ $role->id }})">
                                        <img src=" {{ asset('admin/assets/img/ico/edit-icon.png')}}" alt="edit-icon" class="ml-1">
                                 </a>
                                <!-- <button class="btn btn-danger" onclick="delRole({{ $role->id }})"> Delete </button> -->
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
<div class="modal fade" id="delete-role" tabindex="-1" role="dialog"
    aria-labelledby="delete-role" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modals">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{ asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                    <h3 class="mt-3">
                        Remove Role
                    </h3>
                    <p class="paragraph-text mb-5">
                        Are you sure you want to remove member?
                    </p>

                    <button type="button" class="cencel-btn w-25" data-dismiss="modal">Cancel</button>
                    <button class="schedule-btn w-25" id="Yes">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- add modal -->
<div class="modal fade role_modal" id="exampleModalCenter-s" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modals">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{ asset('admin/assets/img/ico/profile-blue.svg')}}" alt="verfiy" />
                    <h3 class="mt-3">
                        Add Role
                    </h3>
                    <form id="add_role_form">
                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input type="text" name="name" placeholder="Enter Name" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <button class="schedule-btn ml-3 add_new_role" style="width: 130px;" type="submit">Add Role</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit modal -->
<div class="modal fade role_modal" id="edit-role" tabindex="-1" role="dialog"
    aria-labelledby="edit-role" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modals">
            <div class="modal-body modal-bodys">
                <div class="container text-center pb-3 pt-3">
                    <img src="{{ asset('admin/assets/img/ico/profile-blue.svg')}}" alt="verfiy" />
                    <h3 class="mt-3">
                        Add Role
                    </h3>
                    <form id="add_role_form">
                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input type="text" name="name"  id="edit_name" placeholder="Enter Name" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <button class="schedule-btn ml-3 edit_role" id="edit_noe" style="width: 130px;" type="submit">Edit Role</button>
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

@endsection
<!-- Extra js to perfome function using ajax. -->
@section('js')


<script src="{{ asset('/admin/assets/js/pages/staff.js')}}"></script>
<script src="{{ asset('/admin/assets/js/pages/role.js')}}"></script>
@endsection

