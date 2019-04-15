<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;

class RandomImagesController extends Controller
{
    protected $imagesRepository;
    protected $albumRepository;
    protected $modelRepositoryInterface;

    public function __construct(
        ImagesRepositoryInterface $imagesRepository,
        AlbumRepositoryInterface $albumRepository,
        ModelRepositoryInterface $modelRepositoryInterface)
    {
        $this->imagesRepository = $imagesRepository;
        $this->albumRepository = $albumRepository;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
    } 

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $images = $this->imagesRepository->randomPaginate(20);
        return view('page.imageRandom')->with('albums', $albums)
        ->with('models', $models)
        ->with('images', $images);
    }
}
