<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

   


    Route::prefix('admin')->name('dashboard.')->middleware(['auth'])->group(function () {
        Route::get('/','IndexController@index');
        Route::resource('index','IndexController');
        Route::resource('about','AboutController');
        Route::resource('contact','ContectController');
        Route::resource('service','ServiceController');
        Route::resource('service_feature','ServiceFeatureController');
        Route::resource('our_feature','OurFeatureController');
        Route::resource('comment_tittle','CommentTittleController');
        Route::get('comment','CommentTittleController@comment')->name('comment.index');
        Route::resource('category','CategoryController');
        Route::resource('product','ProductController');
        Route::resource('plan','PlanController');
        Route::resource('post','PostController');
        Route::resource('footer','FooterController');
});


