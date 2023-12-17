<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"
      dir="<?php echo e(str_replace('_', '-', app()->getLocale()) == 'ar' ? 'rtl' : 'ltr'); ?>">


<head>
    
    <?php echo $__env->make('frontend.partials.tracking', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($site_global_settings->setting_site_header_enabled == \App\Models\Setting::SITE_HEADER_ENABLED): ?>
        <?php echo $site_global_settings->setting_site_header; ?>

    <?php endif; ?>
    <?php echo SEO::generate(); ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if($site_global_settings->setting_site_favicon): ?>
        <link rel="icon" type="icon"
              href="<?php echo e(Storage::disk('public')->url('setting/'. $site_global_settings->setting_site_favicon)); ?>"
              sizes="96x96"/>
    <?php endif; ?>

    <!-- font -> icons  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Noto+Sans+Arabic:wght@400;500;700&display=swap"
        rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <link rel="preload" onload="this.rel='stylesheet'"
          href="<?php echo e(asset('frontend/vendor/fontawesome-free/css/all.min.css')); ?>" as="style">
    <link href="<?php echo e(asset('frontend/js/select2/select2.min.css')); ?>" rel="stylesheet"/>


    <!-- animation css  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    <!-- map -> css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/leaflet.css')); ?>"/>

    <!-- swiper  CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php echo $__env->yieldPushContent('preload-bootstrap'); ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- my css  -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>"/>
    <?php echo $__env->yieldPushContent('styles'); ?>

</head>

<body>

<?php if($site_global_settings->setting_site_maintenance_mode == \App\Models\Setting::SITE_MAINTENANCE_MODE_ON): ?>
    <div id="maintenance-mode-box">
        <div class="row mb-1">
            <div class="col-12 pl-0">
                <a id="maintenance-mode-close" class="btn btn-warning text-white rounded" data-toggle="collapse"
                   href="#maintenance-mode-content" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-wrench"></i>
                </a>
            </div>
        </div>
        <div class="row collapse" id="maintenance-mode-content">
            <div class="col-12 pt-3 pb-3 rounded bg-warning" id="maintenance-mode-content-box">
                <p class="text-white">
                    <strong>
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo e(__('maintenance_mode.maintenance-mode-warning-title')); ?>

                    </strong>
                </p>
                <p class="text-white">
                    <?php echo e(__('maintenance_mode.maintenance-mode-warning')); ?>

                </p>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="site-wrap">
    
    <?php echo $__env->make('frontend.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<!-- aos js  -->
<script src="<?php echo e(asset('frontend/js/aos.js')); ?>"></script>

<!-- swiper JS  -->
<script src="<?php echo e(asset('frontend/js/swiper-bundle.min.js')); ?>"></script>

<!-- bootstrap JS -->
<script src="<?php echo e(asset('frontend/js/jquery-3.5.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"
        crossorigin="anonymous"></script>

<!-- my js  -->
<script src="<?php echo e(asset('frontend/js/global.js')); ?>" type="module"></script>
<script src="<?php echo e(asset('frontend/js/categories.js')); ?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
</script>

<script src="<?php echo e(asset('frontend/js/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/select2.js')); ?>"></script>

<script>
    $(document).ready(function () {
        // Get the current page number from the URL
        var url = window.location.href;
        var pageNumber = url.substring(url.lastIndexOf('=') + 1);
        // Loop through each page item and check if the page number matches


        $('.page-item').each(function () {
            var pageLink = $(this).find('.page-link');
            var linkNumber = pageLink.text();

            if (linkNumber == 1)
                $(".disabled").css('display', 'none');
                <?php if(isset($total)): ?>
            else if (linkNumber == <?php echo e($total); ?>)
                $(".disabled").css('display', 'none');
            <?php endif; ?>
            // Compare the page number and add the active class if they match
            if (pageNumber === linkNumber) {

                $(this).addClass('active');
            }

            // $(window).on('load', function() {
            //     var maxWidth = 570;
            //     var windowWidth = $(window).width();
            //     var targetWidth = windowWidth >= maxWidth ? '8%' : '25%';
            //     $('.page-item').css('width', targetWidth);
            //     $('.page-item').css('height', '0%');
            //     $('.page-link').css('width', '100%');
            // });

            // $(".page-item").each(function(){
            //     console.log($(this).text().toString().length)
            //     if ($(this).text().toString().length === 4) {
            //         $(this).css('margin-right', '3%');
            //         $(this).css('margin-left', '3%');
            //         $(this).find('*').css('padding-left', '100%');
            //         $(this).find('*').css('padding-right', '100%');
            //     } else {
            //
            //     }
            // })


            // $('.page-link').each(function() {
            //     if($(this).text()=='...')
            //         $(this).parent().css('display','')
            //     // Perform additional actions here if needed
            // });
        });
    });

    $(document).ready(function () {
        // Get the current page number from the URL
        // var url = window.location.href;
        // var url = new URL(window.location.href);
        // var pageNumber = url.searchParams.get('page');
        // var char = url.searchParams.get('char');
        // // Loop through each page item and check if the page number matches
        // $('.pagination').addClass('row justify-content-center')
        // $('.page-item').each(function() {
        //     $(this).addClass('col-2')
        //     var pageLink = $(this).find('.page-link');
        //     var linkNumber = pageLink.text();
        //
        //     // Compare the page number and add the active class if they match
        //     if (pageNumber === linkNumber) {
        //         $(this).addClass('active');
        //     }
        // });
        //     var foundLink = $('a.char-item:contains(' + char  +')');
        //     foundLink.addClass('active');
    });

</script>
<script>
    $('.select2-search__field').on('input', function () {

        const query = $(this).val();
        $.ajax({
            url: '<?php echo e(route('getData')); ?>',
            method: 'GET',
            data: {query: query},
            success: function (data) {
                const selectElement = $('#selectElement');
                selectElement.empty();

                data.forEach(function (item) {
                    selectElement.append($('<option>', {
                        value: item.value,
                        text: item.text,
                    }));
                });
            }
        });

    });
</script>
<script>
    $(document).ready(function () {
        let nav = $('nav.header__navbar');
        let searchDiv = $('#all-div-search-id');
        let lastScrollTop = 0;

        $(window).scroll(function () {
            let scrollTop = $(window).scrollTop();
            if (scrollTop > lastScrollTop) {
                // Scrolling down
                nav.addClass('d-none').removeClass('d-xl-flex');
                searchDiv.removeClass('d-none').addClass('d-xl-flex');
            } else {
                // Scrolling up
                nav.removeClass('d-none').addClass('d-xl-flex');
                searchDiv.addClass('d-none').removeClass('d-xl-flex');
            }
            lastScrollTop = scrollTop;
        });
    });
</script>


<script>
    <?php if(request('search_category')): ?>
    $.ajax({
        "url": "<?php echo e(route('getSubCategories')); ?>",
        'data': {category_id: <?php echo e(request('search_category')); ?>},
        "dataType": "json",
        "success": function (data) {

            $('.search_category_2').empty()
            var option = $('<option>', {
                text: 'الكل',
            });

            $('.search_category_2').append(option)
            data.data.forEach(function (e) {
                console.log(e)
                var option = $('<option>', {
                    value: e.id,
                    text: e.category_name,
                    selected: e.id == <?php echo e(request('search_category_2')); ?>

                });
                $('.search_category_2').append(option)
            })
        }
    })
    <?php endif; ?>
    $('.search_category').change(function () {
        var current = $('.search_category_2')
        $.ajax({
            "url": "<?php echo e(route('getSubCategories')); ?>",
            'data': {category_id: $(this).val()},
            "dataType": "json",
            "success": function (data) {

                $('.search_category_2').empty()
                var option = $('<option>', {
                    value: null,
                    text: 'الكل',
                });
                if(current.val()  != '')
                {
                    $('.search_category_2').append(option)
                    data.data.forEach(function (e) {
                        console.log(e)
                        var option = $('<option>', {
                            value: e.id,
                            text: e.category_name,
                        });
                        $('.search_category_2').append(option)
                    })
                }
                else{
                    $('.search_category_2').append(option)
                }
            }
        })
    })
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    <?php if($errors->any()): ?>
    toastr.error('<?php echo app('translator')->get('messages.have_some_errors'); ?>')
    <?php endif; ?>

    <?php if(\Session::has('failed')): ?>
    toastr.error('<?php echo e(\Session::get('failed')); ?>')
    <?php endif; ?>

    <?php if(\Session::has('success')): ?>
    toastr.success('<?php echo e(\Session::get('success')); ?>')
    document.querySelector(".popup-container").style.display = "none";
    <?php endif; ?>
</script>
</body>

</html>
<?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>