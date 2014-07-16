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

// All requests with num should be of length 0 or 2
Route::pattern('num', '[0-9]{0,2}');

// Main page
Route::get('/', function()
{
	return View::make('index');
});

// Lorem ipsum
Route::get('lorem-ipsum/{num?}', 'LoremIpsumController@generateLoremIpsum');
// User generator
Route::get('user/{num?}', 'UserController@generateUser');