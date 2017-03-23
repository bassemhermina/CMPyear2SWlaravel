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

///////////////////////////////////////////////
///////////////////////////////////////////////
/// Bassem's Functions ////////////////////////

Route::get('/check', function () {
    echo "Server working correctly .. ";
});
 
// now i can update the server from this link , after pushing to git
Route::get('/updateserver', function () {
	echo shell_exec('sh /home/bassem/Desktop/Server/Project1/updateGIT.sh');
});

//----
//steps:
// - ha3ml kol el routes.
// - a3ml views 3abita (aw 7ata a-return html buttons) tfaragni el website
// - a3adi 3lehom b2a wa7ed wa7ed a3ml el functionality
// - 

////////////////////////////// PROFILE ///
Route::get('/profile', function () {
    echo "return VIEW of profile";
});

Route::get('/profile/icon', function () {
    echo "AJAX upload & change profile photo/icon";
});

Route::get('/profile/logout', function () {
    echo "log out and return VIEW of the home page (login - brenda)";
});

Route::get('/profile/biography', function () {
    echo "AJAX send and updates the biography data on server";
});

Route::get('/profile/social', function () {
    echo "AJAX send and updates the facebook/twitter/.. data on server";
});

Route::get('/profile/upload', function () {
    echo "AJAX upload a new image to my profile";
});

Route::get('/profile/applyedits', function () {
    echo "AJAX send and updates the new images data (tartib, sliders?, grid?, delete ..)";
});
////////////// END OF PROFILE ROUTES .. /// 


////////////////////////////// ADMIN ///
