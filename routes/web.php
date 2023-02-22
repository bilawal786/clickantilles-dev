<?php

use App\Mail\StatusChangeMail;
use App\Order;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', 'Front\WebsiteController@index')->name('front.index');
Route::get('/image-maker/0', function (){
    return view('website.pages.image-maker');
});
Route::get('/email', function (){
    $order = Order::find(25);

    $data['order'] = $order;
    return view('emails.invoiceAttachment', compact('order'));
});
Route::get('email-test', function(){
    $order = Order::find(25);

//    $data['order'] = $order;
//    $pdf = PDF::loadView('emails.invoiceAttachment', $data);
//        Mail::to($order['email'])->send(new \App\Mail\OrderConfirmationMail($order));
    dispatch(new App\Jobs\SendInvoice($order));

    dd('done');
});
Route::post('/addtocart', 'Front\WebsiteController@addtocart')->name('addtocart');
Route::post('/addtowishlist', 'Front\WebsiteController@addtowishlist')->name('addtowishlist');
Route::post('/get-customized-image', 'Front\WebsiteController@getCustomizeImage')->name('get-customized-image');
Route::get('/cartitems', 'Front\WebsiteController@cartitems')->name('cartitems');
Route::post('/removecart', 'Front\WebsiteController@removecart')->name('removecart');
Route::get('/removecart/{id}', 'Front\WebsiteController@removecartweb')->name('removecartweb');

Route::get('/stores', 'Front\WebsiteController@stores')->name('front.stores');
Route::get('/store/single/{id}', 'Front\WebsiteController@singleStore')->name('store.single');
Route::get('/discounted/products', 'Front\WebsiteController@discountedProducts')->name('front.dicounted.products');
Route::get('/ready/to/go', 'Front\WebsiteController@ready')->name('front.ready');
Route::get('/goodies/products', 'Front\WebsiteController@goodiesProducts')->name('front.goodies.products');
Route::get('/emballeges/products', 'Front\WebsiteController@emballagesProducts')->name('front.emballeges.products');
Route::get('/concept/products', 'Front\WebsiteController@conceptProducts')->name('front.concept.products');
Route::get('/flash/sale', 'Front\WebsiteController@flashSale')->name('flash.sale');

Route::get('/products/filter/{category_id}', 'Front\WebsiteController@filterProducts')->name('products.filter');
Route::get('/products/subcategory/{subcategory_id}', 'Front\WebsiteController@subcategoryProducts')->name('products.subcategory');
Route::get('/product/search', 'Front\WebsiteController@productSearch')->name('product.search');

Route::get('/0/product/{slug}/{id}', 'Front\WebsiteController@singleProduct')->name('front.single.product');
Route::post('/addreview', 'Front\WebsiteController@addReview')->name('front.product.review');
Route::get('/track-order', 'Front\WebsiteController@trackOrder')->name('front.track.order');
Route::get('/aboutus', 'Front\WebsiteController@aboutus')->name('front.aboutus');
Route::get('/returnpolicy', 'Front\WebsiteController@returnpolicy')->name('return.policy');
Route::get('/cart', 'Front\WebsiteController@cart')->name('front.cart');
Route::get('/removewish/{id}', 'Front\WebsiteController@removewish')->name('front.removewish');


Auth::routes();

Route::group(['middleware' => ['auth', 'web', 'role']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/orders/view/{id}', 'Admin\OrdersController@orderView')->name('order.view');
    Route::post('/orders/status', 'Admin\OrdersController@orderStatus')->name('order.status');
    Route::get('/orders/type', 'Admin\OrdersController@orderType')->name('order.type');

    Route::resource('category', 'Admin\CategoryController');
    Route::resource('click_concept', 'Admin\ClickConceptController');
    Route::resource('shipping_source', 'Admin\ShippingSourceController');
    Route::resource('subcategory', 'Admin\SubCategoryController');
    Route::resource('product', 'Admin\ProductController');
    Route::post('product/deal/{id}', 'Admin\ProductController@productDeal')->name('product.deal');
    Route::post('/fetchsubcategory', 'Admin\ProductController@fetchsubcategory')->name('fetchsubcategory');

    Route::get('generalsettings','Admin\SettingsController@index')->name('general.settings');
    Route::get('generalsettings/pages','Admin\SettingsController@pages')->name('settings.pages');
    Route::post('updatesettings','Admin\SettingsController@update')->name('update.settings');
    Route::post('update/slides','Admin\SettingsController@slidesUpdate')->name('update.slides');
    Route::post('updatepages','Admin\SettingsController@updatepages')->name('page.update');
    Route::get('generalsettings/slides','Admin\SettingsController@slides')->name('settings.slides');
    Route::get('generalsettings/colors','Admin\SettingsController@colors')->name('settings.colors');
    Route::post('generalsettings/addcolor','Admin\SettingsController@addcolor')->name('settings.addcolor');
    Route::post('generalsettings/editcolor/{id}','Admin\SettingsController@editcolor')->name('settings.editcolor');
    Route::post('generalsettings/editcolor/{id}','Admin\SettingsController@editcolor')->name('settings.editcolor');
    Route::post('generalsettings/removecolor/{id}','Admin\SettingsController@removecolor')->name('settings.removecolor');


    Route::get('simpleusers','Admin\UsersController@simpleusers')->name('simple.users');
    Route::get('prousers','Admin\UsersController@prousers')->name('pro.users');

});

Route::group(['middleware' => ['auth', 'web', 'pro']], function() {


    Route::get('/pro/subscription', 'Front\ProUserController@proSubscription')->name('pro.subscribed');
    Route::get('/subscription/payment/success', 'Front\ProUserController@paymentSuccess')->name('subscription.payment.success');

});

Route::group(['middleware' => ['auth', 'web']], function() {

    Route::get('/pro/products', 'Front\WebsiteController@proProducts')->name('front.pro.products');
    Route::get('/pro/filter/products/{section}', 'Front\ProUserController@filterProPrducts')->name('pro.filter.products');
    Route::get('/sourcing/products', 'Front\WebsiteController@sourcingProducts')->name('front.sourcing.products');

    Route::get('/user/profile', 'Front\UserController@profile')->name('user.profile');
    Route::post('/user/profile/update', 'Front\UserController@profileUpdate')->name('profile.update');
    Route::get('/user/dashboard', 'Front\UserController@dashboard')->name('user.dashboard');
    Route::get('/user/orders', 'Front\UserController@orders')->name('user.orders');
    Route::get('/user/orders/view/{id}', 'Front\UserController@orderView')->name('user.order.view');

    Route::get('/payment/success/{id}', 'Front\WebsiteController@paymentSuccess')->name('payment.success');
    Route::get('/checkout', 'Front\WebsiteController@checkout')->name('front.checkout');
    Route::post('/checkout', 'Front\WebsiteController@checkoutSubmit')->name('checkout.submit');
    Route::get('/wishlist', 'Front\WebsiteController@wishlist')->name('front.wishlist');


});
Route::get('/payment/success/mobile/{id}/{user_id}', 'API\WebsiteController@paymentSuccessMobile')->name('payment.success.mobile');
Route::get('/payment/fail/mobile', 'API\WebsiteController@paymentFailMobile')->name('payment.fail.mobile');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('asadilyas404@gmail.com')->send(new \App\Mail\OrderConfirmationMail($details));

    dd("Email is Sent.");
});
