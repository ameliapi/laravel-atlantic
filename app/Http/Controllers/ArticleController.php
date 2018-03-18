<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;

class ArticleController extends Controller
{
    public function show(Article $article){

    	// $article = Article::find($id); 

    	return view('articles.show', compact('article'));
    }

}