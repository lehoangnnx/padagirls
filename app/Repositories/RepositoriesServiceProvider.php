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

    }
}
