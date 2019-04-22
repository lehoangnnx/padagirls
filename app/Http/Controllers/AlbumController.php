<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class AlbumController extends Controller
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

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collections = $this->collectionRepositoryInterface
        ->getAllCollectionAndAlbumAndImagesAndModelPaginate(8);
        return view('page.album')->with('albums', $albums)
        ->with('models', $models)
        ->with('collections', $collections);
    }

    public function apiAlbum()
    {
        $collections = $this->collectionRepositoryInterface
        ->getAllCollectionAndAlbumAndImagesAndModelPaginate($this->paginationAlbum);
        return response()->json(array('collections'=> $collections), 200);
    }

    public function getCollectionByAlbum($slug)
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collections = $this->collectionRepositoryInterface
        ->getCollectionAndImagesAndModelByAlbumPaginate($slug, $this->paginationAlbum);
        return view('page.album')->with('albums', $albums)
        ->with('models', $models)
        ->with('collections', $collections);
    }

    public function apiCollectionByAlbum($slug)
    {
        $collections = $this->collectionRepositoryInterface
        ->getCollectionAndImagesAndModelByAlbumPaginate($slug, $this->paginationAlbum);
        return response()->json(array('collections'=> $collections), 200);
    }
}
