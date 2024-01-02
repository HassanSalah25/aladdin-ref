<?php

namespace App\Models;

use App\Events\DecrementCategoryCountEvent;
use App\Events\DecrementItemCountEvent;
use App\Events\IncrementCategoryCountEvent;
use App\Events\IncrementItemCountEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use LogsActivity,HasTranslations;

//    use HasTranslations;
    const CATEGORIES_SORT_BY_NEWEST_CREATED = 1;
    const CATEGORIES_SORT_BY_OLDEST_CREATED = 2;
    const CATEGORIES_SORT_BY_NEWEST_UPDATED = 3;
    const CATEGORIES_SORT_BY_OLDEST_UPDATED = 4;
    const CATEGORIES_SORT_BY_CATEGORY_NAME_A_Z = 5;
    const CATEGORIES_SORT_BY_CATEGORY_NAME_Z_A = 6;
    const CATEGORIES_SORT_BY_MOST_RELEVANT = 7;

    const COUNT_PER_PAGE_10 = 10;
    const COUNT_PER_PAGE_25 = 25;
    const COUNT_PER_PAGE_50 = 50;
    const COUNT_PER_PAGE_100 = 100;
    const COUNT_PER_PAGE_250 = 250;
    const COUNT_PER_PAGE_500 = 500;
    const COUNT_PER_PAGE_1000 = 1000;

    const CATEGORY_THUMBNAIL_TYPE_ICON = 1;
    const CATEGORY_THUMBNAIL_TYPE_IMAGE = 2;

    const CATEGORY_HEADER_BACKGROUND_TYPE_INHERITED = 1;
    const CATEGORY_HEADER_BACKGROUND_TYPE_COLOR = 2;
    const CATEGORY_HEADER_BACKGROUND_TYPE_IMAGE = 3;
    const CATEGORY_HEADER_BACKGROUND_TYPE_VIDEO = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_parent_id',
        'category_icon',
        'category_parent_id',
        'category_description',
        'category_image',
        'category_image_app',
        'category_thumbnail_type',
        'category_header_background_type',
        'category_header_background_color',
        'category_header_background_image',
        'category_header_background_youtube_video',
        'category_en_id',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'alt_image',
        'items_count',
        'canonical',
        'children_count',
    ];
/*'meta_title', 'meta_description', 'meta_keywords',
'alt_image','canonical'*/
    public $translatable = [];


    /**
     * @return BelongsToMany
     */
    public function allItems()
    {
        return $this->belongsToMany('App\Models\Item', 'category_item')->withTimestamps();
    }

    public function items()
    {
        return $this->hasMany(Item::class,'category_id');
    }


    /**
     * Function to get the array of item ids based on the given array of category ids.
     *
     * @param array $category_ids
     * @return array
     */
    public function getItemIdsByCategoryIds($category_id = null)
    {
        $item_ids = array();

        if($category_id)
        {
            $item_ids = DB::table('items')
                ->where('category_id', $category_id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }else{
            $item_ids = DB::table('items')
                ->where('category_id', $this->id)
                ->distinct('id')
                ->pluck('id')
                ->toArray();
        }
        return $item_ids;
    }

    /**
     * @return BelongsToMany
     */
    public function allCustomFields()
    {
        return $this->belongsToMany('App\Models\CustomField', 'category_custom_field')->withTimestamps();
    }

    /**
     * Get the children categories
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany( 'App\Models\Category', 'category_parent_id', 'id' );
    }

    /**
     * Get the parent category
     * @return HasOne
     */
    public function parent()
    {
        return $this->hasOne( 'App\Models\Category', 'id', 'category_parent_id' );
    }

    public function allParents()
    {
        $all_parents = collect();
        $parent_category = $this;
        $parent_exist = true;

        while($parent_exist)
        {
            $parent_category = $parent_category->parent()->first();
            $parent_exist = empty($parent_category) ? false : true;

            if($parent_exist)
            {
                $all_parents->prepend($parent_category);
            }
        }

        return $all_parents;
    }

    /**
     * @param $category
     * @param $children_categories
     */
    public function allChildren($category, &$children_categories)
    {
        $children_categories->push($category);

        $sub_categories = $category->children()->orderBy('category_name')->get();

        if($sub_categories->count() > 0)
        {
            foreach($sub_categories as $key => $sub_category)
            {
                self::allChildren($sub_category, $children_categories);
            }
        }
    }

    public function getPrintableCategories()
    {
        $printable_array = array();

        $root_categories = Category::whereNull('category_parent_id')
            ->where('locale',app()->getLocale())
            ->orderBy('category_name')
            ->get();
        return $root_categories;
    }

    private function getChildrenCategories($category, $level_deep=0)
    {
        $dash_str = "";
        for($i=0; $i<$level_deep; $i++)
        {
            $dash_str .= "-";
        }
        if(!empty($dash_str))
        {
            $dash_str .= " ";
        }
        $children_categories_array = array(['category_id' => $category->id, 'category_name' => $dash_str . $category->category_name]);

        $children_categories = $category->children()->orderBy('category_name')->get();

        if($children_categories->count() > 0)
        {
            $level_deep += 1;

            foreach($children_categories as $key => $children_category)
            {
                $children_categories_array = array_merge($children_categories_array, self::getChildrenCategories($children_category, $level_deep));
            }
        }

        return $children_categories_array;
    }

    public function getPrintableCategoriesNoDash()
    {
        $printable_array = array();

        $root_categories = Category::where('category_parent_id', null)
            ->orderBy('category_name')
            ->get();

        foreach($root_categories as $key_1 => $root_category)
        {
            $printable_array = array_merge($printable_array, self::getChildrenCategoriesNoDash($root_category));
        }

        return $printable_array;
    }

    public function deleteCategoryImage()
    {
        if(!empty($this->category_image))
        {
            if(Storage::disk('public')->exists('category/' . $this->category_image)){
                Storage::disk('public')->delete('category/' . $this->category_image);
            }
            if(Storage::disk('public')->exists('category/' . $this->category_image_app)){
                Storage::disk('public')->delete('category/' . $this->category_image_app);
            }
            $this->category_image = null;
            $this->category_image_app = null;
        }

        $this->save();
    }

    public function deleteCategory()
    {
        if(!empty($this->category_image))
        {
            if(Storage::disk('public')->exists('category/' . $this->category_image)){
                Storage::disk('public')->delete('category/' . $this->category_image);
            }
        }

        if(!empty($this->category_header_background_image))
        {
            if(Storage::disk('public')->exists('category/' . $this->category_header_background_image)){
                Storage::disk('public')->delete('category/' . $this->category_header_background_image);
            }
        }

        $this->delete();
    }

    private function getChildrenCategoriesNoDash($category)
    {
        $children_categories_array = array(['category_id' => $category->id, 'category_name' => $category->category_name]);

        $children_categories = $category->children()->orderBy('category_name')->get();

        if($children_categories->count() > 0)
        {
            foreach($children_categories as $key => $children_category)
            {
                $children_categories_array = array_merge($children_categories_array, self::getChildrenCategoriesNoDash($children_category));
            }
        }

        return $children_categories_array;
    }

    public function getActivitylogOptions(): LogOptions
    {
        // TODO: Implement getActivitylogOptions() method.

        return LogOptions::defaults()
            ->logFillable();

    }

    public function advertisement()
    {
        return $this->morphMany(Advertisement::class, 'advertisementable');
    }




}
