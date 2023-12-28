<?php $__env->startPush('styles'); ?>

<?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
<link href="<?php echo e(asset('frontend/vendor/leaflet/leaflet.css')); ?>" rel="stylesheet" />
<?php endif; ?>

<link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="mt-header-height">
    <div class="mt-header-height">
    <div class="container">
        <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(route('page.home')); ?>"><?php echo e(__('frontend.footer.about')); ?></a></li>
         
            </ol>
        </nav>
    </div>
</div>
    
    <div class="container ">
    <?php echo $about; ?>

    </div>
    </div>
<?php $__env->stopSection(); ?>

  
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/about.blade.php ENDPATH**/ ?>