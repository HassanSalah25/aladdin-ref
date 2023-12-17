<header
    class="header @if(\Request::route()->getName() != 'page.home') {{'white-header'}} @endif @if(\Request::route()->getName() == 'page.home') {{'home-header'}} @endif  position-fixed  top-0 left-0 w-100 d-flex align-items-center">
    <div class="container collapse navbar-collapse d-flex justify-content-between">
        <!-- logo  -->
        <a href="{{ route('page.home') }}">
            <img src="{{ Storage::disk('public')->url('setting/' . $site_global_settings->setting_site_logo) }}"
                 alt="alaa eldin" class="img-fluid header__logo"/>
        </a>
        <!-- menu  -->
        <nav class="header__navbar d-none d-xl-flex align-items-center justify-content-center gap-3">
            <div class="header__navbar__menu-bg d-xl-none"></div>
            <a class="header__navbar__navbar-item {{active_route('page.home')}}"
               href="{{ route('page.home') }}">{{ __('frontend.header.home') }}</a>
            <a class="header__navbar__navbar-item {{active_route('page.categories')}}"
               href="{{ route('page.categories') }}">{{ __('categories.categories') }}</a>
            <!--<a class="header__navbar__navbar-item" href="{{ route('page.popular')}}">{{ __('frontend.search.most-common-search') }}</a>-->
            <a class="header__navbar__navbar-item {{active_route('page.about')}}"
               href="{{ route('page.about')}}">{{ __('frontend.footer.about') }}</a>
            <a class="header__navbar__navbar-item {{active_route('page.states')}}"
               href="{{ route('page.states')}}">{{ __('frontend.search.state-or-city') }}</a>

            @guest
                <a class="header__navbar__navbar-item {{Route::currentRouteName() == 'page.pricing'? 'active' : ''}}"
                   class="header__navbar__navbar-item dropdown-item" href="{{route('page.pricing')}}">
                    {{ __('frontend.header.register') }}
                </a>

            @else
                <div class="nav-item dropdown header__navbar__navbar-item__dropdown">
                    <a class="header__navbar__navbar-item dropdown-toggle p-0" href="#" id="navbarDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            @if(Auth::user()->isAdmin())
                                <a class="header__navbar__navbar-item dropdown-item" href="{{ route('admin.index') }}">
                                    {{ __('frontend.header.dashboard') }}
                                </a>
                            @else
                                <a class="header__navbar__navbar-item dropdown-item" href="{{ route('user.index') }}">
                                    {{ __('frontend.header.dashboard') }}
                                </a>
                            @endif
                        </li>
                        <li>
                            <a class="header__navbar__navbar-item dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </nav>
        <div id="all-div-search-id" style="display: none" class="header__navbar w-75 d-none align-items-center justify-content-center gap-3"
             style="margin: 0px; width: 778px; position: absolute; padding: 5px 0px 0px; left: 27% !important;">
            <form class=" autocomplete-search searchForm"
                  id="autocomplete-search-id" action="{{route('page.search')}}">
                <div id="search-dropdown-id" class="col-xs-12">
                    <div id="dropdown-parent-id" class="dropdown-parent what_input_field_tpm"
                         style="height: 66px; margin: 0px; border-radius: 10px;">

                        <div id="search-by-id" class="autocomplete mb-3 search-by" style="height: 44px">
                            <select name="search_category" class="form-select search_category border-0 px-5 mt-2 d-md-block" style="">
                                <option value="">{{ __('frontend.search.all') }}</option>
                                @if(@$search_categories)
                                    @foreach(@$search_categories as $category)
                                    <option value="{{$category->id}}"
                                    {{request('search_category') == $category->id ? 'selected' : ''}}
                                    >{{$category->category_name}}</option>
                                @endforeach
                                @endif
                            </select>
                            <select name="search_category_2"
                                    class="form-select search_category_2 border-0 px-5 mt-2 d-md-block" style="">
                                <option value="">__</option>
                            </select>
                        </div>
                        <div id="search-by-id" class="autocomplete search-by" style="height: 44px;">
                            <img class="search-img lazyloaded" data-src="" alt=""
                                 src="{{asset('assets/icons8-search-50.png')}}" style="width: 8%;">
                            <input autocomplete="off" name="search_query" type="text" value="{{request('search_query')}}"
                                   placeholder="{{ __('frontend.search.item') }}"
                                   class="autocomplete search-query-what what_original_top search-what"
                                   style="padding: 5px 0px 5px 0px;" >
                            <img class="loading-search-img-ar lazyload loading-search-what"
                                 data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                            <div class="autocomplete-items fixed-height search-whatautocomplete-list"></div>
                        </div>
                        <div id="inWhat-id" class="autocomplete dropdown inWhat"
                             style=" height: 66px;width: 273px; padding: 10px 0px;">
                            <img class="city-img lazyloaded" width="50" height="50"
                                 data-src="{{asset('assets/icons8-building-100.png')}}" alt=""
                                 src="{{asset('assets/icons8-building-100.png')}}">
                            <input autocomplete="off" name="search_city_state"
                                   class="btn btn-default autocomplete search-query-where where_original_top select-search"
                                   type="text" required
                                   value="{{ request('search_city') ?? request('search_state') ?? request('search_city_state') }}"
                                   placeholder="{{ __('frontend.search.state_city') }}" value="{{request('search_city_state')}}"
                                   style="height: 46px; font-size: 16px;width: 100%" data-gtm-form-interact-field-id="1">
                            <img class="loading-search-img-ar lazyload"
                                 data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                            <div class="select-searchautocomplete-list autocomplete-items fixed-height">
                            </div>
                        </div>
                        <input id="search-submit-btn-id" class="search-submit-btn btn" type="submit" value="ابحث"
                               style="display: block;">
                        <input id="search-submit-img-id" class="search-submit-img" type="image"
                               src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/new_design/Search.png?9"
                               alt="Submit" style="display: none;">
                    </div>
                </div>


            </form>

            <div id="category-redirect-id" class="col-xs-12 category-redirect" style="display: none;">
                <div>
                    <a href="/ar/condensed-category/%D9%85%D8%B7%D8%A7%D8%B9%D9%85">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/restaurant_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/restaurant_icon.png">
