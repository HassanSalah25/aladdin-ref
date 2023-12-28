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
                    <!-- <div class="categories__orders d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                          <div
                            class="d-flex flex-column flex-lg-row align-items-lg-center gap-4"
                          >
                            <div
                              class="d-flex gap-3 align-items-center categories__orders__item"
                            >
                              <label for="selectOrderBy" class="white-space-nowrap">
                                <i class="las la-filter"></i>
                                <span> ترتيب حسب: </span>
                              </label>
                              <select class="form-select border-0" id="selectOrderBy">
                                <option value="all">الاقرب</option>
                                <option value="1">الابعد</option>
                                <option value="2">الاقرب</option>
                                <option value="3">الاقرب</option>
                              </select>
                            </div>
                            <div
                              class="d-flex gap-3 align-items-center categories__orders__item"
                            >
                              <label
                                for="selectNumberOfProducts"
                                class="white-space-nowrap"
                              >
                                <i class="las la-cubes"></i>
                                <span> عدد الفروع: </span>
                              </label>
                              <select
                                class="form-select border-0"
                                id="selectNumberOfProducts"
                              >
                                <option value="all">12</option>
                                <option value="1">8</option>
                                <option value="2">20</option>
                                <option value="3">20</option>
                              </select>
                            </div>
                          </div>
                        </div> -->
                </div>
            </div>
            <h1 class="fw-bold primary-color mt-lg mb-xl text-center">
                <?php echo e($category->category_description); ?>

            </h1>
            <h2 class="fw-bold primary-color mt-lg mb-xl text-center">
                البحث ب اسم المجال
            </h2>
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

            <div class="categories__letters d-flex align-items-center justify-content-center flex-wrap gap-3 mb-md">
                <a href="<?php echo e(route('page.sub_categories',['category_slug'=>$category->category_slug])); ?>">الكل</a>
                <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a data-query="<?php echo e($v); ?>"
                       href="<?php echo e(route('page.sub_categories',['search_keyword'=>request('search_keyword'),'category_slug'=>$category->category_slug,'char'=>$v])); ?>"><?php echo e($v); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="registeration__categories">
                <div class="row row-cols-xl-5 g-5">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col d-flex justify-content-center" style="display:table !important">
                            <a

                                href="<?php echo e(route('page.category',['parent_category_slug'=> $category->parent->category_slug,'category_slug'=>$category->category_slug])); ?>"
                                class="registeration__categories__item" style="display: table-cell;
padding: 1.2rem;">
                                <img src="<?php echo e(asset('storage/category/' . $category->category_image)); ?>"
                                     alt="<?php echo e($category->category_name??$category->alt_image); ?>"
                                     class="img-fluid registeration__categories__img"/>
                                <?php echo e($category->category_name); ?> <span>(<?php echo e($category->items_count); ?>)</span></a>
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

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/sub_categories.blade.php ENDPATH**/ ?>