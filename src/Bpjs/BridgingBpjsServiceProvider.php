<?php

namespace Fikrizabintang\Bpjs;

use Illuminate\Support\ServiceProvider;

class BridgingBpjsServiceProvider extends ServiceProvider
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
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/vclaim.php';
        $this->publishes([
            $configPath => config_path('vclaim.php'),
        ], 'config');
    }
}
