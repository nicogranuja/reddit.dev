@extends('layouts.master')

@section('title')
	Increment
@stop
@section('content')
	<p>{{$number}}</p>
	<a href=" {{action('HomeController@increment', $number)}}" >Increment</a>
	<a href=" {{action('HomeController@decrement', $number)}}" >Decrement</a>
@stop