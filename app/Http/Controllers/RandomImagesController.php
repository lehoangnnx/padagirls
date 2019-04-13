<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ImagesRepositoryInterface;

class RandomImagesController extends Controller
{
    protected $imagesRepository;
    protected $albumRepository;


    public function __construct(
        ImagesRepositoryInterface $imagesRepository,
        AlbumRepositoryInterface $albumRepository)
    {
        $this->imagesRepository = $imagesRepository;
        $this->albumRepository = $albumRepository;
    } 

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $images = $this->imagesRepository->randomPaginate(20);
        return view('page.imageRandom')->with('albums', $albums)
        ->with('images', $images);
    }
}
