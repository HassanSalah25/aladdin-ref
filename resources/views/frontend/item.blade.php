@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/category.css') }}"/>
    <style>

        .date {
            background: linear-gradient(#b269ff, #000000e3);
            position: absolute;
            top: 0px;
            color: white;
            padding: 0.8em;
            right: 5%;

            span {
                display: block;
                text-align: center;
            }

            .day {
                font-weight: 700;
                font-size: 24px;
                text-shadow: 2px 3px 2px rgba($ black, 0.18);
            }
        }
    </style>
@endpush
@section('content')
    <!-- bread crumb  -->
    <div class="mt-header-height">
        <div class="container">
            <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('page.home')}}">الرئيسية</a></li>
                    @if(explode('/',url()->previous())[3] == 'category')
                        <li class="breadcrumb-item">
                            <a href="{{route('page.categories')}}">{{ __('backend.homepage.categories') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class=" mb-2" href="{{ route('page.category', $item->category->category_slug) }}">
                                <span class="category">{{ $item->category->category_name }}</span>
                            </a>
                        </li>
                    @elseif(explode('/',url()->previous())[3] == 'state')
                        <li class="breadcrumb-item">
                            <a href="{{ route('page.states') }}">
                                {{ __('frontend.search.state-or-city') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('page.state',$item->state->state_slug) }}">
                                {{ $item->state->state_name }}
                            </a>
                        </li>

                    @endif
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="category">{{ $item->item_title }}</span>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <!-- **************************                       ******************************  -->
    <!-- ************************** start category-swiper ******************************  -->
    <!-- **************************                       ******************************  -->

    <section class="category-swiper" style="text-align:center">
        <div class="container">
            <div class="swiper category-swiper__inner">
                <div class="swiper-wrapper">
                    @if($item->galleries()->count() > 0)
                        @php
                            $item_galleries = $item->galleries()->get();
                        @endphp
                        @foreach($item_galleries as $galleries_key => $gallery)
                            <div class="swiper-slide">
                                <div class="category-slide__item">
                                    <img style="height:300px"
                                         src="{{ empty($gallery->item_image_gallery_name) ? Storage::disk('public')->url('item/gallery/' . $gallery->item_image_gallery_name) : Storage::disk('public')->url('item/gallery/' . $gallery->item_image_gallery_name) }}"
                                         alt="category slider" class="img-fluid"/>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <div class="category-slide__item">
                                <img src="{{ asset('frontend/images/placeholder/full-image-slider-placeholder.png') }}"
                                     alt="category slider" class="img-fluid"/>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
            </div>
        </div>
    </section>

    {{--    <section class="mt-xl mb-xl activites position-relative">
            <div class="container">
                <div class="activites__items d-flex align-items-center flex-wrap gap-4">
                    <div class="activites__title-item d-flex align-items-center justify-content-center text-center">
                        <h3 class="activites__title-item__title m-0 fw-bold">
                            {{ __('frontend.item.branches') }}
                        </h3>
                    </div>
                    @if($item->user?->items->count() > 0)
                        @foreach($item->user->items as $paid_items_key => $single_item)
                            @if($single_item->id != $item->id)
                                <!-- item  -->
                                <div class="activites__item text-center">
                                    <a href="{{ route('page.item', [
                                'category_slug' => $single_item->category->parent?->category_slug ?? $single_item->category->category_slug ,
                                'sub_category_slug' => $single_item->category->category_slug,
                                'state_slug' => $single_item->state->state_slug,
                                'item_slug' => $single_item->item_slug
                            ]) }}" class="h5 mb-0 primary-dark-color">{{ $single_item->item_title }}</a>
                                </div>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
        </section>--}}


    <section class="pt pb profile overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap gap-3" style="position: relative">

                <!-- details  -->
                <div class="profile__details d-flex flex-wrap flex-lg-nowrap gap-4">
                    <div style="position: relative;">
                        @if($item->user?->items->count() > 1)
                            <div class="date">
                                <a href="{{route('page.branches',$item->user)}}" style="color: white">
                                    <span class="month">{{ __('frontend.item.branches') }}    </span>
                                    <span class="day">{{$item->user->items->count()}}</span>
                                </a>
                            </div>
                        @endif
                        <img
                            src=" {{ empty($item->item_image) ? asset('frontend/images/placeholder/full_item_feature_image.webp') : Storage::disk('public')->url('item/' . $item->item_image) }}"
                            alt="profile" class="img-fluid profile__details__img"/>

                    </div>
                    <div class="flex-fill">
                        <!-- head  -->
                        <div class="d-flex flex-wrap align-items-center mb-base gap-5 profile__details__head">
                            <h4 class="dark-color fw-bold m-0 profile__details__title">
                                <h1 class="h4">
                                    {{ $item->item_title }}
                                </h1>
                                <span>
                                <i class="las la-star icon"></i>
                                <span>{{ number_format($item_average_rating, 1) }}</span>
                            </span>
                            </h4>
                            <div class="d-flex flex-wrap align-items-center">
                                @if($item->item_hour_show_hours == \App\Models\Item::ITEM_HOUR_SHOW)
                                    <p class="mb-0 profile__details__opens">
                                        <i class="las la-clock icon"></i>
                                        <span>يعمل من</span>
                                        @if($item->hasOpened())
                                            <span
                                                class="item-box-hour-span-opened">{{ __('item_hour.frontend-item-box-hour-opened') }}</span>
                                        @else
                                            <span
                                                class="item-box-hour-span-closed">{{ __('item_hour.frontend-item-box-hour-closed') }}</span>
                                        @endif
                                    </p>

                                @endif
                                {{--                            <a href="#" class="profile__details__btn btn btn-danger my-btn bg-transparent">نبذة عنا</a>--}}
                                {{--@if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)
                                <a href="#" class="profile__details__btn btn btn-primary my-btn">{{ __('frontend.item.location') }}</a>
                                @endif--}}
                            </div>
                        </div>

                        <!-- desc  -->
                        <p class="mb-sm d-flex gap-2 profile__details__desc gray-color">
                            <i class="las la-map-marker-alt icon"></i>
                            <span>
                            @if($item->item_address_hide == \App\Models\Item::ITEM_ADDR_NOT_HIDE)
                                    {{ $item->item_address }}
                                @endif
                                {{ $item->city->city_name }}, {{ $item->state->state_name }} {{ $item->item_postal_code }}
                        </span>
                        </p>

                        <!-- categories  -->
                        <p class="mb-base gray-color profile__details__desc__categories">
                            <b class="dark-color">التصنيفات: </b>
                            <a class="item_category mb-2"
                               @if($item->category->parent)
                                   href="{{route('page.category',['parent_category_slug'=> $item->category->parent?->category_slug,'category_slug'=>$item->category->category_slug])}}"
                               @else
                                   href="{{route('page.sub_categories',['category_slug'=>$item->category->category_slug])}}"
                                @endif
                            >
                                {{$item->category->category_name}}
                            </a>
                        </p>

                        <!-- contacts  -->
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-4">
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
                                   data-bs-toggle="modal" data-bs-target="#mapModal">
                                    <i class="las la-map-marker"></i>
                                    <span>الموقع</span>
                                </a>
                            @endif
                            @if($item->item_social_whatsapp)
                                <a target="_blank" href="https://wa.me/+020{{ $item->item_social_whatsapp}}"
                                   class="btn my-btn btn-primary btn-p profile__details__contact-btn">
                                    <i class="lab la-whatsapp"></i>
                                    <span>واتساب</span>
                                </a>
                            @endif

                            @if($item->item_website)
                                <a href="{{ $item->item_website}}"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="las la-globe-europe"></i></a>
                            @endif
                            @if($item->item_social_email)
                                <a href="mailto:{{ $item->item_social_email }}"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fa fa-envelope"></i></a>
                            @endif
                            @if($item->item_social_facebook)
                                <a href="{{ $item->item_social_facebook}}"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-facebook"></i></a>
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
                            {{-- @if($item->item_social_whatsapp)
                                 <a href="tel:{{ $item->item_social_whatsapp}}"
                                    class="categories__items__list__item__info__footer__contacts__item"><i
                                         class="fab fa-whatsapp"></i></a>
                             @endif--}}
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
                            {{--@if($item->item_social_youtube)
                                <a href="{{ $item->item_social_youtube}}"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-youtube"></i></a>
                            @endif--}}
                            @if($item->item_social_snapchat)
                                <a href="{{ $item->item_social_snapchat}}"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-snapchat"></i></a>
                            @endif
                            <!-- <a href="#" class="btn my-btn profile__details__contact-btn">
                            <i class="las la-envelope"></i>
                            <span>راسلنا</span>
                        </a> -->
                            <button type="button"
                                    class="btn my-btn profile__details__contact-btn btn-primary share--btn position-relative"
                                    data-bs-toggle="modal" data-bs-target="#share-modal">
                                <i class="las la-share"></i>
                                <span>{{ __('frontend.item.share') }}</span>
                            </button>

                            <button type="button"
                                    class="btn my-btn profile__details__contact-btn btn-primary comment--btn"
                                    data-bs-toggle="modal" data-bs-target="#commentModal">
                                <i class="las la-star icon"></i>
                                <span>تقييم</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- other  -->
                @if(!$item->item_image)
                    <div class="profile__other text-center">
                        <h5 class="fw-medium dark-color mb-sm">هل لديك صلة بهذا العمل؟</h5>
                        <!--   <p class="profile__other__desc gray-color mb-base lh">
                               لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي
                               الشكل وليس المحتوى) ويُستخدم في صناعات المطابع
                           </p> -->
                        <div class="d-flex flex-column align-items-center gap-3">
                            <button data-bs-toggle="modal" data-bs-target="#idenityModal"
                                    class="btn btn-primary my-btn">طلب
                                اثبات ملكيه
                            </button>
                            <button data-bs-toggle="modal" data-bs-target="#reportModal" class="btn btn-primary my-btn">
                                الإبلاغ عن بيانات غير صحيحة ​
                            </button>
                        </div>
                        @else
                            <div class="profile__other text-center">
                                <h5 class="fw-medium dark-color mb-sm">هل لديك صلة بهذا العمل؟</h5>
                                <!--   <p class="profile__other__desc gray-color mb-base lh">
                                       لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي
                                       الشكل وليس المحتوى) ويُستخدم في صناعات المطابع
                                   </p> -->
                                <div class="d-flex flex-column align-items-center gap-3">
                                    <button disabled data-bs-toggle="modal" data-bs-target="#idenityModal"
                                            class="btn btn-primary my-btn">طلب
                                        اثبات ملكيه
                                    </button>
                                    <button disabled data-bs-toggle="modal" data-bs-target="#reportModal"
                                            class="btn btn-primary my-btn">
                                        الإبلاغ عن بيانات غير صحيحة ​
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
            </div>
            <ul class="profile__tabs nav nav-pills mb-xl mt-md container position-relative gap-5" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        {{ __('frontend.item.description') }} ​
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        التعليقات
                    </button>
                </li>
            </ul>
            <div class="container">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <!-- <h3 class="fw-bold primary-dark-color mb-base profile__tabs-title">
                            تصنيفات
                        </h3> -->
                        <p class="mb-base gray-color profile__details__desc__categories profile__tabs-desc">
                            <b class="dark-color"> </b> {!! clean(nl2br($item->item_description), array('HTML.Allowed' => 'b,strong,i,em,u,ul,ol,li,p,br')) !!}
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        @if($reviews->count() > 0)
                            @foreach($reviews as $comment )
                                <div class="row my-3">
                                    <div class="col-lg-6">
                                        <div class="profile__comment">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4 class="dark-color fw-bold profile__comment__name mb-0">
                                                    {{ \App\Models\User::find($comment->author_id)->name ?? "temp-user-" . $comment->author_id  }}
                                                </h4>
                                                <span class="profile__comment__clock">
                                    <i class="las la-clock icon"></i>
                                    {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                </span>
                                            </div>
                                            <p class="gray-color lh profile__comment__desc mt-base mb-md">
                                                {{ $comment->body }}
                                            </p>

                                            <!-- contacts  -->
                                            <!--                                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-4">
                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn share&#45;&#45;btn position-relative">
                                                <i class="las la-share"></i>
                                                <span>شارك</span>
                                                <div class="flex flex-column gap-2 share&#45;&#45;items position-absolute">
                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-facebook-f"></i></a>
                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-twitter"></i></a>

                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-instagram"></i></a>

                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-whatsapp"></i></a>
                                                </div>
                                            </button>
&lt;!&ndash;                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn thumb&#45;&#45;btn">
                                                <i class="las la-thumbs-up icon"></i>
                                                <img src="{{asset('assets/images/thumb-icon.svg')}}" alt="thumb"
                                                     class="img-fluid d-none"/>
                                                <span>اعجبنى</span>
                                            </button>&ndash;&gt;
&lt;!&ndash;                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn comment&#45;&#45;btn"
                                                    data-bs-toggle="modal" data-bs-target="#commentModal">
                                                <i class="las la-comment-alt icon"></i>
                                                <span>تعليق</span>
                                            </button>&ndash;&gt;
                                        </div>-->
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">رأيك يهمنا</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST"
                                      action="{{ route('items.reviews.pages.store', ['item_slug' => $item->item_slug]) }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-row mb-3">
                                            <label for="rating"
                                                   class="text-black">{{ __('review.backend.overall-rating') }}</label><br>
                                            {{--                                        <select class="rating_stars" name="rating">--}}
                                            {{--                                            <option value="{{ \App\Models\Item::ITEM_REVIEW_RATING_ONE }}">{{ __('rating_summary.1-stars') }}</option>--}}
                                            {{--                                            <option value="{{ \App\Models\Item::ITEM_REVIEW_RATING_TWO }}">{{ __('rating_summary.2-stars') }}</option>--}}
                                            {{--                                            <option value="{{ \App\Models\Item::ITEM_REVIEW_RATING_THREE }}">{{ __('rating_summary.3-stars') }}</option>--}}
                                            {{--                                            <option value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FOUR }}">{{ __('rating_summary.4-stars') }}</option>--}}
                                            {{--                                            <option value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FIVE }}">{{ __('rating_summary.5-stars') }}</option>--}}
                                            {{--                                        </select>--}}
                                            <div class="">
                                                <div class="">
                                                    <div class="rating">
                                                        <input type="radio"
                                                               value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FIVE }}"
                                                               name="rating" id="rating-5">
                                                        <label for="rating-5"></label>
                                                        <input type="radio"
                                                               value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FOUR }}"
                                                               name="rating" id="rating-4">
                                                        <label for="rating-4"></label>
                                                        <input type="radio"
                                                               value="{{ \App\Models\Item::ITEM_REVIEW_RATING_THREE }}"
                                                               name="rating" id="rating-3">
                                                        <label for="rating-3"></label>
                                                        <input type="radio"
                                                               value="{{ \App\Models\Item::ITEM_REVIEW_RATING_TWO }}"
                                                               name="rating" id="rating-2">
                                                        <label for="rating-2"></label>
                                                        <input type="radio"
                                                               value="{{ \App\Models\Item::ITEM_REVIEW_RATING_ONE }}"
                                                               name="rating" id="rating-1">
                                                        <label for="rating-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('rating')
                                            <span class="invalid-tooltip">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="commentTextarea">
                                            <span
                                                class="my-input-container__label">{{ __('review.backend.tell-experience') }}</span>
                                            <textarea id="commentTextarea" name="comment_form"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="idenityModal" tabindex="-1" aria-labelledby="idenityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">اترك تعليقك</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('comments.proof_ownership')}}" method="POST">
                                    @csrf

                                    <input type="hidden" name="item_id" value="{{$item->id}}">
                                    <div class="form-group">
                                        <label for="reporterusername">
                                            <span class="">الأسم</span>
                                        </label>
                                        <input id="reporterusername" name="reporterusername" type="text"
                                               class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="reporterphone">
                                            <span class="">رقم الهاتف</span>
                                        </label>
                                        <input id="reporterphone" type="number" name="reporterphone"
                                               class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="reporttext">
                                            <span class="my-input-container__label">التعليق</span>
                                            <textarea id="reporttext" name="reporttext"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this modal code where you want to display the map -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Location Map</h5>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the map here -->
                    <div id="mapid-box"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">اترك تعليقك</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('comments.report_incorrect')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{$item->id}}">
                                    <div class="form-group">
                                        <label class="" for="reporterusername">
                                            <span class="">الاسم</span>
                                        </label>
                                        <input id="reporterusername" type="text" name="reporterusername"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="reporterphone">
                                            <span class="">رقم الهاتف</span>
                                        </label>
                                        <input id="reporterphone" type="number" name="reporterphone"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="reporttext">
                                            <span class="my-input-container__label">التعليق</span>
                                            <textarea id="reporttext" name="reporttext"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - share -->
    <div class="modal fade" id="share-modal" tabindex="-1" role="dialog" aria-labelledby="share-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('frontend.item.share-listing') }}</h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            <p>{{ __('frontend.item.share-listing-social-media') }}</p>

                            <!-- Create link with share to Facebook -->
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-facebook" href=""
                               data-social="facebook">
                                <i class="fab fa-facebook-f"></i>
                                {{ __('social_share.facebook') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-twitter" href=""
                               data-social="twitter">
                                <i class="fab fa-twitter"></i>
                                {{ __('social_share.twitter') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-linkedin" href=""
                               data-social="linkedin">
                                <i class="fab fa-linkedin-in"></i>
                                {{ __('social_share.linkedin') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-blogger" href=""
                               data-social="blogger">
                                <i class="fab fa-blogger-b"></i>
                                {{ __('social_share.blogger') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-pinterest" href=""
                               data-social="pinterest">
                                <i class="fab fa-pinterest-p"></i>
                                {{ __('social_share.pinterest') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-evernote" href=""
                               data-social="evernote">
                                <i class="fab fa-evernote"></i>
                                {{ __('social_share.evernote') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-reddit" href=""
                               data-social="reddit">
                                <i class="fab fa-reddit-alien"></i>
                                {{ __('social_share.reddit') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-buffer" href=""
                               data-social="buffer">
                                <i class="fab fa-buffer"></i>
                                {{ __('social_share.buffer') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-wordpress" href=""
                               data-social="wordpress">
                                <i class="fab fa-wordpress-simple"></i>
                                {{ __('social_share.wordpress') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-weibo" href=""
                               data-social="weibo">
                                <i class="fab fa-weibo"></i>
                                {{ __('social_share.weibo') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-skype" href=""
                               data-social="skype">
                                <i class="fab fa-skype"></i>
                                {{ __('social_share.skype') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-telegram" href=""
                               data-social="telegram">
                                <i class="fab fa-telegram-plane"></i>
                                {{ __('social_share.telegram') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-viber" href=""
                               data-social="viber">
                                <i class="fab fa-viber"></i>
                                {{ __('social_share.viber') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-whatsapp" href=""
                               data-social="whatsapp">
                                <i class="fab fa-whatsapp"></i>
                                {{ __('social_share.whatsapp') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-wechat" href=""
                               data-social="wechat">
                                <i class="fab fa-weixin"></i>
                                {{ __('social_share.wechat') }}
                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-line" href=""
                               data-social="line">
                                <i class="fab fa-line"></i>
                                {{ __('social_share.line') }}
                            </a>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal"
                            aria-label="Close">{{ __('backend.shared.cancel') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('frontend/vendor/goodshare/goodshare.min.js') }}"></script>
    <!-- Modify the JavaScript to use Google Maps -->
    <script>
        function initMap() {
            var window_height = $(window).height();

            $('#mapid-box').css('height', window_height + 'px');

            var locations = [];

            @if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR)

            var popup_item_title = '{{ $item->item_title }}';

            @if($item->item_address_hide)
            var popup_item_address = '{{ $item->city->city_name . ', ' . $item->state->state_name . ' ' . $item->item_postal_code }}';
            @else
            var popup_item_address = '{{ $item->item_address . ', ' . $item->city->city_name . ', ' . $item->state->state_name . ' ' . $item->item_postal_code }}';
            @endif
            var popup_item_get_direction = '<a target="_blank" href="' + '{{ 'https://www.google.com/maps/dir/?api=1&destination=' . $item->item_lat . ',' . $item->item_lng }}' + '"><i class="fas fa-directions"></i> ' + '{{ __('google_map.get-directions') }}' + '</a>';

            @if($item->getCountRating() > 0)
            var popup_item_rating = '{{ $item->item_average_rating }}' + '/5';
            var popup_item_reviews = ' - {{ $item->getCountRating() }}' + ' ' + '{{ __('category_image_option.map.review') }}';
            @else
            var popup_item_rating = '';
            var popup_item_reviews = '';
            @endif

            var popup_item_feature_image_link = '<img src="' + '{{ !empty($item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp') }}' + '">';
            var popup_item_link = '<a href="' + '{{ route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ]) }}' + '" target="_blank">' + popup_item_title + '</a>';

            locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", {{ $item->item_lat }}, {{ $item->item_lng }}]);

            @endif


            var infowindow = null;
            var infowindow_hover = null;

            var map = new google.maps.Map(document.getElementById('mapid-box'), {
                zoom: 12,
                //center: new google.maps.LatLng(-33.92, 151.25),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            //create empty LatLngBounds object
            var bounds = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            console.log(locations)
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: '{{ Storage::disk('public')->url('setting/'. $site_global_settings->setting_site_favicon) }}'
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
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js??v=quarterly&key={{ $site_global_settings->setting_site_map_google_api_key }}&callback=initMap"></script>

@endpush
