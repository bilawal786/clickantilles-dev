<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id ?? '',
            'category_name' => $this->category->name ?? '',
            'subcategory_name' => $this->subcategory->name ?? '',
            'is_liked' => false,
            'title' => $this->title ?? '',
            'slug' => $this->slug ?? '',
            'price' => $this->price ?? '',
            'old_price' => $this->oldprice ?? '',
            'stock' => $this->stock ?? '',
            'sku' => $this->sku ?? '',
            'featured_image' => $this->photo1 ?? '',
            'photo2' => $this->photo2 ?? '',
            'discount' => $this->discount ?? '',
            'video' => $this->video ?? '',
            'unit' => $this->unit ?? '',
            'volume' => $this->volume ?? '',
            'material' => $this->material ?? '',
            'gallery' => json_decode($this->gallery) ?? [],
            'status' => $this->status ?? '',
            'short_description' => $this->short_description ?? '',
            'description' => $this->description ?? '',
            'size' => explode(',', $this->size) ?? '',
            'colors' => explode(',', $this->color) ?? '',
            'review_count' => $this->reviews->count() ?? '',
            'avg_rating' => $this->reviews->avg('rating') ?? '0',
            'deal' => $this->deal_upto ? $this->deal_upto->isPast() ? false : true : false,
            'deal_price' => $this->deal_upto ? $this->deal_upto->isPast() ? '' : (string)($this->price * (100 - $this->deal_percentage) / 100) : '',
            'deal_upto' => $this->deal_upto ? $this->deal_upto->isPast() ? '' : $this->deal_upto : '',
        ];
    }
}
