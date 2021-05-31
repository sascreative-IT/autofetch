<?php

namespace App\Providers;

use App\Repositories\Interfaces\INewsLetterRepository;
use App\Repositories\NewsLetterRepository;
use Illuminate\Support\ServiceProvider;

class NewsLetterRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            INewsLetterRepository::class,
            NewsLetterRepository::class
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
