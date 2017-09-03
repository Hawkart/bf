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

Route::get('/rss', '\App\Acme\Helpers\RoboforexHandler@rssParse');

Route::get('/calendar', 'PageController@calendar')->name('calendar');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::post('/contacts', 'PageController@postContacts')->name('contact_form');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/about/teachers', 'PageController@teachers')->name('teachers');

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
 * Forecasts
 */
Route::get('/forecasts', 'ForecastController@index')->name('forecasts');
Route::get('/forecasts/{slug}', 'ForecastController@show')->name('forecast');

/**
 * Strategies
 */
Route::get('/study/strategies', 'StrategyController@index')->name('strategies');
Route::get('/study/strategies/{slug}', 'StrategyController@show')->name('strategy');


/**
 * Pages
 */
Route::get('/{param}', 'PageController@show')->name('page');