<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
  protected $fillable = [
    'order_code',
    'paypal_order_id',
    'user_id',
    'address',
    'cus_cate_id',
    'package_id',
    'style_id',
    'upper_measure_id',
    'lower_measure_id',
    'suit_total',
    'total',
    'jacket_id',
    'pant_id',
    'vest_id',
    'fitting',
    'texture_id',
    'status',
    'suit_code',
    'suit_piece',
    'jacket_in',
    'vest_in',
    'pant_in',
    'shipping_id',
    'shipping_price',
    'measure_type'
  ];

  protected $appends = ['CusCategory','Texture','Package','Jacket','Pant','Vest','Style','Shipping','Upper','Lower','User'];

  public function getCusCategoryAttribute()
  {
      return  CustomizeCategory::where('id',$this->cus_cate_id)->first();
  }

  public function getTextureAttribute()
  {
    return Texture::where('id',$this->texture_id)->first();
  }

  public function getPackageAttribute()
  {
    return Package::find($this->package_id);
  }

  public function getJacketAttribute()
  {
     return Top::find($this->jacket_id);
  }

  public function getUserAttribute() {
    return User::find($this->user_id);
  }


  public function getPantAttribute(){
    return Pant::find($this->pant_id);
  }


  public function getVestAttribute()
  {
    return Shirt_Button::find($this->vest_id);
  }

  public function getStyleAttribute()
  {
    return Style::find($this->style_id);
  }

  public function getShippingAttribute()
  {
    return Shipping::find($this->shipping_id);
  }

  public function getUpperAttribute()
  {
    return UpperMeasurement::find($this->upper_measure_id);
  }

  public function getLowerAttribute()
  {
    return LowerMeasurement::find($this->lower_measure_id);
  }

  public function user() {
    return $this->belongsTo('App\User','user_id');
  }
  public function cus_category() {
    return $this->belongsTo('App\CustomizeCategory','cus_cate_id');
  }
  public function texture() {
    return $this->belongsTo('App\Texture','texture_id');
  }
  public function package() {
    return $this->belongsTo('App\Package','package_id');
  }
  public function jacket() {
    return $this->belongsTo('App\Top','jacket_id');
  }

  public function pant() {
    return $this->belongsTo('App\Pant','pant_id');
  }
  public function vest() {
    return $this->belongsTo('App\Vest_lapel','vest_id');
  }
  public function style() {
    return $this->belongsTo('App\Style','style_id');
  }



}

