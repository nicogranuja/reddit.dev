<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>@yield('title')</title>
</head>
<body>
	
	@include('partials.navbar')

	<div>
		@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>
					{{session('SUCCESS_MESSAGE')}}	
				</p>
			</div>
		@endif
	</div>
	
	<div class="container">
			@yield('content')
	</div>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>