<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function blog()
    {
        return $this->belongsTo(Blog::class,'reviewrateable_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class,'reviewrateable_id');
    }
}
