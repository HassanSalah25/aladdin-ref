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
         if($this->states_details)
         $this->states_details->state_image = asset('storage/state/'.$this->states_details->state_image);
        return $this->states_details;
    }
}
