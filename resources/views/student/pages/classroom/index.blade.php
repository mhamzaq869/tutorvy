@extends('student.layouts.app')
<script src="https://rtcmulticonnection.herokuapp.com/dist/RTCMultiConnection.min.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
@section('content')
 <!-- top Fixed navbar End -->
 <style>
     .rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;  
}
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}

 </style>
<div class="content-wrapper " style="overflow: hidden;">
    <section id="classroomsection" style="display: flex;">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- <p id="sidenav-toggles" class="heading-first  mr-3 mb-2 ml-2">
                        Bookings
                    </p> -->
                    <p class="heading-first ml-3 mr-3">Classroom   </p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="image-center-nobooking text-center mt-5">
                        <img src="../assets/images/ico/class-icon.png" alt="class-ico" style="width: 200px;">
                        <p class="nobooking-booking">Create New Classroom</p>
                        <P class="improve-booking">
                            It is a long established fact that a reader will be <br /> distracted by the
                            readable
                            content.</P>
                        <br />
                        <button data-toggle="modal" data-target="#exampleModalCenter" class="schedule-btn"
                            style="width: 180px;font-size: 14px;">

                            Create classroom
                        </button>
                    </div>
                    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-heade mt-3 pb-3">
                                    <p class="modal-title text-center text-justify" id="exampleModalLongTitle">
                                        Bookings</p>
                                </div>
                                <div class="modal-body ">
                                    <div class="d-flex std-name">
                                        <img src="../assets/images/ico/Square-white.jpg" alt="boy" style="width: 30px;">
                                        <p class="heading-fifth ml-2">Harram Laraib</p>
                                        <p class="std-student">Student</p>
                                        <img src="../assets/images/ico/3dot.png" alt="dots"
                                            style="width: 20px;position: relative;left: 260px;">
                                    </div>
                                    <div class="container">
                                        <p class="heading-fifth mt-3"> Lorem ipsum dolor sit amet consectetur ?
                                        </p>
                                        <p class="paragraph-text"> Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Maxime facere quis deleniti, nam, vel dolore
                                            distinctio eum nesciunt explicabo exercitationem sint fuga ad soluta
                                            aspernatur nisi id doloremque? Optio, labore!
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <input id="curtainInput" type="button" value="Send Class Link"
                                        class="schedule-btn w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row bg-white ml-2 mr-2">
                <div class="col-md-12 mb-1 ">
                    <div class=" card  bg-toast infoCard">
                        

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11 pl-0">
                                <small>
                                    Classes Details and all about your schedule. <a href="#">Learn More</a>
                                </small>
                                <a href="#" class="cross"  onclick="hideCard()"> 
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <nav>
                        <div class="nav nav-stwich" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                All Classes
                                <span class="counter-text bg-primary"> {{count($classes)}} </span>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                Delivered Classes
                                <span class="counter-text bg-success"> {{count($booked_classes )}} </span>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr
                                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Subjects</th>
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
                                                        <tr>
                                                            <td class="pt-3">
                                                                {{ $class->tutor->first_name }} {{ $class->tutor->last_name }}
                                                            </td>
                                                            <td class="pt-3">
                                                            {{ $class != null ? $class->subject->name : '---' }}
                                                            </td>
                                                            <td class="pt-3">
                                                                {{ $class != null ? $class->topic : '---' }}
                                                            </td>
                                                            <td class="pt-3">
                                                                {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}}
                                                            </td>
                                                            
                                                            <td class="pt-3">
                                                                {{ $class->duration }} Hour(s)
                                                            </td>
                                                            <td class="pt-3">
                                                                
                                                                    @if($class->status == 1)
                                                                        <span class="bg-color-apporve3">
                                                                            Payment Pending
                                                                        </span>
                                                                    @elseif($class->status == 2)
                                                                        <span class="bg-color-apporve1">
                                                                            Approved
                                                                        </span>
                                                                    @elseif($class->status == 0)
                                                                        <span class="bg-color-apporve">
                                                                            Pending
                                                                        </span>
                                                                    @endif
                                                            </td>

                                                            <td>
                                                                @if($class->classroom != null)
                                                                <span data-id="{{$class->id}}" data-review="{{$class->is_reviewed}}" data-date="{{$class->class_date}}" data-room="{{$class->classroom != null ? $class->classroom->classroom_id : ''}}" data-duration="{{$class->duration}}" data-time="{{$class->class_time}}"
                                                                    id="class_time_{{$class->id}}" class="badge current_time badge-pill text-white font-weight-normal bg-success mt-2">{{$class->class_date}} {{$class->class_time}} </span>     
                                                                <div id="join_class_{{$class->id}}"></div>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;padding-top:14px;">
                                                                <button class="cencel-btn" type="button"> View details </button>
                                                            </td> 

                                                        </tr>
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
                        <div class="tab-pane tab-border-none fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <table class="table table-bordered ">
                                        <thead>
                                            <tr
                                                style="font-family: Poppins;font-size: 14px;color: #00132D; border-top: 1px solid #D6DBE2;border-bottom: 1px solid #D6DBE2;">
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($booked_classes != null && $booked_classes != [] && $booked_classes != "")
                                            @foreach($booked_classes as $class)
                                                <tr>
                                                    <td class="pt-3">
                                                        {{ $class->tutor->first_name }} {{ $class->tutor->last_name }}
                                                    </td>
                                                    <td class="pt-3">
                                                    {{ $class != null ? $class->subject->name : '---' }}
                                                    </td>
                                                    <td class="pt-3">
                                                        {{ $class != null ? $class->topic : '---' }}
                                                    </td>
                                                    <td class="pt-3">
                                                        {{$class->class_time}} {{date("g:i a", strtotime("$class->class_time UTC"))}}
                                                    </td>
                                                    
                                                    <td class="pt-3">
                                                        {{ $class->duration }} Hour(s)
                                                    </td>
                                                    <td class="pt-3">
                                                        @if($class->status == 5)
                                                            <span class="bg-color-apporve3"> Delivered </span>
                                                        @endif
                                                    </td>

                                                
                                                    <td style="text-align: center;padding-top:14px;">
                                                            <a type="button" onclick="showReviewModal('{{$class->id}}')" class="cencel-btn">
                                                                Review
                                                            </a>
                                                    </td> 
                                                </tr>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
  <!--Review Modal -->
    <div class="modal " id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pt-4 pb-4">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <input type="hidden" id="booking_id">
                            <div class="col-md-12">
                                <div class="iconss" style="text-align: center;">
                                    <img src="../assets/images/ico/submit-test.png" width="60px">
                                    <p
                                        style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                        Review Class</p>
                                    <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                        class="ml-4 mr-4">
                                        Send review for class with a short note about why are you reviewing this to this
                                        class
                                    </p>
                                </div>
                                <div class="ml-4 mr-4">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <input type="hidden" id="star_rating" value="5">
                                                <p class="star-review" id='stars'>
                                                    <div class='rating-stars text-center'>
                                                        <ul id='stars'>
                                                            <li class='star selected' title='Poor' data-value='1'>
                                                                <i class="fa fa-star "></i>
                                                            </li>
                                                            <li class='star selected' title='Poor' data-value='2'>
                                                                <i class="fa fa-star"></i>
                                                            </li>
                                                            <li class='star selected' title='Poor' data-value='3'>
                                                                <i class="fa fa-star"></i>
                                                            </li>
                                                            <li class='star selected' title='Poor' data-value='4'>
                                                                <i class="fa fa-star"></i>
                                                            </li>
                                                            <li class='star selected' title='Poor' data-value='5'>
                                                                <i class="fa fa-star "></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                        <textarea class="form-control mt-3" rows="6" cols="50"
                                            placeholder="Write reason" id="std_review" required="required"></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2" style="text-align: right;">
                        <button type="button" class="schedule-btn" id="send_review"
                            style="width: 130px;margin-right: 40px;">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{asset('/admin/assets/js/jquery.js')}}"></script>
