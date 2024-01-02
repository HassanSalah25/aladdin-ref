<?php

namespace App\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Category */
class BlogsCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
                "id"=> $this->id,
                "title"=> $this->title??'',
                "content_en"=> $this->content_en??'',
                "title_ar"=> $this->title_ar??'',
                "content_ar"=> $this->content_ar??'',
                "slug"=> $this->slug??'',
                "slug_ar"=> $this->slug_ar??'',
                "meta_title"=> $this->meta_title??'',
                "meta_title_ar"=> $this->meta_title_ar??'',
                "meta_description"=> $this->meta_description??'',
                "meta_description_ar"=> $this->meta_description_ar??'',
                "meta_keywords"=> $this->meta_keywords??'',
                "meta_keywords_ar"=> $this->meta_keywords_ar??'',
                "canonical"=> $this->canonical??'',
                "image"=> $this->image ? asset('storage/'.$this->image ?? ''):null,
                "blog_category_id"=> $this->blog_category_id??'',
                "alt_image"=> $this->alt_image??'',
                "alt_image_ar"=> $this->alt_image_ar??'',
        ];
    }
}
