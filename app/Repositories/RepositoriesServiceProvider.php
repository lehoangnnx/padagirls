<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ImagesRepositoryInterface',
            'App\Repositories\Eloquents\ImagesRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\AlbumRepositoryInterface',
            'App\Repositories\Eloquents\AlbumRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CollectionRepositoryInterface',
            'App\Repositories\Eloquents\CollectionRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ImagesCollectionRepositoryInterface',
            'App\Repositories\Eloquents\ImagesCollectionRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ModelRepositoryInterface',
            'App\Repositories\Eloquents\ModelRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CollectionDownloadRepositoryInterface',
            'App\Repositories\Eloquents\CollectionDownloadRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\DownloadRepositoryInterface',
            'App\Repositories\Eloquents\DownloadRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\TagsRepositoryInterface',
            'App\Repositories\Eloquents\TagsRepository'
        );

    }
}
