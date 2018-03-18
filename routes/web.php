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

use App\Models\Article;


Route::get('/about', 'AboutController@index');

Route::get('/publish', 'PublishController@create');

Route::post('/publish', 'PublishController@store');

Route::get('/articles/{article}', 'ArticleController@show');

Route::get('/', 'MainController@index'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');