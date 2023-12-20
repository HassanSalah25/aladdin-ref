<?php $__env->startPush('styles'); ?>
<link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<section class="categories pt pb mt-header-height">
    <div class="container">
        <div class="d-flex gap-4 position-relative overflow-hidden">
            <!-- items  -->
            <div class="cateogires__items flex-fill">
                <!-- start order-area  -->
                <div class="categories__orders d-flex flex-column mb-5 flex-md-row justify-content-between align-items-md-center gap-4">
                    <form class="d-flex flex-column flex-lg-row align-items-lg-center gap-4"
                            method="get" action="<?php echo e(request()->fullUrl()); ?>">
                        <div class="d-flex gap-3 align-items-center categories__orders__item">
                            <label for="selectOrderBy" class="white-space-nowrap">
                                <i class="las la-filter"></i>
                                <span><?php echo e(__('listings_filter.sort-by')); ?></span>
                            </label>

                            <select class="form-select border-0" id="selectOrderBy" name="filter_sort_by">
                                <option value="">___</option>

                                <option value="7" <?php echo e(("بالقرب مني" == request('search_city_state') || 7 == request('filter_sort_by')) ? 'selected' : ''); ?>><?php echo e(__('frontend.homepage.nearby-listings')); ?></option>
                            </select>
                        </div>
                        <?php if(request('search_city_state') != 'بالقرب مني'): ?>
                            <div class="d-flex gap-3 align-items-center categories__orders__item">
                                <label for="selectOrderBy" class="white-space-nowrap">
                                    <i class="las la-filter"></i>
                                    <span><?php echo e(__('theme_alaadin.filter-state')); ?></span>
                                </label>

                                <select class="form-select border-0" id="selectOrderBy" name="filter_state">
                                    <option value=""><?php echo e(__('prefer_country.all-state')); ?></option>
                                    
                                    <?php $__currentLoopData = $all_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_states_key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($state->id); ?>" <?php echo e($filter_state == $state->id ? 'selected' : ''); ?>><?php echo e($state->state_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="d-flex gap-3 align-items-center categories__orders__item">
                                <label for="selectOrderBy" class="white-space-nowrap">
                                    <i class="las la-filter"></i>
                                    <span><?php echo e(__('theme_alaadin.filter-city')); ?></span>
                                </label>

                                <select class="form-select border-0" id="selectOrderBy" name="filter_city">
                                    <option value="" <?php echo e(empty($filter_city) ? 'selected' : ''); ?>><?php echo e(__('prefer_country.all-city')); ?></option>
                                    
                                    <?php $__currentLoopData = $all_cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_cities_key => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>" <?php echo e($filter_city == $city->id ? 'selected' : ''); ?>><?php echo e($city->city_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        <?php endif; ?>














                       
                        <div id="dropdown-parent-id" class="dropdown-parent what_input_field_tpm">
                            <div id="search-by-id" class="autocomplete search-by" style="height: 44px;">
                            <img class="search-img lazyloaded" data-src="" alt=""
                                 src="<?php echo e(asset('assets/icons8-search-50.png')); ?>" style="width: 8%;">
                            <input autocomplete="off" name="search_query" type="text" id="search-what"
                                   value="<?php echo e($search_query); ?>"
                                       placeholder="ابحث بـ اسم العمل، النشاط التجاري، العلامة التجارية أو كلمة بحث ..."
                                   class="form-control px-3 autocomplete search-query-what what_original_top"
                                   style="padding: 5px 0px 5px 0px;" >
                            <img id="loading-search-what" class="loading-search-img-ar lazyload"
                                 data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                            <div id="search-whatautocomplete-list" class="autocomplete-items fixed-height"></div>
                        </div>
                        </div>
                        <button type="submit"
                                class="categories__orders__layout-btn px-1 d-grid row align-items-center text-light" data-layout="4">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>

                    <div class="d-flex align-items-center gap-4">

