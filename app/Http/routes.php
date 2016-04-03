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
    return view('welcome');
});

Route::resource('mei/mail', 'MailController');



Route::get('behance.projects', function() {
    //https://api.behance.net/v2/users/natetheaverage/projects?client_id=OYlVWtJWfgjkrpRxNT0hODcsG3oLw3S1
    return 'hi';
});