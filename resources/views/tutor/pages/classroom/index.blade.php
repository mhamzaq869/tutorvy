@extends('tutor.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <p class="mr-3 heading-first">
                             Classroom
                        </p>
                </div>
            </div>
            
            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">
                        

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                               <small>
                                   Every Details about your classes will be published here along with schedules for meetings <a href="#">Learn More</a>

                               </small> 
                               <a href="#" class="cross"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <nav class="">
                        <div class="nav nav-stwich pb-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Classes
                                <span class="counter-text bg-primary"> {{count($classes)}} </span>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Delivered Classes
                                <span class="counter-text bg-success"> {{$delivered_classess}} </span>

                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Student</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Starts In</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if($classes != null && $classes != [] && $classes != "")
                                                    @foreach($classes as $class)
                                                        @if($class != null && $class != "")
                                                        @php

                                                        $tz = get_local_time();
                                                        $dt = new DateTime($class->class_time, new DateTimeZone($tz)); //first argument "must" be a string
                                                        $time = $dt->format('g:i a');

                                                        @endphp
                                                            <tr>
                                                                <td class="pt-4">
                                                                    @if($class->user != null && $class->user != "")
                                                                        <a href="{{route('tutor.student',[$class->user->id])}}">
                                                                            {{ $class->user->first_name }} {{ $class->user->last_name }}
                                                                        </a>
                                                                        
                                                                    @else
                                                                    <span> - </span>
                                                                    @endif
                                                                </td>
                                                                <td class="pt-4"> {{ $class->subject->name }} </td>
                                                                <td class="pt-4"> {{ $class->topic }} </td>
                                                                <td class="pt-4 tutor_time_{{$class->id}}">  </td>
                                                               
                                                                <td class="pt-4"> {{ $class->duration }} Hour(s) </td>
                                                                <td class="pt-4">
                                                                @if($class->status == 1)
                                                                    <span class="bg-color-apporve3">
                                                                        Payment Pending
                                                                    </span>
                                                                @elseif($class->status == 2)
                                                                    <span class="bg-color-apporve1">
                                                                        Approved
                                                                    </span>
                                                                @elseif($class->status == 5)
                                                                    <span class="bg-color-apporve1">
                                                                        Delivered
                                                                    </span>
                                                                @elseif($class->status == 0)
                                                                    <span class="bg-color-apporve">
                                                                        Pending 
                                                                    </span>
                                                                @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if($class->classroom != null)
                                                                    <span data-id="{{$class->id}}"
                                                                        data-tzone="{{$class->tutor->time_zone}}" data-zone="{{$class->user->time_zone}}"  
                                                                        data-review="{{$class->is_reviewed}}" data-date="{{$class->class_date}}" 
                                                                        data-room="{{$class->classroom != null ? $class->classroom->classroom_id : ''}}" 
                                                                        data-time="{{$class->class_time}}" data-duration="{{$class->duration}}"
                                                                        id="class_time_{{$class->id}}" 
                                                                        class="badge current_time badge-pill text-white font-weight-normal bg-success mt-3">
                                                                        {{$class->class_date}} {{$class->class_time}} 
                                                                    </span>     

                                                                    <div id="join_class_{{$class->id}}" class="text-center">
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <button class="cencel-btn" type="button"> View details </button>
                                                                </div>                                                                    
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>
                                                            No Class Found
                                                        </td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>
                        <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr
                                                        style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                        <th scope="col">Student</th>
                                                        <th scope="col">Subjects</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Payment</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if($classes != null && $classes != [] && $classes != "")

                                                    @foreach($classes as $class)
                                                        @if($class != null && $class != "" )
                                                            @if($class->status == 5)
                                                                <tr>
                                                                    <td class="pt-4">
                                                                        @if($class->user != null && $class->user != "")
                                                                            <a href="{{route('tutor.student',[$class->user->id])}}">
                                                                                {{ $class->user->first_name }} {{ $class->user->last_name }}
                                                                            </a>
                                                                        @else
                                                                        <span> - </span>
                                                                        @endif
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        {{ $class->subject->name }}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                        {{ $class->topic }}
                                                                    </td>
                                                                    <td class="pt-4">
                                                                    {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}}
                                                                    </td>
                                                                    
                                                                    <td class="pt-4">
                                                                        {{ $class->duration }} Hour(s)
                                                                    </td>
                                                                    <td class="pt-4">
                                                                   
                                                                        <span class="bg-color-apporve1">
                                                                            Delivered
                                                                        </span>
                                                                  
                                                                    </td>

                                                                    <td style="text-align: center;">
                                                                        <button class="cencel-btn" type="button"> View details </button>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>
                                                            No Class Found
                                                        </td>
                                                    </tr>
                                            @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </div>
</section>

