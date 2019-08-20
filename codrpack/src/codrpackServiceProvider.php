<?php

namespace codebriefly\codrpack;

use Illuminate\Support\ServiceProvider;

class codrpackServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'codebriefly');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'codebriefly');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/codrpack.php', 'codrpack');

        // Register the service the package provides.
        $this->app->singleton('codrpack', function ($app) {
            return new codrpack;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['codrpack'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/codrpack.php' => config_path('codrpack.php'),
        ], 'codrpack.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/codebriefly'),
        ], 'codrpack.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/codebriefly'),
        ], 'codrpack.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/codebriefly'),
        ], 'codrpack.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
