<?php

namespace App\Repositories\Contracts;

interface ImagesRepositoryInterface
{
    public function all();
    public function randomPaginate($page);
}