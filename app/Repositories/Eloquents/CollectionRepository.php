<?php

namespace App\Repositories\Eloquents;

use App\Models\Collection;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class CollectionRepository implements CollectionRepositoryInterface
{
    public function getCollectionAndAlbumAndImagesAndModel()
    {
        return Collection::select('select c.name as name_collection, c.slug as slug_collection, c.discription as discription_collection,
        a.name as album_name, a.slug as album_slug,
        ic.url as url_images_collection, ic.is_cover, (select count(id) from images_collection where id_collection = c.id ) as count,
        m.name as model_name, m.slug as model_slug
        from (select * from collection order by created_at DESC limit 4 ) c 
        inner join album a on c.id_album = a.id
        inner join images_collection ic on c.id = ic.id_collection 
        inner join model_collection  mc on c.id = mc.id_collection 
        inner join model m on m.id = mc.id_model
        where ic.is_cover = 1');;
    }
}