<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
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
}
