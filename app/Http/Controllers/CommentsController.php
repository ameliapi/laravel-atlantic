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

    	// $article->addComment(request('content')); 

     //    $this->comments()->create(compact('content'));

    	// return redirect('/');  


        $article->addComment(
            Comment::create([

             'content' => request('content'),
             'user_id' => auth()->id(),
             'article_id' => $article->id,

         ]));

        return back(); 

    }
        
        
        // auth()->user()->publish(
        //     Article::create([

        //      'title' => request('title'),
        //      'abstract' => request('abstract'),
        //      'content' => request('content'),
        //      'image' => $faker->imageUrl(),
        //      'user_id' => auth()->id()

        //  ]));


}