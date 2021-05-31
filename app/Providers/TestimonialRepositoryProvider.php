<?php

namespace App\Providers;
use App\Repositories\Interfaces\ITestimonialRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Support\ServiceProvider;

class TestimonialRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ITestimonialRepository::class,
            TestimonialRepository::class
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
