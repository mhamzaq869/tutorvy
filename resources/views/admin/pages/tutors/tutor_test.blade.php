@extends('admin.layouts.app')
@section('content')
@php
    $request_ = route('admin.tutorRequest',[$test->user_id,$test->id]);
@endphp
<div class="container-fluid pb-4">
            <h1 class="mt-5">
               <a href="{{ route('admin.tutorRequest',[$test->user_id,$test->id]) }}"> < </a> Tutor test </h1>
        </div>
        <div class="container-fluid  pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class=" bg-white pl-1 pr-1">
                        <div class="pt-3 ">
                            <h3>
                                Write down 3 questions and their awnsers
                            </h3>
                            <hr />
                        </div>
                        <div class="container-fluid pb-4">
                            <div class="row">
                                <div class="col-md-8 bg-dark-blue">
                                    <div class="mt-4 pb-4">
                                        <span class="notification-text3">Question 1</span>
                                        <p class="heading-forth mt-2">{{ $test->question_1 }}</p>
                                        <span class="notification-text2">
                                            {{ $test->answer_1 }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                        <div class="container-fluid pb-4">
                            <div class="row ">
                                <div class="col-md-8 bg-dark-blue">
                                    <div class="mt-4 pb-4">
                                        <span class="notification-text3">Question 2</span>
                                        <p class="heading-forth mt-2">{{ $test->question_2 }}</p>
                                        <span class="notification-text2">
                                            {{ $test->answer_2 }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="container-fluid">
                            <div class=" row ">
                            <div class="col-md-8 bg-dark-blue">
                                <div class="mt-4 pb-4">
                                    <span class="notification-text3">Question 3</span>
                                    <p class="heading-forth mt-2">{{ $test->question_3 }}</p>
                                    <span class="notification-text2">
                                        {{ $test->answer_3 }}
                                    </span>
                                </div>
                            </div>
                    
                            <div class="col-md-4"></div>

                        </div>
                        <div class="btn-test  col-md-8  mt-3 pb-5" style="text-align: right;">
                            
                            <button class="cencel-btn" data-toggle="modal" data-target="#exampleModalCenterss">Reject</button>

                            <a class="btn schedule-btn save_btn" onclick="verifyAssessment(`{{$test->id}}`,1)">  Verfiy </a>

                            <button type="button" role="button" type="button" id="verfication_loading" disabled class="btn btn-primary" 
                            style="width: 110px;display:none"> Processing </button>

                        </div>
                    </div>
      

                    </div>
                </div>

            </div>
        </div>
        <!-- modal -->
        <div class="modal fade reject_asses_modal" id="exampleModalCenterss" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body  modal-bodys" style="height: 450px;">
                        <div class="container text-center pb-3 pt-3">
                            <img src="{{ asset('/admin/assets/img/ico/cross-icon.png') }}" alt="verfiy" />
                            <h3 class="mt-3 ">
                                Why are you rejecting tutor?
                            </h3>
                            <p class="paragraph-text">
                                Write allegation that why are you rejecting tutor
                            </p>
                            <textarea class="form-control" rows="5" placeholder="Write reason" id="assess_reject_reason"></textarea>
                            <div class="mt-4 d-flex" style="position: absolute;right: 30px;">
                                <button class="cencel-btn w-150 mr-4" data-dismiss="modal">Cancel</button>
                                <button class="schedule-btn w-150" onclick="verifyAssessment(`{{$test->id}}`,2)">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

<!-- Extra js to perfome function using ajax. -->
@section('js')
<script>
    let request_ = "{{$request_}}";
</script>    
@include('js_files.admin.tutor')
@endsection