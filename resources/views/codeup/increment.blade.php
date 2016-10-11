@extends('layouts.master')
@section('title')
	<title>Increment</title>
@stop
@section('content')
	<p>{{$number}}</p>
	<a href=" {{action('HomeController@increment', $number)}}" >Increment again</a>
@stop