</span>
                        <span>مطاعم</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/condensed-category/%D9%88%D8%AC%D8%A8%D8%A7%D8%AA%20%D8%B3%D8%B1%D9%8A%D8%B9%D8%A9">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/fastfood_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/fastfood_icon.png">
</span>
                        <span>وجبات سريعة</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/condensed-category/%D9%83%D8%A7%D9%81%D9%8A%D9%87%D8%A7%D8%AA">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/cafe_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/cafe_icon.png">
</span>
                        <span>كافيهات</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/condensed-category/%D9%85%D8%AE%D8%A7%D8%A8%D8%B2%20%D9%88%D8%AD%D9%84%D9%88%D9%8A%D8%A7%D8%AA">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/bakeries_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/bakeries_icon.png">
</span>
                        <span>مخابز وحلويات</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/condensed-category/%D8%A3%D9%85%D8%A7%D9%83%D9%86%20%D9%84%D9%84%D8%B3%D9%87%D8%B1">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/night_spots_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/night_spots_icon.png">
</span>
                        <span>أماكن للسهر</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/condensed-category/%D9%81%D9%86%D8%A7%D8%AF%D9%82">
<span>
<img class=" lazyloaded"
     data-src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/hotel_icon.png" alt=""
     src="https://cdn.yellowpages.com.eg/static/webservice/mobile_app/small_icons/hotel_icon.png">
</span>
                        <span>فنادق</span>
                    </a>
                </div>
                <div>
                    <a href="/ar/related-categories">
<span>
<img class="header-more lazyloaded"
     data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/new_design/More.png?120" alt=""
     src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/new_design/More.png?120">
</span>
                        <span>المزيد</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-4">


            {{--<form
                action="https://aladdin-eg.com/search"
                class="d-none align-items-center justify-content-center "
                >
                <!--<select class="form-select border-0">-->
                <!--    <option value="all">الكل</option>-->
                <!--    <option value="1">المطاعم</option>-->
                <!--    <option value="2">الفنادق</option>-->
                <!--    <option value="3">الكافيهات</option>-->
                <!--</select>-->
                <input
                    id="header-input-search"
                    type="search"
                   placeholder="{{ __('categories.search-query-placeholder') }}..​"
                    name="search_query"
                    class="form-control border-0"
                />
                <label
                    for="header-input-search"
                    class="search-and-input-wrapper__icon"
                >
                    <i class="las la-search"></i>
                </label>
                </form>--}}


            @if(app()->getLocale() == 'ar')
                <button data-url="{{ route('page.locale.update', ['user_prefer_language' => 'en' ]) }}"
                        class="border-0 d-flex align-items-center gap-1 header__lang text-capitalize rounded-pill">
                    <span>en</span>
                    <img src="{{ asset('assets/images/lang-en.png') }}" alt="english language" class="img-fluid"/>
                </button>
                <button type="button" class="header__toggle-menu border-0 p-0 bg-transparent d-xl-none"
                        data-value="app()->getLocale()">
                    <i class="las la-bars"></i>
                </button>
            @elseif(app()->getLocale() == 'en')
                <button data-url="{{ route('page.locale.update', ['user_prefer_language' => 'ar' ]) }}"
                        class="border-0 d-flex align-items-center gap-1 header__lang text-capitalize rounded-pill">
                    <span>Eg</span>
                    <img src="{{ asset('assets/images/lang-ar.png') }}" alt="english language" class="img-fluid"/>
                </button>
                <button type="button" class="header__toggle-menu border-0 p-0 bg-transparent d-xl-none"
                        data-value="app()->getLocale()">
                    <i class="las la-bars"></i>
                </button>
            @endif
        </div>

    </div>
</header>

