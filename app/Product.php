<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = array('name', 'price', 'quantity');

    public function image()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
