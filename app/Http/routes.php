<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/addtocart/{id}', ['uses'=>'ProductsController@addToCart',
                                'as'=>'products.addtocart']);*/

/*You can group routes with similar prefix together and even add a middleware there are restrictions to those routes like


Route::group(['prefix'=>'cart', 'middleware'=>'auth'], function(){
Route::get('/cart', 'sosocontroller');
Route::get('/cart/checkout', 'thiscontroller');

} )

*/


Route::resource('productss', 'FrontendController');
Route::get('/', 'FrontEndController@index')->name('welcome');
Route::get('front/product/{id}','FrontEndController@show')->name('frontendproduct.show');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('products', 'ProductsController');

Route::resource('cart', 'cartController');

Route::group(['prefix'=>'product'], function (){
    Route::get('search', 'FrontEndController@searchResult')->name('products.search');

    Route::get('{id}','ProductsController@show')->name('product.show');
});

Route::post('/cart', 'cartController@store')->name('cart.store');

Route::delete('cart/{id}', 'cartController@destroy')->name('cart.destroy');

Route::post('wishlist/{id}','cartController@wishList')->name('cart.wishlist');

Route::delete('removewishlist/{id}','WishListController@destroy')->name('remove.wishlist');

Route::get('wishlist', 'WishListController@index')->name('wishlist.index');

Route::post('switchtocart/{id}', 'WishListController@switchToCart')->name('wishlist.switchtocart');

Route::resource('checkout', 'CheckOutController');

Route::post('/pay','PaymentController@redirectToGateway')->name('pay');





/*To remove entirely a group of objects from the database use below*/
                    /*Route::get('empty', function(){
                        Cart::instance('wishList')->destroy();
                    });*/
