<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemData extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'iteems';

    public function states_details()
    {
        return $this->belongsTo('App\Models\State', 'State','state_name');
    }

    public function categories_details()
    {
        return $this->belongsTo('App\Models\Category', 'Category','category_name');
    }

    public function cities_details()
    {
        return $this->belongsTo('App\Models\City', 'City','city_name');
    }
}
