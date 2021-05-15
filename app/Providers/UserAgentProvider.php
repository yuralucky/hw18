<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Yuriy\LibraryUserAgent\JenssegersUserAgent;
use Yuriy\PlainUserAgent\PlainUserAgent;
use Yuriy\UserAgent\UserAgent;

class UserAgentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserAgent::class, function () {
            return new PlainUserAgent();
//            return new JenssegersUserAgent();
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
