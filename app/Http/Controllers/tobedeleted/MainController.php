<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\User;
use Faker\Factory;

class MainController extends Controller
{
    public function index() {

		$faker = Factory::create();

        $users = User::all();
        $articles = Article::all();

        $data = [
            'users' => $users,
            'articles' => $articles
        ];

        return view('welcome', $data);
    }
    
}