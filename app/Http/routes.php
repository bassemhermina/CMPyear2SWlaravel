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
Route::get('/git/update', function () {
	echo shell_exec('sh /home/bassem/Desktop/Server/Project1/updateGIT.sh');

	// redirects - 3ashan mktebsh el link kol mara
	echo "<br>";
	echo "<h3><a href='http://41.43.53.38:8000/profile'>- Profile</a></h3> ";
});

Route::get('/git/push', function () {
    echo shell_exec('sh /home/bassem/Desktop/Server/Project1/pushGIT.sh');

    // redirects - 3ashan mktebsh el link kol mara
    echo "<br>";
    echo "<h3><a href='http://41.43.53.38:8000/profile'>- Profile</a></h3> ";
});

Route::get('/git/dependencies', function () {
    echo shell_exec('sh /home/bassem/Desktop/Server/Project1/dependenciesGIT.sh');

    // redirects - 3ashan mktebsh el link kol mara
    echo "<br>";
    echo "<h3><a href='http://41.43.53.38:8000/profile'>- Profile</a></h3> ";
});

//----
//steps:
// - ha3ml kol el routes. - done
// - a3ml views 3abita (aw 7ata a-return html buttons) tfaragni el website - mlosh lazma lwa7do
// - a3adi 3lehom b2a wa7ed wa7ed a3ml el functionality
// - 

////////////////////////////// PROFILE ///
Route::get('/profile', function () {
	// this function should return a view with user info and images
	// *need to write a query to get user's name, picture, bio, type (to change the view)
	// 	images, social media link.
	// *and send these as an array of variables to the page
	//  and the page will have all the variables
	//echo "return VIEW of profile";
	echo '<link rel="stylesheet" type="text/css" href="css/profilecss.css">';
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>';
 	echo '<script type="text/javascript" src="js/profilejs.js"></script>';
	return view('profile', ['name' => 'Bassem']);
});

Route::get('/profile/icon', function () {
    //echo "AJAX upload & change profile photo/icon";
    //return view('upload');

    //implemented in route "/uploadfile"
    //uploades files to public/uploads
});

Route::get('/profile/logout', function () {
	//this function should close the session/delete the ID of the user
	//and redirect him to the login page again

    echo "log out and return VIEW of the home page (login - brenda)";
    //return redirect('/login');

});

/////------------- HEREEEEE !! ->


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

//// upload tests
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');


////////////////////////////// ADMIN ///
Route::get('/admin', function () {
    echo "return VIEW of the admin panel, focusing on the users tab";
    echo "with the verify filter selected";
});

Route::get('/admin/users', function () {
    echo "return VIEW of admin panel focusing on the users tab";
    echo "with no filters selected";
});

Route::get('/admin/users/refresh', function () {
    echo "AJAX return all users to refresh the users panel";
});

Route::get('/admin/users/apply', function () {
    echo "AJAX apply all edits on users (ads, ban , ..)";
});

////

Route::get('/admin/announcement', function () {
    echo "return VIEW of admin panel, focusing on the announcement tab";
});

Route::get('/admin/announcement', function () {
    echo "AJAX upload and update announcement";
});

Route::get('/admin/announcement/refresh', function () {
    echo "AJAX get current announcement data";
});
////////////// END OF 'my' ADMIN ROUTES .. /// 
