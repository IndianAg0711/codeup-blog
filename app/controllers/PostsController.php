<?php

class PostsController extends \BaseController {


	public function __construct ()
	{
		parent::__construct();

		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user');

		if ($search != null) {
			$posts = $query->where('title', 'LIKE', "%$search%")
				->orWhere('body', 'LIKE', "%$search%")
				->orderBy('created_at', 'desc')
				->paginate(4);
		}	else {			
			$posts = $query->orderBy('created_at', 'desc')->paginate(4);
		}
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate requirements of post before storing
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage', 'Post not created. Please check form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
		} 
		else
		{
			$post = New Post;
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = $post->renderBody(Input::get('body'));

			// Check to see if img was uploaded
			if (Input::hasFile('file_upload'))
				{
					$post->assignImage(Input::file('file_upload'));
				}
			$post->save();
			Session::flash('successMessage', 'Post created successfully!');
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts/show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts/edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage', 'Post not updated. Please check form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
		} 
		else
		{
			$post->title = Input::get('title');
			$post->body = $post->renderBody(Input::get('body'));
			$post->save();
			Session::flash('successMessage', 'Post Updated Successfully!');
			return Redirect::action('PostsController@index');
		}		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::action('PostsController@index');
	}

}