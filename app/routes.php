<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('orm-test', function() {
    // $post1 = new Post();
    // $post1->title = "Another New Post";
    // $post1->body = "The post that is this post is about posty things.";
    // $post1->save();
});

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('blog/{id}', 'PostsController@show');

Route::resource('blog', 'PostsController@index');

