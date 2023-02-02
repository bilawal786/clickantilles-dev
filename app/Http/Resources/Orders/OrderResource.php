<?php

namespace App\Http\Resources\Orders;

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
        return [
            'id' => $this->id,
            'order_number' => $this->order_number ?? '',
            'name' => $this->name ?? '',
            'email' => $this->email ?? '',
            'phone' => $this->phone ?? '',
            'total' => $this->total ?? '',
            'order_status' => $this->admin_status ?? '',
            'products' => json_decode($this->products) ?? [],
            'payment_method' => $this->payment_method ?? '',
            'invoice_number' => $this->invoice_number ?? '',
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
