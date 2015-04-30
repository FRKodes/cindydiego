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

Route::get('/', 'PagesController@index');
Route::get('recomendaciones', 'PagesController@recomendaciones');
Route::get('mesa-de-regalos', 'PagesController@mesa');
Route::get('rsvp', 'PagesController@rsvp');
Route::post('sendmail', 'PagesController@sendmail');
Route::get('mapas', 'PagesController@mapas');
Route::get('programa', 'PagesController@programa');
