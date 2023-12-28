@extends('frontend.layouts.app')

@push('styles')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
    @endif

    <link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet"/>

@endpush

@section('content')


    <div class="mt-header-height">
        <div class="container">
            <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('page.home')}}">{{__('frontend.header.home')}}</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{ route('page.states') }}">{{ __('frontend.search.state-or-city') }}</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{ route('page.cities',$state->state_name) }}">{{ $state->state_name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $city->city_name }}
                        ( {{ $free_items->total() }} )
                    </li>

                </ol>
            </nav>
        </div>
    </div>


    <section class="category-swiper" style="min-height: 5rem;">
        <div class="container">
            <div class="swiper category-swiper__inner">
                <div class="swiper-wrapper">

                    @if($ads_before_content->count() > 0)
                        @foreach($ads_before_content as $ad)
                            <div class="swiper-slide">
                                <a

                                    class="category-slide__item  d-flex justify-content-center"
                                    @if($ad->item?->first())
                                        href="{{route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])}}"

                                    @endif
                                >

                                    <img style="width: 100%" src="{{asset('storage/ads/'.$ad->ad_image_horizontal)}}"/>
                                </a>

                            </div>
                        @endforeach
                    @else
                        <div class="ads categories__items__list__item__ads">ads</div>
                    @endif
                </div>
            </div>
        </div>
    </section>




    <h1 class="mx-5 mt-3">
        {{ $city->city_name }}
    </h1>

    <div class="site-section" style="margin-top:4rem">
        <div class="container">

            <div class="row">
                {{-- <div class="col-md-8 " style="margin:auto;margin-top: -5rem;">

                     <div class="overlap-category ">

                        --}}{{-- <div class="row align-items-stretch no-gutters">
                             @foreach( $filter_categories as $categories_key => $category )
                                 <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                                     @if($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_ICON)
                                         <a href="{{ route('page.category', ['parent_category_slug'=> $category->parent->category_slug,'category_slug'=>$category->category_slug]) }}"
                                            class="popular-category h-100">
                                 <span class="icon">
                                     <span>
                                         @if($category->category_icon)
                                             <i class="{{ $category->category_icon }}"></i>
                                         @else
                                             <i class="fa-solid fa-heart"></i>
                                         @endif
                                     </span>
                                 </span>

                                             <span class="caption d-block">{{ $category->category_name }}</span>
                                         </a>
                                     @elseif($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_IMAGE)
                                         <a href="{{ route('page.category', ['parent_category_slug'=> $category->parent->category_slug,'category_slug'=>$category->category_slug]) }}"
                                            class="popular-category h-100 image-category">
                                 <span class="icon image-category-span">
                                     <span>
                                         @if($category->category_image)
                                             <img
                                                 src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('category/'. $category->category_image) }}"
                                                 alt="Image" class="img-fluid rounded image-category-img">
                                         @else
                                             <img src="{{ asset('frontend/images/placeholder/category-image.webp') }}"
                                                  alt="Image" class="img-fluid rounded image-category-img">
                                         @endif
                                     </span>
                                 </span>
                                             <span
                                                 class="caption d-block image-category-caption">{{ $category->category_name }}</span>
                                         </a>
                                     @endif

                                 </div>
                             @endforeach
                         </div>--}}{{--
                     </div>

                 </div>--}}
                {{--<section class="mt-xl mb-xl activites position-relative">
                        <div class="container">
                            <div class="activites__items d-flex align-items-center flex-wrap gap-4">
                                <div class="activites__title-item d-flex align-items-center justify-content-center text-center">
                                    <h3 class="activites__title-item__title m-0 fw-bold">
                                        عناصر مشابهة
                                    </h3>
                                </div>
                                @if($paid_items->count() > 0)
                                @foreach($paid_items as $paid_items_key => $item)
                                <!-- item  -->
                                <div class="activites__item text-center">
                                    <a href="{{ route('page.item', [
                            'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                            'sub_category_slug' => $item->category->category_slug,
                            'state_slug' => $item->state->state_slug,
                            'item_slug' => $item->item_slug
                        ]) }}" class="h5 mb-0 primary-dark-color">{{str_limit($item->item_title,20)  }}</a>
                                </div>
                                @endforeach
                                @endif

                            </div>
                        </div>
                    </section>--}}
                <!-- Start Filter -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- start filters  -->
                        <div class="cateogries__filters">
                            <button type="button"
                                    class="categories__filters__toggle-btn d-sm-none border-0 p-0 bg-transparent">
                                <i class="las la-angle-right"></i>
                            </button>
                            <h3 class="fw-bold dark-color mb-md">{{ __('theme_alaadin.filter-filter-by') }}</h3>
                            <form method="GET"
                                  action="{{ route('page.city', ['state_slug' => $state->state_slug,'city_slug' => $city->city_slug]) }}"
                                  id="filter_form">

                                <!-- filters  -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class=" filter_category_div">
                                        <div class="col-12 col-md-12 pl-0">
                                            <label for="filter_category"
                                                   class="my-4">{{ __('theme_alaadin.filter-category') }}</label>
                                            <select
                                                class="selectpicker form-control @error('filter_category') is-invalid @enderror"
                                                name="filter_category" id="filter_category" data-live-search="true">
                                                <option
                                                    value="0" {{ request('filter_category') ? 'selected' : '' }}>{{ __('prefer_country.all-categories') }}</option>
                                                @foreach($filter_categories as $children_categories_key => $children_category)
                                                    <option
                                                        value="{{ $children_category->id }}" {{ request('filter_category') == $children_category->id ? 'selected' : '' }}>{{ $children_category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('filter_category')
                                            <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- filters  -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class=" filter_sub_category_div">
                                        <div class="col-12 col-md-12 pl-0">
                                            <label for="filter_sub_category"
                                                   class="my-4">{{ __('theme_alaadin.filter-sub-category') }}</label>
                                            <select
                                                class="selectpicker form-control @error('filter_sub_category') is-invalid @enderror"
                                                name="filter_sub_category" id="filter_sub_category"
                                                data-live-search="true">
                                                <option
                                                    value="0" {{ request('filter_sub_category') ? 'selected' : '' }}>{{ __('prefer_country.all-sub-categories') }}</option>
                                            </select>
                                            @error('filter_sub_category')
                                            <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 pl-0">
                                    <label for="sort_by" class="my-4">{{ __('theme_alaadin.filter-sort-by') }}</label>
                                    <select
                                        class="selectpicker form-control @error('filter_sort_by') is-invalid @enderror"
                                        name="filter_sort_by" id="filter_sort_by">
                                        <option
                                            value="{{ \App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED ? 'selected' : '' }}>{{ __('listings_filter.sort-by-newest') }}</option>
                                        <option
                                            value="{{ \App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED ? 'selected' : '' }}>{{ __('listings_filter.sort-by-oldest') }}</option>
                                        <option
                                            value="{{ \App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING ? 'selected' : '' }}>{{ __('listings_filter.sort-by-highest') }}</option>
                                        <option
                                            value="{{ \App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING ? 'selected' : '' }}>{{ __('listings_filter.sort-by-lowest') }}</option>
                                        <option
                                            value="{{ \App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST ? 'selected' : '' }}>{{ __('theme_alaadin.filter-sort-by-nearby-first') }}</option>
                                    </select>
                                    @error('filter_sort_by')
                                    <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <hr>

                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a class="btn btn-sm btn-outline-primary rounded"
                                           href="{{ route('page.city', ['state_slug' => $state->state_slug,'city_slug' => $city->city_slug]) }}">
                                            {{ __('theme_alaadin.filter-link-reset-all') }}
                                        </a>
                                        <a class="btn btn-sm btn-primary text-white rounded" id="filter_form_submit">
                                            {{ __('theme_alaadin.filter-button-filter-results') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- items  -->
                        <div class="cateogires__items flex-fill">
                            <!-- start order-area  -->
                            <div class="categories__orders d-flex justify-content-between align-content-center gap-4">
                                <div class="d-flex align-items-center gap-4">
                                    <button type="button"
                                            class="categories__orders__toggle-filter-btn bg-transparent p-0 border-0 d-xl-none">
                                        <i class="las la-filter"></i>
                                    </button>

                                </div>
                                <button class="btn btn-primary my-btn categories__orders__map-btn" type="button">
                                    <span><i class="las la-map-marker-alt"></i></span>
                                    <span>الخريطة</span>
                                </button>
                            </div>
                            <!-- start items  -->
                            <div class="categories__items__list">
                                <!-- start map  -->
                                <div id="mapid-box"
                                     class="categories__items__list__item categories__items__list__item-map">
                                </div>

                                {{--  @if($paid_items->count() > 0)
                                      @foreach($paid_items as $paid_items_key => $item)
                                          @include('frontend.partials.free-item-inline')
                                      @endforeach
                                  @endif--}}

                                @if($free_items->count() > 0)
                                    @foreach($free_items as $free_items_key => $item)
                                        @include('frontend.partials.free-item-inline')
                                    @endforeach
                                @endif
                            </div>
                            <div class="pagination center-block row justify-content-center w-100"
                                 style="float: right;width: auto;margin-top:2rem">
                                {{ $pagination->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>

                    <section class="category-swiper mb-3" style="min-height: 5rem;">
                        <div class="container">
                            <div class="swiper category-swiper__inner">
                                <div class="swiper-wrapper">

                                    @if($ads_after_content)
                                        @foreach($ads_after_content as $ad)
                                            <div class="swiper-slide">
                                                <a

                                                    class="category-slide__item  d-flex justify-content-center"
                                                    @if($ad->item?->first())
                                                        href="{{route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])}}"
                                                    @endif
                                                >

                                                    <img style="width: 100%"
                                                         src="{{asset('storage/ads/'.$ad->ad_image_horizontal)}}"/>
                                                </a>


                                            </div>
                                        @endforeach
                                    @else
                                        <div class="ads categories__items__list__item__ads mb-3">ads</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>


        @endsection

        @push('scripts')


            @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
                <!-- Make sure you put this AFTER Leaflet's CSS -->
                <script src="{{ asset('frontend/vendor/leaflet/leaflet.js') }}"></script>
            @endif


            @include('frontend.partials.bootstrap-select-locale')


            <script>
                $(document).ready(function () {

                    "use strict";

                    /**
                     * Start initial map box with OpenStreetMap
                     */

                    /**
                     * End initial map box with OpenStreetMap
                     */

                    /**
                     * Start show more/less
                     */
                    //this will execute on page load(to be more specific when document ready event occurs)


                    $(".show_more").on('click', function () {
                        //toggle elements with class .ty-compact-list that their index is bigger than 2
                        $(".filter_category_div:gt(7)").toggle();
                        //change text of show more element just for demonstration purposes to this demo
                        $(this).text() === "{{ __('listings_filter.show-more') }}" ? $(this).text("{{ __('listings_filter.show-less') }}") : $(this).text("{{ __('listings_filter.show-more') }}");
                    });


                    /**
                     * End show more/less
                     */


                    /**
                     * Start state selector in filter
                     */
                    $('#filter_state').on('change', function () {

                        if (this.value > 0) {
                            $('#filter_city').html("<option selected>{{ __('prefer_country.loading-wait') }}</option>");
                            $('#filter_city').selectpicker('refresh');

                            var ajax_url = '/ajax/cities/' + this.value;

                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            jQuery.ajax({
                                url: ajax_url,
                                method: 'get',
                                data: {},
                                success: function (result) {
                                    console.log(result);
                                    $('#filter_city').html("<option value='0'>{{ __('prefer_country.all-city') }}</option>");
                                    $('#filter_city').selectpicker('refresh');
                                    $.each(JSON.parse(result), function (key, value) {
                                        var city_id = value.id;
                                        var city_name = value.city_name;
                                        $('#filter_city').append('<option value="' + city_id + '">' + city_name + '</option>');
                                    });
                                    $('#filter_city').selectpicker('refresh');
                                }
                            });
                        } else {
                            $('#filter_city').html("<option value='0'>{{ __('prefer_country.all-city') }}</option>");
                            $('#filter_city').selectpicker('refresh');
                        }

                    });
                    /**
                     * End show more/less
                     */

                    @if(count($filter_categories) == 0)
                    if ($(".filter_category_div").length > 7) {
                        $(".filter_category_div:gt(7)").hide();
                        $(".show_more").show();
                    } else {
                        $(".show_more").hide();
                    }
                    @else
                    if ($(".filter_category_div").length > 7) {
                        $(".show_more").text("{{ __('listings_filter.show-less') }}");
                        $(".show_more").show();
                    } else {
                        $(".show_more").hide();
                    }
                    @endif

                    /**
                     * Start state selector in filter
                     */

                    /**
                     * End state selector in filter
                     */

                    /**
                     * Start filter form submit
                     */
                    $("#filter_form_submit").on('click', function () {
                        $("#filter_form").submit();
                    });
                    /**
                     * End filter form submit
                     */
                });
            </script>
            @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_GOOGLE_MAP)
                <script>


                    // Initial the google map
                    function initMap() {

                        @if(count($paid_items) || count($free_items))

                        var window_height = $(window).height();

                        $('#mapid-box').css('height', window_height + 'px');

                        var locations = [];

                        @foreach($paid_items as $paid_items_key => $paid_item)
                        @if($paid_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)

                        var popup_item_title = '{{ $paid_item->item_title }}';

                        @if($paid_item->item_address_hide)
                        var popup_item_address = '{{ $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code }}';
                        @else
                        var popup_item_address = '{{ $paid_item->item_address . ', ' . $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code }}';
                        @endif
                        var popup_item_get_direction = '<a target="_blank" href="' + '{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $paid_item->item_lat . ',' . $paid_item->item_lng }}' + '"><i class="fas fa-directions"></i> ' + '{{ __('google_map.get-directions') }}' + '</a>';

                        @if($paid_item->getCountRating() > 0)
                        var popup_item_rating = '{{ $paid_item->item_average_rating }}' + '/5';
                        var popup_item_reviews = ' - {{ $paid_item->getCountRating() }}' + ' ' + '{{ __('category_image_option.map.review') }}';
                        @else
                        var popup_item_rating = '';
                        var popup_item_reviews = '';
                        @endif

                        var popup_item_feature_image_link = '<img src="' + '{{ !empty($paid_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $paid_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp') }}' + '">';
                        var popup_item_link = '<a href="' + '{{ route('page.item', [
                        'category_slug' => $paid_item->category->parent?->category_slug ?? $paid_item->category->category_slug,
                        'sub_category_slug' => $paid_item->category->category_slug,
                        'state_slug' => $paid_item->state->state_slug,
                        'item_slug' => $paid_item->item_slug
                    ]) }}' + '" target="_blank">' + popup_item_title + '</a>';

                        locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", {{ $paid_item->item_lat }}, {{ $paid_item->item_lng }}]);

                        @endif
                        @endforeach

                        @foreach($free_items as $free_items_key => $free_item)
                        @if($free_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)

                        var popup_item_title = '{{ $free_item->item_title }}';

                        @if($free_item->item_address_hide)
                        var popup_item_address = '{{ $free_item->city->city_name . ', ' . $free_item->state->state_name . ' ' . $free_item->item_postal_code }}';
                        @else
                        var popup_item_address = '{{ $free_item->item_address . ', ' . $free_item->city->city_name . ', ' . $free_item->state->state_name . ' ' . $free_item->item_postal_code }}';
                        @endif
                        var popup_item_get_direction = '<a target="_blank" href="' + '{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $free_item->item_lat . ',' . $free_item->item_lng }}' + '"><i class="fas fa-directions"></i> ' + '{{ __('google_map.get-directions') }}' + '</a>';

                        @if($free_item->getCountRating() > 0)
                        var popup_item_rating = '{{ $free_item->item_average_rating }}' + '/5';
                        var popup_item_reviews = ' - {{ $free_item->getCountRating() }}' + ' ' + '{{ __('category_image_option.map.review') }}';
                        @else
                        var popup_item_rating = '';
                        var popup_item_reviews = '';
                        @endif

                        var popup_item_feature_image_link = '<img src="' + '{{ !empty($free_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $free_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp') }}' + '">';
                        var popup_item_link = '<a href="' + '{{ route('page.item', [
                        'category_slug' => $free_item->category->parent?->category_slug ?? $free_item->category->category_slug,
                        'sub_category_slug' => $free_item->category->category_slug,
                        'state_slug' => $free_item->state->state_slug,
                        'item_slug' => $free_item->item_slug
                    ]) }}' + '" target="_blank">' + popup_item_title + '</a>';

                        locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", {{ $free_item->item_lat }}, {{ $free_item->item_lng }}]);

                        @endif
                        @endforeach

                        var infowindow = null;
                        var infowindow_hover = null;

                        if (locations.length === 0) {
                            // Destroy mapid-box DOM since no regular listings found
                            $("#mapid-box").remove();
                        } else {
                            var map = new google.maps.Map(document.getElementById('mapid-box'), {
                                zoom: 12,
                                //center: new google.maps.LatLng(-33.92, 151.25),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            });

                            //create empty LatLngBounds object
                            var bounds = new google.maps.LatLngBounds();
                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;

                            for (i = 0; i < locations.length; i++) {
                                marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                    map: map
                                });

                                //extend the bounds to include each marker's position
                                bounds.extend(marker.position);

                                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                    return function () {

                                        if (infowindow_hover) {
                                            infowindow_hover.close();
                                        }

                                        infowindow.setContent(locations[i][0]);
                                        infowindow.open(map, marker);
                                    }
                                })(marker, i));
                            }

                            //now fit the map to the newly inclusive bounds
                            map.fitBounds(bounds);

                            var listener = google.maps.event.addListener(map, "idle", function () {
                                if (map.getZoom() > 12) map.setZoom(12);
                                google.maps.event.removeListener(listener);
                            });

                            // Start google map hover event
                            $(".listing_for_map_hover").on('mouseover', function () {

                                var map_item_lat = this.getAttribute("data-map-lat");
                                var map_item_lng = this.getAttribute("data-map-lng");
                                var map_item_title = this.getAttribute("data-map-title");
                                var map_item_address = this.getAttribute("data-map-address");

                                var map_item_rating = '';
                                var map_item_reviews = parseInt(this.getAttribute("data-map-reviews"));

                                if (map_item_reviews > 0) {
                                    map_item_rating = this.getAttribute("data-map-rating") + '/5';
                                    map_item_reviews = ' - ' + this.getAttribute("data-map-reviews") + ' ' + '{{ __('category_image_option.map.review') }}';
                                } else {
                                    map_item_rating = '';
                                    map_item_reviews = '';
                                }

                                var map_item_link = '<a href="' + this.getAttribute("data-map-link") + '" target="_blank">' + map_item_title + '</a>';
                                var map_item_feature_image_link = '<img src="' + this.getAttribute("data-map-feature-image-link") + '">';
                                var map_item_get_direction = '<a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + map_item_lat + ',' + map_item_lng + '"><i class="fas fa-directions"></i> ' + '{{ __('google_map.get-directions') }}' + '</a>';

                                if (map_item_lat !== '' && map_item_lng !== '') {
                                    var center = new google.maps.LatLng(map_item_lat, map_item_lng);
                                    var contentString = "<div class='google_map_scrollFix'>" + map_item_feature_image_link + "<br><br>" + map_item_link + "<br>" + map_item_rating + map_item_reviews + "<br>" + map_item_address + "<br>" + map_item_get_direction + "</div>";

                                    if (infowindow_hover) {
                                        infowindow_hover.close();
                                    }
                                    if (infowindow) {
                                        infowindow.close();
                                    }

                                    infowindow_hover = new google.maps.InfoWindow({
                                        content: contentString,
                                        position: center,
                                        pixelOffset: new google.maps.Size(0, -45)
                                    });

                                    infowindow_hover.open({
                                        map,
                                        shouldFocus: true,
                                    });
                                }
                            });
                            // End google map hover event
                        }
                        @endif
                    }

                </script>
                <script>
                    const mapItem = document.querySelector(".categories__items__list__item-map");
                    const mapBtn = document.querySelector(".categories__orders__map-btn");
                    let mapIsShown = false;
                    if (mapBtn) {
                        mapBtn.addEventListener("click", () => {
                            mapIsShown = !mapIsShown;

                            mapItem.classList.toggle("active");

                            if (mapIsShown) {
                                mapBtn.innerHTML = `
                        <span><i class="las la-times"></i></span>
                        <span>اخفاء الخريطة</span>
                        `;
                            } else {
                                mapBtn.innerHTML = `
                        <span><i class="las la-map-marker-alt"></i></span>
                        <span>الخريطة</span>
                        `;
                            }
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js??v=quarterly&key={{ $site_global_settings->setting_site_map_google_api_key }}&callback=initMap"></script>
                <script>

                    function getSubs(category_id) {
                        var ajax_url = '{{route('getSubCategories')}}';
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        jQuery.ajax({
                            url: ajax_url,
                            method: 'get',
                            data: {'category_id': category_id},
                            success: function (result) {
                                console.log(result.data);
                                $('#filter_sub_category').html("<option value='0'>{{ __('prefer_country.all-sub-categories') }}</option>");
                                $('#filter_sub_category').selectpicker('refresh');
                                $.each(result.data, function (key, value) {
                                    var seleced = null;
                                    var sub_category_id = value.id;
                                    var sub_category_name = value.category_name;
                                    @if(request('filter_sub_category'))
                                        if({{request('filter_sub_category')}} === sub_category_id)
                                            seleced = 'selected' ;
                                    @endif
                                    $('#filter_sub_category').append('<option value="' + sub_category_id +'"' +
                                        seleced +
                                        '>' + sub_category_name + '</option>');
                                });
                                $('#filter_sub_category').selectpicker('refresh');
                            }
                        });
                    }

                    $(document).ready(function () {
                        $('#filter_category').on('change', function () {
                            var category_id = $(this).val();
                            getSubs(category_id);
                        });
                        @if(request('filter_category'))
                        getSubs({{request('filter_category')}});
                        @endif
                    });
                </script>
    @endif


    @endpush
