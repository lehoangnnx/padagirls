<?php

namespace App\Repositories\Contracts;

interface CollectionDownloadRepositoryInterface
{
    public function findByCollection($id_collection);
}