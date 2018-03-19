<?php

namespace App;

use App\Article;
use App\User;

class Comment extends Model
{
    public function article(){
    	return $this->belongsTo(Article::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
