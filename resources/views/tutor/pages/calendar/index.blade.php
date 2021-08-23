@extends('tutor.layouts.app')

@section('content')
            <p class="container heading-first">
                Calendar </p>
            <div class="container-fluid">
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
  