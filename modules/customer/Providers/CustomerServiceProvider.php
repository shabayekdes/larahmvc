<?php

namespace Customer\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Customer service provider
 *
 */
class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

    }

}
