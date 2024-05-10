<?php

namespace Dcblogdev\Hashnode;

use Illuminate\Support\ServiceProvider;

class HashnodeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configurePublishing();
    }

    public function configurePublishing(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/hashnode.php' => config_path('hashnode.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/hashnode.php', 'hashnode');

        // Register the service the package provides.
        $this->app->singleton('hashnode', function () {
            return new Hashnode;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return ['hashnode'];
    }
}
