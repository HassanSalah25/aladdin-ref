@extends('frontend.layouts.app')

@push('styles')
<link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet" />
@endpush

@section('content')

<section class="categories pt pb mt-header-height">
    <div class="container">
        <div class="d-flex gap-4 position-relative overflow-hidden">
            <!-- items  -->
            <div class="cateogires__items flex-fill">
                <!-- start order-area  -->
                <div class="categories__orders d-flex flex-column mb-5 flex-md-row justify-content-between align-items-md-center gap-4">
                    <form class="d-flex flex-column flex-lg-row align-items-lg-center gap-4"
                            method="get" action="{{ request()->fullUrl() }}">
                        <div class="d-flex gap-3 align-items-center categories__orders__item">
                            <label for="selectOrderBy" class="white-space-nowrap">
                                <i class="las la-filter"></i>
                                <span>{{__('listings_filter.sort-by')}}</span>
                            </label>

                            <select class="form-select border-0" id="selectOrderBy" name="filter_sort_by">
                                <option value="">___</option>
{{--                                <option value="max_price" {{ 'max_price' == request('filter_sort_by') ? 'selected' : '' }}>{{__('listings_filter.sort-by-price-high')}}</option>--}}
                                <option value="7" {{ ("بالقرب مني" == request('search_city_state') || 7 == request('filter_sort_by')) ? 'selected' : '' }}>{{__('frontend.homepage.nearby-listings')}}</option>
                            </select>
                        </div>
                        @if(request('search_city_state') != 'بالقرب مني')
                            <div class="d-flex gap-3 align-items-center categories__orders__item">
                                <label for="selectOrderBy" class="white-space-nowrap">
                                    <i class="las la-filter"></i>
                                    <span>{{__('theme_alaadin.filter-state')}}</span>
                                </label>

                                <select class="form-select border-0" id="selectOrderBy" name="filter_state">
                                    <option value="">{{__('prefer_country.all-state')}}</option>
                                    {{--                                <option value="max_price" {{ 'max_price' == request('filter_sort_by') ? 'selected' : '' }}>{{__('listings_filter.sort-by-price-high')}}</option>--}}
                                    @foreach($all_states as $all_states_key => $state)
                                        <option value="{{ $state->id }}" {{ $filter_state == $state->id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex gap-3 align-items-center categories__orders__item">
                                <label for="selectOrderBy" class="white-space-nowrap">
                                    <i class="las la-filter"></i>
                                    <span>{{__('theme_alaadin.filter-city')}}</span>
                                </label>

                                <select class="form-select border-0" id="selectOrderBy" name="filter_city">
                                    <option value="" {{ empty($filter_city) ? 'selected' : '' }}>{{ __('prefer_country.all-city') }}</option>
                                    {{--                                <option value="max_price" {{ 'max_price' == request('filter_sort_by') ? 'selected' : '' }}>{{__('listings_filter.sort-by-price-high')}}</option>--}}
                                    @foreach($all_cities as $all_cities_key => $city)
                                        <option value="{{ $city->id }}" {{ $filter_city == $city->id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
{{--                        <div class="d-flex gap-3 align-items-center categories__orders__item">--}}
{{--                            <label for="selectNumberOfProducts" class="white-space-nowrap">--}}
{{--                                <i class="las la-briefcase"></i>--}}
{{--                                <span>{{__('listings_filter.categories')}}</span>--}}
{{--                            </label>--}}
{{--                            <select class="form-select border-0" id="selectNumberOfProducts" name="search_category">--}}
{{--                                <option value="all">__</option>--}}
{{--                                @foreach($search_categories as $category)--}}
{{--                                    <option value="{{$category->id}}"--}}
{{--                                    {{ $category->id == request('search_category') ? 'selected' : '' }}--}}
{{--                                    >{{$category->category_name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                       {{-- <div class="d-flex gap-3 align-items-center categories__orders__item">
                            <label for="selectNumberOfProducts" class="white-space-nowrap">
                                <i class="las la-briefcase"></i>
                                <span>{{__('backend.city.city')}}</span>
                            </label>
                            <select class="form-select border-0" id="selectNumberOfProducts" name="filter_city_2">
                                <option value="all">__</option>
                                @if($cities)
                                    @foreach($cities as $city)
                                        <option value="{{$city?->city_name}}"
                                            {{ ($city?->city_name == (request('filter_city_2') ?? request('search_state') ?? request('search_city'))) ? 'selected' : '' }}
                                        >{{$city?->city_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>--}}
                        <div id="dropdown-parent-id" class="dropdown-parent what_input_field_tpm">
                            <div id="search-by-id" class="autocomplete search-by" style="height: 44px;">
                            <img class="search-img lazyloaded" data-src="" alt=""
                                 src="{{asset('assets/icons8-search-50.png')}}" style="width: 8%;">
                            <input autocomplete="off" name="search_query" type="text" id="search-what"
                                   value="{{$search_query}}"
                                       placeholder="ابحث بـ اسم العمل، النشاط التجاري، العلامة التجارية أو كلمة بحث ..."
                                   class="form-control px-3 autocomplete search-query-what what_original_top"
                                   style="padding: 5px 0px 5px 0px;" >
                            <img id="loading-search-what" class="loading-search-img-ar lazyload"
                                 data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                            <div id="search-whatautocomplete-list" class="autocomplete-items fixed-height"></div>
                        </div>
                        </div>
                        <button type="submit"
                                class="categories__orders__layout-btn px-1 d-grid row align-items-center text-light" data-layout="4">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                    <div class="d-flex align-items-center gap-4">

<!--                        <div class="d-flex align-items-center gap-3">
                            <h6 class="m-0 dark-color fw-bold categories__orders__layout-title white-space-nowrap d-none d-sm-block">
                                طريقة العرض
                            </h6>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="categories__orders__layout-btn d-grid" data-layout="4">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </button>
                                <button type="button" class="categories__orders__layout-btn d-grid" data-layout="3">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>-->
<!--
                        <button class="btn btn-primary my-btn categories__orders__map-btn" type="button">
                            <span><i class="las la-map-marker-alt"></i></span>
                            <span>الخريطة</span>
                        </button>-->
                    </div>
                </div>

                <!-- **************************                        ******************************  -->
                <!-- ************************** start activites-section   ******************************  -->
                <!-- **************************                        ******************************  -->
                {{--<section class="mt-xl mb-xl activites position-relative">
                    <div class="container">
                        <div class="activites__items d-flex align-items-center flex-wrap gap-4">
                            <div class="activites__title-item d-flex align-items-center justify-content-center text-center">
                                <h3 class="activites__title-item__title m-0 fw-bold">
                                    عناصر مشابهة
                                </h3>
                            </div>
                              @foreach($categories as $categories_key => $category)
                          <div data-aos="" data-aos-duration="" class="activites__item d-flex flex-column align-items-center justify-content-end gap-3 text-center">

                            @if($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_ICON)
                            @if($category->category_icon)
                            <i class="{{ $category->category_icon }}"></i>
                            @else
                            <i class="fa-solid fa-heart"></i>
                            @endif
                            <h5 class="fw-bold mb-0 primary-dark-color">{{ $category->category_name }}</h5>

                            @elseif($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_IMAGE)
                            <div data-aos="" data-aos-duration="" class="activites__item d-flex flex-column align-items-center justify-content-end gap-3 text-center">

                              @if($category->category_image)
                              <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('category/'. $category->category_image) }}" alt="restaurant" class="img-fluid" />
                              @else
                              <img src="{{ asset('frontend/images/placeholder/category-image.webp') }}" alt="restaurant" class="img-fluid" />
                              @endif
                              <h5 class="fw-bold mb-0 primary-dark-color">{{ $category->category_name }}</h5>
                            </div>
                            @endif
                          </div>
                          @endforeach


                        </div>
                    </div>
                </section>--}}
                <!-- **************************                      ******************************  -->
                <!-- ************************** end activites-section   ******************************  -->
                <!-- **************************                      ******************************  -->

                <h2 class="text-center mb-lg dark-color fw-normal">
                    نتائج البحث عن
                    @if($search_query)
                    <span class="fw-bold primary-color">“{{$search_query}}"</span><br>
                    @endif
                    <span class="fw-bold"> ( {{$free_items->total()}} )</span>
                </h2>
                <!-- start items  -->
                <div class="categories__items__list">
                    @if($ads_before_content->count() > 0)
                    @foreach($ads_before_content as $ad)
                        <section class="category-swiper" style="min-height: 5rem;">
                            <div class="container">
                                <div class="swiper category-swiper__inner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="category-slide__item d-flex justify-content-center">
                                                <img src="{{ asset('storage/ads/'.$ad->ad_image_horizontal) }}" alt="category slider" class="img-fluid" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
                                </div>
                            </div>
                        </section>
                        @endforeach
                    @else
                        <div class="ads categories__items__list__item__ads">ads</div>
                    @endif
                    <!-- start map  -->
                    <div id="mapid-box" class="categories__items__list__item categories__items__list__item-map">
                    </div>

                    @if($free_items->count() > 0)
                    @foreach($free_items as $free_items_key => $item)
                    <!-- <div class="col-lg-6"> -->
                    @include('frontend.partials.free-item-inline')
                    <!-- </div> -->
                    @endforeach
                    @endif
                    <!-- item  -->


                        @if($ads_after_content)

                            @foreach($ads_after_content as $ad)
                                <section class="category-swiper" style="min-height: 5rem;">
                                    <div class="container">
                                        <div class="swiper category-swiper__inner">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    @if(!$ad->item?->first())
                                                        <div class="category-slide__item  d-flex justify-content-center">
                                                            <img src="{{ asset('storage/ads/'.$ad->ad_image_horizontal) }}" alt="category slider" class="img-fluid" />
                                                        </div>
                                                    @else
                                                        <a  class="category-slide__item  d-flex justify-content-center" href="{{route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])}}" class="ads">

                                                            <img src="{{asset('storage/ads/'.$ad->ad_image_horizontal)}}"/>
                                                        </a>

                                                    @endif
                                                </div>

                                            </div>
                                            <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        @else
                            <div class="ads categories__items__list__item__ads">ads</div>
                        @endif
                </div>
                <div class="pagination row justify-content-center">
                    {{ $pagination->appends(request()->query())->links() }}
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#search-what').blur(function (event) {
                var check = 0;
                var parentDiv = $('#search-whatautocomplete-list');

                $('body').on('click', function (event) {
                    if (!$(event.target).is(parentDiv)) {
                        parentDiv.empty();
                    }

                })
            })
            $('#search-what').on('input', function () {
                var query = $('#search-what').val();
                var resultsContainer = $('#search-whatautocomplete-list');
                if (query == '') {
                    resultsContainer.empty();
                } else if ($(this).val() != '') {
                    $.ajax({
                        url: "{{ route('searchajax') }}",
                        type: "GET",
                        data: {query: query},
                        success: function (response) {
                            var resultsContainer = $('#search-whatautocomplete-list');
                            resultsContainer.empty();
                            if (response['cats'].length > 0) {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                                $.each(response['cats'], function (index, result) {

                                    resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/category/' + result['category_name'] + '/البحث">' + result['category_name'] + '</a>');
                                });


                            } else {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                                resultsContainer.append('<p>No results found.</p>');
                            }
                            if (response['items'].length > 0) {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                                $.each(response['items'], function (index, result) {

                                    resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/listing/' + result['id'] + '/البحث">' + result['item_title'] + '</a>');
                                });


                            } else {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                                resultsContainer.append('<p>No results found.</p>');
                            }
                        }
                    });
                }
            });
        });
    </script>
<script src="{{ asset('frontend/js/categories.js')}}"></script>

@if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_GOOGLE_MAP)

            <script async defer src="https://maps.googleapis.com/maps/api/js??v=quarterly&key={{ $site_global_settings->setting_site_map_google_api_key }}&callback=initMap"></script>
            <script>
                // Initial the google map
                function initMap() {

                    @if(count($paid_items) || count($free_items))

                    var window_height = $(window).height();

                    $('#mapid-box').css('height', window_height + 'px');

                    var locations = [];

                    @foreach($paid_items as $paid_items_key =>  $paid_item)
                    @if($paid_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)

                    var popup_item_title = '{{ $paid_item->item_title }}';

                    @if($paid_item->item_address_hide)
                    var popup_item_address = '{{ $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code }}';
                    @else
                    var popup_item_address = '{{ $paid_item->item_address . ', ' . $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code }}';
                    @endif
                    var popup_item_get_direction = '<a target="_blank" href="'+ '{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $paid_item->item_lat . ',' . $paid_item->item_lng }}' +'"><i class="fas fa-directions"></i> '+ '{{ __('google_map.get-directions') }}' +'</a>';

                    @if($paid_item->getCountRating() > 0)
                    var popup_item_rating = '{{ $paid_item->item_average_rating }}' + '/5';
                    var popup_item_reviews = ' - {{ $paid_item->getCountRating() }}' + ' ' + '{{ __('category_image_option.map.review') }}';
                    @else
                    var popup_item_rating = '';
                    var popup_item_reviews = '';
                    @endif

                    var popup_item_feature_image_link = '<img src="'+ '{{ !empty($paid_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $paid_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp') }}' +'">';
                    var popup_item_link = '<a href="' + '{{ route('page.item', [
                        'category_slug' => $paid_item->category->parent?->category_slug ?? $paid_item->category->category_slug,
                        'sub_category_slug' => $paid_item->category->category_slug,
                        'state_slug' => $paid_item->state->state_slug,
                        'item_slug' => $paid_item->item_slug
                    ]) }}' + '" target="_blank">' + popup_item_title + '</a>';

                    locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", {{ $paid_item->item_lat }}, {{ $paid_item->item_lng }} ]);

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
                    var popup_item_get_direction = '<a target="_blank" href="'+ '{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $free_item->item_lat . ',' . $free_item->item_lng }}' +'"><i class="fas fa-directions"></i> '+ '{{ __('google_map.get-directions') }}' +'</a>';

                    @if($free_item->getCountRating() > 0)
                    var popup_item_rating = '{{ $free_item->item_average_rating }}' + '/5';
                    var popup_item_reviews = ' - {{ $free_item->getCountRating() }}' + ' ' + '{{ __('category_image_option.map.review') }}';
                    @else
                    var popup_item_rating = '';
                    var popup_item_reviews = '';
                    @endif

                    var popup_item_feature_image_link = '<img src="'+ '{{ !empty($free_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $free_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp') }}' +'">';
                    var popup_item_link = '<a href="' + '{{ route('page.item', [
                        'category_slug' => $free_item->category->parent?->category_slug ?? $free_item->category->category_slug,
                        'sub_category_slug' => $free_item->category->category_slug,
                        'state_slug' => $free_item->state->state_slug,
                        'item_slug' => $free_item->item_slug
                    ]) }}' + '" target="_blank">' + popup_item_title + '</a>';

                    locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", {{ $free_item->item_lat }}, {{ $free_item->item_lng }} ]);

                    @endif
                    @endforeach

                    var infowindow = null;
                    var infowindow_hover = null;

                    if(locations.length === 0)
                    {
                        // Destroy mapid-box DOM since no regular listings found
                        $("#mapid-box").remove();
                    }
                    else
                    {
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

                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {

                                    if(infowindow_hover)
                                    {
                                        infowindow_hover.close();
                                    }

                                    infowindow.setContent(locations[i][0]);
                                    infowindow.open(map, marker);
                                }
                            })(marker, i));
                        }

                        //now fit the map to the newly inclusive bounds
                        map.fitBounds(bounds);

                        var listener = google.maps.event.addListener(map, "idle", function() {
                            if (map.getZoom() > 12) map.setZoom(12);
                            google.maps.event.removeListener(listener);
                        });

                        // Start google map hover event
                        $(".listing_for_map_hover").on('mouseover', function() {

                            var map_item_lat = this.getAttribute("data-map-lat");
                            var map_item_lng = this.getAttribute("data-map-lng");
                            var map_item_title = this.getAttribute("data-map-title");
                            var map_item_address = this.getAttribute("data-map-address");

                            var map_item_rating = '';
                            var map_item_reviews = parseInt(this.getAttribute("data-map-reviews"));

                            if(map_item_reviews > 0)
                            {
                                map_item_rating = this.getAttribute("data-map-rating") + '/5';
                                map_item_reviews = ' - ' + this.getAttribute("data-map-reviews") + ' ' + '{{ __('category_image_option.map.review') }}';
                            }
                            else
                            {
                                map_item_rating = '';
                                map_item_reviews = '';
                            }

                            var map_item_link = '<a href="' + this.getAttribute("data-map-link") + '" target="_blank">' + map_item_title + '</a>';
                            var map_item_feature_image_link = '<img src="'+ this.getAttribute("data-map-feature-image-link") + '">';
                            var map_item_get_direction = '<a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + map_item_lat + ',' + map_item_lng + '"><i class="fas fa-directions"></i> '+ '{{ __('google_map.get-directions') }}' +'</a>';

                            if(map_item_lat !== '' && map_item_lng !== '')
                            {
                                var center = new google.maps.LatLng(map_item_lat, map_item_lng);
                                var contentString = "<div class='google_map_scrollFix'>" + map_item_feature_image_link + "<br><br>" + map_item_link + "<br>" + map_item_rating + map_item_reviews + "<br>" + map_item_address + "<br>" + map_item_get_direction + "</div>";

                                if(infowindow_hover)
                                {
                                    infowindow_hover.close();
                                }
                                if(infowindow)
                                {
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
    @endif


    @endpush
