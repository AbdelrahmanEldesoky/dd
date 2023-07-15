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


    Route::get('/', 'Front\HomeController@index')->name('index');
    Route::get('about', 'Front\AboutController@index')->name('about');
    Route::get('privacy', 'Front\PrivacyController@index')->name('privacy');
    Route::get('service', 'Front\ServiceController@index')->name('service');
    Route::get('contact', 'Front\ContactController@index')->name('contact');
    Route::get('product/{id?}', 'Front\ProductController@index')->name('product');
    Route::get('product_id/{id}', 'Front\ProductController@product_id')->name('product_id');
    Route::get('feature', 'Front\FeatureController@index')->name('feature');
    Route::get('team', 'Front\TeamController@index')->name('team');
    Route::get('comment_get', 'Front\CommentController@index')->name('comment_get');
    Route::get('done', 'Front\CommentController@done')->name('done');
    Route::post('comment', 'Front\CommentController@store')->name('comment');
    Route::get('plan/{id}', 'Front\PlanController@index')->name('plan');
    
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

