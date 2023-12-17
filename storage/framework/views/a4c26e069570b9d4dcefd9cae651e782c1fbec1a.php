<?php use App\Models\Item; ?>
<?php ?>
<?php ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/index.css')); ?>"/>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

    <section class="landing position-relative">
        <!-- Swiper -->
        <div class="swiper landing__swiper w-100 h-100">
            <div class="swiper-wrapper">
                <div class="swiper-slide landing__swiper__swiper-slide flex">
                    <picture>
                        <img
                            src="<?php echo e(Storage::disk('public')->url($site_global_settings->slider_image_1) != 'https://aladdin-eg.com/storage/' ? Storage::disk('public')->url('setting/'.$site_global_settings->slider_image_1) : asset('assets/images/landing-slide-1.png')); ?>"
                            alt="landing slide" class="landing__swiper__swiper-slide__img"/>
                    </picture>
                    <div class="container">
                        <div class="row justify-content-end">
                            <!--<div class="col-md-6 col-lg-4 d-flex justify-content-end">-->
                            <!--  <img src="assets/images/time-to-travel.svg" alt="time to travel" class="img-fluid position-relative" data-aos="fade-right" />-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide landing__swiper__swiper-slide flex">
                    <picture>
                        <img
                            src="<?php echo e(Storage::disk('public')->url($site_global_settings->slider_image_2) != 'https://aladdin-eg.com/storage/'? Storage::disk('public')->url('setting/'.$site_global_settings->slider_image_2) : 'assets/images/landing-slide-1.png'); ?>"
                            alt="landing slide" class="landing__swiper__swiper-slide__img"/>
                    </picture>
                    <div class="container">
                        <div class="row justify-content-end">
                            <!--<div class="col-md-6 col-lg-4 d-flex justify-content-end">-->
                            <!--  <img src="assets/images/time-to-travel.svg" alt="time to travel" class="img-fluid position-relative" data-aos="fade-right" />-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next landing__swiper__button landing__swiper__button__swiper-button-next">
                <i class="las la-angle-left"></i>
            </div>
            <div class="swiper-button-prev landing__swiper__button landing__swiper__button__swiper-button-prev">
                <i class="las la-angle-right"></i>
            </div>
        </div>

        <form class="landing__search-form autocomplete-search  position-absolute searchForm"
              id="autocomplete-search-id" action="<?php echo e(route('page.search')); ?>">
            <div id="search-dropdown-id" class="col-xs-12 search-dropdown">
                <div id="dropdown-parent-id" class="dropdown-parent what_input_field_tpm"
                     style="height: 66px; margin: 0px; border-radius: 10px;">

                    <div id="search-by-id" class="autocomplete mb-3 search-by" style="height: 44px">
                        <select name="search_category" class="form-select search_category border-0 px-5 mt-2 d-md-block"
                                style="">
                            <option value=""><?php echo e(__('frontend.search.all')); ?></option>
                            <?php $__currentLoopData = $search_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <select name="search_category_2"
                                class="form-select search_category_2 border-0 px-5 mt-2 d-md-block" style="">
                            <option value="">__</option>
                        </select>
                    </div>
                    <div id="search-by-id" class="autocomplete search-by" style="height: 44px;">
                        <img class="search-img lazyloaded" data-src="" alt=""
                             src="<?php echo e(asset('assets/icons8-search-50.png')); ?>" style="width: 8%;">
                        <input autocomplete="off" name="search_query" type="text" value=""
                               placeholder="<?php echo e(__('frontend.search.item')); ?>"
                               class="autocomplete search-query-what what_original_to search-what"
                               style="padding: 5px 0px 5px 0px;">
                        <img id="" class="loading-search-img-ar lazyload"
                             data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                        <div
                            class="autocomplete-items fixed-height search-whatautocomplete-list loading-search-what"></div>
                    </div>
                    <div id="inWhat-id" class="autocomplete dropdown inWhat"
                         style=" height: 66px;width: 273px; padding: 10px 0px;">
                        <img class="city-img lazyloaded" width="50" height="50"
                             data-src="<?php echo e(asset('assets/icons8-building-100.png')); ?>" alt=""
                             src="<?php echo e(asset('assets/icons8-building-100.png')); ?>">
                        <input autocomplete="off" name="search_city_state"
                               class="btn btn-default autocomplete search-query-where where_original_top select-search"
                               type="text" required
                               placeholder="<?php echo e(__('frontend.search.state_city')); ?>"
                               value="<?php echo e(request('search_city_state')); ?>"
                               style="height: 46px; font-size: 16px;width: 100%" data-gtm-form-interact-field-id="1">

                        <img class="loading-search-img-ar lazyload loading-select-search"
                             data-src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/loaders/loading.gif?9">
                        <div class="select-searchautocomplete-list autocomplete-items fixed-height ">
                        </div>
                    </div>
                    <input class="search-submit-btn-id search-submit-btn btn" type="submit" value="ابحث"
                           style="display: block;">
                    <input id="search-submit-img-id" class="search-submit-img" type="image"
                           src="//cdn.yellowpages.com.eg/static/v2022/img/images_new/new_design/Search.png?9"
                           alt="Submit" style="display: none;">
                </div>
            </div>
            <div id="category-redirect-id" class="col-xs-12 category-redirect">

                <?php $__currentLoopData = $search_bar_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div>
                        <a href="<?php echo e(route('page.sub_categories',$category->category_slug)); ?>">
                             <span>
                                     <i class="<?php echo e($category->category_icon); ?>" style="color: #ffffff;"></i>
                             </span>
                            <span><?php echo e($category->category_name); ?></span>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <a href="<?php echo e(route('page.categories')); ?>">
                                <span>
                                        <i class="fas fa-ellipsis-h" style="color: #ffffff;"></i>
                                </span>
                        <span>المزيد</span>
                    </a>
                </div>
            </div>

        </form>
    </section>
    <!-- **************************                       ******************************  -->
    <!-- ************************** end landing-section   ******************************  -->
    <!-- **************************                       ******************************  -->

    <!-- **************************                           ******************************  -->
    <!-- ************************** start provinces-section   ******************************  -->
    <!-- **************************                           ******************************  -->
    <!-- *************
