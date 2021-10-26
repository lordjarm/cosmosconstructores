<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href={{asset('favicon.ico')}}>
		<title>Login Cosmos Constructores</title>
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body >
		<div class="container">
		
			@if (session()->has('flash'))
				<div class="div alert alert-info">{{ session('flash') }}</div>
			@endif
			@yield('content')
			
		</div>
	</body>
</html>