<!--                        <div class="d-flex align-items-center gap-3">
                            <h6 class="m-0 dark-color fw-bold categories__orders__layout-title white-space-nowrap d-none d-sm-block">
                                طريقة العرض
                            </h6>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="categories__orders__layout-btn d-grid" data-layout="4">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </button>
                                <button type="button" class="categories__orders__layout-btn d-grid" data-layout="3">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>-->
<!--
                        <button class="btn btn-primary my-btn categories__orders__map-btn" type="button">
                            <span><i class="las la-map-marker-alt"></i></span>
                            <span>الخريطة</span>
                        </button>-->
                    </div>
                </div>

                <!-- **************************                        ******************************  -->
                <!-- ************************** start activites-section   ******************************  -->
                <!-- **************************                        ******************************  -->
                
                <!-- **************************                      ******************************  -->
                <!-- ************************** end activites-section   ******************************  -->
                <!-- **************************                      ******************************  -->

                <h2 class="text-center mb-lg dark-color fw-normal">
                    نتائج البحث عن
                    <?php if($search_query): ?>
                    <span class="fw-bold primary-color">“<?php echo e($search_query); ?>"</span><br>
                    <?php endif; ?>
                    <span class="fw-bold"> ( <?php echo e($free_items->total()); ?> )</span>
                </h2>
                <!-- start items  -->
                <div class="categories__items__list">
                    <?php if($ads_before_content->count() > 0): ?>
                    <?php $__currentLoopData = $ads_before_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section class="category-swiper" style="min-height: 5rem;">
                            <div class="container">
                                <div class="swiper category-swiper__inner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="category-slide__item d-flex justify-content-center">
                                                <img src="<?php echo e(asset('storage/ads/'.$ad->ad_image_horizontal)); ?>" alt="category slider" class="img-fluid" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
                                </div>
                            </div>
                        </section>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="ads categories__items__list__item__ads">ads</div>
                    <?php endif; ?>
                    <!-- start map  -->
                    <div id="mapid-box" class="categories__items__list__item categories__items__list__item-map">
                    </div>

                    <?php if($free_items->count() > 0): ?>
                    <?php $__currentLoopData = $free_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $free_items_key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <div class="col-lg-6"> -->
                    <?php echo $__env->make('frontend.partials.free-item-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- </div> -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <!-- item  -->


                        <?php if($ads_after_content): ?>

                            <?php $__currentLoopData = $ads_after_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <section class="category-swiper" style="min-height: 5rem;">
                                    <div class="container">
                                        <div class="swiper category-swiper__inner">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <?php if(!$ad->item?->first()): ?>
                                                        <div class="category-slide__item  d-flex justify-content-center">
                                                            <img src="<?php echo e(asset('storage/ads/'.$ad->ad_image_horizontal)); ?>" alt="category slider" class="img-fluid" />
                                                        </div>
                                                    <?php else: ?>
                                                        <a  class="category-slide__item  d-flex justify-content-center" href="<?php echo e(route('page.item',[
                                                                                                                            'category_slug' => $ad->item->first()->category->parent?->category_slug ?? $ad->item->first()->category->category_slug,
                                                                                                                            'sub_category_slug' => $ad->item->first()->category->category_slug,
                                                                                                                            'state_slug' => $ad->item->first()->state->state_slug,
                                                                                                                            'item_slug' => $ad->item->first()->item_slug
                                                                                                                        ])); ?>" class="ads">

                                                            <img src="<?php echo e(asset('storage/ads/'.$ad->ad_image_horizontal)); ?>"/>
                                                        </a>

                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                            <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
                                        </div>
                                    </div>
                                </section>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div class="ads categories__items__list__item__ads">ads</div>
                        <?php endif; ?>
                </div>
                <div class="pagination row justify-content-center">
                    <?php echo e($pagination->appends(request()->query())->links()); ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#search-what').blur(function (event) {
                var check = 0;
                var parentDiv = $('#search-whatautocomplete-list');

                $('body').on('click', function (event) {
                    if (!$(event.target).is(parentDiv)) {
                        parentDiv.empty();
                    }

                })
            })
            $('#search-what').on('input', function () {
                var query = $('#search-what').val();
                var resultsContainer = $('#search-whatautocomplete-list');
                if (query == '') {
                    resultsContainer.empty();
                } else if ($(this).val() != '') {
                    $.ajax({
                        url: "<?php echo e(route('searchajax')); ?>",
                        type: "GET",
                        data: {query: query},
                        success: function (response) {
                            var resultsContainer = $('#search-whatautocomplete-list');
                            resultsContainer.empty();
                            if (response['cats'].length > 0) {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                                $.each(response['cats'], function (index, result) {

                                    resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/category/' + result['category_name'] + '/البحث">' + result['category_name'] + '</a>');
                                });


                            } else {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">المجالات</a>');
                                resultsContainer.append('<p>No results found.</p>');
                            }
                            if (response['items'].length > 0) {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                                $.each(response['items'], function (index, result) {

                                    resultsContainer.append('<a style="display:block;padding: 10px;color: black" href="/listing/' + result['id'] + '/البحث">' + result['item_title'] + '</a>');
                                });


                            } else {
                                resultsContainer.append('<a style="display:block;padding: 10px;color: gray">اسم الشركة</a>');
                                resultsContainer.append('<p>No results found.</p>');
                            }
                        }
                    });
                }
            });
        });
    </script>
