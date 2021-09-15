@extends('tutor.layouts.app')

@section('content')
            <p class="container heading-first">
                Calendar </p>
            <div class="container-fluid">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">
                        

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small> Booking Details and all about your schedule for meetings <a href="#">Learn More</a></small>
                                <a href="#" class="cross pull-right"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="col-md-12">
                        <p id="clander-side" class="view-bookingsa schedule-btn">View today bookigs</p>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                   
                </div>
            </div>


        </div>
    </div>

           <!-- clander js -->
           <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{ asset('assets/js/clanders.js') }}"></script>

@endsection
  