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

// Application routes...
Route::get('/', 'FrontendController@renderHome');

Route::get('about', function () {
    return view('about');
});
Route::get('portfolio', 'FrontendController@renderPortfolio');
Route::get('portfolio/{project_slug}', 'ProjectsController@show');
Route::get('contact', function () {
    return view('contact');
});

// Authentication routes...
Route::get('login', 'FrontendController@renderLoginWrap');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');


// Admin routes...
Route::group(['middleware' => ['auth', 'csrf'], 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@render');
    Route::resource('projects', 'ProjectsController');
    Route::get('projects/{project_slug}/edit', 'ProjectsController@edit');
    Route::post('projects/{project_slug}/edit', 'ProjectsController@update');
    Route::get('projects/{project_slug}/delete', 'ProjectsController@destroy');
});

// API routes...
Route::group(['middleware' => 'auth', 'prefix' => 'api'], function() {
    Route::get('/projects', 'ProjectsController@index');
    Route::post('/change_featured', 'AdminController@changeFeatured');
});
