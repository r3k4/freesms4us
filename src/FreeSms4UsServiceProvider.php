<?php

namespace App\MyPackages\FreeSms4Us;


use Illuminate\Support\ServiceProvider;

class FreeSms4UsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/FreeSms4UsConfig.php' => config_path('FreeSms4UsConfig.php')]  , 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        // publish config
        $this->publishes([
                __DIR__.'/config/FreeSms4UsConfig.php' => config_path().'/FreeSms4UsConfig.php',
        ]);
        
        //
        $this->app->bind('freesms4us' , function(){
            return new FreeSms4Us;
        });

    }
}
