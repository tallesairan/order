<?php

// Resource routes  for order
Route::group(['prefix' => set_route_guard('web').'/order'], function () {
    Route::resource('order', 'OrderResourceController');
});

// Public  routes for order
Route::get('order/popular/{period?}', 'OrderPublicController@popular');
Route::get('orders/', 'OrderPublicController@index');
Route::get('orders/{slug?}', 'OrderPublicController@show');

