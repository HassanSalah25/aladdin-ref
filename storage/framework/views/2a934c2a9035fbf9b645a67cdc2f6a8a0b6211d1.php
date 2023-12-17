<?php $__env->startPush('styles'); ?>

    <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
        <link href="<?php echo e(asset('frontend/vendor/leaflet/leaflet.css')); ?>" rel="stylesheet"/>
    <?php endif; ?>

    <link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet"/>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="mt-header-height">
        <div class="mt-header-height">
            <div class="container">
                <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('page.home')); ?>"><?php echo e(__('frontend.plan.pricing')); ?></a></li>

                    </ol>
                </nav>
            </div>
        </div>

        <div class="container m-5">
            <div class="row">
                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo e(app()->getLocale() == 'en' ? $plan->plan_name : $plan->plan_name_ar); ?></h5>
                                <?php echo app()->getLocale() == 'en' ? $plan->plan_description : $plan->plan_description_ar; ?>

                            </div>
                            <ul class="list-group list-group-flush p-0 text-center">
                                <?php $__currentLoopData = $plan->features_value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item ">
                                        <?php echo e(app()->getLocale() == 'en' ? $feature->feature->name : $feature->feature->name_ar); ?>

                                       <?php if($feature->value): ?> : <?php echo e($feature->value); ?> <?php endif; ?>
                                        <?php if($feature->feature->type  != 4 && $feature->feature->type != 3): ?>
                                        : <?php echo e($feature->feature->getType()); ?>

                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="card-body text-center">
                                <a type="button" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong"><?php echo e(__('frontend.plan.subscribe')); ?></a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong"
                             tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog w-50" role="document">
                                <form method="POST" action="<?php echo e(route('subscripe')); ?>" class="modal-content">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="plan_id" value="<?php echo e($plan->id); ?>">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(app()->getLocale() == 'en' ? $plan->plan_name : $plan->plan_name_ar); ?></h5>
                                        <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo e(__('frontend.pricing.confirm')); ?>

                                        <div class="form-group mt-5">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('frontend.contact.phone')); ?></span>
                                                <input type="text" name="phone" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('frontend.item.name')); ?></span>
                                                <input type="text" name="name" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('اسم الشركة')); ?></span>
                                                <input type="text" name="activity_name" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('رقم الشركة')); ?></span>
                                                <input type="text" name="activity_phone" class="form-control my-input-container__input" required />
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('عنوان الشركة')); ?></span>
                                                <input type="text" name="activity_address" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('ايميل الشركة')); ?></span>
                                                <input type="text" name="activity_email" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('وصف الشركة')); ?></span>
                                                <input type="text" name="activity_description" class="form-control my-input-container__input" />
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label"><?php echo e(__('النشاط')); ?></span>
                                                <input type="text" name="activity" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs--dismiss="modal"><?php echo e(__('frontend.pricing.cancel')); ?></button>
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('frontend.pricing.save')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/pricing.blade.php ENDPATH**/ ?>