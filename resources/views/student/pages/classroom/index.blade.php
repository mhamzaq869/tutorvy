@extends('student.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
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
                                        <img src="../assets/images/logo/boy.jpg" alt="boy" style="width: 30px;">
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
                                Upcomming Classes
                                <span class="counter-text bg-success"> {{$upcomming_classes}} </span>
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
                                                <th scope="col">Teacher</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($classes != null && $classes != [] && $classes != "")
                                                @foreach($classes as $class)
                                                    @if($class->booking != null)
                                                        <tr>
                                                            <td class="pt-3">
                                                                {{ $class->booking->user->first_name }} {{ $class->booking->user->last_name }}
                                                            </td>
                                                            <td class="pt-3">
                                                            {{ $class->booking != null ? $class->booking->subject->name : '---' }}
                                                            </td>
                                                            <td class="pt-3">
                                                                {{ $class->booking != null ? $class->booking->topic : '---' }}
                                                            </td>
                                                            <td class="pt-3">
                                                                {{$class->booking->class_time}} {{date("g:i a", strtotime("$class->booking->class_time UTC"))}}
                                                            </td>
                                                            
                                                            <td class="pt-3">
                                                                {{ $class->booking->duration }} Hour(s)
                                                            </td>
                                                            <td class="pt-3">
                                                                
                                                                    @if($class->booking->status == 1)
                                                                        <span class="bg-color-apporve3">
                                                                            Payment Pending
                                                                        </span>
                                                                    @elseif($class->booking->status == 2)
                                                                        <span class="bg-color-apporve1">
                                                                            Approved
                                                                        </span>
                                                                    @elseif($class->booking->status == 0)
                                                                        <span class="bg-color-apporve">
                                                                            Pending
                                                                        </span>
                                                                    @endif
                                                            </td>

                                                            
                                                            <td style="text-align: center;padding-top:14px;">
                                                                <a type="button" data-target="#reviewModal" class="cencel-btn"  data-toggle="modal">
                                                                    Review
                                                                </a>
                                                                 <a href="{{route('student.join_class',[$class->classroom_id])}}"  class="schedule-btn">
                                                                    Join Class
                                                                </a>  
                                                            </td> 
                                                        </tr>
                                                        @endif
                                                @endforeach
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
                                                <th scope="col">Teacher</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-3">
                                                    static data Hellow
                                                </td>
                                                <td class="pt-3">
                                                static data  I'm done
                                                </td>
                                                <td class="pt-3">
                                                static data  Hellow
                                                </td>
                                                <td class="pt-3">
                                                static data  I'm done
                                                </td>
                                                <td class="pt-3">
                                                static data  Hellow
                                                </td>
                                                <td class="pt-3">
                                                    <span class="bg-color-apporve">
                                                        Rejected
                                                    </span>
                                                    
                                                </td>

                                                <td style="text-align: center; padding-top: 14px;">
                                                    <button class="schedule-btn" type="button">
                                                        Class Details
                                                    </button>
                                                </td>
                                            </tr>
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
                                                <p class="star-review">
                                                    <a href="#">
                                                        <i class="fa fa-star bigStar text-yellow "></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star bigStar text-yellow"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star bigStar text-yellow"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star bigStar text-yellow"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star bigStar text-yellow"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <textarea class="form-control mt-3" rows="6" cols="50"
                                            placeholder="Write reason"></textarea>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2" style="text-align: right;">
                        <button type="button" class="schedule-btn" data-dismiss="modal"
                            style="width: 130px;margin-right: 40px;">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<!-- @include('js_files.room') -->
<!-- <script>
$(document).ready(function(){
    $(".mk").hide();
    $(".vc").hide();
    $(".no-vc").show();
})
    $(".no-mk").click(function(){
       
        $(".no-mk").hide();
        $(".mk").show();
    });
    $(".mk").click(function(){
       
        $(".no-mk").show();
        $(".mk").hide();
    });
    $(".no-vc").click(function(){
       
       $(".no-vc").hide();
       $(".vc").show();
   });
   $(".vc").click(function(){
      
       $(".vc").hide();
       $(".no-vc").show();
   });
</script> -->
@endsection
