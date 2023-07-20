<?php

namespace App\Providers;

use App\Service\LeadService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class LeadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(LeadService::class, function (Application $app) {
            return new LeadService();
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
