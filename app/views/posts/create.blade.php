@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h1>Create New Post:</h1>
<br>
<br>
	<form method="POST" enctype="multipart/form-data" action="{{{ action('PostsController@store') }}}">
	 	<div class="form-group">
	    	<label for="title">Title:</label>
	    	<input type="input" class="form-control" id="title" name="title" value="{{{ Input::old('title') }}}">
	 	</div>
	 	<div class="form-group">
	    	<label for="body">Post:</label>
	    	<textarea rows="8" class="form-control" id="body" name="body">{{{ Input::old('body') }}}</textarea>
	 	</div>
	 	<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>


@stop