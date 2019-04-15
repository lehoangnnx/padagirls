<?php

namespace App\Repositories\Eloquents;

use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class CollectionRepository implements CollectionRepositoryInterface
{
    public function getCollectionAndAlbumAndImagesAndModelLimit()
    {
        return DB::select('select c.name as name_collection, c.slug as slug_collection, c.discription as discription_collection,
        a.name as album_name, a.slug as album_slug,
        ic.url as url_images_collection, ic.url_thumbnail as url_thumbnail_images_collection, ic.is_cover, (select count(id) from images_collection where id_collection = c.id ) as count_images,
        m.name as model_name, m.slug as model_slug
        from (select * from collection order by created_at DESC limit 4 ) c 
        inner join album a on c.id_album = a.id
        inner join images_collection ic on c.id = ic.id_collection 
        inner join model m on m.id = c.id_model
        where ic.is_cover = 1');
    }

    public function getAllCollectionAndAlbumAndImagesAndModelPaginate($page)
    {
        return DB::table('collection as c')
        ->join('album as a', 'c.id_album', '=', 'a.id')
        ->join('images_collection as ic', 'c.id', '=', 'ic.id_collection')
        ->join('model as m', 'm.id', '=', 'c.id_model')
        ->groupBy('ic.id_collection')
        ->select('c.name as name_collection', 'c.slug as slug_collection',
        'a.name as album_name', 'a.slug as album_slug',
        'ic.url as url_images_collection', 'ic.url_thumbnail as url_thumbnail_images_collection', DB::raw('COUNT(ic.id) as count_images'),
        'm.name as model_name', 'm.slug as model_slug')->paginate($page);
    }

    public function getCollectionAndImagesAndModelByAlbumPaginate($slug, $page){
        return DB::table('collection as c')
        ->join('album as a', 'c.id_album', '=', 'a.id')
        ->join('images_collection as ic', 'c.id', '=', 'ic.id_collection')
        ->join('model as m', 'm.id', '=', 'c.id_model')
        ->whereRaw('a.slug = :slug', ['slug' => $slug])
        ->groupBy('ic.id_collection')
        ->select('c.name as name_collection', 'c.slug as slug_collection',
        'a.name as album_name', 'a.slug as album_slug',
        'ic.url as url_images_collection', 'ic.url_thumbnail as url_thumbnail_images_collection', DB::raw('COUNT(ic.id) as count_images'),
        'm.name as model_name', 'm.slug as model_slug')->paginate($page);
    }

    public function getCollectionAndAlbumAndImagesAndModelAndDownloadBySlug($slug){
        return DB::table('collection as c')
        ->join('album as a', 'c.id_album', '=', 'a.id')
        ->join('images_collection as ic', 'c.id', '=', 'ic.id_collection')
        ->join('model as m', 'm.id', '=', 'c.id_model')
        ->whereRaw('c.slug = :slug', ['slug' => $slug])
        ->select('c.name as name_collection', 'c.slug as slug_collection',
        'a.name as album_name', 'a.slug as album_slug',
        'ic.url as url_images_collection', 'ic.url_thumbnail as url_thumbnail_images_collection',
        'm.name as model_name', 'm.slug as model_slug')->get();
    }

    public function findBySlug($slug){
        return DB::table('collection')->whereRaw('slug = :slug', ['slug' => $slug])->first();
    }

    public function getPreviousCollection($id_current){
        return DB::table('collection')->whereRaw('id < :id_current', ['id_current' => $id_current])->orderBy('id', 'desc')->first();
    }

    public function getNextCollection($id_current){
        return DB::table('collection')->whereRaw('id > :id_current', ['id_current' => $id_current])->orderBy('id', 'asc')->first();

    }

    public function getFirstCollection(){
        return DB::table('collection')->orderBy('id', 'asc')->first();
    }

    public function getLastCollection(){
        return DB::table('collection')->orderBy('id', 'desc')->first();
    }
}