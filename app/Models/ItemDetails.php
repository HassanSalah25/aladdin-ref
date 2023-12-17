<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetails extends Model
{
    protected $table = 'item_details';
    protected $guarded = [];
    public function items()
    {
        return $this->belongsTo('App\Models\Item', 'item_id');
    }

    /**
     * Get the gallery images for the item.
     */
    public function galleries()
    {
        return $this->hasMany('App\Models\ItemImageGallery','item_id');
    }


    const ITEM_SUBMITTED = 1;
    const ITEM_PUBLISHED = 2;
    const ITEM_SUSPENDED = 3;

    const ITEM_FEATURED = 1;
    const ITEM_NOT_FEATURED = 0;

    const ITEM_FEATURED_BY_ADMIN = 1;
    const ITEM_NOT_FEATURED_BY_ADMIN = 0;

    const ITEM_ADDR_HIDE = 1;
    const ITEM_ADDR_NOT_HIDE = 0;

    const ITEM_REVIEW_RECOMMEND_YES = 'Yes';
    const ITEM_REVIEW_RECOMMEND_NO = 'No';

    const ITEM_REVIEW_RATING_ONE = 1;
    const ITEM_REVIEW_RATING_TWO = 2;
    const ITEM_REVIEW_RATING_THREE = 3;
    const ITEM_REVIEW_RATING_FOUR = 4;
    const ITEM_REVIEW_RATING_FIVE = 5;

    const ITEM_REVIEW_APPROVED = 1;
    const ITEM_REVIEW_PENDING = 0;

    const ITEM_TOTAL_SHOW_CATEGORY = 4;
    const ITEM_TOTAL_SHOW_CATEGORY_HOMEPAGE = 2;

    const ITEM_RATING_SORT_BY_NEWEST = 1;
    const ITEM_RATING_SORT_BY_OLDEST = 2;
    const ITEM_RATING_SORT_BY_HIGHEST = 3;
    const ITEM_RATING_SORT_BY_LOWEST = 4;

    const ITEMS_SORT_BY_NEWEST_CREATED = 1;
    const ITEMS_SORT_BY_OLDEST_CREATED = 2;
    const ITEMS_SORT_BY_HIGHEST_RATING = 3;
    const ITEMS_SORT_BY_LOWEST_RATING = 4;
    const ITEMS_SORT_BY_NEWEST_UPDATED = 5;
    const ITEMS_SORT_BY_OLDEST_UPDATED = 6;
    const ITEMS_SORT_BY_NEARBY_FIRST = 7;
    const ITEMS_SORT_BY_MOST_RELEVANT = 8;

    const COUNT_PER_PAGE_10 = 10;
    const COUNT_PER_PAGE_25 = 25;
    const COUNT_PER_PAGE_50 = 50;
    const COUNT_PER_PAGE_100 = 100;
    const COUNT_PER_PAGE_250 = 250;
    const COUNT_PER_PAGE_500 = 500;
    const COUNT_PER_PAGE_1000 = 1000;

    const ITEM_TYPE_REGULAR = 1;
    const ITEM_TYPE_ONLINE = 2;

    const ITEM_NEARBY_SHOW_MAX = 4;
    const ITEM_SIMILAR_SHOW_MAX = 4;

    const ITEM_HOUR_SHOW = 1;
    const ITEM_HOUR_NOT_SHOW = 2;
}
