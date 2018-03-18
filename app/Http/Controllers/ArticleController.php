<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;
use DB;


class ArticleController extends Controller
{
    public function articles($id){

    	$article = DB::table('articles')->find($id);

    	dd($article);

    	return view('articles.show', compact('article'));
    }
}
