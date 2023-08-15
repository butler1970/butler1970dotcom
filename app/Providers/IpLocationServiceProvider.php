<?php

namespace App\Providers;

use App\Service\IpLocationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class IpLocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IpLocationService::class, function (Application $app) {
            return new IpLocationService(config('services.findip.token'));
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
