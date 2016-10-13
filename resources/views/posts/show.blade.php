@extends('layouts.master')

@section('title')
Post {{$post->id}}	
@stop

@section('content')

	<h1>Post</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$post->title}}</td>
				<td>{{$post->url}}</td>
				<td>{{$post->content}}</td>
			</tr>
		</tbody>
	</table>
	<a href="/posts/{{$post->id}}/edit" title="" class="btn btn-primary">
		Edit
	</a>

@stop