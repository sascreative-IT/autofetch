<?php

namespace App\Providers;
use App\Repositories\Interfaces\IPageRepository;
use App\Repositories\PageRepository;
use Illuminate\Support\ServiceProvider;

class PageRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IPageRepository::class,
            PageRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
