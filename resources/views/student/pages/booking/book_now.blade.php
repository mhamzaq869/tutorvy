@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
<style>
    input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}
</style>
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
            <form enctype="multipart/form-data" id="book_tutor_form">
                <input type="hidden" name="current_date" id="current_date">
                <div class="row mt-5">
                        <div class=" col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="subject" id="tutor_subjects" class="form-select form-select-lg w-100"
                                        aria-label=".form-select-lg example" required>
                                        <option selected="selected" value="Select Subject">Select Subject</option>
                                        @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_id}}" data="{{$subject->user_id}}">{{$subject->sub_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input type="text" class="form-control " name="topic"
                                    placeholder="Type your Topic" value="" required>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <select name="subject_plan" id="subject_plans" class="form-select form-select-lg w-100"
                                        aria-label=".form-select-lg example" required>
                                        <option value="Select Subject">Select Plans</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 d-block">
                            <div class="card mt-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-2 col-6">
                                                    @if($user->picture == "" || $user->picture == null)
                                                        <img src="{{asset ('assets/images/ico/Square-white.jpg')}}" alt="" class="profile-img">
                                                    @else
                                                        <img src="{{asset($user->picture)}}"  alt="" class="profile-img">
                                                    @endif
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <h3 class="mb-0">{{$user->first_name}}  {{$user->last_name}}</h3>
                                                    <p class="mb-0 "><img src="{{asset('assets/images/ico/red-icon.png')}}" alt="" class="pr-2">  {{$user->professional->last()->designation ?? '---'}}</p>
                                                    <p class="mb-0 "><img src="{{asset('assets/images/ico/location-pro.png')}}" alt="" class="pr-2">{{ $user->city != NULL ? $user->city.' , ' : '---' }} {{ $user->country != NULL ? $user->country: '---' }}</p>

                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <p>
                                                        @if($user->rating == 1)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i> 1.0
                                                        @elseif($user->rating == 2)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>  2.0
                                                        @elseif($user->rating == 3)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star "></i>  3.0
                                                        @elseif($user->rating == 4)
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>
                                                        <i class="fa fa-star text-yellow"></i>  4.0
                                                        @else
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>
                                                        <i class="fa fa-star "></i>  0.0
                                                        @endif

                                                        <small class="text-grey">(0 reviews)</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        @if($user->rank == 0)
                                        <a class="ab_right" href="#" data-toggle="modal"
                                            data-target="#rankModal">New <img src="/assets/images/ico/bluebadge.png" class="wd-30" alt="" width="25">
                                        </a>
                                        @elseif($user->rank == 1)
                                        <a class="ab_right" href="#" data-toggle="modal"
                                            data-target="#rankModal">Emerging <img src="/assets/images/ico/yellow-rank.png" class="wd-30" alt="" width="25">
                                        </a>
                                        @elseif($user->rank == 2)
                                        <a class="ab_right" href="#" data-toggle="modal"
                                            data-target="#rankModal">Top Rank <img src="/assets/images/ico/rank.png" class="wd-30" alt="" width="25">
                                        </a>
                                        @else
                                        <a class="ab_right" href="#" data-toggle="modal"
                                            data-target="#rankModal">Upgrade badge <img src="/assets/images/ico/rank.png" class="wd-30" alt="" width="25">
                                        </a>
                                        @endif
                                        </div>
                                        <!-- <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mb-0 "><img src="{{asset('assets/images/ico/language.png')}}" alt="" class="pr-2">{{ $user->lang_short != NULL ? $user->lang_short : '---' }}</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-text col-md-6 d-block">
                            <input type="text" class="form-control " hidden name="tutor_id" id="tutor_id"
                                value="{{$t_id}}">
                        </div>
                    </div><div class="row mt-3">
                        <div class="input-text col-md-12">
                            <input type="text"class="form-control " name="question"
                                placeholder="What is the Question?" value="" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-text col-md-12 ">
                            <textarea name="brief" id="brief" cols="30" rows="5" class="form-control" placeholder="Write brief about your question" required></textarea>
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
                            <input type="" class="form-control" name="date"  onfocus="(this.type='date')" placeholder="Class Date" required>
                        </div>
                        <div class="input-text col-md-4">
                            <input type="" class="form-control" name="time" onfocus="(this.type='time')"  placeholder="Class Time" required>
                        </div>
                        <div class="input-text col-md-4">
                            <input type="number" min="1" max="24" class="form-control" name="duration" placeholder="Class Duration (in hours)" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12" >

                            <button id="finish" type="submit"class="btn-general pull-right  mb-3">  Send Request </button>
                            <button type="button" role="button" type="button" id="proBtn" disabled class="btn btn-primary pull-right mb-3 mr-2" style="width:140px; display:none">
                                <i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i> <span class="sr-only">Loading...</span> Processing </button>
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
