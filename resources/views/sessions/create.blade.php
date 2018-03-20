@extends('layouts.app')

@section('content')

	<div class="col-sm-6 container">

		<h2> Sign up your account </h2>

		<form method="POST" action="/signup">
			
			{{ csrf_field() }}

			<div class="form-group">
	            <label for="username">username</label>
	            <input type="text" class="form-control" id="username" name="username">
	            <small id="usernameHelp" class="form-text text-muted">greater than 3 chars</small>
	        </div>

			<div class="form-group">
	            <label for="email">Email</label>
	            <input type="email" class="form-control" id="email" name="email">
	            <small id="emailHelp" class="form-text text-muted">enter a valid email</small>
	        </div>

			<div class="form-group">
	            <label for="password">Password</label>
	            <input type="password" class="form-control" id="password" name="password">
	            <small id="passwordHelp" class="form-text text-muted">use a strong password</small>
	        </div>

			<div class="form-group">
	            <label for="password_conf">Confirm Password</label>
	            <input type="password" class="form-control" id="password_conf" name="password_conf">
	            <small id="pswdConfHelp" class="form-text text-muted">Confirm your password</small>
	        </div>

	        <div class="form-group">
	        	<button type="submit" class="btn btn-secondary">Sign Up</button>
	        </div>

		</form>

	</div>

    
@endsection