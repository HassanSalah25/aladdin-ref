<?php if(app()->getLocale() == 'ar'): ?>
    <script src="<?php echo e(asset('frontend/vendor/bootstrap-select/i18n/defaults-ar_AR.js')); ?>"></script>
<?php elseif(app()->getLocale() == 'en'): ?>
    <script src="<?php echo e(asset('frontend/vendor/bootstrap-select/i18n/defaults-en_US.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/partials/bootstrap-select-locale.blade.php ENDPATH**/ ?>