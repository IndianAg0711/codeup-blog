@extends('layouts.master')

@section('style')

<style>
#box {
	width: 600px;
}
</style>
@stop

@section('content')
<div class="container-fluid page" id="box">
<h1><center>Login:</center></h1>
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