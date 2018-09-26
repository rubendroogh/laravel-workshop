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

// 
// Hiero wordt rechtstreeks een view opgehaald bij 'http://portfolioworkshop.local/contact'
// De view staat in 'resources/views' als 'contact.blade.php'
// 
Route::get('/contact', function () {
    return view('contact');
});

// 
// Hier wordt de route via de controller gedaan. Dit houd in dat de functie 'index' in de PortfolioController wordt uitgevoerd
// De controller is te vinden in 'app/Http/Controller' als 'PortfolioController.php'
// 
Route::get('/portfolio', 'PortfolioController@index');