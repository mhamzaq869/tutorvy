@extends('tutor.layouts.app')

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p class="mr-3 mb-3 heading-first">
                     Payment
                </p>
            </div>
        </div>

        <p class="heading-third mb-0">My wallet</p>
        <div class="row">
            <div class="col-md-12 mb-1 ">
                <div class=" card  bg-toast infoCard">


                    <div class="card-body row">
                        <div class="col-md-1 text-center">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-11">
                            <small>
                                Payment stats here to know about your earnings and way to organize the paid classes. <a href="#">Learn More</a>

                            </small>
                            <a href="#" class="cross"  onclick="hideCard()">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card">
                    <div class="card-body pt-1 pb-1">
                        <img src="../assets/images/ico/dollars.png" style="width: 45px;" class="mt-3">
                        <div class="">
                            <p class="heading-fifth mt-4" style="line-height: 0;">Total Earning</p>
                            <p class="heading-first"> 00$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card">
                    <div class="card-body  pt-1 pb-1">
                        <img src="../assets/images/ico/doollarss.png" style="width: 45px;" class="mt-3">
                        <div class="">
                            <p class="heading-fifth mt-4" style="line-height: 0;">Current balance</p>
                            <p class="heading-first">
                            @if ($cleared != 0 || $cleared != null)
                                ${{$cleared}}
                            @else
                                ${{0}}
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card">
                    <div class="card-body pt-1 pb-1">
                        <img src="../assets/images/ico/dolar.png" style="width: 45px;" class="mt-3">
                        <div class="">
                            <p class="heading-fifth mt-4" style="line-height: 0;">Pending balance</p>
                            <p class="heading-first">
                                @if ($pend != 0 || $pend != null)
                                    ${{$pend}}
                                @else
                                    ${{0}}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body pt-1 pb-1">
                        <img src="../assets/images/ico/doollarss.png" style="width: 45px;" class="mt-3">
                        <div class="">
                            <p class="heading-fifth mt-4" style="line-height: 0;">Available to Withdraw</p>
                            <p class="heading-first">
                                @if ($cleared != 0 || $cleared != null)
                                    ${{$cleared}}
                                @else
                                    ${{0}}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row mt-3 ">
            <div class="col-md-2">
                <h5 class="pt-3">Withdraw: </h5>


            </div>
            <div class="col-md-8 mt-1">
                    <a href="#" class="btn btn-light btn-outline-general" data-toggle="modal" data-target="#paymentAmountModel">
                        <h3 class="mb-0 heading-forth"><img style="width:30px;" src="{{asset ('assets/images/payment-icon/paypal_logo_512.png')}}" alt="">
                        Paypal</h3>
                    </a>
                    <a href="#" class="btn btn-light btn-outline-general">
                        <h3 class="mb-0 heading-forth"><img style="width:30px;" src="{{asset ('assets/images/payment-icon/payoneer.png')}}" alt="">
                        Bank Transfer</h3>
                    </a>

            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-md-6">
                <p class="heading-third">Payment history</p>
            </div>
            <div class="col-md-6">
                <p class="view-bookings" style="float: right;cursor: pointer;" id="btnExport">Download
                    statment
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" id="tblCustomers" cellspacing="0" cellpadding="0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Topic</th>
                                    <th>Time</th>
                                    <th>Subject</th>
                                    <th>Duration</th>
                                    <th>Payment Status</th>
                                    <th>Amount</th>
                                    <th style="visibility: hidden;">adasdasd </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($payment != "[]")
                                    @foreach($payment as $pay)

                                        <tr>
                                            <td class="pt-4"> {{$pay->user->first_name}} {{$pay->user->last_name}}</td>
                                            <td class="pt-4">{{$pay->topic}}</td>
                                            <td class="pt-4">{{$pay->class_time}}</td>
                                            <td class="pt-4">{{$pay->subject->name}}</td>
                                            <td class="pt-4">{{$pay->duration}} hour</td>
                                            @if($pay->status == "2")
                                                <td class="pt-4"><span class="bg-color-apporve"> In Escrow </span></td>
                                            @else
                                                <td class="pt-4">
                                                    <span class="bg-color-apporve1"> Pending </span>
                                                </td>
                                            @endif
                                            <td class="pt-4 text-center"> ${{$pay->price}}</td>
                                            <td class="pt-4" >
                                                <a class="cencel-btn" href="{{route('tutor.booking.detail',[$pay->id])}}"> View Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td>
                                        No Payment Found Yet
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

  <!--Paypal Modal -->
        <div class="modal fade" id="paymentModel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-4 pb-4">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="iconss" style="text-align: center;">
                                        <!-- <img src="{{asset('assets/images/ico/watchs.png')}}" width="60px"> -->
                                        <p
                                            style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                           Conigure Your Paypal Account</p>
                                        <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                            class="ml-4 mr-4">
                                            We will use this PayPal account to send you money when you initiate a withdrawal.
                                        </p>
                                    </div>
                                    <div class="ml-4 mr-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Email Address</label>
                                                        <input type="email" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Repeat Email Address</label>
                                                        <input type="email" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>We will not be able to recover funds sent to the wrong address, please make sure the information you enter is correct.</p>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="working" id="working">
                                                        <label class="custom-control-label" for="working">I understand and agree. </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3"  style="text-align: right;">
                                                    <button type="button" class="btn-general" data-dismiss="modal"
                                                        style="">Connect My PayPal Account</button>
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

          <!--Payment Amount Modal -->
          <div class="modal fade" id="paymentAmountModel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-4 pb-4">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="iconss" style="text-align: center;">
                                        <!-- <img src="{{asset('assets/images/ico/watchs.png')}}" width="60px"> -->
                                        <p
                                            style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                           Enter your amount</p>
                                        <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                            class="ml-4 mr-4">

                                        </p>
                                    </div>
                                    <div class="ml-4 mr-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Current Balance</label>
                                                    <div class="form-group input-group">

                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                @if ($cleared != 0 || $cleared != null)
                                                                ${{$cleared}}
                                                            @else
                                                                ${{0}}
                                                            @endif
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" disabled aria-label="Amount (to the nearest dollar)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Amount to Withdraw</label>
                                                    <div class="form-group input-group">

                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="amount" aria-label="Amount (to the nearest dollar)">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <p>We will not be able to recover funds after sending, please make sure the information you enter is correct.</p>
                                                </div>

                                                <div class="col-md-12 mt-3"  style="text-align: right;">
                                                    <button type="button" class="btn-general" id="cnfrm_send"
                                                        style="">Send</button>
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

           <!--Pay Now Class Modal -->
           <div class="modal fade" id="payModel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-4 pb-4">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="iconss" style="text-align: center;">

                                        <img src="{{asset ('admin/assets/img/ico/doollarss.png')}}" width="60px">
                                        <p
                                            style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                            Note</p>
                                        <!-- <p style="font-size: 15px;color: #00132D;font-family: Poppins;font-weight: 400;"
                                            class="ml-4 mr-4">
                                            Send approved time for class.
                                        </p> -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>Payment Details</h3>
                                    </div>

                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Current Balance: </p>
                                </div>

                                <div class="col-md-6 col-6 col-sm-6 text-right" >
                                    <strong id="price">
                                    @if ($cleared != 0 || $cleared != null)
                                        ${{$cleared}}
                                    @else
                                        ${{0}}
                                    @endif
                                    </strong>
                                </div>

                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Amount to withdraw: <span id="total_commision"></span>
                                    </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="commission"> $100</strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Remaining Balance: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="total_price">$23</strong>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <h3>Reciever Details</h3>
                                    </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Reciever PayPal Account </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="total_price">
                                        {{hideEmailAddress(Auth::user()->email)}}
                                    </strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">PayPal Service Tax: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="total_price">$1.87</strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Amount Transfered: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="total_price_b">$98.13</strong>
                                </div>
                                <div class="col-md-12 text-right mt-3" id="show_pay_btn">
                                    <form action="{{route('tutor.withdraw.paypal')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="amount" id="payouts_amnt" value="">
                                        <input type="submit" class="btn-general" value="Confirm">


                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" style="text-align: right;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
  <script>

      $("#cnfrm_send").click(function(){

            var crnt_bal = "{{$cleared ?? 0}}"
            var amnt = $("#amount").val();
            var total_price = crnt_bal - amnt;

            if(crnt_bal >= amnt){
                $("#commission").html('$'+amnt)
                $("#total_price").html('$'+total_price)
                $("#total_price_b").html('$'+amnt)
                $("#payouts_amnt").val(amnt)

                $("#paymentAmountModel").modal("hide");
                $("#payModel").modal("show");
            }else{
                alert('Your balance is not enough');
            }

      });
  </script>
@endsection
