@extends('layouts.master')

@section('title')
	Create a Post
@stop

@section('content')
	<form method="POST" action="{{action('PostsController@update', 1)}}">
		<div class="form-group">
			{!! csrf_field() !!}
			{!! method_field('PUT')!!}
		</div>

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" name="title" class="form-control"  placeholder="Title" value="{{old('title')}}">
	  </div>

	  <div class="form-group">
	    <label for="url">URL</label>
	    <input type="text" class="form-control" name="url" placeholder="URL" value="{{old('url')}}">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <textarea class="form-control" rows="3" name="description" placeholder="Description" >{{old('description')}}</textarea>
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
@stop