@extends('admin.layouts.app')
<style>
 .dropify-wrapper .dropify-message span.file-icon{
     font-size:12px !important;
 }
 .dropify-wrapper {
    height: 86px !important;
}
</style>
@section('content')
  <!--section start  -->
  <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mt-3 ">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        Setting
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Setting</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab p-0">
                                <button class="tablinks nav-link active " onclick="openCity(event, 'tab1')"
                                    id="defaultOpen">General</button>
                                <button class="tablinks nav-link" onclick="openCity(event, 'tab2')">Security</button>
                                <button class="tablinks nav-link" onclick="openCity(event, 'tab3')">Payment</button>
                                <button class="tablinks nav-link" onclick="openCity(event, 'tab4')">System</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-9 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="settings-data">

                                <div id="tab1" class="tabcontent" style="display:block;">
                                    <form method="POST" action="{{route('admin.profile')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <h3>General</h3>
                                            </div>
                                            @if(Session::has('success'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <div class="col-md-12 font-light">
                                                Change email address
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <small class="">Name</small>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="first_name" value="" class="form-control"
                                                                    placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                                <input type="text" name="last_name" value="" class="form-control"
                                                                    placeholder=" Last Name">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <small class="">Email Address</small>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="yourname@yourdomain.com">
                                                    </div>
                                                    <small class=" ">Phone number</small>
                                                    <div class="form-group">
                                                        <input type="number"name="phone" class="form-control"
                                                            placeholder="03XX XXXXXXXX">
                                                    </div>
                                                    <small class=" ">Address</small>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" name="address" class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-item">
                                                                <input id="country_selector" class="form-control" name="country" name="country" type="">
                                                                <input id="country_short" class="form-control" name="country_short" type="" hidden>
                                                                <label for="country_selector" style="display:none;">Select a
                                                                    country here...</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-right">
                                                                <button type="submit" class="btn-general">Save changes</button>

                                                        </div>
                                                    </div>


                                                </div>
                                        </div>
                                        </form>

                                </div>

                                <div id="tab2" class="tabcontent">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <h3>Security</h3>
                                            </div>
                                            <div class="col-md-12 font-light">
                                                    Change password
                                            </div>

                                            <div class="col-sm-6">
                                                <form action="{{route('admin.change.password')}}" id="changePasswordForm" method="POST">
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <small>Password</small>
                                                    <div class="form-group pass_show">
                                                        <input type="password" name="current_password" class="form-control" placeholder=" ***********" >
                                                        <span class="text-danger small current_password"></span>
                                                    </div>
                                                    <small>New Password</small>
                                                    <div class="form-group pass_show">
                                                        <input type="password" name="new_password" class="form-control" placeholder="***********">
                                                        <span class="text-danger small new_password"></span>
                                                    </div>
                                                    <small >Re-enter new
                                                        password</small>
                                                    <div class="form-group pass_show">
                                                        <input type="password" name="new_confirm_password" class="form-control" placeholder="***********">
                                                        <span class="text-danger small new_confirm_password"></span>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn-general">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>

                                <div id="tab3" class="tabcontent">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <h3>Payment</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <small>Payment Method</small>
                                            <div class="form-group  mt-1">
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
                                            <div class="text-right">
                                                <button class="btn-general">Save changes</button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
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
                                                                    <a tabindex="-1" class="" href="">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                        <span class="round">
                                                            <input type="checkbox" id="checkbox1" />
                                                            <label for="checkbox1"></label>
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
                                    <div class="row mb-3">

                                    </div>
                                </div>

                                <div id="tab4" class="tabcontent">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <h3>System Settings</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="{{route('admin.save.system-setting')}}" id="systemSettingForm" method="POST">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <small class="">Commission</small>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            @if($setting != null)
                                                            <input type="number" name="commission" class="form-control"
                                                                placeholder="Comission Percentage" value="{{$setting->commission != null ? $setting->commission : ''}}">
                                                            @else
                                                            <input type="number" name="commission" class="form-control" placeholder="Comission Percentage">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" disabled="" value="%" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <small class="">Payouts clearence days</small>

                                                        <div class="form-group">
                                                            @if($setting != null)
                                                            <input type="number" name="clearence_days" class="form-control"
                                                                placeholder="Comission Percentage" value="{{$setting->clearence_days != null ? $setting->clearence_days : ''}}">
                                                            @else
                                                            <input type="number" name="clearence_days" class="form-control" placeholder="Comission Percentage">
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <small class="">Change Logo</small>
                                                    </div>
                                                    <div class="col-md-12  mb-2 mt-1">
                                                        @if($setting != null)
                                                            <input type="file" name="logo" class="dropify" data-default-file="{{ asset($setting->logo) }}">
                                                        @else
                                                            <input type="file" name="logo" class="dropify">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <small class="">Change Favicon</small>
                                                    </div>
                                                    <div class="col-md-12 mb-2 mt-1">
                                                        @if($setting != null)
                                                        <input type="file" name="favicon" class="dropify" data-default-file="{{ asset($setting->favicon) }}">
                                                        @else
                                                        <input type="file" name="favicon" class="dropify" >
                                                        @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                        <small class="">Change Title </small>
                                                    </div>
                                                    <div class="col-md-12">
                                                        @if($setting != null)
                                                            <input type="text" name="title" placeholder="Website Title" class="form-control" value="{{$setting->title != null ? $setting->title : ''}}">
                                                        @else
                                                            <input type="text" name="title" placeholder="Website Title" class="form-control">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12 text-right">
                                                            <button type="submit" class="btn-general">Save changes</button>
                                                    </div>
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
</section>
    <!--section start  -->



@endsection
<!-- Extra js to perfome function using ajax. -->
@section('js')
  @include('js_files.admin.settingJs')
@endsection
