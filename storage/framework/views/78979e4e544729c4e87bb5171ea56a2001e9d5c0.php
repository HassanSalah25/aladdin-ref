<?php $__env->startPush('styles'); ?>

    <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
        <link href="<?php echo e(asset('frontend/vendor/leaflet/leaflet.css')); ?>" rel="stylesheet"/>
    <?php endif; ?>

    <link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet"/>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


    <div class="mt-header-height">
        <div class="container">
            <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('page.home')); ?>"><?php echo e(__('frontend.header.home')); ?></a></li>
                    <li class="breadcrumb-item"><a
                            href="<?php echo e(route('page.states')); ?>"><?php echo e(__('frontend.search.state-or-city')); ?></a></li>
                    <li class="breadcrumb-item"><a
                            href="<?php echo e(route('page.cities',$state->state_name)); ?>"><?php echo e($state->state_name); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($city->city_name); ?>

                        ( <?php echo e($free_items->total()); ?> )
                    </li>

                </ol>
            </nav>
        </div>
    </div>


    <section class="category-swiper" style="min-height: 5rem;">
        <div class="container">
            <div class="swiper category-swiper__inner">
                <div class="swiper-wrapper">

                    <?php if($ads_before_content->count() > 0): ?>
                        <?php $__currentLoopData = $ads_before_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <a

                                    class="category-slide__item  d-flex justify-content-center"
                                    <?php if($ad->item?->first()): ?>
                                        href="<?php echo e(route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])); ?>"

                                    <?php endif; ?>
                                >

                                    <img style="width: 100%" src="<?php echo e(asset('storage/ads/'.$ad->ad_image_horizontal)); ?>"/>
                                </a>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="ads categories__items__list__item__ads">ads</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>




    <h1 class="mx-5 mt-3">
        <?php echo e($city->city_name); ?>

    </h1>

    <div class="site-section" style="margin-top:4rem">
        <div class="container">

            <div class="row">
                
                
                <!-- Start Filter -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- start filters  -->
                        <div class="cateogries__filters">
                            <button type="button"
                                    class="categories__filters__toggle-btn d-sm-none border-0 p-0 bg-transparent">
                                <i class="las la-angle-right"></i>
                            </button>
                            <h3 class="fw-bold dark-color mb-md"><?php echo e(__('theme_alaadin.filter-filter-by')); ?></h3>
                            <form method="GET"
                                  action="<?php echo e(route('page.city', ['state_slug' => $state->state_slug,'city_slug' => $city->city_slug])); ?>"
                                  id="filter_form">

                                <!-- filters  -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class=" filter_category_div">
                                        <div class="col-12 col-md-12 pl-0">
                                            <label for="filter_category"
                                                   class="my-4"><?php echo e(__('theme_alaadin.filter-category')); ?></label>
                                            <select
                                                class="selectpicker form-control <?php $__errorArgs = ['filter_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="filter_category" id="filter_category" data-live-search="true">
                                                <option
                                                    value="0" <?php echo e(request('filter_category') ? 'selected' : ''); ?>><?php echo e(__('prefer_country.all-categories')); ?></option>
                                                <?php $__currentLoopData = $filter_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children_categories_key => $children_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($children_category->id); ?>" <?php echo e(request('filter_category') == $children_category->id ? 'selected' : ''); ?>><?php echo e($children_category->category_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['filter_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-tooltip">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- filters  -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class=" filter_sub_category_div">
                                        <div class="col-12 col-md-12 pl-0">
                                            <label for="filter_sub_category"
                                                   class="my-4"><?php echo e(__('theme_alaadin.filter-sub-category')); ?></label>
                                            <select
                                                class="selectpicker form-control <?php $__errorArgs = ['filter_sub_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="filter_sub_category" id="filter_sub_category"
                                                data-live-search="true">
                                                <option
                                                    value="0" <?php echo e(request('filter_sub_category') ? 'selected' : ''); ?>><?php echo e(__('prefer_country.all-sub-categories')); ?></option>
                                            </select>
                                            <?php $__errorArgs = ['filter_sub_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-tooltip">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 pl-0">
                                    <label for="sort_by" class="my-4"><?php echo e(__('theme_alaadin.filter-sort-by')); ?></label>
                                    <select
                                        class="selectpicker form-control <?php $__errorArgs = ['filter_sort_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="filter_sort_by" id="filter_sort_by">
                                        <option
                                            value="<?php echo e(\App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED); ?>" <?php echo e($filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEWEST_CREATED ? 'selected' : ''); ?>><?php echo e(__('listings_filter.sort-by-newest')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED); ?>" <?php echo e($filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_OLDEST_CREATED ? 'selected' : ''); ?>><?php echo e(__('listings_filter.sort-by-oldest')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING); ?>" <?php echo e($filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_HIGHEST_RATING ? 'selected' : ''); ?>><?php echo e(__('listings_filter.sort-by-highest')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING); ?>" <?php echo e($filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_LOWEST_RATING ? 'selected' : ''); ?>><?php echo e(__('listings_filter.sort-by-lowest')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST); ?>" <?php echo e($filter_sort_by == \App\Models\Item::ITEMS_SORT_BY_NEARBY_FIRST ? 'selected' : ''); ?>><?php echo e(__('theme_alaadin.filter-sort-by-nearby-first')); ?></option>
                                    </select>
                                    <?php $__errorArgs = ['filter_sort_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-tooltip">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <hr>

                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a class="btn btn-sm btn-outline-primary rounded"
                                           href="<?php echo e(route('page.city', ['state_slug' => $state->state_slug,'city_slug' => $city->city_slug])); ?>">
                                            <?php echo e(__('theme_alaadin.filter-link-reset-all')); ?>

                                        </a>
                                        <a class="btn btn-sm btn-primary text-white rounded" id="filter_form_submit">
                                            <?php echo e(__('theme_alaadin.filter-button-filter-results')); ?>

                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- items  -->
                        <div class="cateogires__items flex-fill">
                            <!-- start order-area  -->
                            <div class="categories__orders d-flex justify-content-between align-content-center gap-4">
                                <div class="d-flex align-items-center gap-4">
                                    <button type="button"
                                            class="categories__orders__toggle-filter-btn bg-transparent p-0 border-0 d-xl-none">
                                        <i class="las la-filter"></i>
                                    </button>

                                </div>
                                <button class="btn btn-primary my-btn categories__orders__map-btn" type="button">
                                    <span><i class="las la-map-marker-alt"></i></span>
                                    <span>الخريطة</span>
                                </button>
                            </div>
                            <!-- start items  -->
                            <div class="categories__items__list">
                                <!-- start map  -->
                                <div id="mapid-box"
                                     class="categories__items__list__item categories__items__list__item-map">
                                </div>

                                

                                <?php if($free_items->count() > 0): ?>
                                    <?php $__currentLoopData = $free_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $free_items_key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('frontend.partials.free-item-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="pagination center-block row justify-content-center w-100"
                                 style="float: right;width: auto;margin-top:2rem">
                                <?php echo e($pagination->appends(request()->query())->links()); ?>

                            </div>
                        </div>
                    </div>

                    <section class="category-swiper mb-3" style="min-height: 5rem;">
                        <div class="container">
                            <div class="swiper category-swiper__inner">
                                <div class="swiper-wrapper">

                                    <?php if($ads_after_content): ?>
                                        <?php $__currentLoopData = $ads_after_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide">
                                                <a

                                                    class="category-slide__item  d-flex justify-content-center"
                                                    <?php if($ad->item?->first()): ?>
                                                        href="<?php echo e(route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])); ?>"
                                                    <?php endif; ?>
                                                >

                                                    <img style="width: 100%"
                                                         src="<?php echo e(asset('storage/ads/'.$ad->ad_image_horizontal)); ?>"/>
                                                </a>


                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="ads categories__items__list__item__ads mb-3">ads</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>


        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>


            <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
                <!-- Make sure you put this AFTER Leaflet's CSS -->
                <script src="<?php echo e(asset('frontend/vendor/leaflet/leaflet.js')); ?>"></script>
            <?php endif; ?>


            <?php echo $__env->make('frontend.partials.bootstrap-select-locale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <script>
                $(document).ready(function () {

                    "use strict";

                    /**
                     * Start initial map box with OpenStreetMap
                     */

                    /**
                     * End initial map box with OpenStreetMap
                     */

                    /**
                     * Start show more/less
                     */
                    //this will execute on page load(to be more specific when document ready event occurs)


                    $(".show_more").on('click', function () {
                        //toggle elements with class .ty-compact-list that their index is bigger than 2
                        $(".filter_category_div:gt(7)").toggle();
                        //change text of show more element just for demonstration purposes to this demo
                        $(this).text() === "<?php echo e(__('listings_filter.show-more')); ?>" ? $(this).text("<?php echo e(__('listings_filter.show-less')); ?>") : $(this).text("<?php echo e(__('listings_filter.show-more')); ?>");
                    });


                    /**
                     * End show more/less
                     */


                    /**
                     * Start state selector in filter
                     */
                    $('#filter_state').on('change', function () {

                        if (this.value > 0) {
                            $('#filter_city').html("<option selected><?php echo e(__('prefer_country.loading-wait')); ?></option>");
                            $('#filter_city').selectpicker('refresh');

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
                                    console.log(result);
                                    $('#filter_city').html("<option value='0'><?php echo e(__('prefer_country.all-city')); ?></option>");
                                    $('#filter_city').selectpicker('refresh');
                                    $.each(JSON.parse(result), function (key, value) {
                                        var city_id = value.id;
                                        var city_name = value.city_name;
                                        $('#filter_city').append('<option value="' + city_id + '">' + city_name + '</option>');
                                    });
                                    $('#filter_city').selectpicker('refresh');
                                }
                            });
                        } else {
                            $('#filter_city').html("<option value='0'><?php echo e(__('prefer_country.all-city')); ?></option>");
                            $('#filter_city').selectpicker('refresh');
                        }

                    });
                    /**
                     * End show more/less
                     */

                    <?php if(count($filter_categories) == 0): ?>
                    if ($(".filter_category_div").length > 7) {
                        $(".filter_category_div:gt(7)").hide();
                        $(".show_more").show();
                    } else {
                        $(".show_more").hide();
                    }
                    <?php else: ?>
                    if ($(".filter_category_div").length > 7) {
                        $(".show_more").text("<?php echo e(__('listings_filter.show-less')); ?>");
                        $(".show_more").show();
                    } else {
                        $(".show_more").hide();
                    }
                    <?php endif; ?>

                    /**
                     * Start state selector in filter
                     */

                    /**
                     * End state selector in filter
                     */

                    /**
                     * Start filter form submit
                     */
                    $("#filter_form_submit").on('click', function () {
                        $("#filter_form").submit();
                    });
                    /**
                     * End filter form submit
                     */
                });
            </script>
            <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_GOOGLE_MAP): ?>
                <script>


                    // Initial the google map
                    function initMap() {

                        <?php if(count($paid_items) || count($free_items)): ?>

                        var window_height = $(window).height();

                        $('#mapid-box').css('height', window_height + 'px');

                        var locations = [];

                        <?php $__currentLoopData = $paid_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paid_items_key => $paid_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($paid_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR): ?>

                        var popup_item_title = '<?php echo e($paid_item->item_title); ?>';

                        <?php if($paid_item->item_address_hide): ?>
                        var popup_item_address = '<?php echo e($paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code); ?>';
                        <?php else: ?>
                        var popup_item_address = '<?php echo e($paid_item->item_address . ', ' . $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code); ?>';
                        <?php endif; ?>
                        var popup_item_get_direction = '<a target="_blank" href="' + '<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $paid_item->item_lat . ',' . $paid_item->item_lng); ?>' + '"><i class="fas fa-directions"></i> ' + '<?php echo e(__('google_map.get-directions')); ?>' + '</a>';

                        <?php if($paid_item->getCountRating() > 0): ?>
                        var popup_item_rating = '<?php echo e($paid_item->item_average_rating); ?>' + '/5';
                        var popup_item_reviews = ' - <?php echo e($paid_item->getCountRating()); ?>' + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                        <?php else: ?>
                        var popup_item_rating = '';
                        var popup_item_reviews = '';
                        <?php endif; ?>

                        var popup_item_feature_image_link = '<img src="' + '<?php echo e(!empty($paid_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $paid_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp')); ?>' + '">';
                        var popup_item_link = '<a href="' + '<?php echo e(route('page.item', [
                        'category_slug' => $paid_item->category->parent?->category_slug ?? $paid_item->category->category_slug,
                        'sub_category_slug' => $paid_item->category->category_slug,
                        'state_slug' => $paid_item->state->state_slug,
                        'item_slug' => $paid_item->item_slug
                    ])); ?>' + '" target="_blank">' + popup_item_title + '</a>';

                        locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", <?php echo e($paid_item->item_lat); ?>, <?php echo e($paid_item->item_lng); ?>]);

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = $free_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $free_items_key => $free_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($free_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR): ?>

                        var popup_item_title = '<?php echo e($free_item->item_title); ?>';

                        <?php if($free_item->item_address_hide): ?>
                        var popup_item_address = '<?php echo e($free_item->city->city_name . ', ' . $free_item->state->state_name . ' ' . $free_item->item_postal_code); ?>';
                        <?php else: ?>
                        var popup_item_address = '<?php echo e($free_item->item_address . ', ' . $free_item->city->city_name . ', ' . $free_item->state->state_name . ' ' . $free_item->item_postal_code); ?>';
                        <?php endif; ?>
                        var popup_item_get_direction = '<a target="_blank" href="' + '<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $free_item->item_lat . ',' . $free_item->item_lng); ?>' + '"><i class="fas fa-directions"></i> ' + '<?php echo e(__('google_map.get-directions')); ?>' + '</a>';

                        <?php if($free_item->getCountRating() > 0): ?>
                        var popup_item_rating = '<?php echo e($free_item->item_average_rating); ?>' + '/5';
                        var popup_item_reviews = ' - <?php echo e($free_item->getCountRating()); ?>' + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                        <?php else: ?>
                        var popup_item_rating = '';
                        var popup_item_reviews = '';
                        <?php endif; ?>

                        var popup_item_feature_image_link = '<img src="' + '<?php echo e(!empty($free_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $free_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp')); ?>' + '">';
                        var popup_item_link = '<a href="' + '<?php echo e(route('page.item', [
                        'category_slug' => $free_item->category->parent?->category_slug ?? $free_item->category->category_slug,
                        'sub_category_slug' => $free_item->category->category_slug,
                        'state_slug' => $free_item->state->state_slug,
                        'item_slug' => $free_item->item_slug
                    ])); ?>' + '" target="_blank">' + popup_item_title + '</a>';

                        locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", <?php echo e($free_item->item_lat); ?>, <?php echo e($free_item->item_lng); ?>]);

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        var infowindow = null;
                        var infowindow_hover = null;

                        if (locations.length === 0) {
                            // Destroy mapid-box DOM since no regular listings found
                            $("#mapid-box").remove();
                        } else {
                            var map = new google.maps.Map(document.getElementById('mapid-box'), {
                                zoom: 12,
                                //center: new google.maps.LatLng(-33.92, 151.25),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            });

                            //create empty LatLngBounds object
                            var bounds = new google.maps.LatLngBounds();
                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;

                            for (i = 0; i < locations.length; i++) {
                                marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                    map: map
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
                                    map_item_reviews = ' - ' + this.getAttribute("data-map-reviews") + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                                } else {
                                    map_item_rating = '';
                                    map_item_reviews = '';
                                }

                                var map_item_link = '<a href="' + this.getAttribute("data-map-link") + '" target="_blank">' + map_item_title + '</a>';
                                var map_item_feature_image_link = '<img src="' + this.getAttribute("data-map-feature-image-link") + '">';
                                var map_item_get_direction = '<a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + map_item_lat + ',' + map_item_lng + '"><i class="fas fa-directions"></i> ' + '<?php echo e(__('google_map.get-directions')); ?>' + '</a>';

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
                        <?php endif; ?>
                    }

                </script>
                <script>
                    const mapItem = document.querySelector(".categories__items__list__item-map");
                    const mapBtn = document.querySelector(".categories__orders__map-btn");
                    let mapIsShown = false;
                    if (mapBtn) {
                        mapBtn.addEventListener("click", () => {
                            mapIsShown = !mapIsShown;

                            mapItem.classList.toggle("active");

                            if (mapIsShown) {
                                mapBtn.innerHTML = `
                        <span><i class="las la-times"></i></span>
                        <span>اخفاء الخريطة</span>
                        `;
                            } else {
                                mapBtn.innerHTML = `
                        <span><i class="las la-map-marker-alt"></i></span>
                        <span>الخريطة</span>
                        `;
                            }
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js??v=quarterly&key=<?php echo e($site_global_settings->setting_site_map_google_api_key); ?>&callback=initMap"></script>
                <script>

                    function getSubs(category_id) {
                        var ajax_url = '<?php echo e(route('getSubCategories')); ?>';
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        jQuery.ajax({
                            url: ajax_url,
                            method: 'get',
                            data: {'category_id': category_id},
                            success: function (result) {
                                console.log(result.data);
                                $('#filter_sub_category').html("<option value='0'><?php echo e(__('prefer_country.all-sub-categories')); ?></option>");
                                $('#filter_sub_category').selectpicker('refresh');
                                $.each(result.data, function (key, value) {
                                    var seleced = null;
                                    var sub_category_id = value.id;
                                    var sub_category_name = value.category_name;
                                    <?php if(request('filter_sub_category')): ?>
                                        if(<?php echo e(request('filter_sub_category')); ?> === sub_category_id)
                                            seleced = 'selected' ;
                                    <?php endif; ?>
                                    $('#filter_sub_category').append('<option value="' + sub_category_id +'"' +
                                        seleced +
                                        '>' + sub_category_name + '</option>');
                                });
                                $('#filter_sub_category').selectpicker('refresh');
                            }
                        });
                    }

                    $(document).ready(function () {
                        $('#filter_category').on('change', function () {
                            var category_id = $(this).val();
                            getSubs(category_id);
                        });
                        <?php if(request('filter_category')): ?>
                        getSubs(<?php echo e(request('filter_category')); ?>);
                        <?php endif; ?>
                    });
                </script>
    <?php endif; ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/city.blade.php ENDPATH**/ ?>