<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(asset('backend/vendor/simplemde/dist/simplemde.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('backend/vendor/croppie/croppie.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('backend/vendor/spectrum/spectrum.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800"><?php echo e(__('advertisement.edit-ad')); ?></h1>
            <p class="mb-4"><?php echo e(__('advertisement.edit-ad-desc')); ?></p>
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

                    <span class="text-lg text-gray-800"><?php echo e(__('advertisement.pages-to-show-ads')); ?>: </span>
                    <span class="text-lg">
                        <?php if($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_LISTING_RESULTS_PAGES): ?>
                            <?php echo e(__('advertisement.ad-place-listing-results')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_LISTING_SEARCH_PAGE): ?>
                            <?php echo e(__('advertisement.ad-place-listing-search')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_BUSINESS_LISTING_PAGE): ?>
                            <?php echo e(__('advertisement.ad-place-business-listing')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_POSTS_PAGES): ?>
                            <?php echo e(__('advertisement.ad-place-blog-posts')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_TOPIC_PAGES): ?>
                            <?php echo e(__('advertisement.ad-place-blog-topic')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_BLOG_TAG_PAGES): ?>
                            <?php echo e(__('advertisement.ad-place-blog-tag')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_SINGLE_POST_PAGE): ?>
                            <?php echo e(__('advertisement.ad-place-single-post')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_CATEGORY): ?>
                            <?php echo e(__('advertisement.ad-place-category')); ?>

                        <?php elseif($advertisement->advertisement_place == \App\Models\Advertisement::AD_PLACE_STATE): ?>
                            <?php echo e(__('advertisement.ad-place-state')); ?>

                        <?php endif; ?>
                    </span>

                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-10 col-lg-6">
                    <form method="POST" action="<?php echo e(route('admin.advertisements.update', $advertisement)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <input name="advertisement_place" value="<?php echo e($advertisement->advertisement_place); ?>"
                               type="hidden" id="input_advertisement_place">

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
                                       name="advertisement_name"
                                       value="<?php echo e(old('advertisement_name') ? old('advertisement_name') : $advertisement->advertisement_name); ?>"
                                       autofocus>
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
                                     src="<?php echo e(old('image1') ? old('image1') : (!empty($advertisement->ad_image_vertical) ? \Illuminate\Support\Facades\Storage::disk('public')->url('ads/'. $advertisement->ad_image_vertical) : asset('backend/images/placeholder/full_item_feature_image.webp'))); ?>"
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
                                     src="<?php echo e(old('image2') ? old('image2') : (!empty($advertisement->ad_image_horizontal) ? \Illuminate\Support\Facades\Storage::disk('public')->url('ads/'. $advertisement->ad_image_horizontal) : asset('backend/images/placeholder/full_item_feature_image.webp'))); ?>"
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
                                        value="<?php echo e(\App\Models\Advertisement::AD_STATUS_ENABLE); ?>" <?php echo e((old('advertisement_status') ? old('advertisement_status') : $advertisement->advertisement_status) == \App\Models\Advertisement::AD_STATUS_ENABLE ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-status-enable')); ?></option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_STATUS_DISABLE); ?>" <?php echo e((old('advertisement_status') ? old('advertisement_status') : $advertisement->advertisement_status) == \App\Models\Advertisement::AD_STATUS_DISABLE ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-status-disable')); ?></option>
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
                                <select class="custom-select position-image <?php $__errorArgs = ['advertisement_position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="advertisement_position">

                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT); ?>" <?php echo e((old('advertisement_position') ? old('advertisement_position') : $advertisement->advertisement_position) == \App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT ? 'selected' : ''); ?>>
                                        <?php echo e(__('advertisement.ad-position-before-content')); ?>

                                    </option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT); ?>" <?php echo e((old('advertisement_position') ? old('advertisement_position') : $advertisement->advertisement_position) == \App\Models\Advertisement::AD_POSITION_AFTER_CONTENT ? 'selected' : ''); ?>>
                                        <?php echo e(__('advertisement.ad-position-after-content')); ?>

                                    </option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT); ?>" <?php echo e((old('advertisement_position') ? old('advertisement_position') : $advertisement->advertisement_position) == \App\Models\Advertisement::AD_POSITION_SIDEBAR_BEFORE_CONTENT ? 'selected' : ''); ?>>
                                        <?php echo e(__('advertisement.ad-position-sidebar-before-content')); ?>

                                    </option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT); ?>" <?php echo e((old('advertisement_position') ? old('advertisement_position') : $advertisement->advertisement_position) == \App\Models\Advertisement::AD_POSITION_SIDEBAR_AFTER_CONTENT ? 'selected' : ''); ?>>
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

