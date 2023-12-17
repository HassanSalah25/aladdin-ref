<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
    class ItemsCollection extends JsonResource
    {
        public function toArray($request)
        {
            return [
                "id" => $this['id'] ?? '',
                "Category" => $this['Category'] ?? '',
                "Business Name" => $this['Business Name'] ?? '',
                "Address" => $this['Address'] ?? '',
                "City" => $this['City'] ?? '',
                "State" => $this['State'] ?? '',
                "Zip Code" => $this['Zip Code'] ?? '',
                "Country" => $this['Country'] ?? '',
                "Phone" => $this['Phone'] ?? '',
                "Fax" => $this['Fax'] ?? '',
                "Website" => $this['Website'] ?? '',
                "Email" => $this['Email'] ?? '',
                "Details Link" => $this['Details Link'] ?? '',
                "Maplink" => $this['Maplink'] ?? '',
                "created_at" => $this['created_at'] ?? '',
                "updated_at" => $this['updated_at'] ?? '',
                "description" => $this['description'] ?? '',
                "item_average_rating" => $this['item_average_rating'] ?? '',
                "item_lat" => $this['item_lat'] ?? '',
                "item_lng" => $this['item_lng'] ?? '',
                "state_image" => $this['state_image'] ?? '',
                "cat_icon" => $this['cat_icon'] ?? '',
                "Brand" => $this['Brand'] ?? '',
                "phone2" => $this['phone2'] ?? '',
                "phone3" => $this['phone3'] ?? '',
                "featured" => $this['featured'] ?? '',
                "slug" => $this['slug'] ?? '',
                "new_slug" => $this['new_slug'] ?? '',
                "canonical" => $this['canonical'] ?? '',
                "meta_title" => $this['meta_title'] ?? '',
                "meta_description" => $this['meta_description'] ?? '',
                "meta_keywords" => $this['meta_keywords'] ?? '',
                "alt_image" => $this['alt_image'] ?? '',
                "parent_category" => $this['parent_category'] ?? '',
                "city_replace" => $this['city_replace'] ?? '',
                "item_image" =>  $this['items_details'] ? url('/storage/item/'.$this['items_details']['item_image'] ?? '') : '',
                "item_image_medium" => $this['items_details'] ? url('/storage/item/'.$this['items_details']['item_image'] ?? '') : '',
                "item_image_small" => $this['items_details'] ? url('/storage/item/'.$this['items_details']['item_image_small'] ?? '') : '',
                "item_image_tiny" => $this['items_details'] ? url('/storage/item/'.$this['items_details']['item_image_tiny'] ?? '') : '',
                "item_image_blur" => $this['items_details'] ? url('/storage/item/'.$this['items_details']['item_image_blur'] ?? '') : '',
                "galary" => $this->items_details?->galleries ? GalleryCollection::collection($this->items_details->galleries): [],
                "items_details" => $this['items_details'?? ''] ? new ItemsDetailsCollection($this['items_details'?? '']) : ''
            ];
        }
    }
