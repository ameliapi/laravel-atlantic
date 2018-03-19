@extends('layouts.app')

@section('content')

    <div class="heroTop">
        <div class="col-sm-6">
            <img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/><br/><br/>
            <h4>{{ $article->title }}</h4><br/>             
            {{ $article->abstract }}<br/><br/>
            {{ $article->content }}<br/>
            

            <div class="comments">
            	<ul class="list-group">
            	@foreach ($article->comments as $comment)
            		<li class="list-group-item">
            			<strong>{{ $comment->created_at->diffForHumans() }}:&nbsp; </strong> 
            		
            			{{ $comment->comment }}
            		</li>
        		@endforeach
        		</ul>
        	</div>


        	<div class="card">
        		<div class="card-block">
        			<form method="POST" action="/articles/{{ $article->id }}/comments">
        				{{ csrf_field() }}
        				<div class="form-group">
        					<textarea name="comment" class="form-control"></textarea>
        				</div>
        				<div class="form-group">
        					<button type="submit" class="btn btn-secondary">Add Comment</button>
        				</div>
        			</form>
        			@include('partials.error')
        		</div>
        	</div>
		</div>
	</div>

@endsection