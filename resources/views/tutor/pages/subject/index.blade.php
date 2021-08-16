@extends('tutor.layouts.app')
<style>
    .searchBtn{
        position: absolute;
    right: 23px;
    top: 10px;
    color:#00132D;
}
.h-auto{
    height:auto !important;
}
.appOpt{
    padding-top: 8px;
    /* float: right; */
    padding-left: 12px;
    color:#00132D;
    font-size:24px;

}
.badge{
    position: absolute;
    right: -28px;
    top: -15px;
    z-index:9;
}
.badge-new{
    background:#FAAF3A;
    color:#fff;
}
.badge-pending{
    background:#65A5ff;
    color:#fff;

}
.badge-approve{
    background:#0ace36b0;

}
</style>
@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <p class="mr-3 mb-3 heading-first">
                Subjects
            </p>
        </div>
      
        @if(Auth::user()->teach)
            <div class="content" style="width: 100%;background-color: #FBFBFB !important;">

                <div class="container">
                    <!-- subject card -->
                    <div class="container-fluid">
                        <p class="heading-third mt-5">My Subjects</p>
                        <div class="row">
                            <div class="col-md-2 p-0 ml-2" >
                                <div class="  card h-auto card-shadow p-0 ">
                                    <div class="card-body ">
                                        
                                        <!-- <div class="images text-center">
                                            <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                            class="mt-3">
                                        </div> -->
                                        <span class="badge badge-pill badge-success mt-1">Approved</span>

                                        <div class="" style="display: flex;">
                                        
                                            <p class="heading-fifth mr-3 pt-2 mb-0" >Chemistry</p>
                                            <a class="appOpt" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Disable</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <p class="heading-first mt-3 ">Pending Subjects</p>
                        <div class="row">

                           
                            <div class="card-deck " style="width: 100%;">
                                <div class="col-md-2 p-0 ml-2" >
                                    <div class="  card h-auto card-shadow p-0">
                                        <div class="card-body ">
                                           
                                            <!-- <div class="images text-center">
                                                <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                                class="mt-3">
                                            </div> -->
                                            <span class="badge badge-pill badge-pending mt-1">Pending</span>

                                            <div class="" style="display: flex;">
                                            
                                                <p class="heading-fifth mr-3 pt-2 mb-0" >Chemistry</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cards -->
                    <div class="container-fluid">
                        <p class="heading-first mt-3 ">Add subjects</p>
                        <div class="row">

                            <input class="ml-3 mr-3 form-control w-25 mb-4 " type="search" placeholder="Type a name"
                                aria-label="Search" id="search">
                            <div class="card-deck " style="width: 100%;">
                                <div class="col-md-2 p-0 ml-2" >
                                    <div class="  card h-auto card-shadow p-0 ">
                                        <div class="card-body ">
                                            <!-- <div class="images text-center">
                                                <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                                class="mt-3">
                                            </div> -->
                                            <span class="badge badge-pill  badge-new mt-1">New</span>
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3 pt-2 mb-0" >Chemistry</p>
                                                <a href="#"><p class="view-bookings mb-0" >Add</p></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-2  " style="padding-right: 0;">
                                    <div class=" cards card-shadow ">
                                        <div class="card-body ">
                                            <h4 class="card-title" style="visibility: hidden;position: absolute;">
                                                chemistry</h4>
                                            
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3" style="margin-top: 30px;">Chemistry</p>
                                                <a href="#"><p class="view-bookings " style="margin-top: 30px;">Add</p></a>

                                            </div>

                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-2 p-0 ml-2" >
                                    <div class="  card h-auto card-shadow p-0 ">
                                        <div class="card-body ">
                                            <!-- <div class="images text-center">
                                                <img src="../assets/images/ico/botal-ico.png" alt="botal" style="width: 45px;"
                                                class="mt-3">
                                            </div> -->
                                            <span class="badge badge-pill badge-new mt-1">New</span>
                                            <div class="" style="display: flex;">
                                                <p class="heading-fifth mr-3 pt-2 mb-0" >Chemistry</p>
                                                <a href="#"><p class="view-bookings mb-0" >Add</p></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        @else
            <!-- no subject start -->
            @include('tutor.pages.general.nosubject')
            <!-- end -->
        @endif
        <div class="line"></div>
    </div>
</section>
@endsection
