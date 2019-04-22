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

Route::get('/collection/{slug}', 'CollectionController@index')->name('detailCollection');

Route::get('/random', 'RandomImagesController@index')->name('random');
Route::get('/api/random', 'RandomImagesController@apiRandom')->name('apiRandom');

Route::get('/album', 'AlbumController@index')->name('album');
Route::get('/api/album', 'AlbumController@apiAlbum')->name('apiAlbum');

Route::get('/album/{slug}', 'AlbumController@getCollectionByAlbum')->name('collectionByAlbum');
Route::get('/api/album/{slug}', 'AlbumController@apiCollectionByAlbum')->name('apiCollectionByAlbum');

Route::get('model/{slug}', 'ModelController@getCollectionByModel')->name('collectionByModel');
Route::get('/api/model/{slug}', 'ModelController@apiCollectionByModel')->name('apiCollectionByModel');

Route::get('/tags/{slug}', 'TagsController@getCollectionByTags')->name('tags');
Route::get('/api/tags/{slug}', 'TagsController@apiCollectionByTags')->name('apiTags');

// Route::get('/detail', function () {
//     return view('page.detailAlbum');
// });
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/contact', function () {
    return view('page.contact');
});