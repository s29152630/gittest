@extends('layout/default')

@section('content')
	<h1>Create new user</h1>

	{{ Form::open(['route'=>'user.store']) }}

	<div>
		{{ Form::label('userid', 'UserID: ') }}
		{{ Form::input('text', 'userid') }}
		{{ $errors->first('userid') }} 
		<!-- first()是幹嘛? -->
		<!-- {{ Form::text('username') }} -->
	</div>

	<div>
		{{ Form::label('fullname', 'Fullname: ') }}
		{{ Form::text('fullname') }}
		{{ $errors->first('fullname') }}
	</div>

	<div>
		{{ Form::submit('Create user') }}
	</div>


	{{ Form::close() }}
@stop