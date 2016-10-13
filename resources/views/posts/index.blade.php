@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
	<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
			<th>Posted On:</th>
		</tr>
	</thead>
	@foreach($posts as $post)
		<tbody>
			<tr>
				<td><a href="/posts/{{$post->id}}" title="">{{$post->title}}</a></td>
				<td>{{$post->url}}</td>
				<td>{{$post->content}}</td>
				<td> {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>

	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop