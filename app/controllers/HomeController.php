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
		return View::make('hello');
	}


	public function showResume() 
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function sayHello($name = 'Travis')
	{
	    $data = array(
	        'name' => $name
        );
	    return View::make('my-first-view')->with($data);
	}

	public function rollDice($guess) 
	{
	    $random = rand(1, 6);
	    $message = ($random == $guess) ? "You guessed correctly!  Yay." 
	                                 : "You guessed incorrectly!  Boo.";
	    $data = array(
	        'message' => $message,
	        'guess' => $guess,
	        'roll' => $random
        );
	    return View::make('roll-dice')->with($data);
	}
}