<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Article $article){

    	$this->validate(request(), ['comment' => 'required|min:3']);

    	$article->addComment(request('comment'));

    	return back();

    }

}