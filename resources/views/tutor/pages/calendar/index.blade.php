@extends('tutor.layouts.app')

@section('content')
<link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src="{{ asset('assets/js/clander.js') }}"></script>

    <p class="container heading-first"> Calendar </p>
    <div class="container-fluid">
        <div class="row  ml-2 mr-2">
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
                <!-- <div class="col-md-12">
                    <p id="clander-side" class="view-bookingsa schedule-btn">View today bookigs</p>
                </div> -->
                <div class="card-body">
                    <div class="col-md-12">
                        <div id="calendar"></div>
                    </div>
                </div>
            
            </div>
        </div>
        
    </div>

    <!--Approve Class Modal -->
    <div class="modal" id="approveModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-4 pb-4">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="iconss" style="text-align: center;">
                                    <img src="{{asset ('admin/assets/img/ico/submit-test.png')}}" width="60px">
                                    <p
                                        style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                        Class Time</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-6 col-sm-6 ">
                                        <p>Schedule Date: </p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6 text-right"> 
                                        <p><strong class="schedule_date"> </strong></p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6">
                                        <p>Schedule Time: </p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6 text-right"> 
                                        <p><strong class="schedule_time">  </strong></p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6">
                                        <p>Schedule Duration: </p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6 text-right"> 
                                        <p><strong class="schedule_duration"> </strong></p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6">
                                        <p>Total Fee: </p> 
                                    </div>
                                    <div class="col-md-6 col-6 col-sm-6 text-right"> 
                                        <p><strong class="total_fee">   </strong></p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2" style="text-align: right;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var bookings = {!! json_encode($bookings) !!}
        
        var today = new Date;

        for(var i= 0; i < bookings.length; i++) {
            bookings[i].title = 'Class Start at ' + moment(bookings[i].titles , 'hh:mm').format('LT');
        }

        var data = bookings;
        var calendar = '';
        
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap',
            initialView: 'dayGridMonth',
            initialDate: moment(today).startOf('month').format('YYYY-MM-DD'),
            selectable: true,
            editable: true,
            dayMaxEvents: true,
            headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: data,
            select:function(start, end ,allday) {
                
            },
            eventClick: function(info) {

                var data = info.event.backgroundColor.split(',');
                
                $('.schedule_date').text(data[1]);
                $('.schedule_time').text(moment(data[0],'hh:mm').format('LT'));
                $('.schedule_duration').text(data[2] + ' Hour(s)');
                $('.total_fee').text('$'+data[3]);

                $("#approveModel").modal('show');

            }
        });

        calendar.render();
        });

    </script>
@endsection
  