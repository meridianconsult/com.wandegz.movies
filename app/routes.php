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

# Home
Route::get('/', array('as' => 'home', function(){ return View::make('pages.home'); }));

# About Us
Route::get('about', array('as' => 'about', function(){ return View::make('pages.about'); }) );

# Popular movies
Route::get('popular', array('as' => 'popular', 'uses' => 'RecommendationsEngine@showPopular') );
# Box Office movies
Route::get('latest', array('as' => 'latest', 'uses' => 'RecommendationsEngine@showBoxOffice') );
# Guzzle Test Route
Route::get('shelf', array('as' => 'shelf', 'uses' => 'ShelfController@showAssorted') );

# Search Route
Route::get('search', array('as' => 'search', 'uses' => 'SearchController@showResults') );
