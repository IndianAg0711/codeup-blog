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
	return View::make('hello');
});

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', function($name)
{
	return View::make('my-first-view')->with('name', $name);
});

Route::get('rolldice/{guess?}', function($guess = null)
{
	$die = rand(1,6);
	$data = [
			'die' => $die,
			'guess' => $guess
			];

	return View::make('dice')->with($data);
});