<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileCart extends Model
{
    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}
