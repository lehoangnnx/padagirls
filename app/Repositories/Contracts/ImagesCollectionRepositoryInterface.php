<?php

namespace App\Repositories\Contracts;

interface ImagesCollectionRepositoryInterface
{
    public function findByCollection($id_collection);
    public function findOneByCollection($id_collection);
}