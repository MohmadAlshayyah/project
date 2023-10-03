<?php

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

 
Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {

    Route::get('admin','CategoriesControllers@home');




    Route::group(['prefix' => 'admin'], function () {
        Route::get('/','CategoriesControllers@home')->name('admin.home');
        Route::get('show','CategoriesControllers@show')->name('admin.show'); 
        Route::get('subcategories','CategoriesControllers@subcategories')->name('admin.subcategories');  
        Route::get('addcategories','CategoriesControllers@addcategories'); 
        Route::get('addsub','CategoriesControllers@addsub'); 
        Route::post('store','CategoriesControllers@store')->name('admin.categories.store'); 
        Route::get('edit/{offer_id}','CategoriesControllers@editCategories'); 
        Route::post('update/{offer_id}','CategoriesControllers@updateCategories')->name('admin.categories.update');
        Route::get('delete/{offer_id}','CategoriesControllers@deleteCategories')->name('admin.categories.delete'); 
     
        Route::post('storesub','CategoriesControllers@storesub')->name('admin.categories.storesub'); 
        Route::get('editsub/{offer_id}','CategoriesControllers@editsub'); 
        Route::post('updatesub/{offer_id}','CategoriesControllers@updatesub')->name('admin.categories.updatesub');
        Route::get('deletesub/{offer_id}','CategoriesControllers@deletesub')->name('admin.categories.deletesub');
        Route::get('has-many','CategoriesControllers@getmany');
    });
    
    
    
    
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('brand','BrandsControllers@brand')->name('admin.brand');  
        Route::post('store','BrandsControllers@store')->name('admin.brands.store');
        Route::get('editbrand/{offer_id}','BrandsControllers@editbrand'); 
        Route::post('updatebrand/{offer_id}','BrandsControllers@updatebrand')->name('admin.brand.updatebrand');
        Route::get('deletebrand/{offer_id}','BrandsControllers@deletebrand')->name('admin.brand.deletebrand');
        Route::get('allproducts','BrandsControllers@allproducts')->name('admin.allproducts');
        Route::get('stockoutproducts','BrandsControllers@stockoutproducts')->name('admin.stockoutproducts'); 
        Route::get('productreviews','BrandsControllers@productreviews')->name('admin.productreviews');
        Route::get('export','BrandsControllers@export')->name('admin.export');
        Route::get('addbrand','BrandsControllers@addbrand');
        Route::post('store','BrandsControllers@store')->name('admin.brands.store'); 
    });
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('orders','OrdersControllers@orders')->name('admin.orders'); 
        Route::get('pending','OrdersControllers@pending')->name('admin.pending'); 
        Route::get('progress','OrdersControllers@progress')->name('admin.progress'); 
        Route::get('delivered','OrdersControllers@delivered')->name('admin.delivered'); 
        Route::get('canceled','OrdersControllers@canceled')->name('admin.canceled'); 
        Route::get('transactions','OrdersControllers@transactions')->name('admin.transactions'); 
        Route::get('list','OrdersControllers@list')->name('admin.list'); 
    });
    
    
    
    
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('coupons','EcommerceControllers@coupons')->name('admin.coupons'); 
        Route::get('createcoupons','EcommerceControllers@createcoupons');
        Route::get('editcoupons/{offer_id}','EcommerceControllers@editcoupons'); 
        Route::post('updatecoupons/{offer_id}','EcommerceControllers@updatecoupons')->name('admin.ecommerce.updatecoupons');
        Route::get('deletecoupons/{offer_id}','EcommerceControllers@deletecoupons')->name('admin.ecommerce.deletecoupons');
    
        Route::get('shipping','EcommerceControllers@shipping')->name('admin.shipping');
        Route::post('storeshipping','EcommerceControllers@storeshipping')->name('ecommerce.storeshipping');
        Route::get('editshipping/{offer_id}','EcommerceControllers@editshipping'); 
        Route::post('updateshipping/{offer_id}','EcommerceControllers@updateshipping')->name('admin.ecommerce.updateshipping');
        Route::get('deleteshipping/{offer_id}','EcommerceControllers@deleteshipping')->name('admin.ecommerce.deleteshipping');
    
        Route::get('state','EcommerceControllers@state')->name('admin.state');
        Route::get('editstate/{offer_id}','EcommerceControllers@editstate'); 
    
        Route::post('updatestate/{offer_id}','EcommerceControllers@updatestate')->name('admin.ecommerce.updatestate');
        Route::get('deletestate/{offer_id}','EcommerceControllers@deletestate')->name('admin.ecommerce.deletestate'); 
     
        Route::get('tax','EcommerceControllers@tax')->name('admin.tax');
        
        Route::post('store','EcommerceControllers@store')->name('ecommerce.storeco');
        Route::get('createshipping','EcommerceControllers@createshipping'); 
        Route::get('createstate','EcommerceControllers@createstate'); 
        Route::post('storestate','EcommerceControllers@storestate')->name('ecommerce.storestate');
        Route::get('createtax','EcommerceControllers@createtax'); 
        Route::post('storetax','EcommerceControllers@storetax')->name('ecommerce.storetax');
    
        Route::get('edittax/{offer_id}','EcommerceControllers@edittax'); 
        Route::post('updatetax/{offer_id}','EcommerceControllers@updatetax')->name('admin.ecommerce.updatetax');
        Route::get('deletetax/{offer_id}','EcommerceControllers@deletetax')->name('admin.ecommerce.deletetax');
        
    });
    
    
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('tickets','TicketsControllers@tickets')->name('admin.tickets');
        Route::get('create','TicketsControllers@create');  
        Route::post('store','TicketsControllers@store')->name('ecommerce.store');
        
    });
    
    
    
    
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('categories','FapsControllers@categories')->name('admin.categories');
        Route::get('contents','FapsControllers@contents')->name('admin.contents');
        Route::get('createcategories','FapsControllers@createcategories'); 
        Route::get('createcontents','FapsControllers@createcontents'); 
       
     
        
    });
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('blogs','BlogsControllers@blogs')->name('admin.blogs');
        Route::get('index','BlogsControllers@index')->name('admin.index');
        Route::get('createblo','BlogsControllers@createblo'); 
        Route::get('createblogs','BlogsControllers@createblogs'); 
        Route::get('email','BlogsControllers@email');
     
        
    });
    
    
    
    
    
    Route::group(['prefix' => 'admin'], function () {
      
        Route::get('role','UsersControllers@role')->name('admin.role');
        Route::get('createrole','UsersControllers@createrole'); 
        Route::get('user','UsersControllers@user')->name('admin.user');
        Route::get('createuser','UsersControllers@createuser'); 
        Route::get('email','UsersControllers@email')->name('admin.email');
     
        
    });
    

});



Route::group(['prefix' => 'admin' , 'middleware' => 'guest:admin'], function () {
  
    Route::get('loginadmin','Admin\LoginController@getLogin')->name('get.admin.login');
    Route::post('loginadmin','Admin\LoginController@login')->name('admin.login');

 
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'passwords'], function () {

    Route::get('forgotpass','User\PagesControllers@forgotpass')->name('user.forgotpass');
  
    Route::get('resetpass','User\PagesControllers@resetpass')->name('user.resetpass');
    Route::get('signin','User\PagesControllers@signin')->name('user.signin');
    Route::get('singup','User\PagesControllers@singup')->name('user.singup');

  
});



