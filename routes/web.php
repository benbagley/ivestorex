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

Route::get('/', 'PagesController@index');
Route::get('help', 'PagesController@help');
Route::get('learn', 'PagesController@learn');
Route::get('pricing', 'PagesController@pricing');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@send');

Route::get('/contact/thankyou', function () {
    return view('contact.thankyou');
});
