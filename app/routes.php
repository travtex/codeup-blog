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
    // $post1->title = "Third Seed";
    // $post1->body = "A third post, because I'm looking at two and three-column layouts for the blog.";
    // $post1->save();
});

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::resource('blog', 'PostsController');

