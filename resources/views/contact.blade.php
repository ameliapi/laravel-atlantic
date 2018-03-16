@extends('layout')

@section('content')

    <h1>Contact Form</h1>

    <form method="post">
    	<?php echo csrf_field(); ?>
    	<input type="text" name="name" placeholder="name" /><br/>
    	<input type="text" name="phone" placeholder="phone number" /><br/>
    	<input type="email" name="email" placeholder="email address" /><br/>
    	Enter your message here: <br/>
    	<textarea rows="8" cols="21" name="message" placeholder="message"></textarea><br/>
    	<input type="submit" name="" value="submit" />
    </form>

    <h1> Contact Information </h1>
    
@endsection
