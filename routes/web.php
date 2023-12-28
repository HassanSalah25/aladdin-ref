    <?php

    use App\Http\Controllers\Admin\PlanController;
    use App\Http\Controllers\PagesController;
    use App\Http\Controllers\Admin\PagesController as AdminDashboard;
    use App\Http\Controllers\UploadDataController;
    use App\Http\Controllers\UtilsController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Admin\UserController;
    use App\Http\Controllers\Admin\ItemController;
    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\ActivityLogController;
    use App\Http\Controllers\Admin\OrderController;
    use App\Http\Controllers\Admin\BlogController;
    use App\Http\Controllers\Admin\CustomFieldController;
    use App\Http\Controllers\Admin\ItemClaimController;
    use App\Http\Controllers\Admin\FeatureController;
    use App\Http\Controllers\Admin\ItemLeadController;
    use App\Http\Controllers\Admin\CountryController;
    use App\Http\Controllers\Admin\StateController;
    use App\Http\Controllers\Admin\CityController;
    use App\Http\Controllers\Admin\CommentController;
    use App\Http\Controllers\Admin\FaqController;
    use App\Http\Controllers\Admin\SocialMediaController;
    use App\Http\Controllers\Admin\TestimonialController;
    use App\Http\Controllers\Admin\SettingController;
    use App\Http\Controllers\Admin\LangController;
    use App\Http\Controllers\Admin\AdvertisementController;
    use App\Http\Controllers\Admin\SocialLoginController;
    use App\Http\Controllers\Admin\SubscriptionController;
    use App\Http\Controllers\SitemapController;
    use App\Http\Controllers\Admin\ImporterController;
    use App\Http\Controllers\Admin\BusinessController;
    // use App\Http\Controllers\Admin\;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    /**
     * Start utils routes
     */
    // Route::get('/utils/link', [UtilsController::class,'makeSymlinks'])->name('utils.link');
    Route::get('/utils/cache', [UtilsController::class,'makeCache'])->name('utils.cache');
    /**
     * End utils routes
     */

    /**
     * Start website routes
     */
    Route::middleware(['global_variables','maintenance'])->group(function () {



        /**
         * Auth routes
         */
        Auth::routes(['verify' => true]);

        /**
         * Social login routes
         */

        // facebook
        Route::get('/auth/facebook', [LoginController::class,'redirectToFacebook'])->name('auth.login.facebook');
        Route::get('/auth/facebook/callback', [LoginController::class,'handleFacebookCallback'])->name('auth.login.facebook.callback');

        // google
        Route::get('/auth/google', [LoginController::class,'redirectToGoogle'])->name('auth.login.google');
        Route::get('/auth/google/callback', [LoginController::class,'handleGoogleCallback'])->name('auth.login.google.callback');

        // twitter
        Route::get('/auth/twitter', [LoginController::class,'redirectToTwitter'])->name('auth.login.twitter');
        Route::get('/auth/twitter/callback', [LoginController::class,'handleTwitterCallback'])->name('auth.login.twitter.callback');

        // linkedin
        Route::get('/auth/linkedin', [LoginController::class,'redirectToLinkedIn'])->name('auth.login.linkedin');
        Route::get('/auth/linkedin/callback', [LoginController::class,'handleLinkedInCallback'])->name('auth.login.linkedin.callback');

        // github
        Route::get('/auth/github', [LoginController::class,'redirectToGitHub'])->name('auth.login.github');
        Route::get('/auth/github/callback', [LoginController::class,'handleGitHubCallback'])->name('auth.login.github.callback');

        /**
         * Public routes
         */
        Route::get('/', [PagesController::class,'index'])->name('page.home');

        Route::get('/search', [PagesController::class,'search'])->name('page.search');

        Route::get('/about', [PagesController::class,'about'])->name('page.about');
        Route::get('/contact', [PagesController::class,'contact'])->name('page.contact');
        Route::post('/contact', [PagesController::class,'doContact'])->name('page.contact.do');

        Route::get('/categories', [PagesController::class,'categories'])->name('page.categories');
        Route::get('/category/{category_slug}', [PagesController::class,'sub_categories'])->name('page.sub_categories');
        Route::get('/popular', [PagesController::class,'search'])->name('page.popular');
        Route::get('/branches/{user}', [PagesController::class,'branches'])->name('page.branches');
        Route::get('/sub_categories/{parent_category_slug}/{category_slug}', [PagesController::class,'category'])->name('page.category');
        Route::get('/search_categories', [PagesController::class,'search_categories'])->name('page.search_categories');
        Route::get('/category/{category_slug}/state/{state_slug}', [PagesController::class,'categoryByState'])->name('page.category.state');
        Route::get('/category/{category_slug}/state/{state_slug}/city/{city_slug}', [PagesController::class,'categoryByStateCity'])->name('page.category.state.city');

        Route::get('/state/{state_slug}', [PagesController::class,'state'])->name('page.state');
        Route::get('/state/{state_slug}/city/{city_slug}', [PagesController::class,'city'])->name('page.city');
        Route::get('/states', [PagesController::class,'states'])->name('page.states');
        Route::get('/cities/{state_slug}', [PagesController::class,'cities'])->name('page.cities');

        Route::get('/normalize_arabic', [UploadDataController::class,'normalize_arabic'])->name('page.normalize_arabic');
        Route::get('/normalize_arabic_category', [UploadDataController::class,'normalize_arabic_category'])->name('page.normalize_arabic_category');
        Route::get('/delete_duplicates', [UploadDataController::class,'delete_dublicates'])->name('page.delete_duplicates');
        Route::get('/update_counts', [UploadDataController::class,'update_counts'])->name('page.update_counts');
        Route::get('/update_company_id', [UploadDataController::class,'update_company_id'])->name('page.update_company_id');

    //    Route::get('/listing/{item_slug}', [PagesController::class,'item'])->name('page.item');
        Route::get('/listing/{category_slug}/{sub_category_slug}/{state_slug}/{item_slug}', [PagesController::class,'item'])->name('page.item');
        Route::get('/listing/{item_slug}/product/{product_slug}', [PagesController::class,'product'])->name('page.product');

        Route::post('/comment/proof_ownership', [CommentController::class,'proof_ownership'])->name('comments.proof_ownership');
        Route::post('/comment/report_incorrect', [CommentController::class,'report_incorrect'])->name('comments.report_incorrect');


        Route::middleware(['auth'])->group(function () {

            Route::post('/items/{item_slug}/email', [PagesController::class,'emailItem'])->name('page.item.email');
            Route::post('/items/{item_slug}/save', [PagesController::class,'saveItem'])->name('page.item.save');
            Route::post('/items/{item_slug}/unsave', [PagesController::class,'unSaveItem'])->name('page.item.unsave');
        });

        Route::post('/items/{item_slug}/lead/store', [PagesController::class,'storeItemLead'])->name('page.item.lead.store');

        Route::get('/pricing', [PagesController::class,'pricing'])->name('page.pricing');
        Route::post('/pricing/subscripe', [PagesController::class,'subscripe'])->name('subscripe');
        Route::as('emails.')->prefix('emails')->group(function(){
            Route::get('verify/{order_id}', [PagesController::class,'verifyEmail'])->name('verify');
        });
        Route::get('/terms-of-service', [PagesController::class,'termsOfService'])->name('page.terms-of-service');
        Route::get('/privacy-policy', [PagesController::class,'privacyPolicy'])->name('page.privacy-policy');

        /**
         * Blog routes
         */


        Route::get('/blogs', [PagesController::class,'blogs'])->name('page.blogs');
        Route::get('/blog/{blog_slug}', [PagesController::class,'blog'])->name('page.blog');
        Route::post('/blogs/{slug}/reviews/store', [PagesController::class, 'itemReviewsStore'])->name('blog.reviews.store');
        Route::get('/items/reviews/index', [ItemController::class,'itemReviewsIndex'])->name('items.reviews.index');
        Route::post('/items/ads/update/{item}', [ItemController::class,'itemAdUpdate'])->name('items.ad.update');


       /* Route::group(['prefix'=>'blog'], function(){

            // Get all published posts

            // Get posts for a given tag
            Route::get('/tag/{tag_slug}', [PagesController::class,'blogByTag'])->name('page.blog.tag');

            // Get posts for a given topic
            Route::get('/topic/{topic_slug}', [PagesController::class,'blogByTopic'])->name('page.blog.topic');

            // Find a single post
            Route::get('/{blog_slug}', [PagesController::class,'blogPost'])
                ->middleware('Canvas\Http\Middleware\Session')
                ->name('page.blog.show');

        });*/

        Route::get('/locale/update/{user_prefer_language}', [PagesController::class,'updateLocale'])->name('page.locale.update');
        Route::get('/country/update/{user_prefer_country_id}', [PagesController::class,'updateCountry'])->name('page.country.update');

        /**
         * Start payment gateway webhooks
         */
        // PayPal IPN (Webhook) Route
    //    Route::post('/paypal/notify', 'User\PaypalController@notify')->name('user.paypal.notify');

        // Razorpay Webhook Route
    //    Route::post('/razorpay/notify', 'User\RazorpayController@notify')->name('user.razorpay.notify');

        // Stripe webhook route
    //    Route::post('/stripe/notify', 'User\StripeController@notify')->name('user.stripe.notify');

        // Instamojo Webhook Route
        //Route::post('/instamojo/notify', 'User\InstamojoController@notify')->name('user.instamojo.notify');
        /**
         * End payment gateway webhooks
         */



        /**
         * Start site map routes
         */
        Route::get('/sitemap.xml', [SitemapController::class,'index'])->name('page.sitemap.index');
        Route::get('/sitemap/page', [SitemapController::class,'page'])->name('page.sitemap.page');
        Route::get('/sitemap/category', [SitemapController::class,'category'])->name('page.sitemap.category');
        Route::get('/sitemap/listing', [SitemapController::class,'listing'])->name('page.sitemap.listing');
        Route::get('/sitemap/listing/{page_number}', [SitemapController::class,'listingPagination'])->name('page.sitemap.listing.pagination');
        Route::get('/sitemap/post', [SitemapController::class,'post'])->name('page.sitemap.post');
        Route::get('/sitemap/tag', [SitemapController::class,'tag'])->name('page.sitemap.tag');
        Route::get('/sitemap/topic', [SitemapController::class,'topic'])->name('page.sitemap.topic');
        Route::get('/sitemap/state', [SitemapController::class,'state'])->name('page.sitemap.state');
        Route::get('/sitemap/state/{page_number}', [SitemapController::class,'statePagination'])->name('page.sitemap.state.pagination');
        Route::get('/sitemap/city', [SitemapController::class,'city'])->name('page.sitemap.city');
        Route::get('/sitemap/city/{page_number}', [SitemapController::class,'cityPagination'])->name('page.sitemap.city.pagination');
//        Route::get('/sitemap/blog/{page_number}', [SitemapController::class,'blog'])->name('page.sitemap.city.pagination');
        Route::get('/sitemap/blogs', [SitemapController::class,'blog'])->name('page.sitemap.blog');

        /**
         * End site map routes
         */

         Route::post('/items/{item_slug}/reviews/page/store', [PagesController::class,'review'])->name('items.reviews.pages.store');

        /**
         * ajax routes serve frontend elements
         */

        Route::get('/ajax/cities/{state_id}', [PagesController::class,'jsonGetCitiesByState'])->name('json.city');
        Route::get('/ajax/states/{country_id}', [PagesController::class,'jsonGetStatesByCountry'])->name('json.state');
        Route::post('/ajax/state/image/delete/{item_id}', [PagesController::class,'jsonDeleteStateFeatureImage'])->name('json.state.image.feature');
        Route::post('/ajax/item/image/delete/{item_id}', [PagesController::class,'jsonDeleteItemFeatureImage'])->name('json.item.image.feature');
        Route::post('/ajax/item/gallery/delete/{item_image_gallery_id}', [PagesController::class,'jsonDeleteItemImageGallery'])->name('json.item.image.gallery');
        Route::post('/ajax/item/review/gallery/delete/{review_image_gallery_id}', [PagesController::class,'jsonDeleteReviewImageGallery'])->name('json.review.image.gallery');

        Route::post('/ajax/location/save/{lat}/{lng}', [PagesController::class,'ajaxLocationSave'])->name('ajax.location.save');

        Route::post('/ajax/product/image/delete/{product_id}', [PagesController::class,'jsonDeleteProductFeatureImage'])->name('json.product.image.feature');
        Route::post('/ajax/product/gallery/delete/{product_image_gallery_id}', [PagesController::class,'jsonDeleteProductImageGallery'])->name('json.product.image.gallery');

        Route::post('/ajax/user/image/delete/{user_id}', [PagesController::class,'jsonDeleteUserProfileImage'])->name('json.user.image.profile');

        Route::post('/ajax/setting/logo/delete', [PagesController::class,'jsonDeleteSettingLogoImage'])->name('json.setting.logo');
        Route::post('/ajax/setting/favicon/delete', [PagesController::class,'jsonDeleteSettingFaviconImage'])->name('json.setting.favicon');

        Route::post('/ajax/category/image/delete/{category_id}', [PagesController::class,'jsonDeleteCategoryImage'])->name('json.category.image.delete');
    //     /**
    //      * Back-end admin routes
    //      */
        Route::group(['prefix'=>'admin','middleware'=>['verified','auth','admin'],'as'=>'admin.'], function(){

            Route::get('/dashboard',[AdminDashboard::class,'index'])->name('index');
            Route::resource('/countries', CountryController::class);
            Route::resource('/states', StateController::class);
            Route::resource('/cities', CityController::class);
            Route::resource('/categories', CategoryController::class);
            Route::resource('/custom-fields', CustomFieldController::class);
            Route::resource('/items', ItemController::class);
            Route::resource('/business', BusinessController::class);
            Route::resource('/features', FeatureController::class);
            Route::resource('/blogs', BlogController::class);
            Route::resource('/activities', ActivityLogController::class);
            Route::resource('/orders', OrderController::class);
            Route::post('/business', [BusinessController::class, 'store'])->name('business.store')->withoutMiddleware(['verified','auth','admin']);

            // item slug update route
            Route::put('/items/{item}/slug/update', [ItemController::class,'updateItemSlug'])->name('item.slug.update');

            // item section & collection routes for admin
            Route::get('/items/{item}/sections/index', [ItemController::class,'indexItemSections'])->name('items.sections.index');
            Route::post('/items/{item}/sections/store', [ItemController::class,'storeItemSection'])->name('items.sections.store');
            Route::get('/items/{item}/sections/{item_section}/edit', [ItemController::class,'editItemSection'])->name('items.sections.edit');
            Route::put('/items/{item}/sections/{item_section}/update', [ItemController::class,'updateItemSection'])->name('items.sections.update');
            Route::delete('/items/{item}/sections/{item_section}/destroy', [ItemController::class,'destroyItemSection'])->name('items.sections.destroy');

            Route::put('/items/{item}/sections/{item_section}/rank-up', [ItemController::class,'rankUpItemSection'])->name('items.sections.rank.up');
            Route::put('/items/{item}/sections/{item_section}/rank-down', [ItemController::class,'rankDownItemSection'])->name('items.sections.rank.down');

            Route::post('/items/{item}/sections/{item_section}/collections/store', [ItemController::class,'storeItemSectionCollections'])->name('items.sections.collections.store');
            Route::put('/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-up', [ItemController::class,'rankUpItemSectionCollection'])->name('items.sections.collections.rank.up');
            Route::put('/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-down', [ItemController::class,'rankDownItemSectionCollection'])->name('items.sections.collections.rank.down');
            Route::delete('/items/{item}/sections/{item_section}/collections/{item_section_collection}/destroy', [ItemController::class,'destroyItemSectionCollection'])->name('items.sections.collections.destroy');

            // item claims routes for admin
            Route::resource('/item-claims', ItemClaimController::class);
            Route::post('/item-claims/download/{item_claim}', [ItemClaimController::class,'downloadItemClaimDoc'])->name('item-claims.download.do');
            Route::post('/item-claims/{item_claim}/approve', [ItemClaimController::class,'approveItemClaim'])->name('item-claims.approve.do');
            Route::post('/item-claims/{item_claim}/disapprove', [ItemClaimController::class,'disapproveItemClaim'])->name('item-claims.disapprove.do');

            Route::put('/items/{item}/category/update', [ItemController::class,'updateItemCategory'])->name('item.category.update');

            Route::get('/items/saved/index', [ItemController::class,'savedItems'])->name('items.saved');
            Route::post('/items/{item_slug}/unsave', [ItemController::class,'unSaveItem'])->name('items.unsave');

            Route::put('/items/{item}/approve', [ItemController::class,'approveItem'])->name('items.approve');
            Route::put('/items/{item}/disapprove', [ItemController::class,'disApproveItem'])->name('items.disapprove');
            Route::put('/items/{item}/suspend', [ItemController::class,'suspendItem'])->name('items.suspend');

            Route::post('/items/bulk/approve', [ItemController::class,'bulkApproveItem'])->name('items.bulk.approve');
            Route::post('/items/bulk/disapprove', [ItemController::class,'bulkDisapproveItem'])->name('items.bulk.disapprove');
            Route::post('/items/bulk/suspend', [ItemController::class,'bulkSuspendItem'])->name('items.bulk.suspend');
            Route::post('/items/bulk/delete', [ItemController::class,'bulkDeleteItem'])->name('items.bulk.delete');

    //        /*// item reviews routes
            Route::get('/items/{item_slug}/reviews/create', [ItemController::class,'itemReviewsCreate'])->name('items.reviews.create');
            Route::post('/items/{item_slug}/reviews/store', [ItemController::class,'itemReviewsStore'])->name('items.reviews.store');
            Route::get('/items/{item_slug}/reviews/{review}/edit', [ItemController::class,'itemReviewsEdit'])->name('items.reviews.edit');
            Route::put('/items/{item_slug}/reviews/update/{review}', [ItemController::class,'itemReviewsUpdate'])->name('items.reviews.update');
            Route::delete('/items/{item_slug}/reviews/destroy/{review}', [ItemController::class,'itemReviewsDestroy'])->name('items.reviews.destroy');

            // item reviews management admin routes
            Route::get('/items/reviews/index', [ItemController::class,'itemReviewsIndex'])->name('items.reviews.index');
            Route::get('/items/reviews/{review_id}', [ItemController::class,'itemReviewsShow'])->name('items.reviews.show');
            Route::put('/items/reviews/update/{review_id}/approve', [ItemController::class,'itemReviewsApprove'])->name('items.reviews.approve');
            Route::put('/items/reviews/update/{review_id}/disapprove', [ItemController::class,'itemReviewsDisapprove'])->name('items.reviews.disapprove');
            Route::delete('/items/reviews/destroy/{review_id}', [ItemController::class,'itemReviewsDelete'])->name('items.reviews.delete');


            Route::get('/blogs/reviews/index', [BlogController::class,'blogReviewsIndex'])->name('blogs.reviews.index');


            // item hours routes
            Route::put('/items/hours/update/{item_hour}', [ItemController::class,'updateItemHour'])->name('items.hours.update');
            Route::delete('/items/hours/destroy/{item_hour}', [ItemController::class,'destroyItemHour'])->name('items.hours.destroy');

            // item hour exceptions routes
            Route::put('/items/hour-exceptions/update/{item_hour_exception}', [ItemController::class,'updateItemHourException'])->name('items.hour-exceptions.update');
            Route::delete('/items/hour-exceptions/destroy/{item_hour_exception}', [ItemController::class,'destroyItemHourException'])->name('items.hour-exceptions.destroy');

            // message routes
            Route::resource('/messages', \App\Http\Controllers\Admin\MessageController::class);

            // plan routes
            Route::resource('/plans', PlanController::class);

            // subscription routes
            Route::resource('/subscriptions', SubscriptionController::class);

            // product routes
    //        Route::resource('/products', 'ProductController');
    //        Route::put('/products/{product}/attribute/update', 'ProductController@updateProductAttribute')->name('product.attribute.update');
    //
    //        Route::put('/products/{product}/approve', 'ProductController@approveProduct')->name('product.approve');
    //        Route::put('/products/{product}/disapprove', 'ProductController@disapproveProduct')->name('product.disapprove');
    //        Route::put('/products/{product}/suspend', 'ProductController@suspendProduct')->name('product.suspend');

    //        Route::put('/products/{product}/feature/{product_feature}/rank-up', 'ProductController@rankUpProductFeature')->name('product.feature.up');
    //        Route::put('/products/{product}/feature/{product_feature}/rank-down', 'ProductController@rankDownProductFeature')->name('product.feature.down');
    //        Route::delete('/products/{product}/feature/{product_feature}/destroy', 'ProductController@destroyProductFeature')->name('product.feature.destroy');

            // product attribute routes
    //        Route::resource('/attributes', 'AttributeController');

            Route::resource('/users', UserController::class);
            Route::get('/users/password/{user}/edit', [UserController::class,'editUserPassword'])->name('users.password.edit');
            Route::post('/users/password/{user}', [UserController::class,'updateUserPassword'])->name('users.password.update');

            Route::put('/users/{user}/suspend', [UserController::class,'suspendUser'])->name('users.suspend');
            Route::put('/users/{user}/unsuspend', [UserController::class,'unsuspendUser'])->name('users.unsuspend');

            Route::post('/users/bulk/verify', [UserController::class,'bulkVerifyUser'])->name('users.bulk.verify');
            Route::post('/users/bulk/suspend', [UserController::class,'bulkSuspendUser'])->name('users.bulk.suspend');
            Route::post('/users/bulk/unsuspend', [UserController::class,'bulkUnsuspendUser'])->name('users.bulk.unsuspend');
            Route::post('/users/bulk/delete', [UserController::class,'bulkDeleteUser'])->name('users.bulk.delete');

            Route::get('/profile', [UserController::class,'editProfile'])->name('users.profile.edit');
            Route::post('/profile', [UserController::class,'updateProfile'])->name('users.profile.update');
            Route::get('/profile/password', [UserController::class,'editProfilePassword'])->name('users.profile.password.edit');
            Route::post('/profile/password', [UserController::class,'updateProfilePassword'])->name('users.profile.password.update');

            Route::resource('/testimonials', TestimonialController::class);
            Route::resource('/faqs', FaqController::class);
            Route::resource('/social-medias', SocialMediaController::class);

            // setting general
            Route::get('/settings/general', [SettingController::class , 'editGeneralSetting'])->name('settings.general.edit');
            Route::post('/settings/general', [SettingController::class , 'updateGeneralSetting'])->name('settings.general.update');

            Route::post('/settings/general/smtp/test', [SettingController::class , 'testSmtpSetting'])->name('settings.general.smtp.test');

            // setting about page
            Route::get('/settings/about', [SettingController::class , 'editAboutPageSetting'])->name('settings.page.about.edit');
            Route::post('/settings/about', [SettingController::class , 'updateAboutPageSetting'])->name('settings.page.about.update');

             // setting slider page
            Route::get('/settings/slider', [SettingController::class , 'editSliderPageSetting'])->name('settings.page.slider.edit');
            Route::post('/settings/slider', [SettingController::class , 'updateSliderPageSetting'])->name('settings.page.slider.update');

            // setting terms-of-service page
            Route::get('/settings/terms-of-service', [SettingController::class , 'editTermsOfServicePageSetting'])->name('settings.page.terms-service.edit');
            Route::post('/settings/terms-of-service', [SettingController::class , 'updateTermsOfServicePageSetting'])->name('settings.page.terms-service.update');

            // setting privacy-policy page
            Route::get('/settings/privacy-policy', [SettingController::class , 'editPrivacyPolicyPageSetting'])->name('settings.page.privacy-policy.edit');
            Route::post('/settings/privacy-policy', [SettingController::class , 'updatePrivacyPolicyPageSetting'])->name('settings.page.privacy-policy.update');

            // setting google recaptcha v2
            Route::get('/settings/recaptcha', [SettingController::class , 'editRecaptchaSetting'])->name('settings.recaptcha.edit');
            Route::post('/settings/recaptcha', [SettingController::class , 'updateRecaptchaSetting'])->name('settings.recaptcha.update');

            // setting site map
            Route::get('/settings/sitemap', [SettingController::class , 'editSitemapSetting'])->name('settings.sitemap.edit');
            Route::post('/settings/sitemap', [SettingController::class , 'updateSitemapSetting'])->name('settings.sitemap.update');

            // setting website cache
            Route::get('/settings/cache', [SettingController::class , 'editCacheSetting'])->name('settings.cache.edit');
            Route::post('/settings/cache', [SettingController::class , 'updateCacheSetting'])->name('settings.cache.update');
            Route::delete('/settings/cache/destroy', [SettingController::class , 'deleteCacheSetting'])->name('settings.cache.destroy');

            // setting session
            Route::get('/settings/session', [SettingController::class , 'editSessionSetting'])->name('settings.session.edit');
            Route::post('/settings/session', [SettingController::class , 'updateSessionSetting'])->name('settings.session.update');

            // setting language
            Route::get('/settings/language', [SettingController::class , 'editLanguageSetting'])->name('settings.language.edit');
            Route::post('/settings/language', [SettingController::class , 'updateLanguageSetting'])->name('settings.language.update');

            // setting product
            Route::get('/settings/product', [SettingController::class , 'editProductSetting'])->name('settings.product.edit');
            Route::post('/settings/product', [SettingController::class , 'updateProductSetting'])->name('settings.product.update');

            // setting item
            Route::get('/settings/item', [SettingController::class , 'editItemSetting'])->name('settings.item.edit');
            Route::post('/settings/item', [SettingController::class , 'updateItemSetting'])->name('settings.item.update');

            // maintenance mode
            Route::get('/settings/maintenance', [SettingController::class , 'editMaintenanceSetting'])->name('settings.maintenance.edit');
            Route::post('/settings/maintenance', [SettingController::class , 'updateMaintenanceSetting'])->name('settings.maintenance.update');


            /**
             * Start payment gateway settings
             */
            // bank transfer setting
            Route::get('/settings/payment/bank-transfer', [SettingController::class , 'indexBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.index');
            Route::get('/settings/payment/bank-transfer/create', [SettingController::class , 'createBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.create');
            Route::post('/settings/payment/bank-transfer/store', [SettingController::class , 'storeBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.store');
            Route::get('/settings/payment/bank-transfer/{setting_bank_transfer}/edit', [SettingController::class , 'editBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.edit');
            Route::put('/settings/payment/bank-transfer/{setting_bank_transfer}', [SettingController::class , 'updateBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.update');
            Route::delete('/settings/payment/bank-transfer/{setting_bank_transfer}', [SettingController::class , 'destroyBankTransferPaymentSetting'])->name('settings.payment.bank-transfer.destroy');

            Route::get('/settings/payment/bank-transfer/pending', [SettingController::class , 'indexPendingBankTransferPayment'])->name('settings.payment.bank-transfer.pending.index');
            Route::get('/settings/payment/bank-transfer/pending/{invoice}', [SettingController::class , 'showPendingBankTransferPayment'])->name('settings.payment.bank-transfer.pending.show');
            Route::post('/settings/payment/bank-transfer/pending/{invoice}/approve', [SettingController::class , 'approveBankTransferPayment'])->name('settings.payment.bank-transfer.pending.approve');
            Route::post('/settings/payment/bank-transfer/pending/{invoice}/reject', [SettingController::class , 'rejectBankTransferPayment'])->name('settings.payment.bank-transfer.pending.reject');

            // paypal setting
            Route::get('/settings/payment/paypal', [SettingController::class , 'editPayPalPaymentSetting'])->name('settings.payment.paypal.edit');
            Route::post('/settings/payment/paypal', [SettingController::class , 'updatePayPalPaymentSetting'])->name('settings.payment.paypal.update');

            // razorpay setting
            Route::get('/settings/payment/razorpay', [SettingController::class , 'editRazorpayPaymentSetting'])->name('settings.payment.razorpay.edit');
            Route::post('/settings/payment/razorpay', [SettingController::class , 'updateRazorpayPaymentSetting'])->name('settings.payment.razorpay.update');

            // stripe setting
            Route::get('/settings/payment/stripe', [SettingController::class , 'editStripePaymentSetting'])->name('settings.payment.stripe.edit');
            Route::post('/settings/payment/stripe', [SettingController::class , 'updateStripePaymentSetting'])->name('settings.payment.stripe.update');

            // payumoney setting
            Route::get('/settings/payment/payumoney', [SettingController::class , 'editPayumoneyPaymentSetting'])->name('settings.payment.payumoney.edit');
            Route::post('/settings/payment/payumoney', [SettingController::class , 'updatePayumoneyPaymentSetting'])->name('settings.payment.payumoney.update');
            /**
             * End payment gateway settings
             */

            Route::get('/comments', [CommentController::class,'index'])->name('comments.index');
            Route::put('/comments/{comment}/approve', [CommentController::class,'approve'])->name('comments.approve');
            Route::put('/comments/{comment}/disapprove', [CommentController::class,'disapprove'])->name('comments.disapprove');
            Route::delete('/comments/{comment}/delete', [CommentController::class,'destroy'])->name('comments.destroy');

            // advertisement management
            Route::resource('/advertisements', AdvertisementController::class);

            // social login management
            Route::resource('/social-logins', SocialLoginController::class);

            // language translation management
            Route::get('/lang/sync', [LangController::class,'syncIndex'])->name('lang.sync.index');
            Route::post('/lang/sync/do', [LangController::class,'syncDo'])->name('lang.sync.do');
            Route::post('/lang/sync/restore', [LangController::class,'syncRestore'])->name('lang.sync.restore');
            Route::resource('/lang', LangController::class);

            // customization routes
    //        Route::get('/customization/color', 'CustomizationController@colorEdit')->name('customization.color.edit');
    //        Route::post('/customization/color', 'CustomizationController@colorUpdate')->name('customization.color.update');
    //        Route::post('/customization/color/restore', 'CustomizationController@colorRestore')->name('customization.color.restore');
    //
    //        Route::get('/customization/header', 'CustomizationController@headerEdit')->name('customization.header.edit');
    //        Route::post('/customization/header', 'CustomizationController@headerUpdate')->name('customization.header.update');
    //

            /**
             * Start bulk importer routes
             */
            Route::get('/importer/csv/upload', [ImporterController::class,'showUpload'])->name('importer.csv.upload.show');
            Route::post('/importer/csv/upload', [ImporterController::class,'uploadFolder'])->name('importer.csv.upload.process');

            Route::get('/importer/csv/data', [ImporterController::class,'indexCsvData'])->name('importer.csv.upload.data.index');
            Route::get('/importer/csv/data/{import_csv_data}/edit', [ImporterController::class,'editCsvData'])->name('importer.csv.upload.data.edit');
            Route::post('/importer/csv/data/{import_csv_data}/parse-ajax', [ImporterController::class,'ajaxParseCsvData'])->name('importer.csv.upload.data.parse');
            Route::post('/importer/csv/data/{import_csv_data}/parse/progress-ajax', [ImporterController::class,'ajaxParseProgressCsvData'])->name('importer.csv.upload.data.parse.progress');
            Route::delete('/importer/csv/data/{import_csv_data}/destroy', [ImporterController::class,'destroyCsvData'])->name('importer.csv.upload.data.destroy');

            Route::get('/importer/item/data', [ImporterController::class,'indexItemData'])->name('importer.item.data.index');
            Route::get('/importer/item/data/{import_item_data}/edit', [ImporterController::class,'editItemData'])->name('importer.item.data.edit');
            Route::put('/importer/item/data/{import_item_data}/update', [ImporterController::class,'updateItemData'])->name('importer.item.data.update');
            Route::delete('/importer/item/data/{import_item_data}/destroy', [ImporterController::class,'destroyItemData'])->name('importer.item.data.destroy');
            Route::post('/importer/item/data/{import_item_data}/destroy-ajax', [ImporterController::class,'ajaxDestroyItemData'])->name('importer.item.data.destroy-ajax');
            Route::post('/importer/item/data/{import_item_data}/import', [ImporterController::class,'importItemData'])->name('importer.item.data.import');
            Route::post('/importer/item/data/{import_item_data}/import-ajax', [ImporterController::class,'ajaxImportItemData'])->name('importer.item.data.import-ajax');
            /**
             * End bulk importer routes
             */

            /**
             * Start theme routes
             */
    //        Route::get('/themes', 'ThemeController@index')->name('themes.index');
    //        Route::get('/themes/create', 'ThemeController@createTheme')->name('themes.create');
    //        Route::post('/themes/store', 'ThemeController@storeTheme')->name('themes.store');
    //        Route::post('/themes/{theme}/active', 'ThemeController@activeTheme')->name('themes.active');
    //        Route::delete('/themes/{theme}/destroy', 'ThemeController@destroyTheme')->name('themes.destroy');
    //
    //        Route::get('/themes/{theme}/customization/color/edit', 'ThemeController@editThemeColor')->name('themes.customization.color.edit');
    //        Route::post('/themes/{theme}/customization/color/update', 'ThemeController@updateThemeColor')->name('themes.customization.color.update');
    //        Route::post('/themes/{theme}/customization/color/restore', 'ThemeController@restoreThemeColor')->name('themes.customization.color.restore');
    //
    //        Route::get('/themes/{theme}/customization/header/edit', 'ThemeController@editThemeHeader')->name('themes.customization.header.edit');
    //        Route::post('/themes/{theme}/customization/header/update', 'ThemeController@updateThemeHeader')->name('themes.customization.header.update');
    //        Route::post('/themes/{theme}/customization/header/restore', 'ThemeController@restoreThemeHeader')->name('themes.customization.header.restore');
            /**
             * End theme routes
             */

            // item leads routes
            Route::resource('/item-leads', ItemLeadController::class);
        });

    //     /**
    //      * Back-end user routes
    //      */
        Route::group(['prefix'=>'user','middleware'=>['verified','auth','user'],'as'=>'user.'], function(){

            Route::get('/dashboard',[PagesController::class,'index'])->name('index');
            Route::resource('/items', ItemController::class);

            Route::post('/items/bulk/delete', [ItemController::class,'bulkDeleteItem'])->name('items.bulk.delete');

            // item slug update route
            Route::put('/items/{item}/slug/update', [ItemController::class,'updateItemSlug'])->name('item.slug.update');

            // item section & collection routes for admin
            Route::get('/items/{item}/sections/index', [ItemController::class,'indexItemSections'])->name('items.sections.index');
            Route::post('/items/{item}/sections/store', [ItemController::class,'storeItemSection'])->name('items.sections.store');
            Route::get('/items/{item}/sections/{item_section}/edit', [ItemController::class,'editItemSection'])->name('items.sections.edit');
            Route::put('/items/{item}/sections/{item_section}/update', [ItemController::class,'updateItemSection'])->name('items.sections.update');
            Route::delete('/items/{item}/sections/{item_section}/destroy', [ItemController::class,'destroyItemSection'])->name('items.sections.destroy');

            Route::put('/items/{item}/sections/{item_section}/rank-up', [ItemController::class,'rankUpItemSection'])->name('items.sections.rank.up');
            Route::put('/items/{item}/sections/{item_section}/rank-down', [ItemController::class,'rankDownItemSection'])->name('items.sections.rank.down');

            Route::post('/items/{item}/sections/{item_section}/collections/store', [ItemController::class,'storeItemSectionCollections'])->name('items.sections.collections.store');
            Route::put('/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-up', [ItemController::class,'rankUpItemSectionCollection'])->name('items.sections.collections.rank.up');
            Route::put('/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-down', [ItemController::class,'rankDownItemSectionCollection'])->name('items.sections.collections.rank.down');
            Route::delete('/items/{item}/sections/{item_section}/collections/{item_section_collection}/destroy', [ItemController::class,'destroyItemSectionCollection'])->name('items.sections.collections.destroy');

            // item claims routes for user
            Route::resource('/item-claims', ItemClaimController::class);
            Route::post('/item-claims/download/{item_claim}', [ItemClaimController::class,'downloadItemClaimDoc'])->name('item-claims.download.do');

            Route::put('/items/{item}/category/update', [ItemController::class,'updateItemCategory'])->name('item.category.update');

            Route::get('/items/saved/index', [ItemController::class,'savedItems'])->name('items.saved');
            Route::post('/items/{item_slug}/unsave', [ItemController::class,'unSaveItem'])->name('items.unsave');

            // item reviews routes
            Route::get('/items/{item_slug}/reviews/create', [ItemController::class,'itemReviewsCreate'])->name('items.reviews.create');
            Route::post('/items/{item_slug}/reviews/store', [ItemController::class,'itemReviewsStore'])->name('items.reviews.store');
            Route::get('/items/{item_slug}/reviews/{review}/edit', [ItemController::class,'itemReviewsEdit'])->name('items.reviews.edit');
            Route::put('/items/{item_slug}/reviews/update/{review}', [ItemController::class,'itemReviewsUpdate'])->name('items.reviews.update');
            Route::delete('/items/{item_slug}/reviews/destroy/{review}', [ItemController::class,'itemReviewsDestroy'])->name('items.reviews.destroy');

            // user manage reviews route
            Route::get('/items/reviews/index', [ItemController::class,'itemReviewsIndex'])->name('items.reviews.index');

            // user item hours routes
            Route::put('/items/hours/update/{item_hour}', [ItemController::class,'updateItemHour'])->name('items.hours.update');
            Route::delete('/items/hours/destroy/{item_hour}', [ItemController::class,'destroyItemHour'])->name('items.hours.destroy');

            // user item hour exceptions routes
            Route::put('/items/hour-exceptions/update/{item_hour_exception}', [ItemController::class,'updateItemHourException'])->name('items.hour-exceptions.update');
            Route::delete('/items/hour-exceptions/destroy/{item_hour_exception}', [ItemController::class,'destroyItemHourException'])->name('items.hour-exceptions.destroy');

            // message routes
    //        Route::resource('/messages', 'MessageController');

            // subscription routes
    //        Route::resource('/subscriptions', 'SubscriptionController');

            // product routes
    //        Route::resource('/products', 'ProductController');
    //        Route::put('/products/{product}/attribute/update', 'ProductController@updateProductAttribute')->name('product.attribute.update');
    //        Route::put('/products/{product}/feature/{product_feature}/rank-up', 'ProductController@rankUpProductFeature')->name('product.feature.up');
    //        Route::put('/products/{product}/feature/{product_feature}/rank-down', 'ProductController@rankDownProductFeature')->name('product.feature.down');
    //        Route::delete('/products/{product}/feature/{product_feature}/destroy', 'ProductController@destroyProductFeature')->name('product.feature.destroy');

            // product attribute routes
    //        Route::resource('/attributes', 'AttributeController');

            Route::get('/comments', [CommentController::class,'index'])->name('comments.index');

            /**
             * Start Payment Gateway Routes
             */

            // Bank Transfer manual payment gateway
    //        Route::post('/banktransfer/checkout/plan/{plan_id}/subscription/{subscription_id}', 'BankTransferController@doCheckout')->name('banktransfer.checkout.do');
    //        Route::post('/banktransfer/recurring/cancel', 'BankTransferController@cancelRecurring')->name('banktransfer.recurring.cancel');

            // PayPal gateway
         /*   Route::get('/paypal/checkout/plan/{plan_id}/subscription/{subscription_id}', 'PaypalController@doCheckout')->name('paypal.checkout.do');
            Route::get('/paypal/checkout/success/plan/{plan_id}/subscription/{subscription_id}', 'PaypalController@showCheckoutSuccess')->name('paypal.checkout.success');
            Route::get('/paypal/checkout/cancel', 'PaypalController@showCheckoutCancel')->name('paypal.checkout.cancel');
            Route::post('/paypal/recurring/cancel', 'PaypalController@cancelRecurring')->name('paypal.recurring.cancel');*/

            // indian payment gateway - instamojo
            //Route::get('/instamojo/checkout/plan/{plan_id}/subscription/{subscription_id}', 'InstamojoController@doCheckout')->name('instamojo.checkout.do');
            //Route::get('/instamojo/checkout/success/plan/{plan_id}/subscription/{subscription_id}', 'InstamojoController@showCheckoutSuccess')->name('instamojo.checkout.success');

            // indian payment gateway - Razorpay
       /*     Route::post('/razorpay/checkout/plan/{plan_id}/subscription/{subscription_id}', 'RazorpayController@doCheckout')->name('razorpay.checkout.do');
            Route::get('/razorpay/checkout/success/plan/{plan_id}/subscription/{subscription_id}/invoice/{invoice_num}', 'RazorpayController@showCheckoutSuccess')->name('razorpay.checkout.success');
            Route::post('/razorpay/checkout/cancel', 'RazorpayController@cancelCheckout')->name('razorpay.checkout.cancel');
            Route::post('/razorpay/recurring/cancel', 'RazorpayController@cancelRecurring')->name('razorpay.recurring.cancel');*/

          /*  // Stripe payment gateway
            Route::post('/stripe/checkout/plan/{plan_id}/subscription/{subscription_id}', 'StripeController@doCheckout')->name('stripe.checkout.do');
            Route::get('/stripe/checkout/success/plan/{plan_id}/subscription/{subscription_id}', 'StripeController@showCheckoutSuccess')->name('stripe.checkout.success');
            Route::get('/stripe/checkout/cancel', 'StripeController@cancelCheckout')->name('stripe.checkout.cancel');
            Route::post('/stripe/recurring/cancel', 'StripeController@cancelRecurring')->name('stripe.recurring.cancel');

            // Payumoney payment gateway
            Route::post('/payumoney/checkout/plan/{plan_id}/subscription/{subscription_id}', 'PayumoneyController@doCheckout')->name('payumoney.checkout.do');
            Route::post('/payumoney/checkout/success', 'PayumoneyController@showCheckoutSuccess')->name('payumoney.checkout.success');
            Route::post('/payumoney/checkout/cancel', 'PayumoneyController@cancelCheckout')->name('payumoney.checkout.cancel');
            Route::post('/payumoney/recurring/cancel', 'PayumoneyController@cancelRecurring')->name('payumoney.recurring.cancel');
            */
            /**
             * End Payment Gateway Routes
             */

            // user profile routes
            Route::get('/profile', [UserController::class,'editProfile'])->name('profile.edit');
            Route::post('/profile', [UserController::class,'updateProfile'])->name('profile.update');
            Route::get('/profile/password', [UserController::class,'editProfilePassword'])->name('profile.password.edit');
            Route::post('/profile/password', [UserController::class,'updateProfilePassword'])->name('profile.password.update');

            // item leads routes
            Route::resource('/item-leads', ItemLeadController::class);
        });

        // In your Laravel routes file
        Route::get('/get-data', 'App\Http\Controllers\PagesController@getData')->name('getData');
        Route::get('/get-sub-categories', 'App\Http\Controllers\PagesController@getSubCategories')->name('getSubCategories');

        Route::get('/save-location', [PagesController::class, 'saveLocation'])->name('save-location');
        Route::get('/get-cities', [PagesController::class, 'getCities'])->name('getCities');
        Route::get('/searchajax', [PagesController::class, 'searchajax'])->name('searchajax');



    });
    /**
     * End website routes
     */


