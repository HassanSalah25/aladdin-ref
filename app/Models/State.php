<?php

namespace App\Models;

use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Laravelista\Comments\Commentable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class State extends Model
{

    use LogsActivity, HasTranslations;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'state_name',
        'state_abbr',
        'state_slug',
        'state_country_abbr',
        'state_image',
        'state_image_tiny',
        'state_image_small',
        'state_image_medium',
        'state_image_blur',
        'meta_description', 'meta_title', 'meta_keywords', 'canonical', 'alt_image'
    ];

    public $translatable = ['meta_title', 'meta_description', 'meta_keywords',
        'alt_image','canonical'];


    /**
     * Get the cities for the state.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }

    /**
     * Get the country that owns the state.
     */
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    /**
     * Get the items for the state.
     */
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }


    public function getItemIdsByStateId($state_id = null)
    {
        $item_ids = array();

        if($state_id)
        {
            $item_ids = DB::table('items')
                ->where('state_id', $state_id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }else{
            $item_ids = DB::table('items')
                ->where('state_id', $this->id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }
        return $item_ids;
    }

    public function deleteState()
    {
        // #1 - delete all items which in this state
        $items = $this->items()->get();
        foreach($items as $items_key => $item)
        {
            $item->deleteItem();
        }

        // #2 - delete all cities of this state
        $this->cities()->delete();

        // #3 - delete the state record
        $this->delete();
    }
    public function deleteStateFeatureImage()
    {
        if(!empty($this->state_image))
        {
            if(Storage::disk('public')->exists('state/' . $this->state_image)){
                Storage::disk('public')->delete('state/' . $this->state_image);
            }

            $this->state_image = null;
        }
        if(!empty($this->state_image_medium))
        {
            if(Storage::disk('public')->exists('state/' . $this->state_image_medium)){
                Storage::disk('public')->delete('state/' . $this->state_image_medium);
            }

            $this->state_image_medium = null;
        }
        if(!empty($this->state_image_small))
        {
            if(Storage::disk('public')->exists('state/' . $this->state_image_small)){
                Storage::disk('public')->delete('state/' . $this->state_image_small);
            }

            $this->state_image_small = null;
        }
        if(!empty($this->state_image_tiny))
        {
            if(Storage::disk('public')->exists('state/' . $this->state_image_tiny)){
                Storage::disk('public')->delete('state/' . $this->state_image_tiny);
            }

            $this->state_image_tiny = null;
        }
        if(!empty($this->state_image_blur))
        {
            if(Storage::disk('public')->exists('state/' . $this->state_image_blur)){
                Storage::disk('public')->delete('state/' . $this->state_image_blur);
            }

            $this->state_image_blur = null;
        }

        $this->save();
    }

    public function advertisement()
    {
        return $this->morphMany(Advertisement::class, 'advertisementable');
    }

    public function getActivitylogOptions(): LogOptions
    {
        // TODO: Implement getActivitylogOptions() method.
        return LogOptions::defaults()
            ->logFillable();
    }


}
