<?php

use Illuminate\Support\Facades\Route;



// just temp. for test.
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});

//Auth Route's
Auth::routes(['verify' => true]);
Route::get('/{any}','AppController@index')->where('any', '.*');



/*
Route::get('/home', 'HomeController@index')
    ->name('home');
*/



/*
Route::namespace('Admin')->middleware('auth')->group(function () {
    dd('pick');
});

Route::namespace('Teacher')->middleware('auth')->group(function () {
    Route::resource('topic', 'TopicController');
    Route::resource('plan', 'PlanController');
    Route::resource('post', 'PostController');
    Route::resource('question', 'QuestionController');
});


// test route's
Route::namespace('Student')->middleware('auth')->group(function () {
    Route::get('/register/page2', 'TeachersPlansController@view');
    Route::get('/student/index', 'PostsController@view');
});


//Home Controller
Route::get('/change/password', 'HomeController@change_password_view')
    ->name('change_pass_view');
Route::post('/change/password', 'HomeController@change_password')
    ->name('change_pass');


//test ..
//Route::get('/plan/{id}/edit', 'PlanController@edit')->middleware('auth.basic');

//Route::post('/topic/insert', 'TopicController@store');

//plan as view js ...
Route::get('/teacher/{any}', function () {

});
Route::get('/student/{any}', function () {

});
Route::get('/admin/{any}', function () {

});
*/
