@extends('admin.layouts.app')

@section('content')
    <!--section start  -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    Subjects
                </h1>
            </div>
            <div class="col-md-6 m-0 p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                        <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                        <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                href="">Subjects</a>
                        </li>

                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p class="heading-forth mt-3">
                    All subjects
                </p>
            </div>
            <div class="col-md-6">
                <span data-toggle="modal" data-target="#exampleModalCenter-s"
                    class="schedule-btn float-right w-25 text-center">Add new Subject</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="pt-3 mt-3 container-bg">
            <div class="row border-bottom mr-1 ml-1">
                <div class="col-md-11 m-0 p-0">
                    <form>
                        <div class="d-flex table">
                            <div class="input-option ml-1">
                                <select id="std-level">
                                    <option>
                                        Subject category</option>
                                    <option>Chemistry</option>
                                    <option>Physics</option>
                                </select>
                            </div>
                            <div class="input-option ml-1">
                                <select id="availability-id">
                                    <option>Subject sub-category</option>
                                    <option>Periodic table</option>
                                    <option>Gravity</option>
                                </select>
                            </div>
                            <div class="input-option ml-1">
                                <select id="rate-number">
                                    <option>Classes</option>
                                    <option value="1">Lowest rate</option>
                                    <option value="1">Highest rate</option>
                                </select>
                            </div>
                            <div class="input-option ml-1">
                                <select>
                                    <option>Courses</option>
                                    <option value="1">Lowest rate</option>
                                    <option value="1">Highest rate</option>
                                </select>
                            </div>
                            <!-- <div class=" ml-3">
                            <input type="submit" value="Go" class="schedule-btn" />
                        </div> -->

                            <div class="reset-text mt-2 ">
                                <a href="">
                                    <input type="reset" value="Reset" class="reset-button" />
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1">
                    <div class="sort-text">
                        <select id="sort-by-home">
                            <option value="3" disabled selected>Sort by</option>
                            <option value="111">Old to new</option>
                            <option value="1111111">New to old</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-12">
                    <!-- start table -->
                    <table class="table table-borderless">
                        <thead>
                            <!-- table header -->
                            <tr>
                                <th scope="col">Subject category</th>
                                <th scope="col">Subject sub-category</th>
                                <th scope="col">Tutors</th>
                                <th scope="col">Stduents</th>
                                <th scope="col">Courses</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- staff table data -->
                            @foreach($subjects as $subject)
                            <tr>
                                <td class="pt-4">
                                    <span>{{$subject->cat_name}}</span>
                                </td>
                                <td class="pt-4 alex-name-2">
                                    <span>{{ $subject->name }}</span>
                                </td>
                                <td class="pt-4">
                                    0
                                </td>
                                <td class="pt-4">
                                    0
                                </td>
                                <td class="pt-4">
                                    0
                                </td>
                                <td class="pt-4">
                                    <div class="container">
                                        <div class="row float-right">
                                            <div class="col-md-1">
                                                <img data-toggle="modal" data-target="#exampleModalCenter"
                                                    src="{{ asset('/admin/assets/img/ico/delete-icon.svg')}}" alt="a"
                                                    class="mr-3 cursor-1">
                                            </div>
                                            <div class="col-md-1">
                                                <img data-toggle="modal" data-target="#exampleModalCenters"
                                                    src="{{ asset('/admin/assets/img/ico/edit-icon.svg')}}" alt="a"
                                                    class="mr-2 cursor-1">
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
                            </tr>
                            @endforeach
                           
                            <!-- end data -->
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>

            <div class="container-fluid">
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination bg-white pagination-example-1">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">
                                <img src="{{ asset('/admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link page-link-1" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                            </a>
                        </li>
                    </ul>
                </nav>
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
                        <img src="{{ asset('/admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                        <h3 class="mt-3">
                            Remove Subject
                        </h3>
                        <p class="paragraph-text mb-5">
                            Are you sure you want to remove Subject?
                        </p>

                        <button type="button" class="cencel-btn w-25" data-dismiss="modal">Yes</button>
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
    <div class="modal fade" id="exampleModalCenter-s" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <div class="modal-body modal-bodys">
                    <div class="container text-center pb-3 pt-3">
                        <img src="{{ asset('admin/assets/img/ico/subject-add.svg')}}" alt="verfiy" />
                        <h3 class="mt-3">
                            Add new Subject
                        </h3>

                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-option">
                                        <select class="w-100">
                                            <option>Subject category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input class="w-100 subject-input" name="subject" type=""
                                            placeholder="Write subject name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <a href="">
                                        <button class="schedule-btn ml-3" style="width: 130px;">Add subject</button>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                        <img src="../assets/img/ico/subject-add.svg" alt="verfiy" />
                        <h3 class="mt-3">
                            Edit new subject
                        </h3>
                        <div class="container mt-3">
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-option">
                                        <select class="w-100">
                                            <option>chemistry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="input-serach">
                                        <input class="w-100 subject-input" type=""
                                            placeholder="Advance chemistry" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7 d-flex">
                                    <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                    <a href="">
                                        <button class="schedule-btn ml-2" style="width: 130px;">
                                            Save changes
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

@endsection
