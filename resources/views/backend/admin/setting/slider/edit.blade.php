@extends('backend.admin.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/trumbowyg/dist/ui/trumbowyg.min.css') }}">
    <link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/vendor/spectrum/spectrum.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('Slider') }}</h1>
            <p class="mb-4">{{ __('Slider') }}</p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="container">
    <h2>Create New Image</h2>
    <form action="{{ route('admin.settings.page.slider.update') }}" method="POST" enctype="multipart/form-data">
      @csrf

            <div class="row mt-3">
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
                    <img id="image_preview" src="{{ old('image1') ? old('image1') : (!empty($all_page_about_settings->slider_image_1) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_1) : asset('backend/images/placeholder/full_item_feature_image.webp')) }}" class="img-responsive">
                </div>
            </div>
        <div class="row mt-3">
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
                <img id="image_preview2" src="{{ old('image2') ? old('image2') : (!empty($all_page_about_settings->slider_image_2) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_2) : asset('backend/images/placeholder/full_item_feature_image.webp')) }}" class="img-responsive">
            </div>
        </div>




      <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>
  </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal2" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle2">{{ __('category_image_option.modal-category-image-crop-title') }}</h5>
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
                                <label class="custom-file-label" for="upload_image_input">{{ __('backend.item.choose-image') }}</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <button id="crop_image2" type="button" class="btn btn-primary">{{ __('backend.item.crop-image') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('category_image_option.modal-category-image-crop-title') }}</h5>
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
                                <label class="custom-file-label" for="upload_image_input">{{ __('backend.item.choose-image') }}</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <button id="crop_image" type="button" class="btn btn-primary">{{ __('backend.item.crop-image') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <!-- Image Crop Plugin Js -->
    <script src="{{ asset('backend/vendor/croppie/croppie.js') }}"></script>
    <script src="{{ asset('backend/vendor/spectrum/spectrum.min.js') }}"></script>

    <script>

        $(document).ready(function() {

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

            $('#upload_image').on('click', function(){

                $('#image-crop-modal').modal('show');
            });

            $('#upload_image2').on('click', function(){

                $('#image-crop-modal2').modal('show');
            });

            var window_height = $(window).height();
            var window_width = $(window).width();
            var viewport_height = 0;
            var viewport_width = 0;

            if(window_width >= 1600)
            {
                viewport_width = 1600;
                viewport_height = 700;
            }
            else
            {
                viewport_width = window_width * 0.8;
                viewport_height = (viewport_width * 700) / 1600;
            }

            $('#upload_image_input').on('change', function(){

                if(!image_crop)
                {
                    image_crop = $('#image_demo').croppie({
                        enableExif: true,
                        mouseWheelZoom: false,
                        viewport: {
                            width:viewport_width,
                            height:viewport_height,
                            type:'square',
                        },
                        boundary:{
                            width:viewport_width + 5,
                            height:viewport_width + 5,
                        }
                    });

                    $('#image-crop-modal .modal-dialog').css({
                        'max-width':'100%'
                    });
                }

                var reader = new FileReader();

                reader.onload = function (event) {

                    image_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });

                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#upload_image_input2').on('change', function(){

                if(!image_crop2)
                {
                    image_crop2 = $('#image_demo2').croppie({
                        enableExif: true,
                        mouseWheelZoom: false,
                        viewport: {
                            width:viewport_width,
                            height:viewport_height,
                            type:'square',
                        },
                        boundary:{
                            width:viewport_width + 5,
                            height:viewport_width + 5,
                        }
                    });

                    $('#image-crop-modal2 .modal-dialog').css({
                        'max-width':'100%'
                    });
                }

                var reader = new FileReader();

                reader.onload = function (event) {

                    image_crop2.croppie('bind', {
                        url: event.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });

                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#crop_image').on("click", function(event){

                image_crop.croppie('result', {
                    type: 'base64',
                    size: 'viewport'
                }).then(function(response){
                    $('#category_image').val(response);
                    $('#image_preview').attr("src", response);
                });

                $('#image-crop-modal').modal('hide')
            });

            $('#crop_image2').on("click", function(event){

                image_crop2.croppie('result', {
                    type: 'base64',
                    size: 'viewport'
                }).then(function(response){
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
            $('#delete_category_image_button').on('click', function(){

                $('#delete_category_image_button').attr("disabled", true);

                $('#image_preview').attr("src", "{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}");
                $('#category_image').val("");

                $('#delete_category_image_button').attr("disabled", false);
            });

            $('#delete_category_image_button2').on('click', function(){

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
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
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

            $("#category_header_background_image_selector").change(function(){
                readURL(this, "img-upload-homepage", "category_header_background_image");
            });
            /**
             * End image file upload preview
             */
        });
    </script>
@endsection

