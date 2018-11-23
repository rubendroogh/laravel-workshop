<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', function () {
	return view('contact');
});

// Alle projecten
Route::get('projects', 'ProjectController@index')->name('projects');

// 1 project
Route::get('projects/{id}', 'ProjectController@read')->name('project');

// Haal het formulier op waarmee je projecten aanmaakt
Route::get('projects/create', 'ProjectController@create_project_form')->name('create_project_form');
// Maak het project aan in de database
Route::post('projects/create', 'ProjectController@create')->name('create');
// Haal het formulier op waarmee je projecten update
Route::get('project/{id}/update', 'ProjectController@update_project_form')->name('update_project_form');
// Update een bestaand project
Route::put('project/update', 'ProjectController@update')->name('update');
// Verwijder een project
Route::delete('project/delete', 'ProjectController@delete')->name('delete');
