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
//Authentifiaction
Auth::routes();

Route::get('/home','AgentController@index')->name('home');
// Les batiments
Route::post('/home/creer-batiment','AgentController@createBatiment')->name('createBatiment');
Route::get('/home/creer-batiment','AgentController@afficheFormCreateBati')->name('afficheFormCreateBati');
Route::get('/home/liste-batiment','AgentController@showBatiment')->name('showBatiment');
//Les événements
Route::get('/home/ajout-evenement','EvenementController@index')->name('afficheFormCreateEvenement');
Route::post('/home/ajout-evenement','EvenementController@createEvenement')->name('ajoutEvenement');
//Les batiments
Route::get('/home/supprimer-batiment','AgentController@showFormDeleteBatiment')->name('showFormDeleteBatiment');
Route::post('/home/supprimer-batiment','AgentController@deleteBatiment')->name('deleteBatiment');
//Les étages
Route::get('/home/ajout-etage','EtageController@showFormAjoutEtage')->name('showFormAjoutEtage');
Route::post('/home/ajout-etage','EtageController@createEtage')->name('createEtage');
