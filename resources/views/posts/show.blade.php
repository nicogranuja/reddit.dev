@extends('layouts.master')

@section('title')
Post {{$post->id}}	
@stop

@section('content')

	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<div class="jumbotron">
			<h3 class="text-center">
				{{ substr($post->title, 0,15) . "..."}}
			</h3>

			<a href="{{$post->created_by}}" title="">Posted by: {{$post->created_by}}</a>

			<a href="{{$post->url}}" title="">
				<img src="{{$post->url}}" alt="">
			</a>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Content</h3>
			  </div>
			  <div class="panel-body">
					{{ substr($post->content, 0,40) . "..."}}
			  </div>
			</div>

			<div class="pull-left">
				Posted on: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
			</div>
			<hr>
			<p>
				<a href="/posts/{{$post->id}}/edit" title="" class="btn btn-primary">
					Edit
				</a>
			</p>

		</div>
	</div>	

@stop