@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	<a href="{{action('UsersController@create')}}" title="" class="btn btn-primary">
		Create
	</a>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>
	</thead>
	@foreach($users as $user)
		<tbody>
			<tr>
				<td><a href="/users/{{$user->id}}" title="">{{$user->id}}</a></td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>
@stop