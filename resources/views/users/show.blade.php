@extends('layouts.master')

@section('title')
User {{$user->id}}	
@stop

@section('content')
	
	<h1>User</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Member since</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at->diffForHumans()}}</td>
				
			</tr>
		</tbody>
	</table>
	@if(Auth::id() == $user->id)
		<a href="{{action('UsersController@edit', $user->id)}}" title="" class="btn btn-primary">
			Edit Profile
		</a>
	@endif
	<br>
	<h3>Posts: {{count($user->posts) ? count($user->posts) : "No posts found."}}</h3>
	@if(count($user->posts))
		<h4>Posts Score: {{$user->getTotalScore($user->posts)}}</h4>
	@endif
	<hr>
	@foreach($user->posts as $post)
		@if(count($user->posts) > 8)
			<div class="col-xs-12 col-sm-6 col-md-3">
		@elseif(count($user->posts) < 7 && count($user->posts) > 4)
			<div class="col-xs-12 col-sm-6 col-md-4">
		@else
			<div class="col-xs-12 col-md-6">
		@endif
			<div class="well show-box">
			
				<h3 class="text-center">
					{{ substr($post->title, 0,20)."..."}}
				</h3>
				<div class="">
					<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-default">
						Go to Post		
					</a>
				</div>
				<hr>

				<div class="{{(count($user->posts)>1 ? "col-md-offset-1" : "col-md-offset-")}}">
					<a href="{{$post->url}}" title="">
						<img src="{{$post->url}}" alt="" class="img img-responsive img-show-post">
					</a>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Content</h3>
				  </div>
				  <div class="panel-body">
						{{ substr($post->content, 0, 100) . "..."}}
				  </div>
				</div>

				<div class="pull-left">
					Posted: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
				</div>
				
				
				<hr>
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

	@endforeach


@stop