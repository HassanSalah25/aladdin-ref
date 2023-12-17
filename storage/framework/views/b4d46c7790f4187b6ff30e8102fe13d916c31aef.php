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

                <h2 class="text-center mb-lg dark-color fw-normal">
                   الفروع
                    <span class="fw-bold"> ( <?php echo e($free_items->total()); ?> )</span>
                </h2>
                <!-- start items  -->
                <div class="categories__items__list">
                   
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

                </div>
                <div class="pagination row justify-content-center">
                    <?php echo e($free_items->appends(request()->query())->links()); ?>

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

                    <?php if(count($free_items)): ?>

                    var window_height = $(window).height();

                    $('#mapid-box').css('height', window_height + 'px');

                    var locations = [];


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

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/branches.blade.php ENDPATH**/ ?>