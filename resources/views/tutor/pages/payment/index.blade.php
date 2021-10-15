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
                            <p class="heading-first"> 00$</p>
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
                            <p class="heading-first"> 00$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-md-2">
                <h5 class="pt-3">Withdraw: </h5>

               
            </div>
            <div class="col-md-8 mt-1">
                    <a href="#" class="btn btn-light btn-outline-general" data-toggle="modal" data-target="#paymentModel">
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
                                                        <label class="custom-control-label" for="working">Currently Working? </label>
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
@endsection
