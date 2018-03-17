@extends('layout')

@section('content')

	<header class="">

		<div class = "logoContainer">
			<div class="logo">
				Your Atlantic
			</div>
		</div>

		<div class = "menuContainer">

			<li class="menu">Popular</li>
			<li class="menu">Latest</li>
			<li class="menu">Sections</li>
			<li class="menu">Magazine</li>

			<a href="/publish" class="btn btn-primary">Publish</a>
			<a href="/login" class="btn btn-primary">Login</a>
			<a href="/register" class="btn btn-primary">Register</a>
	 		<i class="fa fa-search" aria-hidden="true" style="color:white;"></i>

		</div>

	</header>

	<div class="heroLeft">
		<ul>
		    @foreach ($articles as $article)
		        <li class="artL">
		        	<img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/>
		            <h4>{{ $article->title }}</h4><br/>
		            {{ $article->updated_at->diffForHumans() }}<br/>
		            @ {{ $article->user->name }}<br/>	           
		            {{ $article->abstract }}<br/>
		            {{ $article->content }}<br/>         
		        </li>
		    @endforeach
		</ul>
	</div>

@endsection