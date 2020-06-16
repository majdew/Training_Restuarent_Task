<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
       protected $fillable = array('paid');
    //
    public function order()
    {
        return $this->belongsTo(Order :: class);
    }


}
