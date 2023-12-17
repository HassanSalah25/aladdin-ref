<?php

namespace App\Models;

use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasTranslations, ReviewRateableTrait, LogsActivity;

    protected $fillable = ['title', 'content', 'image', 'canonical',
        'blog_slug', 'meta_title', 'meta_description', 'meta_keyword',
        'alt_image'];

    public $translatable = ['title', 'content', 'canonical',
        'blog_slug', 'meta_title', 'meta_description', 'meta_keyword',
        'alt_image'];


    public function getActivitylogOptions(): LogOptions
    {
        // TODO: Implement getActivitylogOptions() method.
        return LogOptions::defaults()
            ->logFillable();
    }
}
