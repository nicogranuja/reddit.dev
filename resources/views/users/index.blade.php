@extends('layouts.master')

@section('title')
	Index
@stop

@section('content')
	<form class="" method="GET" action="{{action('UsersController@index')}}">
          <div class="navbar navbar-left">
            <input type="text" name="searchName" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-primary">Search User</button>
    </form>
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
				@if(Auth::user()->email == 'nico@codeup.com')
					<td>
						<a href="{{action('UsersController@edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
						<a href="{{action('UsersController@destroy', $user->id)}}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				@else
					<td>{{$user->id}}</td>
				@endif

				<td>
				<a href="{{action('UsersController@show', $user->id)}}" title="">
					
					{{$user->name}}
				</a>
				</td>
				<td>{{$user->email}}</td>
			</tr>
		</tbody>
	@endforeach
	</table>

	<div class="text-center">
		{{-- {!! $users->render() !!} --}}

		{!! $users->appends(['searchName' => Request::get('searchName')])->render() !!}
	</div>
@stop