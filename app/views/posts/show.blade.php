@extends ('layouts.master')

@section('content')
<div class="container-fluid page">
<h1>{{{ $post->title }}}</h1>
<br>
<br>
    <div>{{ $post->body }}</div>
    @if ($post->img_path != null)
    <img src="{{{ $post->img_path }}}">
    @endif
<br>
<br>
<p>
	<a href=" {{{ action('PostsController@edit', $post->id) }}}" class="btn btn-info">Edit Post</a>
	<a href="#" class="btn btn-danger" id="btnDeletePost">Delete Post</a>
</p>

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
