<?php

namespace App\Repositories\Eloquents;

use App\Models\Album;
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
}