<?php

namespace App\Http\Resources\Settings;

use Illuminate\Http\Resources\Json\JsonResource;

class SlidesResource extends JsonResource
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
            'main_bg_image' => $this->mainbg ?? '',
            'main_bg_heading' => $this->mainbgheading ?? '',
            'main_bg_description' => $this->mainbgdescription ?? '',
            'h1' => $this->h1 ?? '',
            'timer' => $this->timer ?? '',
            'button_text' => $this->button_text ?? '',
            'slide1' => $this->slide1 ?? '',
            'slide2' => $this->slide2 ?? '',
            'slide3' => $this->slide3 ?? '',
            'slide4' => $this->slide4 ?? '',
            'slide5' => $this->slide5 ?? '',
            'image1' => $this->image1 ?? '',
            'image2' => $this->image2 ?? '',
            'image3' => $this->image3 ?? '',
            'image4' => $this->image4 ?? '',
            'image5' => $this->image5 ?? '',
            'image6' => $this->image6 ?? '',
            'image7' => $this->image7 ?? '',
            'image8' => $this->image8 ?? '',
            'heading_1' => $this->heading_1 ?? '',
            'heading_2' => $this->heading_2 ?? '',
            'heading_3' => $this->heading_3 ?? '',
            'heading_4' => $this->heading_4 ?? '',
            'link_1' => $this->link_1 ?? '',
            'link_2' => $this->link_2 ?? '',
            'link_3' => $this->link_3 ?? '',
            'link_4' => $this->link_4 ?? '',
            'link_5' => $this->link_5 ?? '',
            'link_6' => $this->link_6 ?? '',
            'link_7' => $this->link_7 ?? '',
            'link_8' => $this->link_8 ?? '',
        ];
    }
}
