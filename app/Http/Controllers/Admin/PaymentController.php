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

    public function index()
    {
        $payments = Payment::all();
        logger($payments);
        return view('admin.payment.list',compact('payments'));
    }

}
