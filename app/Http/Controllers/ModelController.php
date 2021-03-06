<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class ModelController extends Controller
{
    protected $paginationAlbum;
    protected $albumRepository;
    protected $collectionRepositoryInterface;
    protected $modelRepositoryInterface;

    public function __construct(AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface,
    ModelRepositoryInterface $modelRepositoryInterface)
    {
        $this->paginationAlbum = config('constants.PAGINATION_ALBUM');
        $this->albumRepository = $albumRepository;
        $this->collectionRepositoryInterface = $collectionRepositoryInterface;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
    }  

    public function getCollectionByModel($slug){
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collections = $this->collectionRepositoryInterface
        ->getCollectionAndImagesAndModelByModelPaginate($slug, $this->paginationAlbum);
        return view('page.album')->with('albums', $albums)
        ->with('models', $models)
        ->with('collections', $collections);
    }

    public function apiCollectionByModel($slug)
    {
        $collections = $this->collectionRepositoryInterface
        ->getCollectionAndImagesAndModelByModelPaginate($slug, $this->paginationAlbum);
        return response()->json(array('collections'=> $collections), 200);
    }
}
