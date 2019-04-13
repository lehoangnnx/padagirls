<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class HomeController extends Controller
{

    protected $albumRepository;
    protected $collectionRepositoryInterface;


    public function __construct(AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface)
    {
        $this->albumRepository = $albumRepository;
        $this->collectionRepositoryInterface = $collectionRepositoryInterface;
    } 

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $collectionAndAlbumAndImagesAndModel = $this->collectionRepositoryInterface
        ->getCollectionAndAlbumAndImagesAndModel();
        return view('page.home')->with('albums', $albums)
        ->with('collectionAndAlbumAndImagesAndModel', $collectionAndAlbumAndImagesAndModel);
    }
}
