<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class HomeController extends Controller
{

    protected $albumRepository;
    protected $collectionRepositoryInterface;
    protected $modelRepositoryInterface;

    public function __construct(AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface,
    ModelRepositoryInterface $modelRepositoryInterface)
    {
        $this->albumRepository = $albumRepository;
        $this->collectionRepositoryInterface = $collectionRepositoryInterface;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
    } 

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collectionAndAlbumAndImagesAndModelLimit = $this->collectionRepositoryInterface
        ->getCollectionAndAlbumAndImagesAndModelLimit();
        return view('page.home')->with('albums', $albums)
        ->with('models', $models)
        ->with('collectionAndAlbumAndImagesAndModelLimit', $collectionAndAlbumAndImagesAndModelLimit);
    }
}
