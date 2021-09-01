@extends('admin.layouts.app')
<style>
 
</style>
@section('content')
  <!--section start  -->
  <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mt-3">
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'tab1')"
                                        id="defaultOpen">General</button>
                                    <button class="tablinks" onclick="openCity(event, 'tab2')">Security</button>
                                    <button class="tablinks" onclick="openCity(event, 'tab3')">Payment</button>
                                    <button class="tablinks" onclick="openCity(event, 'tab4')">System</button>
                                </div>
                            </div>
                            <div class="col-md-9 ">
                                <div class="settings-data">
                                    <div id="tab1" class="tabcontent">
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
                                                        <!-- <div class="form-group ">
                                                            <input type="text" value="" class="form-control"
                                                                placeholder="Complete Address">
                                                        </div>  -->
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                    <button class="btn-general">Save changes</button>
                                                               
                                                            </div>
                                                        </div>
                                                        

                                                    </div>
                                            </div>

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
                                                    <form action="{{route('tutor.changePassword')}}" method="POST">
                                                        @csrf
                                                        <small>Password</small>
                                                        <div class="form-group pass_show">
                                                            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror"
                                                                placeholder=" ***********" >
                                                                @error('error')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                        <small>New Password</small>
                                                        <div class="form-group pass_show">
                                                            <input type="password" name="new_password" class="form-control"
                                                                placeholder="***********">
                                                        </div>
                                                        <small >Re-enter new
                                                            password</small>
                                                        <div class="form-group pass_show">
                                                            <input type="password" name="new_confirm_password" class="form-control"
                                                                placeholder="***********">
                                                        </div>
                                                        <div class="text-right">
                                                            <button class="btn-general">Save changes</button>
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
                                            <!-- <div class="col-md-12 font-light">
                                                Change Comission Settings
                                            </div> -->
                                            <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <small class="">Commission</small>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <input type="number" value="" class="form-control"
                                                                    placeholder="Comission Percentage">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="text" disabled="" value="%" class="form-control"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-right">
                                                                <button class="btn-general">Save changes</button>
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
            </div>
        </div>
    </div>
</section>
    <!--section start  -->
   


@endsection
<!-- Extra js to perfome function using ajax. -->
@section('js')
  
@endsection
