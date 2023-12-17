<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    const TYPE_CHAR = 1;
    const TYPE_AVAILABLE = 2;
    const TYPE_COUNT = 3;
    const TYPE_STATEMENT = 4;

    protected $fillable = ['name', 'name_ar', 'type'];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'plan_features');
    }

    public function getType()
    {
        if ($this->type == Feature::TYPE_CHAR)
            return __('feature.type-char');
        if ($this->type == Feature::TYPE_AVAILABLE)
            return __('feature.type-available');
        if ($this->type == Feature::TYPE_COUNT)
            return __('feature.type-count');
        if ($this->type == Feature::TYPE_STATEMENT)
            return __('feature.type-statement');
    }
}
