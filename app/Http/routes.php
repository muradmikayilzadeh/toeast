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

Route::get('/alumni','AlumniController@getAlumnies');

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

Route::get('/gallery','ImgController@getGallery');

Route::get('/news','BlogController@getBlogs');
Route::get('/news/{slug}','BlogController@getBlog');
Route::get('/search/','BlogController@search');


Route::post('/enroll/submit','EnrollController@newRegister');


// Admin
Route::group(['middleware' => ['auth']],function(){

	Route::post('create-news','BlogController@createBlog');
	Route::post('news/','BlogController@createBlog');
	Route::post('/news/update-img','BlogController@updateImg');
	Route::post('/news/update-content','BlogController@updateContent');
	Route::post('/news/update-title','BlogController@updateTitle');
	Route::post('/news/delete','BlogController@delete');

	Route::post('/gallery/picture-upload','ImgController@addPictures');

	Route::post('/alumni/add-alumni','AlumniController@addAlumni');
	Route::post('/alumni/delete-alumni','AlumniController@deleteAlumni');

});
