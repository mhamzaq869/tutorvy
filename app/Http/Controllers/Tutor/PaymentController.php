<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
use App\Models\Wallet;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payee;
use PayPal\Api\PayerInfo;
use PayPal\Api\Payout;
use PayPal\Api\PayoutItem;
use PayPal\Api\PayoutBatch;
use PayPal\Api\PayoutBatchHeader;
use PayPal\Api\PayoutSenderBatchHeader;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{
    /**
     *  Return Tutor Payment view
     */
    private $_api_context, $skrilRequest,$pay_from_email;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);


    }

    public function index(){
        $payment = Booking::with(['user','subject'])->where('booked_tutor',Auth::user()->id)->whereIn('status',['2','5'])->get();
        $pend = Wallet::where('user_id',Auth::user()->id)->where('type','pen')->sum('amount');
        $cleared = Wallet::where('user_id',Auth::user()->id)->where('type','cleared')->sum('amount');

        return view('tutor.pages.payment.index',compact('payment','pend','cleared'));
    }


    /**
     * @param Request $request
     *
     */

    public function paypalConfigure(Request $request)
    {

        DB::table('payment_methods')->insert([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'method' => 'paypal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success','Your Paypal account successfully added');

    }


    public function delPayMethod(Request $request)
    {
        try{
            $del = DB::table('payment_methods')->where('id',$request->id)->delete();
            return response()->json('success');
        }
        catch(\Exception $e){
            return response()->json('error');
        }

    }

    public function withdrawWithPaypal(Request $request){

        $receiverEmail = DB::table('payment_methods')
                                ->where('user_id',Auth::user()->id)
                                ->where('method','paypal')
                                ->first();

        // Create a new instance of Payout object
        $payouts = new Payout();

        $senderBatchHeader = new PayoutSenderBatchHeader();
        // ### NOTE:
        // You can prevent duplicate batches from being processed. If you specify a `sender_batch_id` that was used in the last 30 days, the batch will not be processed. For items, you can specify a `sender_item_id`. If the value for the `sender_item_id` is a duplicate of a payout item that was processed in the last 30 days, the item will not be processed.

        // #### Batch Header Instance
        $senderBatchHeader->setSenderBatchId(uniqid())
            ->setEmailSubject("You have a Payout!");

        // #### Sender Item
        // Please note that if you are using single payout with sync mode, you can only pass one Item in the request

        $senderItem = new PayoutItem();
        $senderItem->setRecipientType('Email')
            ->setNote('Thanks for your patronage!')
            ->setReceiver($receiverEmail->email ?? '')
            ->setSenderItemId(uniqid())
            ->setAmount([
                'value' => 22,
                'currency' => 'USD'
            ]);

        $payouts->setSenderBatchHeader($senderBatchHeader)
            ->addItem($senderItem);

         // ### Create Payout
        try {
            $output = $payouts->create(['sync_mode' => 'false'],$this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            dd($ex);
            exit(1);
        }

        // dd($output->batch_header);

        dd($senderItem->get($output->batch_header->payout_batch_id,$this->_api_context));
        // return redirect($output->links[0]->href);
        return $output;

        // $payer = new Payer();
        // $payer->setPaymentMethod('paypal');


        // $item_1 = new Item();

        // $item_1->setName('Online Class')
        //     ->setCurrency('USD')
        //     ->setQuantity(1)
        //     ->setPrice(20);

        // $item_list = new ItemList();
        // $item_list->setItems(array($item_1));

        // $amount = new Amount();
        // $amount->setCurrency('USD')
        //     ->setTotal(20);

        // $payee = new Payee();
        // $payee->setEmail("sb-j1n6u851143@personal.example.com");

        // $transaction = new Transaction();
        // $transaction->setAmount($amount)
        //     ->setItemList($item_list)
        //     ->setDescription('Online class booking.')
        //     ->setPayee($payee)
        //     ->setInvoiceNumber(uniqid());

        // $redirect_urls = new RedirectUrls();
        // $redirect_urls->setReturnUrl(URL::route('tutor.payment.paypal_status'))
        //     ->setCancelUrl(URL::route('tutor.payment.paypal_status'));

        // $payment = new Payment();
        // $payment->setIntent('Sale')
        //     ->setPayer($payer)
        //     ->setRedirectUrls($redirect_urls)
        //     ->setTransactions(array($transaction));

        // try {
        //     //create payment object
        //     $createdPayment = $payment->create($this->_api_context);

        //     //get payment details to get payer id so that payment can be executed and transferred to seller.
        //     $paymentDetails = Payment::get($createdPayment->getId(), $this->_api_context);
        //     $execution = new PaymentExecution();
        //     $execution->setPayerId($paymentDetails->getPayer());
        //     $paymentResult = $paymentDetails->execute($execution,$this->_api_context);

        // } catch (\Exception $ex) {
        //     //handle exception here
        // }

        // // try {
        // //     $payment->create($this->_api_context);
        // // } catch (\PayPal\Exception\PPConnectionException $ex) {
        // //     if (\Config::get('app.debug')) {
        // //         Session::flash('error','Connection timeout');
        // //         return redirect()->route('student.bookings');
        // //     } else {
        // //         Session::flash('error','Some error occur, sorry for inconvenient');
        // //         return redirect()->route('student.bookings');
        // //     }
        // // }

        // // foreach($payment->getLinks() as $link) {
        // //     if($link->getRel() == 'approval_url') {
        // //         $redirect_url = $link->getHref();
        // //         break;
        // //     }
        // // }
        // // Session::put('booking_id', $booking->id);
        // // Session::put('payment_id', $payment->getId());

        // // return $redirect_url;
        // $approvalUrl = $payment->getApprovalLink();

        // return redirect($approvalUrl);
    }

    public function paypalResponseSuccess(Request $request)
    {
        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token'))){
            //payment was unsuccessful
            //send failure response to customer
            \Session::flash('error','Unable to process your request.');
            return Redirect::route('student.bookings');
        }
        $payment = Payment::get($request->query('paymentId'), $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));

        // Then we execute the payment.
        $result = $payment->execute($execution, $this->_api_context);


        dd($request->all(),$result);
       //payment is received,  send response to customer that payment is made.
    }
}
