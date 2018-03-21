<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Comment;


class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

}