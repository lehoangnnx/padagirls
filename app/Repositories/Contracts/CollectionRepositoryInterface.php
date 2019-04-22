<?php

namespace App\Repositories\Contracts;

interface CollectionRepositoryInterface
{
    public function getCollectionAndAlbumAndImagesAndModelLimit();
    public function getAllCollectionAndAlbumAndImagesAndModelPaginate($page);
    public function getCollectionAndImagesAndModelByAlbumPaginate($slug, $page);
    public function getCollectionAndImagesAndModelByModelPaginate($slug, $page);
    public function getCollectionAndImagesAndModelByTagsPaginate($slug, $page);
    public function getCollectionAndAlbumAndImagesAndModelAndDownloadBySlug($slug);
    public function findBySlug($slug);
    public function getPreviousCollection($id_current);
    public function getNextCollection($id_current);
    public function getFirstCollection();
    public function getLastCollection();
}