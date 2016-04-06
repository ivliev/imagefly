<?php

namespace Ivliev\Imagefly;

use Illuminate\Support\ServiceProvider;

class ImageflyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            'vendor/intervention/image/src/config/config.php' => config_path('image.php'),
            __DIR__.'/../../config/imagefly.php' => config_path('imagefly.php')
        ));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Imagefly'];
    }
}
