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

// use Faker\Factory;

// class User{

// 	public $name;
// 	public $image;
// 	public $bio;
// 	public $date_joined;

// 	public function __construct($name, $image){
// 		$this->name = $name;
// 		$this->image = $image;
// 	}

// }

// class Article {

// 	public $user;
// 	public $time;
// 	public $title;
// 	public $header_img;
// 	public $abstract;
// 	public $content;

// 	public function __construct($user, $title, $header_img){
// 		$this->user = $user;
// 		$this->title = $title;
// 		$this->header_img = $header_img;
// 	}

// }

Route::get('/about', 'AboutController@index');

Route::get('/publish', 'PublishController@create');

Route::post('/publish', 'PublishController@store');

// Route::get('/articles/{article}', 'ArticleController@articles');

Route::get('/articles/{article}', function($id){

    	$article =  DB::table('articles')->find($id);

    	return view('articles.show', compact('article'));

});

Route::get('/', 'MainController@index'); 

// {

// 	$faker = Factory::create();

// 	$user1 = new User($faker->name, $faker->imageUrl());
// 	$user2 = new User($faker->name, $faker->imageUrl());
// 	$user3 = new User($faker->name, $faker->imageUrl());
// 	$user4 = new User($faker->name, $faker->imageUrl());
// 	$user5 = new User($faker->name, $faker->imageUrl());
// 	$user6 = new User($faker->name, $faker->imageUrl());
// 	$user7 = new User($faker->name, $faker->imageUrl());

// 	$article1 = new Article($user1, $faker->sentence, $faker->imageUrl());
// 	$article2 = new Article($user2, $faker->sentence, $faker->imageUrl());
// 	$article3 = new Article($user3, $faker->sentence, $faker->imageUrl());
// 	$article4 = new Article($user4, $faker->sentence, $faker->imageUrl());
// 	$article5 = new Article($user5, $faker->sentence, $faker->imageUrl());
// 	$article6 = new Article($user6, $faker->sentence, $faker->imageUrl());
// 	$article7 = new Article($user7, $faker->sentence, $faker->imageUrl());

// 	$data = [
// 		'users' => [$user1, $user2, $user3, $user4, $user5, $user6, $user7],
// 		'artLeft' => [$article1, $article2],
// 		'artCenter' => [$article3],
// 		'artRight' => [$article4, $article5, $article6, $article7],
// 	];

//     return view('welcome', $data);

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>