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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
	return view('index');
});

Route::get('/alumni',function(){
	return view('alumni');
});

Route::get('/about',function(){
	return view('about');
});

Route::get('/blog',function(){
	return view('blog');
});

Route::get('/contacts',function(){
	return view('contacts');
});

Route::get('/enroll',function(){
	return view('enroll');
});

Route::get('/gallery',function(){
	return view('gallery');
});

Route::get('/news',function(){
	return view('news');
});
