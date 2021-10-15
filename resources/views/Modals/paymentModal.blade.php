<div class="modal fade" id="paypalModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pt-4 pb-4">
            <div class="modal-body">
                <div class="container">
                    <div class="row p-3">
                        <div class="text-center">
                            <h1 >Configure Your Paypal Account</h1>
                            <img src="{{asset ('assets/images/payment-icon/paypal_logo_512.png')}}" alt="">
                        </div>

                        <div class="col-md-12 mt-3">
                            <p class="font-weight-normal my-4 ">We will use this Paypal account to send you money when you initiate a withdrawl</p>

                            <form action="{{ route('paypal.conf') }}" onsubmit="form(this)" id="payment" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">Email:</label>
                                    <input type="email" name="email" class="form-control py-2">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Confirm Email:</label>
                                    <input type="email" name="email" class="form-control py-2">
                                </div>

                                <p class="font-weight-normal my-4 ">We will not be able to recover funds sent to the wrong address,
                                    please make sure the information you enter is correct.
                                </p>

                                <input type="checkbox" name="agreed" onchange="check()" value="true"> I understand and agree

                                <div class="text-right mt-5">
                                    <input type="submit" class="btn btn-primary" value="Connect to Paypal account">
                                </div>
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


<script>

      function check()
      {
        alert(this.prop('checked'))
      }


</script>
