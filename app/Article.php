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

    public function addComment(Comment $comment){

        $this->comments()->save($comment);

    }

}