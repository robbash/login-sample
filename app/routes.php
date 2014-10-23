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

Route::group(array('before' => 'auth'), function()
{
  Route::get( '/', [ 'as' => 'dashboard', 'uses' => 'HomeController@showDashboard' ] );
  // ... and other routes

  Route::get( 'logout', [ 'as' => 'logout', 'uses' => 'UserController@logout' ] );
} );

Route::post( 'login', [ 'as' => 'login', 'uses' => 'UserController@checkUserLogin' ] );
Route::get( 'login', [ 'as' => 'login', 'uses' => 'UserController@showLoginForm' ] );

