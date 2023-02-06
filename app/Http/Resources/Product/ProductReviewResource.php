<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewResource extends JsonResource
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
            'username' => $this->user->fname.' '.$this->user->lname ??'',
            'rating' => $this->rating ?? '',
            'review' => (string)$this->review ?? '',
            'created_at' => $this->created_at->format('d/m/Y') ?? '',
        ];
    }
}
