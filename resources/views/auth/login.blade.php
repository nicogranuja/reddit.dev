@extends('layouts.master')

@section('content')
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="jumbotron" style="width:90%">
					<h3 class="form-signin-heading" >Login</h3>
					<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}" class="form-signin">
						{{ csrf_field() }}
						<div class="form-group">
					    	<label for="email" >Email:</label>
					    	<input type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
					  	</div>
					  	@if($errors->has('email'))
							<div class="alert alert-danger">
								{{$errors->first('email')}}
							</div>
						@endif
						<div class="form-group">
					    	<label for="password">Password:</label>
					    	<input type="password" placeholder="Password" class="form-control" name="password">
					  	</div>
					  	@if($errors->has('password'))
							<div class="alert alert-danger">
								{{$errors->first('password')}}
							</div>
						@endif
					  	<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
		</div>
	</div>
@stop