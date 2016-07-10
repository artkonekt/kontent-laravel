<?php
/**
 * Contains the KontentServiceProvider.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2016-05-21
 *
 */


namespace Konekt\Kontent\Laravel;

use Illuminate\Support\ServiceProvider;

class KontentServiceProvider extends ServiceProvider
{

    /** @var bool Indicates for the service container to only load it upon actual request to it */
    protected $defer = true;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Post-registration booting
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

}