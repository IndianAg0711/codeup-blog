@extends('layouts.master')

@section('top-script')
<script src="/ckeditor/ckeditor.js"></script>
@stop

@section('content')
<div class="container-fluid page">
<h1>Edit Post:</h1>
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
			{{ Form::textarea('body', null, array('id' => 'editor')) }}
			{{ $errors->has('body') ? $errors->first('body', "<p><span class='help-block'>:message</span></p>") : ''}}
		</div>
		<button type="submit">Update Post</button>
		{{ Form::close() }}
	</div>
</div>


@stop

@section('bottom-script')
	<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor');
    </script>
@stop