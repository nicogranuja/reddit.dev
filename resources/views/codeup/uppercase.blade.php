@extends('layouts.master')

@section('title')
	<title>Increment</title>
@stop

@section('content')
	<p>{{$upperCase}}</p>
	<a href=" {{ action('HomeController@lowercase', $upperCase)}}" >Lower Case</a>
	<a href=" {{ action('HomeController@uppercase', $upperCase)}}" >Upper Case</a>
@stop