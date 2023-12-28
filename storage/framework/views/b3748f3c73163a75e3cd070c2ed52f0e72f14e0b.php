<footer class="footer overflow-hidden">
    <div class="container">
    <div class="row justify-content-center g-5 row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col-md">
        <div class="footer__logo">
            <img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo" class="img-fluid" />
        </div>
        </div>

        <div class="col-md">
            <div class="footer__links">
                <!--<a href="" class="footer__links__item">التصنيفات</a>-->
                <a href="<?php echo e(route('page.about')); ?>" class="footer__links__item"><?php echo e(__('frontend.footer.about')); ?></a>
                <a href="tel:01070570705" class="footer__links__item"><?php echo e(__('frontend.footer.contact-us')); ?></a>
                <a href="https://www.google.com/maps?q=30.0506441,31.3391753&z=17&hl=en" class="footer__links__item"><?php echo e(__('frontend.footer.address')); ?></a>
                <a href="mailto:info@aladdin-eg.com" class="footer__links__item"><?php echo e(__('backend.user.email')); ?></a>

                <!--<a href="#" class="footer__links__item">اخر الاخبار</a>-->
            </div>
        </div>

        <div class="col-md">
            <div class="footer__links">
            <a class="footer__links__item" href="<?php echo e(route('page.terms-of-service')); ?>">
                <?php echo e(__('frontend.footer.terms-of-service')); ?>

            </a>
            <a class="footer__links__item" href="<?php echo e(route('page.privacy-policy')); ?>">
                <?php echo e(__('frontend.footer.privacy-policy')); ?>

            </a>
            <a class="footer__links__item" href="<?php echo e(route('page.blogs')); ?>">
                <?php echo e(__('frontend.footer.blog')); ?>

            </a>
        </div>
        </div>
        <div class="col-md">
            <div class="col-md">

                <div class="footer__links">
                    <a  class="footer__links__item" href="<?php echo e(route('page.pricing')); ?>">
                        <?php echo e(__('frontend.header.register')); ?>

                    </a>

                </div>
            </div>
            <div class="col-md">
                <div class="footer__links">
                    <a href="<?php echo e(route('page.categories')); ?>" class="footer__links__item"><?php echo e(__('categories.categories')); ?></a>
                    <a href="<?php echo e(route('page.states')); ?>" class="footer__links__item"><?php echo e(__('frontend.search.state-or-city')); ?></a>


                </div>
        </div>
        </div>
        <div class='row'>
            <div class="auth__inner__form__auth-list d-flex align-items-center justify-content-center gap-3">
                <a href="https://www.facebook.com/profile.php?id=61550153913279 "><img alt="facebook" width="30" height="30" src="<?php echo e(asset('facebook.png')); ?>"></a>
                <a href="https://www.instagram.com/aladdin__eg/"><img alt="instagram" width="30" height="30" src="<?php echo e(asset('instagram.png')); ?>"></a>
                <a href="https://www.pinterest.com/aladdindirectory/"><img alt="pinterest" width="30" height="30" src="<?php echo e(asset('pinterest.png')); ?>"></a>
                <a href="https://www.tiktok.com/@aladdin__eg"><img alt="tik" width="30" height="30" src="<?php echo e(asset('tik-tok.png')); ?>"></a>
                <a href="https://twitter.com/Aladdin__eg"><img alt="twitter" width="30" height="30" src="<?php echo e(asset('twitter.png')); ?>"></a>
                <a href="https://www.youtube.com/channel/UCbajMblORHZOQZmE38vfWDw"><img alt="youtube " width="30" height="30" src="<?php echo e(asset('youtube (1).png')); ?>"></a>
                <a href="https://vimeo.com/user205850709"><img alt="vimeo" width="30" height="30" src="<?php echo e(asset('vimeo.png')); ?>"></a>
                <a href="https://www.behance.net/aladdineg"><img alt="behance" width="30" height="30" src="<?php echo e(asset('behance.png')); ?>"></a>
            </div>

        </div>
    </div>
    </div>

    <div class="footer__copyright">
    <div class="container text-center">
        <h6
        class="d-flex align-items-center justify-content-center text-capitalize m-0 gap-1 primary-dark-color"
        >
        <img
            src="<?php echo e(asset('assets/images/logo-dark.svg')); ?>"
            alt="logo"
            class="img-flui"
        />
        <span> copyright © all rights </span>
        </h6>
    </div>
    </div>
</footer>
<?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/partials/footer.blade.php ENDPATH**/ ?>