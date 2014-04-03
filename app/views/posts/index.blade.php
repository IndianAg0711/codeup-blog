@extends('layouts.master')

@section('style')
<style type="text/css">

</style>
@stop

@section('title')
<title>Blog Index</title>
@stop

@section('content')
<div class="container-fluid page">
<h1>Blog About It</h1>
<br>
<br>
@foreach ($posts as $post)
    <p><span id="post-title"><a href=" {{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></span></p>
    <p> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
    <p>Author: {{{ $post->user->email }}}</p>
    <br>
@endforeach
<br>
{{ $posts->appends(array('search' => Input::get('search')))->links() }}

	<div>
		<a href=" {{{ action('PostsController@create') }}}" class="btn btn-success">Create New Post</a>
		<span class="pull-right">{{ Form::open(array('action' => 'PostsController@index', 'method' => 'Get')) }}
		{{ Form::text('search') }}
		<button type="submit">Search</button>
		{{ Form::close() }}</span>
	</div>
</div>



@stop