<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

  // Get In Touch API
  Route::group(['namespace' => 'Frontend'], function () {
        Route::group(['namespace' => 'GetInTouch'], function () {
            Route::post('get/in/touch', 'GetInTouchController@send')->name('web.ajax.getintouch');
        });
  });
