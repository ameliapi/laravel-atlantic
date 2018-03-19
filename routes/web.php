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

Route::get('/', 'ArticlesController@index'); 

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles/create', 'ArticlesController@store');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/{article}/comments', 'CommentsController@create');

Route::post('/articles/{article}/comments', 'CommentsController@store');

Route::get('/reg', 'RegistrationController@create');

Route::get('/login', 'SessionsController@create');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');