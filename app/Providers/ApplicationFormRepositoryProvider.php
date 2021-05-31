<?php

namespace App\Providers;

use App\Repositories\Interfaces\IApplicationFormRepository;
use App\Repositories\ApplicationFormRepository;
use Illuminate\Support\ServiceProvider;

class ApplicationFormRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IApplicationFormRepository::class,
            ApplicationFormRepository::class
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
