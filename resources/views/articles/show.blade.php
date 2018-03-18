@extends('layouts.app')

@section('content')

    <div class="heroTop">
        <ul>
            <div class="artL">
                <img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/><br/><br/>
                <h4>{{ $article->title }}</h4><br/>             
                {{ $article->abstract }}<br/><br/>
                {{ $article->content }}<br/>  
            </div>
    </div>

@endsection