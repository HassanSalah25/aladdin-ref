<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';
    protected $guarded = [];
    public $timestamps = false;
    public function blogs()
    {
        return $this->hasMany(Blog::class,'blog_category_id');
    }
    public function media(){
        return $this->hasOne(media::class,'id','image');
    }

    public function getImg(){
        return $this->media->file_name ?? '';
    }
}
