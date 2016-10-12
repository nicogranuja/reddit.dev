@extends('layouts.master')

@section('title')
	
@stop
Post Index
@section('content')

	<h1>Post</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Post#</th>
				<th>Title</th>
				<th>URL</th>
				<th>Content</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->url}}</td>
				<td>{{$post->content}}</td>
			</tr>
		</tbody>
	</table>
@stop