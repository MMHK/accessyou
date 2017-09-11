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
        $this->publishes([
            __DIR__.'/config.php' => config_path('sms.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sms', function(){
            return new AccessYou(\Config::get('sms'));
        });
    }
}
