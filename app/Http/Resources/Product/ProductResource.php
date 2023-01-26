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
            'is_liked'=>false,
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
            'gallery'=>explode(',', $this->gallery),
            'status'=>$this->status??'',
            'short_description'=>$this->short_description??'',
            'description'=>$this->description??'',
            'colors'=>explode(',', $this->color)??'',
            'quantity'=>$this->quantity??'',
            'review_count'=>$this->reviews->count()??'',
            'avg_rating'=>$this->reviews->avg('rating')??'',
        ];
    }
}
