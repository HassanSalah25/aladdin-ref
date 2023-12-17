<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use LogsActivity, HasTranslations;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_id', 'city_name', 'city_state', 'city_slug', 'city_lat', 'city_lng',
        'meta_description', 'meta_title', 'meta_keywords', 'canonical', 'alt_image'
    ];
    public $translatable = ['meta_title', 'meta_description', 'meta_keywords',
        'alt_image','canonical'];

    /**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    /**
     * Get the items for the city.
     */
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function deleteCity()
    {
        // #1 - delete all items which in this state
        $items = $this->items()->get();
        foreach($items as $items_key => $item)
        {
            $item->deleteItem();
        }

        // #2 - delete the city record
        $this->delete();
    }

    public function getItemIdsByCityId($city_id = null)
    {
        $item_ids = array();

        if($city_id)
        {
            $item_ids = DB::table('items')
                ->where('city_id', $city_id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }else{
            $item_ids = DB::table('items')
                ->where('city_id', $this->id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }
        return $item_ids;
    }

    public function getActivitylogOptions(): LogOptions
    {
        // TODO: Implement getActivitylogOptions() method.
        return LogOptions::defaults()
            ->logFillable();
    }


}
