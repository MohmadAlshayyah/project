<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['namespace' => 'User'], function () {
   
    Route::get('/', function () {
        return view('layouts.shop');
    });

Route::group(['prefix' => 'user'], function () {
    
    Route::get('electronics','CurdControllers@electronics')->name('user.electronics');
    Route::get('fashion','CurdControllers@fashion')->name('user.fashion');
    Route::get('furniture','CurdControllers@furniture')->name('user.furniture');
    Route::get('jewellery','CurdControllers@jewellery')->name('user.jewellery');
    Route::get('multipurpose','CurdControllers@multipurpose')->name('user.multipurpose');
    Route::get('nft','CurdControllers@nft')->name('user.nft');
    Route::get('rtl','CurdControllers@rtl')->name('user.rtl');
  
});



Route::group(['prefix' => 'user'], function () {
    Route::get('shop','ShopControllers@shop')->name('user.shop');
    Route::get('nosid','ShopControllers@nosid')->name('user.nosid');
    Route::get('variation1','ShopControllers@variation1')->name('user.variation1');
    Route::get('variation2','ShopControllers@variation2')->name('user.variation2');
    Route::get('variation3','ShopControllers@variation3')->name('user.variation3');
    Route::get('variation4','ShopControllers@variation4')->name('user.variation4');
    Route::get('variation5','ShopControllers@variation5')->name('user.variation5');
    Route::get('variation6','ShopControllers@variation6')->name('user.variation6');
    Route::get('variation7','ShopControllers@variation7')->name('user.variation7');
   
  
});


Route::group(['prefix' => 'user'], function () {
  
    Route::get('account','PagesControllers@account')->name('user.account');
  
    Route::get('cart','PagesControllers@cart')->name('user.cart');
    Route::delete('remove_from','PagesControllers@remove')->name('remove_from');
    Route::get('/addcart/{id}','PagesControllers@addproducttocart')->name('addproduct.to.cart');
    Route::get('idetcart','PagesControllers@idetcart')->name('user.idetcart');
    Route::post('cartstor','PagesControllers@cartstor')->name('user.cartstor');
    Route::post('cartupdeate','PagesControllers@cartupdeate')->name('user.cartupdeate');
    Route::delete('/cartdelete','PagesControllers@cartdelete')->name('cartdelete');
    

    Route::get('/items/delete/{id}', 'ItemController@deleteItem')->name('items.delete');



   
   
   
    Route::post('storecheckout','PagesControllers@storecheckout')->name('user.storecheckout'); 
    Route::get('comingsoon','PagesControllers@comingsoon')->name('user.comingsoon');
    Route::get('privacypol','PagesControllers@privacypol')->name('user.privacypol');
    Route::get('resetpass','PagesControllers@resetpass')->name('user.resetpass');
   

    Route::get('typography','PagesControllers@typography')->name('user.typography');
    Route::get('wishlist','PagesControllers@wishlist')->name('user.wishlist');
    Route::get('/addwishlist/{id}','PagesControllers@addwishlist')->name('addlike.to.wishlist');
    Route::get('error','PagesControllers@wishlist')->name('user.error');
    Route::get('about','PagesControllers@about')->name('user.about');
  
});



Route::group(['prefix' => 'user' , 'middleware' => 'mohmad:web'], function () {
  

    Route::get('checkout','PagesControllers@checkout')->name('user.checkout');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('audio','BlogControllers@audio')->name('user.audio');
    Route::get('blog','BlogControllers@blog')->name('user.blog');
    Route::get('bloggrid','BlogControllers@bloggrid')->name('user.bloggrid');
    Route::get('contact','BlogControllers@contact')->name('user.contact');
    Route::get('details','BlogControllers@details')->name('user.details');
    Route::get('gallery','BlogControllers@gallery')->name('user.gallery');
    Route::get('quote','BlogControllers@quote')->name('user.quote');
    Route::get('video','BlogControllers@video')->name('user.video');
 
  
});

});
Auth::routes();





Route::group(['prefix' => 'user' , 'middleware' => 'guest:web' ], function () {
  
    Route::get('forgotpass','User\LoginControllers@forgotpass')->name('user.forgotpass');
      
    Route::get('resetpass','User\LoginControllers@resetpass')->name('user.resetpass');
    Route::get('signin','User\LoginControllers@signin')->name('user.signin');
    Route::post('signin','User\LoginControllers@login')->name('signin');
    Route::get('singup','User\LoginControllers@singup')->name('user.singup');

  
});


