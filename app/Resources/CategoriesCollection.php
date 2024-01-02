<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
class CategoriesCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
            'category_name' => $this->category_name ?? '',
            'category_slug' => $this->category_slug ?? '',
            'category_icon' => $this->category_icon ?? '',
            'category_parent_id' => $this->category_parent_id ?? '',
            'category_description' => $this->category_description ?? '',
            'category_image' => asset('storage/' . $this->category_image ?? ''),
            'category_image_app' => asset('storage/' . $this->category_image_app ?? ''),
            'category_thumbnail_type' => $this->category_thumbnail_type ?? '',
            'category_header_background_type' => $this->category_header_background_type ?? '',
            'category_header_background_color' => $this->category_header_background_color ?? '',
            'category_header_background_image' => $this->category_header_background_image ?? '',
            'category_header_background_youtube_video' => $this->category_header_background_youtube_video ?? '',
            'items_count' => $this->items_count ?? '',
            'children_count' => $this->children_count ?? '',
        ];
    }
}
