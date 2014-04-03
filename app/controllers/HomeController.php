<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{

		if(Input::has('search')) {
			$search = Input::get('search');
			$posts = Post::with('user')->where('title', 'LIKE', "%{$search}%")
							->orWhere('body', 'LIKE', "%{$search}%")
							->orderBy('title', 'asc')
							->paginate(5);
			return View::make('hello')->with('posts', $posts);
		} else {
		$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);
		return View::make('hello')->with('posts', $posts);
		
		}
	}

	public function showResume() 
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    return Redirect::intended('/blog');
		}
		else
		{
		    // login failed, go back to the login screen
		    return Redirect::back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
	
}