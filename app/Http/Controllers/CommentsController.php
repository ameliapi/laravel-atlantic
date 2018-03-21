<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Article $article){

        if(!\Auth::check()) {
            return redirect('/login');
        }

    	$this->validate(request(), [
    		
    		'content' => 'required|min:3',

        ]);


        $article->addComment(
            Comment::create([

             'content' => request('content'),
             'user_id' => auth()->id(),
             'article_id' => $article->id,

         ]));

        return back(); 

    }


}