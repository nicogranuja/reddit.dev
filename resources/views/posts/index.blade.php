@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
	
	@foreach($posts as $post)
		<div class="col-sm-6 col-md-4">
			<div class="jumbotron">
				<h3>
					{{$post->title}}
				</h3>
				<a href="{{$post->url}}" title="">{{$post->url}}</a>

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Content</h3>
				  </div>
				  <div class="panel-body">
					{{$post->content}}
				  </div>
				</div>

				<div class="pull-right">
					Posted on: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
				</div>

				<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-primary">
					Go to Post		
				</a>

			</div>
		</div>	
		
	@endforeach

	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop