<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AlbumRepositoryInterface;
use App\Repositories\Contracts\ModelRepositoryInterface;
use App\Repositories\Contracts\DownloadRepositoryInterface;
use App\Repositories\Contracts\CollectionRepositoryInterface;
use App\Repositories\Contracts\ImagesCollectionRepositoryInterface;
use App\Repositories\Contracts\CollectionDownloadRepositoryInterface;
use App\Repositories\Contracts\TagsRepositoryInterface;

class CollectionController extends Controller
{

    protected $albumRepository;
    protected $collectionRepositoryInterface;
    protected $imagesCollectionRepositoryInterface;
    protected $modelRepositoryInterface;
    protected $collectionDownloadRepositoryInterface;
    protected $downloadRepositoryInterface;
    protected $tagsRepositoryInterface;

    public function __construct(AlbumRepositoryInterface $albumRepository,
    CollectionRepositoryInterface $collectionRepositoryInterface,
    ImagesCollectionRepositoryInterface $imagesCollectionRepositoryInterface,
    ModelRepositoryInterface $modelRepositoryInterface,
    CollectionDownloadRepositoryInterface $collectionDownloadRepositoryInterface,
    DownloadRepositoryInterface $downloadRepositoryInterface,
    TagsRepositoryInterface $tagsRepositoryInterface)
    {
        $this->albumRepository = $albumRepository;
        $this->collectionRepositoryInterface = $collectionRepositoryInterface;
        $this->imagesCollectionRepositoryInterface = $imagesCollectionRepositoryInterface;
        $this->modelRepositoryInterface = $modelRepositoryInterface;
        $this->collectionDownloadRepositoryInterface = $collectionDownloadRepositoryInterface;
        $this->downloadRepositoryInterface = $downloadRepositoryInterface;
        $this->tagsRepositoryInterface = $tagsRepositoryInterface;
    }
     

    public function index($slug)
    {
        try {
            $albums = $this->albumRepository->getAllAlbumIsShow();
        $models = $this->modelRepositoryInterface->getModelIsShow();
        $collection = $this->collectionRepositoryInterface->findBySlug($slug);
        $imagesCollection = $this->imagesCollectionRepositoryInterface->findByCollection($collection->id);
        $album = $this->albumRepository->findById($collection->id_album);
        $model = $this->modelRepositoryInterface->findById($collection->id_model);
        $collectionDownload = $this->collectionDownloadRepositoryInterface->getCollectionDownload($collection->id);
        $collectionTags = $this->tagsRepositoryInterface->getTagsByCollection($collection->id);
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
        
        return view('page.detailCollection')->with('albums', $albums)
        ->with('collection', $collection)
        ->with('imagesCollection', $imagesCollection)
        ->with('album', $album)
        ->with('models', $models)
        ->with('model', $model)
        ->with('collectionDownload', $collectionDownload)
        ->with('collectionTags', $collectionTags)
        ->with('previousCollection', $previousCollection)
        ->with('nextCollection', $nextCollection)
        ->with('imagesPreviousCollection', $imagesPreviousCollection)
        ->with('imagesNextCollection', $imagesNextCollection);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
