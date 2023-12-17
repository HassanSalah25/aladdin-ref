@php
$get_count_rating = $item->getCountRating();
$get_all_categories = $item->getAllCategories(\App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY, isset($parent_category_id) ? $parent_category_id : null);
$all_categories_count = $item->allCategories()->count();
@endphp
<div class="categories__items__list__item">
    <div>
        <input type="hidden" class="lng" name="lng" value="{{ $item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lng : '' }}" />
        <input type="hidden" class="lat" name="lat" value="{{ $item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lat : '' }}" />

        <input type="hidden" class="name" name="name" value="{{ $item->item_title }}" />
        <input type="hidden" class="details" name="details" value="Details about restaurant 1" />
        <input type="hidden" class="image" name="image" value="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}" />
    </div>
    <img src="{{ !empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp')) }}" alt="item" class="img-fluid categories__items__list__item__img w-100" />
    <div class="categories__items__list__item__info">
        <ul class="categories__items__list__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto">
            <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                <i class="las la-map-marker-alt icon"></i>
                <a href="{{ route('page.state', ['state_slug'=>$item->state->state_slug]) }}"><span>{{ $item->state->state_name }}</span></a>
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
                <h6 class="dark-color fw-bold dark-color mt-base mb-base">
                    <a href="{{ route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]) }}">{{ $item->item_title }}</a>
                </h6>
                <div class="mb-base d-flex gap-2">
                    @if($all_categories_count > \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY)
                    <span class="category">{{ __('categories.and') . " " . strval($all_categories_count - \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY) . " " . __('categories.more') }}</span>
                    @endif
                    <br />
                    <i class="las la-map-marker-alt categories__items__list__item__info__sub-info__item__icon"></i>

                    @if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)
                    <address>
                        {{ $item->item_address_hide == \App\Models\Item::ITEM_ADDR_NOT_HIDE ? $item->item_address . ',' : '' }}
                        <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc" href="{{ route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug]) }}">{{ $item->city->city_name }}</a>,
                        <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc" href="{{ route('page.state', ['state_slug'=>$item->state->state_slug]) }}">{{ $item->state->state_name }}</a>
                        ,{{ $item->item_postal_code }}
                    </address>
                    @endif
                    </a>
                </div>
            </div>

            <div class="logo mt-md">
                @foreach($get_all_categories as $free_item_categories_key => $category)
                <a href="{{ route('page.category', $category->category_slug) }}">
                    <span class="category">
                        @if($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_ICON)

                        @if(!empty($category->category_icon))
                        <i class="{{ str_replace('fas fa','las la',$category->category_icon) }}"></i>
                        @else
                        <i class="fa-solid fa-heart"></i>
                        @endif
                        @elseif($category->category_thumbnail_type == \App\Models\Category::CATEGORY_THUMBNAIL_TYPE_IMAGE)
                        @if($category->category_image)
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('category/'. $category->category_image) }}" alt="restaurant" class="img-fluid places__item__header__img" />
                        @else
                        <img src="{{ asset('frontend/images/placeholder/category-image.webp') }}" alt="restaurant" class="img-fluid" />
                        @endif
                        @endif
                    </span>
                </a>
                @endforeach

            </div>
        </div>
        <div class="categories__items__list__item__info__footer d-flex justify-content-between align-items-center gap-3 position-relative">
            <p class="mb-0 categories__items__list__item__info__footer__opens">
                <i class="las la-clock icon"></i>
                <span>يعمل من</span>
                @if($item->item_hour_show_hours == \App\Models\Item::ITEM_HOUR_SHOW)
                @if($item->hasOpened())
                <span class="item-box-hour-span-opened">{{ __('item_hour.frontend-item-box-hour-opened') }}</span>
                @else
                <span class="item-box-hour-span-closed">{{ __('item_hour.frontend-item-box-hour-closed') }}</span>
                @endif
                @endif
            </p>

            <button type="button" class="white-space-nowrap categories__items__list__item__info__footer__btn btn btn-primary my-btn">
                <i class="las la-phone"></i>
                <span>تواصل</span>
            </button>
            <div class="flex flex-column gap-2 categories__items__list__item__info__footer__contacts position-absolute">
                <!-- <a
                        href="#"
                        class="categories__items__list__item__info__footer__contacts__item"
                        ><i class="las la-map-marker-alt"></i
                      ></a> -->
                @if($item->item_website)
                <a href="{{ $item->item_website}}" class="categories__items__list__item__info__footer__contacts__item"><i class="las la-globe-europe"></i></a>
                @endif
                <a href="https://wa.me/{{ $item->item_phone}}" class="categories__items__list__item__info__footer__contacts__item"><i class="lab la-whatsapp"></i></a>
                <a href="tel:{{ $item->item_phone}}" class="categories__items__list__item__info__footer__contacts__item"><i class="las la-phone"></i></a>
            </div>
        </div>
    </div>
</div>
