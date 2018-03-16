<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;

class PublishController extends Controller
{
    public function create(){
    	if(!\Auth::check()){
    		return redirect('/login');
    	}

    	return view('publish');
    }

    public function store(){
    	if(!\Auth::check()){
    		return redirect('/login');
    	}

    	$request = request();
    	$currentUser = $request->user();
    	$data = $request->all();

    	$article = new Article();
        $article->title = $data['title'];
        $article->abstract = $data['abstract'];
        $article->content = $data['content'];

    	$article->user_id = $currentUser->id;
    	$article->save();

    	return redirect('/');

    }


}
