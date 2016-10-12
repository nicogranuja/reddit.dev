@extends('layouts.master')

@section('title')
	Create a Post
@stop

@section('content')
	<form method="POST" action="{{action('PostsController@store')}}">
		<div class="form-group">
			{!! csrf_field() !!}
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
	    <label for="content">Content</label>
	    <textarea class="form-control" rows="3" name="content" placeholder="content" >{{old('content')}}</textarea>
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
@stop