<?php

namespace App\Providers;



use Hillel\Geo\IpApiGeoService;
use Hillel\Maxmind\MaxmindGeoService;
use Illuminate\Support\ServiceProvider;
use Yuriy\Geo\GeoService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
