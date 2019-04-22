<?php

namespace App\Repositories\Contracts;

interface CollectionDownloadRepositoryInterface
{
    public function getCollectionDownload($id_collection);
}