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
    Route::post('details', 'API\UserController@details');
    Route::post('detailsAll', 'API\UserController@detailsAll');
    Route::post('/addtocart','API\ProductController@addtocart')->name('addtocart');
    Route::post('/addRemoveWish/{id}','API\ProductController@addRemoveWish')->name('addRemove.wish');
    Route::post('/userUpdate','API\UserController@userUpdate')->name('user.update');
    Route::post('/userPhotoUpdate','API\UserController@userPhotoUpdate')->name('user.photoUpdate');
    Route::post('/updatePassword','API\UserController@updatePassword')->name('update.password');
});

Route::get('categories', 'API\CategoryController@categories');
Route::get('subcategory/products/{subcategory_id}', 'API\CategoryController@subCategoryProducts');
Route::get('category/products/{category_id}', 'API\CategoryController@categoryProducts');

Route::get('/flash/sale', 'API\ProductController@flashSale')->name('flash.sale');
Route::get('/website/slides', 'API\SettingsController@websiteSlides')->name('website.slides');
Route::get('/cart/items/{id}', 'API\ProductController@cartItems')->name('cart.items');
Route::get('/cartitem/remove/{id}','API\ProductController@removeCartItem')->name('cartitem.remove');


