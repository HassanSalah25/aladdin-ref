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
                </div>
            </div>

            <p class="fw-bold primary-color mt-lg mb-xl text-center">
                البحث ب اسم المجال
            </p>
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

            <div class="registeration__categories">
                <div class="row row-cols-xl-5 g-5">
                    @foreach($categories as $category)
                        <div class="col d-flex justify-content-center" style="display:table !important">
                            <a
                                @if($category->parent)
                                    href="{{route('page.category',['parent_category_slug'=> $category->parent?->category_slug,'category_slug'=>$category->category_slug])}}"
                                @else
                                    href="{{route('page.sub_categories',['category_slug'=>$category->category_slug])}}"
                                @endif
                                class="registeration__categories__item" style="display: table-cell; padding: 1.2rem;">
                                    <img

                                        @if($category->parent)
                                            src="{{asset('storage/category/' . $category->category_image)}}"
                                        @else
                                            src="{{asset('storage/category/' . $category->children->first()?->category_image)}}"
                                        @endif
                                     alt="{{$category->category_name??$category->alt_image}}"
                                     class="img-fluid registeration__categories__img"/>
                                {{$category->category_name}} <span>({{$category->children_count == 0?$category->items_count : $category->children_count}})</span></a>
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
