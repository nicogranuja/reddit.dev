@extends('layouts.master')

@section('title')
Post {{$post->id}}	
@stop

@section('content')

	<div class="col-sm-6 col-md-4 col-md-offset-1">
		<div class="jumbotron" style="width:250%">
			
			<h3 class="text-center">
				{{ $post->title}}
			</h3>
			<span>Posted by:</span>
			<a href="{{action('UsersController@show',$post->user->id)}}" title=""> {{$post->user->name}}</a>
			<hr>
			<div class="col-sm-offset-3">
				<a href="{{$post->url}}" title="">
					<img src="{{$post->url}}" alt="" class="img img-responsive img-show-post">
				</a>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Content</h3>
			  </div>
			  <div class="panel-body">
					{{ $post->content}}
			  </div>
			</div>

			<div class="pull-left">
				Posted: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
			</div>
			<br>
			@if(Auth::check())
				<p>
					<a href="{{action('PostsController@edit', $post->id)}}" title="" class="btn btn-primary">
							Edit
					</a>
				</p>
			@endif

			<form action="{{action('PostsController@setVotes')}}" method="POST" class="pull-left">
					{!!csrf_field()!!}
					<input type="" name="vote" value="1" hidden>
					<input type="" name="post_id" value={{$post->id}} hidden>

					<button type="submit" class="btn btn-default btn-md">
						<i class="fa fa-thumbs-o-up" aria-hidden="true">{{$post->upvotes->count()}}</i>
					</button>
				</form>
				<form action="{{action('PostsController@setVotes')}}" method="POST" class="">
					{!!csrf_field()!!}
					<input type="" name="vote" value="-1" hidden>
					<input type="" name="post_id" value={{$post->id}} hidden>
					

					<button type="submit" class="btn btn-default btn-md">
						<i class="fa fa-thumbs-down" aria-hidden="true">{{$post->downvotes->count()}}</i>
					</button>

					
			</form>

		</div>
	</div>	

@stop