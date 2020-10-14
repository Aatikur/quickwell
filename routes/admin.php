<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login','LoginController@index')->name('admin.login_form');    
    Route::post('login', 'LoginController@adminLogin');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard'); 
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        
        // Testimonial
        Route::group(['namespace' => 'Testimonial'], function () {
            Route::get('/testimonial', 'TestimonialController@index')->name('admin.testimonial');
            Route::post('/store/testimonial', 'TestimonialController@store')->name('admin.store_testimonial');
            Route::get('/testimonial/list', 'TestimonialController@list')->name('admin.testimonial_list');
            Route::get('/testimonial/data', 'TestimonialController@show')->name('admin.ajax.testimonial_list');
            Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name('admin.testimonial_edit');
            Route::post('/testimonial/update', 'TestimonialController@update')->name('admin.update_testimonial');
            Route::get('/testimonial/delete/{id}', 'TestimonialController@destroy')->name('admin.testimonial_delete');
            Route::get('/testimonial/status/{id}/{status}', 'TestimonialController@status')->name('admin.testimonial_status');
        });

        // Carrier
        Route::group(['namespace' => 'Carrier'], function () {
            Route::get('/carrier', 'CarrierController@index')->name('admin.carrier');
            Route::post('/store/carrier', 'CarrierController@store')->name('admin.store_carrier');
            Route::get('/carrier/list', 'CarrierController@list')->name('admin.carrier_list');
            Route::get('/carrier/data', 'CarrierController@show')->name('admin.ajax.carrier_list');
            Route::get('/carrier/view/{id}', 'CarrierController@singleView')->name('admin.carrier_view');
            Route::get('/carrier/edit/{id}', 'CarrierController@edit')->name('admin.carrier_edit');
            Route::post('/carrier/update', 'CarrierController@update')->name('admin.update_carrier');
            Route::get('/carrier/delete/{id}', 'CarrierController@destroy')->name('admin.carrier_delete');
            Route::get('/carrier/status/{id}/{status}', 'CarrierController@status')->name('admin.carrier_status');
        });
        
        // Blog
        Route::group(['namespace' => 'Blog'], function () {
            Route::get('/blog', 'BlogsController@index')->name('admin.blog');
            Route::post('/store/blog', 'BlogsController@store')->name('admin.store_blog');
            Route::get('/blog/list', 'BlogsController@list')->name('admin.blog_list');
            Route::get('/posts/list', 'BlogsController@show')->name('admin.ajax.show_post');
            Route::get('/get/post/{id}','BlogsController@singlePost')->name('admin.post_view');
            Route::get('/edit/post/{id}','BlogsController@editPost')->name('admin.post_edit');
            Route::post('/update/post','BlogsController@updatePost')->name('admin.update_post');
            Route::get('/delete/post/{id}','BlogsController@deletePost')->name('admin.post_delete');
            Route::get('/status/post/{id}/{status}','BlogsController@statusPost')->name('admin.post_status');

            /** Category CK Editor Image Upload **/
            Route::post('ck-editor-image-upload','BlogsController@ckEditorImageUpload')->name('admin.ck_editor_image_upload');
        });
        
        // Order
        Route::group(['namespace' => 'Order'], function () {
            Route::get('/order', 'OrderController@index')->name('admin.order');
            Route::get('/order/list', 'OrderController@show')->name('admin.ajax.order_list');
            Route::get('/show/order/{id}', 'OrderController@showOrder')->name('admin.show_order');
            Route::get('/order/invoice/{id}', 'OrderController@orderInvoice')->name('admin.order_invoice');
            Route::get('/delete/order/{id}', 'OrderController@destroyOrder')->name('admin.delete_order');
        });

        // User
        Route::group(['namespace' => 'User'], function () {
            Route::get('/user', 'UserController@index')->name('admin.user');
            Route::get('/user/list', 'UserController@show')->name('admin.ajax.user_list');
            Route::get('/user/delete/{id}', 'UserController@destroyUser')->name('admin.delete_user');
        });
    });   
});