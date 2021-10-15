@extends('tutor.layouts.app')
<style>
    .nav {
    width: auto !important;
    padding: 0 !important;
     margin-left: 0 !important;
}
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #007bff !important;
        border-bottom: 0;
    }
    .nav-pills .nav-link:hover{
        background-color: #E2F0FF !important;
        color: #007bff;
    }
</style>
@section('content')

<section>
    <div class="content-wrapper " style="overflow: hidden;">
        <!--section start  -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                        <p class="mr-3 heading-first"> Settings </p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 mb-1 ">
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-info" aria-hidden="true"></i>
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa fa-info" aria-hidden="true"></i>
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class=" card  bg-toast infoCard">

                        <div class="card-body row">
                            <div class="col-md-1 text-center">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11">
                                <small>
                                  Update your settings to get secured and optimised as much as you can<a href="#">Learn More</a>
                                </small>
                                <a href="#" class="cross"  onclick="hideCard()">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <!-- <a class="nav-link {{session()->has('key') ? '' : 'active'}}" id="v-pills-General-tab" data-toggle="pill" href="#v-pills-General"
                                    role="tab" aria-controls="v-pills-General" aria-selected="true">General</a> -->

                                <a class="nav-link {{session()->has('key') ? '' : 'active'}}" id="v-pills-Security-tab" data-toggle="pill" href="#v-pills-Security"
                                    role="tab" aria-controls="v-pills-Security" aria-selected="true">Security</a>

                                <a class="nav-link" id="v-pills-Payment-tab" data-toggle="pill"
                                    href="#v-pills-Payment" role="tab" aria-controls="v-pills-Payment"
                                    aria-selected="false">Payments</a>

                                <a class="nav-link" id="v-pills-Notifications-tab" data-toggle="pill"
                                    href="#v-pills-Notifications" role="tab" aria-controls="v-pills-Notifications"
                                    aria-selected="false">Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="v-pills-tabContent chang_photo">

                                <!-- <div class="tab-pane fade {{session()->has('key') ? '' : 'active show'}} chee" id="v-pills-General" role="tabpanel"
                                    aria-labelledby="v-pills-General-tab">

                                    <form action="{{ route('tutor.profile.update', [Auth::user()->id]) }}" method="Post"
                                        enctype="multipart/form-data" id="personal">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <h3>General</h3>
                                            </div>
                                            <div class="col-md-12 font-light">
                                                Change email address
                                            </div>
                                            <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <small class="">Name</small>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control"
                                                                    placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                                <input type="text" value="" class="form-control"
                                                                    placeholder=" Last Name">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <small class="">Email Address</small>
                                                    <div class="form-group">
                                                        <input type="email" value="" class="form-control"
                                                            placeholder="yourname@yourdomain.com">
                                                    </div>
                                                    <small class=" ">Phone number</small>
                                                    <div class="form-group">
                                                        <input type="number" value="" class="form-control"
                                                            placeholder="03XX XXXXXXXX">
                                                    </div>
                                                    <small class=" ">Address</small>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" value="" class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-item">
                                                                <input id="country_selector" class="form-control" name="country" type="">
                                                                <input id="country_short" class="form-control" name="country_short" type="" hidden>
                                                                <label for="country_selector" style="display:none;">Select a
                                                                    country here...</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <button class="schedule-btn">Save changes</button>
                                                    </div>

                                                </div>
                                        </div>
                                    </form>
                                </div> -->

                                <div class="tab-pane fade {{session()->has('key') ? '' : 'active show'}} chee" id="v-pills-Security" role="tabpanel"
                                    aria-labelledby="v-pills-Security-tab">
                                    <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h3>Security</h3>
                                    </div>

                                    <div class="col-md-12 font-light">
                                            Change password
                                    </div>
                                        <div class="col-sm-6">
                                            <form action="{{route('tutor.change.password')}}" method="POST">
                                                @csrf
                                                <small>Current Password</small>
                                                <div class="form-group pass_show">
                                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror"
                                                        placeholder=" ***********" >
                                                        @error('current_password')
                                                            <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>

                                                <small>New Password</small>
                                                <div class="form-group pass_show">
                                                    <input type="password" name="new_password" class="form-control"
                                                        placeholder="***********">
                                                        @error('new_password')
                                                        <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>

                                                <small >Re-enter new password</small>
                                                <div class="form-group pass_show">
                                                    <input type="password" name="new_confirm_password" class="form-control"
                                                        placeholder="***********">
                                                        @error('new_confirm_password')
                                                        <span class="small text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="float-right">
                                                    <button type="submit" class="schedule-btn">Save changes</button>
                                                </div>

                                                <span id='lippButton'></span>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade chee" id="v-pills-Payment" role="tabpanel"
                                    aria-labelledby="v-pills-Payment-tab">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <h3>Payments</h3>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-md-2 text-center">
                                                <img class="mt-4" src="{{asset ('assets/images/payment-icon/paypal_logo_512.png')}}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Paypal</h5>
                                                <hr>
                                                <p>Additional activation and maintainance fees charged by Paypal.
                                                    <a href="https://www.paypal.com/us/webapps/mpp/account-selection">Don't have a Paypal account?</a>
                                                </p>

                                            </div>
                                            <div class="col-md-2 text-center">
                                                @if ($paypal_payment != null)
                                                <button type="button" class="btn btn-secondary mt-4" disabled>Set Up</button>
                                                @else
                                                <button type="button" data-toggle="modal" data-target="#paypalModel" class="btn btn-primary mt-4">Set Up</button>
                                                @endif
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2 text-center">
                                                <img class="mt-4 w-100" src="{{asset ('assets/images/payment-icon/Payoneer_logo.png')}}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Payoneer</h5>
                                                <hr>
                                                <p>Additional activation and maintainance fees charged by Paypal.
                                                    <a href="https://payouts.payoneer.com/partners/or.aspx?pid=YOYIZC74IO2s4KZQp7tgsw%3d%3d&web_interaction=website_traffic">Don't have a Payoneer account?</a>
                                                </p>

                                            </div>
                                            <div class="col-md-2 text-center">
                                                <a href="#" class="btn btn-primary mt-4">Set Up</a>
                                            </div>
                                        </div>






                                        {{-- <div class="row"> --}}
                                    {{-- <div class="col-sm-6"> --}}
                                            {{-- <small>Payment Methods</small> --}}
                                            {{-- <div class="form-group  mt-1">
                                                <select name="" id="paymentMethod" class="form-control" id="">
                                                    <option value="Paypal"> <p> <i class="fa fa-plus"></i> Paypal  </p></option>
                                                    <option value="Payoneer">Payoneer</option>
                                                    <option value="Sadapay">Sadapay</option>
                                                    <option value="Zippa">Zippa</option>
                                                </select>
                                                <!-- <div class="dropdown d-flex ">
                                                    <a class=" d-flex form-control" href="#" data-toggle="dropdown" aria-expanded="true">David </a>
                                                    <ul class="dropdown-menu  " style="width:100%;">
                                                        <li>
                                                            <a tabindex="-1" class="" href="">
                                                                <img src="{{asset ('assets/images/payment-icon/paypal.png')}}" alt="">
                                                                Paypal
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a tabindex="-1" class="" href="#">
                                                                Help
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <small>Credit Card Number</small>
                                            <div class="form-group ">
                                                <input type="number" value="" class="form-control"
                                                    placeholder="XX-XXXXXXXXXX-X">
                                            </div>
                                            <small >CVS Number</small>
                                            <div class="form-group ">
                                                <input type="number" value="" class="form-control"
                                                    placeholder="365">
                                            </div>
                                            <small >Credit Card holder name</small>
                                            <div class="form-group pass_show">
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Name Mean">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small >Exp. Month</small>
                                                    <div class="form-group pass_show">
                                                        <input type="text" value="" class="form-control"
                                                            placeholder="August">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <small >Exp. Year</small>
                                                    <div class="form-group pass_show">
                                                        <input type="text" value="" class="form-control"
                                                            placeholder="2021">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right">
                                                <button class="schedule-btn">Save changes</button>
                                            </div> --}}



                                        {{-- </div> --}}

                                    {{-- </div> --}}
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>

                                        @if ($paypal_payment != null)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/paypal_logo_512.png')}}" alt="">
                                                        <span class="payment-menu dropdown d-flex">
                                                            <a class=" d-flex" href="#" data-toggle="dropdown" aria-expanded="true">
                                                                <img src="{{asset ('assets/images/payment-icon/menu_dots.png')}}" alt="">
                                                            </a>
                                                            <ul class="dropdown-menu  " >
                                                                <li>
                                                                    <a id="paypal_btn" onclick="delPayMethod({{$paypal_payment->id}})">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/masterCard_logo_512.png')}}" alt="">
                                                        <span class="payment-menu dropdown d-flex">
                                                            <a class=" d-flex" href="#" data-toggle="dropdown" aria-expanded="true">
                                                                <img src="{{asset ('assets/images/payment-icon/menu_dots.png')}}" alt="">
                                                            </a>
                                                            <ul class="dropdown-menu  " >
                                                                <li>
                                                                    <a tabindex="-1" class="" href="">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                        <span class="round">
                                                            <input type="checkbox" id="checkbox2" />
                                                            <label for="checkbox2"></label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{asset ('assets/images/payment-icon/masterCard_logo_512.png')}}" alt="">
                                                        <span class="payment-menu dropdown d-flex">
                                                            <a class=" d-flex" href="#" data-toggle="dropdown" aria-expanded="true">
                                                                <img src="{{asset ('assets/images/payment-icon/menu_dots.png')}}" alt="">
                                                            </a>
                                                            <ul class="dropdown-menu  " >
                                                                <li>
                                                                    <a tabindex="-1" class="" href="">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                        <span class="round">
                                                            <input type="checkbox" id="checkbox3" />
                                                            <label for="checkbox3"></label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade chee" id="v-pills-Notifications" role="tabpanel"
                                    aria-labelledby="v-pills-Notification-tab">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <h3>Notification</h3>
                                        </div>
                                        <div class="col-6">
                                            @if(session()->has('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{session('error')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @elseif(session()->has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{session('success')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12 font-light">
                                                Manage Notifications
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="{{route('tutor.change.password')}}" method="POST">
                                                @csrf
                                                <div class="row mt-3">
                                                    <div class="col-md-12 mt-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="booking" id="booking">
                                                            <label class="custom-control-label" for="booking">Get Booking Notification on your Email Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="verification" id="verification">
                                                            <label class="custom-control-label" for="verification">Get Verification Notification on your Email Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="assessment" id="assessment">
                                                            <label class="custom-control-label" for="assessment">Get Assessment Notification on your Email Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3 text-right">
                                                        <button type="submit" class="schedule-btn">Save changes</button>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Modals.paymentModal')


<script>
    function delPayMethod(id)
    {
        $.ajax({
            url: "{{route('del.payment')}}",
            type:"POST",
            data:{
                id:id,
            },
            success:function(data){
                    if(data == "success"){
                        toastr.success('Payment Method Deleted Successfully!',{
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setInterval(function(){
                        window.location.href = "{{ route('tutor.settings') }}";
                    }, 1500);


                    }
                },
            });
    }
</script>

@endsection



