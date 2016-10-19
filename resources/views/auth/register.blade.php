@extends('layouts.master')

@section('content')
	@if(count($errors))
		<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
		</div>
	@endif
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="jumbotron" style="width:90%">
				<h3 class="form-signin-heading" >Register</h3>
				<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
					{{ csrf_field() }}
					<div class="form-group">
				    	<label for="name">Name:</label>
				    	<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
				  	</div>
					<div class="form-group">
				    	<label for="email">Email:</label>
				    	<input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
				  	</div>
					<div class="form-group">
				    	<label for="password">Password:</label>
				    	<input type="password" class="form-control" placeholder="Password" name="password">
				  	</div>
					<div class="form-group">
				    	<label for="password_confirmation">Password Confirmation:</label>
				    	<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
				  	</div>
				  	<button type="submit" class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
@stop