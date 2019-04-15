<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ImagesCollectionRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ImagesCollectionRepository implements ImagesCollectionRepositoryInterface
{
    public function findByCollection($id_collection)
    {
        return DB::select('select * from images_collection where id_collection = ? and is_show = 1',
            [$id_collection]);
    }

    public function findOneByCollection($id_collection)
    {
        return DB::table('images_collection')->whereRaw('id_collection = :id_collection and is_show = 1',
            ['id_collection' => $id_collection])->first();
    }

}
