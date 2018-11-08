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


Route::get('/', 'View@home');
Route::get('/SeriesList', 'View@SeriesList');
Route::get('/AddSerie', 'View@AddSerie');
Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/updateserie', 'View@updateForm');
Route::post('/updateserieaction', 'Serie@updateOne');
Route::get('/addActor', 'View@AddActor');
Route::post('/insertActor', 'Actor@insertActor');
Route::get('/AddGenre', 'View@AddGenre');
Route::post('/insertGenre', 'Genre@insertGenre');
Route::post('/deleteactor', 'Actor@deleteOne');
Route::post('/updateactor', 'View@updateActor');
Route::post('/updateactoraction', 'Actor@updateActor');
Route::post('/deletegenre', 'Genre@deleteOne');
Route::post('/updategenre', 'View@updateGenre');
Route::post('/updategenreaction', 'Genre@updateGenre');


//Route::post('/updateserie', 'Serie@updateOne');autre méthode
