@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
 <!-- top Fixed navbar End -->
 <section>

    <div class="container">
        <p id="sidenav-toggles" class="heading-first  mr-3 mb-4 ml-2">
            Bookings
        </p>
    </div>
    <div class="container">
        <div class="col-md-12">
            <p class="heading-third mt-3">Personal information</p>
            <form action="{{route('student.booked.tutor')}}" method="post"  enctype="multipart/form-data" id="book_tutor_form">
                <div class="row mt-5">
                        <div class="input-text col-md-6">
                            <select name="subject" class="form-select form-select-lg w-100"
                                aria-label=".form-select-lg example" >
                                <option value="Select Subject">Select Subject</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->subject_id}}">{{$subject->sub_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-text col-md-6 d-block">
                            <input type="text" class="form-control " name="topic"
                                placeholder="Type your Topic" value="">
                        </div>
                        <div class="input-text col-md-6 d-block">
                            <input type="text" class="form-control " hidden name="tutor_id" id="tutor_id"
                                value="{{$t_id}}">
                        </div>
                    </div><div class="row mt-3">
                        <div class="input-text col-md-12">
                            <input type="text"class="form-control " name="question"
                                placeholder="What is the Question?" value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-text col-md-12 ">
                            <textarea name="brief" id="brief" cols="30" rows="5" class="form-control" placeholder="Write brief about your question"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label for="" class="col-md-12 pl-0"><b>Upload any attachment if you want</b></label>
                            <input type="file" class="form-control dropify" name="upload" id="" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-text col-md-4">
                            <input type="" class="form-control" name="date"  onfocus="(this.type='date')" placeholder="Class Date">
                        </div>
                        <div class="input-text col-md-4">
                            <input type="" class="form-control" name="time" onfocus="(this.type='time')" placeholder="Class Time">
                        </div>
                        <div class="input-text col-md-4">
                            <input type="number" min="1" max="24" class="form-control" name="Duration" placeholder="Class Duration (in hours)">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12" >
                            
                            <button id="finish" type="submit"  
                                class="btn-general   pull-right  mb-3">
                                &nbsp; Send Request &nbsp;
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="modal " id="paymentModal" tabindex="-1"
        role="dialog" aria-labelledby="paymentModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body ml-3 mr-3">
                    <div class="text-center pt-4 pb-3">
                        <img src="{{asset ('assets/images/ico/payment-dollar.png')}}"
                            style="width: 70px;">
                        <p
                            style=" font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 600;margin-top: 10px;">
                            Payment</p>
                        <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;line-height: 1.4;"
                            class="ml-5 mr-5">
                            Please add a payment account before
                            requesting a payout.
                    </div>
                    <div class="mt-2">
                        <select class="form-select">
                            <option selected>Select Payment Method</option>
                            <option value="1">Language</option>
                            <option value="2" >English</option>
                            <option value="3">Urdu</option>
                            <option value="4">English</option>

                        </select>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <input type="number"
                                    placeholder="Card number"  class="form-control">
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text"
                                    placeholder="Card holder name"  class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" placeholder="Exp. month"  class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input type="" placeholder="Exp. year"  class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 -m-0 p-0 mt-3">
                            <input type="number" placeholder="CVS number"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="schedule-btn mr-3 w-25 mb-3"
                        data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@include('js_files.student.bookingJs')
@endsection
