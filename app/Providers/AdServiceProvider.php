<?php

namespace App\Providers;

use App\Services\Ad\AdService;
use App\Services\Ad\AdService2;
use App\Services\Ad\AdServiceinterface;
use Illuminate\Support\ServiceProvider;

class AdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdServiceInterface::class, function(){
            return new AdService2();
        });
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
