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
.googleIc{
    padding-top:7px;
    padding-bottom:7px;
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
                            <li class="breadcrumb-items"><a href="#">Tutorvy 1313123</a></li>
                            <li class="breadcrumb-items m-0 p-0 ml-3" aria-current="page">&gt;</li>
                            <li class="breadcrumb-items m-0 p-0 ml-3 breadcrumb-item-active" aria-current="page"><a
                                    href="">Integration</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row ml-1 mr-1">
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
                                    @if($paypal)
                                        @if($paypal[0]['status'] == 1)
                                            <input type="checkbox" id="payment_status" onchange="changeTutorStatus(`5`)" checked="checked">
                                            <span class="slider round"></span>
                                        @else
                                            <input type="checkbox" id="payment_status" onchange="changeTutorStatus(`5`)">
                                            <span class="slider round"></span>
                                        @endif
                                    @else
                                        <input type="checkbox" id="payment_status" onchange="changeTutorStatus(`5`)">
                                        <span class="slider round"></span>
                                    @endif
                                </label>
                            </span>
                            <img src="{{asset('admin/assets/img/ico/PayPal.png')}}" class="payIcon" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="enableSwitch">
                                <a href="#" id="google_maps"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                                <label class="switch mt-0">
                                        <input type="checkbox" id="" onchange="">
                                        <span class="slider round"></span>
                                </label>
                            </span>
                            <img src="{{asset('admin/assets/img/ico/google-places.png')}}"  class="payIcon googleIc" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<!-- pyapal Modal -->
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
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> Live</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form class="p-3" id="paypalSandboxForm" status="0" method="POST" action="{{url('admin/save-payal')}}">
                                    <input type="hidden" name="paypal" class="paypal" value="Paypal">
                                    @if($paypal && $paypal[0]['type'] == 2)
                                    <div class="form-group">
                                        <label for="client_id">Client ID</label>
                                        <input type="text" class="form-control client_id" placeholder="Client ID" value="{{$paypal[0]['client_id']}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Secret Key</label>
                                        <input type="text" class="form-control secret_key" placeholder="Secret Key" value="{{$paypal[0]['secret_key']}}">
                                    </div>

                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        @if($paypal[0]['key_type'] == 2)
                                            <input type="checkbox" class="custom-control-input" id="paypal_sandbox" checked="checked">
                                            <label class="custom-control-label" for="paypal_sandbox"> is Sandbox </label>
                                        @else
                                            <input type="checkbox" class="custom-control-input" id="paypal_sandbox">
                                            <label class="custom-control-label" for="paypal_sandbox"> is Sandbox </label>
                                        @endif
                                    </div>

                                    @else
                                    <div class="form-group">
                                        <label for="client_id">Client ID</label>
                                        <input type="text" class="form-control client_id" placeholder="Client ID">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Secret Key</label>
                                        <input type="text" class="form-control secret_key" placeholder="Secret Key">
                                    </div>
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="paypal_sandbox">
                                        <label class="custom-control-label" for="paypal_sandbox"> is Sandbox </label>
                                    </div>
                                    @endif
                                    <button type="submit" class="btn btn-primary pull-right"> Connect</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form class="p-3" id="paypalLiveForm" status="1" method="POST" action="{{url('admin/save-payal')}}">
                                <input type="hidden" name="paypal" id="paypal" value="Paypal">
                                @if($paypal && $paypal[0]['type'] == 1)
                                    <div class="form-group">
                                        <label for="client_id">Client ID</label>
                                        <input type="text" class="form-control" id="l_client_id" placeholder="Client ID" value="{{$paypal[0]['client_id']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Secret Key</label>
                                        <input type="text" class="form-control" id="l_secret_key" placeholder="Secret Key" value="{{$paypal[0]['secret_key']}}">
                                    </div>
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        @if($paypal[0]['key_type'] == 1)
                                            <input type="checkbox" class="custom-control-input" id="paypal_live" checked="checked">
                                            <label class="custom-control-label" for="paypal_live"> is Live </label>
                                        @else
                                            <input type="checkbox" class="custom-control-input" id="paypal_live">
                                            <label class="custom-control-label" for="paypal_live"> is Live </label>
                                        @endif
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="client_id">Client ID</label>
                                        <input type="text" class="form-control" id="l_client_id" placeholder="Client ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Secret Key</label>
                                        <input type="text" class="form-control" id="l_secret_key" placeholder="Secret Key">
                                    </div>
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="paypal_live">
                                        <label class="custom-control-label" for="paypal_live"> is Live </label>
                                    </div>
                                @endif

                                    <button type="submit" class="btn btn-primary pull-right"> Connect </button>
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

<!-- google integration Modal -->
<div class="modal fade" id="googleModal" tabindex="-1" role="dialog" aria-labelledby="payPalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="height:auto !important">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{asset('admin/assets/img/ico/google-places.png')}}" class=" modelImg p-3" alt="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form class="p-3" id="googleVerficationForm" status="0" method="POST" action="{{url('admin/save-payal')}}">
                                    <input type="hidden" name="google" class="google" value="google">
                                    <div class="form-group">
                                        <label for="google_api_key">API Key</label>
                                        <input type="text" class="form-control" id="google_api_key" placeholder="API Key">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary btn-sm" id="verify"> Verify </button>
                                        <button type="button" class="btn btn-primary btn-sm"> Save </button>
                                    </div>
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


@endsection

@section('js')

@include('js_files.admin.integrationJs')
@endsection
