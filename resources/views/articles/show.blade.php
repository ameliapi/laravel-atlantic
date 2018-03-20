@extends('layouts.app')

@section('content')

    <div class="heroTop">
        <div class="col-sm-6">
            <img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/><br/><br/>
            <h4>{{ $article->title }}</h4><br/>
            {{ $article->updated_at->toFormattedDateString() }}<br/>
            Abstract: {{ $article->abstract }}<br/>
            {{ $article->content }}<br/>
            

            <div class="comments">
            	<ul class="list-group">
            	@foreach ($article->comments as $comment)
	            	<article>
	            		<li class="list-group-item">
	            			@ {{ $comment->user->name }} commented:
	            			  {{ $comment->content }}<br/>
                              <strong>{{ $comment->created_at->diffForHumans() }} </strong>
	            		</li>
	            	</article>


        		@endforeach
        		</ul>
        	</div>


        	<div class="card">
        		<div class="card-block">
        			<form method="POST" action="/articles/{{ $article->id }}/comments">
        				{{ csrf_field() }}
        				<div class="form-group">
        					<textarea name="content" class="form-control"></textarea>
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