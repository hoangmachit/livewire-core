<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExtentionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        include_once app_path('/Constant/constants.php');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
