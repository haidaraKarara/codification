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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AgentController@index')->name('home');
Route::post('/home/creer-batiment','AgentController@createBatiment')->name('createBatiment');
Route::get('/home/creer-batiment','AgentController@afficheFormCreateBati')->name('afficheFormCreateBati');
Route::get('/home/ajout-evenement','EvenementController@index')->name('afficheFormCreateEvenement');
Route::post('/home/ajout-evenement','EvenementController@createEvenement')->name('ajoutEvenement');
