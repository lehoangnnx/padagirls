<?php

namespace App\Repositories\Contracts;

interface AlbumRepositoryInterface
{
    public function all();
    public function getAllAlbumIsShow();
    public function getNameAlbumBySlug($slug);
    public function findById($id);
}