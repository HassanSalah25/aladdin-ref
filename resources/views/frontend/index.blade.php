@php use App\Models\Item; @endphp
@php @endphp
@php @endphp
@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}"/>

@endpush


@section('content')

    <section class="landing position-relative">
        <!-- Swiper -->
        <div class="swiper landing__swiper w-100 h-100">
            <div class="swiper-wrapper">
                <div class="swiper-slide landing__swiper__swiper-slide flex">
                    <picture>
                        <img
                            src="{{Storage::disk('public')->url($site_global_settings->slider_image_1) != 'https://aladdin-eg.com/storage/' ? Storage::disk('public')->url('setting/'.$site_global_settings->slider_image_1) : asset('assets/images/landing-slide-1.png')}}"
                            alt="landing slide" class="landing__swiper__swiper-slide__img"/>
                    </picture>
                    <div class="container">
                        <div class="row justify-content-end">
                            <!--<div class="col-md-6 col-lg-4 d-flex justify-content-end">-->
                            <!--  <img src="assets/images/time-to-travel.svg" alt="time to travel" class="img-fluid position-relative" data-aos="fade-right" />-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide landing__swiper__swiper-slide flex">
                    <picture>
                        <img
                            src="{{Storage::disk('public')->url($site_global_settings->slider_image_2) != 'https://aladdin-eg.com/storage/'? Storage::disk('public')->url('setting/'.$site_global_settings->slider_image_2) : 'assets/images/landing-slide-1.png'}}"
                            alt="landing slide" class="landing__swiper__swiper-slide__img"/>
                    </picture>
                    <div class="container">
                        <div class="row justify-content-end">
                            <!--<div class="col-md-6 col-lg-4 d-flex justify-content-end">-->
                            <!--  <img src="assets/images/time-to-travel.svg" alt="time to travel" class="img-fluid position-relative" data-aos="fade-right" />-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next landing__swiper__button landing__swiper__button__swiper-button-next">
                <i class="las la-angle-left"></i>
            </div>
            <div class="swiper-button-prev landing__swiper__button landing__swiper__button__swiper-button-prev">
                <i class="las la-angle-right"></i>
            </div>
        </div>

        <form class="landing__search-form autocomplete-search  position-absolute searchForm"
              id="autocomplete-search-id" action="{{route('page.search')}}">
            <div id="search-dropdown-id" class="col-xs-12 search-dropdown">
                <div id="dropdown-parent-id" class="dropdown-parent what_input_field_tpm"
                     style="height: 66px; margin: 0px; border-radius: 10px;">

                    <div id="search-by-id" class="autocomplete mb-3 search-by" style="height: 44px">
                        <select name="search_category" class="form-select search_category border-0 px-5 mt-2 d-md-block"
                                style="">
                            <option value="">{{ __('frontend.search.all') }}</option>
                            @foreach($search_categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        <select name="search_category_2"
                                class="form-select search_category_2 border-0 px-5 mt-2 d-md-block" style="">
                            <option value="">__</option>
                        </select>
                    </div>
                    <div id="search-by-id" class="autocomplete search-by" style="height: 44px;">
                        <img class="search-img lazyloaded" data-src="" alt="search"
                             src="{{asset('assets/icons8-search-50.png')}}" style="width: 8%;">
                        <input autocomplete="off" name="search_query" type="text" value=""
                               placeholder="{{ __('frontend.search.item') }}"
                               class="autocomplete search-query-what what_original_to search-what"
                               style="padding: 5px 0px 5px 0px;">
                        <img id="" class="loading-search-img-ar lazyload"
                             data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                        <div
                            class="autocomplete-items fixed-height search-whatautocomplete-list loading-search-what"></div>
                    </div>
                    <div id="inWhat-id" class="autocomplete dropdown inWhat"
                         style=" height: 66px;width: 273px; padding: 10px 0px;">
                        <img class="city-img lazyloaded" width="50" height="50"
                             data-src="{{asset('assets/icons8-building-100.png')}}" alt="building"
                             src="{{asset('assets/icons8-building-100.png')}}">
                        <input autocomplete="off" name="search_city_state"
                               class="btn btn-default autocomplete search-query-where where_original_top select-search"
                               type="text" required
                               placeholder="{{ __('frontend.search.state_city') }}"
                               value="{{request('search_city_state')}}"
                               style="height: 46px; font-size: 16px;width: 100%" data-gtm-form-interact-field-id="1">

                        <img class="loading-search-img-ar lazyload loading-select-search"
                             data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                        <div class="select-searchautocomplete-list autocomplete-items fixed-height ">
                        </div>
                    </div>
                    <input class="search-submit-btn-id search-submit-btn btn" type="submit" value="ابحث"
                           style="display: block;">
                    <input id="search-submit-img-id" class="search-submit-img" type="image"
                           src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/new_design/Search.png?9"
                           alt="Submit" style="display: none;">
                </div>
            </div>
            <div id="category-redirect-id" class="col-xs-12 category-redirect">

                @foreach($search_bar_categories as $category)

                    <div>
                        <a href="{{route('page.sub_categories',$category->category_slug)}}">
                             <span>
                                     <i class="{{$category->category_icon}}" style="color: #ffffff;"></i>
                             </span>
                            <span>{{$category->category_name}}</span>
                        </a>
                    </div>
                @endforeach
                <div>
                    <a href="{{route('page.categories')}}">
                                <span>
                                        <i class="fas fa-ellipsis-h" style="color: #ffffff;"></i>
                                </span>
                        <span>المزيد</span>
                    </a>
                </div>
            </div>

        </form>
    </section>
    <!-- **************************                       ******************************  -->
    <!-- ************************** end landing-section   ******************************  -->
    <!-- **************************                       ******************************  -->

    <!-- **************************                           ******************************  -->
    <!-- ************************** start provinces-section   ******************************  -->
    <!-- **************************                           ******************************  -->
    <!-- *************
<div class="parent">
  <div class ='noScroll' id='searchBar'>
           <div class="landing__search-form__inner flex">

            <input style="margin: 0 1rem;border: 1px solid #fff !important;" id="header-input-search" type="text" name="search_query" value="{{ $search_query ?? '' }}" placeholder="{{ __('categories.search-query-placeholder') }}..​" class="form-control flex-fill border-0" />

            <button type="submit" class="btn btn-primary rounded-circle flex">
              <i class="las la-search"></i>
            </button>
          </div>
  </div>
</div>
****************** --->
    <section class="pt pb d-flex provinces position-relative">
        @if($ads_side_before_states->count() > 0)
            <div class="swiper-container-ads" style="overflow: hidden;width: 205px">
                <div class="swiper-wrapper">
                    @foreach($ads_side_before_states as $ads_side_before_states_key => $ads_side_before_states)
                        <div class="swiper-slide">

                            <a
                                @if($ads_side_before_states->item?->first())
                                    href="{{route('page.item',[
                                                        'category_slug' => $ads_side_before_states->item->first()->category->parent?->category_slug ?? $ads_side_before_states->item->first()->category->category_slug,
                                                        'sub_category_slug' => $ads_side_before_states->item->first()->category->category_slug,
                                                        'state_slug' => $ads_side_before_states->item->first()->state->state_slug,
                                                        'item_slug' => $ads_side_before_states->item->first()->item_slug
                                                    ])}}"
                                @endif
                            >

                                <img alt="{{$ads_side_before_states->ad_image_vertical}}" src="{{asset('storage/ads/'.$ads_side_before_states->ad_image_vertical)}}"/>
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="ads vertical d-none d-lg-flex">
                <img alt="banner" src="/storage/banner.jpg"/>
            </div>
        @endif
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title">{{ __('frontend.search.what-are-you-looking-for')}}</h2>
                <h4 class="title-container__subtitle">
                    {{ __('frontend.homepage.title')}}
                </h4>
            </div>

            <div data-aos="fade-right" data-aos-duration="2000" class="">

                <div class="container" style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                ">

                    <a href="{{ route('page.cities', ['state_slug' => $all_states->first()->state_name]) }}"
                       class="show provinces__items__item m-5">

                        <img alt="{{ $all_states->first()->state_name }}" src="{{ asset('storage/state/' . $all_states->first()->state_name . '.jpg') }}">
                        <div class="provinces__items__item__info">
                            <h4 class="provinces__items__item__info__title">{{$all_states->first()->state_name}}</h4>
                            <h5 class="provinces__items__item__info__subtitle">
                                {{ __('frontend.contact.watch-places')}}
                            </h5>

                        </div>
                    </a>
                    <section
                        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center row-cols-xl-5 mb-xl g-4">
                        @foreach($all_states as $state)
                            <!-- img  -->
                            @if($loop->iteration == 1)
                            @else
                                <a href="{{ route('page.cities', ['state_slug' => $state->state_slug ]) }}"
                                   style="padding: 0px" class="thumbnail  provinces__items__item m-3">
                                    <img class="demo cursor" alt="{{$state->state_name}}"
                                         src="{{ asset('storage/state/' .$state->state_name.'.jpg')}}" style="
    height: 100%;
