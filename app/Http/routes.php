<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/portfolio', 'PortfolioController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/simple-simon', function() {
	return view('simple-simon');
});

Route::get('/calculator', function() {
	return view('calculator');
});

Route::get('/weather-map', function() {
	return view('weather-map');
});
