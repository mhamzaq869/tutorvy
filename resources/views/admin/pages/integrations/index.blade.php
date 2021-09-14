@extends('admin.layouts.app')
<style>
    .modelImg{
        width:220px;
    }
    .tab-content > .active{
        background-color:none !important ;
    }
    #payPalModal .modal-body {
    overflow-y: hidden;
    height: auto;
}
.enableSwitch{
    position:absolute;
    top:7px;
    right:7px;
}
.payIcon{
    width:64%;
    padding-top:20px;
    padding-bottom:20px;
}
.enableSwitch i{
    color: #00132D;
}
</style>
@section('content')
<!--section start  -->
    <section id="homesection" style="display: flex;z-index: -1;">
        <!-- dashborad home -->
        <div class="container-fluid mt-3">
            <div class="row ml-1 mr-1">
                <div class="col-md-6">
                    <h1 class="animate__animated animate__bounce animate__delay-0.3s">
                        Integration
                    </h1>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-items"><a href="#">Tutorvy</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Integration</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-md-12">
                    <button class="btn-general pull-right" data-toggle="modal" data-target="#payPalModal"> With Paypal</button>
                    <button class="btn-general pull-right mr-3 " data-toggle="modal" data-target="#payPalModal"> With Paypal</button>
                </div> -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="enableSwitch">
                                <a href="#" id="payment_setting"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                <label class="switch mt-0">
                                    <input type="checkbox" id="payment_status" onchange="changeTutorStatus(`5`)" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </span>
                            <img src="{{asset('admin/assets/img/ico/PayPal.png')}}" class="payIcon" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="payPalModal" tabindex="-1" role="dialog" aria-labelledby="payPalModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{asset('admin/assets/img/ico/PayPal.png')}}" class=" modelImg p-3" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sandbox</a>
                                        </li>
                                        <li class="nav-item w-50 text-center">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Live</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <form class=" p-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Secret Key</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Secret Key">
                                                </div>
                                                <div class=" row form-group">
                                                    <div class="col-md-1">
                                                        <span class="checkbox-edit"> <input type="checkbox" name="standard_one_one" id=""> </span>
                                                    </div>
                                                    <div class="col-md-10 ">
                                                        <span class="paragraph-text"> Enable Sandbox</span>
                                                    </div>
                                                </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Pay Now</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <form class=" p-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Secret Key</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Secret Key">
                                                </div>
                                                <div class=" row form-group">
                                                    <div class="col-md-1">
                                                        <span class="checkbox-edit"> <input type="checkbox" name="standard_one_one" id=""> </span>
                                                    </div>
                                                    <div class="col-md-10 ">
                                                        <span class="paragraph-text"> Enable Live</span>
                                                    </div>
                                                </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Pay Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
            </div>
</section>


@endsection

@section('js')

@include('js_files.admin.integrationJs')
@endsection
