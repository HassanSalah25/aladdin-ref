@extends('frontend.layouts.app')

@push('styles')

@if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
<link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet" />
@endif

<link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet" />

@endpush

@section('content')


<div class="mt-header-height">
    <div class="container">
        <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{route('page.home')}}">{{__('frontend.header.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{__('categories.categories')}}
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="category-swiper" style="min-height: 5rem;">
    <div class="container">
        <div class="swiper category-swiper__inner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="category-slide__item">
                        <img src="{{ asset('frontend/images/placeholder/full-image-slider-placeholder.png') }}" alt="category slider" class="img-fluid" />
                    </div>
                </div>

            </div>
            <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
        </div>
    </div>
</section>



<div class="site-section" style="margin-top:4rem">
    <div class="container">

        @if($categories->count() > 0)
        <div class="row">
            <div class="col-md-8 " style="margin:auto;margin-top: -5rem;">
                <div class="overlap-category ">

                    <div class="row align-items-stretch no-gutters">
                        @foreach( $categories as $categories_key => $category )
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            @if($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_ICON)
                            <a href="{{ route('page.category', $category->category_slug) }}" class="popular-category h-100">
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
                            <a href="{{ route('page.category', $category->category_slug) }}" class="popular-category h-100 image-category">
                                <span class="icon image-category-span">
                                    <span>
                                        @if($category->category_image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('category/'. $category->category_image) }}" alt="Image" class="img-fluid rounded image-category-img">
                                        @else
                                        <img src="{{ asset('frontend/images/placeholder/category-image.webp') }}" alt="Image" class="img-fluid rounded image-category-img">
                                        @endif
                                    </span>
                                </span>
                                <span class="caption d-block image-category-caption">{{ $category->category_name }}</span>
                            </a>
                            @endif

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Start Filter -->
        <div class="row">
            <div class="col-md-3">
                <!-- start filters  -->
                <div class="cateogries__filters">
                    <button type="button" class="categories__filters__toggle-btn d-sm-none border-0 p-0 bg-transparent">
                        <i class="las la-angle-right"></i>
                    </button>
                    <h3 class="fw-bold dark-color mb-md">{{ __('theme_alaadin.filter-filter-by') }}</h3>
                    <form method="GET" action="{{ route('page.categories') }}" id="filter_form">

                        <!-- filters  -->
                        <div class="row" style="line-height: 4rem;">
                            <div class="col-12 col-md-12 pl-0">
                                <label for="filter_state">{{ __('theme_alaadin.filter-state') }}</label>
                                <select class="selectpicker form-control @error('filter_state') is-invalid @enderror" name="filter_state" id="filter_state" data-live-search="true">
                                    <option value="0" {{ empty($filter_state) ? 'selected' : '' }}>{{ __('prefer_country.all-state') }}</option>
                                    @foreach($all_states as $all_states_key => $state)
                                    <option value="{{ $state->id }}" {{ $filter_state == $state->id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                    @endforeach
                                </select>
                                @error('filter_state')
                                <span class="invalid-tooltip">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-12 pl-0">
                                <label for="filter_city">{{ __('theme_alaadin.filter-city') }}</label>
                                <select class="selectpicker form-control @error('filter_city') is-invalid @enderror" name="filter_city" id="filter_city" data-live-search="true">
                                    <option value="0" {{ empty($filter_city) ? 'selected' : '' }}>{{ __('prefer_country.all-city') }}</option>
                                    @foreach($all_cities as $all_cities_key => $city)
                                    <option value="{{ $city->id }}" {{ $filter_city == $city->id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                                @error('filter_city')
                                <span class="invalid-tooltip">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-12 pl-0">
                                <label for="sort_by">{{ __('theme_alaadin.filter-sort-by') }}</label>
                                <select class="selectpicker form-control @error('filter_sort_by') is-invalid @enderror" name="filter_sort_by" id="filter_sort_by">
                                    <option value="{{ \App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED ? 'selected' : '' }}>{{ __('listings_filter.sort-by-newest') }}</option>
                                    <option value="{{ \App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED ? 'selected' : '' }}>{{ __('listings_filter.sort-by-oldest') }}</option>
                                    <option value="{{ \App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING ? 'selected' : '' }}>{{ __('listings_filter.sort-by-highest') }}</option>
                                    <option value="{{ \App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING ? 'selected' : '' }}>{{ __('listings_filter.sort-by-lowest') }}</option>
                                    <option value="{{ \App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST }}" {{ $filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST ? 'selected' : '' }}>{{ __('theme_alaadin.filter-sort-by-nearby-first') }}</option>
                                </select>
                                @error('filter_sort_by')
                                <span class="invalid-tooltip">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <hr>

                        @if($categories->count() > 0)

                        <div class="row">

                            @foreach($categories as $children_categories_key => $children_category)
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="filter_category_div">
                                    <input {{ in_array($children_category->id, $filter_categories) ? 'checked' : '' }} name="filter_categories[]" class="form-check-input" type="checkbox" value="{{ $children_category->id }}" id="filter_categories_{{ $children_category->id }}">
                                    <label class="form-check-label" for="filter_categories_{{ $children_category->id }}">
                                        {{ $children_category->category_name }}
                                    </label>
                                </div>
                            </div>
                            @error('filter_categories')
                            <span class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="javascript:;" class="show_more text-sm">{{ __('listings_filter.show-more') }}</a>
                            </div>
                        </div>
                        <hr>

                        @endif

                        <div class="row">
                            <div class="col-12 text-right">
                                <a style="" class="btn btn-sm btn-outline-primary rounded" href="{{ route('page.category', ['category_slug' => $category->category_slug]) }}">
                                    {{ __('theme_alaadin.filter-link-reset-all') }}
                                </a>
                                <a style="" class="btn btn-sm btn-primary text-white rounded" id="filter_form_submit">
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
                            <button type="button" class="categories__orders__toggle-filter-btn bg-transparent p-0 border-0 d-xl-none">
                                <i class="las la-filter"></i>
                            </button>
                            <!-- <div class="d-none d-lg-flex gap-3 align-items-center categories__orders__item">
                    <label for="selectOrderBy" class="white-space-nowrap">
                        <i class="las la-filter"></i>
                        <span>{{__('listings_filter.sort-by')}}</span>
                    </label>
                    <select class="form-select border-0" id="selectOrderBy">
                        <option value="max_price">{{__('listings_filter.sort-by-price-high')}}</option>
                        <option value="closest_places">{{__('frontend.homepage.nearby-listings')}}</option>
                    </select>
                </div> -->
                            <!-- <div class="d-none d-lg-flex gap-3 align-items-center categories__orders__item">
                    <label for="selectNumberOfProducts" class="white-space-nowrap">
                        <i class="las la-cubes"></i>
                        <span>{{__('listings_filter.products-per-page')}}</span>
                    </label>
                    <select class="form-select border-0" id="selectNumberOfProducts">
                        <option value="all">12</option>
                        <option value="1">8</option>
                        <option value="2">20</option>
                        <option value="3">20</option>
                    </select>
                </div> -->
                        </div>
                        <button class="btn btn-primary my-btn categories__orders__map-btn" type="button">
                            <span><i class="las la-map-marker-alt"></i></span>
                            <span>الخريطة</span>
                        </button>
                    </div>
                    <!-- start items  -->
                    <div class="categories__items__list">
                        <!-- start map  -->
                        <div id="map" class="categories__items__list__item categories__items__list__item-map">
                            map
                        </div>

                        @if($free_items->count() > 0)
                        @foreach($free_items as $free_items_key => $item)
                        <!-- <div class="col-lg-6"> -->
                        @include('frontend.partials.free-item-block')
                        <!-- </div> -->
                        @endforeach
                        @endif
                        <div class="ads categories__items__list__item__ads">ads</div>
                    </div>
                    <div class="pagination center-block" style="float: right;width: auto;margin-top:2rem">
                        {{ $pagination->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if($all_states->count() > 0)
    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 pt-5">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">{{ __('frontend.categories.sub-title-2') }}</h2>
                </div>
            </div>
            <div class="row mt-5">

                @foreach($all_states as $all_states_key => $state)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <a href="{{ route('page.state', ['state_slug' => $state->state_slug]) }}">{{ $state->state_name }}</a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    @endif

    @endsection

    @push('scripts')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="{{ asset('frontend/vendor/leaflet/leaflet.js') }}"></script>
    @endif


    @include('frontend.partials.bootstrap-select-locale')
    <script>
        $(document).ready(function() {

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


            $(".show_more").on('click', function() {
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
            $('#filter_state').on('change', function() {

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
                        success: function(result) {
                            console.log(result);
                            $('#filter_city').html("<option value='0'>{{ __('prefer_country.all-city') }}</option>");
                            $('#filter_city').selectpicker('refresh');
                            $.each(JSON.parse(result), function(key, value) {
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


            /**
             * Start state selector in filter
             */

            /**
             * End state selector in filter
             */

            /**
             * Start filter form submit
             */
            $("#filter_form_submit").on('click', function() {
                $("#filter_form").submit();
            });
            /**
             * End filter form submit
             */
        });
    </script>
    @endpush
