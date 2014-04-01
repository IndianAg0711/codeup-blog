@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h1>Login:</h1>
<br>
<br>
	<div>
		{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'POST')) }}
		
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		<button type="submit">Submit</button>
		{{ Form::close() }}
	</div>
</div>


@stop