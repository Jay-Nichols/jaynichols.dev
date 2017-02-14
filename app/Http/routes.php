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

Route::get('/', function() {
    return view('index');
});

Route::get('/contact', function() {
	return view('contact');
});

Route::get('/portfolio', function() {
	return view('portfolio');
});

Route::get('/blog', function() {
	return view('blog');
});

Route::get('/simple-simon', function() {
	return view('simple-simon');
});

Route::get('/calculator', function() {
	return view('calculator');
});

Route::get('/weather-map', function() {
	return view('weather-map');
});
