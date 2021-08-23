@extends('tutor.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')

    <div class="ml-auto mr-auto w-75">
        <div class="card">
            <form action="{{route('student.booked.tutor')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tutor_id" value="{{$tutor->id}}">
                <div class="card-body">
                    <p class="heading-third mt-3">Booking</p>
                    <div class="row mt-5">
                        <div class="input-text col-md-6">
                            <select name="subject" class="form-select form-select-lg">
                                <option disabled selected>Select SUbject</option>
                                @foreach ($tutor->teach as $teach)
                                    <option value="{{ $teach->subject_id }}">{{ $teach->subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-text col-md-6 d-block">
                            <input type="text" class="form-control " name="topic" placeholder="Type your Topic" value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-text col-md-12">
                            <input type="text" class="form-control " name="question" placeholder="What is the Question?"
                                value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-text col-md-12 ">
                            <textarea name="brief" id="" cols="30" rows="5" class="form-control"
                                placeholder="Write brief about your question"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="  col-md-12">
                            <label for="" class="col-md-12 pl-0"><b>Upload any attachment if you want</b></label>
                            <input type="file" class="dropify" name="upload[]" multiple data-default-file="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="input-text col-md-6">
                            <input type="date" class="form-control " name="date" placeholder="Type your Topic" value="">
                        </div>
                        <div class="input-text col-md-6">
                            <input type="time" class="form-control " name="time" placeholder="Type your Topic" value="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="input-text col-md-6">
                            <select name="duration" class="form-select form-select-lg mb-3">
                                <option disabled selected>Lesson Duration</option>
                                <option value="15">15 min</option>
                                <option value="25">25 min</option>
                                <option value="35">35 min</option>
                                <option value="45">45 min</option>
                                <option value="60">60 min</option>
                            </select>
                        </div>
                        <div class="input-text col-md-6">
                            <select name="location" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <option disabled selected>Select Location</option>
                                <option value="lahore">lahore</option>
                                <option value="karachi">karachi</option>
                                <option value="quetta">quetta</option>
                                <option value="peshawar">peshawar</option>
                                <option value="quetta">quetta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn-general  nextBtn pull-right  mb-3">
                                &nbsp; Submit &nbsp;
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
