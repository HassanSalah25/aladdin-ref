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
                'user_id' => $this->user_id ?? '',
                'locale' => $this->locale ?? '',
                'item_id' => $this->item_id ?? '',
                'category_id' => $this->category_id ?? '',
                'item_status' => $this->item_status ?? '',
                'item_featured' => $this->item_featured ?? '',
                'item_featured_by_admin' => $this->item_featured_by_admin ?? '',
                'item_title' => $this->item_title ?? '',
                'item_slug' => $this->item_slug ?? '',
                'item_description' => $this->item_description ?? '',
                'item_image' => asset('storage/' . $this->item_image) ?? '',
                'item_address' => $this->item_address ?? '',
                'item_address_hide' => $this->item_address_hide ?? '',
                'city_id' => $this->city_id ?? '',
                'state_id' => $this->state_id ?? '',
                'country_id' => $this->country_id ?? '',
                'item_postal_code' => $this->item_postal_code ?? '',
                'item_price' => $this->item_price ?? '',
                'item_lat' => $this->item_lat ?? '',
                'item_lng' => $this->item_lng ?? '',
                'item_phone' => $this->item_phone ?? '',
                'item_website' => $this->item_website ?? '',
                'item_social_facebook' => $this->item_social_facebook ?? '',
                'item_social_twitter' => $this->item_social_twitter ?? '',
                'item_social_linkedin' => $this->item_social_linkedin ?? '',
                'item_features_string' => $this->item_features_string ?? '',
                'item_image_medium' => asset('storage/' . $this->item_image_medium) ?? '',
                'item_image_small' => asset('storage/' . $this->item_image_small) ?? '',
                'item_image_tiny' => asset('storage/' . $this->item_image_tiny) ?? '',
                'item_categories_string' => $this->item_categories_string ?? '',
                'item_image_blur' => asset('storage/' . $this->item_image_blur) ?? '',
                'item_youtube_id' => $this->item_youtube_id ?? '',
                'item_location_str' => $this->item_location_str ?? '',
                'item_type' => $this->item_type ?? '',
                'item_hour_time_zone' => $this->item_hour_time_zone ?? '',
                'item_hour_show_hours' => $this->item_hour_show_hours ?? '',
                'item_social_whatsapp' => $this->item_social_whatsapp ?? '',
                'item_social_instagram' => $this->item_social_instagram ?? '',
                'item_social_email' => $this->item_social_email ?? '',
            ];
        }
    }
