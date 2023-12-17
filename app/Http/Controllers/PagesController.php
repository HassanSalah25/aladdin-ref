<?php

namespace App\Http\Controllers;

use App\Mail\VerifiedEmail;
use App\Models\Advertisement;
use App\Models\Blog;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Item;
use App\Models\ItemHour;
use App\Models\ItemImageGallery;
use App\Models\ItemLead;
use App\Models\ItemSection;
use App\Models\Mail\Notification;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Product;
use App\Models\ProductImageGallery;
use App\Models\Setting;
use App\Models\State;
use App\Models\Subscription;
use App\Models\Theme;
use App\Models\User;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Spatie\OpeningHours\OpeningHours;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');

        /**
         * Start SEO
         */
//        SEOMeta::setTitle($settings->setting_site_seo_home_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
        SEOMeta::setTitle('تطبيق علاء الدين الموقع الرسمي مصر - دليل الاعمال بأكملها الان في هاتفك', false);
        SEOMeta::setDescription('تطبيق علاء الدين هو اكبر دليل هواتف للاعمال التجارية فهو دليل الشركات ودليل الصناعات وايضا دليل مصانع يشمل كل ما تريده في كافة التخصصات حمل التطبيق وشاهده من هنا الان');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword('تطبيق علاء الدين مصر، علاء الدين، دليل الأعمال في مصر، دليل الأعمال، الإدراج المجاني في دليل الأعمال في مصر، علاء الدين المحلية، الإدراجات التجارية، دليل تليفونات علاء الدين، دليل علاء الدين للأعمال، دليل علاء الدين لأرقام الهاتف، علاء الدين مصر، دليل علاء الدين بمصر، موقع علاء الدين مصر، دليل تليفونات مصر، دليل مصر، دليل الأعمال بمصر، موقع دليل الأعمال، دليل التليفونات التجارية، أرقام تليفونات مصر، دليل علاء الدين للتليفونات، إعلانات تجارية بمصر، أرقام هواتف مصر، دليل تليفونات مصر، محرك بحث محلي، إعلانات علاء الدين التجارية، موقع البحث المحلي الرسمي في مصر، دليل مصر المحلي، إعلانات مصر التجارية، علاء الدين للأعمال، علاء الدين على الإنترنت، هواتف علاء الدين مصر، علاء الدين المصرية، البحث في علاء الدين، علاء الدين العالمية، علاء الدين القاهرة، دليل مدينة القاهرة، القاهرة الكبرى، الإسكندرية، الساحل الشمالي، صعيد مصر، الصحراء، الدلتا، القنال');

        // OpenGraph
        OpenGraph::setTitle($settings->setting_site_seo_home_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
        OpenGraph::setDescription($settings->setting_site_seo_home_description);
        OpenGraph::setUrl(request()->fullUrl()                                                                          );
        if (empty($settings->setting_site_logo)) {
            OpenGraph::addImage(asset('favicon-96x96.ico'));
        } else {
            OpenGraph::addImage(Storage::disk('public')->url('setting/' . $settings->setting_site_logo));
        }

        // Twitter
        TwitterCard::setTitle($settings->setting_site_seo_home_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
        /**
         * End SEO
         */

        $subscription_obj = new Subscription();

        /**
         * first 6 categories order by total listings
         */
        $active_user_ids = $subscription_obj->getActiveUserIds();
        $categories = Category::withCount('allItems')
            ->where('category_parent_id', null)
            ->where('locale', app()->getLocale())
            ->orderBy('all_items_count', 'desc')
            ->take(8)->get();

        $recent_categories = Category::whereNotNull('category_parent_id')
            ->where('locale', app()->getLocale())
            ->inRandomOrder()->take(5)->get();

        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();

        $search_bar_categories = Category::orderBy('category_name')
            ->select('category_name', 'category_slug', 'category_icon')
            ->where("category_name", "مطاعم")
            ->orWhere("category_name", "دكاترة")
            ->orWhere("category_name", "مستلزمات طبية")
            ->orWhere("category_name", "احتياجات")
            ->get();

        /**
         * get first latest 6 paid listings
         */
        // paid listing
        $paid_items_query = Item::query()->where('locale', app()->getLocale());

        // get paid users id array
        $paid_user_ids = $subscription_obj->getPaidUserIds();

        $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
            ->where(function ($query) use ($site_prefer_country_id) {
                $query->where('items.country_id', $site_prefer_country_id)
                    ->orWhereNull('items.country_id');
            })
            ->where('items.item_featured', Item::ITEM_FEATURED)
            ->where(function ($query) use ($paid_user_ids) {

                $query->whereIn('items.user_id', $paid_user_ids)
                    ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
            });

        $paid_items_query->orderBy('items.created_at', 'DESC')->distinct('items.id');

//        $paid_items = $paid_items_query->with('state')
//            ->with('city')
//            ->with('user')
//            ->take(6)
//            ->get();
        $paid_items = collect([]);
        $paid_items = $paid_items->shuffle();

        if ($settings->setting_page_about_enable == Setting::ABOUT_PAGE_ENABLED) {
            $about = $settings->setting_page_about;
        } else {
            $about = false;
        }

        /**
         * get nearest 9 popular items by device lat and lng
         */
        if (!empty(session('user_device_location_lat', '')) && !empty(session('user_device_location_lng', ''))) {
            $latitude = session('user_device_location_lat', '');
            $longitude = session('user_device_location_lng', '');
        } else {
            $latitude = $settings->setting_site_location_lat;
            $longitude = $settings->setting_site_location_lng;
        }


        $popular_items = Item::where('locale', app()->getLocale())
            ->orderBy('item_featured', 'DESC')
            ->whereNotNull('item_image')
            ->get()->take(10);



//        $popular_items = $popular_items->shuffle();



        /**
         * testimonials
         */
//        $all_testimonials = Testimonial::latest('created_at')->get();


        // $all_states = Country::find($site_prefer_country_id)
        // ->states()->inRandomOrder()->take(4)->get();
        /*withCount(['items' => function ($query) use ($active_user_ids, $site_prefer_country_id) {
            $query->whereIn('items.user_id', $active_user_ids)
                ->where('items.item_status', Item::ITEM_PUBLISHED)
                ->where(function ($query) use ($site_prefer_country_id) {
                    $query->where('items.country_id', $site_prefer_country_id)
                        ->orWhereNull('items.country_id');
                });
        }])
            ->*/
        $all_states = State::where('locale', app()->getLocale())
            ->orderBy('id', 'asc')->take(5)->get();

        $search_cities = City::all();

        /**
         * get latest 3 blog posts
         */
        $recent_blog = Blog::orderByDesc('id')
            ->inRandomOrder()->take(4)->get();


        $ads_side_before_states = Advertisement::where('advertisementable_id', 'home')
            ->where('advertisement_position', Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT)
            ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
            ->get();

        $ads_side_after_states = Advertisement::where('advertisementable_id', 'home')
            ->where('advertisement_position', Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT)
            ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
            ->get();

        $ads_after_states = Advertisement::where('advertisementable_id', 'home')
            ->where('advertisement_position', Advertisement::AD_POSITION_BEFORE_CONTENT)
            ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
            ->get();

        $ads_after_lisitng = Advertisement::where('advertisementable_id', 'home')
            ->where('advertisement_position', Advertisement::AD_POSITION_AFTER_CONTENT)
            ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
            ->get();


        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */

        return response()->view(
            $theme_view_path . 'index',
            compact(
                'ads_side_before_states',
                'ads_side_after_states',
                'ads_after_states',
                'ads_after_lisitng',
                'search_bar_categories',
                'categories',
                'paid_items',
                'all_states',
                'search_cities',
                'popular_items',
                'recent_categories',
                'search_categories',
                'recent_blog',
//                'all_testimonials',
                'about',
                'site_prefer_country_id'
            )
        );
    }

    public function states()
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');
        $all_states = Country::find($site_prefer_country_id)
            ->states()
            ->orderBy('id', 'asc')
            ->where('states.locale', app()->getLocale())
            ->paginate(8);

        $subscription_obj = new Subscription();

        /**
         * first 6 categories order by total listings
         */
        $active_user_ids = $subscription_obj->getActiveUserIds();
        $categories = Category::withCount(['allItems' => function ($query) use ($active_user_ids, $site_prefer_country_id) {
            $query->whereIn('items.user_id', $active_user_ids)
                ->where('items.item_status', Item::ITEM_PUBLISHED)
                ->where(function ($query) use ($site_prefer_country_id) {
                    $query->where('items.country_id', $site_prefer_country_id)
                        ->orWhereNull('items.country_id');
                });
        }])
            ->where('category_parent_id', null)
            ->orderBy('all_items_count', 'desc')->take(6)->get();
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        return response()->view(
            $theme_view_path . 'states',
            compact('categories', 'all_states', 'search_categories', 'site_prefer_country_id')
        );
    }

    public function cities(Request $request, $state_slug)
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');
        $state = State::where('state_slug', $state_slug)->first();
        $all_cities = $state->cities()->paginate(10);

        /**
         * first 6 categories order by total listings
         */
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();

        $categories = Category::orderBy('category_name')
            ->whereNotNull('category_parent_id')
            ->where('locale', app()->getLocale())
            ->get();


        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();


        return response()->view(
            $theme_view_path . 'cities',
            compact('all_cities',
                'state', 'categories', 'search_categories', 'site_prefer_country_id')
        );
    }

    public function search(Request $request)
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.search', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */
        /**
         * Start filter
         */
        $search_query = empty($request->search_query) ? null : $request->search_query;
//        $search_values = !empty($search_query) ? preg_split('/\s+/', $search_query, -1, PREG_SPLIT_NO_EMPTY) : array();
        $search_values = !empty($search_query) ? $search_query : null;
        $item_ids = [];
        // categories
        $filter_categories = empty($request->filter_categories) ? array() : $request->filter_categories;

        $category_obj = new Category();
        if ($category_obj->getItemIdsByCategoryIds($filter_categories))
            $item_ids += $category_obj->getItemIdsByCategoryIds($filter_categories);

        // state & city
        $filter_state = empty($request->filter_state) ? null : $request->filter_state;
        $filter_city = empty($request->filter_city) ? null : $request->filter_city;
        $filter_city_state = empty($request->search_city_state) ? null : $request->search_city_state;
        $search_category = $request->search_category == 'all' ? null : $request->search_category;
        $search_category_2 = $request->search_category_2 == 'all' ? null : $request->search_category_2;
        $search_city = $request->search_city == 'all' ? null : $request->search_city;
        $search_city_2 = $request->search_city_2 == 'all' ? null : $request->search_city_2;
        $search_state = empty($request->search_state) ? null : $request->search_state;

        if ($search_category) {
            $category = Category::find($search_category);
            if ($category->getItemIdsByCategoryIds())
                $item_ids += $category->getItemIdsByCategoryIds();
        }
        if ($search_category_2) {
            $category2 = Category::find($search_category_2);
            if ($category2?->getItemIdsByCategoryIds())
                $item_ids += $category2->getItemIdsByCategoryIds();
        }

        /**
         * End filter
         */

        /**
         * Start paid search
         */
        $paid_items_query = Item::query()->where('locale', app()->getLocale());

        // get paid users id array
        $subscription_obj = new Subscription();
        $paid_user_ids = $subscription_obj->getPaidUserIds();

        if ($search_category) {
            $paid_items_query->whereIn('id', $item_ids);
        }

        /* if (is_array($search_values) && count($search_values) > 0) {
             $paid_items_query->where(function ($query) use ($search_values) {
                 foreach ($search_values as $search_values_key => $search_value) {
                     $query->where('items.item_title', 'LIKE', "%" . $search_value . "%");
 //                        ->orWhere('items.item_location_str', 'LIKE', "%" . $search_value . "%")
 //                        ->orWhere('items.item_categories_string', 'LIKE', "%" . $search_value . "%")
 //                        ->orWhere('items.item_description', 'LIKE', "%" . $search_value . "%")
 //                        ->orWhere('items.item_features_string', 'LIKE', "%" . $search_value . "%");
                 }
             });
         }*/
        $paid_items_query->select('*')
            ->selectRaw("LOCATE('$search_values', item_title) as position")
            ->where('items.item_title', 'like', '%' . $search_values . '%')
            ->orderBy('position')->orderBy('item_title');
        $active_user_ids = $subscription_obj->getActiveUserIds();
        $categories = Category::withCount(['allItems' => function ($query) use ($active_user_ids, $site_prefer_country_id) {
            $query->whereIn('items.user_id', $active_user_ids)
                ->where('items.item_status', Item::ITEM_PUBLISHED)
                ->where(function ($query) use ($site_prefer_country_id) {
                    $query->where('items.country_id', $site_prefer_country_id)
                        ->orWhereNull('items.country_id');
                });
        }])
            ->where('locale', app()->getLocale())
            ->where('category_parent_id', null)
            ->orderBy('all_items_count', 'desc')->take(5)->get();

        $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
            ->where(function ($query) use ($site_prefer_country_id) {
                $query->where('items.country_id', $site_prefer_country_id)
                    ->orWhereNull('items.country_id');
            })
            ->where('items.item_featured', Item::ITEM_FEATURED)
            ->where(function ($query) use ($paid_user_ids) {

                $query->whereIn('items.user_id', $paid_user_ids)
                    ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
            });
        // filter paid listings state
        if (!empty($filter_city_state)) {
            $state = State::where('state_name', $filter_city_state)->first();
            $city = City::where('city_name', $filter_city_state)->first();
            if ($state)
                $paid_items_query->where('items.state_id', $state->id);
            if ($city)
                $paid_items_query->where('items.city_id', $city->id);
        }

        // filter paid listings state
        if (!empty($filter_state)) {
            $paid_items_query->where('items.state_id', $filter_state);
        }

        // filter paid listings city
        if (!empty($filter_city)) {
            $paid_items_query->where('items.city_id', $filter_city);
        }

        /*if ($search_city) {
            $city = City::where('city_name', $search_city)->first();
            $paid_items_query->where('items.city_id', $city->id);
        }
        if ($search_state) {
            $state = State::where('state_name', $search_state)->first();
            $paid_items_query->where('items.state_id', $state->id);
        }*/

        $paid_items_query->orderBy('items.created_at', 'DESC')
            ->distinct('items.id')
            ->with('state')
            ->with('city');


        $total_paid_items = $paid_items_query->count();
        /**
         * End paid search
         */

        /**
         * Start free search
         */
        $free_items_query = Item::query()->where('locale', app()->getLocale());

        // get free users id array
        //$free_user_ids = $subscription_obj->getFreeUserIds();
        $free_user_ids = $subscription_obj->getActiveUserIds();
        if ($search_category)
            $free_items_query->whereIn('id', $item_ids);


        /*  if (is_array($search_values) && count($search_values) > 0) {
              $free_items_query->where(function ($query) use ($search_values) {
                  foreach ($search_values as $search_values_key => $search_value) {
                      $query->where('items.item_title', 'LIKE', '%' .  $search_value . "%");
  //                        ->orWhere('items.item_location_str', 'LIKE', "%" . $search_value . "%")
  //                        ->orWhere('items.item_categories_string', 'LIKE', "%" . $search_value . "%")
  //                        ->orWhere('items.item_description', 'LIKE', "%" . $search_value . "%")
  //                        ->orWhere('items.item_features_string', 'LIKE', "%" . $search_value . "%");
                  }
              });
  //            $free_items_query->orderByRaw('
  //        CASE
  //            ' . implode(' ', array_map(function ($value, $index) {
  //                    return "WHEN item_title LIKE ? THEN $index";
  //                }, $search_values, range(1, count($search_values)))) . '
  //            ELSE ' . (count($search_values) + 1) . '
  //        END', ...array_map(function ($value) {
  //                return '%' . $value . '%';
  //            }, $search_values));

          }*/
        $free_items_query->select('*')
            ->selectRaw("LOCATE('$search_values', item_title) as position")
            ->where('items.item_title', 'like', '%' . $search_values . '%')
            ->orderBy('position')->orderBy('item_title');
