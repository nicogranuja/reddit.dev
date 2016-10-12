@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	<table class="table table-striped">
	<thead>
		<tr>
			<th>Post#</th>
			<th>Title</th>
			<th>URL</th>
			<th>Content</th>
		</tr>
	</thead>
	@foreach($posts as $post)
		<tbody>
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->url}}</td>
				<td>{{$post->content}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@stop