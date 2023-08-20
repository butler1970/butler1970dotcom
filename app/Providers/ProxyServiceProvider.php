<?php

namespace App\Providers;

use App\Service\ProxyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ProxyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->register(ProxyService::class, function (Application $app) {
            return new ProxyService();
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
