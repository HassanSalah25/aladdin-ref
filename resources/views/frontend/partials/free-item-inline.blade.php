@php
    $get_count_rating = $item->getCountRating();
    $get_all_categories = $item->getAllCategories(\App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY, isset($parent_category_id) ? $parent_category_id : null);
    $all_categories_count = $item->allCategories()->count();
@endphp
<div class="categories__items__list__item  d-inline-flex">
    <div>
        <input type="hidden" class="lng" name="lng"
               value="{{ $item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lng : '' }}"/>
        <input type="hidden" class="lat" name="lat"
               value="{{ $item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lat : '' }}"/>

        <input type="hidden" class="name" name="name" value="{{ $item->item_title }}"/>
        <input type="hidden" class="details" name="details" value="Details about restaurant 1"/>
        <input type="hidden" class="image" name="image"
               value="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}"/>
    </div>
    <div>
        @if($item->item_image_medium)
            <img
                src="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}"
                alt="item" class="img-fluid categories__items__list__item__img w-100"/>
        @endif
    </div>
    <div class="categories__items__list__item__info w-100">

        <ul class="categories__items__list__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto">
            <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                <i class="las la-map-marker-alt icon"></i>
                <a href="{{ route('page.cities', ['state_slug'=>$item->state->state_slug]) }}"><span>{{ $item->state->state_name }}</span></a>
            </li>
            <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                <i class="las la-star icon"></i>
                <span>{{ $item->item_average_rating }}</span>
            </li>

            @if(!empty($item->item_price))
                <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                    <i class="las la-coins icon"></i>
                    <span class="category">${{ number_format($item->item_price) }}</span>
                </li>
            @endif
        </ul>
        <div class="d-flex jusitfy-content-between gap-3">
            <div>
                <a href="{{ route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]) }}">
                    <h6 class="dark-color fw-bold dark-color mt-base mb-base">
                        {{ $item->item_title }}
                    </h6>
                </a>
                <div class="mb-base d-flex gap-2">
                    @if($all_categories_count > \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY)
                        <span
                            class="category">{{ __('categories.and') . " " . strval($all_categories_count - \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY) . " " . __('categories.more') }}</span>
                    @endif
                    <br/>
                    <i class="las la-map-marker-alt categories__items__list__item__info__sub-info__item__icon"></i>

                    @if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)
                        <address>

                            {{ $item->item_address_hide == \App\Models\Item::ITEM_ADDR_NOT_HIDE ? $item->item_address . ',' : '' }}

                            <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc"
                               href="{{ route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug]) }}">{{ $item->city->city_name }}</a>,
                            <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc"
                               href="{{ route('page.cities', ['state_slug'=>$item->state->state_slug]) }}">{{ $item->state->state_name }}</a>
                            ,{{ $item->item_postal_code }}
                        </address>
                    @endif

                </div>
                <div class="mb-base d-flex gap-2">
                    <span class="fw-bold">المجال : </span>
                    <a class="item_category mb-2"
                       @if($item->category->parent)
                           href="{{route('page.category',['parent_category_slug'=> $item->category->parent?->category_slug,'category_slug'=>$item->category->category_slug])}}"
                       @else
                           href="{{route('page.sub_categories',['category_slug'=>$item->category->category_slug])}}"
                        @endif
                    >
                        {{$item->category->category_name}}
                    </a>

                </div>
            </div>


        </div>
        <div
            class="categories__items__list__item__info__footer d-flex justify-content-start align-items-center gap-3 position-relative">

            @if($item->item_hour_show_hours == \App\Models\Item::ITEM_HOUR_SHOW)
                <p class="mb-0 categories__items__list__item__info__footer__opens">
                    <i class="las la-clock icon"></i>
                    {{--<span>يعمل من</span>--}}
                    @if($item->hasOpened())
                        <span
                            class="item-box-hour-span-opened">{{ __('item_hour.frontend-item-box-hour-opened') }}</span>
                    @else
                        <span
                            class="item-box-hour-span-closed">{{ __('item_hour.frontend-item-box-hour-closed') }}</span>
                    @endif
                </p>

            @endif
            {{--  <button type="button"
                      class="white-space-nowrap categories__items__list__item__info__footer__btn btn btn-primary my-btn">
                  <i class="las la-phone"></i>
                  <span>تواصل</span>
              </button>--}}
            @if($item->item_phone)
                <a href="tel:{{ $item->item_phone}}"
                   class="btn my-btn btn-primary profile__details__contact-btn">
                    <i class="las la-phone"></i>
                    <span>الهاتف</span>
                </a>
            @endif
            @if(!empty($item->itemPhones))
                @foreach($item->itemPhones as $phone)
                    <a href="tel:{{ $phone->phone}}"
                       class="btn my-btn btn-primary profile__details__contact-btn">
                        <i class="las la-phone"></i>
                        <span>الهاتف {{$loop->iteration}}</span>
                    </a>
                @endforeach

            @endif
            @if($item->item_lat != 0 && $item->item_lng != 0)
                <a class="btn my-btn btn-primary profile__details__contact-btn"
                   target="_blank"
                   href="{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $item->item_lat . ',' . $item->item_lng }}">
                    <i class="las la-map-marker"></i>
                    <span>الموقع</span>
                </a>
            @endif
            @if($item->item_website)
                <a href="{{ $item->item_website}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="las la-globe-europe"></i></a>
            @endif
            @if($item->item_social_email)
                <a href="mailto:{{ $item->item_social_email}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fa fa-envelope"></i></a>
            @endif
            @if($item->item_social_facebook)
                <a href="{{ $item->item_social_facebook}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-facebook"></i></a>
            @endif
            @if($item->item_social_twitter)
                <a href="{{ $item->item_social_twitter}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-twitter"></i></a>
            @endif
            @if($item->item_social_linkedin)
                <a href="{{ $item->item_social_linkedin}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-linkedin"></i></a>
            @endif
            @if($item->item_social_whatsapp)
                <a href="https://wa.me/+020{{ $item->item_social_whatsapp}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-whatsapp"></i></a>
            @endif
            @if($item->item_social_instagram)
                <a href="{{ $item->item_social_instagram}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-instagram"></i></a>
            @endif
            @if($item->item_social_youtube)
                <a href="{{ $item->item_social_youtube}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-youtube"></i></a>
            @endif
            @if($item->item_social_tiktok)
                <a href="{{ $item->item_social_tiktok}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-tiktok"></i></a>
            @endif
            @if($item->item_social_pinterest)
                <a href="{{ $item->item_social_pinterest}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-pinterest"></i></a>
            @endif
            @if($item->item_social_telegram)
                <a href="tel:{{ $item->item_social_telegram}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-telegram"></i></a>
            @endif
            @if($item->item_social_snapchat)
                <a href="{{ $item->item_social_snapchat}}"
                   class="categories__items__list__item__info__footer__contacts__item"><i
                        class="fab fa-snapchat"></i></a>
            @endif


            {{-- <div class="flex flex-column gap-2 categories__items__list__item__info__footer__contacts position-absolute">
 --}}{{--                <a--}}{{--
 --}}{{--                    href="#mapid-box"--}}{{--
 --}}{{--                    class="categories__items__list__item__info__footer__contacts__item"--}}{{--
 --}}{{--                    ><i class="las la-map-marker-alt"></i></a>--}}{{--

                 <a href="https://wa.me/{{ $item->item_social_whatsapp}}"
                    class="categories__items__list__item__info__footer__contacts__item"><i
                         class="lab la-whatsapp"></i></a>
                 <a href="tel:{{ $item->item_phone}}"
                    class="categories__items__list__item__info__footer__contacts__item"><i class="las la-phone"></i></a>
             </div>--}}
        </div>
    </div>
</div>
