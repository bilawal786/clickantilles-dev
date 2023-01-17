<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist_products';
    protected $fillable = ['product_id','user_id'];


    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}
