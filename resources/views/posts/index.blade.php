@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
	
	@foreach($posts as $post)
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="well show-box">
				<h3 class="text-center">
					{{ substr($post->title, 0,15) . "..."}}
				</h3>

				<span>Posted:</span><a href="{{action('UsersController@show',$post->user->id)}}" title="">{{$post->user->name}}
				</a>

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
				<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-primary text-center">
					Go to Post		
				</a>

				<hr>
			</div>
		</div>	
	@endforeach

	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop