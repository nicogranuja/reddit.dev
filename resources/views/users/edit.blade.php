@extends('layouts.master')

@section('title')
	Create a user
@stop

@section('content')
	<div>
		<a href="/users" title=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>	
	</div>
	<form method="POST" action="{{action('UsersController@update', $user->id)}}">
		<div class="form-group">
			{!! csrf_field() !!}
			{!! method_field('PUT')!!}
		</div>

	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name') == null ? $user->name : old('name')}}">
	  </div>
	  @if($errors->has('name'))
			<div class="alert alert-danger">
				{{$errors->first('name')}}
			</div>
		@endif

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <textarea class="form-control" rows="3" name="email" placeholder="Email" >{{old('email') == null ? $user->email : old('email')}}</textarea>
	  </div>
	  @if($errors->has('email'))
			<div class="alert alert-danger">
				{{$errors->first('email')}}
			</div>
		@endif

	 <div class="form-group">
	    <label for="">Password</label>
	    <input type="password" class="form-control" name="password" placeholder="Password" value="">
	  </div>
	  @if($errors->has('password'))
			<div class="alert alert-danger">
				{{$errors->first('password')}}
			</div>
		@endif

	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<form action="{{action('UsersController@destroy', $user->id)}}" method="POST" >
		{!! csrf_field() !!}
		{!! method_field('DELETE')!!}
		
		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
@stop