<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    /**
     * advertisement_status
     */
    const AD_STATUS_ENABLE = 1;
    const AD_STATUS_DISABLE = 0;

    /**
     * advertisement_alignment
     */
    const AD_ALIGNMENT_LEFT = 1;
    const AD_ALIGNMENT_CENTER = 2;
    const AD_ALIGNMENT_RIGHT = 3;

    /**
     * advertisement_place indicate what type of pages to put the ad.
     */
    const AD_PLACE_LISTING_RESULTS_PAGES = 1;
    const AD_PLACE_LISTING_SEARCH_PAGE = 2;
    const AD_PLACE_BUSINESS_LISTING_PAGE = 3;
    const AD_PLACE_BLOG_POSTS_PAGES = 4;
    const AD_PLACE_BLOG_TOPIC_PAGES = 5;
    const AD_PLACE_BLOG_TAG_PAGES = 6;
    const AD_PLACE_SINGLE_POST_PAGE = 7;
    const AD_PLACE_LISTING_POPULAR_PAGE = 8;
    const AD_PLACE_HOME_PAGES = 1;
    /**
     * The advertisement_position indicate where to put the ad according the value of advertisement_place
     */
    const AD_POSITION_BEFORE_BREADCRUMB = 1;
    const AD_POSITION_AFTER_BREADCRUMB = 18;
    const AD_POSITION_BEFORE_CONTENT = 2;
    const AD_POSITION_AFTER_CONTENT = 3;
    const AD_POSITION_SIDEBAR_BEFORE_CONTENT = 4;
    const AD_POSITION_SIDEBAR_AFTER_CONTENT = 5;
    const AD_POSITION_BEFORE_GALLERY = 6;
    const AD_POSITION_BEFORE_DESCRIPTION = 7;
    const AD_POSITION_BEFORE_LOCATION = 8;
    const AD_POSITION_BEFORE_FEATURES = 9;
    const AD_POSITION_BEFORE_REVIEWS = 10;
    const AD_POSITION_BEFORE_COMMENTS = 11;
    const AD_POSITION_BEFORE_SHARE = 12;
    const AD_POSITION_AFTER_SHARE = 13;
    const AD_POSITION_BEFORE_FEATURE_IMAGE = 14;
    const AD_POSITION_BEFORE_TITLE = 15;
    const AD_POSITION_BEFORE_POST_CONTENT = 16;
    const AD_POSITION_AFTER_POST_CONTENT = 17;
    const AD_POSITION_SIDE_BEFORE_STATES = 20;
    const AD_POSITION_SIDE_AFTER_STATES = 21;
    const AD_POSITION_AFTER_STATES = 22;
    const AD_POSITION_AFTER_LISTING = 21;
    const AD_PLACE_STATE = 23;
    const AD_PLACE_CATEGORY = 24;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advertisements';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'advertisement_name',
        'advertisement_status',
        'advertisement_place',
        'advertisement_code',
        'advertisement_position',
        'advertisement_alignment',
        'advertisement_responsive',
        'advertisement_width',
        'advertisement_height',
        'ad_image_vertical',
        'ad_image_horizontal',
        'advertisementable_type',
        'advertisementable_id',
    ];

    public function advertisementable()
    {
        return $this->morphTo();
    }

    /**
     * @param int $advertisement_place
     * @param int $advertisement_position
     * @param int $advertisement_status
     * @return mixed
     */
    public function fetchAdvertisements( $advertisement_place , int $advertisement_position, int $advertisement_status)
    {
        $ads = Advertisement::where('advertisementable_id', $advertisement_place)
            ->where('advertisement_position', $advertisement_position)
            ->where('advertisement_status', $advertisement_status)
            ->orderBy('created_at')
            ->get();
        if($ads->count() <= 0)
            $ads = Advertisement::where('advertisementable_id', 23)
                ->where('advertisement_position', $advertisement_position)
                ->where('advertisement_status', $advertisement_status)
                ->orderBy('created_at')
                ->get();
        return $ads;
    }

    public function item()
    {
        return $this->belongsToMany(Item::class,'item_advertisement','ad_id','item_id');
    }
}
