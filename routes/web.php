<?php

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

Route::get('/', 'HomeController@index')->name('home');

/**
 * Admin
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/**
 * Auth
 */
Auth::routes();
Route::get('/register/verify/{token}', 'Auth\RegisterController@verify'); 

/**
 * Articles
 */
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/{slug}', 'ArticleController@show')->name('article');

/**
 * Videos
 */
Route::get('/videos', 'VideoController@index')->name('videos');
Route::get('/videos/{slug}', 'VideoController@show')->name('video');

/**
 * Books
 */
Route::get('/study/books', 'BookController@index')->name('books');
Route::get('/study/books/{slug}', 'BookController@show')->name('book');

/**
 * Pages
 */
Route::get('/{param}', 'PageController@show')->name('page');