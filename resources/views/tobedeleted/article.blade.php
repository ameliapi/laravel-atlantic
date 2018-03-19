@extends('layout')

@section('content')

    <div class="heroTop">
        <li class="artL">
        	<img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/>
            <h4>{{ $article->title }}</h4><br/>
            {{ $article->updated_at->diffForHumans() }}<br/>
            @ {{ $article->user->name }}<br/>          
            {{ $article->abstract }}<br/> 
            {{ $article->content }}<br/>  
        </li>
	</div>

@endsection