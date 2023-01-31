<?php

namespace App\Http\Resources\ClickConcept;

use Illuminate\Http\Resources\Json\JsonResource;

class StoresResource extends JsonResource
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
            'name' => $this->name ?? '',
            'photo' => $this->photo ?? '',
            'description' => $this->description ?? '',
            'status' => $this->status ?? '',
        ];
    }
}