<script src="{{asset('/admin/assets/js/jquery-ui.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    $(document).ready(function(){

        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            
            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }
            
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            $("#star_rating").val(ratingValue);
            
        });

        $("#send_review").click(function() {
            var star_rating = $("#star_rating").val();
            var review = $("#std_review").val();
            var booking_id = $("#booking_id").val();

            var form_data = {
                review:review, 
                star_rating:star_rating,
                booking_id:booking_id,
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('student.save.review')}}",
                type: "POST",
                data: form_data, 
                dataType: 'json',
                success:function(response){
                    console.log(response , "data");
                    if(response.status_code == 200 && response.success == true) {
                        toastr.success(response.message,{
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        $("#reviewModal").modal('hide');
                    }else{
                        toastr.error(response.message,{
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                },
                error:function(e) {
                    console.log(e)
                }
            });
 
        });



        $( ".current_time" ).each(function() {

            var booking_time = $( this ).text();
            var attr_id = $(this).data('id');
            var duration = $(this).data('duration');
            var room_id = $(this).data('room');
            var time = $(this).data('time');
            var class_date = $(this).data('date');
            var review = $(this).data('review');

            var CurrentDate = new Date();
            class_date = new Date(class_date);

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

                    // let join_btn = `<a href="{{url('student/class')}}/`+room_id+`"  class="schedule-btn"> Join Class </a>`;
                    let join_btn = `<a onclick="joinClass('`+room_id+`')" class="schedule-btn"> Join Class </a>`;
                    
                    if(time > actual_time) {
                        if(review == 0 ) {
                            $("#join_class_"+attr_id).html(join_btn);
                        }else{
                            $("#join_class_"+attr_id).html("");
                        }
                        
                        $("#class_time_"+attr_id).text("");

                    }else{
                        $("#class_time_"+attr_id).text("Class Expired");
                    }
                    
                }
            }, 1000);

        }); 
    });

    function joinClass(id){
        var connection = new RTCMultiConnection();
        var roomid = id;
        var fullName = '---';
        connection.socketURL = 'https://tutorvy.herokuapp.com:443/';

        connection.checkPresence(roomid, function(isRoomExist, roomid, error) {
            if (isRoomExist === true) {
                window.location.href=`{{url('student/class')}}/`+id ;
            } else {
                toastr.warning('Tutor not joined yet.',{
                    position: 'top-end',
                    icon: 'warning',
                    showConfirmButton: false,
                    timer: 2500
                });
            }
        });
    }

    function showReviewModal(id) {

        $("#booking_id").val(id);
        $("#reviewModal").modal('show');
    }
</script>
