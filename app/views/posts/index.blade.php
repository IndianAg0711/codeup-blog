@extends('layouts.master')

@section('title')
<title>Blog Index</title>
@stop

@section('content')
<div class="container-fluid">
<h1>Posts</h1>
<br>
<p><a href=" {{{ action('PostsController@create') }}}">Create New Post</a></p>
<br>
@foreach ($posts as $post)
    <p><a href=" {{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>

    <p>{{{ $post->user->email }}}</p>
@endforeach
<br>
{{ $posts->appends(array('search' => Input::get('search')))->links() }}

	<div>
		{{ Form::open(array('action' => 'PostsController@index', 'method' => 'Get')) }}
		
		<div class="form-group">
			{{ Form::label('search', 'Search') }}
			{{ Form::text('search') }}
		</div>
		<button type="submit">Search</button>
		{{ Form::close() }}
	</div>
</div>



@stop