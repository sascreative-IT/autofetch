<?php

namespace App\Providers;

use App\Repositories\Interfaces\ISliderRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\ServiceProvider;

class SliderRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ISliderRepository::class,
            SliderRepository::class
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
