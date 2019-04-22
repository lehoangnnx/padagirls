<?php

namespace App\Repositories\Eloquents;

use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CollectionDownloadRepositoryInterface;

class CollectionDownloadRepository implements CollectionDownloadRepositoryInterface
{

    public function getCollectionDownload($id_collection)
    {
        return DB::table('collection_download as cd')
        ->join('download as d', 'cd.id_download', '=', 'd.id')
        ->whereRaw('cd.id_collection = :id_collection and cd.is_show = 1', ['id_collection' => $id_collection])
        ->select('cd.shortened_url as shortened_url',
        'd.name as name')->get();
    }

}