<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'order_id',
        'pay_name',
        'payer_email',
        'amount',
        'currency',
        'status',
        'tran_id',
        'net_amount',
        'paypal_fee'
    ];
    public function order() {
      return $this->belongsTo('App\Order','order_id');
  }
}
