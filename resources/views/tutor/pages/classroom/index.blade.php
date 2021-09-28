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
                                                            <tr>
                                                                <td class="pt-4">
                                                                    @if($class->user != null && $class->user != "")
                                                                        {{ $class->user->first_name }} {{ $class->user->last_name }}
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
                                                                    <span data-id="{{$class->id}}" data-room="{{$class->classroom != null ? $class->classroom->classroom_id : ''}}" data-duration="{{$class->duration}}" data-time="{{$class->class_time}}"
                                                                        id="class_time_{{$class->id}}" class="badge current_time badge-pill text-white font-weight-normal bg-success mt-3">{{$class->class_date}} {{$class->class_time}} </span>     
                                                                    <div id="join_class_{{$class->id}}" class="text-center">
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
                                                                            {{ $class->user->first_name }} {{ $class->user->last_name }}
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

            var booking_time = $( this ).text();
            var attr_id = $(this).data('id');
            var duration = $(this).data('duration');
            var time = $(this).data('time');
            var room_id = $(this).data('room');

            let split_time = time.split(':');
            let create_time = parseInt(split_time[0]) + parseInt(duration);

            let actual_time  = create_time + ':' + split_time[1];

            var time = moment(booking_time).format('MMM D, YYYY h:mm:ss a');

            var countDownDate = new Date(time).getTime();
            var x = setInterval(function() {

                var now = new Date().getTime();
                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                var total_time = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                
                $("#class_time_"+attr_id).html(total_time);

                if (distance < 0) {
                    clearInterval(x);
                    let join_btn = `<a href="{{url('tutor/class')}}/`+room_id+`"  class="schedule-btn"> Start Call </a>`;
                    // if(time > actual_time) {
                    //     $("#class_time_"+attr_id).text("Class Expired");
                    // }else{
                    //     $("#join_class_"+attr_id).html(join_btn);
                    // }
                    $("#class_time_"+attr_id).text("");
                    $("#join_class_"+attr_id).html(join_btn);
                }
            }, 1000);
            

        });


    });
</script>
@endsection