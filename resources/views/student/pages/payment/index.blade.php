@extends('student.layouts.app')

@section('content')
    <div class="content-wrapper " style="overflow: hidden;">
        <section id="homesection">
            <div class="container-fluid m-0 p-0">
                <div class="row">
                    <div class="col-md-12">
                        <p class="heading-first mr-3 ml-3">
                            Wallet
                        </p>
                    </div>

                </div>
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                            style="margin-top:-12px">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="row ml-2 mr-2 ">
                    <div class="col-md-12 mb-3 ">
                        <div class=" card mt-0 bg-toast infoCard">
                            <div class="card-body row">
                                <div class="col-md-1 text-center">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11 pl-0">
                                    <small>
                                        Wallet have all the information you need to know about payments and remaining
                                        balances <a href="#">Learn More</a>
                                    </small>
                                    <a href="#" class="cross" onclick="hideCard()">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="heading-third ">
                            My wallet
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="card-body">
                                <img src="../assets/images/ico/dollars.png" style="width: 45px;">
                                <div class="">
                                <p class=" heading-fifth mt-3"
                                    style="line-height: 0;">Total Spend</p>
                                    <p class="heading-first mb-0"> ${{ $spent_payment }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="card-body">
                                <img src="../assets/images/ico/doollarss.png" style="width: 45px;">
                                <div class="">
                                <p class=" heading-fifth mt-3"
                                    style="line-height: 0;">Current balance</p>
                                    <p class="heading-first mb-0"> ${{$balance}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="card-body">
                                <img src="../assets/images/ico/dollars.png" style="width: 45px;">
                                <div class="">
                                <p class=" heading-fifth mt-3"
                                    style="line-height: 0;">Pending balance</p>
                                    <p class="heading-first mb-0"> $0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mt-0">
                            <div class="card-body">
                                <img src="../assets/images/ico/dollars.png" style="width: 45px;">
                                <div class="">
                                <p class=" heading-fifth mt-3"
                                    style="line-height: 0;">
                                    <a type="button" onclick="addBalance()" data-target=""> + Add balance</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="heading-third mt-2">
                            Payment history
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="" class="view-bookings mt-2" id="btnExport">
                            Download
                            statment
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <table id="tblCustomers" class="table table-bordered" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tutor</th>
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
                                    @foreach ($payment as $paid)
                                        <tr>
                                            <td class="pt-4">{{ $paid->tutor->first_name }}
                                                {{ $paid->tutor->last_name }} </td>
                                            <td class="pt-4">{{ $paid->subject->name }}</td>
                                            @if ($paid->topic == null)
                                                <td class="pt-4"> --- </td>
                                            @else
                                                <td class="pt-4">{{ $paid->topic }}</td>
                                            @endif
                                            <td class="pt-4">{{ $paid->class_time }} - {{ $paid->class_date }}
                                            </td>
                                            <td class="pt-4">{{ $paid->duration }} hour</td>
                                            <td class="pt-4 ">
                                                @if ($paid->status == '1')
                                                    <span class="statusTag pending_status">Payment Pending</span>
                                                @else
                                                    <span class="statusTag approve_status">Paid</span>
                                                @endif
                                            </td>
                                            <td class="pt-4">
                                                ${{ $paid->price }}
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
            </div>
        </section>

        <!--Pay Now Class Modal -->
        <div class="modal fade" id="payModel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-4 pb-4">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <form action="{{route('student.deposit')}}" method="post">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="iconss" style="text-align: center;">

                                            <img src="{{ asset('admin/assets/img/ico/doollarss.png') }}" width="60px">
                                            <p
                                                style="font-size: 24px;color: #00132D;font-family: Poppins;font-weight: 500;margin-top: 10px;">
                                                Add Balance
                                            </p>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="number" name="amount" class="form-control"
                                                aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3>Select Payment Method</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <p id="pmnt" class="font-weight-normal"></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{ asset('assets/images/payment-icon/paypal2.png') }}"
                                                            class="w-50" alt="">
                                                        <span class="round">
                                                            <input id="checkbox1" name="paytype" class="radio-custom"
                                                                value="paypal" type="radio">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <img src="{{ asset('assets/images/payment-icon/skrill.png') }}"
                                                            class="w-50" alt="">
                                                        <span class="round">
                                                            <input id="checkbox2" name="paytype" value="skrill"
                                                                type="radio">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 text-right">
                                        <input type="submit" id="paymntbtn" class="schedule-btn btn w-30" value="Continue" />
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @include('js_files.student.wallet')
@endsection

