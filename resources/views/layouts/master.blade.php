<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Laravel - Atlantic</title>

		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>

		@yield('content')

		@include('partials.footer')

	<script src="{{ asset('js/app.js') }}"></script>
	
</body>
</html>