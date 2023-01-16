<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $table = 'product_reviews';
    protected $fillable = ['product_id','user_id','rating','review'];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
