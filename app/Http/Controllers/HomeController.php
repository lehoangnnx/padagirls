<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class HomeController extends Controller
{

    protected $imagesRepository;
    protected $albumRepository;
    protected $collectionRepositoryInterface;
    protected $modelRepositoryInterface;

    public function __construct(ImagesRepositoryInterface $imagesRepository,
    AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface,
    ModelRepositoryInterface $modelRepositoryInterface)
    {
        $this->imagesRepository = $imagesRepository;
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
        $images = $this->imagesRepository->randomPaginate(100);
        return view('page.home')->with('albums', $albums)
        ->with('models', $models)
        ->with('images', $images)
        ->with('collectionAndAlbumAndImagesAndModelLimit', $collectionAndAlbumAndImagesAndModelLimit);
    }
}
