@extends('tutor.layouts.app')

@section('content')
<section>
    <div class="container">
        <p class="heading-first mb-4 ml-3">
            Settings
        </p>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'tab1')"
                            id="defaultOpen">General</button>
                        <button class="tablinks" onclick="openCity(event, 'tab2')">Security</button>
                        <button class="tablinks" onclick="openCity(event, 'tab3')">Payment</button>
                    </div>
                </div>
                <div class="col-md-9 bg-color">

                    <div class="settings-data">
                        <div id="tab1" class="tabcontent">
                           <div class="container">
                               <div class="row">
                                   <div class="col-md-12 mb-4">
                                       <h3>General</h3>
                                   </div>
                                   <div class="col-md-12 font-light">
                                       Change email address
                                   </div>
                                   <div class="col-sm-6">

                                        <small class="">Name</small>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control"
                                                placeholder=" Enter New Name">
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
                                        <div class="form-group ">
                                            <input type="text" value="" class="form-control"
                                                placeholder="Complete Address">
                                        </div> 
                                        <div class="float-right">
                                            <button class="schedule-btn">Save changes</button>
                                        </div>

                                    </div>
                               </div>
                           </div>

                        </div>
                        <div id="tab2" class="tabcontent">
                            <div class="container">
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
                                            <div class="float-right">
                                                <button class="schedule-btn">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    
                                   
                               </div>
                           </div>
                        </div>
                        <div id="tab3" class="tabcontent">
                            <div class="container">
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
                                        <div class="float-right">
                                            <button class="schedule-btn">Save changes</button>
                                        </div>
                                    </div>
                               </div>
                               <div class="row mb-3">
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
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

@endsection
