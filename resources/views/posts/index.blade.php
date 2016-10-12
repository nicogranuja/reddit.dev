@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	@foreach($posts as $post)
		<p>{{$post}}</p>
	@endforeach
@stop