<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id??'',
            'category_name'=>$this->category->name??'',
            'subcategory_name'=>$this->subcategory->name??'',
            'wishlist'=>$this->wishlist??'',
            'title'=>$this->title??'',
            'slug'=>$this->slug??'',
            'price'=>$this->price??'',
            'stock'=>$this->stock??'',
            'sku'=>$this->sku??'',
            'photo1'=>$this->photo1??'',
            'photo2'=>$this->photo2??'',
            'discount'=>$this->discount??'',
            'video'=>$this->video??'',
            'unit'=>$this->unit??'',
            'volume'=>$this->volume??'',
            'material'=>$this->material??'',
            'gallery'=>$this->gallery??'',
            'colorimages'=>$this->colorimages??'',
            'status'=>$this->status??'',
            'short_description'=>$this->short_description??'',
            'description'=>$this->description??'',
            'colors'=>explode(',', $this->color)??'',
            'quantity'=>$this->quantity??'',
            'state'=>$this->state??'',
            'product_section'=>$this->product_section??'',
            'pro_category'=>$this->pro_category??'',
            'click_concept'=>$this->click_concept??'',
            'created_at'=>$this->created_at??'',
            'updated_at'=>$this->updated_at??'',
            'reviews'=>ProductReviewResource::collection($this->reviews),
        ];
    }
}
