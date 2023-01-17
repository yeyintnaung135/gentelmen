<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
use App\Texture;
use App\Favourite;
use App\MainTexture;
use App\TextureSubCategory;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
    private $gateway;
    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }
    public function pay(Request $request)
    {
        // dd($request->all());
        try{
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();
            if($response->isRedirect()){

                $response->redirect();
            }
            else
            {

                return $response->getMessage();
            }
        }
        catch(\Throwable $th){

            return $th->getMessage();
        }
    }
    public function success(Request $request)
    {
      logger("payment successfull store table");
        if($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $response = $transaction->send();
            if($response->isSuccessful()){
                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();
                $mains = MainTexture::all();
                $subs = TextureSubCategory::all();
                // $grands = Texture::orderBy('name')->get();
                $grands = Texture::orderBy('popular_count', 'desc')->get();
                // dd($subs);
                return redirect()->route('fabrics');
                // return "Payment is Successfull.Your Transaction Id is : " .$arr['id'];
            }
            else
            {
                return response->getMessage();
            }
        }
        else
        {
            return "Payment Declined!";
        }
    }
    public function error()
    {
        return "User Declined Payment!";
    }
    public function list()
    {
        // dd(Auth::guard('admin')->user()->id);
        $payments = Payment::all();
        return view('admin.payment.list',compact('payments'));
    }
    public function delete_list(Request $request)
    {
        Payment::find($request->payment_id)->delete();
        return response()->json("success");
    }
}
