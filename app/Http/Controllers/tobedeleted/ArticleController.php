<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;
use Faker\Factory;


class ArticleController extends Controller
{
	public function index() {

		$faker = Factory::create();

        $users = User::all();
        $articles = Article::all();

        $data = [
            'users' => $users,
            'articles' => $articles
        ];

        return view('welcome', $data);
    }

    public function show(Article $article){

    	// $article = Article::find($id); 

    	return view('articles.show', compact('article'));
    }

    public function store(){

    	$article = new Article();

    }

}