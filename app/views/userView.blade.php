@extends('layout/default')
@section('content')
		<h1>All user</h1>	

		{{--	dd($users)->toArray()  --}}


	@if($users->count())

		@foreach ($users as $user)
			<li>{{ link_to('/user/{$user->userid}', $user->userid) }}</li>
		@endforeach

	@else
		<p>no users</p>
	@endif
@stop