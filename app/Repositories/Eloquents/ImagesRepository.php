<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ImagesRepositoryInterface;
use App\Models\Images;

class ImagesRepository implements ImagesRepositoryInterface
{
    public function all()
    {
        return Images::all();
    }

    public function randomPaginate($page)
    {
        return Images::inRandomOrder()->paginate($page);
    }

}