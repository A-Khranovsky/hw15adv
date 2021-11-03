<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $parameters = [
            'client_id' => config('oauth.autodesk.client_id'),
            'response_type' => 'code',
            'redirect_uri' => config('oauth.autodesk.call_back'),
            'scope' => 'data:read'
        ];

        View::share(
            'oauth_autodesk_uri',
            'https://developer.api.autodesk.com/authentication/v1/authorize?' . http_build_query($parameters)
        );
    }
}