<div class="parent">
  <div class ='noScroll' id='searchBar'>
           <div class="landing__search-form__inner flex">

            <input style="margin: 0 1rem;border: 1px solid #fff !important;" id="header-input-search" type="text" name="search_query" value="<?php echo e($search_query ?? ''); ?>" placeholder="<?php echo e(__('categories.search-query-placeholder')); ?>..​" class="form-control flex-fill border-0" />

            <button type="submit" class="btn btn-primary rounded-circle flex">
              <i class="las la-search"></i>
            </button>
          </div>
  </div>
</div>
****************** --->
    <section class="pt pb d-flex provinces position-relative">
        <?php if($ads_side_before_states->count() > 0): ?>
            <?php $__currentLoopData = $ads_side_before_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads_side_before_states_key => $ads_side_before_states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-5">
                    <?php if(!$ads_side_before_states->item?->first()): ?>
                        <div class="ads vertical d-none d-lg-flex">

                            <img src="<?php echo e(asset('storage/ads/'.$ads_side_before_states->ad_image_vertical)); ?>"/>
                        </div>

                    <?php else: ?>
                        <div class="ads vertical d-none d-lg-flex">
                            <a href="<?php echo e(route('page.item',[
                                                        'category_slug' => $ads_side_before_states->item->first()->category->parent?->category_slug ?? $ads_side_before_states->item->first()->category->category_slug,
                                                        'sub_category_slug' => $ads_side_before_states->item->first()->category->category_slug,
                                                        'state_slug' => $ads_side_before_states->item->first()->state->state_slug,
                                                        'item_slug' => $ads_side_before_states->item->first()->item_slug
                                                    ])); ?>" class="ads">

                                <img src="<?php echo e(asset('storage/ads/'.$ads_side_before_states->ad_image_vertical)); ?>"/>
                            </a>

                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="ads vertical d-none d-lg-flex">
                <img src="/storage/banner.jpg"/>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title"><?php echo e(__('frontend.search.what-are-you-looking-for')); ?></h2>
                <h4 class="title-container__subtitle">
                    <?php echo e(__('frontend.homepage.title')); ?>

                </h4>
            </div>

            <div data-aos="fade-right" data-aos-duration="2000" class="">

                <div class="container" style="
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                ">

                    <a href="<?php echo e(route('page.cities', ['state_slug' => $all_states->first()->state_name])); ?>"
                       class="show provinces__items__item m-5">

                        <img src="<?php echo e(asset('storage/state/' . $all_states->first()->state_name . '.jpg')); ?>">
                        <div class="provinces__items__item__info">
                            <h4 class="provinces__items__item__info__title"><?php echo e($all_states->first()->state_name); ?></h4>
                            <h5 class="provinces__items__item__info__subtitle">
                                <?php echo e(__('frontend.contact.watch-places')); ?>

                            </h5>

                        </div>
                    </a>
                    <section
                        class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center row-cols-xl-5 mb-xl g-4">
                        <?php $__currentLoopData = $all_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- img  -->
                            <?php if($loop->iteration == 1): ?>
                            <?php else: ?>
                                <a href="<?php echo e(route('page.cities', ['state_slug' => $state->state_slug ])); ?>"
                                   style="padding: 0px" class="thumbnail  provinces__items__item m-3">
                                    <img class="demo cursor"
                                         src="<?php echo e(asset('storage/state/' .$state->state_name.'.jpg')); ?>" style="
    height: 100%;
