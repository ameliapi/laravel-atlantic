<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Comment;
use Faker\Factory;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {

        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
        $faker = Factory::create();

        $users = User::all();
        $articles = Article::all();

        return view('articles.index', compact('users', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!\Auth::check()){
            return redirect('/login');
        }

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(!\Auth::check()) {
            return redirect('/login');
        }
        
        $this->validate(request(), [

            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required'
        ]);

        $faker = Factory::create();
        
        auth()->user()->publish(
            Article::create([

             'title' => request('title'),
             'abstract' => request('abstract'),
             'content' => request('content'),
             'image' => $faker->imageUrl(),
             'user_id' => auth()->id()

         ]));



            // new Article([
            //  'title' => request('title'),
            //  'abstract' => request('abstract'),
            //  'content' => request('content'),
            //  'image' => $faker->imageUrl()
        // ])


        // public function publish(Article $article){
        //     $this->articles()->save($article);
        // }


        // request(['title', 'abstract', 'content', 'image' => $faker->imageUrl()]))
        // );


        // Article::create([

        //     'title' => request('title'),
        //     'abstract' => request('abstract'),
        //     'content' => request('content'),
        //     'image' => $faker->imageUrl(),
        //     'user_id' => auth()->id()

        // ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
