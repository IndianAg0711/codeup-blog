@extends ('layouts.master')

@section('top-script')
<script src="/ckeditor/ckeditor.js"></script>
@stop

@section('content')
<div class="container-fluid page">
<h1>Create New Post:</h1>
<br>
<br>
	<div>
		{{ Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'files' => true)) }}
		
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
		<div>
			{{ Form::label('file_upload', 'Upload a Pic?') }}
			{{ Form::file('file_upload') }}
		</div>
		<br>
		<button type="submit">POST</button>
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