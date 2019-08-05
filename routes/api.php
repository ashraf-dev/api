<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','ProductController');
//products/11/reviews
Route::group(['prefix'=>'products'],function(){
      Route::apiResource('/{product}/reviews','ReviewController');
});