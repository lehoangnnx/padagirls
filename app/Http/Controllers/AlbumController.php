<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;

class AlbumController extends Controller
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
        $collections = $this->collectionRepositoryInterface
        ->getAllCollectionAndAlbumAndImagesAndModelPaginate(1);
        $titleAlbum = 'Album';
        return view('page.album')->with('albums', $albums)
        ->with('collections', $collections)
        ->with('titleAlbum', $titleAlbum);
    }

    public function getCollectionByAlbum($slug)
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $collections = $this->collectionRepositoryInterface
        ->getCollectionAndImagesAndModelByAlbumPaginate($slug, 1);
        $titleAlbum = $this->albumRepository->getNameAlbumBySlug($slug)->name;
        return view('page.album')->with('albums', $albums)
        ->with('collections', $collections)
        ->with('titleAlbum', $titleAlbum);
    }
}