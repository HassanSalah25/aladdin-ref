@extends('backend.admin.layouts.app')

@section('styles')
    <link href="{{ asset('backend/vendor/simplemde/dist/simplemde.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/vendor/spectrum/spectrum.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('advertisement.add-ad') }}</h1>
            <p class="mb-4">{{ __('advertisement.add-ad-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.advertisements.index') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-backspace"></i>
                </span>
                <span class="text">{{ __('backend.shared.back') }}</span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="row mb-2">
                        <div class="col-12">
                            <form class="form-inline" action="{{ route('admin.advertisements.create') }}" method="GET">
                                <div class="form-group mr-2">
                                    <select class="custom-select @error('advertisement_place') is-invalid @enderror"
                                            name="advertisement_place" onchange="$('#ad-create-form').remove();">
                                        <option value="0">{{ __('advertisement.select-ad-place') }}</option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_HOME_PAGES }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_HOME_PAGES ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-home-page') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_LISTING_SEARCH_PAGE }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_LISTING_SEARCH_PAGE ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-listing-search') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_CATEGORY }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_CATEGORY ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-category') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_STATE }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_STATE ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-state') }}
                                        </option>
<!--                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_CATEGORY }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_CATEGORY ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-category') }}
                                        </option>-->

<!--                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-business-listing') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_BLOG_POSTS_PAGES }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_POSTS_PAGES ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-blog-posts') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_BLOG_TOPIC_PAGES }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_TOPIC_PAGES ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-blog-topic') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_BLOG_TAG_PAGES }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_TAG_PAGES ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-blog-tag') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_PLACE_SINGLE_POST_PAGE }}" {{ $advertisement_place == \App\Models\Advertisement::AD_PLACE_SINGLE_POST_PAGE ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-place-single-post') }}
                                        </option>-->

                                    </select>
                                    @error('ad_place')
                                    <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit"
                                        class="btn btn-primary mr-2">{{ __('advertisement.load-form') }}</button>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <a class="btn btn-sm btn-outline-info rounded text-info" id="create-ad-page-help">
                                <i class="fas fa-question-circle"></i>
                                {{ __('advertisement.create-ad-page-help') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-10 col-lg-6">
                    @if($advertisement_place > 0)
                        <form id="ad-create-form" method="POST" action="{{ route('admin.advertisements.store') }}">
                            @csrf
                            <input name="advertisement_place" value="{{ $advertisement_place }}" type="hidden"
                                   id="input_advertisement_place">

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="advertisement_name"
                                           class="text-black">{{ __('advertisement.ad-name') }}</label>
                                    <input id="advertisement_name" type="text"
                                           class="form-control @error('advertisement_name') is-invalid @enderror"
                                           name="advertisement_name" value="{{ old('advertisement_name') }}" autofocus>
                                    @error('advertisement_name')
                                    <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row my-3 vertical-image" style="display:none">
                                <div class="col-md-6">
                                    <button id="upload_image" type="button" class="btn btn-primary btn-sm mb-2">
                                        <i class="fa-solid fa-file-image"></i>
                                        {{ __('backend.item.select-image') }}
                                    </button>
                                    <a class="btn btn-danger btn-sm text-white" id="delete_category_image_button">
                                        <i class="fas fa-trash-alt"></i>
                                        {{ __('category_image_option.form-category-image-delete') }}
                                    </a>
                                    <input id="category_image" type="hidden" name="image1" value="{{ old('image1') }}">
                                </div>
                                <div class="col-md-6">
                                    <img id="image_preview"
                                         src="{{ old('image1') ? old('image1') : (!empty($all_page_about_settings->slider_image_1) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_1) : asset('backend/images/placeholder/full_item_feature_image.webp')) }}"
                                         class="img-responsive">
                                </div>
                            </div>

                            <div class="row mt-3 horizontal-image">
                                <div class="col-md-6">
                                    <button id="upload_image2" type="button" class="btn btn-primary btn-sm mb-2">
                                        <i class="fa-solid fa-file-image"></i>
                                        {{ __('backend.item.select-image') }}
                                    </button>
                                    <a class="btn btn-danger btn-sm text-white" id="delete_category_image_button2">
                                        <i class="fas fa-trash-alt"></i>
                                        {{ __('category_image_option.form-category-image-delete') }}
                                    </a>
                                    <input id="category_image2" type="hidden" name="image2" value="{{ old('image2') }}">
                                </div>
                                <div class="col-md-6">
                                    <img id="image_preview2"
                                         src="{{ old('image2') ? old('image2') : (!empty($all_page_about_settings->slider_image_2) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_2) : asset('backend/images/placeholder/full_item_feature_image.webp')) }}"
                                         class="img-responsive">
                                </div>
                            </div>

                            {{-- <div class="row form-group">

                                 <div class="col-md-12">
                                     <label class="text-black" for="advertisement_code">{{ __('advertisement.ad-code') }}</label>
                                     <textarea rows="6" id="advertisement_code" type="text" class="form-control @error('advertisement_code') is-invalid @enderror" name="advertisement_code">{{ old('advertisement_code') }}</textarea>
                                     @error('advertisement_code')
                                     <span class="invalid-tooltip">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>--}}

                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_status">{{ __('advertisement.ad-status') }}</label>

                                    <select class="custom-select @error('advertisement_status') is-invalid @enderror"
                                            name="advertisement_status">
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_STATUS_ENABLE }}" {{ old('advertisement_status') == \App\Models\Advertisement::AD_STATUS_ENABLE ? 'selected' : '' }}>{{ __('advertisement.ad-status-enable') }}</option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_STATUS_DISABLE }}" {{ old('advertisement_status') == \App\Models\Advertisement::AD_STATUS_DISABLE ? 'selected' : '' }}>{{ __('advertisement.ad-status-disable') }}</option>
                                    </select>
                                    @error('advertisement_status')
                                    <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_position">{{ __('advertisement.ad-position') }}</label>
                                    <select
                                        class="custom-select position-image @error('advertisement_position') is-invalid @enderror"
                                        name="advertisement_position">

                                        <!--                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_BEFORE_BREADCRUMB }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_BEFORE_BREADCRUMB ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-before-breadcrumb') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_AFTER_BREADCRUMB }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_AFTER_BREADCRUMB ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-after-breadcrumb') }}
                                        </option>-->
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-before-content') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_AFTER_CONTENT }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_AFTER_CONTENT ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-after-content') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-sidebar-before-content') }}
                                        </option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT }}" {{ old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT ? 'selected' : '' }}>
                                            {{ __('advertisement.ad-position-sidebar-after-content') }}
                                        </option>

                                    </select>
                                    @error('advertisement_position')
                                    <span class="invalid-tooltip">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                            </div>

