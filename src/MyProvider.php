<?php

namespace myprovide\myservice;

use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('config').'/helper.php'))
        {
           $this->publishes([__DIR__.'/tools'=>base_path('config')]);
        }     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['MyServiceFacades']=$this->app->share(function(){
            return new MyServiceFacades;
        });
    }
}
