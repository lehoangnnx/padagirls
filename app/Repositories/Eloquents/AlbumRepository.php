<?php

namespace App\Repositories\Eloquents;

use App\Models\Album;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\AlbumRepositoryInterface;

class AlbumRepository implements AlbumRepositoryInterface
{
    public function all()
    {
        return Album::all();
    }
    public function getAllAlbumIsShow()
    {
        return Album::where('is_show', 1)->get();
    }
    public function getNameAlbumBySlug($slug){
        return DB::table('album')->select('name')->whereRaw('slug = :slug', ['slug' => $slug])->first();
    }

    public function findById($id){
        return Album::find($id);
    }

}