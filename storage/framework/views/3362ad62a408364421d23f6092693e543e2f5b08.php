<?php
    $get_count_rating = $item->getCountRating();
    $get_all_categories = $item->getAllCategories(\App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY, isset($parent_category_id) ? $parent_category_id : null);
    $all_categories_count = $item->allCategories()->count();
?>
<div class="categories__items__list__item  d-inline-flex">
    <div>
        <input type="hidden" class="lng" name="lng"
               value="<?php echo e($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lng : ''); ?>"/>
        <input type="hidden" class="lat" name="lat"
               value="<?php echo e($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR ? $item->item_lat : ''); ?>"/>

        <input type="hidden" class="name" name="name" value="<?php echo e($item->item_title); ?>"/>
        <input type="hidden" class="details" name="details" value="Details about restaurant 1"/>
        <input type="hidden" class="image" name="image"
               value="<?php echo e(!empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp'))); ?>"/>
    </div>
    <div>
        <?php if($item->item_image_medium): ?>
            <img
                src="<?php echo e(!empty($item->item_image_medium) ? Storage::disk('public')->url('item/' . $item->item_image_medium) : (!empty($item->item_image) ? Storage::disk('public')->url('item/' . $item->item_image) : asset('frontend/images/placeholder/full_item_feature_image_medium.webp'))); ?>"
                alt="item" class="img-fluid categories__items__list__item__img w-100"/>
        <?php endif; ?>
    </div>
    <div class="categories__items__list__item__info w-100"
    style="background: linear-gradient(89deg, #522d79, #1d0e30) !important;color: white !important;">

        <ul class="categories__items__list__item__info__sub-info list-unstyled m-0 p-0 d-flex mx-auto"
        style="background-color: #0000005e;"
        >
            <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                <i class="las la-map-marker-alt icon" style="color: #df5a35 !important;"></i>
                <a href="<?php echo e(route('page.cities', ['state_slug'=>$item->state->state_slug])); ?>"
                   style="color: white !important;"
                ><span><?php echo e($item->state->state_name); ?></span></a>
            </li>
            <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                <i class="las la-star icon" style="color: #df5a35 !important;"></i>
                <span><?php echo e($item->item_average_rating); ?></span>
            </li>

            <?php if(!empty($item->item_price)): ?>
                <li class="categories__items__list__item__info__sub-info__item d-flex align-items-center gap-1">
                    <i class="las la-coins icon"></i>
                    <span class="category">$<?php echo e(number_format($item->item_price)); ?></span>
                </li>
            <?php endif; ?>
        </ul>
        <div class="d-flex jusitfy-content-between gap-3">
            <div>
                <a href="<?php echo e(route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ])); ?>">
                    <h6 class="dark-color fw-bold dark-color mt-base mb-base" style="color: white !important;">
                        <?php echo e($item->item_title); ?>

                    </h6>
                </a>
                <div class="mb-base d-flex gap-2" style="color: white !important;">
                    <?php if($all_categories_count > \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY): ?>
                        <span
                            class="category"><?php echo e(__('categories.and') . " " . strval($all_categories_count - \App\Models\Item::ITEM_TOTAL_SHOW_CATEGORY) . " " . __('categories.more')); ?></span>
                    <?php endif; ?>
                    <br/>
                    <i class="las la-map-marker-alt categories__items__list__item__info__sub-info__item__icon" style="color: #df5a35 !important;"></i>

                    <?php if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR): ?>
                        <address>

                            <?php echo e($item->item_address_hide == \App\Models\Item::ITEM_ADDR_NOT_HIDE ? $item->item_address . ',' : ''); ?>


                            <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc"
                               style="color: #df5a35 !important;"
                               href="<?php echo e(route('page.city', ['state_slug'=>$item->state->state_slug, 'city_slug'=>$item->city->city_slug])); ?>"><?php echo e($item->city->city_name); ?></a>,
                            <a class="gray-color font-size-sm mb-0 categories__items__list__item__info__sub-info__item__desc"
                               style="color: #df5a35 !important;"
                               href="<?php echo e(route('page.cities', ['state_slug'=>$item->state->state_slug])); ?>"><?php echo e($item->state->state_name); ?></a>
                            ,<?php echo e($item->item_postal_code); ?>

                        </address>
                    <?php endif; ?>

                </div>
                <div class="mb-base d-flex gap-2">
                    <span class="fw-bold"><?php echo e(__('categories.category')); ?> : </span>
                    <a class="item_category mb-2"
                       style="color: #df5a35 !important;"
                       <?php if($item->category->parent): ?>
                           href="<?php echo e(route('page.category',['parent_category_slug'=> $item->category->parent?->category_slug,'category_slug'=>$item->category->category_slug])); ?>"
                       <?php else: ?>
                           href="<?php echo e(route('page.sub_categories',['category_slug'=>$item->category->category_slug])); ?>"
                        <?php endif; ?>
                    >
                        <?php echo e($item->category->category_name); ?>

                    </a>

                </div>
            </div>


        </div>
        <div
            class="categories__items__list__item__info__footer d-flex justify-content-start align-items-center gap-3 position-relative">

            <?php if($item->item_hour_show_hours == \App\Models\Item::ITEM_HOUR_SHOW): ?>
                <p class="mb-0 categories__items__list__item__info__footer__opens">
                    <i class="las la-clock icon" style="color: #df5a35 !important;"></i>
                    
                    <?php if($item->hasOpened()): ?>
                        <span
                            class="item-box-hour-span-opened"><?php echo e(__('item_hour.frontend-item-box-hour-opened')); ?></span>
                    <?php else: ?>
                        <span
                            class="item-box-hour-span-closed"><?php echo e(__('item_hour.frontend-item-box-hour-closed')); ?></span>
                    <?php endif; ?>
                </p>

            <?php endif; ?>
            
            <?php if($item->item_phone): ?>
                <a href="tel:<?php echo e($item->item_phone); ?>"
                   class="btn style="color: var(--primary) !important;background-color: white;btn-primary profile__details__contact-btn">
                    <i class="las la-phone"></i>
                    <span>الهاتف</span>
                </a>
            <?php endif; ?>
            <?php if(!empty($item->itemPhones)): ?>
                <?php $__currentLoopData = $item->itemPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="tel:<?php echo e($phone->phone); ?>"
                       class="btn style="color: var(--primary) !important;background-color: white;btn-primary profile__details__contact-btn">
                        <i class="las la-phone"></i>
                        <span>الهاتف <?php echo e($loop->iteration); ?></span>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
            <?php if($item->item_lat != 0 && $item->item_lng != 0): ?>
                    <a class="btn my-btn profile__details__contact-btn"
                       style="color: var(--primary) !important;background-color: white;
                   target="_blank"
                   href="<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $item->item_lat . ',' . $item->item_lng); ?>">
                    <i class="las la-map-marker"></i>
                    <span>الموقع</span>
                </a>
            <?php endif; ?>
            <?php if($item->item_website): ?>
                <a href="<?php echo e($item->item_website); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="las la-globe-europe"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_email): ?>
                <a href="mailto:<?php echo e($item->item_social_email); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fa fa-envelope"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_facebook): ?>
                <a href="<?php echo e($item->item_social_facebook); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-facebook"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_twitter): ?>
                <a href="<?php echo e($item->item_social_twitter); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_linkedin): ?>
                <a href="<?php echo e($item->item_social_linkedin); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-linkedin"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_whatsapp): ?>
                <a href="https://wa.me/+020<?php echo e($item->item_social_whatsapp); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-whatsapp"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_instagram): ?>
                <a href="<?php echo e($item->item_social_instagram); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-instagram"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_youtube): ?>
                <a href="<?php echo e($item->item_social_youtube); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-youtube"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_tiktok): ?>
                <a href="<?php echo e($item->item_social_tiktok); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-tiktok"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_pinterest): ?>
                <a href="<?php echo e($item->item_social_pinterest); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-pinterest"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_telegram): ?>
                <a href="tel:<?php echo e($item->item_social_telegram); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-telegram"></i></a>
            <?php endif; ?>
            <?php if($item->item_social_snapchat): ?>
                <a href="<?php echo e($item->item_social_snapchat); ?>"
                   class="categories__items__list__item__info__footer__contacts__item_reverse " style=""color: var(--primary) !important;background-color: white;"><i
                        class="fab fa-snapchat"></i></a>
            <?php endif; ?>


            
        </div>
    </div>
</div>
<?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/partials/reverse-free-item-inline.blade.php ENDPATH**/ ?>