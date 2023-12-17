<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PagesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
        "middleware"=>"api",
        "prefix"=>"auth",
        "namespace"=>"App\Http\Controllers\Api"
    ],function(){
        Route::post('login','AuthController@login');
        Route::post('register','AuthController@register');
    });

Route::middleware(['global_variables','maintenance'])->group(function () {

    /**
         * Public routes
         */
        Route::get('/', [PagesController::class,'index']);
        Route::get('/search', [PagesController::class,'search']);

        Route::get('/categories', [PagesController::class,'categories']);
        Route::get('/states', [PagesController::class,'states']);

        Route::get('/category/{category_slug}', [PagesController::class,'category']);
        Route::get('/category/{category_slug}/state/{state_slug}', [PagesController::class,'categoryByState']);
        Route::get('/category/{category_slug}/state/{state_slug}/city/{city_slug}', [PagesController::class,'categoryByStateCity']);

        Route::get('/state/{state_slug}', [PagesController::class,'state']);
        Route::get('/state/{state_slug}/city/{city_slug}', [PagesController::class,'city']);

        Route::get('/listing/{item_slug}', [PagesController::class,'item']);
        Route::get('/listing/{item_slug}/product/{product_slug}', [PagesController::class,'product']);


        Route::get('/about', [PagesController::class,'about']);
        Route::get('/contact', [PagesController::class,'contact']);
        Route::post('/contact', [PagesController::class,'doContact']);

});

