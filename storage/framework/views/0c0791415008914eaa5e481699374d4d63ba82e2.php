<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(asset('backend/vendor/simplemde/dist/simplemde.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('backend/vendor/croppie/croppie.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800"><?php echo e(__('advertisement.add-ad')); ?></h1>
            <p class="mb-4"><?php echo e(__('advertisement.add-ad-desc')); ?></p>
        </div>
        <div class="col-3 text-right">
            <a href="<?php echo e(route('admin.advertisements.index')); ?>" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-backspace"></i>
                </span>
                <span class="text"><?php echo e(__('backend.shared.back')); ?></span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="row mb-2">
                        <div class="col-12">
                            <form class="form-inline" action="<?php echo e(route('admin.advertisements.create')); ?>" method="GET">
                                <div class="form-group mr-2">
                                    <select id="advertisement_place_type"
                                            class="selectpicker form-control <?php $__errorArgs = ['advertisement_place_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="advertisement_place_type" data-live-search="true" onchange="$('#ad-create-form').remove();">
                                         <option
                                            value="3" <?php echo e($advertisement_place_type == 3 ? 'selected' : ''); ?>>
                                            <?php echo e(__('theme_alaadin.theme-system-default')); ?>

                                        </option>
                                        <option
                                            value="1" <?php echo e($advertisement_place_type == 1 ? 'selected' : ''); ?>>
                                            <?php echo e(__('backend.shared.state')); ?>

                                        </option>
                                        <option
                                            value="2" <?php echo e($advertisement_place_type == 2 ? 'selected' : ''); ?>>
                                            <?php echo e(__('listings_filter.categories')); ?>

                                        </option>


                                    </select>
                                    <?php $__errorArgs = ['ad_place'];
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
                                <div id="default" class="form-group mr-2">
                                    <select id="advertisement_place"
                                            class="selectpicker form-control <?php $__errorArgs = ['advertisement_place'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="advertisement_place" data-live-search="true" onchange="$('#ad-create-form').remove();">
                                        <option value=""><?php echo e(__('advertisement.select-ad-place')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_PLACE_HOME_PAGES); ?>"
                                            <?php echo e($advertisement_place == \App\Models\Advertisement::AD_PLACE_HOME_PAGES ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-place-home-page')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_PLACE_LISTING_SEARCH_PAGE); ?>"
                                            <?php echo e($advertisement_place == \App\Models\Advertisement::AD_PLACE_LISTING_SEARCH_PAGE ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-place-listing-search')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_PLACE_LISTING_POPULAR_PAGE); ?>"
                                            <?php echo e($advertisement_place == \App\Models\Advertisement::AD_PLACE_LISTING_POPULAR_PAGE ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-place-listing-popular')); ?>

                                        </option>
                                    </select>
                                    <?php $__errorArgs = ['ad_place'];
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
                                <div id="states" class="form-group mr-2">
                                    <select id="advertisement_place_states"
                                                class="selectpicker form-control <?php $__errorArgs = ['advertisement_place_states'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="advertisement_place_states" data-live-search="true" onchange="$('#ad-create-form').remove();">
                                        <option value=""><?php echo e(__('advertisement.select-ad-place')); ?></option>
                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($state->id); ?>" <?php echo e($advertisement_place_states == $state->id ? 'selected' : ''); ?>>
                                                <?php echo e($state->state_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <?php $__errorArgs = ['ad_place'];
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
                                <div id="categories" class="form-group mr-2">
                                    <select id="advertisement_place_categories"
                                            class="selectpicker form-control <?php $__errorArgs = ['advertisement_place_categories'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="advertisement_place_categories" data-live-search="true" onchange="$('#ad-create-form').remove();">
                                        <option value=""><?php echo e(__('advertisement.select-ad-place')); ?></option>

                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($category->id); ?>" <?php echo e($advertisement_place_categories == $category->id ? 'selected' : ''); ?>>
                                                <?php echo e($category->category_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <?php $__errorArgs = ['ad_place'];
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
                                <button type="submit"
                                        class="btn btn-primary mr-2"><?php echo e(__('advertisement.load-form')); ?></button>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <a class="btn btn-sm btn-outline-info rounded text-info" id="create-ad-page-help">
                                <i class="fas fa-question-circle"></i>
                                <?php echo e(__('advertisement.create-ad-page-help')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-10 col-lg-6">
                    <?php if($advertisement_place > 0 || $advertisement_place_states > 0 || $advertisement_place_categories > 0): ?>
                        <form id="ad-create-form" method="POST" action="<?php echo e(route('admin.advertisements.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <input name="advertisement_place" value="<?php echo e($advertisement_place); ?>" type="hidden"
                                   id="input_advertisement_place">

                            <input name="advertisement_place_states" value="<?php echo e($advertisement_place_states); ?>" type="hidden"
                                   id="input_advertisement_place_states">
                            <input name="advertisement_place_categories" value="<?php echo e($advertisement_place_categories); ?>" type="hidden"
                                   id="input_advertisement_place_categories">

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="advertisement_name"
                                           class="text-black"><?php echo e(__('advertisement.ad-name')); ?></label>
                                    <input id="advertisement_name" type="text"
                                           class="form-control <?php $__errorArgs = ['advertisement_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           name="advertisement_name" value="<?php echo e(old('advertisement_name')); ?>" autofocus>
                                    <?php $__errorArgs = ['advertisement_name'];
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

                            <div class="row my-3 vertical-image" style="display:none">
                                <div class="col-md-6">
                                    <button id="upload_image" type="button" class="btn btn-primary btn-sm mb-2">
                                        <i class="fa-solid fa-file-image"></i>
                                        <?php echo e(__('backend.item.select-image')); ?>

                                    </button>
                                    <a class="btn btn-danger btn-sm text-white" id="delete_category_image_button">
                                        <i class="fas fa-trash-alt"></i>
                                        <?php echo e(__('category_image_option.form-category-image-delete')); ?>

                                    </a>
                                    <input id="category_image" type="hidden" name="image1" value="<?php echo e(old('image1')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <img id="image_preview"
                                         src="<?php echo e(old('image1') ? old('image1') : (!empty($all_page_about_settings->slider_image_1) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_1) : asset('backend/images/placeholder/full_item_feature_image.webp'))); ?>"
                                         class="img-responsive">
                                </div>
                            </div>

                            <div class="row mt-3 horizontal-image">
                                <div class="col-md-6">
                                    <button id="upload_image2" type="button" class="btn btn-primary btn-sm mb-2">
                                        <i class="fa-solid fa-file-image"></i>
                                        <?php echo e(__('backend.item.select-image')); ?>

                                    </button>
                                    <a class="btn btn-danger btn-sm text-white" id="delete_category_image_button2">
                                        <i class="fas fa-trash-alt"></i>
                                        <?php echo e(__('category_image_option.form-category-image-delete')); ?>

                                    </a>
                                    <input id="category_image2" type="hidden" name="image2" value="<?php echo e(old('image2')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <img id="image_preview2"
                                         src="<?php echo e(old('image2') ? old('image2') : (!empty($all_page_about_settings->slider_image_2) ? \Illuminate\Support\Facades\Storage::disk('public')->url('setting/'. $all_page_about_settings->slider_image_2) : asset('backend/images/placeholder/full_item_feature_image.webp'))); ?>"
                                         class="img-responsive">
                                </div>
                            </div>

                            

                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_status"><?php echo e(__('advertisement.ad-status')); ?></label>

                                    <select class="custom-select <?php $__errorArgs = ['advertisement_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="advertisement_status">
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_STATUS_ENABLE); ?>" <?php echo e(old('advertisement_status') == \App\Models\Advertisement::AD_STATUS_ENABLE ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-status-enable')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_STATUS_DISABLE); ?>" <?php echo e(old('advertisement_status') == \App\Models\Advertisement::AD_STATUS_DISABLE ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-status-disable')); ?></option>
                                    </select>
                                    <?php $__errorArgs = ['advertisement_status'];
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

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_position"><?php echo e(__('advertisement.ad-position')); ?></label>
                                    <select
                                        class="custom-select position-image <?php $__errorArgs = ['advertisement_position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="advertisement_position">

                                        <!--                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_BREADCRUMB); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_BEFORE_BREADCRUMB ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_BREADCRUMB); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_AFTER_BREADCRUMB ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?>

                                        </option>-->
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-before-content')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_AFTER_CONTENT ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-after-content')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?>

                                        </option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT); ?>" <?php echo e(old('advertisement_position') == \App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT ? 'selected' : ''); ?>>
                                            <?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?>

                                        </option>

                                    </select>
                                    <?php $__errorArgs = ['advertisement_position'];
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

<!--                            <div class="row form-group">

                                <div class="col-md-6">
                                    <label class="text-black"
                                           for="advertisement_alignment"><?php echo e(__('advertisement.ad-alignment')); ?></label>

                                    <select class="custom-select <?php $__errorArgs = ['advertisement_alignment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="advertisement_alignment">
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_LEFT); ?>" <?php echo e(old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_LEFT ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-left')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_CENTER); ?>" <?php echo e(old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_CENTER ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-center')); ?></option>
                                        <option
                                            value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_RIGHT); ?>" <?php echo e(old('advertisement_alignment') == \App\Models\Advertisement::AD_ALIGNMENT_RIGHT ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-right')); ?></option>
                                    </select>
                                    <?php $__errorArgs = ['advertisement_alignment'];
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

                            </div>-->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                        <?php echo e(__('advertisement.create-ad')); ?>

                                    </button>
                                </div>
                            </div>

                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-ad-page-help-modal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle"><?php echo e(__('advertisement.create-ad-modal-title')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-listing-results')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-listing-search')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-business-listing')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>

                                <li><?php echo e(__('advertisement.ad-position-before-gallery')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-description')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-location')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-features')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-reviews')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-comments')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-share')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-share')); ?></li>

                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-blog-posts')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-blog-topic')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-blog-tag')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="text-gray-800"><?php echo e(__('advertisement.ad-place-single-post')); ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul>
                                <li><?php echo e(__('advertisement.ad-position-before-breadcrumb')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-breadcrumb')); ?></li>

                                <li><?php echo e(__('advertisement.ad-position-before-feature-image')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-title')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-post-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-post-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-comments')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-before-share')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-after-share')); ?></li>

                                <li><?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?></li>
                                <li><?php echo e(__('advertisement.ad-position-sidebar-after-content')); ?></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('advertisement.create-ad-modal-close')); ?></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle"><?php echo e(__('category_image_option.modal-category-image-crop-title')); ?></h5>
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
                                <label class="custom-file-label"
                                       for="upload_image_input"><?php echo e(__('backend.item.choose-image')); ?></label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('backend.shared.cancel')); ?></button>
                    <button id="crop_image" type="button"
                            class="btn btn-primary"><?php echo e(__('backend.item.crop-image')); ?></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="image-crop-modal2" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle2"><?php echo e(__('category_image_option.modal-category-image-crop-title')); ?></h5>
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
                                <label class="custom-file-label"
                                       for="upload_image_input"><?php echo e(__('backend.item.choose-image')); ?></label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('backend.shared.cancel')); ?></button>
                    <button id="crop_image2" type="button"
                            class="btn btn-primary"><?php echo e(__('backend.item.crop-image')); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        $(document).ready(function () {

            "use strict";

            /**
             * Start initial ad code textarea markdown
             */
            var simplemde = new SimpleMDE({
                element: document.getElementById("advertisement_code"),
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
    <script src="<?php echo e(asset('backend/vendor/croppie/croppie.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendor/spectrum/spectrum.min.js')); ?>"></script>

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
                if (window_width >= 1296) {
                    viewport_width = 1296;
                    viewport_height = 160;
                } else {
                    viewport_width = window_width * 0.8;
                    viewport_height = (viewport_width * 160) / 1296;
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

                $('#image_preview').attr("src", "<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>");
                $('#category_image').val("");

                $('#delete_category_image_button').attr("disabled", false);
            });

            $('#delete_category_image_button2').on('click', function () {

                $('#delete_category_image_button2').attr("disabled", true);

                $('#image_preview2').attr("src", "<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>");
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
        $('.position-image').change(function (){
            if($(this).val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT); ?> || $(this).val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT); ?>){
                $('.horizontal-image').show();
                $('.vertical-image').hide();
                $('.vertical-image').find('#category_image').val('')
                $('.vertical-image').find('#image_preview').removeAttr('src')
                $('.vertical-image').find('#image_preview').attr('src','<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
            }
            else{
                $('.horizontal-image').hide();
                $('.vertical-image').show();
                $('.horizontal-image').find('#category_image2').val('')
                $('.horizontal-image').find('#image_preview2').removeAttr('src')
                $('.horizontal-image').find('#image_preview2').attr('src','<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
            }
        })
    </script>

    <script>
        $('#advertisement_place_type').change(function (){
            if ($(this).val() == 1)
            {
                $('#default').hide()
                $('#default').find('select').val(null)
                $('#states').show()
                $('#categories').hide()
                $('#categories').find('select').val(null)
            }
            if ($(this).val() == 2) {
                $('#default').hide()
                $('#default').find('select').val(null)
                $('#states').hide()
                $('#states').find('select').val(null)
                $('#categories').show()
            }
            if ($(this).val() == 3) {
                $('#default').show()
                $('#states').hide()
                $('#states').find('select').val(null)
                $('#categories').hide()
                $('#categories').find('select').val(null)
            }
        })
        $('#advertisement_place_type').each(function (){
            console.log($(this).val())
            if ($(this).val()  == 1)
            {
                $('#default').hide()
                $('#default').find('select').val(null)
                $('#states').show()
                $('#categories').hide()
                $('#categories').find('select').val(null)
            }
            if ($(this).val() == 2) {
                $('#default').hide()
                $('#default').find('select').val(null)
                $('#states').hide()
                $('#states').find('select').val(null)
                $('#categories').show()
            }
            if ($(this).val() == 3) {
                $('#default').show()
                $('#states').hide()
                $('#states').find('select').val(null)
                $('#categories').hide()
                $('#categories').find('select').val(null)
            }

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/backend/admin/ad/create.blade.php ENDPATH**/ ?>