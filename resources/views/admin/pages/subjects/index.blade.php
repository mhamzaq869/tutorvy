@extends('admin.layouts.app')
<style>
    
svg:not(:root) {
    overflow: hidden;
    width: 20px;
    padding-top: 3px;
}

.flex-1 {
    opacity: 0;
}
</style>
@section('content')
    <!--section start  -->
    <div class="container-fluid mt-5">
        <div class="row ml-1 mr-1">
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
        <div class="row mt-4 ml-1 mr-1">
            <div class="col-md-6">
                <p class="heading-forth mt-3">
                    All subjects
                </p>
            </div>
            <div class="col-md-6">
                <span data-toggle="modal" data-target="#new_subject_model"
                    class="schedule-btn float-right w-25 text-center">Add new Subject</span>
            </div>
        </div>
        <div class="row ml-1 mr-1">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row border-bottom ">
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
                                                <span id="sub-cat_{{ $subject->category_id }}">{{$subject->cat_name}}</span>
                                            </td>
                                            <td class="pt-4 alex-name-2">
                                                <span class="sub-name_{{ $subject->id }}">{{ $subject->name }}</span>
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
                                                            <img onclick="delSubject({{ $subject->id }})"
                                                                src="{{ asset('/admin/assets/img/ico/delete-icon.svg')}}" alt="a"
                                                                class="mr-3 cursor-1">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <img type="button" onclick="editSubject({{ $subject->id }})"
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
                        
                    </div>
                </div>
            </div>

        </div>
        <div class="row ml-1 mr-1">
            <div class="col-md-12">
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination bg-white pagination-example-1">
                        <li class="page-item">
                            <a class="page-link" href="{{$subjects->previousPageUrl()}}" tabindex="-1">
                                <img src="{{ asset('/admin/assets/img/ico/arrow-left-1.png')}}" alt="image" />
                            </a>
                        </li>
                        @if($subjects->onFirstPage())
                            <li class="page-item"><a class="page-link" href="{{$subjects->url(1)}}" style="display:none;">1</a></li>
                        @else
                        <li class="page-item"><a class="page-link" href="{{$subjects->url(1)}}">1</a></li>
                            @endif
                        <li class="page-item"><a class="page-link page-link-1" href="#">{{$subjects->currentPage()}}</a></li>
                        
                        @if($subjects->hasPages())
                            <li class="page-item"><a class="page-link " href="#">.....</a></li>

                            <li class="page-item"><a class="page-link" href="{{$subjects->url($subjects->lastPage())}}"> {{$subjects->lastPage()}} </a></li>
                            <li class="page-item">
                                <a class="page-link" href="{{$subjects->nextPageUrl()}}">
                                    <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                </a>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{$subjects->nextPageUrl()}}">
                                    <img src="{{ asset('/admin/assets/img/ico/arrow-right-1.png')}}" alt="image" />
                                </a>
                            </li>
                            @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- end section -->
    <!-- delete modal -->
    <div class="modal fade" id="delete-subject" tabindex="-1" role="dialog"
        aria-labelledby="delete-subjectTitle" aria-hidden="true">
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

                        <button type="button" class="schedule-btn w-25" id="Yes">Yes</button>
                        <button class="cencel-btn w-25" data-dismiss="modal" >No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->


    <!-- add modal -->
    <div class="modal fade" id="new_subject_model" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <form id="add_subject_form">
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
                                            <select class="w-100" id="subject_category">
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
                                            <input class="w-100 subject-input" name="subject_name" id="subject_name" type=""
                                                placeholder="Write subject name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-7 d-flex">
                                        <button type="button" class="cencel-btn" data-dismiss="modal">Cancel</button>
                                        <button class="schedule-btn ml-3" style="width: 130px;" type="submit">Add subject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- confrim modal -->
    <div class="modal fade" id="edit-subject-model" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content modals">
                <form  id="edit_subject_form">
                    <div class="modal-body modal-bodys">
                        <div class="container text-center pb-3 pt-3">
                            <img src="{{ asset('admin/assets/img/ico/subject-add.svg')}}" alt="verfiy" />
                            <h3 class="mt-3">
                                Edit Subject
                            </h3>
                            <div class="container mt-3">
                                <div class="row pb-3">
                                    <div class="col-md-12">
                                        <div class="input-option">
                                            <select class="w-100" name="edit_subject_cat_id" id="edit_subject_cat_id">
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
                                            <input type="hidden" id="edit_id">
                                            <input class="w-100 subject-input" type="" name="edit_subject_name" id="edit_subject_name"
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
                                            <button class="schedule-btn ml-2" style="width: 130px;" type="submit">
                                                Save changes
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
    <!-- end -->


@endsection
<!-- Extra js to perfome function using ajax. -->
@section('js')
  
@include('js_files.admin.subjectjs')
@endsection
