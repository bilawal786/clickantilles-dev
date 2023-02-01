<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'price' => $this->price*$this->quantity ?? '',
            'quantity' => $this->quantity ?? '',
            'color' => $this->color ?? '',
            'size' => $this->size ?? '',
            'product_name' => $this->product->title ?? '',
            'product_image' => $this->product->photo1 ?? '',
        ];
    }
}
