<?php

namespace App\Resources;
use  App\Resources\StateCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
class StatesCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
            'country_id' => $this->country_id ?? '',
            'state_name' => $this->state_name ?? '',
            'state_abbr' => $this->state_abbr ?? '',
            'state_slug' => $this->state_slug ?? '',
            'state_country_abbr' => $this->state_country_abbr ?? '',
            'state_image' => asset('storage/' . $this->state_image) ?? '',
            'state_image_tiny' => asset('storage/' . $this->state_image_tiny) ?? '',
            'state_image_small' => asset('storage/' . $this->state_image_small) ?? '',
            'state_image_medium' => asset('storage/' . $this->state_image_medium) ?? '',
            'state_image_blur' => asset('storage/' . $this->state_image_blur) ?? '',
        ];
    }
}
