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

Route::get('/', function () {
    error_log('got a GET request');
    return view('welcome');
});


Route::get('/bassem', function () {
    echo "hello bassem";
});


Route::get('/updateServer', function () {
	shell_exec("sudo sh -c 'cd Desktop/Server/Project1 && git pull origin master'")
});

