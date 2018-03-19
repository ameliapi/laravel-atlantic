@extends('layouts.app')

@section('content')

	<div class="blog-header">
    	<div class="container">
        	<h2 class="blog-title">Create An Article</h2>
        	<p class="lead blog-description">Publish your articles</p>
      	</div>
    </div>
    	
<!--     	<form method="post">
	    	
	    	Enter the title: <br/>
	    	<textarea rows="1" cols="100" name="title" placeholder="title"></textarea><br/>
	    	Enter the abstract: <br/>
	    	<textarea rows="5" cols="100" name="abstract" placeholder="abstract"></textarea><br/>
	    	Enter your article: <br/>
	    	<textarea rows="15" cols="100" name="content" placeholder="content"></textarea><br/>
	    	<input type="submit" name="" value="submit" />
    	</form> -->

	<div class="container">

      	<div class="row">

        	<div class="col-sm-8 blog-main">


    			<form method="POST" action="/articles/create">

			        {{ csrf_field() }}

			        <div class="form-group">
			            <label for="title">Title</label>
			            <input type="text" class="form-control" id="title" name="title">
			            <small id="emailHelp" class="form-text text-muted">Give your article an attractive title</small>
			        </div>

			        <div class="form-group">
			            <label for="abstract">Abstract</label>
			            <input type="text" class="form-control" id="abstract" name="abstract">
			            <small id="emailHelp" class="form-text text-muted">Summarise your article</small>
			        </div>

			        <div class="form-group">
			            <label for="content">Content</label>
			            <textarea type="longtext" class="form-control" id="content" name="content"></textarea>
			        </div>

        <!-- <div class="form-group">
            <label for="exampleFormControlFile1">Upload your avantar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div> -->

			        <div class="form-group">
			        	<button type="submit" class="btn btn-secondary">Submit</button>
			        </div>


			        <div class="form-group">
				        @include('partials.error')
				    </div>

				</form>
			</div>
		</div>
	</div>
    
@endsection