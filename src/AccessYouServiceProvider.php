<?php

namespace MMHK\AccessYou;

use Illuminate\Support\ServiceProvider;

class AccessYouServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = base_path('config/sms.php');
        if (function_exists('config_path')) {
            $config_path = config_path('sms.php');
        }
        $this->publishes([
            __DIR__.'/config.php' => $config_path
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'sms');
        $this->app->bind('sms', function(){
            return new AccessYou(config('sms'));
        });
    }
}
