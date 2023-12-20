<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/category.css')); ?>"/>
    <style>

        .date {
            background: linear-gradient(#b269ff, #000000e3);
            color: white;
            padding: 0.8em;
            height: 100%;
            margin-right: -243px;
            span {
                display: block;
                text-align: center;
            }

            .day {
                font-weight: 700;
                font-size: 24px;
                text-shadow: 2px 3px 2px rgba($ black, 0.18);
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- bread crumb  -->
    <div class="mt-header-height">
        <div class="container">
            <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('page.home')); ?>">الرئيسية</a></li>
                    <?php if(explode('/',url()->previous())[3] == 'category'): ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('page.categories')); ?>"><?php echo e(__('backend.homepage.categories')); ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class=" mb-2" href="<?php echo e(route('page.category', $item->category->category_slug)); ?>">
                                <span class="category"><?php echo e($item->category->category_name); ?></span>
                            </a>
                        </li>
                    <?php elseif(explode('/',url()->previous())[3] == 'state'): ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('page.states')); ?>">
                                <?php echo e(__('frontend.search.state-or-city')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="<?php echo e(route('page.state',$item->state->state_slug)); ?>">
                                <?php echo e($item->state->state_name); ?>

                            </a>
                        </li>

                    <?php endif; ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="category"><?php echo e($item->item_title); ?></span>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <!-- **************************                       ******************************  -->
    <!-- ************************** start category-swiper ******************************  -->
    <!-- **************************                       ******************************  -->

    <section class="category-swiper" style="text-align:center">
        <div class="container">
            <div class="swiper category-swiper__inner">
                <div class="swiper-wrapper">
                    <?php if($item->galleries()->count() > 0): ?>
                        <?php
                            $item_galleries = $item->galleries()->get();
                        ?>
                        <?php $__currentLoopData = $item_galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleries_key => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="category-slide__item">
                                    <img style="height:300px"
                                        src="<?php echo e(empty($gallery->item_image_gallery_name) ? Storage::disk('public')->url('item/gallery/' . $gallery->item_image_gallery_name) : Storage::disk('public')->url('item/gallery/' . $gallery->item_image_gallery_name)); ?>"
                                        alt="category slider" class="img-fluid"/>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="swiper-slide">
                            <div class="category-slide__item">
                                <img src="<?php echo e(asset('frontend/images/placeholder/full-image-slider-placeholder.png')); ?>"
                                     alt="category slider" class="img-fluid"/>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination category-swiper__inner-pagination our-swiper-pagination"></div>
            </div>
        </div>
    </section>




    <section class="pt pb profile overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap gap-3" style="position: relative">

                <!-- details  -->
                <div class="profile__details d-flex flex-wrap flex-lg-nowrap gap-4">
                  <div >

                      <img
                          src=" <?php echo e(empty($item->item_image) ? asset('frontend/images/placeholder/full_item_feature_image.webp') : Storage::disk('public')->url('item/' . $item->item_image)); ?>"
                          alt="profile" class="img-fluid profile__details__img"/>

                  </div>
                    <div class="flex-fill">
                        <!-- head  -->
                        <div class="d-flex flex-wrap align-items-center mb-base gap-5 profile__details__head">
                            <h4 class="dark-color fw-bold m-0 profile__details__title">
                                <?php echo e($item->item_title); ?>

                                <span>
                                <i class="las la-star icon"></i>
                                <span><?php echo e(number_format($item_average_rating, 1)); ?></span>
                            </span>
                            </h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <?php if($item->item_hour_show_hours == \App\Models\Item::ITEM_HOUR_SHOW): ?>
                                    <p class="mb-0 profile__details__opens">
                                        <i class="las la-clock icon"></i>
                                        <span>يعمل من</span>
                                        <?php if($item->hasOpened()): ?>
                                            <span
                                                class="item-box-hour-span-opened"><?php echo e(__('item_hour.frontend-item-box-hour-opened')); ?></span>
                                        <?php else: ?>
                                            <span
                                                class="item-box-hour-span-closed"><?php echo e(__('item_hour.frontend-item-box-hour-closed')); ?></span>
                                        <?php endif; ?>
                                    </p>

                                <?php endif; ?>
                                
                                
                            </div>
                        </div>

                        <!-- desc  -->
                        <p class="mb-sm d-flex gap-2 profile__details__desc gray-color">
                            <i class="las la-map-marker-alt icon"></i>
                            <span>
                            <?php if($item->item_address_hide == \App\Models\Item::ITEM_ADDR_NOT_HIDE): ?>
                                    <?php echo e($item->item_address); ?>

                                <?php endif; ?>
                                <?php echo e($item->city->city_name); ?>, <?php echo e($item->state->state_name); ?> <?php echo e($item->item_postal_code); ?>

                        </span>
                        </p>

                        <!-- categories  -->
                        <p class="mb-base gray-color profile__details__desc__categories">
                            <b class="dark-color">التصنيفات: </b>
                            <?php echo e($item->category->category_name); ?>

                        </p>

                        <!-- contacts  -->
                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-4">
                            <?php if($item->item_phone): ?>
                                <a href="tel:<?php echo e($item->item_phone); ?>"
                               class="btn my-btn btn-primary profile__details__contact-btn">
                                <i class="las la-phone"></i>
                                <span>الهاتف</span>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty($item->itemPhones)): ?>
                                <?php $__currentLoopData = $item->itemPhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="tel:<?php echo e($phone->phone); ?>"
                                       class="btn my-btn btn-primary profile__details__contact-btn">
                                        <i class="las la-phone"></i>
                                        <span>الهاتف <?php echo e($loop->iteration); ?></span>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                            <a class="btn my-btn btn-primary profile__details__contact-btn"
                               data-bs-toggle="modal" data-bs-target="#mapModal">
                                <i class="las la-map-marker"></i>
                                <span>الموقع</span>
                            </a>
                            <?php if($item->item_social_whatsapp): ?>
                                <a target="_blank" href="https://wa.me/+020<?php echo e($item->item_social_whatsapp); ?>"
                                   class="btn my-btn btn-primary btn-p profile__details__contact-btn">
                                    <i class="lab la-whatsapp"></i>
                                    <span>واتساب</span>
                                </a>
                            <?php endif; ?>

                            <?php if($item->item_website): ?>
                                <a href="<?php echo e($item->item_website); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="las la-globe-europe"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_facebook): ?>
                                <a href="<?php echo e($item->item_social_facebook); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_instagram): ?>
                                <a href="<?php echo e($item->item_social_instagram); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_youtube): ?>
                                <a href="<?php echo e($item->item_social_youtube); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_twitter): ?>
                                <a href="<?php echo e($item->item_social_twitter); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_linkedin): ?>
                                <a href="<?php echo e($item->item_social_linkedin); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-linkedin"></i></a>
                            <?php endif; ?>
                           
                            <?php if($item->item_social_tiktok): ?>
                                <a href="<?php echo e($item->item_social_tiktok); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-tiktok"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_pinterest): ?>
                                <a href="<?php echo e($item->item_social_pinterest); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-pinterest"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_telegram): ?>
                                <a href="tel:<?php echo e($item->item_social_telegram); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-telegram"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_youtube): ?>
                                <a href="<?php echo e($item->item_social_youtube); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if($item->item_social_snapchat): ?>
                                <a href="<?php echo e($item->item_social_snapchat); ?>"
                                   class="categories__items__list__item__info__footer__contacts__item"><i
                                        class="fab fa-snapchat"></i></a>
                            <?php endif; ?>
                            <!-- <a href="#" class="btn my-btn profile__details__contact-btn">
                            <i class="las la-envelope"></i>
                            <span>راسلنا</span>
                        </a> -->
                            <button type="button"
                                    class="btn my-btn profile__details__contact-btn btn-primary share--btn position-relative"
                                    data-bs-toggle="modal" data-bs-target="#share-modal">
                                <i class="las la-share"></i>
                                <span><?php echo e(__('frontend.item.share')); ?></span>
                            </button>

                            <button type="button"
                                    class="btn my-btn profile__details__contact-btn btn-primary comment--btn"
                                    data-bs-toggle="modal" data-bs-target="#commentModal">
                                <i class="las la-star icon"></i>
                                <span>تقييم</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php if($item->user?->items->count() > 1): ?>

                    <div class="date">
                        <a href="<?php echo e(route('page.branches',$item->user)); ?>" style="color: white">
                            <span class="month"><?php echo e(__('frontend.item.branches')); ?>    </span>
                            <span class="day"><?php echo e($item->user->items->count()); ?></span>
                        </a>
                    </div>

                <?php endif; ?>
                <!-- other  -->
                <?php if(!$item->item_image): ?>
                    <div class="profile__other text-center">
                        <h5 class="fw-medium dark-color mb-sm">هل لديك صلة بهذا العمل؟</h5>
                        <!--   <p class="profile__other__desc gray-color mb-base lh">
                               لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي
                               الشكل وليس المحتوى) ويُستخدم في صناعات المطابع
                           </p> -->
                        <div class="d-flex flex-column align-items-center gap-3">
                            <button  data-bs-toggle="modal" data-bs-target="#idenityModal"
                                    class="btn btn-primary my-btn">طلب
                                اثبات ملكيه
                            </button>
                            <button  data-bs-toggle="modal" data-bs-target="#reportModal" class="btn btn-primary my-btn">
                                الإبلاغ عن بيانات غير صحيحة ​
                            </button>
                        </div>
                        <?php else: ?>
                            <div class="profile__other text-center">
                                <h5 class="fw-medium dark-color mb-sm">هل لديك صلة بهذا العمل؟</h5>
                                <!--   <p class="profile__other__desc gray-color mb-base lh">
                                       لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي
                                       الشكل وليس المحتوى) ويُستخدم في صناعات المطابع
                                   </p> -->
                                <div class="d-flex flex-column align-items-center gap-3">
                                    <button disabled data-bs-toggle="modal" data-bs-target="#idenityModal"
                                            class="btn btn-primary my-btn">طلب
                                        اثبات ملكيه
                                    </button>
                                    <button disabled data-bs-toggle="modal" data-bs-target="#reportModal"
                                            class="btn btn-primary my-btn">
                                        الإبلاغ عن بيانات غير صحيحة ​
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
            <ul class="profile__tabs nav nav-pills mb-xl mt-md container position-relative gap-5" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        <?php echo e(__('frontend.item.description')); ?> ​
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        التعليقات
                    </button>
                </li>
            </ul>
            <div class="container">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <!-- <h3 class="fw-bold primary-dark-color mb-base profile__tabs-title">
                            تصنيفات
                        </h3> -->
                        <p class="mb-base gray-color profile__details__desc__categories profile__tabs-desc">
                            <b class="dark-color"> </b> <?php echo clean(nl2br($item->item_description), array('HTML.Allowed' => 'b,strong,i,em,u,ul,ol,li,p,br')); ?>

                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <?php if($reviews->count() > 0): ?>
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row my-3">
                                    <div class="col-lg-6">
                                        <div class="profile__comment">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4 class="dark-color fw-bold profile__comment__name mb-0">
                                                    <?php echo e(\App\Models\User::find($comment->author_id)->name ?? "temp-user-" . $comment->author_id); ?>

                                                </h4>
                                                <span class="profile__comment__clock">
                                    <i class="las la-clock icon"></i>
                                    <?php echo e(Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?>

                                </span>
                                            </div>
                                            <p class="gray-color lh profile__comment__desc mt-base mb-md">
                                                <?php echo e($comment->body); ?>

                                            </p>

                                            <!-- contacts  -->
                                            <!--                                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-4">
                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn share&#45;&#45;btn position-relative">
                                                <i class="las la-share"></i>
                                                <span>شارك</span>
                                                <div class="flex flex-column gap-2 share&#45;&#45;items position-absolute">
                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-facebook-f"></i></a>
                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-twitter"></i></a>

                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-instagram"></i></a>

                                                    <a href="#" class="share&#45;&#45;items&#45;&#45;item"><i
                                                            class="lab la-whatsapp"></i></a>
                                                </div>
                                            </button>
&lt;!&ndash;                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn thumb&#45;&#45;btn">
                                                <i class="las la-thumbs-up icon"></i>
                                                <img src="<?php echo e(asset('assets/images/thumb-icon.svg')); ?>" alt="thumb"
                                                     class="img-fluid d-none"/>
                                                <span>اعجبنى</span>
                                            </button>&ndash;&gt;
&lt;!&ndash;                                            <button type="button"
                                                    class="btn my-btn profile__details__contact-btn comment&#45;&#45;btn"
                                                    data-bs-toggle="modal" data-bs-target="#commentModal">
                                                <i class="las la-comment-alt icon"></i>
                                                <span>تعليق</span>
                                            </button>&ndash;&gt;
                                        </div>-->
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">رأيك يهمنا</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST"
                                      action="<?php echo e(route('items.reviews.pages.store', ['item_slug' => $item->item_slug])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12">
                                        <div class="form-row mb-3">
                                            <label for="rating"
                                                   class="text-black"><?php echo e(__('review.backend.overall-rating')); ?></label><br>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="">
                                                <div class="">
                                                    <div class="rating">
                                                        <input type="radio"
                                                               value="<?php echo e(\App\Models\Item::ITEM_REVIEW_RATING_FIVE); ?>"
                                                               name="rating" id="rating-5">
                                                        <label for="rating-5"></label>
                                                        <input type="radio"
                                                               value="<?php echo e(\App\Models\Item::ITEM_REVIEW_RATING_FOUR); ?>"
                                                               name="rating" id="rating-4">
                                                        <label for="rating-4"></label>
                                                        <input type="radio"
                                                               value="<?php echo e(\App\Models\Item::ITEM_REVIEW_RATING_THREE); ?>"
                                                               name="rating" id="rating-3">
                                                        <label for="rating-3"></label>
                                                        <input type="radio"
                                                               value="<?php echo e(\App\Models\Item::ITEM_REVIEW_RATING_TWO); ?>"
                                                               name="rating" id="rating-2">
                                                        <label for="rating-2"></label>
                                                        <input type="radio"
                                                               value="<?php echo e(\App\Models\Item::ITEM_REVIEW_RATING_ONE); ?>"
                                                               name="rating" id="rating-1">
                                                        <label for="rating-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $__errorArgs = ['rating'];
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

                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="commentTextarea">
                                            <span
                                                class="my-input-container__label"><?php echo e(__('review.backend.tell-experience')); ?></span>
                                            <textarea id="commentTextarea" name="comment_form"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="idenityModal" tabindex="-1" aria-labelledby="idenityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">اترك تعليقك</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('comments.proof_ownership')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
                                    <div class="form-group">
                                        <label for="reporterusername">
                                            <span class="">الأسم</span>
                                        </label>
                                        <input id="reporterusername" name="reporterusername" type="text"
                                               class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="reporterphone">
                                            <span class="">رقم الهاتف</span>
                                        </label>
                                        <input id="reporterphone" type="number" name="reporterphone"
                                               class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="reporttext">
                                            <span class="my-input-container__label">التعليق</span>
                                            <textarea id="reporttext" name="reporttext"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this modal code where you want to display the map -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Location Map</h5>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the map here -->
                    <div id="mapid-box"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="modal-content">
                            <div class="modal-header d-flex align-items-center justify-content-between">
                                <h3 class="my-input-container__label__title">اترك تعليقك</h3>
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('comments.report_incorrect')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
                                    <div class="form-group">
                                        <label class="" for="reporterusername">
                                            <span class="">الاسم</span>
                                        </label>
                                        <input id="reporterusername" type="text" name="reporterusername"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="reporterphone">
                                            <span class="">رقم الهاتف</span>
                                        </label>
                                        <input id="reporterphone" type="number" name="reporterphone"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="my-input-container comment-field" for="reporttext">
                                            <span class="my-input-container__label">التعليق</span>
                                            <textarea id="reporttext" name="reporttext"
                                                      class="form-control my-input-container__input"></textarea>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary my-btn">
                                            ارسال
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - share -->
    <div class="modal fade" id="share-modal" tabindex="-1" role="dialog" aria-labelledby="share-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('frontend.item.share-listing')); ?></h5>
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            <p><?php echo e(__('frontend.item.share-listing-social-media')); ?></p>

                            <!-- Create link with share to Facebook -->
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-facebook" href=""
                               data-social="facebook">
                                <i class="fab fa-facebook-f"></i>
                                <?php echo e(__('social_share.facebook')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-twitter" href=""
                               data-social="twitter">
                                <i class="fab fa-twitter"></i>
                                <?php echo e(__('social_share.twitter')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-linkedin" href=""
                               data-social="linkedin">
                                <i class="fab fa-linkedin-in"></i>
                                <?php echo e(__('social_share.linkedin')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-blogger" href=""
                               data-social="blogger">
                                <i class="fab fa-blogger-b"></i>
                                <?php echo e(__('social_share.blogger')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-pinterest" href=""
                               data-social="pinterest">
                                <i class="fab fa-pinterest-p"></i>
                                <?php echo e(__('social_share.pinterest')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-evernote" href=""
                               data-social="evernote">
                                <i class="fab fa-evernote"></i>
                                <?php echo e(__('social_share.evernote')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-reddit" href=""
                               data-social="reddit">
                                <i class="fab fa-reddit-alien"></i>
                                <?php echo e(__('social_share.reddit')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-buffer" href=""
                               data-social="buffer">
                                <i class="fab fa-buffer"></i>
                                <?php echo e(__('social_share.buffer')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-wordpress" href=""
                               data-social="wordpress">
                                <i class="fab fa-wordpress-simple"></i>
                                <?php echo e(__('social_share.wordpress')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-weibo" href=""
                               data-social="weibo">
                                <i class="fab fa-weibo"></i>
                                <?php echo e(__('social_share.weibo')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-skype" href=""
                               data-social="skype">
                                <i class="fab fa-skype"></i>
                                <?php echo e(__('social_share.skype')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-telegram" href=""
                               data-social="telegram">
                                <i class="fab fa-telegram-plane"></i>
                                <?php echo e(__('social_share.telegram')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-viber" href=""
                               data-social="viber">
                                <i class="fab fa-viber"></i>
                                <?php echo e(__('social_share.viber')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-whatsapp" href=""
                               data-social="whatsapp">
                                <i class="fab fa-whatsapp"></i>
                                <?php echo e(__('social_share.whatsapp')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-wechat" href=""
                               data-social="wechat">
                                <i class="fab fa-weixin"></i>
                                <?php echo e(__('social_share.wechat')); ?>

                            </a>
                            <a class="btn btn-primary text-white btn-sm rounded mb-2 btn-line" href=""
                               data-social="line">
                                <i class="fab fa-line"></i>
                                <?php echo e(__('social_share.line')); ?>

                            </a>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal"
                            aria-label="Close"><?php echo e(__('backend.shared.cancel')); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('frontend/vendor/goodshare/goodshare.min.js')); ?>"></script>
    <!-- Modify the JavaScript to use Google Maps -->
    <script>
        function initMap() {
            var window_height = $(window).height();

            $('#mapid-box').css('height', window_height + 'px');

            var locations = [];

            <?php if($item->item_type == \App\Models\Item::ITEM_TYPE_REGULAR): ?>

            var popup_item_title = '<?php echo e($item->item_title); ?>';

            <?php if($item->item_address_hide): ?>
            var popup_item_address = '<?php echo e($item->city->city_name . ', ' . $item->state->state_name . ' ' . $item->item_postal_code); ?>';
            <?php else: ?>
            var popup_item_address = '<?php echo e($item->item_address . ', ' . $item->city->city_name . ', ' . $item->state->state_name . ' ' . $item->item_postal_code); ?>';
            <?php endif; ?>
            var popup_item_get_direction = '<a target="_blank" href="' + '<?php echo e('https://www.google.com/maps/dir/?api=1&destination=' . $item->item_lat . ',' . $item->item_lng); ?>' + '"><i class="fas fa-directions"></i> ' + '<?php echo e(__('google_map.get-directions')); ?>' + '</a>';

            <?php if($item->getCountRating() > 0): ?>
            var popup_item_rating = '<?php echo e($item->item_average_rating); ?>' + '/5';
            var popup_item_reviews = ' - <?php echo e($item->getCountRating()); ?>' + ' ' + '<?php echo e(__('category_image_option.map.review')); ?>';
            <?php else: ?>
            var popup_item_rating = '';
            var popup_item_reviews = '';
            <?php endif; ?>

            var popup_item_feature_image_link = '<img src="' + '<?php echo e(!empty($item->item_image_small) ? \Illuminate\Support\Facades\Storage::disk('public')->url('item/' . $item->item_image_small) : asset('frontend/images/placeholder/full_item_feature_image_small.webp')); ?>' + '">';
            var popup_item_link = '<a href="' + '<?php echo e(route('page.item', [
                        'category_slug' => $item->category->parent?->category_slug ?? $item->category->category_slug,
                        'sub_category_slug' => $item->category->category_slug,
                        'state_slug' => $item->state->state_slug,
                        'item_slug' => $item->item_slug
                    ])); ?>' + '" target="_blank">' + popup_item_title + '</a>';

            locations.push(["<div class='google_map_scrollFix'>" + popup_item_feature_image_link + "<br><br>" + popup_item_link + "<br>" + popup_item_rating + popup_item_reviews + "<br>" + popup_item_address + '<br>' + popup_item_get_direction + "</div>", <?php echo e($item->item_lat); ?>, <?php echo e($item->item_lng); ?>]);

            <?php endif; ?>


            var infowindow = null;
            var infowindow_hover = null;

            var map = new google.maps.Map(document.getElementById('mapid-box'), {
                zoom: 12,
                //center: new google.maps.LatLng(-33.92, 151.25),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            //create empty LatLngBounds object
            var bounds = new google.maps.LatLngBounds();
            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            console.log(locations)
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: '<?php echo e(Storage::disk('public')->url('setting/'. $site_global_settings->setting_site_favicon)); ?>'
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
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js??v=quarterly&key=<?php echo e($site_global_settings->setting_site_map_google_api_key); ?>&callback=initMap"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/item.blade.php ENDPATH**/ ?>