@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h1>Posts</h1>
<br>
<p><a href=" {{{ action('PostsController@create') }}}">Create New Post</a></p>
<br>
@foreach ($posts as $post)
    <p><a href=" {{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</p>
@endforeach
<br>
{{ $posts->links() }}
</div>


@stop