<!--                        <div class="row form-group">

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
                                        value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_LEFT); ?>" <?php echo e((old('advertisement_alignment') ? old('advertisement_alignment') : $advertisement->advertisement_alignment) == \App\Models\Advertisement::AD_ALIGNMENT_LEFT ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-left')); ?></option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_CENTER); ?>" <?php echo e((old('advertisement_alignment') ? old('advertisement_alignment') : $advertisement->advertisement_alignment) == \App\Models\Advertisement::AD_ALIGNMENT_CENTER ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-center')); ?></option>
                                    <option
                                        value="<?php echo e(\App\Models\Advertisement::AD_ALIGNMENT_RIGHT); ?>" <?php echo e((old('advertisement_alignment') ? old('advertisement_alignment') : $advertisement->advertisement_alignment) == \App\Models\Advertisement::AD_ALIGNMENT_RIGHT ? 'selected' : ''); ?>><?php echo e(__('advertisement.ad-alignment-right')); ?></option>
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
                            <div class="col-8">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    <?php echo e(__('advertisement.update-ad')); ?>

                                </button>
                            </div>
                            <div class="col-4 text-right">
                                <a class="text-danger" href="#" data-toggle="modal" data-target="#deleteModal">
                                    <?php echo e(__('backend.shared.delete')); ?>

                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('backend.shared.delete-confirm')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e(__('advertisement.delete-confirm')); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(__('backend.shared.cancel')); ?></button>
                    <form action="<?php echo e(route('admin.advertisements.destroy', $advertisement->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('backend.shared.delete')); ?></button>
                    </form>
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
    <script src="<?php echo e(asset('backend/vendor/simplemde/dist/simplemde.min.js')); ?>"></script>

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
        });
    </script>
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
        if ($('.position-image').val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT); ?> || $('.position-image').val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT); ?>) {
            $('.horizontal-image').show();
            $('.vertical-image').hide();
            $('.vertical-image').find('#category_image').val('')
            $('.vertical-image').find('#image_preview').removeAttr('src')
            $('.vertical-image').find('#image_preview').attr('src', '<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
        } else {
            $('.horizontal-image').hide();
            $('.vertical-image').show();
            $('.horizontal-image').find('#category_image2').val('')
            $('.horizontal-image').find('#image_preview2').removeAttr('src')
            $('.horizontal-image').find('#image_preview2').attr('src', '<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
        }
        $('.position-image').change(function () {
            if ($(this).val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_BEFORE_CONTENT); ?> || $(this).val() == <?php echo e(\App\Models\Advertisement::AD_POSITION_AFTER_CONTENT); ?>) {
                $('.horizontal-image').show();
                $('.vertical-image').hide();
                $('.vertical-image').find('#category_image').val('')
                $('.vertical-image').find('#image_preview').removeAttr('src')
                $('.vertical-image').find('#image_preview').attr('src', '<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
            } else {
                $('.horizontal-image').hide();
                $('.vertical-image').show();
                $('.horizontal-image').find('#category_image2').val('')
                $('.horizontal-image').find('#image_preview2').removeAttr('src')
                $('.horizontal-image').find('#image_preview2').attr('src', '<?php echo e(asset('backend/images/placeholder/full_item_feature_image.webp')); ?>')
            }
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/backend/admin/ad/edit.blade.php ENDPATH**/ ?>