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
                <div class="col-md-12">
                    <h1 class="heading-first">
                        <a href="#"> < </a>
                        Add New Category
                    </h1>
                </div>
                

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="heading-fifth">All categories</span>
                                </div>
                            </div>
                            <div class="all_categories">
                                @foreach($categories as $category)
                                    <div class="row pt-3 pl-3 mt-3" id="row_{{$category->id}}">
                                        <div class="col-md-4 row border-bottom m-0 p-0 pb-2">
                                            <span class="paragraph-text mt-1" id="title_{{$category->id}}"> {{$category->title}} </span>
                                            <div style="position: absolute;right: 5px;">
                                                <img src="{{asset('admin/assets/img/ico/delete-icon.svg')}}" class="pr-4" onclick="deleteModal({{$category->id}})" alt="a" height="17px">
                                                <img src="{{asset('admin/assets/img/ico/edit-icon.svg')}}" onclick="editCategory({{$category->id}},'{{$category->title}}')" alt="b" height="17px">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row pt-3 pl-3 ">
                                <div class="col-md-12 p-0">
                                    <button class="btn-general" id="addCat">Add New Category</button>
                                </div>
                            </div>
                            <form action="{{route('admin.save.category')}}" method="POST" id="CategoryForm">
                                <div class="row  pl-3 " id="addNew">
                                    <div class="col-md-12 p-0">
                                        <p class="heading-fifth title"> </p>
                                    </div>
                                    <div class="col-md-4  m-0 p-0 pb-2">
                                        <input type="hidden" name="id" id="id">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="New Category">
                                        <span class="text-danger title_error small"></span>
                                    </div>
                                    <div class="col-md-12 p-0 mt-3">
                                        <button type="submit" class="btn btn-primary"> Save </button>
                                        <button class="btn btn-danger" type="button" role="button" style="display:none" id="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal verify -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modals">
                    <div class="modal-body modal-bodys">
                        <div class="container text-center pb-3 pt-3">
                            <input type="hidden" id="del_id">
                            <img src="{{asset('admin/assets/img/ico/cross-icon.png')}}" alt="verfiy" />
                            <p class="heading-third mt-3">
                                Delete support category
                            </p>
                            <p class="paragraph-text pb-3">
                                Are you sure you want to delete support category?
                            </p>

                            <button type="button" class="cencel-btn w-25" data-dismiss="modal">No</button>
                            <button type="button" class="schedule-btn w-25" onclick="deleteCategory()">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
  
@include('js_files.admin.categoryJs')
@endsection
