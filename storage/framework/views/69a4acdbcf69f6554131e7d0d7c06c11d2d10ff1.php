<?php $__env->startPush('styles'); ?>

    <?php if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP): ?>
        <link href="<?php echo e(asset('frontend/vendor/leaflet/leaflet.css')); ?>" rel="stylesheet"/>
    <?php endif; ?>

    <link href="<?php echo e(asset('frontend/css/category.css')); ?>" rel="stylesheet"/>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <section class="categories pt pb mt-header-height">
        <div class="container">
            <div class="d-flex gap-4 position-relative overflow-hidden">
                <!-- items  -->
                <div class="cateogires__items flex-fill">
                    <!-- start order-area  -->
                </div>
            </div>

            <p class="fw-bold primary-color mt-lg mb-xl text-center">
                البحث ب اسم المجال
            </p>
            <form action="<?php echo e(route('page.search_categories')); ?>" class="row justify-content-center my-5">
                <div class="search">
                    <input type="text" name="search_keyword"
                           class="searchTerm" placeholder="البحث ب اسم المجال؟"
                    value="<?php echo e(request('search_keyword')); ?>">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>

            <div class="registeration__categories">
                <div class="row row-cols-xl-5 g-5">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col d-flex justify-content-center" style="display:table !important">
                            <a
                                <?php if($category->parent): ?>
                                    href="<?php echo e(route('page.category',['parent_category_slug'=> $category->parent?->category_slug,'category_slug'=>$category->category_slug])); ?>"
                                <?php else: ?>
                                    href="<?php echo e(route('page.sub_categories',['category_slug'=>$category->category_slug])); ?>"
                                <?php endif; ?>
                                class="registeration__categories__item" style="display: table-cell; padding: 1.2rem;">
                                    <img

                                        <?php if($category->parent): ?>
                                            src="<?php echo e(asset('storage/category/' . $category->category_image)); ?>"
                                        <?php else: ?>
                                            src="<?php echo e(asset('storage/category/' . $category->children->first()?->category_image)); ?>"
                                        <?php endif; ?>
                                     alt="<?php echo e($category->category_name??$category->alt_image); ?>"
                                     class="img-fluid registeration__categories__img"/>
                                <?php echo e($category->category_name); ?> <span>(<?php echo e($category->children_count == 0?$category->items_count : $category->children_count); ?>)</span></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
        <div class="row">
            <div style="margin: auto;margin-top: auto;margin-top: 4rem;">
                <?php echo e($categories->appends(request()->query())->links()); ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/search_categories.blade.php ENDPATH**/ ?>