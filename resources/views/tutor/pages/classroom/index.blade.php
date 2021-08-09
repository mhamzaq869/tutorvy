@extends('tutor.layouts.app')

@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <a href="../classroom/createclass.html">
                <p class="mr-3 heading-first">
                    Classroom
                </p>
            </a>
        </div>
        <div class="container" style="margin-bottom: 15px">
            <div class="row">
                <div class="col-md-12">
                    <div class="image-center-nobooking"
                        style="text-align: center;margin-top: 5px;margin-bottom: 90px;">
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
                    <!-- Modal of classroom -->
                    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-heade mt-3 pb-3">
                                    <p class="modal-title text-center text-justify" id="exampleModalLongTitle">
                                        Bookings</p>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span> -->
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
                                    <!--
                                        <button type="button" class="schedule-btn w-100">Send Class Link</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        <div class="line"></div>
    </div>
</section>
@endsection
