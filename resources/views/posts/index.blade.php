@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
	
	@foreach($posts as $post)
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="well show-box">
				<h3 class="text-center">
					{{ substr($post->title, 0,15) . "..."}}
				</h3>

				<span>Posted:</span><a href="{{action('UsersController@show',$post->user->id)}}" title="">{{$post->user->name}}
				</a>
				<div class="text-center">
					<a href="{{$post->url}}" title="">
						<img src="https://unsplash.it/230/?random" alt="">
					</a>
				</div>

				<div class="panel panel-default">
				  
				  <div class="panel-body text-center">
						{{ substr($post->content, 0,40) . "..."}}
				  </div>
				</div>

				<div class="">
					Posted on: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
				</div>
				<hr>
				<div class="">
					<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-default">
						Go to Post		
					</a>
				</div>

			</div>
		</div>	
	@endforeach

	<div class="text-center">
		{!! $posts->appends(['searchTitle' => Request::get('searchTitle')])->render() !!}
	</div>
@stop