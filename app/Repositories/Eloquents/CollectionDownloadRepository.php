<?php

namespace App\Repositories\Eloquents;

use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CollectionDownloadRepositoryInterface;

class CollectionDownloadRepository implements CollectionDownloadRepositoryInterface
{

    public function findByCollection($id_collection)
    {
        return DB::table('collection_download')->whereRaw('id_collection = :id_collection and is_show = 1',
         ['id_collection' => $id_collection])->first();
    }

}