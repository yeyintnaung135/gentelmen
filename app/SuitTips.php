<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuitTips extends Model
{
    //
    protected $fillable = [
        'photo','brand','title','description','feature'
    ];

    protected $attributes = [
        'feature' => 'No',
    ];
}
