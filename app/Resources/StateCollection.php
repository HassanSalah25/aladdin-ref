<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */		
class StateCollection extends JsonResource
{
    public function toArray($request)
    {
        return $this;
    }
}
