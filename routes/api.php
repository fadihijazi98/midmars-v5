<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::middleware('auth-api')->group(function () {
//    Route::get('/', '');
//    Route::get('/teacher', '');
//    Route::get('/admin', '');
//    Route::get('/student', '');
//});
