<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @see \App\Models\Category */
class GalleryCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
            "item_image_gallery_name" => $this['item_image_gallery_name'] ? asset('storage/item/gallery/'.$this['item_image_gallery_name']) : '',
            "item_image_gallery_thumb_name" => $this['item_image_gallery_thumb_name'] ? asset('storage/item/gallery/'.$this['item_image_gallery_thumb_name']) : '',
        ];
    }
}
