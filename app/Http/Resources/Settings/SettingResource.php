<?php

namespace App\Http\Resources\Settings;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'logo' => $this->logo ?? '',
            'sitename' => $this->sitename ?? '',
            'address' => $this->address ?? '',
            'phone1' => $this->phone1 ?? '',
            'phone2' => $this->phone2 ?? '',
            'email' => $this->email ?? '',
            'footer' => $this->footer ?? '',
            'facebook' => $this->facebook ?? '',
            'instagram' => $this->instagram ?? '',
            'home_text' => $this->home_text ?? '',
            'twitter' => $this->twitter ?? '',
            'utube' => $this->utube ?? '',
            'about' => $this->about ?? '',
            'terms' => $this->terms ?? '',
            'privacy' => $this->privacy ?? '',
            'return' => $this->return ?? '',
            'help' => $this->help ?? '',
        ];
    }
}
