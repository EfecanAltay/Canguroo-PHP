<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

if (App::environment() === 'production') {
	Log::info('-> forcing Schema ...');
//  URL::forceScheme('https'); //!!! not for heroku
}
Auth::routes();

Route::get('/', "HomeController@index")->name('home');
Route::get('/logout', "LogoutController@index");

Route::get('user',"UserController@index")->name('card');
Route::get('user/profile', "UserController@index")->name('profile');
Route::get('user/profile/coupon', "UserController@coupons")->name('coupons');
Route::get('user/profile/orders', "UserController@orders")->name('orders');
Route::get('user/profile/adress', "UserController@adress")->name('adress');

Route::get('user/profile/settings', "UserController@settings")->name('settings');
Route::post('user/profile/settings', "UserController@updateUserData")->name('updateUserData');

Route::get('user/profile/adress/add', "AdressController@addAdress")->name('addAdress');
Route::post('user/profile/adress/add', "AdressController@addAdress")->name('addAdress');

Route::post('user/profile/adress/get', "AdressController@getAdress")->name('getAdress');

Route::post('user/profile/adress/delete', "AdressController@deleteAdress")->name('deleteAdress');
Route::post('user/profile/adress/update', "AdressController@updateAdress")->name('updateAdress');

//Products
Route::get('products/{product_id}/detail/', "ProductController@getProductDetail")->name('getProductDetail');

//-----
//pay2GoController-----

//->Get CardPage :
Route::get('user/profile/card', "Pay2GoController@goCard")->name('goCard');
Route::post('user/profile/payment', "Pay2GoController@goPayment")->name('goPayment');
Route::post('user/profile/payment/success', "Pay2GoController@goSuccess")->name('goPaymentSuccess');

//->Delete package on card :
Route::get('package/deleteProductOnCard/{package_id}', "CardController@deleteProductOnCard" )->name('deleteProductOnCard');
//->AddToCard / Sepete Ekle
Route::get('products/{product_id}/takeProduct/', "ProductController@takeProduct");
Route::post('products/{product_id}/takeProduct/', "ProductController@takeProduct" )->name('takeProduct');
//->FasyPay / Hızlı Al

//order 
	// -> name: orders
//orderDetail
Route::get('products/{order_id}/orderDetail/', "OrderController@getOrderDetail" )->name('getOrderDetail');

//Store
Route::get('store/{order_id}', "StoreController@getStore" )->name('getStore');










