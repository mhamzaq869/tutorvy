@extends('admin.layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row ml-1 mr-1">
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
    <div class="row ml-1 mr-1">
        <div class="col-md-6">
            <h2>
                Manage Members
            </h2>
        </div>
        <div class="col-md-6">
            <span data-toggle="modal" data-target="#exampleModalCenter-s"
                class="schedule-btn float-right w-25 text-center">Add new member</span>
        </div>
    </div>
    <div class="row ml-1 mr-1">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-0 ">
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
                                        <td class="pt-4">{{ $staff->r_name }}</td>
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
                                                            <input type="checkbox" {{ ($staff->status == 1) ? 'checked' : ''}}>
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

                        <div class="col-md-12">
                            <nav aria-label="Page navigation" class="mt-4">
                                <ul class="pagination bg-white pagination-example-1">
                                    <li class="page-item">
                                        <a class="page-link" href="{{$users->previousPageUrl()}}" tabindex="-1">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @if($users->onFirstPage())
                                        <li class="page-item"><a class="page-link" href="{{$users->url(1)}}" style="display:none;">1</a></li>
                                    @else
                                    <li class="page-item"><a class="page-link" href="{{$users->url(1)}}">1</a></li>
                                        @endif
                                    <li class="page-item"><a class="page-link page-link-1" href="#">{{$users->currentPage()}}</a></li>
                                    @if($users->hasPages())
                                    <li class="page-item"><a class="page-link " href="#">.....</a></li>
            
                                    <li class="page-item"><a class="page-link" href="{{$users->url($users->lastPage())}}"> {{$users->lastPage()}} </a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="{{$users->nextPageUrl()}}">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{$users->nextPageUrl()}}">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <div class="row mt-3 ml-1 mr-1">
        <div class="col-md-6 pt-2">
            <h2>
                Staff Roles
            </h2>
        </div>
        <div class="col-md-6">
            <span data-toggle="modal" data-target="#add_role"
                class="schedule-btn float-right w-25 text-center ml-3">Add new Role</span>
        </div>
    </div>
    <div class="row ml-1 mr-1">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    
                    <div class="row mt-0 ">
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
                                        <td class="pt-3">
                                            <span>{{$count}}</span>
                                            <!-- <span id="role_id">{{ $role->id }}</span>s -->
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
                                            <a href="{{url('admin/role-permission')}}/{{$role->id}}">
                                                <img src=" {{ asset('admin/assets/images/ico/edit-icon.png')}}" alt="edit-icon" class="ml-1">
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

                        <div class="col-md-12">
                            <nav aria-label="Page navigation" class="mt-4">
                                <ul class="pagination bg-white pagination-example-1">
                                    <li class="page-item">
                                        <a class="page-link" href="{{$roles->previousPageUrl()}}" tabindex="-1">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @if($roles->onFirstPage())
                                        <li class="page-item"><a class="page-link" href="{{$roles->url(1)}}" style="display:none;">1</a></li>
                                    @else
                                    <li class="page-item"><a class="page-link" href="{{$roles->url(1)}}">1</a></li>
                                    @endif
                                    
                                    <li class="page-item"><a class="page-link page-link-1" href="#">{{$roles->currentPage()}}</a></li>
                                    @if($roles->hasPages())
                                    <li class="page-item"><a class="page-link " href="#">.....</a></li>
            
                                    <li class="page-item"><a class="page-link" href="{{$roles->url($roles->lastPage())}}"> {{$roles->lastPage()}} </a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="{{$roles->nextPageUrl()}}">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @else
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="{{$roles->nextPageUrl()}}">
                                            <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
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
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
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
<div class="modal fade role_modal" id="add_role" tabindex="-1" role="dialog"
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
                                        <input type="text" name="role_name" placeholder="Enter Name" class="w-100" />
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
                    <form id="edit_role_form">
                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input type="hidden" id="edit_id">
                                        <input type="text" name="edit_name"  id="edit_name" placeholder="Enter Name" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <button class="schedule-btn ml-3 edit_role"  style="width: 130px;" type="submit">Edit Role</button>
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
  
@include('js_files.admin.staffJs')
@endsection


