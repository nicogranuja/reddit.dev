@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	
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
				<td>
					<a href="{{action('UsersController@edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
					<a href="{{action('UsersController@destroy', $user->id)}}" class="btn btn-danger btn-sm">Delete</a>
				</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>

	<div class="text-center">
		{!! $users->render() !!}
	</div>
@stop