<!--                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_alignment">{{ __('advertisement.ad-alignment') }}</label>

                                    <select class="custom-select @error('advertisement_alignment') is-invalid @enderror"
                                            name="advertisement_alignment">
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_ALIGNMENT_LEFT }}" {{ old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_LEFT ? 'selected' : '' }}>{{ __('advertisement.ad-alignment-left') }}</option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_ALIGNMENT_CENTER }}" {{ old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_CENTER ? 'selected' : '' }}>{{ __('advertisement.ad-alignment-center') }}</option>
                                        <option
                                            value="{{ \App\Models\Advertisement::AD_ALIGNMENT_RIGHT }}" {{ old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_RIGHT ? 'selected' : '' }}>{{ __('advertisement.ad-alignment-right') }}</option>
                                    </select>
                                    @error('advertisement_alignment')
                                    <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>-->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                        {{ __('advertisement.create-ad') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-ad-page-help-modal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle">{{ __('advertisement.create-ad-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-listing-results') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-listing-search') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-content') }}</li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-business-listing') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>

                                <li>{{ __('advertisement.ad-position-before-gallery') }}</li>
                                <li>{{ __('advertisement.ad-position-before-description') }}</li>
                                <li>{{ __('advertisement.ad-position-before-location') }}</li>
                                <li>{{ __('advertisement.ad-position-before-features') }}</li>
                                <li>{{ __('advertisement.ad-position-before-reviews') }}</li>
                                <li>{{ __('advertisement.ad-position-before-comments') }}</li>
                                <li>{{ __('advertisement.ad-position-before-share') }}</li>
                                <li>{{ __('advertisement.ad-position-after-share') }}</li>

                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-blog-posts') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-blog-topic') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-blog-tag') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800">{{ __('advertisement.ad-place-single-post') }}</span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li>{{ __('advertisement.ad-position-before-breadcrumb') }}</li>
                                <li>{{ __('advertisement.ad-position-after-breadcrumb') }}</li>

                                <li>{{ __('advertisement.ad-position-before-feature-image') }}</li>
                                <li>{{ __('advertisement.ad-position-before-title') }}</li>
                                <li>{{ __('advertisement.ad-position-before-post-content') }}</li>
                                <li>{{ __('advertisement.ad-position-after-post-content') }}</li>
                                <li>{{ __('advertisement.ad-position-before-comments') }}</li>
                                <li>{{ __('advertisement.ad-position-before-share') }}</li>
                                <li>{{ __('advertisement.ad-position-after-share') }}</li>

                                <li>{{ __('advertisement.ad-position-sidebar-before-content') }}</li>
                                <li>{{ __('advertisement.ad-position-sidebar-after-content') }}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('advertisement.create-ad-modal-close') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle">{{ __('category_image_option.modal-category-image-crop-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="image_demo"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="custom-file">
                                <input id="upload_image_input" type="file" class="custom-file-input">
                                <label class="custom-file-label"
                                       for="upload_image_input">{{ __('backend.item.choose-image') }}</label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <button id="crop_image" type="button"
                            class="btn btn-primary">{{ __('backend.item.crop-image') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal2" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle2">{{ __('category_image_option.modal-category-image-crop-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="image_demo2"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="custom-file">
                                <input id="upload_image_input2" type="file" class="custom-file-input">
                                <label class="custom-file-label"
                                       for="upload_image_input">{{ __('backend.item.choose-image') }}</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <button id="crop_image2" type="button"
                            class="btn btn-primary">{{ __('backend.item.crop-image') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendor/simplemde/dist/simplemde.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            "use strict";

            /**
             * Start initial ad code textarea markdown
             */
            var simplemde = new SimpleMDE({
                element: document.getElementById("advertisement_code"),
                status: false,
                toolbar: false,
                spellChecker: false,
            });
            /**
             * End initial ad code textarea markdown
             */


            $('#create-ad-page-help').on('click', function () {

                $('#create-ad-page-help-modal').modal('show');
            });
        });
    </script>
    <!-- Image Crop Plugin Js -->
    <script src="{{ asset('backend/vendor/croppie/croppie.js') }}"></script>
    <script src="{{ asset('backend/vendor/spectrum/spectrum.min.js') }}"></script>

    <script>

        $(document).ready(function () {

            "use strict";

            /**
             * Start color picker
             */
            $('#category_header_background_color').spectrum({
                type: "component",
                togglePaletteOnly: "true",
                showInput: "true",
                showInitial: "true",
                showAlpha: "false"
            });

            $('#category_header_background_color2').spectrum({
                type: "component",
                togglePaletteOnly: "true",
                showInput: "true",
                showInitial: "true",
                showAlpha: "false"
            });
            /**
             * End color picker
             */

            /**
             * Start the croppie image plugin
             */
            var image_crop = null;
            var image_crop2 = null;

            $('#upload_image').on('click', function () {

                $('#image-crop-modal').modal('show');
            });

            $('#upload_image2').on('click', function () {

                $('#image-crop-modal2').modal('show');
            });

            var window_height = $(window).height();
            var window_width = $(window).width();
            var viewport_height = 0;
            var viewport_width = 0;


            $('#upload_image_input').on('change', function () {
                if (window_width >= 132) {
                    viewport_width = 132;
                    viewport_height = 900;
                } else {
                    viewport_width = window_width * 0.8;
                    viewport_height = (viewport_width * 900) / 132;
                }

                if (!image_crop) {
                    image_crop = $('#image_demo').croppie({
                        enableExif: true,
                        mouseWheelZoom: false,
                        viewport: {
                            width: viewport_width,
                            height: viewport_height,
                            type: 'square',
                        },
                        boundary: {
                            width: viewport_width + 5,
                            height: viewport_width + 5,
                        }
                    });

                    $('#image-crop-modal .modal-dialog').css({
                        'max-width': '100%'
                    });
                }

                var reader = new FileReader();

                reader.onload = function (event) {

                    image_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function () {
                        console.log('jQuery bind complete');
                    });

                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#upload_image_input2').on('change', function () {
                if (window_width >= 1153) {
                    viewport_width = 1153;
                    viewport_height = 142;
                } else {
                    viewport_width = window_width * 0.8;
                    viewport_height = (viewport_width * 142) / 1153;
                }
                if (!image_crop2) {
                    image_crop2 = $('#image_demo2').croppie({
                        enableExif: true,
                        mouseWheelZoom: false,
                        viewport: {
                            width: viewport_width,
                            height: viewport_height,
                            type: 'square',
                        },
                        boundary: {
                            width: viewport_width + 5,
                            height: viewport_width + 5,
                        }
                    });

                    $('#image-crop-modal2 .modal-dialog').css({
                        'max-width': '100%'
                    });
                }

                var reader = new FileReader();

                reader.onload = function (event) {

                    image_crop2.croppie('bind', {
                        url: event.target.result
                    }).then(function () {
                        console.log('jQuery bind complete');
                    });

                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#crop_image').on("click", function (event) {

                image_crop.croppie('result', {
                    type: 'base64',
                    size: 'viewport'
                }).then(function (response) {
                    $('#category_image').val(response);
                    $('#image_preview').attr("src", response);
                });

                $('#image-crop-modal').modal('hide')
            });

            $('#crop_image2').on("click", function (event) {

                image_crop2.croppie('result', {
                    type: 'base64',
                    size: 'viewport'
                }).then(function (response) {
                    $('#category_image2').val(response);
                    $('#image_preview2').attr("src", response);
                });

                $('#image-crop-modal2').modal('hide')
            });
            /**
             * End the croppie image plugin
             */

            /**
             * Start delete feature image button
             */
            $('#delete_category_image_button').on('click', function () {

                $('#delete_category_image_button').attr("disabled", true);

                $('#image_preview').attr("src", "{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}");
                $('#category_image').val("");

                $('#delete_category_image_button').attr("disabled", false);
            });

            $('#delete_category_image_button2').on('click', function () {

                $('#delete_category_image_button2').attr("disabled", true);

                $('#image_preview2').attr("src", "{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}");
                $('#category_image2').val("");

                $('#delete_category_image_button2').attr("disabled", false);
            });
            /**
             * End delete feature image button
             */


            /**
             * Start image file upload preview
             */
            $(document).on('change', '.btn-file :file', function () {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function (event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });

            function readURL(input, preview_img_id, input_id) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#' + preview_img_id).attr('src', e.target.result);
                        $('#' + input_id).attr('value', e.target.result);

                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#category_header_background_image_selector").change(function () {
                readURL(this, "img-upload-homepage", "category_header_background_image");
            });
            /**
             * End image file upload preview
             */
        });
    </script>

    <script>
        $('.position-image').change(function (){
            if($(this).val() == {{\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT}} || $(this).val() == {{\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT}}){
                $('.horizontal-image').show();
                $('.vertical-image').hide();
                $('.vertical-image').find('#category_image').val('')
                $('.vertical-image').find('#image_preview').removeAttr('src')
                $('.vertical-image').find('#image_preview').attr('src','{{ asset('backend/images/placeholder/full_item_feature_image.webp')}}')
            }
            else{
                $('.horizontal-image').hide();
                $('.vertical-image').show();
                $('.horizontal-image').find('#category_image2').val('')
                $('.horizontal-image').find('#image_preview2').removeAttr('src')
                $('.horizontal-image').find('#image_preview2').attr('src','{{ asset('backend/images/placeholder/full_item_feature_image.webp')}}')
            }
        })
    </script>
@endsection
