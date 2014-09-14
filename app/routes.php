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

# Home Route
Route::get('/', function(){ 
	return View::make('pages.home');
});

# Search Route
Route::get('search', function(){
	return View::make('pages.search');
});

# Guzzle Test Route
Route::get('shelf', function(){
	
	$url = "http://api.rottentomatoes.com/api/public/v1.0.json";
	$api_key = "hwxdmu6pu9kjfjm2trkdwsru";

	// Test API call
	$response = GuzzleHttp\get($url . "?apikey=" . $api_key);
	return $response->json();
});
