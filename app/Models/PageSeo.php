<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    use HasFactory;
    protected $table = 'pages_seo';
    protected $guarded = [];
}
