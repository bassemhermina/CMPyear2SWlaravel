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


Route::get('/check', function () {
    echo "Server working correctly .. ";
});

// I DID IT ! 
// now i can update the server from this link , after pushing to git
Route::get('/updateServer', function () {
	echo shell_exec('sh /home/bassem/Desktop/Server/Project1/updateGIT.sh');
});