<script src="<?php echo e(asset('frontend/js/categories.js')); ?>"></script>

<?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_GOOGLE_MAP): ?>

            <script async defer src="https://maps.googleapis.com/maps/api/js??v=quarterly&key=<?php echo e($site_global_settings->setting_site_map_google_api_key); ?>&callback=initMap"></script>
            <script>
                // Initial the google map
                function initMap() {

                    <?php if(count($paid_items) || count($free_items)): ?>

                    var window_height = $(window).height();

                    $('#mapid-box').css('height', window_height + 'px');

                    var locations = [];

                    <?php $__currentLoopData = $paid_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paid_items_key =>  $paid_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($paid_item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR): ?>

                    var popup_item_title = '<?php echo e($paid_item->item_title); ?>';

                    <?php if($paid_item->item_address_hide): ?>
                    var popup_item_address = '<?php echo e($paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code); ?>';
                    <?php else: ?>
                    var popup_item_address = '<?php echo e($paid_item->item_address . ', ' . $paid_item->city->city_name . ', ' . $paid_item->state->state_name . ' ' . $paid_item->item_postal_code); ?>';
                    <?php endif; ?>
                    var popup_item_get_direction = '<a target="_blank" href="'+ '<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $paid_item->item_lat . ',' . $paid_item->item_lng); ?>' +'"><i class="fas fa-directions"></i> '+ '<?php echo e(__('google_map.get-directions')); ?>' +'</a>';

                    <?php if($paid_item->getCountRating() > 0): ?>
                    var popup_item_rating = '<?php echo e($paid_item->item_average_rating); ?>' + '/5';
                    var popup_item_reviews = ' - <?php echo e($paid_item->getCountRating()); ?>' + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                    <?php else: ?>
                    var popup_item_rating = '';
                    var popup_item_reviews = '';
                    <?php endif; ?>

                    var popup_item_feature_image_link = '<img src="'+ '<?php echo e(!empty($paid_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $paid_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp')); ?>' +'">';
                    var popup_item_link = '<a href="' + '<?php echo e(route('page.item', [
                        'category_slug' => $paid_item->category->parent?->category_slug ?? $paid_item->category->category_slug,
                        'sub_category_slug' => $paid_item->category->category_slug,
                        'state_slug' => $paid_item->state->state_slug,
                        'item_slug' => $paid_item->item_slug
                    ])); ?>' + '" target="_blank">' + popup_item_title + '</a>';

                    locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", <?php echo e($paid_item->item_lat); ?>, <?php echo e($paid_item->item_lng); ?> ]);

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
                    var popup_item_get_direction = '<a target="_blank" href="'+ '<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $free_item->item_lat . ',' . $free_item->item_lng); ?>' +'"><i class="fas fa-directions"></i> '+ '<?php echo e(__('google_map.get-directions')); ?>' +'</a>';

                    <?php if($free_item->getCountRating() > 0): ?>
                    var popup_item_rating = '<?php echo e($free_item->item_average_rating); ?>' + '/5';
                    var popup_item_reviews = ' - <?php echo e($free_item->getCountRating()); ?>' + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                    <?php else: ?>
                    var popup_item_rating = '';
                    var popup_item_reviews = '';
                    <?php endif; ?>

                    var popup_item_feature_image_link = '<img src="'+ '<?php echo e(!empty($free_item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $free_item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp')); ?>' +'">';
                    var popup_item_link = '<a href="' + '<?php echo e(route('page.item', [
                        'category_slug' => $free_item->category->parent?->category_slug ?? $free_item->category->category_slug,
                        'sub_category_slug' => $free_item->category->category_slug,
                        'state_slug' => $free_item->state->state_slug,
                        'item_slug' => $free_item->item_slug
                    ])); ?>' + '" target="_blank">' + popup_item_title + '</a>';

                    locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", <?php echo e($free_item->item_lat); ?>, <?php echo e($free_item->item_lng); ?> ]);

                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    var infowindow = null;
                    var infowindow_hover = null;

                    if(locations.length === 0)
                    {
                        // Destroy mapid-box DOM since no regular listings found
                        $("#mapid-box").remove();
                    }
                    else
                    {
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

                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {

                                    if(infowindow_hover)
                                    {
                                        infowindow_hover.close();
                                    }

                                    infowindow.setContent(locations[i][0]);
                                    infowindow.open(map, marker);
                                }
                            })(marker, i));
                        }

                        //now fit the map to the newly inclusive bounds
                        map.fitBounds(bounds);

                        var listener = google.maps.event.addListener(map, "idle", function() {
                            if (map.getZoom() > 12) map.setZoom(12);
                            google.maps.event.removeListener(listener);
                        });

                        // Start google map hover event
                        $(".listing_for_map_hover").on('mouseover', function() {

                            var map_item_lat = this.getAttribute("data-map-lat");
                            var map_item_lng = this.getAttribute("data-map-lng");
                            var map_item_title = this.getAttribute("data-map-title");
                            var map_item_address = this.getAttribute("data-map-address");

                            var map_item_rating = '';
                            var map_item_reviews = parseInt(this.getAttribute("data-map-reviews"));

                            if(map_item_reviews > 0)
                            {
                                map_item_rating = this.getAttribute("data-map-rating") + '/5';
                                map_item_reviews = ' - ' + this.getAttribute("data-map-reviews") + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
                            }
                            else
                            {
                                map_item_rating = '';
                                map_item_reviews = '';
                            }

                            var map_item_link = '<a href="' + this.getAttribute("data-map-link") + '" target="_blank">' + map_item_title + '</a>';
                            var map_item_feature_image_link = '<img src="'+ this.getAttribute("data-map-feature-image-link") + '">';
                            var map_item_get_direction = '<a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + map_item_lat + ',' + map_item_lng + '"><i class="fas fa-directions"></i> '+ '<?php echo e(__('google_map.get-directions')); ?>' +'</a>';

                            if(map_item_lat !== '' && map_item_lng !== '')
                            {
                                var center = new google.maps.LatLng(map_item_lat, map_item_lng);
                                var contentString = "<div class='google_map_scrollFix'>" + map_item_feature_image_link + "<br><br>" + map_item_link + "<br>" + map_item_rating + map_item_reviews + "<br>" + map_item_address + "<br>" + map_item_get_direction + "</div>";

                                if(infowindow_hover)
                                {
                                    infowindow_hover.close();
                                }
                                if(infowindow)
                                {
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
    <?php endif; ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/search.blade.php ENDPATH**/ ?>