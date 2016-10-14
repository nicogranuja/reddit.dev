<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>@yield('title')</title>
</head>
<body>
	
	@include('partials.navbar')

	@include('partials.error-success')

	<div class="container">
			@yield('content')
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>