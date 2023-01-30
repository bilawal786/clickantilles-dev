<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileCart extends Model
{
    public function Product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}
