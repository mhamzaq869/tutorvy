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
                                    <h3>Class Details</h3>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 ">
                                    <p class="mb-0">Schedule Date: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right" >
                                    <strong id="scdule_date"></strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Schedule Time: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right" >
                                    <strong id="class_time"></strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                     <p class="">Schedule Duration: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right" >
                                    <strong id="duration"></strong>
                                </div>
                                <div class="col-md-12">
                                    <h3>Payment Details</h3>
                                 </div>

                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Tutor Fee: </p>
                                </div>

                                <div class="col-md-6 col-6 col-sm-6 text-right" >
                                    <strong id="price"></strong>
                                </div>

                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Service Fee: <span id="total_commision"></span>
                                    </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="commission"></strong>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6">
                                    <p class="mb-0">Total Fee: </p>
                                </div>
                                <div class="col-md-6 col-6 col-sm-6 text-right">
                                    <strong id="total_price"></strong>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <h3>Payment Method</h3>
                                 </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{asset ('assets/images/payment-icon/paypal2.png')}}" class="w-50" alt="">
                                                <!-- <span class="payment-menu dropdown d-flex">
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
                                                </span> -->
                                                <span class="round">
                                                    <input id="checkbox1" name="paytype" onclick="paymentMethod(this.value)" {{isset($defaultPay) && ($defaultPay->method == 'paypal') ? 'checked' :''}} class="radio-custom" value="paypal" type="radio" >
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{asset ('assets/images/payment-icon/skrill.png')}}" class="w-50" alt="">
                                                <!-- <span class="payment-menu dropdown d-flex">
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
                                                </span> -->
                                                <span class="round">
                                                    <input id="checkbox2" name="paytype" onclick="paymentMethod(this.value)"  {{isset($defaultPay) && ($defaultPay->method == 'skrill') ? 'checked' :''}} value="skrill" type="radio">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{asset ('assets/images/icons8-wallet-64.png')}}" class="w-50" alt="">

                                                <span class="round">
                                                    <input id="checkbox3" name="paytype" onclick="paymentMethod(this.value)"  {{ isset($defaultPay) && ($defaultPay->method == 'wallet') ? 'checked' :''}} value="wallet" type="radio">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 text-right mt-3" id="show_pay_btn">
                                    <form action="{{url('/student/booking/payment')}}" id="payment" method="post">
                                        @csrf
                                        <div id="paytype"></div>
                                        <span></span>
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


@section('scripts')
    @include('js_files.student.bookingJs')
@endsection