//        dd($free_items_query->limit(5)->get());
        $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
            ->where(function ($query) use ($site_prefer_country_id) {
                $query->where('items.country_id', $site_prefer_country_id)
                    ->orWhereNull('items.country_id');
            })
//             ->orderBy('items.item_featured', 'DESC')
            // ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
            ->where(function ($q) use ($free_user_ids) {
                $q->whereIn('items.user_id', $free_user_ids)
                    ->orWhereNull('items.user_id');
            });
        if (!empty($filter_city_state)) {
            $state = State::where('state_name', $filter_city_state)->first();
            $city = City::where('city_name', $filter_city_state)->first();
            if ($state)
                $free_items_query->where('items.state_id', $state->id);
            if ($city)
                $free_items_query->where('items.city_id', $city->id);

        }

        // filter free listings state
        if (!empty($filter_state)) {
            $free_items_query->where('items.state_id', $filter_state);
        }

        // filter free listings city
        if (!empty($filter_city)) {
            $free_items_query->where('items.city_id', $filter_city);
        }

        if ($search_city) {
            $city = City::where('city_name', $search_city)->first();
            if ($city)
                $free_items_query->where('items.city_id', $city->id);
        }
        if ($search_city_2) {
            $city = City::where('city_name', $search_city_2)->first();
            if ($city)
                $free_items_query->where('items.city_id', $city->id);
        }
        if ($search_state) {
            $state = State::where('state_name', $search_state)->first();
            if ($state)
                $free_items_query->where('items.state_id', $state->id);
        }
        $cities = null;
        if(isset($state)){
            $cities = $state->cities;
        }
        if(isset($city)){
            $cities = $city->state->cities;
        }


        /**
         * Start filter sort by for free listing
         */

        $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;

        if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
        } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
            $free_items_query->orderBy('items.created_at', 'ASC');
        } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
            $free_items_query->orderBy('items.item_average_rating', 'DESC');
        } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
            $free_items_query->orderBy('items.item_average_rating', 'ASC');
        } /*elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
            $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                ->where('items.item_type', Item::ITEM_TYPE_REGULAR)
                ->orderBy('distance', 'ASC');
        }*/
        elseif ($filter_sort_by == 'بالقرب مني' || $filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
            if (!$this->getLatitude()) {
                \Session::flash('flash_message', __('Open Location Permission'));
                \Session::flash('flash_type', 'danger');
                return back();
            }
            $latitude = $this->getLatitude()[0];
            $longitude = $this->getLongitude()[0];
            $cities = [];
            $states = [];
            $placeSearchUrl = 'https://maps.googleapis.com/maps/api/place/textsearch/json';
            $geocodeUrl = 'https://maps.googleapis.com/maps/api/geocode/json';
            $apiKey = app('site_global_settings')->setting_site_map_google_api_key; // Replace with your Google API key
            $client = new Client();
            try {

                $response = $client->request('GET', $geocodeUrl, [
                    'query' => [
                        'latlng' => $latitude . ',' . $longitude,
                        'language' => 'ar',
                        'key' => $apiKey,
                    ],
                ]);

            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
            $statusCode = $response->getStatusCode();

            if ($statusCode == 200) {
                $data = json_decode($response->getBody(), true);

                if ($data['status'] == 'OK') {
                    $results = $data['results'];

                    if (!empty($results[0]['address_components'])) {
                        $addressComponents = $results[0]['address_components'];

                        $city = '';
                        $state = '';
                        $country = '';
                        foreach ($addressComponents as $component) {
                            if (in_array('administrative_area_level_2', $component['types'])) {
                                $city = $component['long_name'];
                                array_push($cities, $city);
                                $response2 = $client->request('GET', $placeSearchUrl, [
                                    'query' => [
                                        'query' => $city,
                                        'key' => $apiKey,
                                    ],
                                ]);
                                $statusCode = $response->getStatusCode();
                                if ($statusCode == 200) {
                                    $data = json_decode($response->getBody(), true);
                                    if ($data['status'] == 'OK') {
                                        $results = $data['results'];
                                        foreach ($results as $result) {

                                            $addressComponents = $result['address_components'];
                                            foreach ($addressComponents as $component) {
                                                if (in_array('locality', $component['types'])) {
                                                    $city = $component['long_name'];
                                                    array_push($cities, $city);
                                                }
                                            }
                                        }

                                    }
                                }


                            } elseif (in_array('administrative_area_level_1', $component['types'])) {
                                $state = $component['long_name'];
                                array_push($states, $state);
                            } elseif (in_array('country', $component['types'])) {
                                $country = $component['long_name'];
                            }
                        }
                        foreach ($cities as $key => $city) {
                            $cities[$key] = str_replace('‎', "", $cities[$key]);
                            foreach (explode(' ', $cities[$key]) as $key)
                                array_push($cities, $key);
                        }
                        foreach ($states as $key => $state) {
                            $states[$key] = str_replace('‎', "", $states[$key]);
                            foreach (explode(' ', $states[$key]) as $key) {
                                $key = substr($key, 0, -1);
                                array_push($states, $key);
                            }
                        }
                        $free_items_query->whereHas('city', function ($q) use ($cities) {
                            $q->whereIn('city_name', $cities);
                        })->get();
                    } else {
                        return response()->json(['error' => 'Address not found'], 404);
                    }
                } else {
                    return response()->json(['error' => 'Geocoder failed due to: ' . $data['status']], 400);
                }
            } else {
                return response()->json(['error' => 'Geocoder request failed with status code: ' . $statusCode], 400);
            }

        }
        /**
         * End filter sort by for free listing
         */
        if(!$search_values && request()->routeIs('page.popular'))
            $free_items_query->orderBy('item_featured', 'DESC')
                ->whereNotNull('item_image');
        $free_items_query->distinct('items.id')
            ->with('state')
            ->with('city');



        $total_free_items = $free_items_query->count();
        /**
         * End free search
         */

        $querystringArray = [
            'search_query' => $search_query,
            'filter_categories' => $filter_categories,
            'filter_sort_by' => $filter_sort_by,
            'filter_state' => $filter_state,
            'filter_city' => $filter_city,
        ];

        if ($total_free_items == 0 || $total_paid_items == 0) {
            $paid_items = $paid_items_query->paginate(10);
            $free_items = $free_items_query->paginate(10);

            if ($total_free_items == 0) {
                $pagination = $paid_items->appends($querystringArray);
            }
            if ($total_paid_items == 0) {
                $pagination = $free_items->appends($querystringArray);
            }
        } else {
            $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);

            $paid_items_per_page = ceil($total_paid_items / $num_of_pages) > 4 ? 4 : ceil($total_paid_items / $num_of_pages);

            $free_items_per_page = 10 - $paid_items_per_page;

            $paid_items = $paid_items_query->paginate($paid_items_per_page);
            $free_items = $free_items_query->paginate($free_items_per_page);

            if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                $pagination = $paid_items->appends($querystringArray);
            } else {
                $pagination = $free_items->appends($querystringArray);
            }
        }

        /**
         * Start sorting the results by relevance
         */
        $props = [
            'item_title',
            'item_location_str',
            'item_categories_string',
            'item_description',
            'item_features_string',
        ];

        $paid_items = $paid_items->sortByDesc(function ($paid_collection, $paid_collection_key) use ($search_values, $props) {

            // The bigger the weight, the higher the record
            $weight = 0;
            // Iterate through search terms
            if($search_values)
                foreach ($search_values as $search_values_key => $search_value) {
                    // Iterate through $props
                    foreach ($props as $prop) {
                        if (stripos($paid_collection->$prop, $search_value) !== false) {
                            $weight += 1; // Increase weight if the search term is found
                        }
                    }
                }
            return $weight;
        });


        /*  $free_items = $free_items->sortByDesc(function ($free_collection, $free_collection_key) use ($search_values, $props) {

              // The bigger the weight, the higher the record
              $weight = 0;
              // Iterate through search terms
              foreach ($search_values as $search_values_key => $search_value) {
                  // Iterate through $props
                  foreach ($props as $prop) {
                      if (stripos($free_collection->$prop, $search_value) !== false) {
                          $weight += 1; // Increase weight if the search term is found
                      }
                  }
              }
              return $weight;
          });*/
        /**
         * End sorting the results by relevance
         */

        /**
         * Start fetch ads blocks
         */
        if(!$search_values && request()->routeIs('page.popular'))
        {
            $ads_before_content = Advertisement::where('advertisementable_id', Advertisement::AD_PLACE_LISTING_POPULAR_PAGE)
                ->where('advertisement_position', Advertisement::AD_POSITION_BEFORE_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
                ->get();
            $ads_after_content = Advertisement::where('advertisementable_id', Advertisement::AD_PLACE_LISTING_POPULAR_PAGE)
                ->where('advertisement_position', Advertisement::AD_POSITION_AFTER_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
                ->get();
        }
        else{
            $ads_before_content = Advertisement::where('advertisementable_id', Advertisement::AD_PLACE_LISTING_SEARCH_PAGE)
                ->where('advertisement_position', Advertisement::AD_POSITION_BEFORE_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
                ->get();
            $ads_after_content = Advertisement::where('advertisementable_id', Advertisement::AD_PLACE_LISTING_SEARCH_PAGE)
                ->where('advertisement_position', Advertisement::AD_POSITION_AFTER_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE)
                ->get();
        }

        /**
         * End fetch ads blocks
         */

        /**
         * Start initial filter
         */
        $all_printable_categories = $category_obj->getPrintableCategoriesNoDash();

        $all_states = Country::find($site_prefer_country_id)
            ->states()
            ->where('locale', app()->getLocale())->orderBy('state_name')->get();

        $all_cities = collect([]);
        if (!empty($filter_state)) {
            $state = State::find($filter_state);
            $all_cities = $state->cities()->orderBy('city_name')->get();
        }

        $total_results = $total_paid_items + $total_free_items;
        /**
         * End initial filter
         */

        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();


        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */
        // echo "<pre>";
        // var_dump($free_items);exit();
        return response()->view(
            $theme_view_path . 'search',
            compact(
                'ads_before_content',
                'ads_after_content',
                'search_query',
                'filter_categories',
                'filter_state',
                'filter_city',
                'filter_sort_by',
                'paid_items',
                'free_items',
                'pagination',
                'all_printable_categories',
                'all_states',
                'all_cities',
                'cities',
                'total_results',
                'search_categories',
                'categories',
            )
        );
    }

    public function branches(Request $request, User $user)
    {
        $free_items = $user->items()->where('item_status', Item::ITEM_PUBLISHED)->paginate(10);


        $settings = app('site_global_settings');
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();

        return response()->view(
            $theme_view_path . 'branches',
            compact('free_items')
        );
    }


    public function about()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.about', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();
        if ($settings->setting_page_about_enable == Setting::ABOUT_PAGE_ENABLED) {
            $about = $settings->setting_page_about;

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */
            return response()->view(
                $theme_view_path . 'about',
                compact('about', 'search_categories')
            );
        } else {
            return redirect()->route('page.home');
        }
    }

    public function contact()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.contact', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $all_faq = Faq::orderBy('faqs_order')->get();

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */

        /**
         * Start initial Google reCAPTCHA version 2
         */
        if ($settings->setting_site_recaptcha_contact_enable == Setting::SITE_RECAPTCHA_CONTACT_ENABLE) {
            config_re_captcha($settings->setting_site_recaptcha_site_key, $settings->setting_site_recaptcha_secret_key);
        }
        /**
         * End initial Google reCAPTCHA version 2
         */
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();
        return response()->view(
            $theme_view_path . 'contact',
            compact('all_faq', 'search_categories')
        );
    }

    public function doContact(Request $request)
    {
        $settings = app('site_global_settings');

        $validation_array = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ];

        // Start Google reCAPTCHA version 2
        if ($settings->setting_site_recaptcha_contact_enable == Setting::SITE_RECAPTCHA_CONTACT_ENABLE) {
            config_re_captcha($settings->setting_site_recaptcha_site_key, $settings->setting_site_recaptcha_secret_key);

            $validation_array = [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|max:255',
                'message' => 'required',
                // 'g-recaptcha-response' => 'recaptcha',
            ];
        }
        // End Google reCAPTCHA version 2

        $request->validate($validation_array);

        /**
         * Start initial SMTP settings
         */
        if ($settings->settings_site_smtp_enabled == Setting::SITE_SMTP_ENABLED) {
            // config SMTP
            config_smtp(
                $settings->settings_site_smtp_sender_name,
                $settings->settings_site_smtp_sender_email,
                $settings->settings_site_smtp_host,
                $settings->settings_site_smtp_port,
                $settings->settings_site_smtp_encryption,
                $settings->settings_site_smtp_username,
                $settings->settings_site_smtp_password
            );
        }
        /**
         * End initial SMTP settings
         */

        if (!empty($settings->setting_site_name)) {
            // set up APP_NAME
            config([
                'app.name' => $settings->setting_site_name,
            ]);
        }

        // send an email notification to admin
        $email_admin = User::getAdmin();
        $email_subject = __('email.contact.subject');
        $email_notify_message = [
            __('email.contact.body.body-1', ['first_name' => $request->first_name, 'last_name' => $request->last_name]),
            __('email.contact.body.body-2', ['subject' => $request->subject]),
            __('email.contact.body.body-3', ['first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email]),
            __('email.contact.body.body-4'),
            $request->message,
        ];

        try {
            // to admin
            Mail::to($email_admin)->send(
                new Notification(
                    $email_subject,
                    $email_admin->name,
                    null,
                    $email_notify_message
                )
            );

            \Session::flash('flash_message', __('alert.message-send'));
            \Session::flash('flash_type', 'success');
        } catch (\Exception $e) {
            Log::error($e->getMessage() . "\n" . $e->getTraceAsString());

            \Session::flash('flash_message', __('theme_alaadin.email.alert.sending-problem'));
            \Session::flash('flash_type', 'danger');
        }

        return redirect()->route('page.contact');
    }

    public function categories(Request $request)
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.categories', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */
        $char = $request->char ?? null;
        $search_keyword = $request->search_keyword ?? null;


        /**
         * first 6 categories order by total listings
         */

        $categories = Category::when($char, function ($query) use ($char) {
            // make sure `name` field is added index
            return $query->where('category_name', 'like', "{$char}%");
        })->when($search_keyword, function ($query) use ($search_keyword) {
            // make sure `name` field is added index
            return $query->where('category_name', 'like', "%{$search_keyword}%");
        })
            ->orderBy('category_name', 'asc')
            ->whereNull('category_parent_id')
            ->where('locale', app()->getLocale())->paginate(20);


        // echo "<pre>";var_dump($categories);exit;
        /**
         * Start filter for paid listing
         */
        $index = Category::where('locale', app()->getLocale())
            ->selectRaw('substr(category_name,1,1) as letter')
            ->distinct()
            ->orderBy('letter')
            ->get()
            ->pluck('letter')
            ->toArray();
        // $index = Category::select('upper(left(category_name,1) as firstLetter')->distinct('firstLetter')->get();


        /**
         * Start fetch ads blocks
         */
        $advertisement = new Advertisement();
        $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_AFTER_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );
        /**
         * End fetch ads blocks
         */


        /**
         * Start initial filter
         */
        // $all_printable_categories = $category_obj->getPrintableCategoriesNoDash();

        /**
         * End initial filter
         */

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();

        return response()->view(
            $theme_view_path . 'categories',
            compact(
                'categories',
                // 'pagination',
                'ads_before_breadcrumb',
                'ads_after_breadcrumb',
                'ads_before_content',
                'ads_after_content',
                'ads_before_sidebar_content',
                'ads_after_sidebar_content',
                // 'filter_sort_by',
                // 'all_printable_categories',
                'index',
                'search_categories',
                'site_prefer_country_id',
            // 'filter_state',
            // 'filter_city',
            // 'all_cities',
            // 'total_results'
            )
        );
    }

    public function sub_categories(Request $request, $category_slug)
    {
        $settings = app('site_global_settings');
        $site_prefer_country_id = app('site_prefer_country_id');
        $category = Category::where('category_slug', $category_slug)->first();
        /**
         * Start SEO
         */

        SEOMeta::setTitle($category->meta_title, false);
        SEOMeta::setTitleDefault('');
        SEOMeta::setDescription($category->meta_description);
        SEOMeta::setCanonical($category->canonical ?? request()->fullUrl()                                                                          );

        SEOMeta::addKeyword($category->meta_keywords);
        /**
         * End SEO
         */
        $char = $request->char ?? null;
        $search_keyword = $request->search_keyword ?? null;


        $subscription_obj = new Subscription();

        /**
         * first 6 categories order by total listings
         */
        $active_user_ids = $subscription_obj->getActiveUserIds();
        /*  ->withCount(['allItems' => function ($query) use ($active_user_ids, $site_prefer_country_id) {
          $query->whereIn('items.user_id', $active_user_ids)
              ->where('items.item_status', Item::ITEM_PUBLISHED)
              ->where(function ($query) use ($site_prefer_country_id) {
                  $query->where('items.country_id', $site_prefer_country_id)
                      ->orWhereNull('items.country_id');
              });
      }])->withCount('items')->*/

        $categories = Category::where('category_parent_id', $category->id)
            ->when($char, function ($query) use ($char) {
                // make sure `name` field is added index
                return $query->where('category_name', 'like', "{$char}%");
            })->when($search_keyword, function ($query) use ($search_keyword) {
                // make sure `name` field is added index
                return $query->where('category_name', 'like', "{$search_keyword}%");
            })
            ->orderBy('category_name', 'asc')
            ->where('locale', app()->getLocale())->paginate(20);

        // echo "<pre>";var_dump($categories);exit;
        /**
         * Start filter for paid listing
         */
        $index = Category::whereNotNull('category_en_id')
            ->selectRaw('substr(category_name,1,1) as letter')
            ->distinct()
            ->orderBy('letter')
            ->get()
            ->pluck('letter')
            ->toArray();
        // $index = Category::select('upper(left(category_name,1) as firstLetter')->distinct('firstLetter')->get();


        /**
         * Start fetch ads blocks
         */
        $advertisement = new Advertisement();

        $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_AFTER_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );
        /**
         * End fetch ads blocks
         */


        /**
         * Start initial filter
         */
        // $all_printable_categories = $category_obj->getPrintableCategoriesNoDash();

        /**
         * End initial filter
         */

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */
        $search_categories = Category::orderBy('category_name')
            ->whereNull('category_parent_id')
            ->select('category_name', 'id', 'category_image', 'category_icon')
            ->where('locale', app()->getLocale())
            ->get();

        return response()->view(
            $theme_view_path . 'sub_categories',
            compact(
                'categories',
                'category',
                // 'pagination',
                'ads_before_breadcrumb',
                'ads_after_breadcrumb',
                'ads_before_content',
                'ads_after_content',
                'ads_before_sidebar_content',
                'ads_after_sidebar_content',
                // 'filter_sort_by',
                // 'all_printable_categories',
                'index',
                'search_categories',
                'site_prefer_country_id',
            // 'filter_state',
            // 'filter_city',
            // 'all_cities',
            // 'total_results'
            )
        );
    }

    public function category(Request $request, string $parent_category_slug, string $category_slug)
    {
        $category = Category::where('category_slug', $category_slug)->first();

        if ($category) {
            $settings = app('site_global_settings');
            $site_prefer_country_id = app('site_prefer_country_id');

            /**
             * Start SEO
             */
            SEOMeta::setTitle($category->meta_title, false);
            SEOMeta::setTitleDefault('');
            SEOMeta::setDescription($category->meta_description);
            SEOMeta::setCanonical($category->canonical ?? request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($category->meta_keywords);
            /**
             * End SEO
             */

            /**
             * Get parent and children categories
             */
            $parent_categories = $category->allParents();

            // get one level down sub-categories
            $children_categories = $category->children()->orderBy('category_name')->get();

            // need to give a root category for each item in a category listing page
            $parent_category_id = $category->id;
            /**
             * Do listing query
             * 1. get paid listings and free listings.
             * 2. decide how many paid and free listings per page and total pages.
             * 3. decide the pagination to paid or free listings
             * 4. run query and render
             */

            // paid listing
            $paid_items_query = Item::query()->where('locale', app()->getLocale());

            /**
             * Start filter for paid listing
             */
            // categories

            $filter_categories = empty($request->filter_categories) ? array() : $request->filter_categories;
            $category_obj = new Category();

          /*  if ($parent_category_id)
                $item_ids = $category->getItemIdsByCategoryIds();
            if (count($filter_categories) > 0) {
                $item_ids = $category_obj->getItemIdsByCategoryIds($filter_categories);
            } else {
                // Get all child categories of this category
                $all_child_categories = collect();
                $all_child_categories_ids = array();
                $category->allChildren($category, $all_child_categories);
                foreach ($all_child_categories as $key => $all_child_category) {
                    $all_child_categories_ids[] = $all_child_category->id;
                }

                $item_ids = $category_obj->getItemIdsByCategoryIds($all_child_categories_ids);
            }*/
            // state & city
            $filter_state = empty($request->filter_state) ? null : $request->filter_state;
            $filter_city = empty($request->filter_city) ? null : $request->filter_city;
            /**
             * End filter for paid listing
             */

            // get paid users id array
            $subscription_obj = new Subscription();
            $paid_user_ids = $subscription_obj->getPaidUserIds();

            $paid_items_query->where('category_id', $category->id);

            $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where(function ($query) use ($site_prefer_country_id) {
                    $query->where('items.country_id', $site_prefer_country_id)
                        ->orWhereNull('items.country_id');
                })
                ->where('items.item_featured', Item::ITEM_FEATURED)
                ->where(function ($query) use ($paid_user_ids) {

                    $query->whereIn('items.user_id', $paid_user_ids)
                        ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
                });

            // filter paid listings state
            if (!empty($filter_state)) {
                $paid_items_query->where('items.state_id', $filter_state);
            }

            // filter paid listings city
            if (!empty($filter_city)) {
                $paid_items_query->where('items.city_id', $filter_city);
            }

            $paid_items_query->orderBy('items.created_at', 'DESC')
                ->distinct('items.id')
                ->with('state')
                ->with('city');

            $total_paid_items = $paid_items_query->count();

            // free listing
            $free_items_query = Item::query()->where('locale', app()->getLocale());

            // get free users id array
            //$free_user_ids = $subscription_obj->getFreeUserIds();
            $free_user_ids = $subscription_obj->getActiveUserIds();
            $free_items_query->where('category_id', $category->id);

            $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where(function ($query) use ($site_prefer_country_id) {
                    $query->where('items.country_id', $site_prefer_country_id)
                        ->orWhereNull('items.country_id');
                })
                // ->where('items.item_featured', Item::ITEM_NOT_FEATURED)
                // ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
                ->where(function ($query) use ($free_user_ids) {
                    $query->whereIn('items.user_id', $free_user_ids)
                        ->orWhereNull('items.user_id');
                });

            // filter free listings state
            if (!empty($filter_state)) {
                $free_items_query->where('items.state_id', $filter_state);
            }

            // filter free listings city
            if (!empty($filter_city)) {
                $free_items_query->where('items.city_id', $filter_city);
            }

            /**
             * Start filter sort by for free listing
             */
            $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;
            if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
                $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                    ->where('items.item_type', Item::ITEM_TYPE_REGULAR)
                    ->orderBy('distance', 'ASC');
            }
            /**
             * End filter sort by for free listing
             */

            $free_items_query->distinct('items.id')
                ->with('state')
                ->with('city');

            $querystringArray = [
                'filter_categories' => $filter_categories,
                'filter_sort_by' => $filter_sort_by,
                'filter_state' => $filter_state,
                'filter_city' => $filter_city,
            ];

            $paid_items = $paid_items_query->paginate(10);
            $free_items = $free_items_query->paginate(13);



            $pagination = $paid_items->appends($querystringArray);
           $pagination = $free_items->appends($querystringArray);

           /* if ($total_free_items == 0 || $total_paid_items == 0) {
                $paid_items = $paid_items_query->paginate(10);
                $free_items = $free_items_query->paginate(13);

                if ($total_free_items == 0) {
                    $pagination = $paid_items->appends($querystringArray);
                }
                if ($total_paid_items == 0) {
                    $pagination = $free_items->appends($querystringArray);
                }
            }
            else {
                $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);
                $paid_items_per_page = ceil($total_paid_items / $num_of_pages) < 4 ? 4 : ceil($total_paid_items / $num_of_pages);
                $free_items_per_page = 10 - $paid_items_per_page;

                $paid_items = $paid_items_query->paginate($paid_items_per_page);
                $free_items = $free_items_query->paginate($free_items_per_page);

                if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                    $pagination = $paid_items->appends($querystringArray);
                } else {
                    $pagination = $free_items->appends($querystringArray);
                }
            }*/
            /**
             * End do listing query
             */

            /**
             * Start fetch ads blocks
             */

            $advertisement = $category->advertisement;
            $ads_before_breadcrumb = $advertisement
                ->where('advertisement_position', Advertisement::AD_POSITION_BEFORE_BREADCRUMB)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);

            $ads_after_breadcrumb = $advertisement
                ->where('advertisement_position', Advertisement::AD_POSITION_AFTER_BREADCRUMB)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);


            $ads_before_content = $advertisement->where('advertisement_position', Advertisement::AD_POSITION_BEFORE_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);

            $ads_after_content = $advertisement->where('advertisement_position', Advertisement::AD_POSITION_AFTER_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);


            $ads_before_sidebar_content = $advertisement
                ->where('advertisement_position', Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);


            $ads_after_sidebar_content = $advertisement
                ->where('advertisement_position', Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT)
                ->where('advertisement_status', Advertisement::AD_STATUS_ENABLE);

            /**
             * End fetch ads blocks
             */


            /**
             * Start initial filter
             */
            $all_states = Country::find($site_prefer_country_id)
                ->states()
                ->where('locale', app()->getLocale())
                ->orderBy('state_name')->get();

            $all_cities = collect([]);
            if (!empty($filter_state)) {
                $state = State::find($filter_state);
                $all_cities = $state->cities()->orderBy('city_name')->get();
            }

            $total_results = $free_items->total();
            /**
             * End initial filter
             */

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            $search_categories = Category::orderBy('category_name')
                ->whereNull('category_parent_id')
                ->select('category_name', 'id', 'category_image', 'category_icon')
                ->where('locale', app()->getLocale())
                ->get();


            return response()->view(
                $theme_view_path . 'category',
                compact(
                    'category',
                    'paid_items',
                    'free_items',
                    'pagination',
                    'all_states',
                    'search_categories',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content',
                    'parent_categories',
                    'children_categories',
                    'parent_category_id',
                    'filter_sort_by',
                    'filter_categories',
                    'filter_state',
                    'filter_city',
                    'all_cities',
                    'total_results'
                )
            );
        } else {
            abort(404);
        }
    }

    public function categoryByState(Request $request, string $category_slug, string $state_slug)
    {
        $category = Category::where('category_slug', $category_slug)->first();
        $state = State::where('state_slug', $state_slug)->first();

        if ($category && $state) {
            $settings = app('site_global_settings');
            $site_prefer_country_id = app('site_prefer_country_id');

            /**
             * Start SEO
             */
            SEOMeta::setTitle($category->category_name . ' of ' . $state->state_name . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
            SEOMeta::setDescription('');
            SEOMeta::setCanonical(request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
            /**
             * End SEO
             */

            /**
             * Get parent and children categories
             */
            $parent_categories = $category->allParents();

            // get one level down sub-categories
            $children_categories = $category->children()->orderBy('category_name')->get();

            // need to give a root category for each item in a category listing page
            $parent_category_id = $category->id;

            // Get all child categories of this category
            $all_child_categories = collect();
            $all_child_categories_ids = array();
            $category->allChildren($category, $all_child_categories);
            foreach ($all_child_categories as $key => $all_child_category) {
                $all_child_categories_ids[] = $all_child_category->id;
            }

            /**
             * Do listing query
             * 1. get paid listings and free listings.
             * 2. decide how many paid and free listings per page and total pages.
             * 3. decide the pagination to paid or free listings
             * 4. run query and render
             */

            // paid listing
            $paid_items_query = Item::query()->where('locale', app()->getLocale());

            /**
             * Start filter for paid listing
             */
            // categories
            $filter_categories = empty($request->filter_categories) ? array() : $request->filter_categories;
            $category_obj = new Category();

            $all_item_ids = $category_obj->getItemIdsByCategoryIds($all_child_categories_ids);

            if (count($filter_categories) > 0) {
                $item_ids = $category_obj->getItemIdsByCategoryIds($filter_categories);
            } else {
                $item_ids = $all_item_ids;
            }

            // city
            $filter_city = empty($request->filter_city) ? null : $request->filter_city;
            /**
             * End filter for paid listing
             */

            // get paid users id array
            $subscription_obj = new Subscription();
            $paid_user_ids = $subscription_obj->getPaidUserIds();

            if (count($item_ids) > 0) {
                $paid_items_query->whereIn('id', $item_ids);
            }

            $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where('items.state_id', $state->id)
                ->where('items.item_featured', Item::ITEM_FEATURED)
                ->where(function ($query) use ($paid_user_ids) {

                    $query->whereIn('items.user_id', $paid_user_ids)
                        ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
                });

            // filter paid listings city
            if (!empty($filter_city)) {
                $paid_items_query->where('items.city_id', $filter_city);
            }

            $paid_items_query->orderBy('items.created_at', 'DESC')
                ->distinct('items.id')
                ->with('state')
                ->with('city');

            $total_paid_items = $paid_items_query->count();

            // free listing
            $free_items_query = Item::query()->where('locale', app()->getLocale());

            // get free users id array
            //$free_user_ids = $subscription_obj->getFreeUserIds();
            $free_user_ids = $subscription_obj->getActiveUserIds();

            if (count($item_ids) > 0) {
                $free_items_query->whereIn('id', $item_ids);
            }

            $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where('items.state_id', $state->id)
                ->where('items.item_featured', Item::ITEM_NOT_FEATURED)
                ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
                ->whereIn('items.user_id', $free_user_ids);

            // filter free listings city
            if (!empty($filter_city)) {
                $free_items_query->where('items.city_id', $filter_city);
            }

            /**
             * Start filter sort by for free listing
             */
            $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;
            if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
                $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                    ->orderBy('distance', 'ASC');
            }
            /**
             * End filter sort by for free listing
             */

            $free_items_query->distinct('items.id')
                ->with('state')
                ->with('city');

            $total_free_items = $free_items_query->count();

            $querystringArray = [
                'filter_categories' => $filter_categories,
                'filter_sort_by' => $filter_sort_by,
                'filter_city' => $filter_city,
            ];

            if ($total_free_items == 0 || $total_paid_items == 0) {
                $paid_items = $paid_items_query->paginate(10);
                $free_items = $free_items_query->paginate(10);

                if ($total_free_items == 0) {
                    $pagination = $paid_items->appends($querystringArray);
                }
                if ($total_paid_items == 0) {
                    $pagination = $free_items->appends($querystringArray);
                }
            } else {
                $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);
                $paid_items_per_page = ceil($total_paid_items / $num_of_pages) < 4 ? 4 : ceil($total_paid_items / $num_of_pages);
                $free_items_per_page = 10 - $paid_items_per_page;

                $paid_items = $paid_items_query->paginate($paid_items_per_page);
                $free_items = $free_items_query->paginate($free_items_per_page);

                if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                    $pagination = $paid_items->appends($querystringArray);
                } else {
                    $pagination = $free_items->appends($querystringArray);
                }
            }
            /**
             * End do listing query
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            $active_user_ids = $subscription_obj->getActiveUserIds();

            $item_select_city_query = Item::query()->where('locale', app()->getLocale());
            $item_select_city_query->select('items.city_id')
                ->whereIn('id', $all_item_ids)
                ->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where("items.state_id", $state->id)
                ->whereIn('items.user_id', $active_user_ids)
                ->groupBy('items.city_id')
                ->with('city');

            $all_item_cities = $item_select_city_query->get();

            /**
             * Start initial filter
             */
            $filter_all_cities = $state->cities()->orderBy('city_name')->get();
            $total_results = $total_paid_items + $total_free_items;
            /**
             * End initial filter
             */

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'category.state',
                compact(
                    'category',
                    'state',
                    'paid_items',
                    'free_items',
                    'pagination',
                    'all_item_cities',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content',
                    'parent_categories',
                    'children_categories',
                    'parent_category_id',
                    'filter_sort_by',
                    'filter_categories',
                    'filter_city',
                    'filter_all_cities',
                    'total_results'
                )
            );
        } else {
            abort(404);
        }
    }

    public function categoryByStateCity(Request $request, string $category_slug, string $state_slug, string $city_slug)
    {
        $category = Category::where('category_slug', $category_slug)->first();

        if ($category) {
            $state = State::where('state_slug', $state_slug)->first();

            if ($state) {
                $city = $state->cities()->where('city_slug', $city_slug)->first();

                if ($city) {
                    $settings = app('site_global_settings');
                    $site_prefer_country_id = app('site_prefer_country_id');

                    /**
                     * Start SEO
                     */
                    SEOMeta::setTitle($category->category_name . ' of ' . $state->state_name . ', ' . $city->city_name . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
                    SEOMeta::setDescription('');
                    SEOMeta::setCanonical(request()->fullUrl()                                                                          );
                    SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
                    /**
                     * End SEO
                     */

                    /**
                     * Get parent and children categories
                     */
                    $parent_categories = $category->allParents();

                    // get one level down sub-categories
                    $children_categories = $category->children()->orderBy('category_name')->get();

                    // Get all child categories of this category
                    $all_child_categories = collect();
                    $all_child_categories_ids = array();
                    $category->allChildren($category, $all_child_categories);
                    foreach ($all_child_categories as $key => $all_child_category) {
                        $all_child_categories_ids[] = $all_child_category->id;
                    }

                    // need to give a root category for each item in a category listing page
                    $parent_category_id = $category->id;

                    /**
                     * Do listing query
                     * 1. get paid listings and free listings.
                     * 2. decide how many paid and free listings per page and total pages.
                     * 3. decide the pagination to paid or free listings
                     * 4. run query and render
                     */

                    // paid listing
                    $paid_items_query = Item::query()->where('locale', app()->getLocale());

                    /**
                     * Start filter for paid listing
                     */
                    // categories
                    $filter_categories = empty($request->filter_categories) ? array() : $request->filter_categories;
                    $category_obj = new Category();

                    $all_item_ids = $category_obj->getItemIdsByCategoryIds($all_child_categories_ids);

                    if (count($filter_categories) > 0) {
                        $item_ids = $category_obj->getItemIdsByCategoryIds($filter_categories);
                    } else {
                        $item_ids = $all_item_ids;
                    }
                    /**
                     * End filter for paid listing
                     */

                    // get paid users id array
                    $subscription_obj = new Subscription();
                    $paid_user_ids = $subscription_obj->getPaidUserIds();

                    if (count($item_ids) > 0) {
                        $paid_items_query->whereIn('id', $item_ids);
                    }

                    $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                        ->where('items.country_id', $site_prefer_country_id)
                        ->where('items.state_id', $state->id)
                        ->where('items.city_id', $city->id)
                        ->where('items.item_featured', Item::ITEM_FEATURED)
                        ->where(function ($query) use ($paid_user_ids) {

                            $query->whereIn('items.user_id', $paid_user_ids)
                                ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
                        });

                    $paid_items_query->orderBy('items.created_at', 'DESC')
                        ->distinct('items.id')
                        ->with('state')
                        ->with('city');

                    $total_paid_items = $paid_items_query->count();

                    // free listing
                    $free_items_query = Item::query()->where('locale', app()->getLocale());

                    // get free users id array
                    //$free_user_ids = $subscription_obj->getFreeUserIds();
                    $free_user_ids = $subscription_obj->getActiveUserIds();

                    if (count($item_ids) > 0) {
                        $free_items_query->whereIn('id', $item_ids);
                    }

                    $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                        ->where('items.country_id', $site_prefer_country_id)
                        ->where('items.state_id', $state->id)
                        ->where('items.city_id', $city->id)
                        ->where('items.item_featured', Item::ITEM_NOT_FEATURED)
                        ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
                        ->whereIn('items.user_id', $free_user_ids);

                    /**
                     * Start filter sort by for free listing
                     */
                    $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;
                    if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
                        $free_items_query->orderBy('items.created_at', 'DESC');
                    } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
                        $free_items_query->orderBy('items.created_at', 'ASC');
                    } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
                        $free_items_query->orderBy('items.item_average_rating', 'DESC');
                    } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
                        $free_items_query->orderBy('items.item_average_rating', 'ASC');
                    } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
                        $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                            ->orderBy('distance', 'ASC');
                    }
                    /**
                     * End filter sort by for free listing
                     */

                    $free_items_query->distinct('items.id')
                        ->with('state')
                        ->with('city');

                    $total_free_items = $free_items_query->count();

                    $querystringArray = [
                        'filter_categories' => $filter_categories,
                        'filter_sort_by' => $filter_sort_by,
                    ];

                    if ($total_free_items == 0 || $total_paid_items == 0) {
                        $paid_items = $paid_items_query->paginate(10);
                        $free_items = $free_items_query->paginate(10);

                        if ($total_free_items == 0) {
                            $pagination = $paid_items->appends($querystringArray);
                        }
                        if ($total_paid_items == 0) {
                            $pagination = $free_items->appends($querystringArray);
                        }
                    } else {
                        $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);
                        $paid_items_per_page = ceil($total_paid_items / $num_of_pages) < 4 ? 4 : ceil($total_paid_items / $num_of_pages);
                        $free_items_per_page = 10 - $paid_items_per_page;

                        $paid_items = $paid_items_query->paginate($paid_items_per_page);
                        $free_items = $free_items_query->paginate($free_items_per_page);

                        if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                            $pagination = $paid_items->appends($querystringArray);
                        } else {
                            $pagination = $free_items->appends($querystringArray);
                        }
                    }
                    /**
                     * End do listing query
                     */

                    /**
                     * Start fetch ads blocks
                     */
                    $advertisement = new Advertisement();

                    $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_before_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_BEFORE_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_after_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_AFTER_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_LISTING_RESULTS_PAGES,
                        Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );
                    /**
                     * End fetch ads blocks
                     */

                    $active_user_ids = $subscription_obj->getActiveUserIds();

                    $item_select_city_query = Item::query()->where('locale', app()->getLocale());
                    $item_select_city_query->select('items.city_id')
                        ->whereIn('id', $all_item_ids)
                        ->where("items.item_status", Item::ITEM_PUBLISHED)
                        ->where('items.country_id', $site_prefer_country_id)
                        ->where("items.state_id", $state->id)
                        ->whereIn('items.user_id', $active_user_ids)
                        ->groupBy('items.city_id')
                        ->with('city');

                    $all_item_cities = $item_select_city_query->get();

                    /**
                     * Start initial filter
                     */
                    $total_results = $total_paid_items + $total_free_items;
                    /**
                     * End initial filter
                     */

                    /**
                     * Start initial blade view file path
                     */
                    $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
                    $theme_view_path = $theme_view_path->getViewPath();
                    /**
                     * End initial blade view file path
                     */

                    return response()->view(
                        $theme_view_path . 'category.city',
                        compact(
                            'category',
                            'state',
                            'city',
                            'paid_items',
                            'free_items',
                            'pagination',
                            'all_item_cities',
                            'ads_before_breadcrumb',
                            'ads_after_breadcrumb',
                            'ads_before_content',
                            'ads_after_content',
                            'ads_before_sidebar_content',
                            'ads_after_sidebar_content',
                            'parent_categories',
                            'children_categories',
                            'parent_category_id',
                            'filter_sort_by',
                            'filter_categories',
                            'total_results'
                        )
                    );
                } else {
                    abort(404);
                }
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function state(Request $request, string $state_slug)
    {
        $state = State::where('state_slug', $state_slug)->first();

        if ($state) {
            $settings = app('site_global_settings');
            $site_prefer_country_id = app('site_prefer_country_id');

            /**
             * Start SEO
             */
            if (!$state->meta_title)
                SEOMeta::setTitle(
                    __('seo.frontend.categories-state',
                        ['state_name' => $state->state_name,
                            'site_name' => empty($settings->setting_site_name) ?
                                config('app.name', 'Laravel') : $settings->setting_site_name]));
            else
                SEOMeta::setTitle($state->meta_title);
            SEOMeta::setDescription($state->meta_description);
            SEOMeta::setCanonical($state->canonical ?? request()->fullUrl()                                                                         );
            SEOMeta::addKeyword($state->meta_keywords);
            /**
             * End SEO
             */

            /**
             * Do listing query
             * 1. get paid listings and free listings.
             * 2. decide how many paid and free listings per page and total pages.
             * 3. decide the pagination to paid or free listings
             * 4. run query and render
             */

            // paid listing
            $paid_items_query = Item::query()->where('locale', app()->getLocale());

            /**
             * Start filter for paid listing
             */
            // categories
            $filter_categories = empty($request->filter_categories) ? array() : $request->filter_categories;

            $category_obj = new Category();
            $item_ids = $category_obj->getItemIdsByCategoryIds($filter_categories);

            // city
            $filter_city = empty($request->filter_city) ? null : $request->filter_city;
            /**
             * End filter for paid listing
             */

            // get paid users id array
            $subscription_obj = new Subscription();
            $paid_user_ids = $subscription_obj->getPaidUserIds();

            if (count($item_ids) > 0) {
                $paid_items_query->whereIn('id', $item_ids);
            }

            $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where("items.state_id", $state->id)
                ->where('items.item_featured', Item::ITEM_FEATURED)
                ->where(function ($query) use ($paid_user_ids) {

                    $query->whereIn('items.user_id', $paid_user_ids)
                        ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
                });

            $search_categories = Category::orderBy('category_name')
                ->whereNull('category_parent_id')
                ->select('category_name', 'id', 'category_image', 'category_icon')
                ->where('locale', app()->getLocale())
                ->get();
            // filter paid listings city
            if (!empty($filter_city)) {
                $paid_items_query->where('items.city_id', $filter_city);
            }

            $paid_items_query->orderBy('items.created_at', 'DESC')
                ->distinct('items.id')
                ->with('state')
                ->with('city');

            $total_paid_items = $paid_items_query->count();

            // free listing
            $free_items_query = Item::query()->where('locale', app()->getLocale());

            // get free users id array
            //$free_user_ids = $subscription_obj->getFreeUserIds();
            $free_user_ids = $subscription_obj->getActiveUserIds();

            if (count($item_ids) > 0) {
                $free_items_query->whereIn('id', $item_ids);
            }

            $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where("items.state_id", $state->id)
                ->where('items.item_featured', Item::ITEM_NOT_FEATURED)
                ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
                ->where(function ($query) use ($free_user_ids) {
                    $query->whereIn('items.user_id', $free_user_ids)
                        ->orWhereNull('items.user_id');
                });


            // filter free listings city
            if (!empty($filter_city)) {
                $free_items_query->where('items.city_id', $filter_city);
            }

            /**
             * Start filter sort by for free listing
             */
            $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;
            if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
                $free_items_query->orderBy('items.created_at', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'DESC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
                $free_items_query->orderBy('items.item_average_rating', 'ASC');
            } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
                $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                    ->orderBy('distance', 'ASC');
            }
            /**
             * End filter sort by for free listing
             */

            $free_items_query->distinct('items.id')
                ->with('state')
                ->with('city');

            $total_free_items = $free_items_query->count();

            $querystringArray = [
                'filter_categories' => $filter_categories,
                'filter_sort_by' => $filter_sort_by,
                'filter_city' => $filter_city,
            ];

            if ($total_free_items == 0 || $total_paid_items == 0) {
                $paid_items = $paid_items_query->paginate(10);
                $free_items = $free_items_query->paginate(10);

                if ($total_free_items == 0) {
                    $pagination = $paid_items->appends($querystringArray);
                }
                if ($total_paid_items == 0) {
                    $pagination = $free_items->appends($querystringArray);
                }
            } else {
                $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);
                $paid_items_per_page = ceil($total_paid_items / $num_of_pages) < 4 ? 4 : ceil($total_paid_items / $num_of_pages);
                $free_items_per_page = 10 - $paid_items_per_page;

                $paid_items = $paid_items_query->paginate($paid_items_per_page);
                $free_items = $free_items_query->paginate($free_items_per_page);

                if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                    $pagination = $paid_items->appends($querystringArray);
                } else {
                    $pagination = $free_items->appends($querystringArray);
                }
            }
            /**
             * End do listing query
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_STATE,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            $active_user_ids = $subscription_obj->getActiveUserIds();

            $item_select_city_query = Item::query()->where('locale', app()->getLocale());
            $item_select_city_query->select('items.city_id')
                ->where("items.item_status", Item::ITEM_PUBLISHED)
                ->where('items.country_id', $site_prefer_country_id)
                ->where("items.state_id", $state->id)
                ->whereIn('items.user_id', $active_user_ids)
                ->groupBy('items.city_id')
                ->with('city');

            $all_item_cities = $item_select_city_query->get();

            /**
             * Start initial filter
             */
            $all_printable_categories = $category_obj->getPrintableCategoriesNoDash();

            $filter_all_cities = $state->cities()->orderBy('city_name')->get();

            $total_results = $total_paid_items + $total_free_items;
            /**
             * End initial filter
             */

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'state',
                compact(
                    'state',
                    'paid_items',
                    'free_items',
                    'search_categories',
                    'pagination',
                    'all_item_cities',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content',
                    'filter_categories',
                    'filter_all_cities',
                    'filter_city',
                    'filter_sort_by',
                    'total_results',
                    'all_printable_categories'
                )
            );
        } else {
            abort(404);
        }
    }

    public function city(Request $request, string $state_slug, string $city_slug)
    {
        $state = State::where('state_slug', $state_slug)->first();

        if ($state) {
            $city = $state->cities()->where('city_slug', $city_slug)->first();

            if ($city) {
                $settings = app('site_global_settings');
                $site_prefer_country_id = app('site_prefer_country_id');

                /**
                 * Start SEO
                 */
                if (!$city->meta_title)
                    SEOMeta::setTitle(__('seo.frontend.categories-state-city', ['state_name' => $state->state_name, 'city_name' => $city->city_name, 'site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
                else
                    SEOMeta::setTitle($city->meta_title);
                SEOMeta::setDescription($city->meta_description);
                SEOMeta::setCanonical($city->canonical ?? request()->fullUrl()                                                                          );
                SEOMeta::addKeyword($city->meta_keywords);
                /**
                 * End SEO
                 */

                /**
                 * Do listing query
                 * 1. get paid listings and free listings.
                 * 2. decide how many paid and free listings per page and total pages.
                 * 3. decide the pagination to paid or free listings
                 * 4. run query and render
                 */

                // paid listing
                $paid_items_query = Item::query()->where('locale', app()->getLocale());

                /**
                 * Start filter for paid listing
                 */
                // categories
                $filter_categories = Category::orderBy('category_name')
                    ->whereNotNull('category_parent_id')
                    ->select('category_name', 'id', 'category_image', 'category_icon')
                    ->where('locale', app()->getLocale())
                    ->get();;

                $category_obj = new Category();
                /**
                 * End filter for paid listing
                 */

                // get paid users id array
                $subscription_obj = new Subscription();
                $paid_user_ids = $subscription_obj->getPaidUserIds();


                $paid_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                    ->where('items.country_id', $site_prefer_country_id)
                    ->where("items.state_id", $state->id)
                    ->where("items.city_id", $city->id)
                    ->where('items.item_featured', Item::ITEM_FEATURED)
                    ->where(function ($query) use ($paid_user_ids) {

                        $query->whereIn('items.user_id', $paid_user_ids)
                            ->orWhere('items.item_featured_by_admin', Item::ITEM_FEATURED_BY_ADMIN);
                    });

                $paid_items_query->orderBy('items.created_at', 'DESC')
                    ->distinct('items.id')
                    ->with('state')
                    ->with('city');

                $total_paid_items = $paid_items_query->count();

                // free listing
                $free_items_query = Item::query()->where('locale', app()->getLocale());

                // get free users id array
                //$free_user_ids = $subscription_obj->getFreeUserIds();
                $free_user_ids = $subscription_obj->getActiveUserIds();

                $free_items_query->where("items.item_status", Item::ITEM_PUBLISHED)
                    ->where('items.country_id', $site_prefer_country_id)
                    ->where("items.state_id", $state->id)
                    ->where("items.city_id", $city->id)
//                    ->where('items.item_featured', Item::ITEM_NOT_FEATURED)
//                    ->where('items.item_featured_by_admin', Item::ITEM_NOT_FEATURED_BY_ADMIN)
                    ->where(function ($query) use ($free_user_ids) {
                        $query->whereIn('items.user_id', $free_user_ids)
                            ->orWhereNull('items.user_id');
                    });
                if ($request->filter_category)
                    $free_items_query->where('category_id', $request->filter_category);

                /**
                 * Start filter sort by for free listing
                 */
                $filter_sort_by = empty($request->filter_sort_by) ? Item::ITEMS_SORT_BY_NEWEST_CREATED : $request->filter_sort_by;
                if ($filter_sort_by == Item::ITEMS_SORT_BY_NEWEST_CREATED) {
                    $free_items_query->orderBy('items.created_at', 'DESC');
                } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_OLDEST_CREATED) {
                    $free_items_query->orderBy('items.created_at', 'ASC');
                } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_HIGHEST_RATING) {
                    $free_items_query->orderBy('items.item_average_rating', 'DESC');
                } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_LOWEST_RATING) {
                    $free_items_query->orderBy('items.item_average_rating', 'ASC');
                } elseif ($filter_sort_by == Item::ITEMS_SORT_BY_NEARBY_FIRST) {
                    $free_items_query->selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$this->getLatitude(), $this->getLongitude(), $this->getLatitude()])
                        ->orderBy('distance', 'ASC');
                }
                /**
                 * End filter sort by for free listing
                 */

                $free_items_query->distinct('items.id')
                    ->with('state')
                    ->with('city');

                $total_free_items = $free_items_query->count();

                $querystringArray = [
                    'filter_sort_by' => $filter_sort_by,
                ];

                if ($total_free_items == 0 || $total_paid_items == 0) {
                    $paid_items = $paid_items_query->paginate(10);
                    $free_items = $free_items_query->paginate(10);

                    if ($total_free_items == 0) {
                        $pagination = $paid_items->appends($querystringArray);
                    }
                    if ($total_paid_items == 0) {
                        $pagination = $free_items->appends($querystringArray);
                    }
                } else {
                    $num_of_pages = ceil(($total_paid_items + $total_free_items) / 10);
                    $paid_items_per_page = ceil($total_paid_items / $num_of_pages) < 4 ? 4 : ceil($total_paid_items / $num_of_pages);
                    $free_items_per_page = 10 - $paid_items_per_page;

                    $paid_items = $paid_items_query->paginate($paid_items_per_page);
                    $free_items = $free_items_query->paginate($free_items_per_page);

                    if (ceil($total_paid_items / $paid_items_per_page) > ceil($total_free_items / $free_items_per_page)) {
                        $pagination = $paid_items->appends($querystringArray);
                    } else {
                        $pagination = $free_items->appends($querystringArray);
                    }
                }
                /**
                 * End do listing query
                 */

                /**
                 * Start fetch ads blocks
                 */
                $advertisement = $state->advertisement;

                $ads_before_content = $advertisement->where('advertisement_position',
                    Advertisement::AD_POSITION_BEFORE_CONTENT);


                $ads_after_content = $advertisement->where('advertisement_position',
                    Advertisement::AD_POSITION_AFTER_CONTENT);

                $ads_before_sidebar_content =
                    $advertisement->where('advertisement_position',
                        Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT);


                $ads_after_sidebar_content = $advertisement->where('advertisement_position',
                    Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT);
                /**
                 * End fetch ads blocks
                 */

                $active_user_ids = $subscription_obj->getActiveUserIds();

                $item_select_city_query = Item::query()->where('locale', app()->getLocale());
                $item_select_city_query->select('items.city_id')
                    ->where("items.item_status", Item::ITEM_PUBLISHED)
                    ->where('items.country_id', $site_prefer_country_id)
                    ->where("items.state_id", $state->id)
                    ->whereIn('items.user_id', $active_user_ids)
                    ->groupBy('items.city_id')
                    ->with('city');

                $all_item_cities = $item_select_city_query->get();

                /**
                 * Start initial filter
                 */
                $all_printable_categories = $category_obj->getPrintableCategoriesNoDash();

                $total_results = $total_paid_items + $total_free_items;
                /**
                 * End initial filter
                 */

                /**
                 * Start initial blade view file path
                 */
                $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
                $theme_view_path = $theme_view_path->getViewPath();
                /**
                 * End initial blade view file path
                 */

                return response()->view(
                    $theme_view_path . 'city',
                    compact(
                        'state',
                        'city',
                        'paid_items',
                        'free_items',
                        'pagination',
                        'all_item_cities',
                        'ads_before_content',
                        'ads_after_content',
                        'ads_before_sidebar_content',
                        'ads_after_sidebar_content',
                        'filter_categories',
                        'filter_sort_by',
                        'total_results',
                        'all_printable_categories'
                    )
                );
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    public function product(Request $request, string $item_slug, string $product_slug)
    {
        $settings = app('site_global_settings');

        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            // validate product record
            $product = Product::where('product_slug', $product_slug)
                ->where('product_status', Product::STATUS_APPROVED)
                ->first();

            if ($product) {
                // validate if the item has collected the product in the listing page
                if ($item->hasCollectedProduct($product)) {
                    /**
                     * Start SEO
                     */
                    SEOMeta::setTitle($product->product_name . ' - ' . $item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
                    SEOMeta::setDescription($product->product_description);
                    SEOMeta::setCanonical(request()->fullUrl()                                                                          );
                    SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);

                    // OpenGraph
                    OpenGraph::setTitle($product->product_name . ' - ' . $item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
                    OpenGraph::setDescription($product->product_description);
                    OpenGraph::setUrl(request()->fullUrl()                                                                          );
                    if (empty($product->product_image_large)) {
                        OpenGraph::addImage(asset('frontend/images/placeholder/full_item_feature_image.webp'));
                    } else {
                        OpenGraph::addImage(Storage::disk('public')->url('product/' . $product->product_image_large));
                    }

                    // Twitter
                    TwitterCard::setTitle($product->product_name . ' - ' . $item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
                    /**
                     * End SEO
                     */

                    $item_display_categories = $item->getAllCategories(Item::ITEM_TOTAL_SHOW_CATEGORY);
                    $item_total_categories = $item->allCategories()->count();
                    $item_all_categories = $item->getAllCategories();

                    $item_count_rating = $item->getCountRating();
                    $item_average_rating = $item->item_average_rating;

                    $product_features = $product->productFeatures()
                        ->orderBy('product_feature_order')
                        ->get();

                    /**
                     * Start initial opening hours
                     */
                    $opening_hours_array_monday = array();
                    $opening_hours_array_tuesday = array();
                    $opening_hours_array_wednesday = array();
                    $opening_hours_array_thursday = array();
                    $opening_hours_array_friday = array();
                    $opening_hours_array_saturday = array();
                    $opening_hours_array_sunday = array();
                    $opening_hour_exceptions_array = array();

                    $item_hours = $item->itemHours()->get();
                    foreach ($item_hours as $item_hours_key => $item_hour) {
                        $item_hour_open_time = substr($item_hour->item_hour_open_time, 0, -3);
                        $item_hour_close_time = substr($item_hour->item_hour_close_time, 0, -3);

                        if ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_MONDAY) {
                            $opening_hours_array_monday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_TUESDAY) {
                            $opening_hours_array_tuesday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_WEDNESDAY) {
                            $opening_hours_array_wednesday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_THURSDAY) {
                            $opening_hours_array_thursday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_FRIDAY) {
                            $opening_hours_array_friday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_SATURDAY) {
                            $opening_hours_array_saturday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_SUNDAY) {
                            $opening_hours_array_sunday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                        }
                    }

                    $item_hour_exceptions = $item->itemHourExceptions()->get();
                    foreach ($item_hour_exceptions as $item_hour_exceptions_key => $item_hour_exception) {
                        $item_hour_exception_open_time = empty($item_hour_exception->item_hour_exception_open_time) ? null : substr($item_hour_exception->item_hour_exception_open_time, 0, -3);
                        $item_hour_exception_close_time = empty($item_hour_exception->item_hour_exception_close_time) ? null : substr($item_hour_exception->item_hour_exception_close_time, 0, -3);

                        if (!empty($item_hour_exception_open_time) && !empty($item_hour_exception_close_time)) {
                            $opening_hour_exceptions_array[$item_hour_exception->item_hour_exception_date][] = $item_hour_exception_open_time . "-" . $item_hour_exception_close_time;
                        } else {
                            $opening_hour_exceptions_array[$item_hour_exception->item_hour_exception_date] = [];
                        }
                    }

                    $opening_hours_obj = OpeningHours::createAndMergeOverlappingRanges([
                        'monday' => $opening_hours_array_monday,
                        'tuesday' => $opening_hours_array_tuesday,
                        'wednesday' => $opening_hours_array_wednesday,
                        'thursday' => $opening_hours_array_thursday,
                        'friday' => $opening_hours_array_friday,
                        'saturday' => $opening_hours_array_saturday,
                        'sunday' => $opening_hours_array_sunday,
                        'exceptions' => $opening_hour_exceptions_array,
                    ], $item->item_hour_time_zone);

                    $datetime_now = new DateTime('now');
                    $current_open_range = $opening_hours_obj->currentOpenRange($datetime_now);

                    $opening_hours_week = $opening_hours_obj->forWeek();
                    $opening_hours_week_monday = $opening_hours_week['monday'];
                    $opening_hours_week_tuesday = $opening_hours_week['tuesday'];
                    $opening_hours_week_wednesday = $opening_hours_week['wednesday'];
                    $opening_hours_week_thursday = $opening_hours_week['thursday'];
                    $opening_hours_week_friday = $opening_hours_week['friday'];
                    $opening_hours_week_saturday = $opening_hours_week['saturday'];
                    $opening_hours_week_sunday = $opening_hours_week['sunday'];

                    $item_hours_monday = $opening_hours_week_monday->getIterator();
                    $item_hours_tuesday = $opening_hours_week_tuesday->getIterator();
                    $item_hours_wednesday = $opening_hours_week_wednesday->getIterator();
                    $item_hours_thursday = $opening_hours_week_thursday->getIterator();
                    $item_hours_friday = $opening_hours_week_friday->getIterator();
                    $item_hours_saturday = $opening_hours_week_saturday->getIterator();
                    $item_hours_sunday = $opening_hours_week_sunday->getIterator();

                    $item_hour_exceptions_obj = $opening_hours_obj->exceptions();
                    /**
                     * End initial opening hours
                     */

                    /**
                     * get 4 nearby items by current item lat and lng
                     */
                    $latitude = $item->item_lat;
                    $longitude = $item->item_lng;

                    $nearby_items = Item::selectRaw('items.*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$latitude, $longitude, $latitude])
                        ->where('id', '!=', $item->id)
                        ->where('item_status', Item::ITEM_PUBLISHED)
                        ->where('item_type', Item::ITEM_TYPE_REGULAR)
                        ->orderBy('distance', 'ASC')
                        ->with('state')
                        ->with('city')
                        ->with('user')
                        ->take(4)->get();

                    /**
                     * get 4 similar items by current item lat and lng
                     */
                    $item_category_ids = array();
                    foreach ($item_all_categories as $key => $category) {
                        $item_category_ids[] = $category->id;
                    }

                    $category_obj = new Category();
                    $similar_item_ids = $category_obj->getItemIdsByCategoryIds($item_category_ids);

                    $similar_item_ids_length = count($similar_item_ids);
                    if ($similar_item_ids_length > Item::ITEM_SIMILAR_SHOW_MAX) {
                        $similar_item_ids = array_slice($similar_item_ids, rand(0, $similar_item_ids_length - Item::ITEM_SIMILAR_SHOW_MAX), Item::ITEM_SIMILAR_SHOW_MAX);
                    }

                    $similar_items = Item::whereIn('items.id', $similar_item_ids)
                        ->where('items.id', '!=', $item->id)
                        ->where('items.item_status', Item::ITEM_PUBLISHED)
                        ->distinct('items.id')
                        ->inRandomOrder()
                        ->limit(Item::ITEM_SIMILAR_SHOW_MAX)
                        ->get();

                    /**
                     * Start item claim
                     */
                    $item_has_claimed = $item->hasClaimed();
                    /**
                     * End item claim
                     */

                    /**
                     * Start fetch ads blocks
                     */
                    $advertisement = new Advertisement();

                    $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                        Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );

                    $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                        Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                        Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                        Advertisement::AD_STATUS_ENABLE
                    );
                    /**
                     * End fetch ads blocks
                     */


                    /**
                     * Start initial blade view file path
                     */
                    $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
                    $theme_view_path = $theme_view_path->getViewPath();
                    /**
                     * End initial blade view file path
                     */

                    /**
                     * Start initial Google reCAPTCHA version 2
                     */
                    if ($settings->setting_site_recaptcha_item_lead_enable == Setting::SITE_RECAPTCHA_ITEM_LEAD_ENABLE) {
                        config_re_captcha($settings->setting_site_recaptcha_site_key, $settings->setting_site_recaptcha_secret_key);
                    }
                    /**
                     * End initial Google reCAPTCHA version 2
                     */

                    return response()->view(
                        $theme_view_path . 'product',
                        compact(
                            'product',
                            'item',
                            'product_features',
                            'nearby_items',
                            'similar_items',
                            'ads_before_sidebar_content',
                            'ads_after_sidebar_content',
                            'item_display_categories',
                            'item_total_categories',
                            'item_all_categories',
                            'item_count_rating',
                            'item_average_rating',
                            'item_has_claimed',
                            'opening_hours_obj',
                            'datetime_now',
                            'current_open_range',
                            'item_hours_monday',
                            'item_hours_tuesday',
                            'item_hours_wednesday',
                            'item_hours_thursday',
                            'item_hours_friday',
                            'item_hours_saturday',
                            'item_hours_sunday',
                            'item_hour_exceptions_obj',
                            'item_hours',
                            'item_hour_exceptions'
                        )
                    );
                } else {
                    abort(404);
                }
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }

    /**
     * @param Request $request
     * @param string $item_slug
     * @return Response
     */
    public function item(Request $request, string $category_slug, string $sub_category_slug,
                         string  $state_slug, string $item_slug)
    {
        $settings = app('site_global_settings');
        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            $item_user = $item->user()->first() ?? Auth::user();
            /*  if ($item_user) {
                  if ($item_user->hasActive()) {*/
            /**
             * Start SEO
             */
            if (!$item->meta_title)
                SEOMeta::setTitle($item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
            else
                SEOMeta::setTitle($item->meta_title);
            SEOMeta::setDescription($item->meta_description);
            SEOMeta::setCanonical($item->canonical ?? request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($item->meta_keywords ?? $settings->setting_site_seo_home_keywords);

            // OpenGraph
            OpenGraph::setTitle($item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
            OpenGraph::setDescription($item->item_description);
            OpenGraph::setUrl(request()->fullUrl()                                                                          );
            if (empty($item->item_image)) {
                OpenGraph::addImage(asset('frontend/images/placeholder/full_item_feature_image.webp'));
            } else {
                OpenGraph::addImage(Storage::disk('public')->url('item/' . $item->item_image));
            }

            // Twitter
            TwitterCard::setTitle($item->item_title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
            /**
             * End SEO
             */

            $item_display_categories = $item->getAllCategories(Item::ITEM_TOTAL_SHOW_CATEGORY);
            $item_total_categories = $item->allCategories()->count();
            $item_all_categories = $item->getAllCategories();

            /**
             * Start initla item features
             */
            $item_features = $item->features()->where('item_feature_value', '<>', '')
                ->whereNotNull('item_feature_value')
                ->get();
            /**
             * End initial item features
             */

            /**
             * Start initial opening hours
             */
            $opening_hours_array_monday = array();
            $opening_hours_array_tuesday = array();
            $opening_hours_array_wednesday = array();
            $opening_hours_array_thursday = array();
            $opening_hours_array_friday = array();
            $opening_hours_array_saturday = array();
            $opening_hours_array_sunday = array();
            $opening_hour_exceptions_array = array();

            $item_hours = $item->itemHours()->get();
            foreach ($item_hours as $item_hours_key => $item_hour) {
                $item_hour_open_time = substr($item_hour->item_hour_open_time, 0, -3);
                $item_hour_close_time = substr($item_hour->item_hour_close_time, 0, -3);

                if ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_MONDAY) {
                    $opening_hours_array_monday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_TUESDAY) {
                    $opening_hours_array_tuesday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_WEDNESDAY) {
                    $opening_hours_array_wednesday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_THURSDAY) {
                    $opening_hours_array_thursday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_FRIDAY) {
                    $opening_hours_array_friday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_SATURDAY) {
                    $opening_hours_array_saturday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                } elseif ($item_hour->item_hour_day_of_week == ItemHour::DAY_OF_WEEK_SUNDAY) {
                    $opening_hours_array_sunday[] = $item_hour_open_time . "-" . $item_hour_close_time;
                }
            }

            $item_hour_exceptions = $item->itemHourExceptions()->get();
            foreach ($item_hour_exceptions as $item_hour_exceptions_key => $item_hour_exception) {
                $item_hour_exception_open_time = empty($item_hour_exception->item_hour_exception_open_time) ? null : substr($item_hour_exception->item_hour_exception_open_time, 0, -3);
                $item_hour_exception_close_time = empty($item_hour_exception->item_hour_exception_close_time) ? null : substr($item_hour_exception->item_hour_exception_close_time, 0, -3);

                if (!empty($item_hour_exception_open_time) && !empty($item_hour_exception_close_time)) {
                    $opening_hour_exceptions_array[$item_hour_exception->item_hour_exception_date][] = $item_hour_exception_open_time . "-" . $item_hour_exception_close_time;
                } else {
                    $opening_hour_exceptions_array[$item_hour_exception->item_hour_exception_date] = [];
                }
            }

            $opening_hours_obj = OpeningHours::createAndMergeOverlappingRanges([
                'monday' => $opening_hours_array_monday,
                'tuesday' => $opening_hours_array_tuesday,
                'wednesday' => $opening_hours_array_wednesday,
                'thursday' => $opening_hours_array_thursday,
                'friday' => $opening_hours_array_friday,
                'saturday' => $opening_hours_array_saturday,
                'sunday' => $opening_hours_array_sunday,
                'exceptions' => $opening_hour_exceptions_array,
            ], $item->item_hour_time_zone);

            $datetime_now = new DateTime('now');
            $current_open_range = $opening_hours_obj->currentOpenRange($datetime_now);

            $opening_hours_week = $opening_hours_obj->forWeek();
            $opening_hours_week_monday = $opening_hours_week['monday'];
            $opening_hours_week_tuesday = $opening_hours_week['tuesday'];
            $opening_hours_week_wednesday = $opening_hours_week['wednesday'];
            $opening_hours_week_thursday = $opening_hours_week['thursday'];
            $opening_hours_week_friday = $opening_hours_week['friday'];
            $opening_hours_week_saturday = $opening_hours_week['saturday'];
            $opening_hours_week_sunday = $opening_hours_week['sunday'];

            $item_hours_monday = $opening_hours_week_monday->getIterator();
            $item_hours_tuesday = $opening_hours_week_tuesday->getIterator();
            $item_hours_wednesday = $opening_hours_week_wednesday->getIterator();
            $item_hours_thursday = $opening_hours_week_thursday->getIterator();
            $item_hours_friday = $opening_hours_week_friday->getIterator();
            $item_hours_saturday = $opening_hours_week_saturday->getIterator();
            $item_hours_sunday = $opening_hours_week_sunday->getIterator();

            $item_hour_exceptions_obj = $opening_hours_obj->exceptions();
            /**
             * End initial opening hours
             */

            /**
             * get 4 nearby items by current item lat and lng
             */
            $latitude = $item->item_lat;
            $longitude = $item->item_lng;

            $nearby_items = Item::selectRaw('items.*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( item_lat ) ) * cos( radians( item_lng ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( item_lat ) ) ) ) AS distance', [$latitude, $longitude, $latitude])
                ->where('id', '!=', $item->id)
                ->where('item_status', Item::ITEM_PUBLISHED)
                ->where('item_type', Item::ITEM_TYPE_REGULAR)
                ->orderBy('distance', 'ASC')
                ->with('state')
                ->with('city')
                ->with('user')
                ->take(4)->get();

            /**
             * get 4 similar items by current item lat and lng
             */
            $item_category_ids = array();
            foreach ($item_all_categories as $item_all_categories_key => $category) {
                $item_category_ids[] = $category->id;
            }

            $category_obj = new Category();
            $similar_item_ids = $category_obj->getItemIdsByCategoryIds($item_category_ids);

            $similar_item_ids_length = count($similar_item_ids);
            if ($similar_item_ids_length > Item::ITEM_SIMILAR_SHOW_MAX) {
                $similar_item_ids = array_slice($similar_item_ids, rand(0, $similar_item_ids_length - Item::ITEM_SIMILAR_SHOW_MAX), Item::ITEM_SIMILAR_SHOW_MAX);
            }

            $similar_items = Item::whereIn('items.id', $similar_item_ids)
                ->where('items.id', '!=', $item->id)
                ->where('items.item_status', Item::ITEM_PUBLISHED)
                ->distinct('items.id')
                ->inRandomOrder()
                ->limit(Item::ITEM_SIMILAR_SHOW_MAX)
                ->get();

            /**
             * Start get all item approved reviews
             */
            $item_count_rating = $item->getCountRating();
            $item_average_rating = $item->item_average_rating;

            $rating_sort_by = empty($request->rating_sort_by) ? Item::ITEM_RATING_SORT_BY_NEWEST : $request->rating_sort_by;
            $reviews = $item->getApprovedRatingsSortBy($rating_sort_by);

            if ($item_count_rating > 0) {
                $item_one_star_count_rating = $item->getStarsCountRating(Item::ITEM_REVIEW_RATING_ONE);
                $item_two_star_count_rating = $item->getStarsCountRating(Item::ITEM_REVIEW_RATING_TWO);
                $item_three_star_count_rating = $item->getStarsCountRating(Item::ITEM_REVIEW_RATING_THREE);
                $item_four_star_count_rating = $item->getStarsCountRating(Item::ITEM_REVIEW_RATING_FOUR);
                $item_five_star_count_rating = $item->getStarsCountRating(Item::ITEM_REVIEW_RATING_FIVE);

                $item_one_star_percentage = ($item_one_star_count_rating / $item_count_rating) * 100;
                $item_two_star_percentage = ($item_two_star_count_rating / $item_count_rating) * 100;
                $item_three_star_percentage = ($item_three_star_count_rating / $item_count_rating) * 100;
                $item_four_star_percentage = ($item_four_star_count_rating / $item_count_rating) * 100;
                $item_five_star_percentage = ($item_five_star_count_rating / $item_count_rating) * 100;
            } else {
                $item_one_star_percentage = 0;
                $item_two_star_percentage = 0;
                $item_three_star_percentage = 0;
                $item_four_star_percentage = 0;
                $item_five_star_percentage = 0;
            }
            /**
             * End get all item approved reviews
             */

            /**
             * Start item claim
             */
            $item_has_claimed = $item->hasClaimed();
            /**
             * End item claim
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_gallery = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_GALLERY,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_description = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_DESCRIPTION,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_location = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_LOCATION,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_features = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_FEATURES,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_reviews = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_REVIEWS,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_comments = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_COMMENTS,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_share = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_BEFORE_SHARE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_share = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_AFTER_SHARE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            /**
             * Start fetch item sections
             */
            $item_sections_after_breadcrumb = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_BREADCRUMB)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_gallery = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_GALLERY)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_description = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_DESCRIPTION)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_location_map = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_LOCATION_MAP)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_features = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_FEATURES)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_reviews = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_REVIEWS)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_comments = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_COMMENTS)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();

            $item_sections_after_share = $item->itemSections()
                ->where('item_section_position', ItemSection::POSITION_AFTER_SHARE)
                ->where('item_section_status', ItemSection::STATUS_PUBLISHED)
                ->orderBy('item_section_order')
                ->get();
            /**
             * End fetch item sections
             */


            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            /**
             * Start initial Google reCAPTCHA version 2
             */
            if ($settings->setting_site_recaptcha_item_lead_enable == Setting::SITE_RECAPTCHA_ITEM_LEAD_ENABLE) {
                config_re_captcha($settings->setting_site_recaptcha_site_key, $settings->setting_site_recaptcha_secret_key);
            }
            /**
             * End initial Google reCAPTCHA version 2
             */
            // dd($item);
            $search_categories = Category::orderBy('category_name')
                ->whereNull('category_parent_id')
                ->select('category_name', 'id', 'category_image', 'category_icon')
                ->where('locale', app()->getLocale())
                ->get();
            return response()->view(
                $theme_view_path . 'item',
                compact(
                    'item',
                    'nearby_items',
                    'similar_items',
                    'search_categories',
                    'reviews',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_gallery',
                    'ads_before_description',
                    'ads_before_location',
                    'ads_before_features',
                    'ads_before_reviews',
                    'ads_before_comments',
                    'ads_before_share',
                    'ads_after_share',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content',
                    'item_display_categories',
                    'item_total_categories',
                    'item_all_categories',
                    'item_count_rating',
                    'item_average_rating',
                    'item_one_star_percentage',
                    'item_two_star_percentage',
                    'item_three_star_percentage',
                    'item_four_star_percentage',
                    'item_five_star_percentage',
                    'rating_sort_by',
                    'item_has_claimed',
                    'item_sections_after_breadcrumb',
                    'item_sections_after_gallery',
                    'item_sections_after_description',
                    'item_sections_after_location_map',
                    'item_sections_after_features',
                    'item_sections_after_reviews',
                    'item_sections_after_comments',
                    'item_sections_after_share',
                    'item_features',
                    'opening_hours_obj',
                    'datetime_now',
                    'current_open_range',
                    'item_hours_monday',
                    'item_hours_tuesday',
                    'item_hours_wednesday',
                    'item_hours_thursday',
                    'item_hours_friday',
                    'item_hours_saturday',
                    'item_hours_sunday',
                    'item_hour_exceptions_obj',
                    'item_hours',
                    'item_hour_exceptions'
                )
            );
            /* } else {
                 abort(404);
             }
         } else {
             abort(404);
         }*/
        } else {
            abort(404);
        }
    }

    public function storeItemLead(Request $request, string $item_slug)
    {
        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            $settings = app('site_global_settings');

            if ($settings->setting_site_recaptcha_item_lead_enable == Setting::SITE_RECAPTCHA_ITEM_LEAD_ENABLE) {
                /**
                 * Start initial Google reCAPTCHA version 2
                 */
                config_re_captcha($settings->setting_site_recaptcha_site_key, $settings->setting_site_recaptcha_secret_key);
                /**
                 * End initial Google reCAPTCHA version 2
                 */

                $request->validate([
                    'item_lead_name' => 'required|max:255',
                    'item_lead_email' => 'required|email',
                    'item_lead_phone' => 'nullable|numeric',
                    'item_lead_subject' => 'nullable|max:255',
                    'item_lead_message' => 'nullable|max:255',
                    // 'g-recaptcha-response' => 'recaptcha',
                ]);
            } else {
                $request->validate([
                    'item_lead_name' => 'required|max:255',
                    'item_lead_email' => 'required|email',
                    'item_lead_phone' => 'nullable|numeric',
                    'item_lead_subject' => 'nullable|max:255',
                    'item_lead_message' => 'nullable|max:255',
                ]);
            }

            $item_lead = new ItemLead(array(
                'item_id' => $item->id,
                'item_lead_name' => $request->item_lead_name,
                'item_lead_email' => $request->item_lead_email,
                'item_lead_phone' => $request->item_lead_phone,
                'item_lead_subject' => $request->item_lead_subject,
                'item_lead_message' => $request->item_lead_message,
            ));
            $item_lead->save();

            /**
             * Start email notification
             */
            if ($settings->settings_site_smtp_enabled == Setting::SITE_SMTP_ENABLED) {
                // config SMTP
                config_smtp(
                    $settings->settings_site_smtp_sender_name,
                    $settings->settings_site_smtp_sender_email,
                    $settings->settings_site_smtp_host,
                    $settings->settings_site_smtp_port,
                    $settings->settings_site_smtp_encryption,
                    $settings->settings_site_smtp_username,
                    $settings->settings_site_smtp_password
                );
            }

            if (!empty($settings->setting_site_name)) {
                // set up APP_NAME
                config([
                    'app.name' => $settings->setting_site_name,
                ]);
            }

            $email_admin = User::getAdmin();
            $email_user = $item->user()->first();
            $email_subject = __('role_permission.item-leads.email.subject');
            $email_notify_message_user = [
                __('role_permission.item-leads.email.description-user'),
            ];
            $email_notify_message_admin = [
                __('role_permission.item-leads.email.description-admin'),
            ];
            $email_notify_action_text = __('role_permission.item-leads.email.action-text');

            try {
                Mail::to($email_admin)->send(
                    new Notification(
                        $email_subject,
                        $email_admin->name,
                        null,
                        $email_notify_message_admin,
                        $email_notify_action_text,
                        'success',
                        route('admin.item-leads.index')
                    )
                );

                if ($email_user) {
                    Mail::to($email_user)->send(
                        new Notification(
                            $email_subject,
                            $email_user->name,
                            null,
                            $email_notify_message_user,
                            $email_notify_action_text,
                            'success',
                            route('user.item-leads.index')
                        )
                    );
                }
            } catch (\Exception $e) {
                Log::error($e->getMessage() . "\n" . $e->getTraceAsString());
            }
            /**
             * End email notification
             */

            \Session::flash('flash_message', __('role_permission.item-leads.alert.contact-form-submitted'));
            \Session::flash('flash_type', 'success');

            return back();
        } else {
            abort(404);
        }
    }

    public function emailItem(string $item_slug, Request $request)
    {
        $settings = app('site_global_settings');

        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            if (Auth::check()) {
                $request->validate([
                    'item_share_email_name' => 'required|max:255',
                    'item_share_email_from_email' => 'required|email|max:255',
                    'item_share_email_to_email' => 'required|email|max:255',
                ]);

                // send an email notification to admin
                $email_to = $request->item_share_email_to_email;
                $email_from_name = $request->item_share_email_name;
                $email_note = $request->item_share_email_note;
                $email_subject = __('frontend.item.send-email-subject', ['name' => $email_from_name]);

                $email_notify_message = [
                    __('frontend.item.send-email-body', ['from_name' => $email_from_name, 'url' => route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ])]),
                    __('frontend.item.send-email-note'),
                    $email_note,
                ];

                /**
                 * Start initial SMTP settings
                 */
                if ($settings->settings_site_smtp_enabled == Setting::SITE_SMTP_ENABLED) {
                    // config SMTP
                    config_smtp(
                        $settings->settings_site_smtp_sender_name,
                        $settings->settings_site_smtp_sender_email,
                        $settings->settings_site_smtp_host,
                        $settings->settings_site_smtp_port,
                        $settings->settings_site_smtp_encryption,
                        $settings->settings_site_smtp_username,
                        $settings->settings_site_smtp_password
                    );
                }
                /**
                 * End initial SMTP settings
                 */

                if (!empty($settings->setting_site_name)) {
                    // set up APP_NAME
                    config([
                        'app.name' => $settings->setting_site_name,
                    ]);
                }

                try {
                    // to admin
                    Mail::to($email_to)->send(
                        new Notification(
                            $email_subject,
                            $email_to,
                            null,
                            $email_notify_message,
                            __('frontend.item.view-listing'),
                            'success',
                            route('page.item', [
                                'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                                'sub_category_slug' => $item->category->category_slug,
                                'state_slug' => $item->state->state_slug,
                                'item_slug' => $item->item_slug
                            ])
                        )
                    );

                    \Session::flash('flash_message', __('frontend.item.send-email-success'));
                    \Session::flash('flash_type', 'success');
                } catch (\Exception $e) {
                    Log::error($e->getMessage() . "\n" . $e->getTraceAsString());

                    \Session::flash('flash_message', __('theme_alaadin.email.alert.sending-problem'));
                    \Session::flash('flash_type', 'danger');
                }

                return redirect()->route('page.item', [
                    'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                    'sub_category_slug' => $item->category->category_slug,
                    'state_slug' => $item->state->state_slug,
                    'item_slug' => $item->item_slug
                ]);
            } else {
                \Session::flash('flash_message', __('frontend.item.send-email-error-login'));
                \Session::flash('flash_type', 'danger');

                return redirect()->route('page.item', [
                    'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                    'sub_category_slug' => $item->category->category_slug,
                    'state_slug' => $item->state->state_slug,
                    'item_slug' => $item->item_slug
                ]);
            }
        } else {
            abort(404);
        }
    }

    public function saveItem(Request $request, string $item_slug)
    {
        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            if (Auth::check()) {
                $login_user = Auth::user();

                if ($login_user->hasSavedItem($item->id)) {
                    \Session::flash('flash_message', __('frontend.item.save-item-error-exist'));
                    \Session::flash('flash_type', 'danger');

                    return redirect()->route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]);
                } else {
                    $login_user->savedItems()->attach($item->id);

                    \Session::flash('flash_message', __('frontend.item.save-item-success'));
                    \Session::flash('flash_type', 'success');

                    return redirect()->route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]);
                }
            } else {
                \Session::flash('flash_message', __('frontend.item.save-item-error-login'));
                \Session::flash('flash_type', 'danger');

                return redirect()->route('page.item', [
                    'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                    'sub_category_slug' => $item->category->category_slug,
                    'state_slug' => $item->state->state_slug,
                    'item_slug' => $item->item_slug
                ]);
            }
        } else {
            abort(404);
        }
    }

    public function unSaveItem(Request $request, string $item_slug)
    {
        $item = Item::where('item_slug', $item_slug)
            ->where('item_status', Item::ITEM_PUBLISHED)
            ->first();

        if ($item) {
            if (Auth::check()) {
                $login_user = Auth::user();

                if ($login_user->hasSavedItem($item->id)) {
                    $login_user->savedItems()->detach($item->id);


                    \Session::flash('flash_message', __('frontend.item.unsave-item-success'));
                    \Session::flash('flash_type', 'success');

                    return redirect()->route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]);
                } else {
                    \Session::flash('flash_message', __('frontend.item.unsave-item-error-exist'));
                    \Session::flash('flash_type', 'danger');

                    return redirect()->route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]);
                }
            } else {
                \Session::flash('flash_message', __('frontend.item.unsave-item-error-login'));
                \Session::flash('flash_type', 'danger');

                return redirect()->route('page.item', [
                    'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                    'sub_category_slug' => $item->category->category_slug,
                    'state_slug' => $item->state->state_slug,
                    'item_slug' => $item->item_slug
                ]);
            }
        } else {
            abort(404);
        }
    }

    public function blogs()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.blog', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        /**
         * Start fetch ads blocks
         */
        $advertisement = new Advertisement();

        $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_AFTER_BREADCRUMB,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );

        $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
            Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
            Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
            Advertisement::AD_STATUS_ENABLE
        );
        /**
         * End fetch ads blocks
         */


        $all_blogs = Blog::orderBy('title')->paginate(20);

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */

        return response()->view(
            $theme_view_path . 'blogs',
            compact(
                'all_blogs',
                'ads_before_breadcrumb',
                'ads_after_breadcrumb',
                'ads_before_content',
                'ads_after_content',
                'ads_before_sidebar_content',
                'ads_after_sidebar_content'
            )
        );
    }

    public function blog($blog_slug)
    {

        $settings = app('site_global_settings');

        $blog = Blog::where('blog_slug->' . app()->getLocale(), $blog_slug)->first();

        if($blog){
            /**
             * Start SEO
             */
            if (!$blog->meta_title)
                SEOMeta::setTitle(__('seo.frontend.blog', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
            else
                SEOMeta::setTitle($blog->meta_title,false);
            SEOMeta::setDescription($blog->meta_description);
            SEOMeta::setCanonical($blog->canonical ?? request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($blog->meta_keyword ?? $settings->setting_site_seo_home_keywords);
            /**
             * End SEO
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_POSTS_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */


            $all_blogs = Blog::orderBy('title')->paginate(20);
            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'blog',
                compact(
                    'blog',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content'
                )
            );
        }
        else
        {
            return abort(404);
        }

    }

    public function itemReviewsStore(Request $request, string $slug)
    {
        //$site_prefer_country_id = app('site_prefer_country_id');

        $blog = Blog::where('blog_slug->' . app()->getLocale(), $slug)->first();

        if ($blog) {

            $rating_body = $request->body;
            $overall_rating = $request->rating;
            $temporaryUserId = Session::get('temporary_user_id');

            if (!$temporaryUserId) {
                // If no temporary identifier exists, generate one and store it in the session
                $temporaryUserId = random_int(0, PHP_INT_MAX);
                Session::put('temporary_user_id', $temporaryUserId);

                // You might want to store additional temporary user information in the session
                Session::put('temporary_user_name', 'Temporary User');
            }
            // Create a temporary user instance
            $temporaryUser = new User;
            $temporaryUser->id = $temporaryUserId;

            $new_rating = $blog->rating([
                'body' => $rating_body,
                'rating' => $overall_rating,
                'approved' => 1, // This is optional and defaults to false
            ], $temporaryUser);

            return redirect()->back()->with('success', 'Rated Successfully');

        } else {
            abort(404);
        }
    }

    public function blogByTag(string $tag_slug)
    {
        $tag = \Canvas\Models\Tag::where('slug', $tag_slug)->first();

        if ($tag) {

            $settings = app('site_global_settings');

            /**
             * Start SEO
             */
            SEOMeta::setTitle(__('seo.frontend.blog-tag', ['tag_name' => $tag->name, 'site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
            SEOMeta::setDescription('');
            SEOMeta::setCanonical(request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
            /**
             * End SEO
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TAG_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            $data = [
                'posts' => \Canvas\Models\Post::whereHas('tags', function ($query) use ($tag_slug) {
                    $query->where('slug', $tag_slug);
                })->published()->orderByDesc('published_at')->paginate(10),
            ];

            $all_topics = \Canvas\Models\Topic::orderBy('name')->get();
            $all_tags = \Canvas\Models\Tag::orderBy('name')->get();

            $recent_posts = \Canvas\Models\Post::published()->orderByDesc('published_at')->take(5)->get();

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'blog.tag',
                compact(
                    'tag',
                    'data',
                    'all_topics',
                    'all_tags',
                    'recent_posts',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content'
                )
            );
        } else {
            abort(404);
        }
    }

    public function blogByTopic(string $topic_slug)
    {
        $topic = \Canvas\Models\Topic::where('slug', $topic_slug)->first();

        if ($topic) {

            $settings = app('site_global_settings');

            /**
             * Start SEO
             */
            SEOMeta::setTitle(__('seo.frontend.blog-topic', ['topic_name' => $topic->name, 'site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
            SEOMeta::setDescription('');
            SEOMeta::setCanonical(request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
            /**
             * End SEO
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_BLOG_TOPIC_PAGES,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            $data = [
                'posts' => \Canvas\Models\Post::whereHas('topic', function ($query) use ($topic_slug) {
                    $query->where('slug', $topic_slug);
                })->published()->orderByDesc('published_at')->paginate(10),
            ];

            $all_topics = \Canvas\Models\Topic::orderBy('name')->get();
            $all_tags = \Canvas\Models\Tag::orderBy('name')->get();

            $recent_posts = \Canvas\Models\Post::published()->orderByDesc('published_at')->take(5)->get();

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'blog.topic',
                compact(
                    'topic',
                    'data',
                    'all_topics',
                    'all_tags',
                    'recent_posts',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_content',
                    'ads_after_content',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content'
                )
            );
        } else {
            abort(404);
        }
    }

    public function blogPost(string $blog_slug)
    {
        $posts = \Canvas\Models\Post::with('tags', 'topic')->published()->get();
        $post = $posts->firstWhere('slug', $blog_slug);

        if (optional($post)->published) {

            $settings = app('site_global_settings');

            $post_meta = $post->meta;

            /**
             * Start SEO
             */
            SEOMeta::setTitle($post->title . ' - ' . (empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name));
            SEOMeta::setDescription($post_meta['description']);
            SEOMeta::setCanonical(request()->fullUrl()                                                                          );
            SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
            /**
             * End SEO
             */

            /**
             * Start fetch ads blocks
             */
            $advertisement = new Advertisement();

            $ads_before_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_breadcrumb = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_AFTER_BREADCRUMB,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_feature_image = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_FEATURE_IMAGE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_title = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_TITLE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_post_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_POST_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_post_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_AFTER_POST_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_comments = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_COMMENTS,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_share = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_BEFORE_SHARE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_share = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_AFTER_SHARE,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_before_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );

            $ads_after_sidebar_content = $advertisement->fetchAdvertisements(
                Advertisement::AD_PLACE_SINGLE_POST_PAGE,
                Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT,
                Advertisement::AD_STATUS_ENABLE
            );
            /**
             * End fetch ads blocks
             */

            $data = [
                'author' => $post->user,
                'post' => $post,
                'meta' => $post->meta,
            ];

            // IMPORTANT: This event must be called for tracking visitor/view traffic
            event(new \Canvas\Events\PostViewed($post));

            $all_topics = \Canvas\Models\Topic::orderBy('name')->get();
            $all_tags = \Canvas\Models\Tag::orderBy('name')->get();

            $recent_posts = \Canvas\Models\Post::published()->orderByDesc('published_at')->take(5)->get();

            // used for comment
            $blog_post = BlogPost::published()->get()->firstWhere('slug', $blog_slug);

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'blog.show',
                compact(
                    'data',
                    'all_topics',
                    'all_tags',
                    'blog_post',
                    'recent_posts',
                    'ads_before_breadcrumb',
                    'ads_after_breadcrumb',
                    'ads_before_feature_image',
                    'ads_before_title',
                    'ads_before_post_content',
                    'ads_after_post_content',
                    'ads_before_comments',
                    'ads_before_share',
                    'ads_after_share',
                    'ads_before_sidebar_content',
                    'ads_after_sidebar_content'
                )
            );
        } else {
            abort(404);
        }
    }

    public function jsonGetCitiesByState(int $state_id)
    {
        $state = State::findOrFail($state_id);
        $cities = $state->cities()->select('id', 'city_name')->orderBy('city_name')->get()->toJson();

        return response()->json($cities);
    }

    public function jsonGetStatesByCountry(int $country_id)
    {
        $country = Country::findOrFail($country_id);
        $states = $country->states()
            ->where('locale', app()->getLocale())
            ->select('id', 'state_name')
            ->orderBy('state_name')->get()->toJson();

        return response()->json($states);
    }

    public function jsonDeleteSettingLogoImage()
    {
        Gate::authorize('delete-setting-image-logo');

        $settings = app('site_global_settings');

        $settings->deleteLogoImage();

        return response()->json(['success' => 'setting logo image deleted.']);
    }

    public function jsonDeleteSettingFaviconImage()
    {
        Gate::authorize('delete-setting-image-favicon');

        $settings = app('site_global_settings');

        $settings->deleteFaviconImage();

        return response()->json(['success' => 'setting favicon image deleted.']);
    }

    public function jsonDeleteUserProfileImage(int $user_id)
    {
        $gate_user = User::findOrFail($user_id);

        Gate::authorize('delete-user-image-profile', $gate_user);

        $gate_user->deleteProfileImage();

        return response()->json(['success' => 'user profile image deleted.']);
    }

    public function jsonDeleteItemFeatureImage(int $item_id)
    {
        $item = Item::findOrFail($item_id);

        Gate::authorize('delete-item-image-feature', $item);

        $item->deleteItemFeatureImage();

        return response()->json(['success' => 'item feature image deleted.']);
    }

    public function jsonDeleteStateFeatureImage(int $state_id)
    {
        $state = State::findOrFail($state_id);

        $state->deleteStateFeatureImage();

        return response()->json(['success' => 'state feature image deleted.']);
    }

    public function jsonDeleteCategoryImage(int $category_id)
    {
        Gate::authorize('delete-category-image');

        $category = Category::findOrFail($category_id);

        $category->deleteCategoryImage();

        return response()->json(['success' => 'category image deleted.']);
    }

    public function jsonDeleteProductFeatureImage(int $product_id)
    {
        $product = Product::findOrFail($product_id);

        Gate::authorize('delete-product-image-feature', $product);

        $product->deleteProductFeatureImage();

        return response()->json(['success' => 'product feature image deleted.']);
    }

    public function jsonDeleteItemImageGallery(int $item_image_gallery_id)
    {
        $item_image_gallery = ItemImageGallery::findOrFail($item_image_gallery_id);

        Gate::authorize('delete-item-image-gallery', $item_image_gallery);

        if (Storage::disk('public')->exists('item/gallery/' . $item_image_gallery->item_image_gallery_name)) {
            Storage::disk('public')->delete('item/gallery/' . $item_image_gallery->item_image_gallery_name);
        }

        if (!empty($item_image_gallery->item_image_gallery_thumb_name) && Storage::disk('public')->exists('item/gallery/' . $item_image_gallery->item_image_gallery_thumb_name)) {
            Storage::disk('public')->delete('item/gallery/' . $item_image_gallery->item_image_gallery_thumb_name);
        }

        $item_image_gallery->delete();

        return response()->json(['success' => 'item image gallery deleted.']);
    }

    public function review(Request $request, string $item_slug)
    {

        $item = Item::where('item_slug', $item_slug)
            //->where('country_id', $site_prefer_country_id)
            ->where('item_status', Item::ITEM_PUBLISHED)
            /*  ->where('user_id', '!=', \Illuminate\Support\Facades\Auth::user()->id)
              ->whereNull('user_id')*/
            ->first();
        if ($item) {
            $request->validate([
                'title' => 'nullable|max:255',
                'rating' => 'required|numeric|max:5',
                'customer_service_rating' => 'nullable|numeric|max:5',
                'quality_rating' => 'nullable|numeric|max:5',
                'friendly_rating' => 'nullable|numeric|max:5',
                'pricing_rating' => 'nullable|numeric|max:5',
                'comment_form' => 'nullable|max:65535',
                'recommend' => 'nullable|numeric|max:1',
            ]);

            $login_user = Auth::user() ? Auth::user() : '';
            $rating_title = empty($request->title) ? '' : $request->title;
            $rating_body = $request->comment_form;
            $overall_rating = $request->rating;
            $customer_service_rating = $request->customer_service_rating;
            $quality_rating = $request->quality_rating;
            $friendly_rating = $request->friendly_rating;
            $pricing_rating = $request->pricing_rating;
            $recommend = $request->recommend == 1 ? Item::ITEM_REVIEW_RECOMMEND_YES : Item::ITEM_REVIEW_RECOMMEND_NO;
            $approved = $login_user ? $login_user->isAdmin() ? true : false : false;
            // Check if the user has a temporary identifier in the session

            $temporaryUserId = Session::get('temporary_user_id');

            if (!$temporaryUserId) {
                // If no temporary identifier exists, generate one and store it in the session
                $temporaryUserId = random_int(0, PHP_INT_MAX);
                Session::put('temporary_user_id', $temporaryUserId);

                // You might want to store additional temporary user information in the session
                Session::put('temporary_user_name', 'Temporary User');
            }
            // Create a temporary user instance
            $temporaryUser = new User;
            $temporaryUser->id = $temporaryUserId;

            $new_rating = $item->rating([
                'title' => $rating_title,
                'body' => $rating_body,
                'customer_service_rating' => $customer_service_rating,
                'quality_rating' => $quality_rating,
                'friendly_rating' => $friendly_rating,
                'pricing_rating' => $pricing_rating,
                'rating' => $overall_rating,
                'recommend' => $recommend,
                'approved' => 1, // This is optional and defaults to false
            ], $temporaryUser);
            return redirect()->back();
        } else {
            abort(404);
        }
    }

    public function jsonDeleteReviewImageGallery(int $review_image_gallery_id)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'user not login']);
        }

        $review_image_gallery = DB::table('review_image_galleries')
            ->where('id', $review_image_gallery_id)
            ->get();

        if ($review_image_gallery->count() == 0) {
            return response()->json(['error' => 'review image gallery not found.']);
        }

        $review_image_gallery = $review_image_gallery->first();

        $review_id = $review_image_gallery->review_id;

        $review = DB::table('reviews')
            ->where('id', $review_id)
            ->get();

        if ($review->count() == 0) {
            return response()->json(['error' => 'review not found.']);
        }

        $review = $review->first();

        if (Auth::user()->id != $review->author_id) {
            return response()->json(['error' => 'you cannot delete review image gallery which does not belong to you.']);
        }

        if (Storage::disk('public')->exists('item/review/' . $review_image_gallery->review_image_gallery_name)) {
            Storage::disk('public')->delete('item/review/' . $review_image_gallery->review_image_gallery_name);
        }

        if (Storage::disk('public')->exists('item/review/' . $review_image_gallery->review_image_gallery_thumb_name)) {
            Storage::disk('public')->delete('item/review/' . $review_image_gallery->review_image_gallery_thumb_name);
        }

        DB::table('review_image_galleries')
            ->where('id', $review_image_gallery_id)
            ->delete();

        return response()->json(['success' => 'review image gallery deleted.']);
    }

    public function ajaxLocationSave(string $lat, string $lng)
    {
        $settings = app('site_global_settings');

        $old_lat = session('user_device_location_lat', 0.0);
        $old_lng = session('user_device_location_lng', 0.0);

        $reload_page = false;
        if ($settings->setting_site_map_reload_homepage == Setting::SITE_MAP_RELOAD_HOMEPAGE_YES) {
            if (!empty($lat) && !empty($lng)) {
                $distance_meters = get_vincenty_great_circle_distance($old_lat, $old_lng, $lat, $lng);

                // if the location changed more than 50000m, ask reload page
                if ($distance_meters > 50000) {
                    $reload_page = true;
                }
            }
        }

        session(['user_device_location_lat' => $lat]);
        session(['user_device_location_lng' => $lng]);

        return response()->json([
            'message' => 'location lat & lng updated to session',
            'old_lat' => $old_lat,
            'old_lng' => $old_lng,
            'lat' => session('user_device_location_lat', ''),
            'lng' => session('user_device_location_lng', ''),
            'reload' => $reload_page,
        ]);
    }

    public function pricing(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('theme_alaadin.pricing.seo.pricing', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $site_name = empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name;

        $login_user = null;

        if (Auth::check()) {
            $login_user = Auth::user();
        }

        $plans = Plan::where('plan_status', Plan::PLAN_ENABLED)
            ->get();

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */

        return response()->view(
            $theme_view_path . 'pricing',
            compact('plans', 'login_user', 'site_name')
        );
    }

    public function subscripe(Request $request)
    {
        // Example usage
        $plan = Plan::find($request->plan_id)->get();
        $order = Order::create([
            'plan_id' => $request->plan_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'activity_name' => $request->activity_name,
            'activity_phone' => $request->activity_phone,
            'activity_address' => $request->activity_address,
            'activity_email' => $request->activity_email,
            'activity_description' => $request->activity_description,
            'activity' => $request->activity,
        ]);
        try {
            Mail::to($request->activity_email)->send(new VerifiedEmail($request->name, $order->id));
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'your email Is not valid');
        }

        return redirect()->back()->with('success', 'Sent Successfully, please verify your email address !');
    }

    public function verifyEmail($order_id)
    {
        $order = Order::find($order_id);
        $order->update(['verified' => Order::VERIFIED]);
        return redirect()->route('page.pricing')->with('success', 'verified');
    }

    public function termsOfService(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.terms-service', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        if ($settings->setting_page_terms_of_service_enable == Setting::TERM_PAGE_ENABLED) {
            $terms_of_service = $settings->setting_page_terms_of_service;

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'terms-of-service',
                compact('terms_of_service')
            );
        } else {
            return redirect()->route('page.home');
        }
    }

    public function privacyPolicy(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.frontend.privacy-policy', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(request()->fullUrl()                                                                          );
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        if ($settings->setting_page_privacy_policy_enable == Setting::PRIVACY_PAGE_ENABLED) {
            $privacy_policy = $settings->setting_page_privacy_policy;

            /**
             * Start initial blade view file path
             */
            $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
            $theme_view_path = $theme_view_path->getViewPath();
            /**
             * End initial blade view file path
             */

            return response()->view(
                $theme_view_path . 'privacy-policy',
                compact('privacy_policy')
            );
        } else {
            return redirect()->route('page.home');
        }
    }

    /**
     * Update site language by the request of website footer language selector
     * @param Request $request
     * @param string $user_prefer_language
     * @return RedirectResponse
     */
    public function updateLocale(Request $request, string $user_prefer_language)
    {
        if (Auth::check()) {
            $login_user = Auth::user();
            $login_user->user_prefer_language = $user_prefer_language;
            $login_user->save();
        } else {
            // save to language preference to session.
            Session::put('user_prefer_language', $user_prefer_language);
        }

        return redirect()->back();
    }


    /**
     * Update site country by the request of website footer country selector
     * @param Request $request
     * @param int $user_prefer_country_id
     * @return RedirectResponse
     */
    public function updateCountry(Request $request, int $user_prefer_country_id)
    {
        $country_exist = Country::find($user_prefer_country_id);
        if ($country_exist) {
            if (Auth::check()) {
                $login_user = Auth::user();
                $login_user->user_prefer_country_id = $country_exist->id;
                $login_user->save();
            } else {
                // save to language preference to session.
                Session::put('user_prefer_country_id', $country_exist->id);
            }
        }

        return redirect()->back();
    }

    /**
     * @param int $product_image_gallery_id
     * @return JsonResponse
     */
    public function jsonDeleteProductImageGallery(int $product_image_gallery_id)
    {
        $product_image_gallery = ProductImageGallery::findOrFail($product_image_gallery_id);

        Gate::authorize('delete-product-image-gallery', $product_image_gallery);

        if (Storage::disk('public')->exists('product/gallery/' . $product_image_gallery->product_image_gallery_name)) {
            Storage::disk('public')->delete('product/gallery/' . $product_image_gallery->product_image_gallery_name);
        }

        if (Storage::disk('public')->exists('product/gallery/' . $product_image_gallery->product_image_gallery_thumb_name)) {
            Storage::disk('public')->delete('product/gallery/' . $product_image_gallery->product_image_gallery_thumb_name);
        }

        $product_image_gallery->delete();

        return response()->json(['success' => 'product image gallery deleted.']);
    }

    private function getLatitude()
    {
        if (!empty(session('user_device_location_lat', ''))) {
            $latitude = session('user_device_location_lat', '');
        } else {
            $latitude = app('site_global_settings')->setting_site_location_lat;
        }

        return $latitude;
    }

    private function getLongitude()
    {
        if (!empty(session('user_device_location_lng', ''))) {
            $longitude = session('user_device_location_lng', '');
        } else {
            $longitude = app('site_global_settings')->setting_site_location_lng;
        }

        return $longitude;
    }

    // In YourController.php
    public function getData(Request $request)
    {
        // Fetch and return your data here (e.g., from a database).
        $query = $request->input('query');

        dd($query);

    }

    public function saveLocation(Request $request)
    {
        // Process and save the location data
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // Example: Saving to a database
        if (auth()->check())
            auth()->user()->update([
                'lat' => $latitude,
                'lng' => $longitude
            ]);
        else {
            \Session::remove('user_device_location_lat');
            \Session::remove('user_device_location_lng');
            \Session::push('user_device_location_lat', $latitude);
            \Session::push('user_device_location_lng', $longitude);

        }

        $cities = [];
        $placeSearchUrl = 'https://maps.googleapis.com/maps/api/place/textsearch/json';
        $geocodeUrl = 'https://maps.googleapis.com/maps/api/geocode/json';
        $apiKey = app('site_global_settings')->setting_site_map_google_api_key; // Replace with your Google API key
        $client = new Client();
        $response = $client->request('GET', $geocodeUrl, [
            'query' => [
                'latlng' => $latitude . ',' . $longitude,
                'language' => 'ar',
                'key' => $apiKey,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {

            $data = json_decode($response->getBody(), true);

            if ($data['status'] == 'OK') {
                $results = $data['results'];
                if (!empty($results[0]['address_components'])) {
                    $addressComponents = $results[0]['address_components'];

                    $city = '';
                    $state = '';
                    $country = '';

                    foreach ($addressComponents as $component) {
                        if (in_array('administrative_area_level_2', $component['types'])) {
                            $city = $component['long_name'];
                            array_push($cities, $city);
                            $response2 = $client->request('GET', $placeSearchUrl, [
                                'query' => [
                                    'query' => $city,
                                    'key' => $apiKey,
                                ],
                            ]);
                            $statusCode = $response->getStatusCode();
                            if ($statusCode == 200) {
                                $data = json_decode($response->getBody(), true);
                                if ($data['status'] == 'OK') {
                                    $results = $data['results'];
                                    foreach ($results as $result) {

                                        $addressComponents = $result['address_components'];
                                        foreach ($addressComponents as $component) {
                                            if (in_array('locality', $component['types'])) {
                                                $city = $component['long_name'];
                                                array_push($cities, $city);
                                            }
                                        }
                                    }

                                }
                            }


                        } elseif (in_array('administrative_area_level_1', $component['types'])) {
                            $state = $component['long_name'];
                        } elseif (in_array('country', $component['types'])) {
                            $country = $component['long_name'];
                        }
                    }
                    foreach ($cities as $key => $city) {
                        $cities[$key] = str_replace('‎', "", $cities[$key]);
                        foreach (explode(' ', $cities[$key]) as $key)
                            array_push($cities, $key);
                    }

                    $items = Item::query()->with('category', 'state', 'city')->whereHas('city', function ($q) use ($cities) {
                        $q->whereIn('city_name', $cities);
                    });

                    $items = $items->inRandomOrder()->take(4)->get();

                } else {
                    return response()->json(['error' => 'Address not found'], 404);
                }
            } else {
                return response()->json(['error' => 'Geocoder failed due to: ' . $data['status']], 400);
            }
        } else {
            return response()->json(['error' => 'Geocoder request failed with status code: ' . $statusCode], 400);
        }


        return response()->json($items);
    }

    public function getCities(Request $request)
    {
        $all_cities = City::query()
            ->where('locale', app()->getLocale());
        $all_states = State::query()
            ->where('locale', app()->getLocale());

        $all_cities->where(function ($query) use ($request) {
            $query->where('city_name', 'LIKE', $request['query'] . "%");

        });

        $all_states->where(function ($query) use ($request) {
            $query->where('state_name', 'LIKE', $request['query'] . "%");

        });

        return response()->json([
            'cities' => $all_cities->take(5)->get(),
            'states' => $all_states->take(5)->get()
        ]);
    }

    public function searchajax(Request $request)
    {
        $query1 = $request->input('query');
        $subCategory = Category::find($request->sub_category_id);
        $parentCategory = Category::find($request->category_id);
        // Perform the search query on your model
        $items = Item::query()->select('*')
            ->with('category.parent', 'state','city')
            ->selectRaw("LOCATE('$query1', item_title) as position")
            ->where('items.item_title', 'like', '%' . $query1 . '%')
            ->orderBy('position')->orderBy('item_title');
        if ($subCategory) {
            $items->where('category_id', $subCategory?->id);
        }
        if ($parentCategory) {
            $items->where('category_parent_id', $parentCategory?->id);
        }
        /* $cats = Category::query()->where(function ($query) use ($query1) {
             $query->where('category_name', 'LIKE', $query1 . "%");

         });*/

        return response()->json([
            'items' => $items->take(8)->get(),
//            'cats' => $cats->take(4)->get()
        ]);
    }

    public function getSubCategories(Request $request)
    {
        $categories = Category::where('category_parent_id', $request->category_id)->get();

        return response()->json([
            'data' => $categories,
        ]);
    }


}
