<?php

namespace App\Providers;

use Clickfwd\Yoyo\Yoyo;
use Clickfwd\Yoyo\ViewProviders\BladeViewProvider;
use Illuminate\Support\ServiceProvider;

class YoyoLaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('yoyo', Yoyo::class, function ($app) {
            return new Yoyo($app);
        });    
    }

    public function boot()
    {
        $yoyo = $this->app->make('yoyo');

        $this->app['router']->middleware('web')->any(config('yoyo.route'), function() use ($yoyo) {
          return $yoyo->update();
        });

        $yoyo->configure([
          'url' => config('yoyo.route'),
          'scriptsPath' => config('yoyo.scripts_path').'/',
          'namespace' => config('yoyo.namespace')
        ]);
        
        // Register the native Yoyo view provider 
        // Pass the Yoyo components' template directory path in the constructor
        
        $yoyo->registerViewProvider(function() {
          $blade = new BladeViewProvider($this->app->get('view'));
          $blade->addLocation(resource_path(config('yoyo.resources')));
          return $blade;
        });
    }
}