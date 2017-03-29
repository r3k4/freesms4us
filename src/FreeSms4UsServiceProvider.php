<?php

namespace R3k4\FreeSms4Us;


use Illuminate\Support\ServiceProvider;
use R3k4\FreeSms4Us\FreeSms4Us;

class FreeSms4UsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/FreeSms4UsConfig.php' => config_path('FreeSms4UsConfig.php')]  , 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        // merge config
        $configFile = config_path('FreeSms4UsConfig.php');
        if(file_exists($configFile))
        {
            $this->mergeConfigFrom($configFile , 'config');
        }else{
            $this->mergeConfigFrom(__DIR__.'/config/FreeSms4UsConfig.php', 'config');
        }


        //
        $this->app->bind('freesms4us' , function(){
            return new FreeSms4Us;
        });

    }
}
