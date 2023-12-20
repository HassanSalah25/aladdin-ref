<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/index.css')); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- bread crumb  -->
<div class="mt-header-height">
    <div class="container">
    <nav
        class="breadcrumb-wrapper"
        style="--bs-breadcrumb-divider: '>'"
        aria-label="breadcrumb"
    >
        <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('frontend.header.home')); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">
        <?php echo e(__('frontend.search.state-or-city')); ?>

        </li>
        </ol>
    </nav>
    </div>
</div>

<section class="pt pb d-flex provinces provinces-list position-relative">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
        <?php $__currentLoopData = $all_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <a href="<?php echo e(route('page.cities', ['state_slug' => $state->state_slug])); ?>" class="provinces__items__item d-block">
                <!-- img  -->
                <img
                    src="<?php echo e(Storage::disk('public')->url('state/' . $state->state_image . '.jpg')); ?>"
                    alt=""
                    class="provinces__items__item__img"
                />
                <!-- info  -->
                <div class="provinces__items__item__info">
                    <h4 class="provinces__items__item__info__title"><?php echo e($state->state_name); ?></h4>
                    <h5 class="provinces__items__item__info__subtitle">
                    تعرف على الأماكن
                    </h5>
                </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <div class="container d-flex justify-content-center mt-lg mb-lg">
        <?php echo $all_states->appends(request()->query())->links(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('frontend/js/index.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/states.blade.php ENDPATH**/ ?>