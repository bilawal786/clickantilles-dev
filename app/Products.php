<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Products extends Model
{
    protected $dates = ['deal_upto'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
    public function reviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'product_id');
    }
    public function isLiked(){
        if (Auth::user()){
            $wishlist = Wishlist::where('product_id', $this->id)->where('user_id', Auth::user()->id)->first();
            if ($wishlist){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }
}
