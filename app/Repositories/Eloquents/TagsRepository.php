<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\TagsRepositoryInterface;
use Illuminate\Support\Facades\DB;

class TagsRepository implements TagsRepositoryInterface
{

    public function getTagsByCollection($id_collection)
    {
        return DB::table('tags as t')
        ->join('collection_tags as ct', 'ct.id_tags', '=', 't.id')
        ->whereRaw('ct.id_collection = :id_collection and t.is_show = 1', ['id_collection' => $id_collection])
        ->select('t.name as name', 't.slug as slug')->get();
    }

}