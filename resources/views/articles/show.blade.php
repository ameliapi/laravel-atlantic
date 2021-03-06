@extends('layouts.app')

@section('content')

    <div class="heroTop">
        <div class="col-sm-6">
            <img class="avatarLeft" src="<?php echo $article->image; ?>" alt=""/><br/><br/>
            <h4>{{ $article->title }}</h4><br/>
            {{ $article->updated_at->toFormattedDateString() }}<br/>
            <strong>Abstract: </strong>
            {{ $article->abstract }}<br/><br/>
            {{ $article->content }}<br/><br/>
            
            <br/>

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

            <br/>

        	<div class="card">
        		<div class="card-block">
        			<form method="POST" action="/articles/{{ $article->id }}/comments">
        				{{ csrf_field() }}
        				<div class="form-group">
        					<textarea name="content" class="form-control" placeholder="Add your comment here"></textarea>
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