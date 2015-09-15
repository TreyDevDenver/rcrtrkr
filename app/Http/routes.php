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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers(array(
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
));


Route::get('races', array(
	'as' => 'races',
	'uses' => 'RacesController@index'
));
Route::get('races/visualize/{id}', array(
	'as' => 'race_visualization',
	'uses' => 'RacesController@visualize'
));
Route::get('races/lapgraph/{id}', array(
	'as' => 'race_lapgraph',
	'uses' => 'RacesController@lapgraph'
));
Route::get('races/scatter/{id}', array(
	'as' => 'race_scatter',
	'uses' => 'RacesController@scatter'
));


Route::get('teams', array(
	'as' => 'teams',
	'uses' => 'TeamsController@index'
));
Route::get('racers', array(
	'as' => 'racers',
	'uses' => 'RacersController@index'
));
Route::get('laps', array(
	'as' => 'laps',
	'uses' => 'LapsController@index'
));