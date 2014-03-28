@extends('layouts.master')

@section('content')
<div class="container-fluid">
<h1>Posts</h1>
<br>
<br>
    <p>{{{ $post->title }}}</p>
    <p>{{{ $post->body }}}</p>
<br>
<br>
<p><a href=" {{{ action('PostsController@edit', $post->id) }}}">Edit Post</a></p>
<p><a href="#" class="btn btn-danger" id="btnDeletePost">Delete Post</a></p>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDeletePost')) }}
{{ Form::close() }}
</div>


@stop

@section('bottom-script')

	<script>
		$('#btnDeletePost').on('click', function(e) {
			e.preventDefault();
			if (confirm("Are you sure you would like to delete this post?")) {
				$('#formDeletePost').submit();
			}
		});
	</script>

@stop
