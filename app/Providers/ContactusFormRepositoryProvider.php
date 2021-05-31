<?php

namespace App\Providers;

use App\Repositories\Interfaces\IContactusFormRepository;
use App\Repositories\ContactusFormRepository;
use Illuminate\Support\ServiceProvider;

class ContactusFormRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IContactusFormRepository::class,
            ContactusFormRepository::class
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
