<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\DownloadRepositoryInterface;
use App\Models\Download;

class DownloadRepository implements DownloadRepositoryInterface
{

    public function findById($id)
    {
        return Download::find($id);
    }

}