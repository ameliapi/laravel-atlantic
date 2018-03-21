@extends('layouts.app')

@section('content')

    <h2>@ {{ $user->name }}</h2><br>

    <div class="col-sm-8">
        <ul class="blog">
        @foreach ($user->articles as $article)
            <article>
                <li class="card">
                    <img class="avatarLeft" src="{{ $article->image }}" alt=""/><br/><br/>
                    <h4>{{ $article->title }}</h4><br/>
                    {{ $article->updated_at->toFormattedDateString() }}<br/>
                    <strong>Abstract: </strong>
                    {{ $article->abstract }}<br/><br/>
                    {{ $article->content }}<br/><br/>
                </li>
            </article>
        @endforeach
        </ul>
    </div>

    <br/>
                
    <h5>@ {{ $user->name }} commented: </h5>
    <div class="comments">
        <ul class="list-group">
        @foreach ($user->comments as $comment)    
            <li class="list-group-item">
                  {{ $comment->content }}<br/>
                  <strong>{{ $comment->created_at->diffForHumans() }} </strong>
            </li>
        @endforeach
        </ul>
    </div>

    <br/>

@endsection