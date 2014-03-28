@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h1>Create New Post:</h1>
<br>
<br>
	<div>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		
		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
			{{ $errors->has('title') ? $errors->first('title', "<p><span class='help-block'>:message</span></p>") : ''}}
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body') }}
			{{ $errors->has('body') ? $errors->first('body', "<p><span class='help-block'>:message</span></p>") : ''}}
		</div>
		<button type="submit">Update Post</button>
		{{ Form::close() }}
	</div>
</div>


@stop