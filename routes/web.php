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



Auth::routes();
Route::get('/', 'ClientController@getUsers')->middleware('auth');
Route::get('/index', 'ClientController@getUsers')->middleware('auth');
Route::get('/add', 'ClientController@getAdd')->middleware('auth');
Route::post('/index' , 'ClientController@postAdd')->middleware('auth');
Route::get('/client/fiche/{id}', 'ClientController@getFiche')->middleware('auth');
Route::get('/client/fiche/modif/{id}', 'ClientController@getClientModif')->middleware('auth');
Route::post('/client/fiche/modif/{id}', 'ClientController@postClientModif')->middleware('auth');
Route::post('/client/fiche/btndelete/{id}', 'ClientController@btndelete')->middleware('auth');
Route::get('/client/add/heure/{id}', 'ClientController@getClientAddHeure')->middleware('auth');
Route::post('/client/add/heure/{id}', 'ClientController@postClientModifHeure')->middleware('auth');
Route::post('/client/fiche/btnnhr/{id}', 'ClientController@heuremoins')->middleware('auth');
