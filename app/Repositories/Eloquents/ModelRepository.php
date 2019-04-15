<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Models\Models;

class ModelRepository implements ModelRepositoryInterface
{

    public function all()
    {
        return Models::all();
    }

    public function getModelIsShow(){
        return Models::where('is_show', 1)->get();
    }

    public function findById($id)
    {
        return Models::find($id);
    }

}