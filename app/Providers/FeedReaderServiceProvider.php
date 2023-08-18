<?php

namespace App\Providers;

use App\Service\FeedReaderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class FeedReaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(FeedReaderService::class, function (Application $app) {
            return new FeedReaderService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
