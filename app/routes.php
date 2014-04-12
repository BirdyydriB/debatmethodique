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
    return Redirect::to('/acceuil');
});

Route::get('/{page_slug}', function($page_slug)
{
    $currentPage = Page::where('slug', $page_slug)->first();
    
    return View::make('page', array(
        'currentPage'   => $currentPage,
        'logged'        => !Auth::guest(),
	'user'          => Auth::user(),
	'pages'         => Page::all()
                            ->sortBy('rank')
                            ->lists('title', 'slug')
    ));
});

Route::get('/getPageContent/{page_slug}', function($page_slug)
{
    $currentPage = Page::where('slug', $page_slug)->first();
    return View::make('pageContent', array('currentPage' => $currentPage));
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