<script src="{{asset('/admin/assets/js/jquery.js')}}"></script>
<script src="{{asset('/admin/assets/js/jquery-ui.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    $(document).ready(function() {


        $( ".current_time" ).each(function() {
            var timer = new Timer();

            var booking_time = $.trim($( this ).text());
            var booking_seconds_time =  HmsToSeconds(moment(booking_time).format('HH:mm:ss'));

            var attr_id = $(this).data('id');
            var room_id = $(this).data('room');
            var review = $(this).data('review');
            var duration = $(this).data('duration');
            var std_time_zone = $(this).data('zone');
            var tutor_time_zone = $(this).data('tzone');
            var booking_class_date = $(this).data('date');
            var date = moment(booking_class_date)

            var now = moment();
            const date1 = moment(booking_class_date).format('YYYY-MM-DD').valueOf()
            const date2 = moment().format('YYYY-MM-DD').valueOf();

            
            if (date1 < date2) {
                $("#join_class_"+attr_id).html("");
                $("#class_time_"+attr_id).html("Class Time Over");
            } else {
                var std_current_region_date = new Date().toLocaleString('en-US', { timeZone: tutor_time_zone });
                var std_time_in_seconds = HmsToSeconds(moment(std_current_region_date).format('HH:mm:ss'));

                var remain_time = (booking_seconds_time -  std_time_in_seconds);          
                var date = new Date();

                var moment_date = moment(date).format('YYYY-MM-DD');

                var tutor_time_in_seconds = HmsToSeconds(moment(date).format('HH:mm:ss'));
                // console.log(tutor_time_in_seconds , "tutor_time_in_seconds");
                var region_booking_time = moment(date).add(remain_time,'s').format("LT");
                
                var create_region_date = new Date(booking_class_date + ' ' +  region_booking_time)
                var class_end_time = moment(date).add(remain_time,'s').add(duration, 'h').format("LT");
                var class_end_date = new Date(booking_class_date + ' ' +  class_end_time);
                
                $(".tutor_time_"+attr_id).text(region_booking_time);    

                let start_call = `<a href="{{url('tutor/class')}}/`+room_id+`"  class="schedule-btn"> Start Call </a>`;
                
                timer.start({countdown: true, startValues: {seconds: remain_time }});
                timer.addEventListener('secondsUpdated', function (e) {
                    var current_time_text =  $("#class_time_"+attr_id).text();    
                    if( parseInt(remain_time) > 0) {
                        $("#class_time_"+attr_id).html(timer.getTimeValues().toString());
                        
                        if($.trim(current_time_text) == "00:00:00") {
                            $("#join_class_"+attr_id).html(start_call);
                            $("#class_time_"+attr_id).html("");
                        }
                    }else{
                        $("#join_class_"+attr_id).html("");
                        $("#class_time_"+attr_id).html("Class Time Over");
                    }

                });

                timer.addEventListener('targetAchieved', function (e) {
                    var current_time_text =  $("#class_time_"+attr_id).text();    
                    
                    if( parseInt(remain_time) > 0) {
                        if($.trim(current_time_text)  == "00:00:00") {
                            $("#join_class_"+attr_id).html(start_call);
                            $("#class_time_"+attr_id).html("");
                        }
                    }else{
                        $("#join_class_"+attr_id).html("");
                        $("#class_time_"+attr_id).html("Class Time Over");  
                    }
                    
                });

                if(date.getTime() > create_region_date.getTime() &&  date.getTime() < class_end_date.getTime()) {
                    if(review == 0) {
                        if(Math.abs(remain_time) > 0) {
                            $("#join_class_"+attr_id).html(start_call);
                            $("#class_time_"+attr_id).html("");
                        }else{
                            $("#join_class_"+attr_id).html("");
                            $("#class_time_"+attr_id).html("Class Time Over");        
                        }                    
                    }
                }else {
                    $("#join_class_"+attr_id).html("");
                    $("#class_time_"+attr_id).html("Class Time Over");
                }

            }

        });

        function HmsToSeconds(hms) {
            // var hms = '02:04:33';
            var a = hms.split(':'); // split it at the colons

            // minutes are worth 60 seconds. Hours are worth 60 minutes.
            var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
            return seconds;
        }

        function secondsToHms(secs) {

            var sec_num = parseInt(secs, 10);
            var hours = Math.floor(sec_num / 3600);
            var minutes = Math.floor(sec_num / 60) % 60;
            var seconds = sec_num % 60;

            var h = hours < 10 ? "0" + hours : hours;
            var m = minutes < 10 ? "0" + minutes : minutes;
            var s = seconds < 10 ? "0" + seconds : seconds;

            var fin = h + ":" + m + ":" + s;
            return fin;

        }

    });
</script>
@endsection