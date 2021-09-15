@extends('student.layouts.app')

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" style="display: flex;">
        <!-- dashborad home -->
        <div class="container-fluid m-0 p-0">
            <p class="heading-first ml-3 mr-3">Calendar</p>
            <div class="row">
                 <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">
                        

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small>
                                    Booking Details and all about your schedule for meetings <a href="#">Learn More</a>
                                </small>
                                <a href="#" class="cross"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
            <div class="card">
                <div class="card-body">
                    <div class="row ">
                      
                        <div class="col-md-12 mb-5 ml-3 mt-0">
                            <span class="moreBooking text-right mt-3 ">
                                <a href="#" class="btn-general  btn-large">
                                        View today bookigs
                                </a>
                            </span>
                            <div class="" id="calendar" class="day mt-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
 <!-- clander js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{ asset('assets/js/clanders.js') }}"></script>
@endsection
