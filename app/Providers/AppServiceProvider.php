<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        config(['config.currencySymbol' => '$']);
        config(['config.currencyPosition' => 'left']);
        Schema::defaultStringLength('191');
    
    }
}
