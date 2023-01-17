<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowerMeasurement extends Model
{
    //
    protected $fillable = [
      'user_id',
      'pant_id',
      'crotch',
      'thighs',
      'length',
      'bottom',
      'knee',
      'shorts',
      'stomach',
      'measure_type'
  ];
  public function user() {
    return $this->belongsTo('App\User','user_id');
  }
  public function pant() {
    return $this->belongsTo('App\Pant','pant_id');
  }
}

