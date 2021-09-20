@extends('student.layouts.app')

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <section id="homesection" >
        <div class="row">
            <div class="col-md-12">
                <p class="heading-first "> 
                        Wallet      
                    </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3 ">
                <div class=" card mt-0 bg-toast infoCard">
                    <div class="card-body row">
                        <div class="col-md-1 text-center">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-11 pl-0">
                            <small>
                                Wallet have all the information you need to know about payments and remaining balances <a href="#">Learn More</a>
                            </small>
                            <a href="#" class="cross"  onclick="hideCard()"> 
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="heading-third "> 
                        My wallet      
                    </p>
            </div>
        
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../assets/images/ico/dollars.png" style="width: 45px;" >
                        <div class="">
                            <p class="heading-fifth mt-3" style="line-height: 0;">Total Spend</p>
                            <p class="heading-first mb-0"> 2550$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../assets/images/ico/doollarss.png" style="width: 45px;" >
                        <div class="">
                            <p class="heading-fifth mt-3" style="line-height: 0;">Current balance</p>
                            <p class="heading-first mb-0"> 650$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../assets/images/ico/dollars.png" style="width: 45px;" >
                        <div class="">
                            <p class="heading-fifth mt-3" style="line-height: 0;">Pending balance</p>
                            <p class="heading-first mb-0"> 963$</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <p class="heading-third "> 
                        Payment history     
                    </p>
            </div>
            <div class="col-md-6 text-right">
                <a href="" class="view-bookings" id="btnExport">
                    Download
                    statment
                </a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table  id="tblCustomers" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Teacher</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" style="visibility: hidden;">adasdasd </th>
                                </tr>
                            </thead>
                           <tbody>

                           </tbody>
                           @foreach($payment as $paid)
                            <tr>
                                <td class="pt-4">{{$paid->tutor->first_name}} {{$paid->tutor->last_name}} </td>
                                <td class="pt-4">{{$paid->subject->name}}</td>
                                @if($paid->topic == null)
                                <td class="pt-4"> --- </td>
                                @else
                                <td class="pt-4">{{$paid->topic}}</td>
                                @endif
                                <td class="pt-4">{{$paid->class_time}} - {{$paid->class_date}}</td>
                                <td class="pt-4">{{$paid->duration}} hour</td>
                                <td class="pt-4 ">
                                    @if($paid->status == "1")
                                    <span class="statusTag pending_status">Payment Pending</span>
                                    @else
                                    <span class="statusTag approve_status">Paid</span>
                                    @endif
                                </td>
                                <td class="pt-4">
                                    ${{$paid->price}}
                                </td>
                                <td class="pt-4 pr-3"><a href="../payment/paymentdetail.html"> <button
                                            class="schedule-btn w-100 ">
                                            View details</button></a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
