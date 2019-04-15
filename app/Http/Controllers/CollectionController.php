<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\DownloadRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;
use App\Repositories\Contracts\ImagesCollectionRepositoryInterface;
use App\Repositories\Contracts\CollectionDownloadRepositoryInterface;

class CollectionController extends Controller
{
    protected $albumRepository;
    protected $collectionRepositoryInterface;
    protected $imagesCollectionRepositoryInterface;
    protected $modelRepositoryInterface;
    protected $collectionDownloadRepositoryInterface;
    protected $downloadRepositoryInterface;

    public function __construct(AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface,
    ImagesCollectionRepositoryInterface $imagesCollectionRepositoryInterface,
    ModelRepositoryInterface $modelRepositoryInterface,
    CollectionDownloadRepositoryInterface $collectionDownloadRepositoryInterface,
    DownloadRepositoryInterface $downloadRepositoryInterface)
    {
        $this->albumRepository = $albumRepository;
        $this->collectionRepositoryInterface = $collectionRepositoryInterface;
        $this->imagesCollectionRepositoryInterface = $imagesCollectionRepositoryInterface;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
        $this->collectionDownloadRepositoryInterface = $collectionDownloadRepositoryInterface;
        $this->downloadRepositoryInterface = $downloadRepositoryInterface;
    } 

    public function index($slug)
    {
        $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collection = $this->collectionRepositoryInterface->findBySlug($slug);
        $imagesCollection = $this->imagesCollectionRepositoryInterface->findByCollection($collection->id);
        $album = $this->albumRepository->findById($collection->id_album);
        $model = $this->modelRepositoryInterface->findById($collection->id_model);
        $collectionDownload = $this->collectionDownloadRepositoryInterface->findByCollection($collection->id);
        $download = $this->downloadRepositoryInterface->findById($collectionDownload->id_download);
        $previousCollection = $this->collectionRepositoryInterface->getPreviousCollection($collection->id);
        $nextCollection = $this->collectionRepositoryInterface->getNextCollection($collection->id);
        if($previousCollection === null){
            $previousCollection = $this->collectionRepositoryInterface->getLastCollection($collection->id);
        }
        if($nextCollection === null){
            $nextCollection = $this->collectionRepositoryInterface->getFirstCollection($collection->id);
        }
        $imagesPreviousCollection = $this->imagesCollectionRepositoryInterface->findOneByCollection($previousCollection->id);
        $imagesNextCollection = $this->imagesCollectionRepositoryInterface->findOneByCollection($nextCollection->id);        
        $imagesCover = '';
        foreach ($imagesCollection as $item) {
            if($item->is_show === 1){
                $imagesCover = $item->url;
                break;
            }
        }
        return view('page.detailCollection')->with('albums', $albums)
        ->with('collection', $collection)
        ->with('imagesCollection', $imagesCollection)
        ->with('album', $album)
        ->with('models', $models)
        ->with('model', $model)
        ->with('collectionDownload', $collectionDownload)
        ->with('download', $download)
        ->with('previousCollection', $previousCollection)
        ->with('nextCollection', $nextCollection)
        ->with('imagesPreviousCollection', $imagesPreviousCollection)
        ->with('imagesNextCollection', $imagesNextCollection)
        ->with('imagesCover', $imagesCover);
    }
}
