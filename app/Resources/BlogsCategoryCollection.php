<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
class BlogsCategoryCollection extends JsonResource
{
    public function toArray($request)
    {

         return [
            "title" => $this->title,
            "title_ar" => $this->title_ar,
            "content_en" => $this->content_en,
            "content_ar" => $this->content_ar,
            "image"=> $this->image ? asset('storage/'.$this->getImg($this->image)):null,
            "id" => $this->id
        ];
    }
}
