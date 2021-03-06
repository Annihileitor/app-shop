<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    //carDetail N --- 1 product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
