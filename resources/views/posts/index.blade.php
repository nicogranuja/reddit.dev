@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
	
	@foreach($posts as $post)
	
		<div class="col-sm-6 col-md-4">
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
				<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-primary text-center">
					Go to Post		
				</a>

			</div>
		</div>	
		
	@endforeach

	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop