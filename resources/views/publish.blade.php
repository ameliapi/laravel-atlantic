@extends('layout')

@section('content')

    <h2>Publish An Article</h2>

    <section class="publish">
    	<form method="post">
	    	<?php echo csrf_field(); ?>
	    	Enter the title: <br/>
	    	<input type="text" name="title" placeholder="title" /><br/>
	    	Enter the abstract: <br/>
	    	<input type="text" name="abstract" placeholder="abstract" /><br/>
	    	Enter your article: <br/>
	    	<textarea rows="15" cols="40" name="content" placeholder="content"></textarea><br/>
	    	<input type="submit" name="" value="submit" />
    	</form>
    </section>
    


    
@endsection
