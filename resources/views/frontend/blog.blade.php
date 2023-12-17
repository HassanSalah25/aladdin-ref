@extends('frontend.layouts.app')

@push('styles')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
    @endif

    <link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet"/>
    <!-- my css  -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/blogs.css')}}"/>

@endpush

@section('content')
    <!-- **************************            ******************************  -->
    <!-- ************************** end header ******************************  -->
    <!-- **************************            ******************************  -->

    <!-- bread crumb  -->
    <div class="mt-header-height">
        <div class="container">
            <nav
                class="breadcrumb-wrapper"
                style="--bs-breadcrumb-divider: '>'"
                aria-label="breadcrumb"
            >
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('frontend.header.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('page.blogs')}}">{{__('frontend.footer.blogs')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      {{$blog->title}}
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="blogs pb">
        <div class="container">
            <div class="blogs__main-item">
                <img
                    src="{{asset('storage/blog/'.$blog->image)}}"
                    alt="blog item"
                    class="img-fluid blogs__main-item__main-img"
                />
                <h1 class="blogs__main-item__title d-block">
                    {{$blog->title}}
                </h1>
                <p class="blogs__main-item__desc">
                    {!!  $blog->content !!}
                </p>
                <span class="blogs__main-item__time d-flex align-items-center gap-2">
            <!-- <i class="las la-clock icon"></i> -->
            <img
                src="{{asset('assets/images/clock-icon.svg')}}"
                alt="clock icon"
                class="img-fluid"
            />
            <span>
                    {{$blog->created_at->format('d/m/Y h:i A')}}
            </span>
          </span>
                <div class="d-flex align-items-center gap-4">
                    <a
                        class="btn my-btn profile__details__contact-btn share--btn position-relative"
                        data-bs-toggle="modal" data-bs-target="#share-modal"
                    >
                        <!-- <i class="las la-share"></i> -->
                        <img
                            src="{{asset('assets/images/share-icon.svg')}}"
                            alt="share icon"
                            class="img-fluid"
                        />
                        <span>شارك</span>
                    </a>
                    <a
                        href="#"
                        data-bs-toggle="modal" data-bs-target="#commentModal"
                        class="blogs__main-item__btn d-flex align-items-center gap-3"
                    >
                        <!-- <i class="las la-thumbs-up"></i> -->
                        <img
                            src="{{asset('assets/images/thumb-icon.svg')}}"
                            alt="thumb icon"
                            class="img-fluid"
                        />
                        <span>تعليق</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


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

    <!-- Modal - Comment -->
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">رأيك يهمنا</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('blog.reviews.store', $blog->blog_slug) }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-row mb-3">
                                            <label for="rating" class="text-black">{{ __('review.backend.overall-rating') }}</label><br>
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
                                                        <input type="radio" value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FIVE }}" name="rating" id="rating-5">
                                                        <label for="rating-5"></label>
                                                        <input type="radio" value="{{ \App\Models\Item::ITEM_REVIEW_RATING_FOUR }}" name="rating" id="rating-4">
                                                        <label for="rating-4"></label>
                                                        <input type="radio" value="{{ \App\Models\Item::ITEM_REVIEW_RATING_THREE }}" name="rating" id="rating-3">
                                                        <label for="rating-3"></label>
                                                        <input type="radio" value="{{ \App\Models\Item::ITEM_REVIEW_RATING_TWO }}" name="rating" id="rating-2">
                                                        <label for="rating-2"></label>
                                                        <input type="radio"  value="{{ \App\Models\Item::ITEM_REVIEW_RATING_ONE }}" name="rating" id="rating-1">
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
                                            <span class="my-input-container__label">{{ __('review.backend.tell-experience') }}</span>
                                            <textarea id="commentTextarea" name="body" class="form-control my-input-container__input"></textarea>
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
@endsection

@push('scripts')
    <script src="{{ asset('frontend/vendor/goodshare/goodshare.min.js') }}"></script>

@endpush
