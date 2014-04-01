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

Route::get('/', function()
{
    return View::make('website', array(
	'logged'    => !Auth::guest(),
	'user'	    => Auth::user(),
	'pages'	    => Page::all()
    ));
});

Route::get('/{page_slug}', function($page_slug)
{
    $page = Page::where('slug', $page_slug)->first();
    return $page->body;
});

Route::get('/login', function()
{
    return View::make('login');
});

Route::post('/login', function()
{
    //TODO validation
    Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) );
    return Redirect::to('/');
});