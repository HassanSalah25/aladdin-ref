@extends('backend.admin.layouts.app')

@section('styles')
    <link href="{{ asset('backend/vendor/simplemde/dist/simplemde.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/vendor/spectrum/spectrum.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/js/select2/select2.min.css') }}" rel="stylesheet"/>

@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('plan.add-plan') }}</h1>
            <p class="mb-4">{{ __('plan.add-plan-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.plans.index') }}" class="btn btn-info btn-icon-split">
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
            <form id="ad-create-form" method="POST" action="{{ route('admin.plans.update',$plan) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-6">

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="plan_name"
                                       class="text-black">{{ __('plan.plan-name') }}</label>
                                <input id="plan_name" type="text"
                                       class="form-control @error('plan_name') is-invalid @enderror"
                                       name="plan_name" value="{{ old('plan_name')??$plan->plan_name }}" autofocus>
                                @error('plan_name')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="plan_name_ar"
                                       class="text-black">{{ __('plan.plan-name-ar') }}</label>
                                <input id="plan_name_ar" type="text"
                                       class="form-control @error('plan_name_ar') is-invalid @enderror"
                                       name="plan_name_ar" value="{{ old('plan_name_ar')??$plan->plan_name_ar }}"
                                       autofocus>
                                @error('plan_name_ar')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="plan_price"
                                       class="text-black">{{ __('plan.plan-price') }}</label>
                                <input id="plan_price" type="number"
                                       class="form-control @error('plan_price') is-invalid @enderror"
                                       name="plan_price" value="{{ old('plan_price')??$plan->plan_price }}" autofocus>
                                @error('plan_price')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="plan_period"
                                       class="text-black">{{ __('plan.plan-period') }}</label>
                                <input id="plan_period" type="number"
                                       class="form-control @error('plan_period') is-invalid @enderror"
                                       name="plan_period" value="{{ old('plan_period')??$plan->plan_period }}"
                                       autofocus>
                                @error('plan_period')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="text-black"
                                       for="plan_status">{{ __('plan.plan-status') }}</label>

                                <select class="custom-select @error('plan_status') is-invalid @enderror"
                                        name="plan_status">
                                    <option
                                        value="{{ \App\Models\Plan::PLAN_ENABLED }}" {{  old('plan_status')??$plan->paln_status == \App\Models\Plan::PLAN_ENABLED ? 'selected' : '' }}>{{ __('plan.plan-status-enable') }}</option>
                                    <option
                                        value="{{ \App\Models\Plan::PLAN_DISABLED }}" {{ old('plan_status')??$plan->plan_status == \App\Models\Plan::PLAN_DISABLED ? 'selected' : '' }}>{{ __('plan.plan-status-disable') }}</option>
                                </select>
                                @error('plan_status')
                                <span class="invalid-tooltip">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('plan.create-plan') }}
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-10 col-lg-6">

                        <div class="row form-group ">
                            <div class="col-md-12 h-100 ">
                                <label for="plan_description"
                                       class="text-black">{{ __('plan.plan-description') }}</label>
                                <textarea id="plan_description" type="text"
                                          class="form-control h-100 @error('plan_description') is-invalid @enderror"
                                          name="plan_description">{{ old('plan_description')??$plan->plan_description }}</textarea>
                                @error('plan_description')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group ">
                            <div class="col-md-12 h-100 ">
                                <label for="plan_description_ar"
                                       class="text-black">{{ __('plan.plan-description-ar') }}</label>
                                <textarea id="plan_description_ar" type="text"
                                          class="form-control h-100 @error('plan_description_ar') is-invalid @enderror"
                                          name="plan_description_ar">{{ old('plan_description_ar')??$plan->plan_description_ar }}</textarea>
                                @error('plan_description_ar')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group align-items-end">
                            <div class="col-md-4">
                                <label for="plan_features"
                                       class="text-black">{{ __('plan.plan-features') }}</label>
                                <select id="plan_features" type="text"
                                        class="js-example-basic-single form-control @error('plan_features') is-invalid @enderror">
                                    @foreach($features as $feature)
                                        <option value="{{$feature->id}}"
                                                data-type="{{$feature->type}}"
                                                data-type_text="{{$feature->getType()}}"
                                        >{{ app()->getLocale() == 'en'? $feature->name : $feature->name_ar}}</option>
                                    @endforeach
                                </select>
                                @error('plan_features')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4" style="display: none">
                                <label for="features_value"
                                       class="text-black">{{ __('plan.plan-features-value') }}</label>
                                <input type="number" id="features_value" class="form-control">
                                @error('features_value')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-2">
                                <a class="btn btn-sm btn-block btn-primary rounded text-white"
                                   id="feature_create_button">
                                    <i class="fas fa-plus"></i>
                                    {{ __('plan.add-feature') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-row mb-3" id="feature_container">
                            @if(old('feature_id'))
                                @foreach(old('feature_id') as $key => $feature)
                                    <div class='col-12 col-md-3'>
                                        <input type='hidden' name='feature_id[]'
                                               value='{{$feature}}'>
                                        <input type='hidden' name='value[]'
                                               value='{{old('value.'.$key)}}'>
                                        {{$feature}} => {{old('value.'.$key)}}
                                        <a class='btn btn-sm text-danger bg-white'
                                           onclick='$(this).parent().remove();'>
                                            <i class='far fa-trash-alt'></i>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                @foreach($plan->features_value as $feature)
                                    <div class='col-12 col-md-3'>
                                        <input type='hidden' name='feature_id[]'
                                               value='{{$feature->feature_id}}'>
                                        <input type='hidden' name='value[]'
                                               value='{{$feature->value}}'>
                                        {{app()->getLocale() == 'en'? $feature->feature->name : $feature->feature->name_ar}}
                                        @if($feature->value)
                                        =>
                                        @endif
                                        {{$feature->value}}

                                        {{$feature->feature->getType()}}
                                        <a class='btn btn-sm text-danger bg-white'
                                           onclick='$(this).parent().remove();'>
                                            <i class='far fa-trash-alt'></i>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendor/simplemde/dist/simplemde.min.js') }}"></script>
    <script>
        $('#plan_features').change(function(){
            if($('#plan_features option:selected').data('type') != {{\App\Models\Feature::TYPE_AVAILABLE}}){
                $(this).parent().next('.col-md-4').show();
            }
            else{
                $(this).parent().next('.col-md-4').hide();
                $(this).parent().next('.col-md-4').find('input').val('');
            }
        })
    </script>
    <script>
        $('#feature_create_button').on('click', function () {
            var plan_features = $("#plan_features").val();
            var features_value = $("#features_value").val();
            var plan_features_text = $("#plan_features option:selected").text();
            var plan_features_type_text = $("#plan_features option:selected").data('type_text');
            var arrow = features_value ? " => " : ""

            $("#feature_container").append("<div class='col-12 col-md-3'>" +
                "<input type='hidden' name='feature_id[]' value='" + plan_features + "'>" +
                "<input type='hidden' name='value[]' value='" + features_value + "'>" +
                ""
                + plan_features_text +
                arrow
                + features_value +
                " "
                + plan_features_type_text +
                "<a class='btn btn-sm text-danger bg-white' onclick='$(this).parent().remove();'>" +
                "<i class='far fa-trash-alt'></i>" +
                "</a>" +
                "</div>");
        });
        $(document).ready(function () {

            "use strict";

            /**
             * Start initial ad code textarea markdown
             */
            var simplemde = new SimpleMDE({
                element: document.getElementById("plan_code"),
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
    <script src="{{ asset('frontend/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/select2.js') }}"></script>
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
        $('.position-image').change(function () {
            if ($(this).val() == {{\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT}} || $(this).val() == {{\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT}}) {
                $('.horizontal-image').show();
                $('.vertical-image').hide();
                $('.vertical-image').find('#category_image').val('')
                $('.vertical-image').find('#image_preview').removeAttr('src')
                $('.vertical-image').find('#image_preview').attr('src', '{{ asset('backend/images/placeholder/full_item_feature_image.webp')}}')
            } else {
                $('.horizontal-image').hide();
                $('.vertical-image').show();
                $('.horizontal-image').find('#category_image2').val('')
                $('.horizontal-image').find('#image_preview2').removeAttr('src')
                $('.horizontal-image').find('#image_preview2').attr('src', '{{ asset('backend/images/placeholder/full_item_feature_image.webp')}}')
            }
        })


    </script>
@endsection
