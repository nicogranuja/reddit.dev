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
						<img src="{{$post->url}}" alt="">
					</a>
				</div>

				<div class="panel panel-default">
				  
				  <div class="panel-body text-center">
						{{ substr($post->content, 0,30) . "..."}}
				  </div>
				</div>

				<div class="">
					Posted on: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
				</div>
				<hr>
				<div class="">
					<a href="{{action('PostsController@show', $post->id)}}" title="" class="btn btn-primary">
						Go to Post		
					</a>
				</div>
				
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

				<div class="col-md-offset-8">
					<h3>
						
						<label class="label label-info">
							Score:<i class="glyphicon glyphicon-fire"></i> {{$post->voteScore()}}
						</label>
					</h3>
					
				</div>
			

			</div>
		</div>	
	@endforeach

	<div class="text-center">
		{!! $posts->appends(['searchTitle' => Request::get('searchTitle')])->render() !!}
	</div>
@stop