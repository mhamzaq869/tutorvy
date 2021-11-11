<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\PayerInfo;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Obydul\LaraSkrill\SkrillClient;
use Obydul\LaraSkrill\SkrillRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use App\Models\Payments;
use App\Models\Wallet;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;

class WalletController extends Controller
{

    public function __construct()
    {

        $paypal_configuration = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);

        // Skrill Integeration
        $this->skrilRequest = new SkrillRequest();
        $this->skrilRequest->pay_to_email = 'skrill_user_test2@smart2pay.com';
        $this->skrilRequest->return_url = 'https://webs.dev/student/getskrillstatus';
        $this->skrilRequest->cancel_url = 'https://webs.dev/student/wallet';
        $this->skrilRequest->logo_url = 'https://tutorvydev.naumanyasin.com/assets/images/logo/logo.png';
        $this->skrilRequest->status_url = 'hamzalc869@gmail.com';

    }

    public function index()
    {
        $payment = Booking::with(['tutor','subject'])->where('user_id',Auth::user()->id)->whereIn('status',['2','1'])->get();
        $spent_payment = Booking::where('status',2)->where('user_id',Auth::user()->id)->sum('price');

        $walletIn = Wallet::where('user_id',Auth::user()->id)->where('type','in')->sum('amount');
        $walletOut = Wallet::where('user_id',Auth::user()->id)->where('type','out')->sum('amount');
        $balance  = $walletIn-$walletOut;

        return view('student.pages.payment.index',compact('payment','spent_payment','balance'));
    }


    public function depositMoney(Request $request)
    {

        if($request->paytype == 'skrill'){
            $payerEmail = DB::table('payment_methods')
                                ->where('user_id',Auth::user()->id)
                                ->where('method','skrill')
                                ->first();

            //Payment Through Skrill
            $this->skrilRequest->pay_from_email = $payerEmail->email;
            $this->skrilRequest->transaction_id = 'SKRL-'.rand();
            $this->skrilRequest->amount = $request->amount;
            $this->skrilRequest->currency = 'USD';
            $this->skrilRequest->language = 'EN';
            $this->skrilRequest->prepare_only = '1';
            $this->skrilRequest->merchant_fields = 'Tutorvy,'.Auth::user()->email;
            $this->skrilRequest->site_name = 'Tutorvy.com';
            $this->skrilRequest->customer_email = Auth::user()->email;
            $this->skrilRequest->detail1_description = 'Payment Deposit';
            $this->skrilRequest->detail1_text = $request->amount;
            $this->skrilRequest->detail2_description = 'Service Fee:%0';
            $this->skrilRequest->detail2_text = '$0';

            Session::put('transaction_id',$this->skrilRequest->transaction_id);
            Session::put('amount',$request->amount);

            // create object instance of SkrillClient
            $client = new SkrillClient($this->skrilRequest);
            $sid = $client->generateSID(); //return SESSION ID

            // handle error
            $jsonSID = json_decode($sid);

            if ($jsonSID != null && $jsonSID->code == "BAD_REQUEST")
                return $jsonSID->message;
            // do the payment
            $redirectUrl= $client->paymentRedirectUrl($sid); //return redirect url

            return redirect()->to($redirectUrl);

        }else{
            //Payment Through Paypal
            Session::put('amount',$request->amount);
            Session::put('service_fee',0);
            Session::forget('payment_id');

            $payerEmail = DB::table('payment_methods')
                                ->where('user_id',Auth::user()->id)
                                ->where('method','paypal')
                                ->first();

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $payerInfo = new PayerInfo();
            $payerInfo->setEmail($payerEmail->email);

            $payer->setPayerInfo($payerInfo);

            $item_1 = new Item();

            $item_1->setName('Deposit Money')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($request->amount);

            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal($request->amount);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Enter Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('deposit.status'))
                ->setCancelUrl(URL::route('deposit.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (Config::get('app.debug')) {
                    Session::put('error','Connection timeout');
                    return redirect()->route('deposit.status');
                } else {
                    Session::put('error','Some error occur, sorry for inconvenient');
                    return redirect()->route('deposit.status');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            if(isset($redirect_url)) {
                return redirect()->away($redirect_url);
            }
            Session::put('error','Unknown error occurred');

        }

    	return redirect()-route('student.wallet');

    }

    public function getPaymentStatus(Request $request)
    {
        $amount = Session::get('amount');
        Session::forget('payment_id');

        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            Session::put('error','Payment failed');
            return redirect()->route('deposit.status');
        }

        $payment = Payment::get($request->paymentId, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);


        if ($result->getState() == 'approved') {

                Payments::create([
                    'user_id' => Auth::user()->id,
                    'type' => 'Deposit Balance',
                    'transaction_id' => $request->paymentId,
                    'amount'  => $amount ?? '',
                    'service_fee' => Session::get('service_fee'),
                    'method'  => 'paypal'
                ]);

                Wallet::create([
                    'user_id' => Auth::user()->id,
                    'amount'  => $amount,
                    'type' => 'in',
                    'note' => 'balance added',
                ]);

                $id = Auth::user()->id;
                $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
                $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment Deposit Successfully';
                $activity_logs = new GeneralController();
                $activity_logs->save_activity_logs("Payment Deposit Successfully", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);


                $notification = new NotifyController();
                $slug = URL::to('/') . '/student/wallet';
                $type = 'deposit_balance';
                $title = 'Deposit Balance';
                $icon = 'fas fa-tag';
                $class = 'btn-success';
                $desc = 'You have Successfully Deposit $'.$amount.' by Paypal';
                $pic = Auth::User()->picture;
                $notification->GeneralNotifi(Auth::user()->id ,$slug,$type,$title,$icon,$class,$desc,$pic);

            return redirect()->route('student.wallet');
        }
        Session::put('error','Payment failed !!');
		return redirect()->route('student.wallet');
    }


    public function getSkrillStatus(Request $request)
    {
        $amount = Session::get('amount');
        $transaction_id = Session::get('transaction_id');

        Payments::create([
            'user_id' => Auth::user()->id,
            'type' => 'Deposit Balance',
            'transaction_id' => $transaction_id,
            'amount'  => $amount ?? '',
            'service_fee' => Session::get('service_fee'),
            'method'  => 'paypal'
        ]);

        Wallet::create([
            'user_id' => Auth::user()->id,
            'amount'  => $amount,
            'type' => 'in',
            'note' => 'balance added',
        ]);

        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment Deposit Successfully';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Payment Deposit Successfully", "users.id", $id, $action_perform, \Request::header('User-Agent'), $id);


        $notification = new NotifyController();
        $slug = URL::to('/') . '/student/wallet';
        $type = 'deposit_balance';
        $title = 'Deposit Balance';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = 'You have Successfully Deposit $'.$amount.' by Skrill';
        $pic = Auth::User()->picture;
        $notification->GeneralNotifi(Auth::user()->id ,$slug,$type,$title,$icon,$class,$desc,$pic);

        return redirect()->route('student.wallet');

    }

}
