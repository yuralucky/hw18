<?php

namespace App\Providers;

use Hillel\Geo\IpApiGeoService;
use Hillel\Maxmind\MaxmindGeoService;
use Illuminate\Support\ServiceProvider;
use Yuriy\Geo\GeoService;

class GeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeoService::class, function () {
//            return new IpApiGeoService();
            return new MaxmindGeoService();

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
