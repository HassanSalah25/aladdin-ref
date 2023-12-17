<?php $__env->startSection('content'); ?>
<section class="auth auth-login pt pb">
    <div class="container">
        <div class="auth__inner border">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="auth__inner__form">
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <h3 class="auth-title"><?php echo e(__('auth.login')); ?></h3>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label"><?php echo e(__('auth.email-addr')); ?> *</span>
                                    <input type="email" name="email" class="form-control my-input-container__input" />

                                </label>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" style="display:block" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label"><?php echo e(__('auth.password')); ?> *</span>
                                    <input type="password" class="form-control my-input-container__input" name="password" />
                                </label>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" style="display:block" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


















                            <div class="d-flex justify-content-center">
                                <button type="submit" class="auth__inner__form__submit btn btn-primary my-btn">
                                <?php echo e(__('auth.login')); ?>

                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-first order-lg-last">
                    <div class="auth__inner_img h-100 text-center d-flex flex-column align-items-center">
                        <h2 class="fw-bold auth__inner__img__title">
                        <?php echo e(__('auth.enjoy-our-experince')); ?> <span><?php echo e(__('auth.for-free')); ?></span>
                        </h2>
                        <img src="assets/images/Fingerprint.png" alt="auth" class="img-fluid mt-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPrepend('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/auth.css')); ?>" />
<?php $__env->stopPrepend(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/auth/login.blade.php ENDPATH**/ ?>