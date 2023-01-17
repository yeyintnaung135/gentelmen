<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpperMeasurement extends Model
{
    //
    protected $fillable = [
      'user_id',
      'top_id',
      'chest',
      'waist',
      'hips',
      'shoulder',
      'sleeve',
      'front',
      'back',
      'neck',
      'jacket_length',
      'measure_type'
  ];
  public function user() {
    return $this->belongsTo('App\User','user_id');
  }
  public function top() {
    return $this->belongsTo('App\Top','top_id');
  }
}

