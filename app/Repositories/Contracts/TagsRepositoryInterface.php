<?php

namespace App\Repositories\Contracts;

interface TagsRepositoryInterface
{
    public function getTagsByCollection($id_collection);
}