@extends('backend.admin.layouts.app')

@section('styles')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <link href="{{ asset('backend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
    @endif

    <!-- Image Crop Css -->
    <link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet"/>

    <!-- Bootstrap FD Css-->
    <link href="{{ asset('backend/vendor/bootstrap-fd/bootstrap.fd.css') }}" rel="stylesheet"/>

    <link href="{{ asset('backend/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.city.add-city') }}</h1>
            <p class="mb-4">{{ __('backend.city.add-city-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.cities.index') }}" class="btn btn-info btn-icon-split">
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
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <form method="POST" action="{{ route('admin.cities.store') }}" class="">
                        @csrf

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="state_id" class="text-black">{{ __('backend.city.select-state') }}</label>
                                <select class="form-control selectpicker" name="state_id" data-live-search="true">
                                    @foreach($all_states as $key => $state)
                                        <option value="{{ $state->id }}" {{ $state->id == old('state_id') ? 'selected' : '' }}>{{ $state->state_name . ', ' . $state->country->country_name }}</option>
                                    @endforeach
                                </select>

                                @error('state_id')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="city_name" class="text-black">{{ __('backend.city.city-name') }}</label>
                                <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name') }}">
                                @error('city_name')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="city_slug" class="text-black">{{ __('setting_language.location.url-slug') }}</label>
                                <input id="city_slug" type="text" class="form-control @error('city_slug') is-invalid @enderror" name="city_slug" value="{{ old('city_slug') }}">
                                <small class="form-text text-muted">
                                    {{ __('setting_language.location.url-slug-help') }}
                                </small>
                                @error('city_slug')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="city_lat">{{ __('backend.city.city-lat') }}</label>
                                <input id="city_lat" type="text" class="form-control @error('city_lat') is-invalid @enderror" name="city_lat" value="{{ old('city_lat') }}">
                                @error('city_lat')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="city_lng">{{ __('backend.city.city-lng') }}</label>
                                <input id="city_lng" type="text" class="form-control @error('city_lng') is-invalid @enderror" name="city_lng" value="{{ old('city_lng') }}">
                                @error('city_lng')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row border-left-primary mb-4">
                            <div class="form-row mb-4 bg-primary pl-1 pt-1 pb-1">
                                <div class="col-md-12">
                                        <span class="text-lg text-white">
                                             <i class="fa-solid fa-info"></i>
                                            {{ __('backend.shared.seo') }}
                                        </span>
                                </div>
                            </div>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active col-md-6" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">{{__('backend.language_en')}}
                                    </button>
                                    <button class="nav-link col-md-6" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile"
                                            aria-selected="false">{{__('backend.language_ar')}}
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">


                                    <div class="col-md-6">
                                        <label for="pageTitle">{{__('backend.meta_title')}}</label>
                                        <input type="text" class="form-control"
                                               id="pageTitle" name="meta_title[en]" value="">
                                    </div>


                                    <div class="col-md-6">
                                        <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                        <textarea id="meta_description" name="meta_description[en]"
                                                  rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                        <input type="text" id="meta_keywords"
                                               name="meta_keywords[en]"  class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alt_image">{{__('backend.alt_image')}}</label>
                                        <input type="text" id="alt_image"
                                               name="alt_image[en]"  class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="canonical">{{__('backend.canonical')}}</label>
                                        <input type="url" id="canonical"
                                               name="canonical[en]"  class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">


                                    <div class="col-md-6">
                                        <label for="pageTitle">{{__('backend.meta_title')}}</label>
                                        <input type="text" class="form-control"
                                               id="meta_title" name="meta_title[ar]">
                                    </div>


                                    <div class="col-md-6">
                                        <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                        <textarea id="meta_description" name="meta_description[ar]"
                                                  rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                        <input type="text" id="meta_keywords"
                                               name="meta_keywords[ar]" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alt_image">{{__('backend.alt_image')}}</label>
                                        <input type="text" id="alt_image"
                                               name="alt_image[ar]"  class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="canonical">{{__('backend.canonical')}}</label>
                                        <input type="url" id="canonical"
                                               name="canonical[ar]"  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('backend.shared.create') }}
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

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="{{ asset('backend/vendor/leaflet/leaflet.js') }}"></script>
    @endif

    <!-- Image Crop Plugin Js -->
    <script src="{{ asset('backend/vendor/croppie/croppie.js') }}"></script>

    <!-- Bootstrap Fd Plugin Js-->
    <script src="{{ asset('backend/vendor/bootstrap-fd/bootstrap.fd.js') }}"></script>

    <script src="{{ asset('backend/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    @include('backend.admin.partials.bootstrap-select-locale')

    <script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>

        $(document).ready(function () {

            "use strict";

            @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
            /**
             * Start map modal
             */
            var map = L.map('map-modal-body', {
                //center: [37.0902, -95.7129],
                center: [{{ $setting_site_location_lat }}, {{ $setting_site_location_lng }}],
                zoom: 5,
            });

            var layerGroup = L.layerGroup().addTo(map);
            var current_lat = 0;
            var current_lng = 0;

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            map.on('click', function (e) {

                // remove all the markers in one go
                layerGroup.clearLayers();
                L.marker([e.latlng.lat, e.latlng.lng]).addTo(layerGroup);

                current_lat = e.latlng.lat;
                current_lng = e.latlng.lng;

                $('#lat_lng_span').text("Lat, Lng : " + e.latlng.lat + ", " + e.latlng.lng);
            });

            $('#lat_lng_confirm').on('click', function () {

                $('#item_lat').val(current_lat);
                $('#item_lng').val(current_lng);
                $('#map-modal').modal('hide')
            });
            $('.lat_lng_select_button').on('click', function () {
                $('#map-modal').modal('show');
                setTimeout(function () {
                    map.invalidateSize()
                }, 500);
            });
            /**
             * End map modal
             */
            @endif


            /**
             * Start country, state, city selector
             */
            $('#select_country_id').on('change', function () {

                $('#select_state_id').html("<option selected value='0'>{{ __('prefer_country.loading-wait') }}</option>");
                $('#select_state_id').selectpicker('refresh');

                if (this.value > 0) {
                    var ajax_url = '/ajax/states/' + this.value;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: ajax_url,
                        method: 'get',
                        data: {},
                        success: function (result) {

                            $('#select_state_id').html("<option selected value='0'>{{ __('backend.item.select-state') }}</option>");
                            $.each(JSON.parse(result), function (key, value) {
                                var state_id = value.id;
                                var state_name = value.state_name;
                                $('#select_state_id').append('<option value="' + state_id + '">' + state_name + '</option>');
                            });
                            $('#select_state_id').selectpicker('refresh');
                        }
                    });
                }

            });


            $('#select_state_id').on('change', function () {

                $('#select_city_id').html("<option selected value='0'>{{ __('prefer_country.loading-wait') }}</option>");
                $('#select_city_id').selectpicker('refresh');

                if (this.value > 0) {
                    var ajax_url = '/ajax/cities/' + this.value;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: ajax_url,
                        method: 'get',
                        data: {},
                        success: function (result) {

                            $('#select_city_id').html("<option selected value='0'>{{ __('backend.item.select-city') }}</option>");
                            $.each(JSON.parse(result), function (key, value) {
                                var city_id = value.id;
                                var city_name = value.city_name;
                                $('#select_city_id').append('<option value="' + city_id + '">' + city_name + '</option>');
                            });
                            $('#select_city_id').selectpicker('refresh');
                        }
                    });
                }

            });

            @if(old('country_id'))
            var ajax_url_initial_states = '/ajax/states/{{ old('country_id') }}';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: ajax_url_initial_states,
                method: 'get',
                data: {},
                success: function (result) {

                    $('#select_state_id').html("<option selected value='0'>{{ __('backend.item.select-state') }}</option>");
                    $.each(JSON.parse(result), function (key, value) {
                        var state_id = value.id;
                        var state_name = value.state_name;

                        if (state_id === {{ old('state_id') }}) {
                            $('#select_state_id').append('<option value="' + state_id + '" selected>' + state_name + '</option>');
                        } else {
                            $('#select_state_id').append('<option value="' + state_id + '">' + state_name + '</option>');
                        }

                    });
                    $('#select_state_id').selectpicker('refresh');
                }
            });
            @endif

            @if(old('state_id'))
            var ajax_url_initial_cities = '/ajax/cities/{{ old('state_id') }}';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: ajax_url_initial_cities,
                method: 'get',
                data: {},
                success: function (result) {

                    $('#select_city_id').html("<option selected value='0'>{{ __('backend.item.select-city') }}</option>");
                    $.each(JSON.parse(result), function (key, value) {
                        var city_id = value.id;
                        var city_name = value.city_name;

                        if (city_id === {{ old('city_id') }}) {
                            $('#select_city_id').append('<option value="' + city_id + '" selected>' + city_name + '</option>');
                        } else {
                            $('#select_city_id').append('<option value="' + city_id + '">' + city_name + '</option>');
                        }
                    });
                    $('#select_city_id').selectpicker('refresh');
                }
            });
            @endif
            /**
             * End country, state, city selector
             */

            /**
             * Start image gallery uplaod
             */
            $('#upload_gallery').on('click', function () {
                window.selectedImages = [];


                $.FileDialog({
                    accept: "image/jpeg",
                }).on("files.bs.filedialog", function (event) {
                    var html = "";
                    for (var a = 0; a < event.files.length; a++) {
                        if (a == {{@$plan?->check_plan(21)?->value == "" ? 1  : @$plan?->check_plan(21)?->value }}) {
                            break;
                        }
                        selectedImages.push(event.files[a]);
                        html += "<div class='col-3 mb-2' id='item_image_gallery_" + a + "'>" +
                            "<img style='max-width: 120px;' src='" + event.files[a].content + "'>" +
                            "<br/><button class='btn btn-danger btn-sm text-white mt-1' onclick='$(\"#item_image_gallery_" + a + "\").remove();'>Delete</button>" +
                            "<input type='hidden' value='" + event.files[a].content + "' name='image_gallery[]'>" +
                            "</div>";
                    }
                    document.getElementById("selected-images").innerHTML += html;
                });
            });
            /**
             * End image gallery uplaod
             */

            /**
             * Start the croppie image plugin
             */
            var image_crop = null;

            $('#upload_image').on('click', function () {

                $('#image-crop-modal').modal('show');
            });

            var window_height = $(window).height();
            var window_width = $(window).width();
            var viewport_height = 0;
            var viewport_width = 0;

            if (window_width >= 800) {
                viewport_width = 800;
                viewport_height = 687;
            } else {
                viewport_width = window_width * 0.8;
                viewport_height = (viewport_width * 687) / 800;
            }

            $('#upload_image_input').on('change', function () {

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

            $('#crop_image').on("click", function (event) {

                image_crop.croppie('result', {
                    type: 'base64',
                    size: 'viewport'
                }).then(function (response) {
                    $('#feature_image').val(response);
                    $('#image_preview').attr("src", response);
                });

                $('#image-crop-modal').modal('hide')
            });
            /**
             * End the croppie image plugin
             */

            /**
             * Start listing type radio button select
             */
            $('input:radio[name="item_type"]').change(
                function () {
                    if ($(this).is(':checked') && $(this).val() == '{{ \App\Models\Item::ITEM_TYPE_REGULAR }}') {

                        // enable all location related input
                        $("#item_address").prop("disabled", false);
                        $("#item_address_hide").prop("disabled", false);
                        $("#select_country_id").prop("disabled", false);
                        $("#select_state_id").prop("disabled", false);
                        $("#select_city_id").prop("disabled", false);
                        $("#item_postal_code").prop("disabled", false);
                        $("#item_lat").prop("disabled", false);
                        $("#item_lng").prop("disabled", false);

                        $('#select_country_id').selectpicker('refresh');
                        $('#select_state_id').selectpicker('refresh');
                        $('#select_city_id').selectpicker('refresh');
                    } else {
                        // disable all location related input
                        $("#item_address").prop("disabled", true);
                        $("#item_address_hide").prop("disabled", true);
                        $("#select_country_id").prop("disabled", true);
                        $("#select_state_id").prop("disabled", true);
                        $("#select_city_id").prop("disabled", true);
                        $("#item_postal_code").prop("disabled", true);
                        $("#item_lat").prop("disabled", true);
                        $("#item_lng").prop("disabled", true);

                        $('#select_country_id').selectpicker('refresh');
                        $('#select_state_id').selectpicker('refresh');
                        $('#select_city_id').selectpicker('refresh');

                    }
                });
            /**
             * End listing type radio button select
             */


            /**
             * Start delete feature image button
             */
            $('#delete_feature_image_button').on('click', function () {

                $('#delete_feature_image_button').attr("disabled", true);

                $('#image_preview').attr("src", "{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}");
                $('#feature_image').val("");

                $('#delete_feature_image_button').attr("disabled", false);
            });
            /**
             * End delete feature image button
             */

            /**
             * Start open hour add button
             */
            $('#item_hour_create_button').on('click', function () {

                var item_hour_day_of_week_text = $("#item_hour_day_of_week option:selected").text();
                var item_hour_day_of_week_value = $("#item_hour_day_of_week").val();
                var item_hour_open_time_open_hour = $("#item_hour_open_time_open_hour").val();
                var item_hour_open_time_open_minute = $("#item_hour_open_time_open_minute").val();
                var item_hour_open_time_close_hour = $("#item_hour_open_time_close_hour").val();
                var item_hour_open_time_close_minute = $("#item_hour_open_time_close_minute").val();

                var item_hours_value = item_hour_day_of_week_value + ' ' + item_hour_open_time_open_hour + ':' + item_hour_open_time_open_minute + ' ' + item_hour_open_time_close_hour + ':' + item_hour_open_time_close_minute;
                var item_hour_span_text = item_hour_day_of_week_text + ' ' + item_hour_open_time_open_hour + ':' + item_hour_open_time_open_minute + '-' + item_hour_open_time_close_hour + ':' + item_hour_open_time_close_minute;

                $("#open_hour_added_hours").append("<div class='col-12 col-md-3'><input type='hidden' name='item_hours[]' value='" + item_hours_value + "'>" + item_hour_span_text + "<a class='btn btn-sm text-danger bg-white' onclick='$(this).parent().remove();'><i class='far fa-trash-alt'></i></a></div>");
            });

            var count = 0;

            $('#item_phone_create_button').on('click', function () {
                {{--                if (count <= {{@$plan?->check_plan(6)->value ?? 1}}) {--}}
                var item_phone = $("#item_phone").val();
                $("#item_phones_container").append("<div class='col-12 col-md-3'><input type='hidden' name='item_phones[]' value='" + item_phone + "'>" + item_phone + "<a class='btn btn-sm text-danger bg-white' onclick='$(this).parent().remove();'><i class='far fa-trash-alt'></i></a></div>");
                $("#item_phone").val("");
                count++;
                // }
            });
            /**
             * End open hour add button
             */

            /**
             * Start open hour exception add button
             */
            $('#item_hour_exception_date').datepicker({
                format: 'yyyy-mm-dd',
            });

            $('#item_hour_exception_create_button').on('click', function () {

                var item_hour_exception_date = $("#item_hour_exception_date").val();
                var item_hour_exception_open_time_open_hour = $("#item_hour_exception_open_time_open_hour").val();
                var item_hour_exception_open_time_open_minute = $("#item_hour_exception_open_time_open_minute").val();
                var item_hour_exception_open_time_close_hour = $("#item_hour_exception_open_time_close_hour").val();
                var item_hour_exception_open_time_close_minute = $("#item_hour_exception_open_time_close_minute").val();

                var item_hours_exception_value = item_hour_exception_date;
                var item_hours_exception_span_text = item_hour_exception_date;

                if (item_hour_exception_open_time_open_hour !== "" && item_hour_exception_open_time_open_minute !== "" && item_hour_exception_open_time_close_hour !== "" && item_hour_exception_open_time_close_minute !== "") {
                    item_hours_exception_value += ' ' + item_hour_exception_open_time_open_hour + ':' + item_hour_exception_open_time_open_minute + ' ' + item_hour_exception_open_time_close_hour + ':' + item_hour_exception_open_time_close_minute;
                    item_hours_exception_span_text += ' ' + item_hour_exception_open_time_open_hour + ':' + item_hour_exception_open_time_open_minute + '-' + item_hour_exception_open_time_close_hour + ':' + item_hour_exception_open_time_close_minute;
                } else {
                    item_hours_exception_span_text += " {{ __('item_hour.open-hour-exception-close-all-day') }}";
                }

                $("#open_hour_added_exceptions").append("<div class='col-12 col-md-3'><input type='hidden' name='item_hour_exceptions[]' value='" + item_hours_exception_value + "'>" + item_hours_exception_span_text + "<a class='btn btn-sm text-danger bg-white' onclick='$(this).parent().remove();'><i class='far fa-trash-alt'></i></a></div>");

            });
            /**
             * End open hour exception add button
             */

        });

        function updateWordCount() {
            var textarea = document.getElementById('item_description');
            var wordCount = textarea.value.split(/\s+/).length;
            var wordCountElement = document.getElementById('wordCount');

            wordCountElement.textContent = wordCount + (wordCount === 1 ? ' word' : ' words');

            // Reset color when user continues typing
            wordCountElement.style.color = 'black';

            var textarea = document.getElementById('item_description');
            var wordCount = textarea.value.split(/\s+/).length;

            // Adjust the maximum word count as needed
            var maxWords = {{@$plan?->check_plan(7)->value ?? 0}};

            if (wordCount >= maxWords) {
                textarea.disabled = true;
                document.getElementById('wordCount').style.color = 'red';
            } else {
                textarea.disabled = false;
                wordCountElement.style.color = 'black';
            }


        }
    </script>

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_GOOGLE_MAP)

        <script>
            function initMap() {
                const myLatlng = {
                    lat: {{ $site_global_settings->setting_site_location_lat }},
                    lng: {{ $site_global_settings->setting_site_location_lng }}
                };
                const map = new google.maps.Map(document.getElementById('map-modal-body'), {
                    zoom: 4,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                let infoWindow = new google.maps.InfoWindow({
                    content: "{{ __('google_map.select-lat-lng-on-map') }}",
                    position: myLatlng,
                });
                infoWindow.open(map);

                var current_lat = 0;
                var current_lng = 0;

                google.maps.event.addListener(map, 'click', function (event) {

                    // Close the current InfoWindow.
                    infoWindow.close();
                    // Create a new InfoWindow.
                    infoWindow = new google.maps.InfoWindow({
                        position: event.latLng,
                    });
                    infoWindow.setContent(
                        JSON.stringify(event.latLng.toJSON(), null, 2)
                    );
                    infoWindow.open(map);

                    current_lat = event.latLng.lat();
                    current_lng = event.latLng.lng();
                    console.log("Latitude: " + current_lat + " " + ", longitude: " + current_lng);
                    $('#lat_lng_span').text("Lat, Lng : " + current_lat + ", " + current_lng);
                });

                $('#lat_lng_confirm').on('click', function () {

                    $('#item_lat').val(current_lat);
                    $('#item_lng').val(current_lng);
                    $('#map-modal').modal('hide');
                });
                $('.lat_lng_select_button').on('click', function () {
                    $('#map-modal').modal('show');
                    //setTimeout(function(){ map.invalidateSize()}, 500);
                });
            }
        </script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js??v=quarterly&key={{ $site_global_settings->setting_site_map_google_api_key }}&callback=initMap"></script>
    @endif

@endsection
