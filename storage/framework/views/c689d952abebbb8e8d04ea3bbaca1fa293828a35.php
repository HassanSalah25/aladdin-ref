<?php $__env->startSection('styles'); ?>
    <!-- searchable selector -->
    <link href="<?php echo e(asset('backend/vendor/bootstrap-select/bootstrap-select.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800"><?php echo e(__('importer_csv.import-listing-edit')); ?></h1>
            <p class="mb-4"><?php echo e(__('importer_csv.import-listing-edit-desc')); ?></p>
        </div>
        <div class="col-3 text-right">
            <a href="<?php echo e(route('admin.importer.item.data.index')); ?>" class="btn btn-info btn-icon-split">
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

            <div class="row border-left-info mb-3">
                <div class="col-12 col-md-4">
                    <?php echo e(__('importer_csv.import-listing-source')); ?>

                </div>
                <div class="col-12 col-md-8 text-right">
                    <?php if($import_item_data->import_item_data_source == \App\Models\ImportItemData::SOURCE_CSV): ?>
                        <span class="bg-info rounded pl-2 pr-2 pt-1 pb-1 text-white"><?php echo e(__('importer_csv.import-listing-source-csv')); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row border-left-info mb-2">
                <div class="col-12 col-md-4">
                    <?php echo e(__('importer_csv.import-listing-status')); ?>

                </div>
                <div class="col-12 col-md-8 text-right">

                    <?php if($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_NOT_PROCESSED): ?>
                        <span class="bg-warning rounded pl-2 pr-2 pt-1 pb-1 text-white"><?php echo e(__('importer_csv.import-listing-status-not-processed')); ?></span>
                    <?php elseif($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS): ?>
                        <span class="bg-success rounded pl-2 pr-2 pt-1 pb-1 text-white"><?php echo e(__('importer_csv.import-listing-status-success')); ?></span>
                    <?php elseif($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_ERROR): ?>
                        <span class="bg-danger rounded pl-2 pr-2 pt-1 pb-1 text-white"><?php echo e(__('importer_csv.import-listing-status-error')); ?></span>
                    <?php endif; ?>

                </div>
            </div>

            <?php if($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_ERROR && !empty($import_item_data->import_item_data_process_error_log)): ?>
                <div class="row mt-3 mb-2">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <p class="mb-0"><?php echo e(__('importer_csv.import-listing-error-log') . ": " . $import_item_data->import_item_data_process_error_log); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


            <hr>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?php echo e(route('admin.importer.item.data.update', ['import_item_data' => $import_item_data])); ?>" class="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row form-group">
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_title" class="text-black"><?php echo e(__('importer_csv.import-listing-title')); ?></label>
                                <input id="import_item_data_item_title" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_title" value="<?php echo e(old('import_item_data_item_title') ? old('import_item_data_item_title') : $import_item_data->import_item_data_item_title); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_title'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_slug" class="text-black"><?php echo e(__('importer_csv.import-listing-slug')); ?></label>
                                <input id="import_item_data_item_slug" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_slug" value="<?php echo e(old('import_item_data_item_slug') ? old('import_item_data_item_slug') : $import_item_data->import_item_data_item_slug); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_slug'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_address" class="text-black"><?php echo e(__('importer_csv.import-listing-address')); ?></label>
                                <input id="import_item_data_item_address" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_address" value="<?php echo e(old('import_item_data_item_address') ? old('import_item_data_item_address') : $import_item_data->import_item_data_item_address); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_address'];
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

                        <div class="row form-group">
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_city" class="text-black"><?php echo e(__('importer_csv.import-listing-city')); ?></label>
                                <input id="import_item_data_city" type="text" class="form-control <?php $__errorArgs = ['import_item_data_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_city" value="<?php echo e(old('import_item_data_city') ? old('import_item_data_city') : $import_item_data->import_item_data_city); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_city'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_state" class="text-black"><?php echo e(__('importer_csv.import-listing-state')); ?></label>
                                <input id="import_item_data_state" type="text" class="form-control <?php $__errorArgs = ['import_item_data_state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_state" value="<?php echo e(old('import_item_data_state') ? old('import_item_data_state') : $import_item_data->import_item_data_state); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_state'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_country" class="text-black"><?php echo e(__('importer_csv.import-listing-country')); ?></label>
                                <input id="import_item_data_country" type="text" class="form-control <?php $__errorArgs = ['import_item_data_country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_country" value="<?php echo e(old('import_item_data_country') ? old('import_item_data_country') : $import_item_data->import_item_data_country); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_country'];
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

                        <div class="row form-group">
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_lat" class="text-black"><?php echo e(__('importer_csv.import-listing-lat')); ?></label>
                                <input id="import_item_data_item_lat" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_lat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_lat" value="<?php echo e(old('import_item_data_item_lat') ? old('import_item_data_item_lat') : $import_item_data->import_item_data_item_lat); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_lat'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_lng" class="text-black"><?php echo e(__('importer_csv.import-listing-lng')); ?></label>
                                <input id="import_item_data_item_lng" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_lng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_lng" value="<?php echo e(old('import_item_data_item_lng') ? old('import_item_data_item_lng') : $import_item_data->import_item_data_item_lng); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_lng'];
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
                            <div class="col-12 col-md-4">
                                <label for="import_item_data_item_postal_code" class="text-black"><?php echo e(__('importer_csv.import-listing-postal-code')); ?></label>
                                <input id="import_item_data_item_postal_code" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_postal_code" value="<?php echo e(old('import_item_data_item_postal_code') ? old('import_item_data_item_postal_code') : $import_item_data->import_item_data_item_postal_code); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_postal_code'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <label for="import_item_data_item_description" class="text-black"><?php echo e(__('importer_csv.import-listing-description')); ?></label>
                                <textarea class="form-control <?php $__errorArgs = ['import_item_data_item_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="import_item_data_item_description" rows="5" name="import_item_data_item_description" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>><?php echo e(old('import_item_data_item_description') ? old('import_item_data_item_description') : $import_item_data->import_item_data_item_description); ?></textarea>
                                <?php $__errorArgs = ['import_item_data_item_description'];
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

                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_phone" class="text-black"><?php echo e(__('importer_csv.import-listing-phone')); ?></label>
                                <input id="import_item_data_item_phone" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_phone" value="<?php echo e(old('import_item_data_item_phone') ? old('import_item_data_item_phone') : $import_item_data->import_item_data_item_phone); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_phone'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_website" class="text-black"><?php echo e(__('importer_csv.import-listing-website')); ?></label>
                                <input id="import_item_data_item_website" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_website" value="<?php echo e(old('import_item_data_item_website') ? old('import_item_data_item_website') : $import_item_data->import_item_data_item_website); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('backend.shared.url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_website'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_social_facebook" class="text-black"><?php echo e(__('importer_csv.import-listing-facebook')); ?></label>
                                <input id="import_item_data_item_social_facebook" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_social_facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_social_facebook" value="<?php echo e(old('import_item_data_item_social_facebook') ? old('import_item_data_item_social_facebook') : $import_item_data->import_item_data_item_social_facebook); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('backend.shared.url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_social_facebook'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_social_twitter" class="text-black"><?php echo e(__('importer_csv.import-listing-twitter')); ?></label>
                                <input id="import_item_data_item_social_twitter" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_social_twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_social_twitter" value="<?php echo e(old('import_item_data_item_social_twitter') ? old('import_item_data_item_social_twitter') : $import_item_data->import_item_data_item_social_twitter); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('backend.shared.url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_social_twitter'];
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

                        <div class="row form-group">
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_social_linkedin" class="text-black"><?php echo e(__('importer_csv.import-listing-linkedin')); ?></label>
                                <input id="import_item_data_item_social_linkedin" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_social_linkedin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_social_linkedin" value="<?php echo e(old('import_item_data_item_social_linkedin') ? old('import_item_data_item_social_linkedin') : $import_item_data->import_item_data_item_social_linkedin); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('backend.shared.url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_social_linkedin'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_social_instagram" class="text-black"><?php echo e(__('item_whatsapp_instagram.item-social-instagram')); ?></label>
                                <input id="import_item_data_item_social_instagram" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_social_instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_social_instagram" value="<?php echo e(old('import_item_data_item_social_instagram') ? old('import_item_data_item_social_instagram') : $import_item_data->import_item_data_item_social_instagram); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('item_whatsapp_instagram.item-social-instagram-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_social_instagram'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_social_whatsapp" class="text-black"><?php echo e(__('item_whatsapp_instagram.item-social-whatsapp')); ?></label>
                                <input id="import_item_data_item_social_whatsapp" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_social_whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_social_whatsapp" value="<?php echo e(old('import_item_data_item_social_whatsapp') ? old('import_item_data_item_social_whatsapp') : $import_item_data->import_item_data_item_social_whatsapp); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('item_whatsapp_instagram.item-social-whatsapp-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_social_whatsapp'];
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
                            <div class="col-12 col-md-3">
                                <label for="import_item_data_item_youtube_id" class="text-black"><?php echo e(__('importer_csv.import-listing-youtube-id')); ?></label>
                                <input id="import_item_data_item_youtube_id" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_youtube_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_youtube_id" value="<?php echo e(old('import_item_data_item_youtube_id') ? old('import_item_data_item_youtube_id') : $import_item_data->import_item_data_item_youtube_id); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <?php $__errorArgs = ['import_item_data_item_youtube_id'];
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

                        <div class="row form-group">
                            <div class="col-12 col-md-6">
                                <label for="import_item_data_item_hour_time_zone" class="text-black"><?php echo e(__('item_hour.timezone')); ?></label>
                                <select id="import_item_data_item_hour_time_zone" class="selectpicker form-control <?php $__errorArgs = ['import_item_data_item_hour_time_zone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_hour_time_zone" data-live-search="true" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                    <?php $__currentLoopData = $time_zone_identifiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time_zone_identifiers_key => $time_zone_identifier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($time_zone_identifier); ?>" <?php echo e((old('import_item_data_item_hour_time_zone') ? old('import_item_data_item_hour_time_zone') : $import_item_data->import_item_data_item_hour_time_zone) == $time_zone_identifier ? 'selected' : ''); ?>><?php echo e($time_zone_identifier); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <small class="form-text text-muted">
                                    <?php echo e(__('item_hour.timezone-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_hour_time_zone'];
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

                            <div class="col-12 col-md-6">
                                <label for="import_item_data_item_hour_show_hours" class="text-black"><?php echo e(__('item_hour.show-open-hour')); ?></label>
                                <select id="import_item_data_item_hour_show_hours" class="selectpicker form-control <?php $__errorArgs = ['import_item_data_item_hour_show_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_hour_show_hours" data-live-search="true" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                    <option value="<?php echo e(\App\Models\Item::ITEM_HOUR_SHOW); ?>" <?php echo e((old('import_item_data_item_hour_show_hours') ? old('import_item_data_item_hour_show_hours') : $import_item_data->import_item_data_item_hour_show_hours) == \App\Models\Item::ITEM_HOUR_SHOW ? 'selected' : ''); ?>><?php echo e(__('item_hour.show-hour')); ?></option>
                                    <option value="<?php echo e(\App\Models\Item::ITEM_HOUR_NOT_SHOW); ?>" <?php echo e((old('import_item_data_item_hour_show_hours') ? old('import_item_data_item_hour_show_hours') : $import_item_data->import_item_data_item_hour_show_hours) == \App\Models\Item::ITEM_HOUR_NOT_SHOW ? 'selected' : ''); ?>><?php echo e(__('item_hour.not-show-hour')); ?></option>
                                </select>
                                <small class="form-text text-muted">
                                    <?php echo e(__('item_hour.show-open-hour-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_hour_show_hours'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <label for="import_item_data_item_hours" class="text-black"><?php echo e(__('import_csv_hours.import-item-data-item-hours')); ?></label>
                                <textarea class="form-control <?php $__errorArgs = ['import_item_data_item_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="import_item_data_item_hours" rows="5" name="import_item_data_item_hours" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>><?php echo e(old('import_item_data_item_hours') ? old('import_item_data_item_hours') : $import_item_data->import_item_data_item_hours); ?></textarea>
                                <small class="form-text text-muted">
                                    <?php echo e(__('import_csv_hours.import-item-data-item-hours-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_hours'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <label for="import_item_data_item_image_hour_exceptions" class="text-black"><?php echo e(__('import_csv_hours.import-item-data-item-image-hour-exceptions')); ?></label>
                                <textarea class="form-control <?php $__errorArgs = ['import_item_data_item_image_hour_exceptions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="import_item_data_item_image_hour_exceptions" rows="5" name="import_item_data_item_image_hour_exceptions" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>><?php echo e(old('import_item_data_item_image_hour_exceptions') ? old('import_item_data_item_image_hour_exceptions') : $import_item_data->import_item_data_item_image_hour_exceptions); ?></textarea>
                                <small class="form-text text-muted">
                                    <?php echo e(__('import_csv_hours.import-item-data-item-image-hour-exceptions-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_image_hour_exceptions'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <label for="import_item_data_item_image" class="text-black"><?php echo e(__('backend.item.feature-image')); ?></label>
                                <input id="import_item_data_item_image" type="text" class="form-control <?php $__errorArgs = ['import_item_data_item_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="import_item_data_item_image" value="<?php echo e(old('import_item_data_item_image') ? old('import_item_data_item_image') : $import_item_data->import_item_data_item_image); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                <small class="form-text text-muted">
                                    <?php echo e(__('sitemap_import.item-feature-image-url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_image'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <label for="import_item_data_item_image_galleries" class="text-black"><?php echo e(__('backend.item.gallery-images')); ?></label>
                                <textarea class="form-control <?php $__errorArgs = ['import_item_data_item_image_galleries'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="import_item_data_item_image_galleries" rows="5" name="import_item_data_item_image_galleries" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>><?php echo e(old('import_item_data_item_image_galleries') ? old('import_item_data_item_image_galleries') : $import_item_data->import_item_data_item_image_galleries); ?></textarea>
                                <small class="form-text text-muted">
                                    <?php echo e(__('sitemap_import.item-gallery-images-url-help')); ?>

                                </small>
                                <?php $__errorArgs = ['import_item_data_item_image_galleries'];
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

                        <div class="row form-group">
                            <div class="col-12">
                                <span class="text-lg text-gray-800"><?php echo e(__('backend.item.custom-fields')); ?></span>
                                <small class="form-text text-muted">
                                    <?php echo e(__('theme_alaadin.importer.import-custom-field-help')); ?>

                                </small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <?php $__currentLoopData = $all_import_item_feature_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_import_item_feature_data_key => $an_import_item_feature_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $custom_field_exist = \App\Models\CustomField::find($an_import_item_feature_data->import_item_feature_data_custom_field_id);
                                ?>

                                <?php if($custom_field_exist): ?>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="custom_field_<?php echo e($an_import_item_feature_data->id); ?>" class="text-black"><?php echo e($custom_field_exist->custom_field_name); ?></label>
                                        <input id="custom_field_<?php echo e($an_import_item_feature_data->id); ?>" type="text" class="form-control <?php $__errorArgs = ['custom_field_' . $an_import_item_feature_data->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="custom_field_<?php echo e($an_import_item_feature_data->id); ?>" value="<?php echo e(old('custom_field_' . $an_import_item_feature_data->id) ? old('custom_field_' . $an_import_item_feature_data->id) : $an_import_item_feature_data->import_item_feature_data_item_feature_value); ?>" <?php echo e($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS ? 'disabled' : ''); ?>>
                                        <?php $__errorArgs = ['custom_field_' . $an_import_item_feature_data->id];
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
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="row form-group justify-content-between">
                            <div class="col-8">

                                <?php if($import_item_data->import_item_data_process_status == \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS): ?>
                                    <?php if(!empty($imported_item)): ?>
                                        <a target="_blank" href="<?php echo e(route('admin.items.edit', ['item' => $imported_item])); ?>">
                                            <i class="fas fa-external-link-alt"></i>
                                            <?php echo e(__('products.edit-item-link')); ?>

                                        </a>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <button type="submit" class="btn btn-success text-white">
                                        <?php echo e(__('backend.shared.update')); ?>

                                    </button>
                                <?php endif; ?>

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

            <hr>

            <?php if($import_item_data->import_item_data_process_status != \App\Models\ImportItemData::PROCESS_STATUS_PROCESSED_SUCCESS): ?>
                <div class="row border-left-info">
                    <div class="col-12">

                        <div class="row mb-2">
                            <div class="col-12">
                                <span class="text-gray-800 text-lg"><?php echo e(__('importer_csv.choose-import-listing-preference')); ?>:</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="<?php echo e(route('admin.importer.item.data.import', ['import_item_data' => $import_item_data])); ?>" class="">
                                    <?php echo csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col-12">

                                            <span><?php echo e(__('importer_csv.choose-import-listing-categories')); ?>:</span><br>

                                            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_categories_key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-check form-check-inline">
                                                    <input name="category[]" class="form-check-input" type="checkbox" id="category_<?php echo e($category['category_id']); ?>" value="<?php echo e($category['category_id']); ?>" <?php echo e(in_array($category['category_id'], (old('category') ? old('category') : array()) ) ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="category_<?php echo e($category['category_id']); ?>"><?php echo e($category['category_name']); ?></label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__errorArgs = ['category'];
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

                                    <div class="row form-group">
                                        <div class="col-12 col-md-3">
                                            <label for="user_id" class="text-black"><?php echo e(__('importer_csv.choose-import-listing-owner')); ?></label>
                                            <select id="user_id" class="custom-select <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="user_id">

                                                <option value="<?php echo e($admin_user->id); ?>" <?php echo e(old('user_id') == $admin_user->id ? 'selected' : ''); ?>><?php echo e(__('products.myself')); ?></option>
                                                <option value="<?php echo e(\App\Models\ImportItemData::IMPORT_RANDOM_USER); ?>" <?php echo e(old('user_id') == \App\Models\ImportItemData::IMPORT_RANDOM_USER ? 'selected' : ''); ?>><?php echo e(__('theme_alaadin.importer.random-user')); ?></option>

                                                <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user->id); ?>" <?php echo e(old('user_id') == $user->id ? 'selected' : ''); ?>><?php echo e($user->name . ' (' . $user->email . ')'); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['user_id'];
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
                                        <div class="col-12 col-md-3">
                                            <label for="item_type" class="text-black"><?php echo e(__('theme_alaadin.online-listing.listing-type')); ?></label>
                                            <select id="item_type" class="custom-select <?php $__errorArgs = ['item_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item_type">

                                                <option value="<?php echo e(\App\Models\Item::ITEM_TYPE_REGULAR); ?>" <?php echo e(old('item_type') == \App\Models\Item::ITEM_TYPE_REGULAR ? 'selected' : ''); ?>><?php echo e(__('theme_alaadin.online-listing.regular-listing')); ?></option>
                                                <option value="<?php echo e(\App\Models\Item::ITEM_TYPE_ONLINE); ?>" <?php echo e(old('item_type') == \App\Models\Item::ITEM_TYPE_ONLINE ? 'selected' : ''); ?>><?php echo e(__('theme_alaadin.online-listing.online-listing')); ?></option>

                                            </select>
                                            <?php $__errorArgs = ['item_type'];
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
                                        <div class="col-12 col-md-3">
                                            <label for="item_status" class="text-black"><?php echo e(__('importer_csv.choose-import-listing-status')); ?></label>
                                            <select id="item_status" class="custom-select <?php $__errorArgs = ['item_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item_status">
                                                <option value="<?php echo e(\App\Models\Item::ITEM_SUBMITTED); ?>" <?php echo e(old('item_status') == \App\Models\Item::ITEM_SUBMITTED ? 'selected' : ''); ?>><?php echo e(__('backend.item.submitted')); ?></option>
                                                <option value="<?php echo e(\App\Models\Item::ITEM_PUBLISHED); ?>" <?php echo e(old('item_status') == \App\Models\Item::ITEM_PUBLISHED ? 'selected' : ''); ?>><?php echo e(__('backend.item.published')); ?></option>
                                                <option value="<?php echo e(\App\Models\Item::ITEM_SUSPENDED); ?>" <?php echo e(old('item_status') == \App\Models\Item::ITEM_SUSPENDED ? 'selected' : ''); ?>><?php echo e(__('backend.item.suspended')); ?></option>
                                            </select>
                                            <?php $__errorArgs = ['item_status'];
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
                                        <div class="col-12 col-md-3">
                                            <label for="item_featured" class="text-black"><?php echo e(__('importer_csv.choose-import-listing-featured')); ?></label>
                                            <select id="item_featured" class="custom-select <?php $__errorArgs = ['item_featured'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item_featured">
                                                <option value="<?php echo e(\App\Models\Item::ITEM_NOT_FEATURED); ?>" <?php echo e(old('item_featured') == \App\Models\Item::ITEM_NOT_FEATURED ? 'selected' : ''); ?>><?php echo e(__('backend.shared.no')); ?></option>
                                                <option value="<?php echo e(\App\Models\Item::ITEM_FEATURED); ?>" <?php echo e(old('item_featured') == \App\Models\Item::ITEM_FEATURED ? 'selected' : ''); ?>><?php echo e(__('backend.shared.yes')); ?></option>
                                            </select>
                                            <?php $__errorArgs = ['item_featured'];
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

                                    <div class="row form-group">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-info text-white">
                                                <?php echo e(__('importer_csv.import-listing-button')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('backend.shared.delete-confirm')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e(__('backend.shared.delete-message', ['record_type' => __('importer_csv.import-listing-information'), 'record_name' => $import_item_data->import_item_data_item_title])); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('backend.shared.cancel')); ?></button>
                    <form action="<?php echo e(route('admin.importer.item.data.destroy', ['import_item_data' => $import_item_data->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('backend.shared.delete')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- searchable selector -->
    <script src="<?php echo e(asset('backend/vendor/bootstrap-select/bootstrap-select.min.js')); ?>"></script>
    <?php echo $__env->make('backend.admin.partials.bootstrap-select-locale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/backend/admin/importer/item/edit.blade.php ENDPATH**/ ?>