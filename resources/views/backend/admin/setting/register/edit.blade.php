@extends('backend.admin.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/trumbowyg/dist/ui/trumbowyg.min.css') }}">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.about.about-page') }}</h1>
            <p class="mb-4">{{ __('backend.about.about-page-desc') }}</p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{ route('admin.settings.page.'.$route_name.'.update') }}" class="">
                        @csrf

                        <div class="mb-3 mt-3">
                            <h2 for="content_ar" class="form-label">SEO Information</h2>
                        </div>
                        <div class="mb-3">
                            <label for="canonical" class="form-label">Canonical</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="canonical" value="{{$all_page_register_settings?->canonical}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="slug" class="form-label">slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="{{$all_page_register_settings?->slug}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="new_slug" class="form-label">New Slug</label>
                                <input type="text" class="form-control" name="new_slug" id="new_slug" value="{{$all_page_register_settings?->new_slug}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="meta_title" class="form-label">meta title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$all_page_register_settings?->meta_title}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="meta_description" class="form-label">meta description</label>
                                <input type="text" class="form-control" name="meta_description" id="meta_description" value="{{$all_page_register_settings?->meta_description}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="meta_keyword" class="form-label">meta keyword</label>
                                <input type="text" class="form-control" name="meta_keyword" id="meta_keyword" value="{{$all_page_register_settings?->meta_keywords}}">
                            </div>
{{--                            <div class="mb-3 col-md-6">--}}
{{--                                <label for="alt_image" class="form-label">Alt image</label>--}}
{{--                                <input type="text" class="form-control" name="alt_image" id="alt_image" value="{{$all_page_register_settings?->alt_image}}" >--}}
{{--                            </div>--}}
                        </div>

                        <hr/>

                        <div class="row form-group justify-content-between">
                            <div class="col-8">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('backend.shared.update') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <!-- Import only if you use JQuery UI with Resizable interaction -->
    <script src="{{ asset('backend/vendor/trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js') }}"></script>
    <!-- Import dependency for Resizimg. For a production setup, follow install instructions here: https://github.com/RickStrahl/jquery-resizable -->
    <script src="{{ asset('backend/vendor/jquery-resizable/dist/jquery-resizable.min.js') }}"></script>


    <!-- Import Trumbowyg -->
    <script src="{{ asset('backend/vendor/trumbowyg/dist/trumbowyg.min.js') }}"></script>

    <!-- Import all plugins you want AFTER importing jQuery and Trumbowyg -->
    <script src="{{ asset('backend/vendor/trumbowyg/dist/plugins/base64/trumbowyg.base64.min.js') }}"></script>

    <script src="{{ asset('backend/vendor/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            "use strict";

            $('#setting_page_about')
                .trumbowyg({
                    plugins: {
                        resizimg: {
                            minSize: 32,
                            step: 16,
                        }
                    },
                    btnsDef: {
                        // Create a new dropdown
                        image: {
                            dropdown: ['insertImage', 'base64'],
                            ico: 'insertImage'
                        }
                    },
                    // Redefine the button pane
                    btns: [
                        ['viewHTML'],
                        ['formatting'],
                        ['strong', 'em', 'del'],
                        ['superscript', 'subscript'],
                        ['link'],
                        ['image'], // Our fresh created dropdown
                        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                        ['unorderedList', 'orderedList'],
                        ['horizontalRule'],
                        ['removeformat'],
                        ['fullscreen']
                    ]
                });
        });
    </script>
@endsection
