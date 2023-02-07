<?php

namespace App\Http\Resources\Orders;

use App\Products;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $pro = [];
        foreach (json_decode($this->products) as $key => $item){
            $product = Products::find($item->id);
            $data = [
                'product_id' => (string)$item->id,
                'name' => (string)$item->name,
                'image' => (string)$product->photo1,
                'quantity' => (string)$item->quantity,
                'price' => (int)$item->price,
                'size' => (string)$item->attributes->size,
                'color' => (string)$item->attributes->color,
            ];
            $pro[$key] =  $data;
        }
        return [
            'id' => $this->id,
            'order_number' => $this->order_number ?? '',
            'name' => $this->name ?? '',
            'email' => $this->email ?? '',
            'phone' => $this->phone ?? '',
            'total' => $this->total ?? '',
            'order_status' => $this->admin_status ?? '',
            'products' => $pro,
            'payment_method' => $this->payment_method ?? '',
            'invoice_number' => $this->invoice_number ?? '',
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
