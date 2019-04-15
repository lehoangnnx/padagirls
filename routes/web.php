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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/random', 'RandomImagesController@index')->name('random');
Route::get('/album', 'AlbumController@index')->name('album');
Route::get('/album/{slug}', 'AlbumController@getCollectionByAlbum')->name('collectionByAlbum');
Route::get('/{slug}', 'CollectionController@index')->name('detailCollection');
Route::get('model/{slug}', 'ModelController@getModelBySlug')->name('modelBySlug');
// Route::get('/detail', function () {
//     return view('page.detailAlbum');
// });
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/contact', function () {
    return view('page.contact');
});