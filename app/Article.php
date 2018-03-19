<?php

namespace App;

use App\User;
use App\Comment;

class Article extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function comments() {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($content){

    	$this->comments()->create(compact('content'));

    	Comment::create([
    		'content' => $content,
    		'art_id'=>$this->id,

    	]);
    }
}