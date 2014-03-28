<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Save to DB
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Post not created - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();
			Session::flash('successMessage', 'Post created successfully.');
			return Redirect::action('PostsController@index');
		}


		//return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Show a post
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$post = Post::findOrFail($id);
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {

			Session::flash('errorMessage', 'Post not edited - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();
			Session::flash('successMessage', 'Post edited successfully.');
			return Redirect::action('PostsController@show', $id);
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
		//
		$post = Post::findOrFail($id);
		$post->delete();

		return Redirect::action('PostsController@index');
	}

}