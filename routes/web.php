<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/test', function () {
    Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 5, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
});
Route::get('/shop', function () {
    return Cart::content();
});

Route::get('/mailable', function () {
    $order = App\Order::find(1);

    return new App\Mail\OrderPlaced($order);
});

Route::get('/', 'LandingPageController@index')->name('landingpage.index');

Route::get('/shop', 'shopController@index')->name('shop.index');
Route::get('/shop/{product}', 'shopController@show')->name('shop.show');

Route::get('/shoes', 'shoeController@index')->name('shoes.index');

Route::get('/bags', 'bagsController@index')->name('bags.index');

Route::get('/jewelry', 'jewelryController@index')->name('jewelry.index');

Route::get('/women', 'womenController@index')->name('women.index');

Route::get('/new', 'newController@index')->name('new.index');

Route::get('/men', 'menController@index')->name('men.index');

Route::get('/blog', 'blogController@index')->name('blog.index');

Route::get('/cart', 'ShoppingCartController@index')->name('ShoppingCart.index');
Route::post('/cart', 'ShoppingCartController@store')->name('ShoppingCart.store');
Route::patch('/cart/{product}', 'ShoppingCartController@update')->name('ShoppingCart.update');
Route::delete('/cart/{product}', 'ShoppingCartController@destroy')->name('ShoppingCart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'ShoppingCartController@switchToSaveForLater')->name('ShoppingCart.switchToSaveForLater');

Route::get('/wishlist', 'WishlistController@index')->name('WishlistController.index');
Route::post('/wishlist', 'WishlistController@store')->name('WishlistController.store');


Route::delete('/SaveForLater/{product}', 'SaveForLaterController@destroy')->name('SaveForLater.destroy');
Route::post('/SaveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('SaveForLater.switchToCart');

Route::get('empty', function(){
//    Cart::destroy();
    Cart::instance('SaveForLater')->destroy();
});

Route::get('/checkout', 'checkoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'checkoutController@store')->name('checkout.store');

Route::get('/guestCheckout', 'checkoutController@index')->name('guestCheckout.index');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');


Route::get('/thankyou', 'ComfirmationController@index')->name('comfirmation.index');

//Route::get('/children', 'childrenController@index')->name('children');
Route::get('/contact', 'contactController@index')->name('contact');
//Route::get('/product', 'productController@index')->name('product');

Route::get('/search', 'productsSearchController@search')->name('search');
Route::get('/search-algolia', 'productsSearchController@searchAlgolia')->name('search-algolia');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
