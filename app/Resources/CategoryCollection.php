<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
class CategoryCollection extends JsonResource
{
    public function toArray($request)
    {

        if($this->categories_details)
            $this->categories_details->category_image_app = asset($this->categories_details->category_image_app);
        return [
            'data' => $this->categories_details,
        ];
    }
}
