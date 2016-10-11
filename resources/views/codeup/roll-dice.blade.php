@extends('layouts.master')
	@section('title')
		<title>Roll Dice</title>
	@stop

	@section('content')

		<h1 class="text-center">Let's see what we rolled...</h1>
		<ul class="list-group">
		@foreach($randomNum as $number)
			@if($number == $guess)
				<li class="list-group-item text-center">{{$number}} You Got it!</li>
			@else
				<li class="list-group-item text-center">{{$number}} </li>
			@endif
		@endforeach
		</ul>

		<h2 >Make another guess</h2>
		<ul >
			@for($i=1; $i<=6; $i++)
				<li ><a href="/rolldice/{!!$i!!}">Guess {{$i}}<a></li>
			@endfor
		</ul>

	@stop