">
                                    <div class="provinces__items__item__info">
                                        <h6 class="provinces__items__item__info__title">{{$state->state_name}}</h6>
                                        <h6 class="provinces__items__item__info__subtitle">
                                            {{ __('frontend.contact.watch-places')}}
                                        </h6>

                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </section>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{route('page.states')}}" class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
            </div>
        </div>
        @if($ads_side_after_states->count() > 0)
            <div class="swiper-container-ads" style="overflow: hidden;width: 205px">
                <div class="swiper-wrapper">
                    @foreach($ads_side_after_states as $ads_side_after_states_key => $ads_side_after_states)
                        <div class="swiper-slide">
                            <a
                                @if($ads_side_after_states->item?->first())
                                    href="{{route('page.item',[
                                                        'category_slug' => $ads_side_after_states->item->first()->category->parent?->category_slug ?? $ads_side_after_states->item->first()->category->category_slug,
                                                        'sub_category_slug' => $ads_side_after_states->item->first()->category->category_slug,
                                                        'state_slug' => $ads_side_after_states->item->first()->state->state_slug,
                                                        'item_slug' => $ads_side_after_states->item->first()->item_slug
                                                    ])}}"
                                @endif
                            >

                                <img alt="$ads_side_after_states->ad_image_vertical" src="{{asset('storage/ads/'.$ads_side_after_states->ad_image_vertical)}}"/>
                            </a>


                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="ads vertical d-none d-lg-flex"><img alt="banner" src="/storage/banner.jpg"/>
            </div>
        @endif
    </section>
    <!-- **************************                         ******************************  -->
    <!-- ************************** end provinces-section   ******************************  -->
    <!-- **************************                         ******************************  -->

    <div class="container pb">
        @if($ads_after_states->count() > 0)
            <div class="swiper-container-ads" style="overflow: hidden">
                <div class="swiper-wrapper">
                    @foreach($ads_after_states as $ads_after_states_key => $ads_after_states)

                        <div class="swiper-slide">
                            <a
                                @if($ads_after_states->item?->first())
                                    href="{{route('page.item',[
                                                        'category_slug' => $ads_after_states->item->first()->category->parent?->category_slug ?? $ads_after_states->item->first()->category->category_slug,
                                                        'sub_category_slug' => $ads_after_states->item->first()->category->category_slug,
                                                        'state_slug' => $ads_after_states->item->first()->state->state_slug,
                                                        'item_slug' => $ads_after_states->item->first()->item_slug
                                                    ])}}"

                                @endif
                            >

                                <img style="width: 100%"
                                     alt="{{$ads_after_states->ad_image_horizontal}}"
                                     src="{{asset('storage/ads/'.$ads_after_states->ad_image_horizontal)}}"/>


                            </a>
                        </div>

                    @endforeach

                </div>
            </div>
        @else
            <div class="ads">
                <img alt="banner" src="/storage/banner 2.jpg"/>
            </div>
        @endif
    </div>

    <!-- **************************                        ******************************  -->
    <!-- ************************** start places-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb places position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title">{{ __('frontend.homepage.find-recent-listings')}}</h2>
                <h4 class="title-container__subtitle">
                    {{ __('frontend.homepage.find-recent-listings')}}
                </h4>
            </div>
            @php
                $popular_items_count = $popular_items->count();
            @endphp
            @if($popular_items_count > 0)
                <div data-aos="fade-right" data-aos-duration="1000"
                     class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-6 mb-xl g-4">

                    @foreach($popular_items->take(5) as $popular_items_key => $popular_item)
                        <div class="col mx-1">
                            <div class="places__item row align-items-end" style="overflow:hidden">
                                <div class="places__item__header mb-1 d-flex align-items-center gap-3">
                                    <a data-aos="fade-left" data-aos-duration="1000" href="{{ route('page.item', [
                        'category_slug' => $popular_item->category->parent?->category_slug ?? $popular_item->category->category_slug,
                        'sub_category_slug' => $popular_item->category->category_slug,
                        'state_slug' => $popular_item->state->state_slug,
                        'item_slug' => $popular_item->item_slug
                    ]) }}"
                                       class=" h-100">
                                        @if($popular_item->item_image)
                                            <img
                                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('item/'. $popular_item->item_image) }}"
                                                alt="restaurant"
                                                class="img-fluid places__item__header__img"/>
                                        @else
                                            <img
                                                src="{{ asset('frontend/images/placeholder/category-image.webp') }}"
                                                alt="restaurant"
                                                class="img-fluid places__item__header__img"/>
                                        @endif
                                        <br/>
                                        <div>
                                            <h6 class="fw-bold recent_categories__item mb-1 primary-dark-color"
                                                style="display: inline-block;vertical-align: top;margin-top: 1rem;">
                                                {{ $popular_item->item_title }}
                                            </h6>
                                        </div>
                                    </a>
                                </div>


                            </div>
                            {{--
                              <p class="places__item__desc font-size-xs gray-color mb-sm">{{ str_limit($category->category_description,200) }}
                            </p>
                            --}}

                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <p>{{ __('frontend.homepage.no-categories') }}</p>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                <a href="{{ route('page.popular')}}"
                   class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
            </div>
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end places-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start places-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb about position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title">{{ __('frontend.about.title') }}</h2>
            </div>

            <div class="row g-0 about__content" data-aos="fade-up" data-aos-duration="1000">
                <!-- img  -->
                <div class="col-lg-5 col-x;-4">
                    <img src="assets/images/about.png" alt="about"
                         class="img-fluid about__content_img w-100 h-100"/>
                </div>
                <!-- content  -->
                <div class="col">
                    <div class="about__content__inner">
                        <h1 class="primary-dark-color mb-sm fw-bold">{{ __('frontend.about.description') }}</h1>
                        {!! str_limit($about,700) !!}
                        <br/>
                        <a href="{{route('page.about')}}"
                           class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************************                     ******************************  -->
    <!-- ************************** end about-section   ******************************  -->
    <!-- **************************                     ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start hotels-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb hotels position-relative overflow-hidden">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title">{{ __('frontend.homepage.nearby-listings') }}</h2>
                <h4 class="title-container__subtitle">
                    {{ __('frontend.homepage.popular-listings') }}
                </h4>
            </div>


            <div class="explore__items mb-xl row justify-content-center" id="locationItems"
                 style="overflow: hidden">

                <div class="col-md-6 row justify-content-center">
                    <div class="col-md-6 row justify-content-center">
                        <p class="text-center">يرجي تفعيل تحديد المواقع لإظهار النتائج</p>
                        <button onclick="getLocation()" class="btn btn-primary my-btn">تفعيل تحديد موقعك
                        </button>
                    </div>
                </div>
                <div class=" justify-content-center" id="button" style="display: none">
                    <a href="{{ route('page.search',['filter_sort_by'=>'بالقرب مني'])}}"
                       class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
                </div>
            </div>

            {{--  @if($popular_items->count() > 0)
                  <div class="hotels__items mb-xl" data-aos="fade-right" data-aos-duration="1000">
                      <!-- Swiper -->
                      <div class="swiper hotels__items__swiper">
                          <div class="swiper-wrapper">
                              @foreach($popular_items as $popular_items_key => $item)
                                  <div class="swiper-slide hotels__items__swiper-slide">
                                      <div class="hotels__items__item">
                                          <img
                                              src="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}"
                                              alt="hotel" class="img-fluid hotels__items__item__img w-100"/>
                                          <div class="hotels__items__item__info">
                                              <ul class="hotels__items__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto">
                                                  <li class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1">
                                                      <i class="las la-map-marker-alt icon"></i>
                                                      <span><a
                                                              href="{{ route('page.cities', ['state_slug'=>$item->state->state_slug]) }}">{{ $item->state->state_name }}</a></span>
                                                  </li>
                                                  <li class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1">
                                                      <i class="las la-star icon"></i>
                                                      <span>{{ $item->item_average_rating }}</span>
                                                  </li>
                                                  @if($item->item_price)
                                                      <li class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1">
                                                          <i class="las la-coins icon"></i>
                                                          <span>{{ $item->item_price }}</span>
                                                      </li>
                                                  @endif
                                              </ul>
                                              <h4 class="dark-color fw-bold dark-color mt-base mb-base">
                                                  <a href="{{ route('page.item', $item->item_slug) }}">{{ $item->item_title }}</a>
                                              </h4>
                                              <div class="mb-md d-flex gap-2">
                                                  <i class="las la-map-marker-alt hotels__items__item__info__sub-info__item__icon"></i>

                                                  @if($item->item_type == Item::ITEM_TYPE_REGULAR && $item->city)
                                                      <p class="gray-color font-size-base mb-0 hotels__items__item__info__sub-info__item__desc">
                                                          <a href="{{ route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug]) }}">{{ $item->city->city_name }}</a>,
                                                          <a href="{{ route('page.cities', ['state_slug'=>$item->state->state_slug]) }}">{{ $item->state->state_name }}</a>
                                                      </p>
                                                  @endif
                                              </div>
                                              <div class="d-flex justify-content-center">
                                                  <a href="{{ route('page.item', $item->item_slug) }}"
                                                     class="btn btn-primary my-btn">{{ __('frontend.contact.learn-more')}}
                                                      ​</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                      </div>
                      <div class="swiper-pagination hotels__items__swiper__swiper-pagination our-swiper-pagination"></div>

                      <div class="swiper-button-next hotels__items__swiper__swiper-button-next our-swiper-controller">
                          <i class="las la-angle-right"></i>
                      </div>
                      <div class="swiper-button-prev hotels__items__swiper__swiper-button-prev our-swiper-controller">
                          <i class="las la-angle-left"></i>
                      </div>
                  </div>
                  <div class="d-flex justify-content-center">
                      <a href="{{ route('page.popular')}}"
                         class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
                  </div>
              @endif--}}
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end hotels-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <div class="container pb">
        @if($ads_after_lisitng->count() > 0)
            <div class="swiper-container-ads" style="overflow: hidden">
                <div class="swiper-wrapper">
                    @foreach($ads_after_lisitng as $ads_after_lisitng_key => $ads_after_lisitng)
                        <div class="swiper-slide">
                            <a
                                @if($ads_after_lisitng->item?->first())
                                    href="{{route('page.item',[
                                                                'category_slug' => $ads_after_lisitng->item->first()->category->parent?->category_slug ?? $ads_after_lisitng->item->first()->category->category_slug,
                                                                'sub_category_slug' => $ads_after_lisitng->item->first()->category->category_slug,
                                                                'state_slug' => $ads_after_lisitng->item->first()->state->state_slug,
                                                                'item_slug' => $ads_after_lisitng->item->first()->item_slug
                                                            ])}}"
                                @endif
                            >

                                <img style="width: 100%"
                                     alt="{{$ads_after_lisitng->ad_image_horizontal}}"
                                     src="{{asset('storage/ads/'.$ads_after_lisitng->ad_image_horizontal)}}"/>
                            </a>


                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="ads"><img alt="banner" src="/storage/banner 2.jpg"/></div>
        @endif
    </div>
    @php
        $popular_items_count = $popular_items->count();
    @endphp

        <!-- ************************** start hotels-section   ******************************  -->
    @if($popular_items_count > 0)
        <section class="pb activites position-relative">
            <div class="container">
                <div class="activites__items d-flex flex-row align-items-center gap-4">
                    <div
                        class="activites__title-item d-flex p-5 align-items-center justify-content-center text-center"
                        style="z-index: 5">
                        <h3 class="activites__title-item__title m-0 fw-bold">
                            {{ __('frontend.categories.more-common') }}
                        </h3>
                    </div>
                    <div class="swiper-container" style="width: 75% !important;">
                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            @foreach($popular_items->take(8) as $popular_items_key => $popular_item)
                                <a data-aos="fade-left" data-aos-duration="1000"
                                   href="{{ route('page.item', [
                                                                'category_slug' => $popular_item->category->parent?->category_slug ?? $popular_item->category->category_slug,
                                                                'sub_category_slug' => $popular_item->category->category_slug,
                                                                'state_slug' => $popular_item->state->state_slug,
                                                                'item_slug' => $popular_item->item_slug
                                                            ]) }}"
                                   class="swiper-slide d-flex flex-column align-items-center justify-content-end gap-3 text-center">
                                    <div data-aos="fade-left" data-aos-duration="1000"
                                         class="activites__item d-flex flex-column align-items-center justify-content-end gap-3 text-center">
                                        @if($popular_item->item_image)
                                            <img
                                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('item/'. $popular_item->item_image) }}"
                                                alt="restaurant" class="img-fluid"/>
                                        @else
                                            <img
                                                src="{{ asset('frontend/images/placeholder/category-image.webp') }}"
                                                alt="restaurant" class="img-fluid"/>
                                        @endif
                                        <h6 class="fw-bold mb-0 primary-dark-color">{{ $popular_item->item_title }}</h6>
                                    </div>
                                </a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- ************************** end hotels-section   ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start explore-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb explore position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title">{{ __('frontend.homepage.recent-listings') }}</h2>
                <!-- <h4 class="title-container__subtitle">
                  اكتشف الاقرب والاشهر فى مصر كلها.
                </h4> -->
            </div>

            <div class="explore__items mb-xl">
                <div class="swiper explore__items__swiper swiper-padding">
                    <div class="swiper-wrapper">
                        @if($popular_items->count() > 0)
                            @foreach($popular_items as $latest_items_key => $item)
                                <div class="swiper-slide explore__items__swiper__swiper-slide">
                                    <div data-aos="fade-left"
                                         class="expolre__items__item d-flex align-items-center">
                                        @if($item->item_image_medium)
                                            <img
                                                src="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}"
                                                alt="explore item"
                                                class="img-fluid expolre__items__item__img"/>
                                        @endif
                                        <div class="explore__items__item__info">
                                            <!-- head  -->
                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 explore__items__item__info__head">
                                                <h4 class="explore__items__item__info__title mb-0">
                                                    <a href="{{ route('page.item', [
                                                                                    'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                                                                                    'sub_category_slug' => $item->category->category_slug,
                                                                                    'state_slug' => $item->state->state_slug,
                                                                                    'item_slug' => $item->item_slug
                                                                                ]) }}"
                                                       style="font-size:1.4rem">{{ $item->item_title }}</a>
                                                </h4>
                                                <div
                                                    class="explore__items__item__info__time d-flex align-items-center gap-2">
                                                    <span style="min-width:6rem">
                      <span class="icon">
                        <i class="las la-star"></i>
                      </span>
                      @php
                          $latest_item_getCountRating = $item->getCountRating();
                      @endphp
                      <span class="text"> {{ $item->item_average_rating }} </span>
                      <span class="time" style="display: block;">
                        <span class="icon">
                          <i class="las la-clock"></i>
                        </span>
                        <span class="text text-capitalize">
                          @if($item->item_hour_show_hours == Item::ITEM_HOUR_SHOW)
                                @if($item->hasOpened())
                                    <span
                                        class="item-box-hour-span-opened">{{ __('item_hour.frontend-item-box-hour-opened') }}</span>
                                @else
                                    <span
                                        class="item-box-hour-span-closed">{{ __('item_hour.frontend-item-box-hour-closed') }}</span>
                                @endif
                            @endif
                        </span>
                      </span>
                    </span>
                                                </div>
                                            </div>

                                            <div
                                                class="mb-sm d-flex gap-2 explore__items__item__info__details">
                                                <i class="las la-map-marker-alt icon"></i>

                                                <p class="gray-color font-size-sm mb-0 lh">
                                                @if($item->item_type == Item::ITEM_TYPE_REGULAR && $item->city)
                                                    <address>
                                                        <a href="{{ route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug]) }}">{{ $item->city->city_name }}</a>,
                                                        <a href="{{ route('page.cities', ['state_slug'=>$item->state->state_slug]) }}">{{ $item->state->state_name }}</a>
                                                    </address>
                                                    @endif
                                                    </p>
                                            </div>

                                            <div class="text-center">
                                                <a href="{{ route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]) }}"
                                                   class="btn btn-primary my-btn"
                                                   style="color:#fff">{{ __('frontend.contact.learn-more')}}
                                                    ​</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div
                    class="swiper-pagination our-swiper-pagination explore__items__swiper__pagination"></div>

                <div class="swiper-button-next our-swiper-controller explore__items__swiper__button-next">
                    <i class="las la-angle-right"></i>
                </div>
                <div class="swiper-button-prev our-swiper-controller explore__items__swiper__button-prev">
                    <i class="las la-angle-left"></i>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('page.popular')}}"
                   class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
            </div>
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end explore-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start how-use-section   ******************************  -->
    <!-- **************************                        ******************************  -->

    <!-- **************************                      ******************************  -->
    <!-- ************************** end how-use-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- ************************** start blogs   ******************************  -->
    @if($recent_blog->count() > 0)
        <section class="blogs pt pb position-relative">
            <div class="container">
                <div class="title-container">
                    <h2 class="title-container__title">{{ __('frontend.homepage.our-blog') }}</h2>
                </div>

                <div class="row gy-5">
                    @foreach($recent_blog as $blog)

                        <div class="col-xl-6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blogs__main-item">
                                <img src="{{asset('storage/blog/'.$blog->image)}}" alt="blog item"
                                     class="img-fluid blogs__main-item__main-img"/>
                                <a href="{{route('page.blog',$blog->blog_slug)}}"
                                   class="blogs__main-item__title">
                                    {{$blog->title}}
                                </a>
                                <p class="blogs__main-item__desc">

                                    {!! str_limit(strip_tags($blog->content),100) !!}
                                </p>
                                <span class="blogs__main-item__time d-flex align-items-center gap-2">
                                    <!-- <i class="las la-clock icon"></i> -->
                                    <img
                                        src="{{asset('assets/images/clock-icon.svg')}}"
                                        alt="clock icon" class="img-fluid"/>
                                    <span>
                                            {{$blog->created_at->format('d/m/Y h:i A')}}
                                    </span>
                                  </span>
                            </div>
                        </div>
                        {{--                        @endif--}}
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-xl">
                    <a href="{{ route('page.blogs') }}"
                       class="btn btn-primary my-btn">{{ __('frontend.contact.more')}}</a>
                </div>
            </div>
        </section>
    @endif
    <!-- ************************** end blogs   ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start contact-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb pt contact position-relative overflow-hidden">
        <div class="container">
            <div class="row g-5 g-lg-0">
                <div class="col-lg-7 col-xl-6 order-last order-lg-first" data-aos="fade-up"
                     data-aos-duration="1000">
                    <div class="contact__form h-100">
                        <form class="contact__form__inner d-flex align-items-center" method="post"
                              action="{{ route('admin.business.store') }}">
                            @csrf
                            <div class="flex-fill text-center">
                                <h2 class="fw-bold dark-color contact__form__inner__title">
                                    {{ __('frontend.item.share-listing')}}
                                </h2>
                                <div class="form-group">
                                    <label class="my-input-container">
                                                    <span
                                                        class="my-input-container__label">{{ __('frontend.contact.phone')}}</span>
                                        <input type="text" name="phone"
                                               class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                                    <span
                                                        class="my-input-container__label">{{ __('frontend.item.name')}}</span>
                                        <input type="text" name="name"
                                               class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span
                                            class="my-input-container__label">{{ __('frontend.item.listing-name')}}</span>
                                        <input type="text" name="activity_name"
                                               class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <button type="submit"
                                        class="btn btn-primary my-btn contact__form__inner__submit">
                                    {{ __('frontend.item.save')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="contact__img d-flex justify-content-end align-items-center">
                        <img src="assets/images/contact.svg" alt="contact" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script src="{{ asset('frontend/js/index.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ $site_global_settings->setting_site_map_google_api_key }}&callback=initMap"></script>

    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, requestPermission);
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, requestPermission);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const geocoder = new google.maps.Geocoder();
            const latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);


            geocoder.geocode(
                {'latLng': latlng, 'language': 'ar'},
                function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var add = results[0].formatted_address;
                            var value = add.split("،");

                            count = value.length;
                            country = value[count - 1];
                            state = value[count - 2];
                            city = value[count - 3];
                            x = "city name is: " + city;
                            saveLocation(position.coords.latitude, position.coords.longitude);
                        } else {
                            x.innerHTML = "address not found";
                        }
                    } else {
                        x.innerHTML = "Geocoder failed due to: " + status;
                    }
                }
            );
        }

        function requestPermission(error) {
            if (error.code === error.PERMISSION_DENIED) {
                console.log("Location permission denied.");
            }
        }

        function saveLocation(latitude, longitude) {
            var url = "{{ route('save-location') }}";
            var data = {
                latitude: latitude,
                longitude: longitude
            };

            $.ajax({
                url: url,
                type: 'GET',
                data: data,
                success: function (response) {
                    console.log("Location saved successfully.");
                    $('#locationItems').empty();
                    var prehtml = `<div
                                    class="hotels__items mb-xl"
                                    data-aos="fade-right"
                                    data-aos-duration="1000">
                                    <!-- Swiper -->
                                    <div class="swiper hotels__items__swiper">
                                    <div class="swiper-wrapper">`;

                    var posthtml = `</div>
                                    </div>
                                    <div
                                        class="swiper-pagination hotels__items__swiper__swiper-pagination our-swiper-pagination"
                                    ></div>

                                    <div
                                        class="swiper-button-next hotels__items__swiper__swiper-button-next our-swiper-controller"
                                    >
                                        <i class="las la-angle-right"></i>
                                    </div>
                                    <div
                                        class="swiper-button-prev hotels__items__swiper__swiper-button-prev our-swiper-controller"
                                    >
                                        <i class="las la-angle-left"></i>
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                            <a class="btn btn-primary my-btn" href="{{ route('page.search',['filter_sort_by'=>Item::ITEMS_SORT_BY_NEARBY_FIRST])}}">
                                            المزيد
                                            </a>
                                    </div>
                                    </div>`
                    var content = '';
                    response.forEach(function (data) {
                        $('#button').css('display', '');
                        var category = null;
                        if (data['category']['parent'])
                            category = data['category']['parent']['category_slug'];
                        else
                            category = data['category']['category_slug'];
                        var htmlContent = `<div class="swiper-slide hotels__items__swiper-slide">
                                            <div class="hotels__items__item">
                                                <img
                                                    src="assets/images/hotel.png"
                                                    alt="hotel"
                                                    class="img-fluid hotels__items__item__img w-100"
                                                />
                                                <div class="hotels__items__item__info">
                                                     <ul
                                                        class="hotels__items__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto"
                                                    >
                                                        <li
                                                            class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1"
                                                        >
                                                            <i class="las la-map-marker-alt icon"></i>
                                                            <span>${data['state']['state_name']}</span>
                                                        </li>
                                                        <li
                                                            class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1"
                                                        >
                                                            <i class="las la-star icon"></i>
                                                            <span>التقييم</span>
                                                        </li>
                                                    </ul>
                                                    <h5 class="dark-color fw-bold dark-color mt-base mb-base">
                                                        ${data['item_title']}
                                                    </h5>
                                                    <div class="mb-md d-flex gap-2">
                                                        <i
                                                            class="las la-map-marker-alt hotels__items__item__info__sub-info__item__icon"
                                                        ></i>

                                                        <p
                                                            class="gray-color font-size-base mb-0 hotels__items__item__info__sub-info__item__desc"
                                                        >
                                                            ${data['item_address']}
                                                        </p>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <a class="btn btn-primary my-btn col-md-3" href="/listing/${category}/${data['category']['category_slug']}/${data['state']['state_slug']}/${data['item_slug']}"
                                                        >المزيد</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
                        content = content + htmlContent;
                    });
                    htmlContent = prehtml + content + posthtml;
                    $('#locationItems').append(htmlContent);
                    var hotelsSwiper = new Swiper(".hotels__items__swiper", {
                        // autoplay: true,
                        slidesPerView: 1,
                        spaceBetween: 25,
                        autoHeight: false, // Add this line to make the slides the same height
                        pagination: {
                            el: ".hotels__items__swiper__swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".hotels__items__swiper__swiper-button-next",
                            prevEl: ".hotels__items__swiper__swiper-button-prev",
                        },
                        breakpoints: {
                            400: {
                                slidesPerView: 1.1,
                            },
                            767: {
                                slidesPerView: 1.3,
                            },
                            991: {
                                slidesPerView: 2,
                            },
                            1200: {
                                slidesPerView: 3,
                            },
                        },
                        // Add the equalHeight property to ensure same height for all slides
                        equalHeight: true,
                    });
                },
                error: function (xhr) {
                    console.log("Error saving location: " + xhr.responseText);
                }
            });
        }
    </script>

@endpush

@push('styles')
    <style>
        .how-use .modalDialog {
            display: none;
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }

        .how-use button {
            background: none;
            border: none;
        }

        .how-use .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
            display: block;
        }

        .how-use .modalDialog > div {
            width: 560px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            background: -webkit-linear-gradient(#fff, #999);
            background: -o-linear-gradient(#fff, #999);
        }

        .how-use .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .how-use .close:hover {
            background: #00d9ff;
        }

        h2 {
            text-align: center;
        }

        .noScroll {
            background: white;
            position: fixed;
            height: 200px; /*Whatever you want*/
            width: 100%; /*Whatever you want*/
            top: 0;
            left: 0;
            display: none;
        }

        /*Use this class when you want your content to be shown after some scroll*/
        .scrolled {
            display: flex !important;
            justify-content: center;
            align-items: end;
            z-index: 99;
        }

        .parent {
            height: 200px;
            /* something to ensure that the parent container is scrollable */
        }

    </style>

    <script>
        // window.addEventListener('scroll', function() {
        //   if( window.scrollY !== 0) {

        //       document.getElementById('searchBar').classList.add('scrolled');
        //   } else {

        //       document.getElementById('searchBar').classList.remove('scrolled');
        //   }
        // });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                autoplay: {
                    delay: 1000, // Set the delay in milliseconds (e.g., 3000ms or 3 seconds)
                    disableOnInteraction: false, // Set to false if you want autoplay to continue even when user interacts with the swiper
                },
                loop: true,
                breakpoints: {
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 4,
                    }
                }
            });


        });
    </script>
@endpush
