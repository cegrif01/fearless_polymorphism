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
    echo "welcome to the first laravel meetup";
});

Route::get('example_get', 'TransactionsController@example_get');

Route::get('example_post', 'TransactionsController@example_post');

Route::resource('users', 'UsersController');

Route::resource('accounts', 'AccountsController');