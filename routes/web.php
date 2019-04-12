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

Route::get('/', 'HomeController@index');
Route::get('/random', function () {
    return view('page.imageRandom');
});
Route::get('/album', function () {
    return view('page.imageAlbum');
});
Route::get('/detail', function () {
    return view('page.detailAlbum');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/contact', function () {
    return view('page.contact');
});