<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;

class RandomImagesController extends Controller
{
    protected $paginationRandom;
    protected $imagesRepository;
    protected $albumRepository;
    protected $modelRepositoryInterface;

    public function __construct(
        ImagesRepositoryInterface $imagesRepository,
        AlbumRepositoryInterface $albumRepository,
        ModelRepositoryInterface $modelRepositoryInterface)
    {
        $this->paginationRandom = config('constants.PAGINATION_RANDOM');
        $this->imagesRepository = $imagesRepository;
        $this->albumRepository = $albumRepository;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
    } 

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $images = $this->imagesRepository->randomPaginate($this->paginationRandom);
        return view('page.imageRandom')->with('albums', $albums)
        ->with('models', $models)
        ->with('images', $images);
    }

    public function apiRandom()
    {
        $images = $this->imagesRepository->randomPaginate($this->paginationRandom);
        return response()->json(array('images'=> $images), 200);
    }
}
