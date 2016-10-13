@extends('layouts.master')

@section('title')
User {{$user->id}}	
@stop

@section('content')
	
	<h1>User</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
			</tr>
		</tbody>
	</table>
	<a href="/users/{{$user->id}}/edit" title="" class="btn btn-primary">
		Edit
	</a>

@stop