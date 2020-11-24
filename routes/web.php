<?php

use Illuminate\Support\Facades\Route;
// use  App\Http\Controllers\TestController;

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


 //Route::resource('blogs',BlogController::class);
 //Route::get('test','App\Http\Controllers\TestController@index');
 //Route::get('posts',[App\Http\Controllers\PostController::class,'index']);
//  Route::get('post','App\Http\Controllers\PostController@index');
//  Route::get('create','App\Http\Controllers\PostController@create');
 Route::resource('/posts','App\Http\Controllers\PostController');

 
