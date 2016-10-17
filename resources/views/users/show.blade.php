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
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				
			</tr>
		</tbody>
	</table>
	<a href="{{action('UsersController@edit', $user->id)}}" title="" class="btn btn-primary">Edit User</a>
	<br>
	<h3>Posts: {{count($user->posts) ? count($user->posts) : "No posts found."}}</h3>
	<hr>
	@foreach($user->posts as $post)

		<div class="col-md-6">
			<div class="well show-box">
			
				<h3 class="text-center">
					{{ $post->title}}
				</h3>
				
				<hr>
				<div class="col-md-offset-3">
					<a href="{{$post->url}}" title="">
						<img src="{{$post->url}}" alt="" class="img img-responsive">
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
				<br>
				@if(Auth::check())
					<p>
						<a href="/posts/{{$post->id}}/edit" title="" class="btn btn-primary">
							Edit
						</a>
					</p>
				@endif

			</div>
		</div>

	@endforeach


@stop