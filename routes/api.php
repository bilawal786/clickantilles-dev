<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('user/details', 'API\UserController@details');
    Route::post('/addtocart','API\ProductController@addtocart');
    Route::get('/cart/items', 'API\ProductController@cartItems');
    Route::post('/addRemoveWish/{id}','API\ProductController@addRemoveWish');
    Route::get('/wishlist','API\ProductController@wishlist');
    Route::post('/userUpdate','API\UserController@userUpdate');
    Route::post('/userPhotoUpdate','API\UserController@userPhotoUpdate');
    Route::post('/updatePassword','API\UserController@updatePassword');
    Route::post('/add/review/{id}','API\ProductController@addReview');
    Route::get('/product/reviews/{id}','API\ProductController@productReviews');
    Route::post('/checkoutSubmit','API\WebsiteController@checkoutSubmit');
    Route::get('/userOrders','API\UserController@userOrders');
});

Route::post('/forgot/password','API\UserController@forgotPassword');
Route::post('/confirm/otp','API\UserController@confirmOtp');
Route::post('/reset/password','API\UserController@resetPassword');

Route::get('categories', 'API\CategoryController@categories');
Route::get('subcategory/products/{subcategory_id}', 'API\CategoryController@subCategoryProducts');
Route::get('category/products/{category_id}', 'API\CategoryController@categoryProducts');

Route::get('/flash/sale', 'API\ProductController@flashSale');
Route::get('/website/slides', 'API\SettingsController@websiteSlides');
Route::get('/website/settings', 'API\SettingsController@websiteSettings');
Route::get('/cartitem/remove/{id}','API\ProductController@removeCartItem');

Route::get('/clickconceptstores', 'API\WebsiteController@clickConceptStores');
Route::get('/storeproducts/{id}', 'API\WebsiteController@storeProducts');





