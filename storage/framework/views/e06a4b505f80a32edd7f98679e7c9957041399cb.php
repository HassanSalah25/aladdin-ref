    

    <?php $__env->startPush('styles'); ?>

        <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
            <link href="<?php echo e(asset('frontend/vendor/leaflet/leaflet.css')); ?>" rel="stylesheet"/>
        <?php endif; ?>

        <link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet"/>
        <!-- my css  -->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/blogs.css')); ?>"/>

    <?php $__env->stopPush(); ?>

    <?php $__env->startSection('content'); ?>
        <!-- **************************            ******************************  -->
        <!-- ************************** end header ******************************  -->
        <!-- **************************            ******************************  -->

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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('page.blogs')); ?>"><?php echo e(__('frontend.footer.blogs')); ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="blogs pb">
            <div class="container row">
                <?php $__currentLoopData = $all_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="card m-3" style="width: 18rem;">
                        <img class="card-img-top mt-2" src="<?php echo e(asset('storage/blog/'.$blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($blog->title); ?></h5>
                            <p class="card-text"><?php echo str_limit(strip_tags($blog->content,120)); ?></p>
                            <a class="btn btn-primary" href="<?php echo e(route('page.blog', $blog->blog_slug)); ?>"><?php echo e(__('frontend.contact.more')); ?></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($all_blogs->links()); ?>

        </section>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('frontend/vendor/goodshare/goodshare.min.js')); ?>"></script>

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/blogs.blade.php ENDPATH**/ ?>