@extends('frontend.layouts.app')

@push('styles')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
    @endif

    <link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet"/>

@endpush

@section('content')

    <section class="categories pt pb mt-header-height">
        <div class="container">
            <div class="d-flex gap-4 position-relative overflow-hidden">
                <!-- items  -->
                <div class="cateogires__items flex-fill">
                    <!-- start order-area  -->
                    <!-- <div class="categories__orders d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                          <div
                            class="d-flex flex-column flex-lg-row align-items-lg-center gap-4"
                          >
                            <div
                              class="d-flex gap-3 align-items-center categories__orders__item"
                            >
                              <label for="selectOrderBy" class="white-space-nowrap">
                                <i class="las la-filter"></i>
                                <span> ترتيب حسب: </span>
                              </label>
                              <select class="form-select border-0" id="selectOrderBy">
                                <option value="all">الاقرب</option>
                                <option value="1">الابعد</option>
                                <option value="2">الاقرب</option>
                                <option value="3">الاقرب</option>
                              </select>
                            </div>
                            <div
                              class="d-flex gap-3 align-items-center categories__orders__item"
                            >
                              <label
                                for="selectNumberOfProducts"
                                class="white-space-nowrap"
                              >
                                <i class="las la-cubes"></i>
                                <span> عدد الفروع: </span>
                              </label>
                              <select
                                class="form-select border-0"
                                id="selectNumberOfProducts"
                              >
                                <option value="all">12</option>
                                <option value="1">8</option>
                                <option value="2">20</option>
                                <option value="3">20</option>
                              </select>
                            </div>
                          </div>
                        </div> -->
                </div>
            </div>
            <h1 class="fw-bold primary-color mt-lg mb-xl text-center">
                {{$category->category_description}}
            </h1>
            <h2 class="fw-bold primary-color mt-lg mb-xl text-center">
                البحث ب اسم المجال
            </h2>
            <form action="{{route('page.search_categories')}}" class="row justify-content-center my-5">
                <div class="search">
                    <input type="text" name="search_keyword"
                           class="searchTerm" placeholder="البحث ب اسم المجال؟"
                           value="{{request('search_keyword')}}">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>

            <div class="categories__letters d-flex align-items-center justify-content-center flex-wrap gap-3 mb-md">
                <a href="{{route('page.sub_categories',['category_slug'=>$category->category_slug])}}">الكل</a>
                @foreach($index as $key => $v)
                    <a data-query="{{$v}}"
                       href="{{route('page.sub_categories',['search_keyword'=>request('search_keyword'),'category_slug'=>$category->category_slug,'char'=>$v])}}">{{$v}}</a>
                @endforeach
            </div>

            <div class="registeration__categories">
                <div class="row row-cols-xl-5 g-5">
                    @foreach($categories as $category)
                        <div class="col d-flex justify-content-center" style="display:table !important">
                            <a

                                href="{{route('page.category',['parent_category_slug'=> $category->parent->category_slug,'category_slug'=>$category->category_slug])}}"
                                class="registeration__categories__item" style="display: table-cell;
padding: 1.2rem;">
                                <img src="{{asset('storage/category/' . $category->category_image)}}"
                                     alt="{{$category->category_name??$category->alt_image}}"
                                     class="img-fluid registeration__categories__img"/>
                                {{$category->category_name}} <span>({{$category->items_count}})</span></a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="row">
            <div style="margin: auto;margin-top: auto;margin-top: 4rem;">
                {{ $categories->appends(request()->query())->links() }}
            </div>
        </div>
    </section>

@endsection
