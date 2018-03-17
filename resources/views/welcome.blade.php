@extends('layout')

@section('content')

	<header class="">

		<div class = "logoContainer">
			<a href="/" class="logo btn">Your Atlantic</a>
		</div>

		<div class = "menuContainer">

			<li class="menu btn btn-secondary">Popular</li>
			<li class="menu btn btn-secondary">Latest</li>
			<li class="menu btn btn-secondary">Sections</li>

			<a href="/publish" class="menu btn btn-secondary">Publish</a>
			<a href="/login" class="menu btn btn-secondary">Login</a>
			<a href="/register" class="menu btn btn-secondary">Register</a>
	 		<i class="fa fa-search" aria-hidden="true" style="color:white;"></i>

		</div>

	</header>

	<div class="heroTop">
		<ul>
		    @foreach ($articles as $article)
		        <li class="artL">
		        	<img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/>
		            <a href="/"><h4>{{ $article->title }}</h4></a><br/>
		            {{ $article->updated_at->diffForHumans() }}<br/>
		            @ {{ $article->user->name }}<br/>	           
		            {{ $article->abstract }}<br/>
		            {{ $article->content }}<br/>         
		        </li>
		    @endforeach
		</ul>
	</div>

@endsection