">
                                    <div class="provinces__items__item__info">
                                        <h6 class="provinces__items__item__info__title"><?php echo e($state->state_name); ?></h6>
                                        <h6 class="provinces__items__item__info__subtitle">
                                            <?php echo e(__('frontend.contact.watch-places')); ?>

                                        </h6>

                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </section>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="<?php echo e(route('page.states')); ?>" class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
            </div>
        </div>
        <?php if($ads_side_after_states->count() > 0): ?>
            <?php $__currentLoopData = $ads_side_after_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads_side_after_states_key => $ads_side_after_states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-5">
                    <?php if(!$ads_side_after_states->item?->first()): ?>
                        <div class="ads vertical d-none d-lg-flex">

                            <img src="<?php echo e(asset('storage/ads/'.$ads_side_after_states->ad_image_vertical)); ?>"/>
                        </div>

                    <?php else: ?>
                        <div class="ads vertical d-none d-lg-flex">
                            <a href="<?php echo e(route('page.item',[
                                                        'category_slug' => $ads_side_after_states->item->first()->category->parent?->category_slug ?? $ads_side_after_states->item->first()->category->category_slug,
                                                        'sub_category_slug' => $ads_side_after_states->item->first()->category->category_slug,
                                                        'state_slug' => $ads_side_after_states->item->first()->state->state_slug,
                                                        'item_slug' => $ads_side_after_states->item->first()->item_slug
                                                    ])); ?>" class="ads">

                                <img src="<?php echo e(asset('storage/ads/'.$ads_side_after_states->ad_image_vertical)); ?>"/>
                            </a>

                        </div>
                    <?php endif; ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="ads vertical d-none d-lg-flex"><img src="/storage/banner.jpg"/>
            </div>
        <?php endif; ?>
    </section>
    <!-- **************************                         ******************************  -->
    <!-- ************************** end provinces-section   ******************************  -->
    <!-- **************************                         ******************************  -->

    <div class="container pb">
        <?php if($ads_after_states->count() > 0): ?>
            <?php $__currentLoopData = $ads_after_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads_after_states_key => $ads_after_states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-5">
                    <?php if(!$ads_after_states->item?->first()): ?>
                        <div class="ads">

                            <img src="<?php echo e(asset('storage/ads/'.$ads_after_states->ad_image_horizontal)); ?>"/>
                        </div>

                    <?php else: ?>
                        <div class="row mb-5">
                            <a href="<?php echo e(route('page.item',[
            'category_slug' => $ads_after_states->item->first()->category->parent?->category_slug ?? $ads_after_states->item->first()->category->category_slug,
            'sub_category_slug' => $ads_after_states->item->first()->category->category_slug,
            'state_slug' => $ads_after_states->item->first()->state->state_slug,
            'item_slug' => $ads_after_states->item->first()->item_slug
        ])); ?>" class="ads">

                                <img src="<?php echo e(asset('storage/ads/'.$ads_after_states->ad_image_horizontal)); ?>"/>
                            </a>

                        </div>
                    <?php endif; ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="ads">
                <img src="/storage/banner 2.jpg"/>
            </div>
        <?php endif; ?>
    </div>

    <!-- **************************                        ******************************  -->
    <!-- ************************** start places-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb places position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title"><?php echo e(__('frontend.homepage.recent-listings')); ?></h2>
                <h4 class="title-container__subtitle">
                    <?php echo e(__('frontend.homepage.find-recent-listings')); ?>

                </h4>
            </div>
            <?php
                $popular_items_count = $popular_items->count();
            ?>
            <?php if($popular_items_count > 0): ?>
                <div data-aos="fade-right" data-aos-duration="1000"
                     class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-6 mb-xl g-4">

                    <?php $__currentLoopData = $popular_items->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_items_key => $popular_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col mx-1">
                            <div class="places__item row align-items-end" style="overflow:hidden">
                                <div class="places__item__header mb-1 d-flex align-items-center gap-3">
                                    <a data-aos="fade-left" data-aos-duration="1000" href="<?php echo e(route('page.item', [
                        'category_slug' => $popular_item->category->parent?->category_slug ?? $popular_item->category->category_slug,
                        'sub_category_slug' => $popular_item->category->category_slug,
                        'state_slug' => $popular_item->state->state_slug,
                        'item_slug' => $popular_item->item_slug
                    ])); ?>"
                                       class=" h-100">
                                        <?php if($popular_item->item_image): ?>
                                            <img
                                                src="<?php echo e(\Illuminate\Support\Facades\Storage::disk('public')->url('item/'. $popular_item->item_image)); ?>"
                                                alt="restaurant" class="img-fluid places__item__header__img"/>
                                        <?php else: ?>
                                            <img
                                                src="<?php echo e(asset('frontend/images/placeholder/category-image.webp')); ?>"
                                                alt="restaurant" class="img-fluid places__item__header__img"/>
                                        <?php endif; ?>
                                        <br/>
                                        <div>
                                            <h6 class="fw-bold recent_categories__item mb-1 primary-dark-color"
                                                style="display: inline-block;vertical-align: top;margin-top: 1rem;">
                                                <?php echo e($popular_item->item_title); ?>

                                            </h6>
                                        </div>
                                    </a>
                                </div>


                            </div>
                            

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <p><?php echo e(__('frontend.homepage.no-categories')); ?></p>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-center">
                <a href="<?php echo e(route('page.popular')); ?>"
                   class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
            </div>
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end places-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start places-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb about position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title"><?php echo e(__('frontend.about.title')); ?></h2>
            </div>

            <div class="row g-0 about__content" data-aos="fade-up" data-aos-duration="1000">
                <!-- img  -->
                <div class="col-lg-5 col-x;-4">
                    <img src="assets/images/about.png" alt="about" class="img-fluid about__content_img w-100 h-100"/>
                </div>
                <!-- content  -->
                <div class="col">
                    <div class="about__content__inner">
                        <h1 class="primary-dark-color mb-sm fw-bold"><?php echo e(__('frontend.about.description')); ?></h1>
                        <?php echo str_limit($about,700); ?>

                        <br/>
                        <a href="<?php echo e(route('page.about')); ?>"
                           class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************************                     ******************************  -->
    <!-- ************************** end about-section   ******************************  -->
    <!-- **************************                     ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start hotels-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb hotels position-relative overflow-hidden">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title"><?php echo e(__('frontend.homepage.nearby-listings')); ?></h2>
                <h4 class="title-container__subtitle">
                    <?php echo e(__('frontend.homepage.popular-listings')); ?>

                </h4>
            </div>


            <div class="explore__items mb-xl row justify-content-center" id="locationItems" style="overflow: hidden">

                <div class="col-md-6 row justify-content-center">
                    <div class="col-md-6 row justify-content-center">
                        <p class="text-center">يرجي تفعيل تحديد المواقع لإظهار النتائج</p>
                        <button onclick="getLocation()" class="btn btn-primary my-btn">تفعيل تحديد موقعك</button>
                    </div>
                </div>
                <div class=" justify-content-center" id="button" style="display: none">
                    <a href="<?php echo e(route('page.search',['filter_sort_by'=>'بالقرب مني'])); ?>"
                       class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
                </div>
            </div>

            
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end hotels-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <div class="container pb">
        <?php if($ads_after_lisitng->count() > 0): ?>
            <?php $__currentLoopData = $ads_after_lisitng; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads_after_lisitng_key => $ads_after_lisitng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-5">
                    <?php if(!$ads_after_lisitng->item?->first()): ?>
                        <div class="ads">

                            <img src="<?php echo e(asset('storage/ads/'.$ads_after_lisitng->ad_image_horizontal)); ?>"/>
                        </div>

                    <?php else: ?>
                        <div class="row mb-5">
                            <a href="<?php echo e(route('page.item',[
            'category_slug' => $ads_after_lisitng->item->first()->category->parent?->category_slug ?? $ads_after_lisitng->item->first()->category->category_slug,
            'sub_category_slug' => $ads_after_lisitng->item->first()->category->category_slug,
            'state_slug' => $ads_after_lisitng->item->first()->state->state_slug,
            'item_slug' => $ads_after_lisitng->item->first()->item_slug
        ])); ?>" class="ads">

                                <img src="<?php echo e(asset('storage/ads/'.$ads_after_lisitng->ad_image_horizontal)); ?>"/>
                            </a>

                        </div>
                    <?php endif; ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="ads"><img src="/storage/banner 2.jpg"/></div>
        <?php endif; ?>
    </div>
    <?php
        $popular_items_count = $popular_items->count();
    ?>

        <!-- ************************** start hotels-section   ******************************  -->
    <?php if($popular_items_count > 0): ?>
        <section class="pb activites position-relative">
            <div class="container">
                <div class="activites__items d-flex flex-row align-items-center gap-4">
                    <div class="activites__title-item d-flex p-5 align-items-center justify-content-center text-center"
                         style="z-index: 5">
                        <h3 class="activites__title-item__title m-0 fw-bold">
                            <?php echo e(__('frontend.categories.more-common')); ?>

                        </h3>
                    </div>
                    <div class="swiper-container" style="width: 75% !important;">
                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $popular_items->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_items_key => $popular_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a data-aos="fade-left" data-aos-duration="1000"
                                   href="<?php echo e(route('page.item', [
                                                                'category_slug' => $popular_item->category->parent?->category_slug ?? $popular_item->category->category_slug,
                                                                'sub_category_slug' => $popular_item->category->category_slug,
                                                                'state_slug' => $popular_item->state->state_slug,
                                                                'item_slug' => $popular_item->item_slug
                                                            ])); ?>"
                                   class="swiper-slide d-flex flex-column align-items-center justify-content-end gap-3 text-center">
                                    <div data-aos="fade-left" data-aos-duration="1000"
                                         class="activites__item d-flex flex-column align-items-center justify-content-end gap-3 text-center">
                                        <?php if($popular_item->item_image): ?>
                                            <img
                                                src="<?php echo e(\Illuminate\Support\Facades\Storage::disk('public')->url('item/'. $popular_item->item_image)); ?>"
                                                alt="restaurant" class="img-fluid"/>
                                        <?php else: ?>
                                            <img
                                                src="<?php echo e(asset('frontend/images/placeholder/category-image.webp')); ?>"
                                                alt="restaurant" class="img-fluid"/>
                                        <?php endif; ?>
                                        <h6 class="fw-bold mb-0 primary-dark-color"><?php echo e($popular_item->item_title); ?></h6>
                                    </div>
                                </a>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ************************** end hotels-section   ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start explore-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb explore position-relative">
        <div class="container">
            <div class="title-container">
                <h2 class="title-container__title"><?php echo e(__('frontend.homepage.recent-listings')); ?></h2>
                <!-- <h4 class="title-container__subtitle">
                  اكتشف الاقرب والاشهر فى مصر كلها.
                </h4> -->
            </div>

            <div class="explore__items mb-xl">
                <div class="swiper explore__items__swiper swiper-padding">
                    <div class="swiper-wrapper">
                        <?php if($popular_items->count() > 0): ?>
                            <?php $__currentLoopData = $popular_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_items_key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide explore__items__swiper__swiper-slide">
                                    <div data-aos="fade-left" class="expolre__items__item d-flex align-items-center">
                                        <?php if($item->item_image_medium): ?>
                                            <img
                                                src="<?php echo e(!empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp'))); ?>"
                                                alt="explore item" class="img-fluid expolre__items__item__img"/>
                                        <?php endif; ?>
                                        <div class="explore__items__item__info">
                                            <!-- head  -->
                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 explore__items__item__info__head">
                                                <h4 class="explore__items__item__info__title mb-0">
                                                    <a href="<?php echo e(route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ])); ?>"
                                                       style="font-size:1.4rem"><?php echo e($item->item_title); ?></a>
                                                </h4>
                                                <div
                                                    class="explore__items__item__info__time d-flex align-items-center gap-2">
                                                    <span style="min-width:6rem">
                      <span class="icon">
                        <i class="las la-star"></i>
                      </span>
                      <?php
                          $latest_item_getCountRating = $item->getCountRating();
                      ?>
                      <span class="text"> <?php echo e($item->item_average_rating); ?> </span>
                      <span class="time" style="display: block;">
                        <span class="icon">
                          <i class="las la-clock"></i>
                        </span>
                        <span class="text text-capitalize">
                          <?php if($item->item_hour_show_hours == Item::ITEM_HOUR_SHOW): ?>
                                <?php if($item->hasOpened()): ?>
                                    <span
                                        class="item-box-hour-span-opened"><?php echo e(__('item_hour.frontend-item-box-hour-opened')); ?></span>
                                <?php else: ?>
                                    <span
                                        class="item-box-hour-span-closed"><?php echo e(__('item_hour.frontend-item-box-hour-closed')); ?></span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </span>
                      </span>
                    </span>
                                                </div>
                                            </div>

                                            <div class="mb-sm d-flex gap-2 explore__items__item__info__details">
                                                <i class="las la-map-marker-alt icon"></i>

                                                <p class="gray-color font-size-sm mb-0 lh">
                                                <?php if($item->item_type == Item::ITEM_TYPE_REGULAR && $item->city): ?>
                                                    <address>
                                                        <a href="<?php echo e(route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug])); ?>"><?php echo e($item->city->city_name); ?></a>,
                                                        <a href="<?php echo e(route('page.cities', ['state_slug'=>$item->state->state_slug])); ?>"><?php echo e($item->state->state_name); ?></a>
                                                    </address>
                                                    <?php endif; ?>
                                                    </p>
                                            </div>

                                            <div class="text-center">
                                                <a href="<?php echo e(route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ])); ?>"
                                                   class="btn btn-primary my-btn"
                                                   style="color:#fff"><?php echo e(__('frontend.contact.learn-more')); ?> ​</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="swiper-pagination our-swiper-pagination explore__items__swiper__pagination"></div>

                <div class="swiper-button-next our-swiper-controller explore__items__swiper__button-next">
                    <i class="las la-angle-right"></i>
                </div>
                <div class="swiper-button-prev our-swiper-controller explore__items__swiper__button-prev">
                    <i class="las la-angle-left"></i>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo e(route('page.popular')); ?>" class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
            </div>
        </div>
    </section>
    <!-- **************************                      ******************************  -->
    <!-- ************************** end explore-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start how-use-section   ******************************  -->
    <!-- **************************                        ******************************  -->

    <!-- **************************                      ******************************  -->
    <!-- ************************** end how-use-section   ******************************  -->
    <!-- **************************                      ******************************  -->

    <!-- ************************** start blogs   ******************************  -->
    <?php if($recent_blog->count() > 0): ?>
        <section class="blogs pt pb position-relative">
            <div class="container">
                <div class="title-container">
                    <h2 class="title-container__title"><?php echo e(__('frontend.homepage.our-blog')); ?></h2>
                </div>

                <div class="row gy-5">
                    <?php $__currentLoopData = $recent_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-xl-6" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blogs__main-item">
                                <img src="<?php echo e(asset('storage/blog/'.$blog->image)); ?>" alt="blog item"
                                     class="img-fluid blogs__main-item__main-img"/>
                                <a href="<?php echo e(route('page.blog',$blog->blog_slug)); ?>" class="blogs__main-item__title">
                                    <?php echo e($blog->title); ?>

                                </a>
                                <p class="blogs__main-item__desc">

                                    <?php echo str_limit(strip_tags($blog->content),100); ?>

                                </p>
                                <span class="blogs__main-item__time d-flex align-items-center gap-2">
                                    <!-- <i class="las la-clock icon"></i> -->
                                    <img
                                        src="<?php echo e(asset('assets/images/clock-icon.svg')); ?>"
                                        alt="clock icon" class="img-fluid"/>
                                    <span>
                                            <?php echo e($blog->created_at->format('d/m/Y h:i A')); ?>

                                    </span>
                                  </span>
                            </div>
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="d-flex justify-content-center mt-xl">
                    <a href="<?php echo e(route('page.blogs')); ?>"
                       class="btn btn-primary my-btn"><?php echo e(__('frontend.contact.more')); ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ************************** end blogs   ******************************  -->

    <!-- **************************                        ******************************  -->
    <!-- ************************** start contact-section   ******************************  -->
    <!-- **************************                        ******************************  -->
    <section class="pb pt contact position-relative overflow-hidden">
        <div class="container">
            <div class="row g-5 g-lg-0">
                <div class="col-lg-7 col-xl-6 order-last order-lg-first" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact__form h-100">
                        <form class="contact__form__inner d-flex align-items-center" method="post"
                              action="<?php echo e(route('admin.business.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="flex-fill text-center">
                                <h2 class="fw-bold dark-color contact__form__inner__title">
                                    <?php echo e(__('frontend.item.share-listing')); ?>

                                </h2>
                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label"><?php echo e(__('frontend.contact.phone')); ?></span>
                                        <input type="text" name="phone" class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label"><?php echo e(__('frontend.item.name')); ?></span>
                                        <input type="text" name="name" class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span
                                            class="my-input-container__label"><?php echo e(__('frontend.item.listing-name')); ?></span>
                                        <input type="text" name="activity_name"
                                               class="form-control my-input-container__input"/>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary my-btn contact__form__inner__submit">
                                    <?php echo e(__('frontend.item.save')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="contact__img d-flex justify-content-end align-items-center">
                        <img src="assets/images/contact.svg" alt="contact" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('frontend/js/index.js')); ?>"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key=<?php echo e($site_global_settings->setting_site_map_google_api_key); ?>&callback=initMap"></script>

    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, requestPermission);
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, requestPermission);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const geocoder = new google.maps.Geocoder();
            const latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);


            geocoder.geocode(
                {'latLng': latlng, 'language': 'ar'},
                function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            var add = results[0].formatted_address;
                            var value = add.split("،");

                            count = value.length;
                            country = value[count - 1];
                            state = value[count - 2];
                            city = value[count - 3];
                            x = "city name is: " + city;
                            saveLocation(position.coords.latitude, position.coords.longitude);
                        } else {
                            x.innerHTML = "address not found";
                        }
                    } else {
                        x.innerHTML = "Geocoder failed due to: " + status;
                    }
                }
            );
        }

        function requestPermission(error) {
            if (error.code === error.PERMISSION_DENIED) {
                console.log("Location permission denied.");
            }
        }

        function saveLocation(latitude, longitude) {
            var url = "<?php echo e(route('save-location')); ?>";
            var data = {
                latitude: latitude,
                longitude: longitude
            };

            $.ajax({
                url: url,
                type: 'GET',
                data: data,
                success: function (response) {
                    console.log("Location saved successfully.");
                    $('#locationItems').empty();
                    var prehtml = `<div
                                    class="hotels__items mb-xl"
                                    data-aos="fade-right"
                                    data-aos-duration="1000">
                                    <!-- Swiper -->
                                    <div class="swiper hotels__items__swiper">
                                    <div class="swiper-wrapper">`;

                    var posthtml = `</div>
                                    </div>
                                    <div
                                        class="swiper-pagination hotels__items__swiper__swiper-pagination our-swiper-pagination"
                                    ></div>

                                    <div
                                        class="swiper-button-next hotels__items__swiper__swiper-button-next our-swiper-controller"
                                    >
                                        <i class="las la-angle-right"></i>
                                    </div>
                                    <div
                                        class="swiper-button-prev hotels__items__swiper__swiper-button-prev our-swiper-controller"
                                    >
                                        <i class="las la-angle-left"></i>
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                            <a class="btn btn-primary my-btn" href="<?php echo e(route('page.search',['filter_sort_by'=>Item::ITEMS_SORT_BY_NEARBY_FIRST])); ?>">
                                            المزيد
                                            </a>
                                    </div>
                                    </div>`
                    var content = '';
                    response.forEach(function (data) {
                        $('#button').css('display', '');
                        var category = null;
                        if (data['category']['parent'])
                            category = data['category']['parent']['category_slug'];
                        else
                            category = data['category']['category_slug'];
                        var htmlContent = `<div class="swiper-slide hotels__items__swiper-slide">
                                            <div class="hotels__items__item">
                                                <img
                                                    src="assets/images/hotel.png"
                                                    alt="hotel"
                                                    class="img-fluid hotels__items__item__img w-100"
                                                />
                                                <div class="hotels__items__item__info">
                                                     <ul
                                                        class="hotels__items__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto"
                                                    >
                                                        <li
                                                            class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1"
                                                        >
                                                            <i class="las la-map-marker-alt icon"></i>
                                                            <span>${data['state']['state_name']}</span>
                                                        </li>
                                                        <li
                                                            class="hotels__items__item__info__sub-info__item d-flex align-items-center gap-1"
                                                        >
                                                            <i class="las la-star icon"></i>
                                                            <span>التقييم</span>
                                                        </li>
                                                    </ul>
                                                    <h5 class="dark-color fw-bold dark-color mt-base mb-base">
                                                        ${data['item_title']}
                                                    </h5>
                                                    <div class="mb-md d-flex gap-2">
                                                        <i
                                                            class="las la-map-marker-alt hotels__items__item__info__sub-info__item__icon"
                                                        ></i>

                                                        <p
                                                            class="gray-color font-size-base mb-0 hotels__items__item__info__sub-info__item__desc"
                                                        >
                                                            ${data['item_address']}
                                                        </p>
                                                    </div>
                                                    <div class="row justify-content-center">
<a class="btn btn-primary my-btn col-md-3" href="/listing/${category}/${data['category']['category_slug']}/${data['state']['state_slug']}/${data['item_slug']}"
>المزيد</a>
</div>
                                                </div>
                                            </div>
                                        </div>`;
                        content = content + htmlContent;
                    });
                    htmlContent = prehtml + content + posthtml;
                    $('#locationItems').append(htmlContent);
                    var hotelsSwiper = new Swiper(".hotels__items__swiper", {
                        // autoplay: true,
                        slidesPerView: 1,
                        spaceBetween: 25,
                        autoHeight: false, // Add this line to make the slides the same height
                        pagination: {
                            el: ".hotels__items__swiper__swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".hotels__items__swiper__swiper-button-next",
                            prevEl: ".hotels__items__swiper__swiper-button-prev",
                        },
                        breakpoints: {
                            400: {
                                slidesPerView: 1.1,
                            },
                            767: {
                                slidesPerView: 1.3,
                            },
                            991: {
                                slidesPerView: 2,
                            },
                            1200: {
                                slidesPerView: 3,
                            },
                        },
                        // Add the equalHeight property to ensure same height for all slides
                        equalHeight: true,
                    });
                },
                error: function (xhr) {
                    console.log("Error saving location: " + xhr.responseText);
                }
            });
        }
    </script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .how-use .modalDialog {
            display: none;
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }

        .how-use button {
            background: none;
            border: none;
        }

        .how-use .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
            display: block;
        }

        .how-use .modalDialog > div {
            width: 560px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            background: -webkit-linear-gradient(#fff, #999);
            background: -o-linear-gradient(#fff, #999);
        }

        .how-use .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .how-use .close:hover {
            background: #00d9ff;
        }

        h2 {
            text-align: center;
        }

        .noScroll {
            background: white;
            position: fixed;
            height: 200px; /*Whatever you want*/
            width: 100%; /*Whatever you want*/
            top: 0;
            left: 0;
            display: none;
        }

        /*Use this class when you want your content to be shown after some scroll*/
        .scrolled {
            display: flex !important;
            justify-content: center;
            align-items: end;
            z-index: 99;
        }

        .parent {
            height: 200px;
            /* something to ensure that the parent container is scrollable */
        }

    </style>

    <script>
        // window.addEventListener('scroll', function() {
        //   if( window.scrollY !== 0) {

        //       document.getElementById('searchBar').classList.add('scrolled');
        //   } else {

        //       document.getElementById('searchBar').classList.remove('scrolled');
        //   }
        // });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                autoplay: {
                    delay: 1000, // Set the delay in milliseconds (e.g., 3000ms or 3 seconds)
                    disableOnInteraction: false, // Set to false if you want autoplay to continue even when user interacts with the swiper
                },
                loop: true,
                breakpoints: {
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 4,
                    }
                }
            });


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/index.blade.php ENDPATH**/ ?>