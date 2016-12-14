<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('about', function () {
//    return 'About me';
//});

Route::get('about', 'PublicController@about');
//Route::get('about/{me}', 'PublicController@about');
Route::resource('admin/article', 'ArticlesController');
Route::resource('category', 'CategoriesController');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('article','ArticlesController@index');