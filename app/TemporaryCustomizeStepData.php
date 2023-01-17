<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryCustomizeStepData extends Model
{
    //
    protected $fillable = [
      'temporary_id',
      'user_id',
      'customize_category_id',
      'package_id',
      'style_id',
      'style_name',
      'fitting',
      'texture_id',
      'jacket_id',
      'vest_id',
      'pant_id',
      'upper_id',
      'lower_id',
      'order_id',
      'style_cate_id',
      'style_cate_name',
      'measured',
      'suit_piece',
      'jacket_in',
      'vest_in',
      'pant_in',
      'package_price',
      'texture_price',
      'cus_total_price',
      'measure_type',
      'suit_code',
      'shipping_id',
      'shipping_price'
  ];
}
