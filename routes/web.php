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

/*
Route::get('/hello', function () {
    return "<h1>Zdravo svet!</h1>";
});

Route::get('/users/{id}', function($id){
    return "To je uporabnik " .$id;
});

*/

//To dela z routingom, katera datoteka se more odpreti ob specifičnem URLju
//Kliče se primeren controller

Route::get('/', "PagesController@index");
Route::get('/about', "PagesController@about");
//Route::get('/services', "PagesController@services");

Auth::routes();
Route::resource('FAQ', 'FAQController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings', 'HomeController@settings');
Route::get('/settings/{theme_id}', 'HomeController@updateTheme');