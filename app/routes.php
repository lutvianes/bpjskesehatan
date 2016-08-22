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

Route::resource('user', 'UserController', 
	array('except' => array('index', 'create', 'edit', 'destroy')));

Route::resource('faskes', 'FaskesController', 
	array('except' => array('create', 'edit', 'destroy')));

Route::get('faskes/{id}/layanan', 'FaskesController@getLayanan');

Route::resource('layanan', 'LayananController', 
	array('except' => array('index', 'create', 'edit', 'destroy')));
Route::get('/', array('before' => 'auth' ,function()
{
    return 'Hello, '.Auth::user()->email.'!';
}));

Route::get('/login', function()
{
    return View::make('pages.login');
});

Route::get('/user/detail', function()
{
    return View::make('pages.user-detail');
});

Route::get('/user/search', function()
{
    return View::make('pages.user-search');
});

// Pendaftaran
Route::get('/pendaftaran', function()
{
    return View::make('pages.pendaftaran-pasien');
});

Route::get('/pendaftaran/detail', function()
{
    return View::make('pages.pendaftaran-detail');
});

Route::get('/pendaftaran/submit', function()
{
    return View::make('pages.pendaftaran-success');
});

Route::resource('review', 'ReviewController');

Route::get('/rujukan', function()
{
    return View::make('pages.rujukan');
});

Route::get('/rujukan/maps', function()
{
    return View::make('pages.maps');
});
