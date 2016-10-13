@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	<a href="{{action('PostsController@create')}}" title="" class="btn btn-primary">
		Create
	</a>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
	</thead>
	@foreach($posts as $post)
		<tbody>
			<tr>
				<td><a href="/posts/{{$post->id}}" title="">{{$post->title}}</a></td>
				<td>{{$post->url}}</td>
				<td>{{$post->content}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@stop